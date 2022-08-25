<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});
//show product
// Route::get('Product-list' ,[ProductController::class,'index' ]);
Route::get('add-product', [ProductController::class, 'showProducer']);
Route::post('save', [ProductController::class, 'save']);
Route::get('delete-product/{id}', [ProductController::class, 'delete']);
Route::get('edit-product/{id}', [ProductController::class, 'editProduct']);
Route::post('update-product', [ProductController::class, 'updateProduct']);

//show producer
Route::get('producer-list' ,[ProductController::class,'showInfProducer']);
Route::get('add-producer', [ProductController::class, 'addProducer']);
Route::post('save-producer', [ProductController::class, 'saveProducer']);
Route::get('delete-producer/{id}', [ProductController::class, 'deleteProducer']);
Route::get('edit-producer/{id}', [ProductController::class, 'editProducer']);
Route::post('update-producer', [ProductController::class, 'updateProducer']);

//login admin
Route::get('/login-admin-view', [AuthController::class, 'loginAdminView'])->middleware('alreadyLoggedInAdmin');
Route::post('login-admin', [AuthController::class, 'loginAdmin'])->name('login-admin');
Route::get('/Product-list', [AuthController::class, 'indexAdmin'])->middleware('isLoggedInAdmin');
Route::get('/logout-admin', [AuthController::class, 'logoutAdmin']);

//dashboard
Route::get('Home', [DashboardController::class, 'DashComp']);
Route::get('About', [DashboardController::class, 'DashIndex']);
Route::get('Shop', [DashboardController::class, 'DashProduct']);
Route::get('detail/{id}', [DashboardController::class, 'details']);
