<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\WidowsController;
use App\http\Controllers\ShopkeeperController;
use App\http\Controllers\ItemsController;
use App\http\Controllers\RashansController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/{any}', function () {
    return view('welcome');
})->where("any", ".*");


Route::post('widows/store', [WidowsController::class,'store']);

Route::get('widows/{id}/edit',[WidowsController::class,'edit']);
Route::put('widows/{id}/update',[WidowsController::class,'update']);
Route::delete('widows/{id}/delete',[WidowsController::class,'destroy']);
Route::get('widows/{id}/show',[WidowsController::class,'show']);

Route::get('/user/home', [WidowsController::class,'home']);
Route::get('/user/about', [WidowsController::class,'about']);
Route::get('/user/contact', [WidowsController::class,'contact']);
Route::get('/user/gallery', [WidowsController::class,'gallery']);
Route::get('/user/form', [WidowsController::class,'form']);

Route::get('search_data', [WidowsController::class,'search_data']);

// shopkeeper

Route::get('/shopkeepers/shopkeeper_index', [ShopkeeperController::class,'shopkeeper_index']);
Route::post('/shopkeepers/store', [ShopkeeperController::class,'store']);
Route::get('/shopkeepers/shopkeeper_form', [ShopkeeperController::class,'shopkeeper_form']);
Route::get('search', [ShopkeeperController::class,'search']);
Route::get('/shopkeepers/{id}/shopkeeper_show',[ShopkeeperController::class,'shopkeeper_show']);
Route::delete('/shopkeepers/{id}/delete',[ShopkeeperController::class,'destroy']);
Route::get('/shopkeepers/{id}/shopkeeper_edit',[ShopkeeperController::class,'shopkeeper_edit']);
Route::put('/shopkeepers/{id}/update',[ShopkeeperController::class,'update']);

// foods

Route::get('/foods/create', [ItemsController::class,'create']);
Route::post('foods/store', [ItemsController::class, 'store']);
Route::get('foods/show', [ItemsController::class, 'show']);
Route::get('/foods/{id}/edit',[ItemsController::class, 'edit']);
Route::put('/foods/{id}/update',[ItemsController::class, 'update']);
Route::delete('/foods/{id}/delete',[ItemsController::class,'destroy']);

// rashans
Route::get('/rashans/rashan', [RashansController::class,'rashan']);
Route::post('rashans/store', [RashansController::class, 'store']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
