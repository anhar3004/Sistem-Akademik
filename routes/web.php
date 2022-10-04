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
use App\Http\Controllers\dataNilaiGuruController;

// Wali Kwlas Controller
use App\Http\Controllers\WaliKelas\waliKelasController;
use App\Http\Controllers\WaliKelas\biodataWaliKelasController;
use App\Http\Controllers\WaliKelas\dataWaliKelasController;
use App\Http\Controllers\WaliKelas\dataMengajarWaliKelasController;
use App\Http\Controllers\WaliKelas\dataJadwalMengajarWaliKelasController;
use App\Http\Controllers\WaliKelas\dataNilaiWaliKelasController;
use App\Http\Controllers\WaliKelas\dataPerkembanganWaliKelasController;
use App\Http\Controllers\WaliKelas\dataAbsensiController;



Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/cekLogin', [AuthController::class, 'proses_login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:Admin']], function () {

        Route::get('/admin', [adminController::class, 'index'])->name('dashboard');

        Route::get('/admin/periode', [dataPeriodeController::class, 'index']);
        Route::get('/admin/periode/dataTable', [dataPeriodeController::class, 'dataTable']);
        Route::post('/admin/periode/create', [dataPeriodeController::class, 'create']);
        Route::get('/admin/periode/{id}/edit', [dataPeriodeController::class, 'edit']);
        Route::get('/admin/periode/{id}/delete', [dataPeriodeController::class, 'delete']);
        Route::put('/admin/periode/{id}/update', [dataPeriodeController::class, 'update']);

        Route::get('/admin/ruangan', [dataRuanganController::class, 'index']);
        Route::get('/admin/ruangan/dataTable', [dataRuanganController::class, 'dataTable']);
        Route::post('/admin/ruangan/create', [dataRuanganController::class, 'create']);
        Route::get('/admin/ruangan/{id}/edit', [dataRuanganController::class, 'edit']);
        Route::put('/admin/ruangan/{id}/update', [dataRuanganController::class, 'update']);
        Route::get('/admin/ruangan/{id}/delete', [dataRuanganController::class, 'delete']);

        Route::get('/admin/kelas', [dataKelasController::class, 'index']);
        Route::get('/admin/kelas/dataTable', [dataKelasController::class, 'dataTable']);
        Route::post('/admin/kelas/create', [dataKelasController::class, 'create']);
        Route::get('/admin/kelas/{id}/delete', [dataKelasController::class, 'delete']);
        Route::get('/admin/kelas/{id}/edit', [dataKelasController::class, 'edit']);
        Route::put('/admin/kelas/{id}/update', [dataKelasController::class, 'update']);
        Route::get('/admin/kelas/{id}/daftarSiswa', [dataKelasController::class, 'daftarSiswa']);

        Route::get('/admin/siswa', [dataSiswaController::class, 'index']);
        Route::get('/admin/siswa/dataTable', [dataSiswaController::class, 'dataTable']);
        Route::post('/admin/siswa/create', [dataSiswaController::class, 'create']);
        Route::get('/admin/siswa/{id}/edit', [dataSiswaController::class, 'edit']);
        Route::put('/admin/siswa/{id}/update', [dataSiswaController::class, 'update']);
        Route::get('/admin/siswa/{id}/delete', [dataSiswaController::class, 'delete']);
        Route::get('/admin/siswa/{id}/detail', [dataSiswaController::class, 'detail']);


        Route::get('/admin/guru', [dataGuruController::class, 'index']);
        Route::get('/admin/guru/dataTable', [dataGuruController::class, 'dataTable']);
        Route::post('/admin/guru/create', [dataGuruController::class, 'create']);
        Route::get('/admin/guru/{id}/edit', [dataGuruController::class, 'edit']);
        Route::put('/admin/guru/{id}/update', [dataGuruController::class, 'update']);
        Route::get('/admin/guru/{id}/delete', [dataGuruController::class, 'delete']);
        Route::get('/admin/guru/{id}/detail', [dataGuruController::class, 'detail']);

        Route::get('/admin/pelajaran', [dataPelajaranController::class, 'index']);
        Route::get('/admin/pelajaran/dataTable', [dataPelajaranController::class, 'dataTable']);
        Route::get('/admin/pelajaran/noUrut', [dataPelajaranController::class, 'noUrut']);
        Route::post('/admin/pelajaran/create', [dataPelajaranController::class, 'create']);
        Route::get('/admin/pelajaran/{id}/edit', [dataPelajaranController::class, 'edit']);
        Route::put('/admin/pelajaran/{id_mapel}/update', [dataPelajaranController::class, 'update']);
        Route::get('/admin/pelajaran/{id_mapel}/delete', [dataPelajaranController::class, 'delete']);

        Route::get('/admin/mengajar', [dataMengajarController::class, 'index']);
        Route::get('/admin/mengajar/dataTable', [dataMengajarController::class, 'dataTable']);
        Route::post('/admin/mengajar/create', [dataMengajarController::class, 'create']);
        Route::get('/admin/mengajar/{id}/edit', [dataMengajarController::class, 'edit']);
        Route::put('/admin/mengajar/{id}/update', [dataMengajarController::class, 'update']);
        Route::get('/admin/mengajar/{id}/delete', [dataMengajarController::class, 'delete']);

        Route::get('/admin/jadwal', [dataJadwalController::class, 'index']);
        Route::get('/admin/jadwal/daftar', [dataJadwalController::class, 'daftar']);
        Route::get('/admin/jadwal/{id}/dataPelajaran', [dataJadwalController::class, 'dataPelajaran']);
        Route::get('/admin/jadwal/{id}/dataPengajar', [dataJadwalController::class, 'dataPengajar']);
        Route::post('/admin/jadwal/create', [dataJadwalController::class, 'create']);
        Route::get('/admin/jadwal/{id}/ubahJadwal', [dataJadwalController::class, 'ubahJadwal']);
        Route::put('/admin/jadwal/{id}/update', [dataJadwalController::class, 'update']);
        Route::get('/admin/jadwal/{id}/delete', [dataJadwalController::class, 'delete']);

        Route::get('/admin/nilai', [dataNilaiController::class, 'indexAdmin']);
        // Route::get('/jadwal/daftar', [dataNilaiController::class, 'daftar']);
        // Route::get('/jadwal/{id}/dataPelajaran', [dataNilaiController::class, 'dataPelajaran']);
        // Route::get('/jadwal/{id}/dataPengajar', [dataNilaiController::class, 'dataPengajar']);
        // Route::post('/jadwal/create', [dataNilaiController::class, 'create']);
        // Route::get('/jadwal/{id}/ubahJadwal', [dataNilaiController::class, 'ubahJadwal']);
        // Route::put('/jadwal/{id}/update', [dataNilaiController::class, 'update']);
        // Route::get('/jadwal/{id}/delete', [dataNilaiController::class, 'delete']);

        Route::get('/admin/rapor', [dataRaporController::class, 'index']);
        Route::get('/admin/perkembangan', [dataPerkembanganController::class, 'index']);
        Route::get('/admin/prestasi', [dataPrestasiController::class, 'index']);
        Route::get('/admin/user', [dataUserController::class, 'index']);
    });

    Route::group(['middleware' => ['cek_login:Guru']], function () {
        // Route::resource('guru', AdminController::class);
        Route::get('/guru', [guruController::class, 'index'])->name('dashboard');

        Route::get('/guru/biodata', [biodataController::class, 'index']);
        Route::get('/guru/biodata/detail', [biodataController::class, 'detail']);
        Route::get('/guru/biodata/{id}/edit', [dataGuruController::class, 'edit']);
        Route::put('/guru/biodata/{id}/update', [dataGuruController::class, 'update']);

        Route::get('/guru/mengajar', [dataMengajarGuruController::class, 'index']);
        Route::get('/guru/mengajar/dataTable', [dataMengajarGuruController::class, 'dataTable']);

        Route::get('/guru/jadwal', [dataJadwalMengajarController::class, 'index']);
        Route::get('/guru/jadwal/dataTable', [dataJadwalMengajarController::class, 'dataTable']);

        Route::get('/guru/nilai', [dataNilaiGuruController::class, 'index']);
        Route::get('/guru/nilai/dataTable', [dataMengajarGuruController::class, 'dataTable']);

        Route::get('/guru/nilai/{id}/formTambahNilaiPenilaianHarian', [dataNilaiGuruController::class, 'formTambahNilaiPenilaianHarian']);
        Route::get('/guru/nilai/{id}/{semester}/dataTablePenilaianHarian', [dataNilaiGuruController::class, 'dataTablePenilaianHarian']);
        Route::post('/guru/nilai/createPenilaianHarian', [dataNilaiGuruController::class, 'createPenilaianHarian']);
        Route::get('/guru/nilai/{id}/editPenilaianHarian', [dataNilaiGuruController::class, 'editPenilaianHarian']);
        Route::put('/guru/nilai/{id}/updatePenilaianHarian', [dataNilaiGuruController::class, 'updatePenilaianHarian']);
        Route::get('/guru/nilai/{id}/deletePenilaianHarian', [dataNilaiGuruController::class, 'deletePenilaianHarian']);


        Route::get('/guru/nilai/{id}/{semester}/dataTablePengetahuan', [dataNilaiGuruController::class, 'dataTablePengetahuan']);
        Route::get('/guru/nilai/{id}/formTambahNilaiPengetahuan', [dataNilaiGuruController::class, 'formTambahNilaiPengetahuan']);
        Route::post('/guru/nilai/createPengetahuan', [dataNilaiGuruController::class, 'createPengetahuan']);
        Route::get('/guru/nilai/{id}/editPengetahuan', [dataNilaiGuruController::class, 'editPengetahuan']);
        Route::get('/guru/nilai/{id}/deletePengetahuan', [dataNilaiGuruController::class, 'deletePengetahuan']);
        Route::get('/guru/nilai/{id}/updatePengetahuan', [dataNilaiGuruController::class, 'updatePengetahuan']);

        Route::get('/guru/nilai/{id}/{semester}/dataTableKeterampilan', [dataNilaiGuruController::class, 'dataTableKeterampilan']);
        Route::get('/guru/nilai/{id}/formTambahNilaiKeterampilan', [dataNilaiGuruController::class, 'formTambahNilaiKeterampilan']);
        Route::post('/guru/nilai/createKeterampilan', [dataNilaiGuruController::class, 'createKeterampilan']);
        Route::get('/guru/nilai/{id}/editKeterampilan', [dataNilaiGuruController::class, 'editKeterampilan']);
        Route::put('/guru/nilai/{id}/updateKeterampilan', [dataNilaiGuruController::class, 'updateKeterampilan']);
        Route::get('/guru/nilai/{id}/deleteKeterampilan', [dataNilaiGuruController::class, 'deleteKeterampilan']);
    });

    Route::group(['middleware' => ['cek_login:Walkes']], function () {
        // Route::resource('guru', AdminController::class);
        Route::get('/wali_kelas', [waliKelasController::class, 'index'])->name('dashboard');

        Route::get('/wali_kelas/biodata', [biodataWaliKelasController::class, 'index']);
        Route::get('/wali_kelas/biodata/detail', [biodataWaliKelasController::class, 'detail']);
        Route::get('/wali_kelas/biodata/{id}/edit', [biodataWaliKelasController::class, 'edit']);
        Route::put('/wali_kelas/biodata/{id}/update', [biodataWaliKelasController::class, 'update']);

        Route::get('/wali_kelas/mengajar', [dataMengajarWaliKelasController::class, 'index']);
        Route::get('/wali_kelas/mengajar/dataTable', [dataMengajarWaliKelasController::class, 'dataTable']);

        Route::get('/wali_kelas/jadwal', [dataJadwalMengajarWaliKelasController::class, 'index']);
        Route::get('/wali_kelas/jadwal/dataTable', [dataJadwalMengajarWaliKelasController::class, 'dataTable']);

        Route::get('/wali_kelas/nilai', [dataNilaiWaliKelasController::class, 'index']);
        Route::get('/wali_kelas/nilai/dataTable', [dataMengajarWaliKelasController::class, 'dataTable']);

        Route::get('/wali_kelas/nilai/{id}/formTambahNilaiPenilaianHarian', [dataNilaiWaliKelasController::class, 'formTambahNilaiPenilaianHarian']);
        Route::get('/wali_kelas/nilai/{id}/{semester}/dataTablePenilaianHarian', [dataNilaiWaliKelasController::class, 'dataTablePenilaianHarian']);
        Route::post('/wali_kelas/nilai/createPenilaianHarian', [dataNilaiWaliKelasController::class, 'createPenilaianHarian']);
        Route::get('/wali_kelas/nilai/{id}/editPenilaianHarian', [dataNilaiWaliKelasController::class, 'editPenilaianHarian']);
        Route::put('/wali_kelas/nilai/{id}/updatePenilaianHarian', [dataNilaiWaliKelasController::class, 'updatePenilaianHarian']);
        Route::get('/wali_kelas/nilai/{id}/deletePenilaianHarian', [dataNilaiWaliKelasController::class, 'deletePenilaianHarian']);


        Route::get('/wali_kelas/nilai/{id}/{semester}/dataTablePengetahuan', [dataNilaiWaliKelasController::class, 'dataTablePengetahuan']);
        Route::get('/wali_kelas/nilai/{id}/formTambahNilaiPengetahuan', [dataNilaiWaliKelasController::class, 'formTambahNilaiPengetahuan']);
        Route::post('/wali_kelas/nilai/createPengetahuan', [dataNilaiWaliKelasController::class, 'createPengetahuan']);
        Route::get('/wali_kelas/nilai/{id}/editPengetahuan', [dataNilaiWaliKelasController::class, 'editPengetahuan']);
        Route::put('/wali_kelas/nilai/{id}/deletePengetahuan', [dataNilaiWaliKelasController::class, 'deletePengetahuan']);
        Route::get('/wali_kelas/nilai/{id}/updatePengetahuan', [dataNilaiWaliKelasController::class, 'updatePengetahuan']);

        Route::get('/wali_kelas/nilai/{id}/{semester}/dataTableKeterampilan', [dataNilaiWaliKelasController::class, 'dataTableKeterampilan']);
        Route::get('/wali_kelas/nilai/{id}/formTambahNilaiKeterampilan', [dataNilaiWaliKelasController::class, 'formTambahNilaiKeterampilan']);
        Route::post('/wali_kelas/nilai/createKeterampilan', [dataNilaiWaliKelasController::class, 'createKeterampilan']);
        Route::get('/wali_kelas/nilai/{id}/editKeterampilan', [dataNilaiWaliKelasController::class, 'editKeterampilan']);
        Route::put('/wali_kelas/nilai/{id}/updateKeterampilan', [dataNilaiWaliKelasController::class, 'updateKeterampilan']);
        Route::get('/wali_kelas/nilai/{id}/deleteKeterampilan', [dataNilaiWaliKelasController::class, 'deleteKeterampilan']);

        Route::get('/wali_kelas/perkembangan', [dataPerkembanganWaliKelasController::class, 'index']);
        Route::get('/wali_kelas/perkembangan/dataTable', [dataPerkembanganWaliKelasController::class, 'dataTable']);

        Route::get('/wali_kelas/perkembangan/{id}/formTambahSpiritual', [dataPerkembanganWaliKelasController::class, 'formTambahSpiritual']);
        Route::get('/wali_kelas/perkembangan/{id}/{semester}/dataTableSpiritual', [dataPerkembanganWaliKelasController::class, 'dataTableSpiritual']);
        Route::post('/wali_kelas/perkembangan/createSpiritual', [dataPerkembanganWaliKelasController::class, 'createSpiritual']);
        Route::get('/wali_kelas/perkembangan/{id}/editSpiritual', [dataPerkembanganWaliKelasController::class, 'editSpiritual']);
        Route::put('/wali_kelas/perkembangan/{id}/updateSpiritual', [dataPerkembanganWaliKelasController::class, 'updateSpiritual']);
        Route::get('/wali_kelas/perkembangan/{id}/deleteSpiritual', [dataPerkembanganWaliKelasController::class, 'deleteSpiritual']);

        Route::get('/wali_kelas/perkembangan/{id}/formTambahEmosional', [dataPerkembanganWaliKelasController::class, 'formTambahEmosional']);
        Route::get('/wali_kelas/perkembangan/{id}/{semester}/dataTableEmosional', [dataPerkembanganWaliKelasController::class, 'dataTableEmosional']);
        Route::post('/wali_kelas/perkembangan/createEmosional', [dataPerkembanganWaliKelasController::class, 'createEmosional']);
        Route::get('/wali_kelas/perkembangan/{id}/editEmosional', [dataPerkembanganWaliKelasController::class, 'editEmosional']);
        Route::put('/wali_kelas/perkembangan/{id}/updateEmosional', [dataPerkembanganWaliKelasController::class, 'updateEmosional']);
        Route::get('/wali_kelas/perkembangan/{id}/deleteEmosional', [dataPerkembanganWaliKelasController::class, 'deleteEmosional']);

        Route::get('/wali_kelas/perkembangan/{id}/{semester}/dataTableAkal', [dataPerkembanganWaliKelasController::class, 'dataTableAkal']);

        Route::get('/wali_kelas/perkembangan/{id}/formTambahSaran', [dataPerkembanganWaliKelasController::class, 'formTambahSaran']);
        Route::post('/wali_kelas/perkembangan/createSaran', [dataPerkembanganWaliKelasController::class, 'createSaran']);
        Route::get('/wali_kelas/perkembangan/{id}/{semester}/dataTableSaran', [dataPerkembanganWaliKelasController::class, 'dataTableSaran']);
        Route::get('/wali_kelas/perkembangan/{id}/editSaran', [dataPerkembanganWaliKelasController::class, 'editSaran']);
        Route::put('/wali_kelas/perkembangan/{id}/updateSaran', [dataPerkembanganWaliKelasController::class, 'updateSaran']);
        Route::get('/wali_kelas/perkembangan/{id}/deleteSaran', [dataPerkembanganWaliKelasController::class, 'deleteSaran']);

        Route::get('/wali_kelas/absensi', [dataAbsensiController::class, 'index']);
        Route::get('/wali_kelas/absensi/dataTable', [dataAbsensiController::class, 'dataTable']);

    });
});

// Route::get('/', [adminController::class, 'index']);
// Route::get('/home', [adminController::class, 'index']);

// Route::get('/home', [adminController::class, 'index']);
