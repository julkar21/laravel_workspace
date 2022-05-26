<?php

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
    return view('backend.dashboard');
})->name('dashboard');

// Route::get('/blank', function () {
//     return view('backend.blank');
// })->name('blank');

// For Product Route
Route::group(['prefix'=>'/product'],function(){
    Route::get('/manage','App\Http\Controllers\Backend\ProductController@index')->name('manage');
    Route::get('/create','App\Http\Controllers\Backend\ProductController@create')->name('create');
    Route::post('/store','App\Http\Controllers\Backend\ProductController@store')->name('store');
    Route::get('/edit/{id}','App\Http\Controllers\Backend\ProductController@edit')->name('edit');
    Route::post('/update/{id}','App\Http\Controllers\Backend\ProductController@update')->name('update');
    Route::get('/delete/{id}','App\Http\Controllers\Backend\ProductController@destroy')->name('delete');
});

// For Category Route
Route::group(['prefix'=>'/category'],function(){
    Route::post('/addcategory','App\Http\Controllers\BackEnd\CategoryController@store')->name('addcategory');
    Route::get('/managecategory','App\Http\Controllers\BackEnd\CategoryController@index')->name('managecategory');
    Route::get('/showcategory','App\Http\Controllers\BackEnd\CategoryController@showall')->name('showcategory');
    Route::get('/editCategory/{id}','App\Http\Controllers\BackEnd\CategoryController@edit')->name('editcategory');
    Route::post('/updateCategory/{id}','App\Http\Controllers\BackEnd\CategoryController@update')->name('updatecategory');
    Route::get('/deleteCategory/{id}','App\Http\Controllers\BackEnd\CategoryController@destroy')->name('deletecategory');
});

