<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\FrontController;
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

Route::get('/',[PagesController::class, 'index']);

Route::get('/register', [FrontController::class,'register'])->name('register');

Route::post('/register', [FrontController::class,'processForm']);

Route::get('/post', [FrontController::class, 'post']);

/*Route::get('/', function () {
    return view('home');
});
*/
//Route::get('/products', [ProductsController::class, 'index']);

//Route::get('/products/{id}', [ProductsController::class, 'show']);

Route::get('/users', function(){
    return 6+9;
});
