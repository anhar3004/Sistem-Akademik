<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\periodeController;
use App\Http\Controllers\ruanganController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\pelajaranController;
use App\Http\Controllers\mengajarController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\nilaiController;
use App\Http\Controllers\raporController;
use App\Http\Controllers\perkembanganController;
use App\Http\Controllers\prestasiController;
use App\Http\Controllers\userController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [adminController::class, 'index']);
Route::get('/home', [adminController::class, 'index']);

Route::get('/periode', [periodeController::class, 'index']);
Route::get('/periode/dataTable', [periodeController::class, 'dataTable']);
Route::get('/periode/create', [periodeController::class, 'create']);
Route::get('/periode/{id}/edit', [periodeController::class, 'edit']);
Route::get('/periode/{id}/delete', [periodeController::class, 'delete']);
Route::get('/periode/{id}/update', [periodeController::class, 'update']);

Route::get('/ruangan', [ruanganController::class, 'index']);
Route::get('/ruangan/dataTable', [ruanganController::class, 'dataTable']);
Route::get('/ruangan/create', [ruanganController::class, 'create']);
Route::get('/ruangan/{id}/edit', [ruanganController::class, 'edit']);
Route::get('/ruangan/{id}/update', [ruanganController::class, 'update']);
Route::get('/ruangan/{id}/delete', [ruanganController::class, 'delete']);

Route::get('/kelas', [kelasController::class, 'index']);
Route::get('/kelas/dataTable', [kelasController::class, 'dataTable']);
Route::get('/kelas/create', [kelasController::class, 'create']);
Route::get('/kelas/{id}/delete', [kelasController::class, 'delete']);
Route::get('/kelas/{id}/edit', [kelasController::class, 'edit']);
Route::get('/kelas/{id}/update', [kelasController::class, 'update']);
Route::get('/kelas/{id}/daftarSiswa', [kelasController::class, 'daftarSiswa']);

Route::get('/siswa', [siswaController::class, 'index']);
Route::get('/siswa/dataTable', [siswaController::class, 'dataTable']);
Route::get('/siswa/create', [siswaController::class, 'create']);
Route::get('/siswa/{id}/edit', [siswaController::class, 'edit']);
Route::get('/siswa/{id}/update', [siswaController::class, 'update']);
Route::get('/siswa/{id}/delete', [siswaController::class, 'delete']);
Route::get('/siswa/{id}/detail', [siswaController::class, 'detail']);

Route::get('/guru', [guruController::class, 'index']);
Route::get('/guru/dataTable', [guruController::class, 'dataTable']);
Route::get('/guru/create', [guruController::class, 'create']);
Route::get('/guru/{id}/edit', [guruController::class, 'edit']);
Route::get('/guru/{id}/update', [guruController::class, 'update']);
Route::get('/guru/{id}/delete', [guruController::class, 'delete']);
Route::get('/guru/{id}/detail', [guruController::class, 'detail']);

Route::get('/pelajaran', [pelajaranController::class, 'index']);
Route::get('/pelajaran/dataTable', [pelajaranController::class, 'dataTable']);
Route::get('/pelajaran/noUrut', [pelajaranController::class, 'noUrut']);
Route::get('/pelajaran/create', [pelajaranController::class, 'create']);
Route::get('/pelajaran/{id}/edit', [pelajaranController::class, 'edit']);
Route::get('/pelajaran/{id_mapel}/update', [pelajaranController::class, 'update']);
Route::get('/pelajaran/{id_mapel}/delete', [pelajaranController::class, 'delete']);

Route::get('/mengajar', [mengajarController::class, 'index']);
Route::get('/mengajar/dataTable', [mengajarController::class, 'dataTable']);
Route::get('/mengajar/create', [mengajarController::class, 'create']);
Route::get('/mengajar/{id}/edit', [mengajarController::class, 'edit']);
Route::get('/mengajar/{id}/update', [mengajarController::class, 'update']);
Route::get('/mengajar/{id}/delete', [mengajarController::class, 'delete']);

Route::get('/jadwal', [jadwalController::class, 'index']);
Route::get('/jadwal/daftar', [jadwalController::class, 'daftar']);
Route::get('/jadwal/{id}/dataPelajaran', [jadwalController::class, 'dataPelajaran']);
Route::get('/jadwal/{id}/dataPengajar', [jadwalController::class, 'dataPengajar']);
Route::get('/jadwal/create', [jadwalController::class, 'create']);
Route::get('/jadwal/{id}/ubahJadwal', [jadwalController::class, 'ubahJadwal']);
Route::get('/jadwal/{id}/update', [jadwalController::class, 'update']);
Route::get('/jadwal/{id}/delete', [jadwalController::class, 'delete']);

Route::get('/nilai', [nilaiController::class, 'index']);
Route::get('/rapor', [raporController::class, 'index']);
Route::get('/perkembangan', [perkembanganController::class, 'index']);
Route::get('/prestasi', [prestasiController::class, 'index']);
Route::get('/user', [userController::class, 'index']);


