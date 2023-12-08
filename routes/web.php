<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WiteiController;
use App\Http\Controllers\AlquilarController;
use App\Http\Controllers\PresenciaController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\ObraSocialController;

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

Route::get('/', [WiteiController::class, 'index']);

Route::get('/houses', [WiteiController::class, 'getHouses'])->name('houses');
Route::get('/houses/{id}', [WiteiController::class, 'getHouseDetails'])->name('getHouseDetails');
Route::get('/vender_alquilar', [AlquilarController::class, 'showAlquiler']);
Route::get('/presencia_internacional', [PresenciaController::class, 'showPresencia']);
Route::get('/hannan_piper_university', [UniversityController::class, 'showUniversity']);
Route::get('/obra_social', [ObraSocialController::class, 'showObraSocial']);
