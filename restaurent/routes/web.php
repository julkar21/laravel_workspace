<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ResourceController;
use Laravel\Jetstream\Rules\Role;

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

Route::get('/',[HomeController::class,'index']);
Route::get('redirects', [HomeController::class,'redirects']);
Route::get('/user',[HomeController::class,'user']);
Route::get('/foodmenu',[HomeController::class,'foodmenu'])->name('foodmenu');
Route::post('/uploadfood',[HomeController::class,'upload']);
Route::get('/updatemenu/{id}',[HomeController::class,'updatemenu']);
Route::post('/updatefood/{id}',[HomeController::class,'updatefood']);

Route::post('/reservation',[HomeController::class,'reservation']);
Route::get('/viewreservation',[HomeController::class,'viewreservation'])->name('viewreservation');

Route::get('/viewchef', [HomeController::class,'viewchef']);
Route::post('/uploadchef', [HomeController::class,'uploadchef']);
Route::get('/updatechefview/{id}', [HomeController::class,'updatechefview']);
Route::post('/updatechef/{id}', [HomeController::class,'updatechef']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('home');
})->name('dashboard');

