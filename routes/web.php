<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcAdd;
use App\Http\Controllers\groupController;
use App\Http\Controllers\arrController;
use App\Http\Controllers\xulyController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\PageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('tinhtong', function() {
//     return view('sum');
// });

// Route::post('tinhtong', [CalcAdd::class, 'tinhtong']);
// //Route::post('tinhtong', 'CalcAdd@tinhtong');

// Route::group(['prefix'=> 'welcome'], function() {
//     Route::get('/so1', [groupController::class, 'user1']);
//     Route::get('/so2', [groupController::class, 'user2']);
//     Route::get('/so3', [groupController::class, 'user3']);
// });

// Route::get('/vua', [arrController::class, 'getIndex']);

// Route::get('/form', [xulyController::class, 'store']);

// Route::get('/signup', [signupController::class, 'index']);
// Route::post('/signup', [signupController::class, 'displayInfor']);

Route::get('/trangchu', [PageController::class, 'getIndex']);
Route::get('/product_model', [PageController::class, 'getModel']);
Route::get('/product_detail', [PageController::class, 'getDetail']);
Route::get('/contact', [PageController::class, 'getContact']);
Route::get('/about', [PageController::class, 'getAbout']);


