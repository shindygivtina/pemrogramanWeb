<?php

use App\Http\Controllers\BumilController;
use App\Http\Controllers\DataanakController;
use App\Http\Controllers\HomeControllers;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('calender', [HomeControllers::class, 'tanggal'])->middleware(['auth'])->name('calender');
Route::get('form', [HomeControllers::class, 'formulir'])->middleware(['auth'])->name('form');
Route::get('data', [HomeControllers::class, 'tabs'])->middleware(['auth'])->name('data');

Route::get('/table', [DataanakController::class, 'index'])->middleware(['auth'])->name('table');
Route::post('/insertdata', [DataanakController::class, 'insertdata'])->middleware(['auth'])->name('insertdata');
Route::get('/tampilanData/{id}', [DataanakController::class, 'tampilanData'])->middleware(['auth'])->name('tampilanData');
Route::post('/updateData/{id}', [DataanakController::class, 'updateData'])->middleware(['auth'])->name('updateData');
Route::get('/deleteData/{id}', [DataanakController::class, 'deleteData'])->middleware(['auth'])->name('deleteData');

Route::get('/tableBumil', [BumilController::class, 'index'])->middleware(['auth'])->name('tableBumil');
Route::post('/insertdataBumil', [BumilController::class, 'insertdataBumil'])->middleware(['auth'])->name('insertdataBumil');
Route::get('/tampilanDataBumil/{id}', [BumilController::class, 'tampilanDataBumil'])->middleware(['auth'])->name('tampilanDataBumil');
Route::post('/updateDataBumil/{id}', [BumilController::class, 'updateDataBumil'])->middleware(['auth'])->name('updateDataBumil');
Route::get('/deleteDataBumil/{id}', [BumilController::class, 'deleteDataBumil'])->middleware(['auth'])->name('deleteDataBumil');


require __DIR__ . '/auth.php';
