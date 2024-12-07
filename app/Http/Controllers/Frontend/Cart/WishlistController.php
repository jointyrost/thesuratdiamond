<?php

namespace App\Http\Controllers\Frontend\Cart;

use App\Http\Controllers\Controller;
use App\Models\Diamond;
use App\Models\Jewellery;
use App\Models\Ring;
use Illuminate\Http\Request;
use App\Services\WishlistService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class WishlistController extends Controller
{
    public function index()
    {
        if (!auth()->check()) {

            Session::flash('info', __('messages.login_to_add_wishlist'));
            return redirect('/');
        }

        $userType = Auth::user() ? auth()->user()->userType : null; // Get user type
        $wishlistItems = WishlistService::getWishlistItems();

        // Prepare an array to store wishlist items with additional product details
        $wishlist = [];

        // Loop through each wishlist item to fetch additional product details
        foreach ($wishlistItems as $item) {
            $productDetails = null;

            // Determine which table to query based on product_type
            switch ($item->product_type) {
                case 'ring':
                    $productDetails = Ring::find($item->product_id);
                    break;

                case 'diamond':
                    $productDetails = Diamond::find($item->product_id);
                    break;

                case 'jewellery':
                    $productDetails = Jewellery::with('images')->find($item->product_id);
                    break;
            }

            // Add product details to the wishlist item if found
            if ($productDetails) {
                $wishlist[] = [
                    'id' => $item->id,
                    'user_id' => $item->user_id,
                    'product_id' => $item->product_id,
                    'product_type' => $item->product_type,
                    'user_type' => $userType,
                    'product_details' => $productDetails, // Add the product details here
                ];
            }
        }

        // dd($wishlist);

        return view('wishlist', compact('wishlist'));
    }

    public function addToWishlist(Request $request)
    {
        if (!auth()->check()) {
            return response()->json([
                'info' => true,
                'message' => __('messages.login_to_add_wishlist')
            ]);
        }
        $productId = $request->input('product_id');
        $product_type = $request->input('product_type');
        // Log::debug('kamtoi', $product_type);
        $response = WishlistService::addToWishlist($productId, $product_type);

        return response()->json($response);
    }

    public function removeFromWishlist(Request $request)
    {

        $productId = $request->input('product_id');
        $response = WishlistService::removeFromWishlist($productId);
        return response()->json($response);
    }
}
