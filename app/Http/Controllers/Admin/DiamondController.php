<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDiamondRequest;
use App\Models\Jewellery;
use App\Models\Ring;
use App\Models\Diamond;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DiamondController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $diamonds = Diamond::all();
        return view('admin.diamond.index',  compact('diamonds'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $shapes = DB::table('shapes')->get()->toArray();
        $metal_types = DB::table('metal_types')->get()->toArray();
        $setting_styles = DB::table('setting_styles')->get()->toArray();
        $band_types = DB::table('band_types')->get()->toArray();
        $setting_profiles = DB::table('setting_profiles')->get()->toArray();
        $stone_types = DB::table('stone_types')->get()->toArray();
        $jewellery = Jewellery::all();
        return view('admin.diamond.create', compact('shapes', 'metal_types', 'setting_styles', 'band_types', 'setting_profiles', 'stone_types', 'jewellery'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

        // Validate form inputs
        $validated = $request->validate([
            'stoneType' => 'required',
            'diamond_category' => 'nullable',
            'process' => "nullable",
            'name' => 'required|string|max:255',
            'product_id' => 'required|string|max:50',
            'shape' => 'required',
            'lab' => 'nullable',
            'color_category' => 'required',
            'd_to_z_selection' => 'nullable',
            'general_options' => 'nullable',
            'fancy_color' => 'nullable',
            'fancy_intensity' => 'nullable',
            'treated_color' => 'nullable',
            'price_per_carat' => 'required|numeric',
            'stone_user_price' => 'required|numeric',
            'stone_wholesaler_price' => 'nullable|numeric',
            'size_type' => 'nullable|string',
            'stone_clarity' => 'nullable|string',
            'stone_carat' => 'nullable|numeric',
            'natts' => 'nullable|string',
            'cut' => 'nullable|string',
            'polish' => 'nullable',
            'symmetry' => 'nullable',
            'link' => 'nullable|url', // Validation for the link field

            'fluorescence' => 'nullable|string',
            'length' => 'nullable|numeric',
            'width' => 'nullable|numeric',
            'depth' => 'nullable|numeric',
            'table' => 'nullable|numeric',
            'terms' => 'nullable|string',
            'remarks' => 'nullable|string',
            'generalSize' => 'nullable|string',
            'stone_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle file upload if image is provided
        if ($request->hasFile('stone_image')) {
            $stoneImageName = 'stone_image_' . time() . '.' . $request->stone_image->getClientOriginalExtension();
            $stoneImagePath = $request->file('stone_image')->storeAs('images/diamond', $stoneImageName, 'public');
            $validated['stone_image'] = $stoneImagePath;
        }

        // Create the Diamond record
        $diamond = Diamond::create($validated);

        if ($diamond) {
            return redirect()->route('diamond.index')->with('success', 'Diamond created successfully!');
        } else {
            return redirect()->back()->with('error', 'Something went wrong while creating the diamond.');
        }
    }

    public function showDiamond(Request $request)
    {

        $id = $request->query('id');
        $stoneType = $request->query('stoneType');
        $stoneShape = $request->query('stoneShape');
        $colorStart = $request->query('colorStart');
        $colorEnd = $request->query('colorEnd');
        $clarityStart = $request->query('clarityStart');
        $clarityEnd = $request->query('clarityEnd');
        $cutStart = $request->query('cutStart');
        $cutEnd = $request->query('cutEnd');
        $caratStart = $request->query('caratStart');
        $caratEnd = $request->query('caratEnd');
        $priceStart = $request->query('priceStart');
        $priceEnd = $request->query('priceEnd');
        $depthStart = $request->query('depthStart');
        $depthEnd = $request->query('depthEnd');
        $lengthWidthStart = $request->query('lengthWidthStart');
        $lengthWidthEnd = $request->query('lengthWidthEnd');
        $tableStart = $request->query('tableStart');
        $tableEnd = $request->query('tableEnd');


        $query = Diamond::query();

        if ($id) {
            $query->where('id', $id);
        }
        if ($stoneType) {
            $query->where('stoneType', $stoneType);
        }

        if ($stoneShape) {
            $query->where('shape', $stoneShape);
        }

        // Log::debug('checkpart', $stoneShape);

        $clarityLevels = ['HPK', 'PK', 'I3', 'I2', 'I1', 'SI3', 'SI2', 'SI1', 'VS2', 'VS1', 'VVS2', 'VVS1', 'IF', 'FL'];

        // Apply clarity range filter
        if ($clarityStart && $clarityEnd) {

            $startIndex = array_search($clarityStart, $clarityLevels);
            $endIndex = array_search($clarityEnd, $clarityLevels);

            if ($startIndex !== false && $endIndex !== false && $startIndex <= $endIndex) {

                $clarityRange = array_slice($clarityLevels, $startIndex, $endIndex - $startIndex + 1);

                // Apply whereIn with the subset of clarity values
                $query->whereIn('stone_clarity', $clarityRange);
            }
        }

        $colorLevels = ['Z', 'Y', 'X', 'W', 'V', 'U', 'T', 'S', 'R', 'Q', 'P', 'O', 'N', 'M', 'L', 'K', 'J', 'I', 'H', 'G', 'F', 'E', 'D'];

        if ($colorStart && $colorEnd) {

            $startIndex = array_search($colorStart, $colorLevels);
            $endIndex = array_search($colorEnd, $colorLevels);

            if ($startIndex !== false && $endIndex !== false && $startIndex <= $endIndex) {

                $colorRange = array_slice($colorLevels, $startIndex, $endIndex - $startIndex + 1);

                // Apply whereIn with the subset of clarity values
                $query->whereIn('d_to_z_selection', $colorRange);
            }
        }

        if ($priceStart && $priceEnd) {

            $priceStart = str_replace('$', '', $priceStart);
            $priceEnd = str_replace('$', '', $priceEnd);


            if (Auth::user() && auth()->user()->userType == config('constants.USER_TYPES.WHOLESALER')) {
                $query->whereBetween('stone_wholesaler_price', [$priceStart, $priceEnd]);
            } else {
                $query->whereBetween('stone_user_price', [$priceStart, $priceEnd]);
            }
        }

        if ($caratStart && $caratEnd) {
            $query->whereBetween(DB::raw('CAST(stone_carat AS DECIMAL(10, 2))'), [$caratStart, $caratEnd]);
        }



        $cutLevels = ['3EX', 'EX-', 'VG+', 'VG-', 'Excellent', 'Ideal'];

        // dd($cutEnd, $cutStart);

        if ($cutStart && $cutEnd) {
            $cutLevels = ['3EX', 'EX-', 'VG+', 'VG-', 'Excellent', 'Ideal'];
            $startIndex = array_search($cutStart, $cutLevels);
            $endIndex = array_search($cutEnd, $cutLevels);

            if ($startIndex !== false && $endIndex !== false && $startIndex <= $endIndex) {
                $cutRange = array_slice($cutLevels, $startIndex, $endIndex - $startIndex + 1);

                $query->whereIn('cut', $cutRange);
            }
        }



        if ($depthStart && $depthEnd) {

            $depthStart = str_replace('%', '', $depthStart);
            $depthEnd = str_replace('%', '', $depthEnd);


            $query->whereRaw('(depth / width) * 100 BETWEEN ? AND ?', [$depthStart, $depthEnd]);
        }

        if ($tableStart && $tableEnd) {

            $tableStart = str_replace('%', '', $tableStart);
            $tableEnd = str_replace('%', '', $tableEnd);

            // Log::debug("eml", [$tableStart, $tableEnd]);

            $query->whereRaw('(`table` / width) * 100 BETWEEN ? AND ?', [$tableStart, $tableEnd]);
        }


        if ($lengthWidthStart && $lengthWidthEnd) {
            $query->whereRaw('(length / width) BETWEEN ? AND ?', [$lengthWidthStart, $lengthWidthEnd]);
        }
        if ($request->has('sort')) {
            switch ($request->input('sort')) {
                case 'name':
                    $query->orderBy('name');
                    break;
                case 'price':
                    if (Auth::user() && auth()->user()->userType == config('constants.USER_TYPES.WHOLESALER')) {
                        $query->orderBy('stone_wholesaler_price');
                    } else {
                        $query->orderBy('stone_user_price');
                    }
                    break;
                default:
                    $query->latest(); // Default to sorting by latest
                    break;
            }
        }

        $filteredProducts = $query->get();


        return response()->json($filteredProducts);
    }

    /**
     * Display the specified resource.
     */
    public function show(Diamond $diamond)
    {
        $diamond = Diamond::find($diamond->id);
        return view('admin.diamond.show', compact('diamond'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
