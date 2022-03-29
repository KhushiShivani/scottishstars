<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/view-more', 'App\Http\Controllers\FrontendController@moreDetails');

Route::post('/search-items','App\Http\Controllers\FrontendController@searchItems');


// AUTHENTICATION CHECKING
Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', function () {
        if (Auth::check() && Auth::user()->role== 1) {
            return view('admin/index');
        }
        else {
            return redirect('/');
        }
    });

    // USER CAN ACCESS AFTER AUTHENTICATION
});


// ONLY ADMIN CAN ACCESS AFTER AUTHENTICATION
Route::middleware(['web', 'is_admin'])->prefix('admin')->namespace('App\Http\Controllers\Backend')->group(function () {

    // ADMIN ACCESSED URL
    Route::get('dashboard','CategoryController@dashboard');

    // CATEGORY
    Route::prefix('category')->group(function(){
        Route::get('index','CategoryController@index');
        Route::get('create','CategoryController@create');
        Route::post('store','CategoryController@store');
        Route::get('edit','CategoryController@edit');
        Route::post('update','CategoryController@update');
    });

     // SUB-CATEGORY
     Route::prefix('sub-category')->group(function(){
        Route::get('index','SubCategoryController@index');
        Route::get('create','SubCategoryController@create');
        Route::post('store','SubCategoryController@store');
        Route::get('edit','SubCategoryController@edit');
        Route::post('update','SubCategoryController@update');
    });

    // PRODUCT
    Route::prefix('product')->group(function(){
        Route::get('index','ProductController@index');
        Route::get('create','ProductController@create');
        Route::post('store','ProductController@store');
        Route::get('edit','ProductController@edit');
        Route::post('update','ProductController@update');
        Route::post('generate-sku','ProductController@generateSKU');
    });

});
