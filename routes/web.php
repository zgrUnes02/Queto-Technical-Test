<?php

use App\Http\Controllers\FoodProductController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;

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

//! Home page :
Route::view('/', 'home');

//! Product routes :
Route::get('/products' , [productController::class , 'index']) ;
Route::post('/products' , [productController::class , 'createNewProduct']) -> name('product.create') ;
Route::post('/products/{id}/update' , [productController::class , 'updateProduct']) -> name('product.update') ;
Route::post('/products/{id}/delete' , [productController::class , 'deleteProduct']) -> name('product.delete') ;

//! Product food routes :
Route::get('/products/food' , [FoodProductController::class , 'index']) ;
Route::post('/products/food' , [FoodProductController::class , 'createNewFoodProduct']) -> name('food_product.create') ;
Route::post('/products/food/{id}/update' , [FoodProductController::class , 'updateFoodProduct']) -> name('food_product.update') ;
Route::post('/products/food/{id}/delete' , [FoodProductController::class , 'deleteFoodProduct']) -> name('food_product.delete') ;
Route::get('/products/food/{id}/display' , [FoodProductController::class , 'show']) -> name('food_product.show') ;
