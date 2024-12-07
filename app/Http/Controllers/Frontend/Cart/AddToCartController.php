<?php

namespace App\Http\Controllers\Frontend\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Diamond;
use App\Models\Jewellery;
use App\Models\Ring;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\NullableType;

class AddToCartController extends Controller
{

    public function viewCart()
    {
        if (!auth()->check()) {

            Session::flash('info', __('messages.login_to_add_cart'));
            return redirect('/');
        }
        $cartDetails = getCartDetails();

        // dd($cartDetails);

        // Log::debug('meki', $cartDetails);
        return view('cart', compact('cartDetails'));
    }

    public function createCartForAjax(Request $request)
    {
        DB::beginTransaction();

        try {
            // Check if the user is authenticated
            if (!auth()->check()) {
                return response()->json([
                    'success' => false,
                    'info' => true,
                    'message' => __('messages.login_to_add_cart')
                ], 403); // 403 Forbidden status code for unauthenticated access
            }

            $userId = auth()->user()->id;
            $ringId = $request->input('ringId');
            $diamondId = $request->input('diamondId');
            $jewelleryId = $request->get('product_id');
            $jewelleryQuantity = $request->get('quantity');
            $cart = Cart::firstOrCreate(['user_id' => $userId]);

            // Check if the ring is already in the cart
            $ringItem = $cart->cartItems()
                ->where('product_id', $ringId)
                ->where('product_type', 'ring')
                ->first();
            if ($ringItem) {
                return response()->json([
                    'success' => false,
                    'info' => true,
                    'message' => __('messages.item_exists_cart', ['type' => 'Ring'])
                ], 200);
            }

            // Check if the diamond is already in the cart
            $diamondItem = $cart->cartItems()
                ->where('product_id', $diamondId)
                ->where('product_type', 'diamond')
                ->first();
            if ($diamondItem) {
                return response()->json([
                    'success' => false,
                    'info' => true,
                    'message' => __('messages.item_exists_cart', ['type' => 'Diamond'])
                ], 200);
            }

            // Check if the jewellery is already in the cart
            $jewelleryItem = $cart->cartItems()
                ->where('product_id', $jewelleryId)
                ->where('product_type', 'jewellery')
                ->first();

            if ($jewelleryItem) {
                return response()->json([
                    'success' => false,
                    'info' => true,
                    'message' => __('messages.item_exists_cart', ['type' => 'Jewellery'])
                ], 200);
            }

            // Add items to the cart based on the type
            if ($jewelleryId) {
                $this->addCartItems([
                    'product_id' => $jewelleryId,
                    'product_type' => 'jewellery',
                    'quantity' => $jewelleryQuantity,
                ], $cart->id);
            }

            if ($diamondId) {
                $this->addCartItems([
                    'product_id' => $diamondId,
                    'product_type' => 'diamond',
                    'quantity' => 1
                ], $cart->id);
            }

            if ($ringId) {
                $this->addCartItems([
                    'product_id' => $ringId,
                    'product_type' => 'ring',
                    'quantity' => 1
                ], $cart->id);
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => __('messages.items_added_cart')
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'An error occurred: ' . $e->getMessage(),
            ], 500);
        }
    }


    public function createCart(Request $request)
    {

        DB::beginTransaction();

        try {
            if (!auth()->check()) {
                return redirect()->back()->with([
                    'info' => "login to add to cart",
                    'message' => "login to add to cart"
                ]);
            }

            $userId = auth()->user()->id;
            $ringId = $request->input('ringId');
            $ringSize = $request->input('ringSize');
            $diamondId = $request->input('diamondId');
            $jewelleryId = $request->get('product_id');
            $jewelleryQuantity = $request->get('quantity');
            $cart = Cart::firstOrCreate(['user_id' => $userId]);


            // Check for existing ring in the cart
            $ringItem = $cart->cartItems()
                ->where('product_id', $ringId)
                ->where('product_type', 'ring')
                ->where('ring_size', $ringSize)
                ->first();


            if ($ringItem) {
                return redirect()->back()->with([
                    'info' => __('messages.item_exists_cart'),
                    'message' => __('messages.item_exists_cart', ['type' => 'Ring']),
                ]);
            }

            // Check for existing diamond in the cart
            $diamondItem = $cart->cartItems()
                ->where('product_id', $diamondId)
                ->where('product_type', 'diamond')
                ->first();

            if ($diamondItem) {
                return redirect()->back()->with([
                    'info' => __('messages.item_exists_cart'),
                    'message' => __('messages.item_exists_cart', ['type' => 'Diamond']),
                ]);
            }

            // check for existing jewellery in the cart

            $jewelleryItem = $cart->cartItems()
                ->where('product_id', $jewelleryId)
                ->where('product_type', 'jewellery')
                ->first();



            if ($jewelleryItem) {

                return redirect()->back()->with([
                    'info' => __('messages.item_exists_cart'),
                    'message' => __('messages.item_exists_cart', ['type' => 'Jewellery']),
                ]);
            }



            // Add the ring item to the cart

            if ($ringId) {

                $this->addCartItems([
                    'product_id' => $ringId,
                    'product_type' => 'ring',
                    'quantity' => 1,
                ], $cart->id, $ringSize);
            }

            if ($jewelleryId) {

                $this->addCartItems([
                    'product_id' => $jewelleryId,
                    'product_type' => 'jewellery',
                    'quantity' => $jewelleryQuantity,

                ], $cart->id);
            }

            if ($diamondId) {

                $this->addCartItems([
                    'product_id' => $diamondId,
                    'product_type' => 'diamond',
                    'quantity' => 1
                ], $cart->id);
            }





            DB::commit();

            log::debug('samto');
            return redirect()->back()->with([
                'success' => __('messages.items_added_cart'),
                'message' => __('messages.items_added_cart'),
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'An error occurred: ' . $e->getMessage(),
            ], 500);
        }
    }

    protected function addCartItems(array $data, int $cartId, $ringSize = null)
    {
        $productId = $data['product_id'];
        $productType = $data['product_type'];
        $quantity = $data['quantity'];
        $productPrice = 100;


        // Check if the product exists based on product type
        if ($productType == 'ring') {
            $productExists = Ring::find($productId);
        } elseif ($productType == 'diamond') {
            $productExists = Diamond::find($productId);
        } elseif ($productType == 'jewellery') {

            $productExists = Jewellery::find($productId);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Invalid product type',
            ], 400);
        }


        // If product doesn't exist, return an error
        if (!$productExists) {
            // Log::debug('rato', $productExists);

            return response()->json([
                'success' => false,
                'message' => 'Product not found',
            ], 404);
        }

        // Find existing cart item
        $existingItem = CartItem::where('cart_id', $cartId)
            ->where('product_id', $productId)
            ->where('product_type', $productType) // Ensure product type matches
            ->first();


        if ($existingItem) {
            $existingItem->quantity += $quantity;
            return $existingItem->save();
        } else {
            // Create new cart item


            return CartItem::create([
                'cart_id' => $cartId,
                'product_id' => $productId,
                'product_type' => $productType,
                'product_price' => $productPrice,
                'quantity' => $quantity,
                'ring_size' => $ringSize
            ]);
        }
    }



    public function checkCart(Request $request)
    {
        // $userId = $request->get('user_id');
        // $productId = $request->input('product_id'); 
        // $cart = Cart::where('user_id', $userId)->first();

        // if ($cart) {
        //     $cartItem = $cart->items()->where('product_id', $productId)->first(); 
        //     return true;
        // }

    }

    public function updateQuantity(Request $request)
    {

        // dd($request);
        $quantity = $request->input('quantity');
        $cart_item_id = $request->input('cart_item_id');
        // $cart_item_id = $request->input('product_type');
        $cartItem = CartItem::where('id', $cart_item_id)->first();
        // Log::debug('kamto', $cart_item_id);
        // Log::debug('kamto', $quantity);

        if ($cartItem) {
            $cartItem->quantity = $quantity;
            $cartItem->save();
            return response()->json([
                'success' => true,
                'message' => 'Cart item updated successfully!',
            ]);
        }
        return response()->json([
            'success' => false,
            'message' => 'Item not found in cart.',
        ]);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }

    public function getItemTotal()
    {
        if (!auth()->check()) {
            return response()->json(['total' =>  0]);
        } else {

            $userId = auth()->user()->id;
            $cart = Cart::where('user_id', $userId)->first();
            if (!$cart) {
                return response()->json(['total' => 0]);
            }
            $cartTotal = CartItem::where('cart_id', $cart->id)->count();
            return response()->json(['total' => $cartTotal]);
        }
    }

    public function clearCart(Request $request)
    {
        $userId = auth()->id();
        $cart = Cart::where('user_id', $userId)->first();
        if ($cart) {
            $cartItems = CartItem::where('cart_id', $cart->id)->delete();
            if ($cartItems) {
                return response()->json([
                    'success' => true,
                    'message' => __('messages.clear_added_cart')
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => __('messages.no_items_cart')
                ]);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => __('messages.no_items_cart')
            ]);
        }
    }

    public function removeFromCartItem(Request $request)
    {

        $cart_item_id = $request->input('cart_item_id');
        $userId = getUserId();

        $user = User::find($userId);

        $cart = $user->cart;

        Log::debug('User Cart', ['cart' => $cart]);

        $cartItem = CartItem::where('cart_id', $cart->id)
            ->where('id', $cart_item_id)
            ->first();

        if ($cartItem) {
            $cartItem->delete();
            return response()->json([
                'success' => true,
                'message' => "Items has been successfully removed!",
            ]);
        }
        return response()->json([
            'success' => false,
            'message' => "Items does not found in Cart!",
        ]);
    }
}
