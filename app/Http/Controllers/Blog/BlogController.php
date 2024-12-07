<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Jewellery;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {

        // Fetch blogs with pagination
        $blogs = Blog::latest()->get(); // Fetch 10 blogs per page, sorted by latest
        return view('admin.blog.index', compact('blogs'));
        // return view('blog.index');
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        // Validate form inputs
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'para1' => 'required|string',
            'heading' => 'nullable|string|max:255',
            'para2' => 'nullable|string',
            'para3' => 'nullable|string',
            'comment' => 'nullable|string',
            'category' => 'nullable|string',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $data = $request->only(['title', 'name', 'para1', 'heading', 'para2', 'para3', 'comment', 'category']);

        // Handle file upload for image1
        if ($request->hasFile('image1')) {
            $image1Name = 'image1_' . time() . '.' . $request->file('image1')->getClientOriginalExtension();
            $image1Path = $request->file('image1')->storeAs('images/blogs', $image1Name, 'public');
            $data['image1'] = $image1Path;
        }

        // Handle file upload for image2
        if ($request->hasFile('image2')) {
            $image2Name = 'image2_' . time() . '.' . $request->file('image2')->getClientOriginalExtension();
            $image2Path = $request->file('image2')->storeAs('images/blogs', $image2Name, 'public');
            $data['image2'] = $image2Path;
        }


        // Save blog data to the database
        Blog::create($data);

        // Redirect with a success message
        return redirect()->route('blogs.index')->with('success', 'Blog created successfully');
    }

    public function show(Blog $blog)
    {

        $blog = Blog::find($blog->id);
        return view('admin.blog.show', compact('blog'));
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        Session::flash('success', 'Blog Delete Successfully.');
        return redirect()->route('blogs.index');
    }

    public function showBlogList(Request $request)
    {
        // Check if a category filter is applied
        $category = $request->input('category');

        if ($category) {
            $blogs = Blog::where('category', $category)
                ->orderBy('created_at', 'desc')
                ->paginate(2); // Adjust the number as needed
        } else {
            // Retrieve all blog posts if no category is specified
            $blogs = Blog::orderBy('created_at', 'desc')->paginate(2);
        }
        // Retrieve the latest blog posts for the "Latest Posts" sidebar widget
        $latestPosts = Blog::orderBy('created_at', 'desc')->limit(5)->get();

        // Check if there are recently viewed products in the session
        $recentViewedIds = session()->get('recently_viewed', []);

        if (count($recentViewedIds) > 0) {
            // Get recently viewed products
            $recentViewedProducts = Jewellery::with('images')
                ->whereIn('id', $recentViewedIds)
                ->get();
        } else {
            // Get random products if there are no recently viewed items
            $recentViewedProducts = Jewellery::inRandomOrder()->limit(5)->get();
        }

        // Pass the data to the view
        return view('blog.index', [
            'blogs' => $blogs,
            'latestPosts' => $latestPosts,
            'recentViewedProducts' => $recentViewedProducts,
        ]);
    }

    public function showSingleBlog($id)
    {
        // Fetch the blog by its ID
        $blog = Blog::findOrFail($id);
        $url = url('blogs/' . $id); // Generates the full URL to the blog post

        $blog['para1'] = Str::markdown($blog->para1);
        $blog['para2'] = Str::markdown($blog->para2);
        $blog['para3'] = Str::markdown($blog->para3);

        // Retrieve the latest blog posts for the "Latest Posts" sidebar widget
        $latestPosts = Blog::orderBy('created_at', 'desc')->limit(5)->get();

        // Check if there are recently viewed products in the session
        $recentViewedIds = session()->get('recently_viewed', []);

        if (count($recentViewedIds) > 0) {
            // Get recently viewed products
            $recentViewedProducts = Jewellery::with('images')
                ->whereIn('id', $recentViewedIds)
                ->get();
        } else {
            // Get random products if there are no recently viewed items
            $recentViewedProducts = Jewellery::inRandomOrder()->limit(5)->get();
        }

        // Fetch related blogs (e.g., by category or tags)
        $relatedBlogs = Blog::where('category', $blog->category)
            ->where('id', '!=', $id)
            ->take(4)
            ->get();

        $reviews = Review::where('product_id', $blog->id)
            ->where('product_type', 'blog') // Replace with dynamic type if needed
            ->get();
        // Pass the blog data to the view
        return view('blog.showSinglePost', compact('blog', 'url', 'latestPosts', 'recentViewedProducts', 'relatedBlogs', 'reviews'));
    }
}
