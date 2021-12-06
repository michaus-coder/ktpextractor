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
    return view('main');
});

Route::resource('files', FilesController::class)->name('*', 'files');
Route::resource('user', UserController::class)->name('*', 'user');
Route::resource('userdata', UserDataController::class)->name('*', 'userdata');

Route::post('/files/store', function () {
    return 'File uploaded successfully';
})->name('files.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
