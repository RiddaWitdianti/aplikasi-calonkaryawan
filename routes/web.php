<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\DataPendidikanTerakhirController;
use App\Http\Controllers\DataRiwayatPekerjaanController;
use App\Http\Controllers\DataRiwayatPelatihanController;
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
    return view('home',  [
        'name' => 'Ridda Witdianti',
        'role' => 'Calon Karyawan',
    ]);
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/biodata', [BiodataController::class, 'index']);
Route::get('/biodata/{id}', [BiodataController::class, 'show']);
Route::get('/biodata-add', [BiodataController::class, 'create']);
Route::post('biodata', [BiodataController::class, 'store']);
Route::get('/biodata-edit/{id}', [BiodataController::class, 'edit']);
Route::put('/biodata/{id}', [BiodataController::class, 'update']);
Route::get('/biodata-delete/{id}', [BiodataController::class, 'delete']);
Route::delete('/biodata-destroy/{id}', [BiodataController::class, 'destroy']);


Route::get('/datapendidikanterakhir', [DataPendidikanTerakhirController::class, 'index']);
Route::get('/datapendidikanterakhir/{id}', [DataPendidikanTerakhirController::class, 'show']);
Route::get('/datapendidikanterakhir-add', [DataPendidikanTerakhirController::class, 'create']);
Route::post('datapendidikanterakhir', [DataPendidikanTerakhirController::class, 'store']);
Route::get('/datapendidikanterakhir-edit/{id}', [DataPendidikanTerakhirController::class, 'edit']);
Route::put('/datapendidikanterakhir/{id}', [DataPendidikanTerakhirController::class, 'update']);
Route::get('/datapendidikanterakhir-delete/{id}', [DataPendidikanTerakhirController::class, 'delete']);
Route::delete('/datapendidikanterakhir-destroy/{id}', [DataPendidikanTerakhirController::class, 'destroy']);


Route::get('/datariwayatpelatihan', [DataRiwayatPelatihanController::class, 'index']);
Route::get('/datariwayatpelatihan/{id}', [DataRiwayatPelatihanController::class, 'show']);
Route::get('/datariwayatpelatihan-add', [DataRiwayatPelatihanController::class, 'create']);
Route::post('datariwayatpelatihan', [DataRiwayatPelatihanController::class, 'store']);
Route::get('/datariwayatpelatihan-edit/{id}', [DataRiwayatPelatihanController::class, 'edit']);
Route::put('/datariwayatpelatihan/{id}', [DataRiwayatPelatihanController::class, 'update']);
Route::get('/datariwayatpelatihan-delete/{id}', [DataRiwayatPelatihanController::class, 'delete']);
Route::delete('/datariwayatpelatihan-destroy/{id}', [DataRiwayatPelatihanController::class, 'destroy']);


Route::get('/datariwayatpekerjaan', [DataRiwayatPekerjaanController::class, 'index']);
Route::get('/datariwayatpekerjaan/{id}', [DataRiwayatPekerjaanController::class, 'show']);
Route::get('/datariwayatpekerjaan-add', [DataRiwayatPekerjaanController::class, 'create']);
Route::post('datariwayatpekerjaan', [DataRiwayatPekerjaanController::class, 'store']);
Route::get('/datariwayatpekerjaan-edit/{id}', [DataRiwayatPekerjaanController::class, 'edit']);
Route::put('/datariwayatpekerjaan/{id}', [DataRiwayatPekerjaanController::class, 'update']);
Route::get('/datariwayatpekerjaan-delete/{id}', [DataRiwayatPekerjaanController::class, 'delete']);
Route::delete('/datariwayatpekerjaan-destroy/{id}', [DataRiwayatPekerjaanController::class, 'destroy']);
