<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'home']);
Route::get('dashboard', [MainController::class, 'dashboard']);
Route::get('aturacak', [MainController::class, 'aturacak']);
Route::get('contact', [MainController::class, 'contact']);
Route::get('startgroup', [MainController::class, 'startgroup']);
Route::get('joingroup', [MainController::class, 'joingroup']);
Route::post('resultgroup', [MainController::class, 'resultgroup']);
Route::get('formgroup', [MainController::class, 'formgroup']);
Route::post('store-atur-acak', [MainController::class, 'storeAturAcak']);
Route::post('store-atur-adil', [MainController::class, 'storeAturAdil']);
Route::post('join-atur-adil', [MainController::class, 'joinAturAdil']);
