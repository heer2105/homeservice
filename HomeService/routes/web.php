<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComboController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VersionController;
use App\Http\Controllers\WorkerController;
use App\Models\admin;
use App\Models\Booking;
use App\Models\Worker;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/myprofile', function () {
    return view('myprofile');
});

Route::post('/booking_assign',[BookingController::class,'assign']);

// Route::post('/update_profile',[AdminController::class,'update_profile']);

Route::resource('/category', CategoryController::class);
Route::resource('/banner', BannerController::class);
Route::get('calender', function () {
    return view('calender');
});
Route::resource('/coupon', CouponController::class);
Route::resource('/service', ServiceController::class);
Route::resource('/customer', PersonController::class);


//API Routes
Route::post('/api_register', [ApiController::class, 'register']);
Route::post('/api_login', [ApiController::class, 'login_user']);
Route::post('/api_prodByCat', [ApiController::class, 'getProductByCat']);
Route::post('/api_data', [ApiController::class, 'getData']);


Route::get('/', [AdminController::class, 'open_login']);
Route::get('/cpwd', [AdminController::class, 'open_cpwd']);

Route::get('/home', [AdminController::class, 'home']);
Route::get('/logout', [AdminController::class, 'logout']);
Route::post('/api_forgotapp', [ApiController::class, 'forgotapp']);
Route::post('/api_loginregister', [WorkerController::class, 'loginorregister']);
Route::post('api_wregister', [WorkerController::class, 'wregister']);

Route::get('/forgot_pass', [AdminController::class, 'open_forgot_pwd']);

Route::post('/forgot_password', [AdminController::class, 'forgot_password']);

Route::post('/reset_password', [AdminController::class, 'reset_password']);


Route::get('/registero', [AdminController::class, 'open_register']);


Route::post('/register', [AdminController::class, 'register']);
Route::post('/login', [AdminController::class, 'login']);

Route::get('/reset', [AdminController::class, 'open_reset_pwd']);

Route::get('/booking', [BookingController::class, 'booking']);

Route::post('/api_addbooking', [ApiController::class, 'addbooking']);
Route::post('/api_getbooking', [ApiController::class, 'getbooking']);
Route::post('/api_getbookingall', [ApiController::class, 'getbookingall']);
Route::post('/api_getbookingwid', [ApiController::class, 'getbookingwid']);
Route::post('/api_getbookinguid', [ApiController::class, 'getbookinguid']);

Route::post('/api_updatebooking', [ApiController::class, 'updatebooking']);
Route::post('/api_removebooking', [ApiController::class, 'removeBooking']);
Route::post('/api_confirmbooking', [ApiController::class, 'confirmBooking']);
Route::post('/update_profile', [AdminController::class, 'update_profile']);
Route::post('/api_applycoupon', [ApiController::class, 'getCouponFromCode']);
Route::post('/api_clearcart', [ApiController::class, 'clearCart']);
Route::post('/api_getBookinghistory', [ApiController::class, 'getBookinghistory']);
Route::post('/api_updateWorkerUsername', [WorkerController::class, 'updateWorkerUsername']);

Route::post('/addwishlist', [ApiController::class, 'addwishlist']);
Route::post('/removewishlist',[ApiController::class,'removewishlist']);
Route::post('/removewishlist1',[ApiController::class,'removewishlist1']);
Route::post('/getwishlist', [ApiController::class, 'getwishlist']);

Route::resource('/combo', ComboController::class);

Route::get('/search', [AdminController::class, 'search']);
Route::post('/search', [AdminController::class, 'search']);
Route::get('/ostatus/{id}', [BookingController::class, 'status']);

Route::post('/api_editprofile', [ApiController::class, 'editprofile']);
Route::post('/api_editpassword', [ApiController::class, 'editpassword']);



Route::get('/version', [VersionController::class, 'index']);
Route::get('/getVersion', [ApiController::class, 'getVersion']);
Route::resource('version', VersionController::class);
Route::resource('/worker', WorkerController::class);