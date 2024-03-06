<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', ['App\Http\Controllers\Web\UrlController', 'index'])->name('url.index');
Route::post('/store', ['App\Http\Controllers\Web\UrlController', 'store'])->name('url.store');
Route::get('{shortUrl}', ['App\Http\Controllers\Web\UrlVisitController', 'shortUrlRedirect']);


