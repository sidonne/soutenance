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
    return view('startpage');
});
Route::get('/edit', function () {
    return view('edit');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\InfosController::class, 'index'])->name('home');
Route::get('/start', [App\Http\Controllers\SearchController::class, 'search'])-> name('start');
Route::get('/get-result', [App\Http\Controllers\SearchController::class, 'getResult'])-> name('get-result');

Route::post('/upload_image', [App\Http\Controllers\InfosController::class, 'uploadImage'])->name('upload');
Route::post('save', [App\Http\Controllers\InfosController::class, 'store'])->name('store');
