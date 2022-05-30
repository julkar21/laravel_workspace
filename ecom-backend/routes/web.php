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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth'])->name('dashboard');

// For Product Route
Route::group(['prefix'=>'/product'],function(){
    Route::get('/manage','App\Http\Controllers\Backend\ProductController@index')->middleware(['auth'])->name('manage');
    Route::get('/create','App\Http\Controllers\Backend\ProductController@create')->middleware(['auth'])->name('create');
    Route::post('/store','App\Http\Controllers\Backend\ProductController@store')->middleware(['auth'])->name('store');
    Route::get('/edit/{id}','App\Http\Controllers\Backend\ProductController@edit')->middleware(['auth'])->name('edit');
    Route::post('/update/{id}','App\Http\Controllers\Backend\ProductController@update')->middleware(['auth'])->name('update');
    Route::get('/delete/{id}','App\Http\Controllers\Backend\ProductController@destroy')->middleware(['auth'])->name('delete');
});

// For Category Route
Route::group(['prefix'=>'/category'],function(){
    Route::post('/storecategory','App\Http\Controllers\BackEnd\CategoryController@store')->middleware(['auth'])->name('storecategory');
    Route::get('/managecategory','App\Http\Controllers\BackEnd\CategoryController@index')->middleware(['auth'])->name('managecategory');
    Route::get('/showcategory','App\Http\Controllers\BackEnd\CategoryController@showall')->middleware(['auth'])->name('showcategory');
    Route::get('/editCategory/{id}','App\Http\Controllers\BackEnd\CategoryController@edit')->middleware(['auth'])->name('editcategory');
    Route::post('/updateCategory/{id}','App\Http\Controllers\BackEnd\CategoryController@update')->middleware(['auth'])->name('updatecategory');
    Route::get('/deleteCategory/{id}','App\Http\Controllers\BackEnd\CategoryController@destroy')->middleware(['auth'])->name('deletecategory');
});

// For SubCategory Route
Route::group(['prefix'=>'/subcategory'],function(){
    Route::get('/createsubcategory','App\Http\Controllers\Backend\SubcategoryController@create')->middleware(['auth'])->name('createsubcategory');
    Route::post('/storesubcategory','App\Http\Controllers\BackEnd\SubcategoryController@store')->middleware(['auth'])->name('storesubcategory');
    Route::get('/managesubcategory','App\Http\Controllers\BackEnd\SubcategoryController@index')->middleware(['auth'])->name('managesubcategory');
    Route::get('/showsubcategory','App\Http\Controllers\BackEnd\SubcategoryController@showall')->middleware(['auth'])->name('showsubcategory');
    Route::get('/editsubCategory/{id}','App\Http\Controllers\BackEnd\SubcategoryController@edit')->middleware(['auth'])->name('editsubcategory');
    Route::post('/updatesubCategory/{id}','App\Http\Controllers\BackEnd\SubcategoryController@update')->middleware(['auth'])->name('updatesubcategory');
    Route::get('/deletesubCategory/{id}','App\Http\Controllers\BackEnd\SubcategoryController@destroy')->middleware(['auth'])->name('deletesubcategory');
});
require __DIR__.'/auth.php';
