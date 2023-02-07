<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter;

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

Route::get('/',[IndexController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/service',[ServiceController::class,'index']);
Route::get('/product',[ProductController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);




// Route::get('/', function () {
//     return view('welcome');
// });
