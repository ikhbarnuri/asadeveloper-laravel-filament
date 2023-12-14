<?php

use App\Http\Controllers\DownloadController;
use App\Http\Controllers\PDFController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('download', [PDFController::class, 'download'])->name('download.tes');
Route::get('download/{user}', [PDFController::class, 'downloadUser'])->name('download.user');

Route::get('download-image/{post}', [DownloadController::class, 'downloadImage'])
    ->name('download.image');
