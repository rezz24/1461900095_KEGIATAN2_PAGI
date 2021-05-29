<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\anggotaController;

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

Route::get('/', function () {
    return view('home0083');
});
Route::get('/select0083', function () {
    return view('select0083');
});
Route::get('/select_like0083', function () {
    return view('select_like0083');
});
Route::get('/select_join0083', function () {
    return view('select_join0083');
});
Route::get('/select_join_like0083', function () {
    return view('select_join_like0083');
});

Route::resource('anggota', anggotaController::class);