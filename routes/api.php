<?php


// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/send-messages',[AdminController::class, 'SendMessages']);
Route::post('/get-messages',[AdminController::class, 'GetMessages']);
Route::post('/get-accessories', [AdminController::class, 'getAccessories']);
Route::post('/user_checklogin', [LoginController::class, 'user_checklogin']);