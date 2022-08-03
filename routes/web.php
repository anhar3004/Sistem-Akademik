<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\dataPeriodeController;
use App\Http\Controllers\dataRuanganController;
use App\Http\Controllers\dataKelasController;
use App\Http\Controllers\dataSiswaController;
use App\Http\Controllers\dataGuruController;
use App\Http\Controllers\dataPelajaranController;
use App\Http\Controllers\dataMengajarController;
use App\Http\Controllers\dataJadwalController;
use App\Http\Controllers\dataNilaiController;
use App\Http\Controllers\dataRaporController;
use App\Http\Controllers\dataPerkembanganController;
use App\Http\Controllers\dataPrestasiController;
use App\Http\Controllers\dataUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\biodataController;
use App\Http\Controllers\dataJadwalMengajarController;
use App\Http\Controllers\dataMengajarGuruController;

// Route::get('/', function () {
//     return view('Login.Login');
// });

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/', [AuthController::class, 'index'])->name('login');
// Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/cekLogin', [AuthController::class, 'proses_login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
// // Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');
// Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
// Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:Admin']], function () {

        Route::get('/DashboardAdmin', [adminController::class, 'index'])->name('dashboard');

        Route::get('/periode', [dataPeriodeController::class, 'index']);
        Route::get('/periode/dataTable', [dataPeriodeController::class, 'dataTable']);
        Route::post('/periode/create', [dataPeriodeController::class, 'create']);
        Route::get('/periode/{id}/edit', [dataPeriodeController::class, 'edit']);
        Route::get('/periode/{id}/delete', [dataPeriodeController::class, 'delete']);
        Route::put('/periode/{id}/update', [dataPeriodeController::class, 'update']);

        Route::get('/ruangan', [dataRuanganController::class, 'index']);
        Route::get('/ruangan/dataTable', [dataRuanganController::class, 'dataTable']);
        Route::post('/ruangan/create', [dataRuanganController::class, 'create']);
        Route::get('/ruangan/{id}/edit', [dataRuanganController::class, 'edit']);
        Route::put('/ruangan/{id}/update', [dataRuanganController::class, 'update']);
        Route::get('/ruangan/{id}/delete', [dataRuanganController::class, 'delete']);

        Route::get('/kelas', [dataKelasController::class, 'index']);
        Route::get('/kelas/dataTable', [dataKelasController::class, 'dataTable']);
        Route::post('/kelas/create', [dataKelasController::class, 'create']);
        Route::get('/kelas/{id}/delete', [dataKelasController::class, 'delete']);
        Route::get('/kelas/{id}/edit', [dataKelasController::class, 'edit']);
        Route::put('/kelas/{id}/update', [dataKelasController::class, 'update']);
        Route::get('/kelas/{id}/daftarSiswa', [dataKelasController::class, 'daftarSiswa']);

        Route::get('/siswa', [dataSiswaController::class, 'index']);
        Route::get('/siswa/dataTable', [dataSiswaController::class, 'dataTable']);
        Route::post('/siswa/create', [dataSiswaController::class, 'create']);
        Route::get('/siswa/{id}/edit', [dataSiswaController::class, 'edit']);
        Route::put('/siswa/{id}/update', [dataSiswaController::class, 'update']);
        Route::get('/siswa/{id}/delete', [dataSiswaController::class, 'delete']);
        Route::get('/siswa/{id}/detail', [dataSiswaController::class, 'detail']);


        Route::get('/guru', [dataGuruController::class, 'index']);
        Route::get('/guru/dataTable', [dataGuruController::class, 'dataTable']);
        Route::post('/guru/create', [dataGuruController::class, 'create']);
        Route::get('/guru/{id}/edit', [dataGuruController::class, 'edit']);
        Route::put('/guru/{id}/update', [dataGuruController::class, 'update']);
        Route::get('/guru/{id}/delete', [dataGuruController::class, 'delete']);
        Route::get('/guru/{id}/detail', [dataGuruController::class, 'detail']);

        Route::get('/pelajaran', [dataPelajaranController::class, 'index']);
        Route::get('/pelajaran/dataTable', [dataPelajaranController::class, 'dataTable']);
        Route::get('/pelajaran/noUrut', [dataPelajaranController::class, 'noUrut']);
        Route::post('/pelajaran/create', [dataPelajaranController::class, 'create']);
        Route::get('/pelajaran/{id}/edit', [dataPelajaranController::class, 'edit']);
        Route::put('/pelajaran/{id_mapel}/update', [dataPelajaranController::class, 'update']);
        Route::get('/pelajaran/{id_mapel}/delete', [dataPelajaranController::class, 'delete']);

        Route::get('/mengajar', [dataMengajarController::class, 'index']);
        Route::get('/mengajar/dataTable', [dataMengajarController::class, 'dataTable']);
        Route::post('/mengajar/create', [dataMengajarController::class, 'create']);
        Route::get('/mengajar/{id}/edit', [dataMengajarController::class, 'edit']);
        Route::put('/mengajar/{id}/update', [dataMengajarController::class, 'update']);
        Route::get('/mengajar/{id}/delete', [dataMengajarController::class, 'delete']);

        Route::get('/jadwal', [dataJadwalController::class, 'index']);
        Route::get('/jadwal/daftar', [dataJadwalController::class, 'daftar']);
        Route::get('/jadwal/{id}/dataPelajaran', [dataJadwalController::class, 'dataPelajaran']);
        Route::get('/jadwal/{id}/dataPengajar', [dataJadwalController::class, 'dataPengajar']);
        Route::post('/jadwal/create', [dataJadwalController::class, 'create']);
        Route::get('/jadwal/{id}/ubahJadwal', [dataJadwalController::class, 'ubahJadwal']);
        Route::put('/jadwal/{id}/update', [dataJadwalController::class, 'update']);
        Route::get('/jadwal/{id}/delete', [dataJadwalController::class, 'delete']);

        Route::get('/nilai', [dataNilaiController::class, 'indexAdmin']);
        // Route::get('/jadwal/daftar', [dataNilaiController::class, 'daftar']);
        // Route::get('/jadwal/{id}/dataPelajaran', [dataNilaiController::class, 'dataPelajaran']);
        // Route::get('/jadwal/{id}/dataPengajar', [dataNilaiController::class, 'dataPengajar']);
        // Route::post('/jadwal/create', [dataNilaiController::class, 'create']);
        // Route::get('/jadwal/{id}/ubahJadwal', [dataNilaiController::class, 'ubahJadwal']);
        // Route::put('/jadwal/{id}/update', [dataNilaiController::class, 'update']);
        // Route::get('/jadwal/{id}/delete', [dataNilaiController::class, 'delete']);

        Route::get('/rapor', [dataRaporController::class, 'index']);
        Route::get('/perkembangan', [dataPerkembanganController::class, 'index']);
        Route::get('/prestasi', [dataPrestasiController::class, 'index']);
        Route::get('/user', [dataUserController::class, 'index']);
    });
    Route::group(['middleware' => ['cek_login:Guru']], function () {
        // Route::resource('guru', AdminController::class);
        Route::get('/DashboardGuru', [guruController::class, 'index'])->name('dashboard');

        Route::get('/biodata', [biodataController::class, 'index']);
        Route::get('/biodata/detail', [biodataController::class, 'detail']);
        Route::get('/guru/{id}/edit', [dataGuruController::class, 'edit']);
        Route::put('/guru/{id}/update', [dataGuruController::class, 'update']);

        Route::get('/dataMengajarGuru', [dataMengajarGuruController::class, 'index']);
        Route::get('/jadwalMengajar/dataTable', [dataJadwalMengajarController::class, 'dataTable']);

        Route::get('/jadwalMengajar', [dataJadwalMengajarController::class, 'index']);
        Route::get('/jadwalMengajar/dataTable', [dataJadwalMengajarController::class, 'dataTable']);

        Route::get('/Nilai', [dataNilaiController::class, 'indexGuru']);
    });
});

// Route::get('/', [adminController::class, 'index']);
// Route::get('/home', [adminController::class, 'index']);

// Route::get('/home', [adminController::class, 'index']);
