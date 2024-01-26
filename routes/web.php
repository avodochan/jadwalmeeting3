<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserhomeController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('layouts.master');
// });

Route::get('/', function () {
    return view('userHome');
});

#dashboard/home user
Route::get('/userHome', [App\Http\Controllers\UserhomeController::class, 'userHome'])->name('userHome');

#service
Route::get('/service', [App\Http\Controllers\ServiceController::class, 'service'])->name('service');

#halaman jadwal rapat
Route::get('/jadwalRapat', [App\Http\Controllers\UserhomeController::class, 'jadwalRapat'])->name('jadwalRapat');
Route::get('/buatRapat', [App\Http\Controllers\UserhomeController::class, 'buatRapat'])->name('buatRapat');
Route::get('/arsipRapat', [App\Http\Controllers\UserhomeController::class, 'arsipRapat'])->name('arsipRapat');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
