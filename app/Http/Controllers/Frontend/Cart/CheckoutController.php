<?php

namespace App\Http\Controllers\Frontend\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ring;
use App\Models\Cart;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {

        // dd($request);

        if (!auth()->check()) {
            Session::flash('info', __('messages.login_to_add_cart'));
            return redirect('/');
        }

        $cart = Cart::where('user_id', auth()->user()->id)->first();
        if (!$cart) {
            Session::flash('info', __('messages.empty_cart_items'));
            return redirect('/');
        }
        $cart_id = $cart->id;
        $cartItems = getCartDetails();

        // dd($cartItems);
        // dd($cartItems);
        $totalAmount = $cartItems['total_amount'];
        // dd($cartItems);
        $productCount = $cartItems['product_count'];


        $data =  [
            'cart_items' => $cartItems['cart_items'],
            'total_amount' => $totalAmount,
            'product_count' => $productCount,
        ];

        // dd($data['cart_items']);

        $user = getCurrentUserDetails();
        // dd($user);
        $userInfo = $user['details']['user'];
        $userAddress = $user['details']['address'];


        // dd($user);
        return view('checkout', compact('userInfo', 'userAddress', 'data', 'cart_id'));
    }

    public function submitCheckout(Request $request)
    {
        $name = $request->input('name');
        $country_code = $request->input('country_code');
        $country_id = $request->input('country_id');
        $payment_currency = $request->input('payment_currency');
        $subTotal = $request->get('subTotal');
        $before_shipping = $request->get('subTotal');
        $mobile_number = $request->input('mobile_number');
        $email = $request->input('email');
        $state = $request->input('state');
        $city = $request->input('city');
        $street_address = $request->input('street_address');
        $delivery_date = Carbon::now();
        // Adjust subtotal based on country_id
        if ((int)$country_id === 6) {
            $delivery_date->addDays(19); // Add 19 days for country_id = 6
            $subTotal += 0; // Adjust this value as per your requirement

        } else {
            $subTotal += 0; // Adjust this value as per your requirement
            $delivery_date->addDays(31); // Add 31 days for other countries
        }


        // Perform currency conversion if needed
        if ($payment_currency === "INR") {
            try {
                // Fetch the conversion rate from USD to INR
                $url = 'https://v6.exchangerate-api.com/v6/3cdddafbb17fdd8a0e35ea49/latest/USD';
                $response = file_get_contents($url);

                if ($response === FALSE) {
                    throw new \Exception("Failed to fetch conversion rate.");
                }

                $data = json_decode($response, true);

                if (isset($data['conversion_rates']['INR'])) {
                    $conversionRate = $data['conversion_rates']['INR'];
                    $subTotalInINR = $subTotal * $conversionRate;
                    $beforeShippingInINR = $before_shipping * $conversionRate;
                    $subTotal = $subTotalInINR; // Update subtotal with converted amount
                    $before_shipping = $beforeShippingInINR; // Update subtotal with converted amount
                } else {
                    throw new \Exception("Conversion rate for INR not found.");
                }
            } catch (\Exception $e) {
                // Handle exception (e.g., log the error)
                \Log::error("Currency conversion error: " . $e->getMessage());
                return response()->json(['error' => 'Currency conversion failed'], 500);
            }
        }

        // Validate that the country_id exists in the countries table
        $countryExists = DB::table('countries')->where('id', $country_id)->exists();

        if (!$countryExists) {
            return response()->json(['error' => 'Invalid country ID provided.'], 400);
        }

        // Insert order details into the orders table
        $orderId = DB::table('orders')->insertGetId([
            'user_id' => auth()->user()->id,
            'order_number' => uniqid('ORDER_'),
            'total' => $subTotal, // Assuming some total amount
            'status' => 'pending',
            'payment_status' => 'pending',
            'name' => $name,
            'country_code' => $country_code,
            'country_id' => $country_id,
            'payment_currency' => $payment_currency,
            'mobile_number' => $mobile_number,
            'email' => $email,
            'state' => $state,
            'city' => $city,
            'street_address' => $street_address,
            'delivery_date' => $delivery_date,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $productIds = $request->input('product_id');
        $ringSize = $request->input('ring_size');
        $quantity = $request->input('quantity');
        $prices = $request->input('price');
        $productTypes = $request->input('product_type'); // Assuming this is in the request

        foreach ($productIds as $index => $productId) {
            DB::table('order_items')->insert([
                'order_id' => $orderId,
                'product_id' => $productId,
                'product_type' => $productTypes[$index], // Store product type
                'quantity' => $quantity[$index],
                'price' => $prices[$index],
                'ring_size' => $ringSize[$index],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $cart = Cart::where('id', $request->get('cart_id'))->first();
        $cart->cartItems()->delete();
        $cart->delete();
        session()->put('order_details', [
            'order_id' => $orderId,
            'total_amount' => $subTotal,
            'payment_currency' => $payment_currency,
            'before_shipping' => $before_shipping
        ]);

        return redirect()->route('payment.page');
    }
}
