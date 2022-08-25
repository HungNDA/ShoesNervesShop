<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
Route::get('Product-list' ,[ProductController::class,'index' ]);
Route::get('add-product', [ProductController::class, 'showProducer']);
Route::post('save', [ProductController::class, 'save']);
Route::get('delete-product/{id}', [ProductController::class, 'delete']);
Route::get('edit-product/{id}', [ProductController::class, 'editProduct']);
Route::post('update-product', [ProductController::class, 'updateProduct']);
