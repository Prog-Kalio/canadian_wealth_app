<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Admin Login router without Admin groups
// Route::get('admin/login', 'App\Http\Controllers\Admin\AdminController@login');


Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){
    //Admin Login router with Admin groups
    Route::match(['get', 'post'], 'login', 'AdminController@login');
    
    //Register Admin Details
    Route::match(['get','post'], 'register', 'AdminController@registerAdmin');

    Route::group(['middleware'=> ['admin']],function() {
        // Admin Dashboard Routes with admin group
        Route::get('dashboard', 'AdminController@dashboard');

        //Update Admin password
        Route::match(['get','post'],'update-admin-password', 'AdminController@updateAdminPassword');

        //Check Admin password
        Route::post('check-admin-password', 'AdminController@checkAdminPassword');

        //Update Admin details
        Route::match(['get','post'],'update-admin-details', 'AdminController@updateAdminDetails');

        //View Admin, Paid User,Free User
        Route::get('admins/{type?}', 'AdminController@admins');

        //Update Admin Status
        Route::post('update-admin-status', 'AdminController@updateAdminStatus');
        
        //Delete Admin
        Route::get('delete-admin/{id}', 'AdminController@deleteAdmin');
        
        //Admin Logout Route
        Route::get('logout', 'AdminController@logout');

        //Delete Admin
        Route::get('delete-admin/{id}', 'AdminController@deleteAdmin');

        //Paystack Payment Route
        Route::get('paystack/payment', 'PaymentController@payNow');

        //Verify Paystack Payment Route
        Route::get('paystack/verify-payment/{reference}', 'PaymentController@verify');

        //Confirmed User payment Route
        Route::get('paystack/confirmed', 'PaymentController@confirmed');

        //View Paystack Payment Route
        Route::match(['get','post'], 'paystack/view-payment', 'PaymentController@view');

    });

});

Route::namespace()->group(function(){
    Route::get('/', [HomeController::class, 'index']);
});
