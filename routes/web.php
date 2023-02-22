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

Route::post('/post',[App\Http\Controllers\PostController::class,'store'])->name('post.store');
Route::post('/posts',[App\Http\Controllers\BoxController::class,'index'])->name('post.index');
Route::get('/post',[App\Http\Controllers\PostController::class,'create'])->name('post.create');
Route::get('/',[App\Http\Controllers\BoxController::class,'index'])->name('box.index');


Route::delete('/delete/{postId}',[App\Http\Controllers\BoxController::class,'delete'])->name('box.delete');
// Route::get('/post', function () {
//     return view('post');
// });
// 備品の登録画面の表示
// Route::get('/create', [BoxController::class, 'create'])->name('box.create');
// 備品の登録処理
// Route::post('/', [BoxController::class, 'store'])->name('box.store');