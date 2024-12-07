    <?php


    use App\Models\Ring;
    use Illuminate\Support\Facades\Auth;
    use App\Models\Cart;
    use App\Models\CartItem;
    use App\Models\Country;
    use App\Models\Jewellery;

    if (!function_exists('getUserId')) {
        function getUserId()
        {
            if (Auth::guard('admin')->check()) {
                return Auth::guard('admin')->user()->id;
            } else {
                if (auth()->check()) {
                    return auth()->user()->id;
                } else {
                    return false;
                }
            }
        }
    }
    if (!function_exists('getUserType')) {
        function getUserType()
        {
            if (auth()->user()->userType == $type) {
                return true;
            }
            return false;
        }
    }
    if (!function_exists('getCurrentUserDetails')) {
        function getCurrentUserDetails()
        {
            if (auth()->check()) {
                $user = auth()->user();
                $address = $user->address()->first();
                return [
                    'type' => 'user',
                    'details' => [
                        'user' => $user,
                        'address' => $address
                    ]
                ];
            } else {
                return false; // No user is logged in
            }
        }
    }

    if (!function_exists('getCartDetails')) {
        function getCartDetails()
        {
            $userId = getUserId();
            $userType = Auth::user() ? auth()->user()->userType : null; // Get user type
            $cart = Cart::where('user_id', $userId)->first();

            // If no cart found, return empty data
            if (!$cart) {
                return [
                    'cart_items' => [],
                    'cart_id' => null,
                    'total_amount' => 0,
                    'product_count' => 0,
                ];
            }



            // Get cart items with dynamic product details
            $cartItems = $cart->cartItems()
                ->leftJoin('rings', function ($join) {
                    $join->on('cart_items.product_id', '=', 'rings.id')
                        ->where('cart_items.product_type', '=', 'ring');
                })
                ->leftJoin('diamonds', function ($join) {
                    $join->on('cart_items.product_id', '=', 'diamonds.id')
                        ->where('cart_items.product_type', '=', 'diamond');
                })
                ->leftJoin('jewelleries', function ($join) {
                    $join->on('cart_items.product_id', '=', 'jewelleries.id')
                        ->where('cart_items.product_type', '=', 'jewellery');
                })
                ->select(
                    'cart_items.*',

                    'cart_items.product_id as main_product_id',
                    'cart_items.id as cart_item_id',
                    'cart_items.product_type as product_typo', // Explicitly select product_type
                    'rings.name as ring_name',
                    'rings.shape as ring_shape',
                    'diamonds.name as diamond_name',
                    'jewelleries.name as jewellery_name',
                    'rings.*',
                    'diamonds.*',
                    'jewelleries.*'
                )
                ->get();


            foreach ($cartItems as $item) {
                // If the item is jewellery, load its images
                if ($item->product_typo === 'jewellery') {
                    $jewellery = Jewellery::with('images')->find($item->main_product_id);
                    $item->jewellery_images = $jewellery->images; // Adding the images to the item
                }
            }


            // Process cart items to add calculated prices
            $cartItems->transform(function ($item) use ($userType) {
                switch ($item->product_typo) {
                    case 'ring':
                        $item->price = $userType == config('constants.USER_TYPES.WHOLESALER')
                            ? $item->setting_wholesaler_price
                            : $item->setting_user_price;
                        $item->name = $item->ring_name;
                        break;
                    case 'diamond':
                        $item->price = $userType == config('constants.USER_TYPES.WHOLESALER')
                            ? $item->stone_wholesaler_price
                            : $item->stone_user_price;
                        $item->name = $item->diamond_name;
                        break;
                    case 'jewellery':
                        $item->price = $item->price; // Assuming price is already set
                        $item->name = $item->jewellery_name;

                        break;
                    default:
                        $item->price = 0; // Fallback case
                        break;
                }

                return $item;
            });



            // Calculate total amount for all cart items
            $totalAmount = $cartItems->sum(function ($item) {
                return $item->quantity * $item->price;
            });

            // Convert cart items to array format
            $cartItemsArray = $cartItems->toArray();
            // dd($cartItemsArray);


            // Get the total count of products in the cart
            $productCount = count($cartItemsArray);

            return [
                'cart_id' => $cart->id,
                'cart_items' => $cartItemsArray,
                'total_amount' => $totalAmount,
                'product_count' => $productCount,
            ];
        }
    }


    function getCountry()
    {
        return Country::get()->toArray();
    }

    if (!function_exists('productPrice')) {
        function productPrice($setting_w_price, $stone_w_price)
        {
            return number_format($setting_w_price + $stone_w_price, 2);
        }
    }

    if (!function_exists('userPrice')) {
        function userPrice($setting_price, $stone_price)
        {
            return number_format($setting_price + $stone_price, 2);
        }
    }
