<?php

use App\Http\Controllers\BukuController;
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
    return view('welcome');
});

//Insert
Route::get('/create', [BukuController::class, 'index'])->name('getCreatePage');
Route::post('/create-book', [BukuController::class, 'createBook'])->name('createBook');

//View
Route::get('/get-books', [BukuController::class, 'getBooks'])->name('getBooks');

//Update
Route::get('/update-book/{id}', [BukuController::class, 'getBookById'])->name('getBookById');
Route::patch('/update-book/{id}', [BukuController::class, 'updateBook'])->name('updateBook');

//Delete
Route::delete('/delete-book/{id}', [BukuController::class, 'deleteBook'])->name('delete');
