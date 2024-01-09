<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/pay', function () {
    return view('pay');
});
Route::get('/contract', function () {
    return view('contract');
});
Route::get('/law', function () {
    return view('law');
});
Route::get('/tech', function () {
    return view('tech');
});
Route::get('/order', function () {
    return view('order');
});
/*Route::get('/sortcab', function () {
    return view('sortcab');
});*/
Route::get('/techs', function () {
    return view('techs');
});
Route::get('/admin', function () {
    return view('mainadmin');
});
Route::get('/auth', function () {
    return view('auth');
});
Route::get('/act', function () {
    return view('act');
});
Route::get('/main', function () {
    return view('welcome');
});
Route::post('/createorder', [\App\Http\Controllers\UrfController::class, 'form']);
Route::get('/card', [\App\Http\Controllers\CardsController::class, 'dats']);
Route::get('/profile', [\App\Http\Controllers\ProfilelController::class, 'check']);
Route::post('/autorize', [\App\Http\Controllers\ProfilelController::class, 'auth']);
Route::get('/', [\App\Http\Controllers\IndexlController::class, 'gc']);
Route::get('/register', function () {
    return view('register',['message' => ' ']);
});
Route::post('/regist', [\App\Http\Controllers\ProfilelController::class, 'register']);
Route::get('/logout', [\App\Http\Controllers\ProfilelController::class, 'logout']);
Route::get('/sortcab', [\App\Http\Controllers\SortlController::class, 'sortc']);
