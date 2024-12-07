<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Jewellery;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Models\Ring;
use App\Services\ProductListServices;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth'); 
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products =  ProductListServices::getProductList('8');
        $latest_product =  ProductListServices::getLatestProduct('12');

        // Fetch most viewed products, limiting to 10 for example
        $mostViewedProducts = Jewellery::orderBy('views', 'desc')->take(10)->get();

        // Get the most sold jewellery products by counting the number of times each product_id has been ordered
        $mostSoldJewellery = OrderItem::select('product_id')
            ->where('product_type', 'jewellery') // Filter by jewellery type
            ->groupBy('product_id')
            ->orderByRaw('COUNT(*) DESC') // Order by the number of times the product has been ordered
            ->take(10) // Limit to top 10 most sold items
            ->get();

        // Fetch product details for each jewellery item
        $mostSoldJewelleryProducts = $mostSoldJewellery->map(function ($item) {
            $jewellery = Jewellery::find($item->product_id); // Fetch jewellery products
            return $jewellery;
        })->filter(function ($item) {
            return $item !== null;
        });


        $blogs = Blog::latest()->limit(5)->get();
        // dd($latest_product);
        return view('index', compact('products', 'latest_product', 'mostViewedProducts', 'blogs', 'mostSoldJewelleryProducts'));
    }



    public function showProductsByCategory(Request $request, $productId)
    {


        // Get filters from request or use defaults from session if available
        $filters = $request->only(['gender', 'jewellery_type', 'price_range', 'sort_by']);

        // Merge new filters with existing session filters
        $sessionFilters = session()->get('product_filters', []);
        $filters = array_merge($sessionFilters, array_filter($filters));

        // Update session with the current filters
        session()->put('product_filters', $filters);


        $query = Jewellery::with('images');

        // Apply category filter only if $productId is provided
        if (!empty($productId)) {
            $query->where('category_id', $productId);
        }

        $gender = $request->input('gender');
        $jewellery_type = $request->input('jewellery_type');
        $price_range = $request->input('price_range');
        $price_range = $request->input('price_range');
        $sort_by = $request->input('sort_by');

        // Apply filters to the query
        if (!empty($filters['gender'])) {
            $query->where('gender', $filters['gender']);
        }

        if (!empty($filters['jewellery_type'])) {
            $query->where('jewellery_type', $filters['jewellery_type']);
        }

        if (!empty($filters['price_range'])) {
            $priceRange = explode('-', $filters['price_range']);
            if (count($priceRange) === 2) {
                $query->whereBetween('price', [trim($priceRange[0]), trim($priceRange[1])]);
            }
        }

        if (!empty($filters['sort_by'])) {
            switch ($filters['sort_by']) {
                case 'name':
                    $query->orderBy('name');
                    break;
                case 'price':
                    $query->orderBy('price');
                    break;
                case 'viewed':
                    $query->orderBy('viewed', 'desc');
                    break;
                case 'latest':
                default:
                    $query->orderBy('created_at', 'desc');
                    break;
            }
        }


        $products = $query->paginate(6);
        // Fetch most viewed products, limiting to 10 for example
        $mostViewedProducts = Jewellery::orderBy('views', 'desc')->take(10)->get();

        $blogs = Blog::latest()->limit(5)->get();


        return view('shops', compact('products', 'filters', 'productId', 'blogs', 'mostViewedProducts'));
    }

    public function browseCollection(Request $request)
    {


        // Get filters from request or use defaults from session if available
        $filters = $request->only(['gender', 'jewellery_type', 'price_range', 'sort_by']);

        // Merge new filters with existing session filters
        $sessionFilters = session()->get('product_filters', []);
        $filters = array_merge($sessionFilters, array_filter($filters));

        // Update session with the current filters
        session()->put('product_filters', $filters);


        $query = Jewellery::with('images');


        $gender = $request->input('gender');
        $jewellery_type = $request->input('jewellery_type');
        $price_range = $request->input('price_range');
        $price_range = $request->input('price_range');
        $sort_by = $request->input('sort_by');

        // Apply filters to the query
        if (!empty($filters['gender'])) {
            $query->where('gender', $filters['gender']);
        }

        if (!empty($filters['jewellery_type'])) {
            $query->where('jewellery_type', $filters['jewellery_type']);
        }

        if (!empty($filters['price_range'])) {
            $priceRange = explode('-', $filters['price_range']);
            if (count($priceRange) === 2) {
                $query->whereBetween('price', [trim($priceRange[0]), trim($priceRange[1])]);
            }
        }

        if (!empty($filters['sort_by'])) {
            switch ($filters['sort_by']) {
                case 'name':
                    $query->orderBy('name');
                    break;
                case 'price':
                    $query->orderBy('price');
                    break;
                case 'viewed':
                    $query->orderBy('viewed', 'desc');
                    break;
                case 'latest':
                default:
                    $query->orderBy('created_at', 'desc');
                    break;
            }
        }



        $products = $query->paginate(20);

        // Fetch most viewed products, limiting to 10 for example
        $mostViewedProducts = Jewellery::orderBy('views', 'desc')->take(10)->get();

        $blogs = Blog::latest()->limit(5)->get();


        return view('browse-collection', compact('products', 'blogs', 'mostViewedProducts'));
    }

    public function clearFilters(Request $request)
    {
        $productId = $request->query('productId');


        session()->forget('product_filters');
        return redirect()->route('shops.category', ['productId' => $productId]);
    }
    public function clearFiltersBrowseCollection()
    {


        session()->forget('product_filters');
        return redirect()->route('browse.collection');
    }



    public function contactUs()
    {
        return view('pages.contactus');
    }

    public function aboutUs()
    {
        $blogs = Blog::latest()->limit(5)->get();
        return view('pages.aboutus', compact('blogs'));
    }

    public function privacyPolicy()
    {
        return view('pages.privacyPolicy');
    }

    public function termsCondition()
    {
        return view('pages.termsCondition');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function createRing()
    {
        $blogs = Blog::latest()->limit(5)->get();
        return view('create-ring', compact('blogs'));
    }
    public function createDiamond()
    {
        return view('create-diamond');
    }

    public function viewDiamondReport()
    {
        return view('diamond-report.diamond-report');
    }

    public function fetchReport(Request $request)
    {
        $reportNumber = $request->input('report_number');
        $apiUrl = "https://api.igi.org/ReportDetail.php?Printno={$reportNumber}";

        try {
            $contextOptions = [
                "http" => [
                    "header" => "YOUR-SECRET-KEY: your-secret-value\r\nContent-Type: application/json\r\n"
                ]
            ];
            $context = stream_context_create($contextOptions);
            $response = file_get_contents($apiUrl, false, $context);

            if ($response === FALSE) {
                throw new \Exception("Failed to retrieve report data.");
            }

            $data = json_decode($response, true);
            return response()->json($data);
        } catch (\Exception $e) {
            Log::error("Error fetching report data: " . $e->getMessage());
            return response()->json(['error' => 'An error occurred while retrieving the report'], 500);
        }
    }
}
