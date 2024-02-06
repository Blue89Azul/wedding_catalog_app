<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticViewController;

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

Route::get('/', function () { return view('login'); })->name('login');

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/top', function () { return view('top'); })->name('top');
    Route::get('/lp', [StaticViewController::class, 'showLp'])->name('lp');
    Route::get('/catalog_list', [StaticViewController::class, 'showCatalog'])->name('catalog');
    Route::get('/profile', [StaticViewController::class, 'showProfile'])->name('profile');
});