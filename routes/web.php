<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;


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


Route::get('/upload', [FileController::class, 'showUploadForm']);
Route::post('/upload', [FileController::class, 'uploadFile']);
Route::get('/files/{id}', [FileController::class, 'downloadFile'])->name('file.download');
Route::get('/list/{id}', [FileController::class, 'showUploadedFiles'])->name('file.list');


