<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DiamondController;
use App\Http\Controllers\Admin\JewelleryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\OrderItemsController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\FrontEndController;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\Cart\AddToCartController;
use App\Http\Controllers\Frontend\Cart\WishlistController;
use App\Http\Controllers\Frontend\Cart\CheckoutController;
use App\Http\Controllers\Frontend\Order\PaymentController;
use App\Http\Controllers\Frontend\Order\PaypalController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RozarpayController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('admin/login', [AdminController::class, 'login_form'])->name('admin.login');
Route::post('adminLogin', [AdminController::class, 'adminLogin'])->name('adminLogin');
Route::get('admin/register', [AdminController::class, 'register'])->name('admin.register');
Route::post('adminRegister', [AdminController::class, 'adminRegister'])->name('adminRegister');

Route::get('password/forgot/{identifier}', [ForgotPasswordController::class, 'showForgotForm'])->name('password.forgot');
Route::post('password/forgot', [ForgotPasswordController::class, 'sendResetLink'])->name('password.forgot.post');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('admin/reset/password', [ResetPasswordController::class, 'resetPassword'])->name('admin.reset.password');

Route::group(['middleware' => 'admin'], function () {
    Route::post('logoutUser', [AdminController::class, 'logout'])->name('logoutUser');
});
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-condition', [HomeController::class, 'termsCondition'])->name('terms-condition');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/create-ring', [HomeController::class, 'createRing'])->name('create-ring');
Route::get('/create-diamond', [HomeController::class, 'createDiamond'])->name('create-diamond');

// this is for the blog showing on forntendZ
Route::get('/blogs', [BlogController::class, 'showBlogList']);
Route::get('/blogs/{id}', [BlogController::class, 'showSingleBlog']);
Route::post('/review', [ReviewController::class, 'create']);


Route::get('download/{id}', [UserController::class, 'downloadPdf'])->name('download.pdf');
Route::get('document/view/{id}', [UserController::class, 'viewFile']);

Auth::routes();



Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::post('profileUpdate', [AdminController::class, 'profileUpdate'])->name('admin.profileUpdate');


    Route::resource('ring', RingController::class);
    Route::resource('diamond', DiamondController::class);
    Route::resource('user', UserController::class);
    Route::resource('jewelleries', JewelleryController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('order-items', OrderItemsController::class);
    Route::resource('blogs', BlogController::class);

    Route::resource('categories', CategoryController::class);
    Route::post('user/approve', [UserController::class, 'approve'])->name('admin.user.approve');
});

Route::middleware(['user'])->prefix('user')->group(function () {
    Route::get('/dashboard', [FrontEndController::class, 'user'])->name('user.dashboard');
    Route::post('/update/profile', [FrontEndController::class, 'profile'])->name('user.update.profile');
    Route::post('/update/address', [FrontEndController::class, 'address'])->name('user.update.address');
    // Route::get('/view-orders', [FrontEndController::class, 'viewOrders'])->name('view.orders');
});

Route::get('/user/account', function () {
    return view('user-account.dashboard');
});
Route::middleware(['wholesaler'])->prefix('wholesaler')->group(function () {
    Route::get('/dashboard', [FrontEndController::class, 'wholesaler'])->name('wholesaler.dashboard');
    Route::post('/update/profile', [FrontEndController::class, 'profile'])->name('wholesaler.update.profile');
    Route::post('/update/address', [FrontEndController::class, 'address'])->name('wholesaler.update.address');
});


//User Registeration & otp verification
Route::post('user_signup', [RegisterController::class, 'customRegister'])->name('user_signup');
Route::get('otp/verify/{user}', [RegisterController::class, 'showOtpVerificationForm'])->name('otp.verify');
Route::post('/otp-verify', [RegisterController::class, 'verifyOtp'])->name('otp.verify.submit');
Route::get('/otp-expiry/{user}/{otp}', [RegisterController::class, 'expiryOtp']);

Route::get('verification', [MessageController::class, 'pending'])->name('verification');
Route::get('/clear-cache', [MessageController::class, 'clearCacheAndRoutes'])->name('clear.cache');


//Helpre
Route::post('/check-product-id', [JewelleryController::class, 'checkProductId']);





//Product Route
Route::get('/search', [ProductController::class, 'searchProduct']);
Route::get('product-details/{slug}', [ProductController::class, 'productDetails'])->name('product-details');
Route::get('product-view/{slug}', [ProductController::class, 'productView'])->name('product-view');
Route::get('product-diamond/{id}', [ProductController::class, 'loadDiamondModal'])->name('product-diamond-modal');



//Wishlist
Route::post('/wishlist/add', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
Route::post('/wishlist/remove', [WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');

//Cart
Route::get('/cart', [AddToCartController::class, 'viewCart'])->name('view.cart');
Route::post('/create-cart', [AddToCartController::class, 'createCart']);
Route::post('/create-cart-jewellery', [AddToCartController::class, 'createCartForAjax']);
Route::post('/update-quantity', [AddToCartController::class, 'updateQuantity']);
Route::get('product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/cart/item-total', [AddToCartController::class, 'getItemTotal']);
Route::post('/cart/clear', [AddToCartController::class, 'clearCart'])->name('cart.clear');

// CartItem 

Route::post('/cartItem/remove', [AddToCartController::class, 'removeFromCartItem'])->name('cartItem.remove');

//Checkout
Route::post('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/submit/checkout', [CheckoutController::class, 'submitCheckout'])->name('checkout.submit');
Route::get('/payment', [PaymentController::class, 'index'])->name('payment.page');
Route::get('response', [PaymentController::class, 'response'])->name('payment.response');


Route::post('/create-order', [RozarpayController::class, 'createOrder']);
Route::post('/payment-callback', [RozarpayController::class, 'paymentCallback']);
Route::get('/payment-success', [PaymentController::class, 'showReceipt']);
Route::get('/payment-failure', [PaymentController::class, 'showFailure']);
Route::post('paypal/create', [PaypalController::class, 'paypal'])->name('paypal.create');

Route::get('/success', [PaypalController::class, 'success'])->name('success');
Route::get('/cancel', [PaypalController::class, 'cancel'])->name('cancel');



//  RING QUERY 

Route::get('/create-ring/filter', [RingController::class, 'showRing']);
Route::get('/create-diamond/filter', [DiamondController::class, 'showDiamond']);



// single Product list page 
Route::get('/shops/{productId}', [HomeController::class, 'showProductsByCategory'])->name('shops.category');
Route::get('/clearfilter', [HomeController::class, 'clearFilters'])->name('clear.filter');


// browse collection page 

Route::get('/browse-collection', [HomeController::class, 'browseCollection'])->name('browse.collection');
Route::get('/clearfilterBrowse', [HomeController::class, 'clearFiltersBrowseCollection'])->name('clear.filter.browse.collection');

// newsletter


Route::post('/subscribe', [FrontEndController::class, 'subscribe'])->name('newsletter.subscribe');

// Mail

Route::post('contact', [MailController::class, 'contactMail'])->name('contact');;

//
Route::get('diamond-report', [HomeController::class, 'viewDiamondReport']);
Route::get('/proxy-diamond-report', [HomeController::class, 'fetchReport']);
