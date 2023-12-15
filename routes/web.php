<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\MonitoringController;

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

Route::get('/', [HomeController::class, 'index']);
Route::resource('history', DataController::class);
Route::get('downloads', [DataController::class, 'downloadpdf']);

Route::get('bacasuhu', [MonitoringController::class, 'bacasuhu']);
Route::get('bacaudara', [MonitoringController::class, 'bacaudara']);
Route::get('bacatanah', [MonitoringController::class, 'bacatanah']);

Route::get('simpan/{nilaisuhu}/{nilaiudara}/{nilaitanah}', [MonitoringController::class, 'simpansensor']);
