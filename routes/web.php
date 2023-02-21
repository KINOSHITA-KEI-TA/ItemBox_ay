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

Route::get('/', function () {
    return view('box');
});

// 備品の登録画面の表示
Route::get('/create', [BoxController::class, 'create'])->name('box.create');
// 備品の登録処理
Route::post('/', [BoxController::class, 'store'])->name('box.store');