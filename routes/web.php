<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactusController;
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
Route::get('/',[HomeController::class,'Home1']);

Route::get('/home', [HomeController::class,'Home']);

Route::get('/product', [ProductController::class,'product']);

Route::get('news', [NewsController::class,'news']);
Route::get('topik/{topik}', [NewsController::class,'topik']);


Route::get('/program1', [ProgramController::class,'program1']);
Route::get('/program2', [ProgramController::class,'program2']);
Route::get('/program3', [ProgramController::class,'program3']);

Route::get('/about', [AboutusController::class,'aboutus']);

Route::get('/contact', [ContactusController::class,'contact']);




?>
