<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RumahController;
use App\Http\Controllers\Admin\AhpController;
use App\Http\Controllers\LoginController;

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
//     return view('home');
// });

// Route::get('/login', function () {
//     return view('admin/package/page-login');
// });

// Route::get('/home', function () {
//     return view('customer/package/index');
// });
// Route::get('/test', function () {
//     return view('customer/package/portfolio-details');
// });

//HOME
Route::get('/', [CustomerController::class, 'index']);

//LOGIN
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// REGISTER
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/postregister', [LoginController::class, 'postregister'])->name('postregister');

// ADMIN
Route::group(['middleware' => ['auth', 'cekrole:Admin']], function () {
    Route::get('/admin', [AdminController::class, 'index']);

    // DATA USER (Done)
    Route::get('/admin/user', [UserController::class, 'tampiluser']);
    Route::get('/admin/user/form', [UserController::class, 'index']);
    Route::post('/admin/user/form/postuser', [UserController::class, 'postuser'])->name('postuser');
    Route::get('/admin/user/formedit/{id}', [UserController::class, 'tampiledituser'])->name('edituser');
    Route::post('/admin/user/formedit/updateuser/{id}', [UserController::class, 'updateuser'])->name('updateuser');
    Route::get('/admin/user/hapususer/{id}', [UserController::class, 'deluser'])->name('hapususer');

    // DATA RUMAH
    Route::get('/admin/rumah', [AdminController::class, 'indexrumah']);
    Route::get('/admin/rumah/form', [RumahController::class, 'index']);


    // DATA KRITERIA
    Route::get('/admin/kriteria', [AdminController::class, 'indexkriteria']);
    Route::get('/admin/ahp', [AhpController::class, 'index']);
    Route::get('/admin/ahp/bobot', [AhpController::class, 'indexbobot']);
    Route::get('/admin/ahp/perhitungan', [AhpController::class, 'indexperhitungan']);
    Route::get('/admin/ahp/riwayat', [AhpController::class, 'indexriwayat']);
});

//CUSTOMER
Route::group(['middleware' => ['auth', 'cekrole:Admin,Customer']], function () {
    Route::get('/home', [CustomerController::class, 'indexlogin']);
    Route::get('/test', [CustomerController::class, 'test']);
});
