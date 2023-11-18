<?php

use App\Http\Controllers\API\APIController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login-admin', [AuthController::class, 'login']);
Route::post('register-admin', [AuthController::class, 'register']);

Route::post('login-widow', [AuthController::class, 'loginWidow']);
Route::post('register-widow', [AuthController::class, 'registerWidow']);

Route::post('login-shopkeeper', [AuthController::class, 'loginShop']);
Route::post('register-shopkeeper', [AuthController::class, 'registerShop']);

// Protected routes
Route::group(['middleware' => ['jwt.auth']], function () {
    Route::get('user', [AuthController::class, 'checkToken']);

    Route::post('add-widows', [APIController::class, 'WidowAddstore']);
    Route::get('get-widows', [APIController::class, 'WidowAll']);
    Route::get('get-widows/{id}', [APIController::class, 'WidowSingle']);
    Route::delete('delete-widows/{id}', [APIController::class, 'WidowDelet']);
    Route::post('update-widows/{id}', [APIController::class, 'WidowUpdate']);
    Route::get('search-widows', [APIController::class, 'Widowsearch']);

    //Shoopkeeper
    Route::post('add-shopkeeper', [APIController::class, 'ShoopkeeperAdd']);
    Route::get('get-shopkeeper', [APIController::class, 'ShoopkeeperAll']);
    Route::get('get-shopkeeper/{id}', [APIController::class, 'ShoopkeeperSingle']);
    Route::delete('delete-shopkeeper/{id}', [APIController::class, 'Shoopkeeperdelete']);
    Route::post('update-shopkeeper/{id}', [APIController::class, 'Shoopkeeperupdate']);
    Route::get('search-shopkeeper', [APIController::class, 'Shoopkeepersearch']);

});
