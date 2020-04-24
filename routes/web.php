<?php

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
Route::resource('/','DashboardController');
Route::resource('/matakuliah','MatakuliahController');
Route::resource('/kurikulum','KurikulumController');
Route::resource('/dosen','DosenController');
Route::resource('/prodi','ProdiController');
Route::resource('/mahasiswa','MahasiswaController');
