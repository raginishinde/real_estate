<?php


// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminChatController;
use App\Http\Controllers\CustomerChatController;

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

Route::group(['prefix' => 'admin'], function () {
    Route::post('/send-messages', [AdminChatController::class, 'SendMessages']);
    Route::post('/get-messages', [AdminChatController::class, 'GetMessages']);
    Route::post('/get-accessories', [AdminChatController::class, 'getAccessories']);
    Route::post('/user_checklogin', [AdminChatController::class, 'user_checklogin']);
});

Route::group(['prefix' => 'customer'], function () {
    Route::post('/send-messages', [CustomerChatController::class, 'SendMessages']);
    Route::post('/get-messages', [CustomerChatController::class, 'GetMessages']);
    Route::post('/get-accessories', [CustomerChatController::class, 'getAccessories']);
    Route::post('/user_checklogin', [CustomerChatController::class, 'user_checklogin']);
});
