<?php

use App\Http\Controllers\RoomnameController;
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

Route::get('/', function () {return view('welcome');});
Route::get('/adminindex', function () {return view('adminindex');});
Route::get('/admininputdata', function () {return view('admininputdata');});
Route::get('/adminshowdata', function () {return view('adminshowdata');});
Route::get('/admineditruangan', function () {return view('admineditruangan');});
Route::get('/admineditinstansi', function () {return view('admineditinstansi');});
Route::get('/adminedituser', function () {return view('adminedituser');});
Route::get('/admindetailmeeting', function () {return view('admindetailmeeting');});









// returns the home page with all posts
Route::get('/roomname', RoomnameController::class .'@index')->name('roomnames.index');
// returns the form for adding a post
Route::get('/roomname/create', RoomnameController::class . '@create')->name('roomnames.create');
// adds a post to the database
Route::post('/roomname', RoomnameController::class .'@store')->name('roomnames.store');
// returns a page that shows a full post
Route::get('/roomname/{id}', RoomnameController::class .'@show')->name('roomnames.show');
// returns the form for editing a post
Route::get('/roomname/{id}/edit', RoomnameController::class .'@edit')->name('roomnames.edit');
// updates a post
Route::put('/roomname/{id}', RoomnameController::class .'@update')->name('roomnames.update');
// deletes a post
Route::get('/roomname/hapus/{id}', RoomnameController::class .'@delete')->name('roomnames.delete');




