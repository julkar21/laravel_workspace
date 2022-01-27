<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CategoryController;
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

Route::get('/',[PagesController::class, 'index'])->name('index');
Route::get('/register', [FrontController::class,'register'])->name('register');
Route::post('/register', [FrontController::class,'processForm']);
Route::get('/login', [FrontController::class,'showLoginform'])->name('login');
Route::post('/login', [FrontController::class,'processLogin']);
Route::get('/dashboard', [FrontController::class, 'dashboard'])->name('dashboard');



//categories route
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/add', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}', [CategoryController::class, 'showCategory'])->name('categories.show');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
Route::get('/post', [FrontController::class, 'post']);




/*Route::get('/', function () {
    return view('home');
});
*/
//Route::get('/products', [ProductsController::class, 'index']);

//Route::get('/products/{id}', [ProductsController::class, 'show']);
/*
Route::get('/users', function(){
    return 6+9;
});
*/