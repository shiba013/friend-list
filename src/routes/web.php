<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\BirthplaceController;

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
/*初期
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', [FriendController::class, 'index']);
Route::post('/friends', [FriendController::class, 'store']);
Route::patch('/friends/update', [FriendController::class, 'update']);
Route::delete('/friends/delete', [FriendController::class, 'destroy']);

Route::get('/birthplaces', [BirthplaceController::class, 'index']);
Route::post('/birthplaces/create', [BirthplaceController::class, 'store']);
Route::patch('/birthplaces/update', [BirthplaceController::class, 'update']);
Route::delete('birthplaces/delete', [BirthplaceController::class, 'destroy']);