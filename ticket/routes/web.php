<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class , 'index'])->name('front.home');
Route::post('/view/ticket', [IndexController::class , 'viewTicket'])->name('front.viewTicket');
Route::get('/test', [IndexController::class , 'test'])->name('test');
Route::get('/sendPay/{id}', [IndexController::class , 'sendPay'])->name('sendPay');
Route::get('/verifyPay', [IndexController::class , 'verifyPay'])->name('verifyPay');
Route::post('/axiosTest', [IndexController::class , 'axiosTest'])->name('axiosTest');
Route::get('/TestProduct/{name}', [IndexController::class , 'TestProduct'])->name('TestProduct');
Route::get('/addCard/{id}', [IndexController::class , 'addCard'])->name('addCard');
Route::post('/EAV', [IndexController::class , 'EAV'])->name('EAV');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
