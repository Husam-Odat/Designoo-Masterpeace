<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashhController;
use App\Http\Controllers\UserDashhController;
use App\Http\Controllers\CategoryDashController;
use App\Http\Controllers\InventoryDashController;
use App\Http\Controllers\DiscountDashController;
use App\Http\Controllers\ServicesDashController;
use App\Http\Controllers\VolnteeritemDashhhController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ContactMailController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\ProductController;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\ProductCategory;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/updateimg', [ProfileController::class, 'updateimg'])->name('profile.updateimg');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/my-account', function () {
    return view('pages.my-account');
});


Route::get('/', [ProductCategoryController::class, 'indexhome'])->name('home');



Route::get('/cartt', function () {
    return view('pages.cart');
})->name('cartt');

Route::get('/error', function () {
    return view('pages.error');
})->name('error');

// Route::get('/checkout', function () {
//     return view('pages.checkout')->name('checkout');
// });

Route::get('/allproducts', function () {
    return view('pages.allproducts');
});
Route::get('/single', function () {
    return view('pages.single');
});
Route::get('/allproducts1', function () {
    return view('pages.allproducts1');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/cartnew', function () {
    return view('pages.cartnew');
});
Route::get('/cart', function () {
    return view('pages.cart');
});

// Route::get('/cartnewas', function () {
//     return view('pages.cartnewas');
// });

// Route::get('/loginn', function () {
//     return view('pages.login');
// });
Route::get('/login11', function () {
    return view('auth.login');
});

// Route::get('/checkout11', function () {
//     return view('pages.checkout');
// });
Route::get('/registration', function () {
    return view('pages.registration');
});
Route::get('/registration11', function () {
    return view('auth.register');
});
Route::get('/registration111', function () {
    return view('auth.registration');
});




// Route::get('/dash', function () {
//     return view('Dash.Home');
// });
Route::get('/add_user_dash', function () {
    return view('Dash.add_user_dash');
});

Route::get('/header', function () {
    return view('layout.header');
});


// .....................................................cart sh>>>>>>>>>>>>>>>>>>>>>>>>
// Route::get('/', [ProductController::class, 'index']);

// Route::get('cart', [ProductController::class, 'cart'])->name('cart');

// Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');

// Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');

// Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');

// .....................................................cart sh >>>>>>>>>>>>>>>>>>>>>>>>
// Route::get('/pages.cart','CartController@index')->name('pages.cart.index');
Route::get('/pages.cart', [CartController::class, 'index'])->name('pages.cart.index');
Route::get('/pages.cartnew', [CartController::class, 'index'])->name('pages.cartnew.index');
// Route::get('/pages.cart2',[CartController::class, 'index'])->name('pages.cart2.index');
// Route::post('/pages.cart/add', 'CartController@addToCart')->name('pages.cart.add');
Route::post('/pages.cart/add', [CartController::class, 'addToCart'])->name('pages.cart.add');
Route::post('/pages.cartnew/add', [CartController::class, 'addToCart'])->name('pages.cartnew.add');

Route::get('/cart/{id}', [CartController::class, 'store'])->name('pages.cart.store');

Route::get('/carts/{id}', [CartController::class, 'destroy'])->name('pages.cart.destroy');
Route::get('/carts/{id}', [CartController::class, 'destroy'])->name('pages.cartnew.destroy');
Route::put('/carts/{id}', [CartController::class, 'updateQuantity'])->name('cart.update'); //for cart update Ajax


Route::get('/cartttt', [CartController::class, 'index'])->name('cart');

Route::get('/cartt', [CartController::class, 'index2'])->name('cart');

Route::get('/cartnew', [CartController::class, 'index'])->name('cartnew');

// Route::get('/cart2', [CartController::class, 'index'])->name('cart2');

Route::get('/checkout', [CartController::class, 'index3'])->name('checkout');

Route::get('/get-cart-count', [CartController::class, 'getCartCount'])->name('header');


// Route::get('/get-cart-count', 'CartController@getCartCount');

// Route::post('/pages.cart/remove', 'CartController@removeFromCart')->name('pages.cart.remove');
Route::post('/pages.cart/remove', [CartController::class, 'removeFromCart'])->name('pages.cart.remove');
// Route::post('/pages.cart/clear', 'CartController@clearCart')->name('pages.cart.clear');
Route::post('/pages.cart/clear', [CartController::class, 'clearCart'])->name('pages.cart.clear');

// .....................................................allproducts>>>>>>>>>>>>>>>>>>>>>>>>
Route::get('/pages.allproducts/{id}', [ProductCategoryController::class, 'index'])->name('pages.allproducts');
// Route::get('/index', [ProductCategoryController::class, 'indexhome'])->name('pages.index');

Route::get('/pages.single/{id}', [ProductCategoryController::class, 'indexproduct'])->name('pages.single');

// Route::get('/pages.single/cart/{id}', [ProductCategoryController::class, 'indexproduct'])->name('pages.cart');

Route::get('/pages.allproducts', [ProductCategoryController::class, 'search'])->name('pages.allproducts');



Route::middleware('auth', 'isAdmin')->group(
    function () {
        // .....................................................admin>>>>>>>>>>>>>>>>>>>>>>>>

        Route::get('/dash', function () {
            return view('Dash.Home');
        });
        // Route::get('/Dash.addservice', function () {
        //     return view('Dash.addservice');
        // });

        Route::resource('admin', AdminDashhController::class);

        Route::resource('services', ServicesDashController::class);

        Route::resource('equipment', equipmentDashController::class);

        Route::resource('medicine', MedicineDashController::class);

        Route::get('/orders', [VolnteeritemDashhhController::class, 'index'])->name('all_items');

        Route::get('/detail', [VolnteerdetailDashhController::class, 'index'])->name('all_details');

        Route::resource('category', CategoryDashController::class);
        Route::resource('inventory', InventoryDashController::class);
        Route::resource('discount', DiscountDashController::class);
        // Route::resource('discount', VolnteeritemDashhhController::class);

        Route::get('/adminlogin', [AuthenticatedSessionController::class, "create"]);

        Route::resource('user', UserDashhController::class);


        Route::get('/dash', [ProductCategoryController::class, 'indexdash']);

        Route::get('/rate', [ReviewController::class, 'indexall'])->name('reviews.index');

        Route::delete('/reviews/{id}', [ReviewController::class, 'destroy'])->name('reviews.destroy');

        Route::get('/contactt', [ContactMailController::class, 'index'])->name('contacts.index');

        Route::delete('/contactt/{id}', [ContactMailController::class, 'destroy'])->name('contacts.destroy');

        Route::resource('adminprofile', PhotoController::class);
    }
);



Route::post('/', [OrderController::class, 'create'])->name('create');




// ////////////////for paypal payment gateway//////////////////////////
Route::post('paypal', [PaymentController::class, 'payment'])->name('paypal');
Route::post('cash', [PaymentController::class, 'paymentcash'])->name('cash');
Route::get('success', [PaymentController::class, 'success'])->name('payment.success');
Route::get('cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');

// ////////////////for Google//////////////////////////
// Route::get('auth/google', [GoogleAuthController::class, 'redirectToGoogle'])->name('google');

// Route::get('auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback']);

///============reviews=====
// Route::get('/reviews/create', 'ReviewController@create')->name('reviews.create');
// Route::post('/pages.allproducts', 'ReviewController@store')->name('reviews.store');

Route::post('/pages.single/{id}', [ReviewController::class, 'store'])->name('reviews.store');
// Route::get('pages.single/{productId}', [ReviewController::class, 'store'])->name('pages.single');
// Route::get('pages.single/{productId}', 'YourController@yourMethod')->name('pages.single');

// Route::get('/pages.single/{id}', [ReviewController::class, 'index']);
// Route::get('/pages.single/{id}', [ReviewController::class, 'index']);

// Route::post('/send-message', [ContactMailController::class, 'sendEmail'])->name('contactmail.send');
Route::post('/send-message', [ContactMailController::class, 'sendEmail'])->name('contact.send');

Route::post('/send-messagee', [ContactMailController::class, 'sendEmailfooter'])->name('contact.sendfooter');

// Route::get('/services/create', [DiscountController::class, 'index'])->name('services/create');
Route::get('/Dash.addservice', [DiscountController::class, 'index'])->name('Dash.addservice');

// Route::get('/services/{id}/edit', [DiscountController::class, 'index1'])->name('Dash.editserv');

// Route::get('/send', [ContactMailController::class, 'index']);


//social login by google
Route::get('/googlelogin', [ProfileController::class, 'googleLogin'])->name('googlelogin');
Route::get('/auth/google/callback', [ProfileController::class, 'googleHandle']);



// Route::any('{any}', function () {
//     abort(404);
// })->where('any', '.*');

require __DIR__ . '/auth.php';
