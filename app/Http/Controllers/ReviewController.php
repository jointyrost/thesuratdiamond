<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create(Request $request)
    {


        // Validate incoming request data
        // $request->validate([
        //     'product_id'   => 'required',  // You can change the validation rule according to your needs
        //     'product_type' => 'required|string|in:ring,diamond,jewellery,blog',
        //     'rating'        => 'required|integer|min:1|max:5',
        //     'name'          => 'required|string|max:255',
        //     'email'         => 'required|email',
        //     'comment'       => 'nullable|string',
        // ]);

        $product_id = $request->input('product_id');
        $product_type = $request->input('product_type');
        $rating = $request->input('rating');
        $name = $request->input('name');
        $email = $request->input('email');
        $comment = $request->input('comment');


        // Store the review in the database
        Review::create([
            'product_id'    => $product_id,
            'product_type'  => $product_type,
            'name'          => $name,
            'email'         => $email,
            'comment'       => $comment,
            'rating'        => $rating,
        ]);

        // Optionally, redirect back with a success message
        return redirect()->back()->with('success', 'Your review has been submitted!');
    }
}
