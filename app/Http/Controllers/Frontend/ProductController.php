<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Diamond;
use App\Models\Jewellery;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\Ring;
use Illuminate\Support\Carbon;

class ProductController extends Controller
{
    public function searchProduct(Request $request)
    {

        if ($request->name) {
            $data = Jewellery::select('name', 'stone_image', 'setting_image', 'slug')
                ->where('name', 'LIKE', $request->name . '%')
                ->orderBy('name', 'asc')
                ->get();

            return response()->json($data);
        }
    }

    public function productDetails($slug)
    {
        $products = Jewellery::with('images')
            ->where('id', $slug)
            ->first();
        $category_id = $products->category_id;

        $products->incrementViews(); // Increment view count

        if (!$products) {
            abort(404); // Handle case where product is not found
        }

        // Store the product ID in the session for recently viewed products
        $recentlyViewed = session()->get('recently_viewed', []);

        // Check if the product ID is not already in the session to avoid duplicates
        if (!in_array($products->id, $recentlyViewed)) {
            $recentlyViewed[] = $products->id;
            session()->put('recently_viewed', $recentlyViewed);
        }

        $relatedProducts = Jewellery::with('images')
            ->where('category_id', $category_id)
            ->take(12) // or ->limit(12)
            ->get();

        // Calculate delivery dates
        $firstDeliveryDate = Carbon::now()->addDays(7)->format('M d'); // 7 days from today
        $secondDeliveryDate = Carbon::now()->addDays(10)->format('M d'); // 10 days from today

        $reviews = Review::where('product_id', $products->id)
            ->where('product_type', 'jewellery') // Replace with dynamic type if needed
            ->get();

        $blogs = Blog::latest()->limit(5)->get();

        return view('product-details', compact('products', 'relatedProducts', 'firstDeliveryDate', 'secondDeliveryDate', 'reviews', 'blogs'));
    }

    public function loadDiamondModal($id)
    {
        $product = Ring::find($id);


        if ($product) {
            // Render the modal view with the product data and return it as HTML
            $modalHtml = view('modal.product-view', compact('product'))->render();
            return response()->json(['html' => $modalHtml]);
        }

        // If the product is not found, return a 404 message
        return response()->json(['html' => 'Product not found'], 404);
    }
    public function productView($slug)
    {

        if ($slug) {
            $products = Jewellery::with('images')->where('slug', 'LIKE', '%' . $slug . '%')
                ->orderBy('name', 'asc')
                ->first();
        } else {
            $products = collect([]);
        }

        return view('modal.product-view', compact('products'));
    }
}
