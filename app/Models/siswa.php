<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $table = 'Tb_Siswa';
    protected $primaryKey = 'id_siswa';
    protected $fillable = ['id_siswa','kelas','nis','nama_lengkap','tempat_lahir','tanggal_lahir','jenis_kelamin','agama','anak_ke','status','alamat','no_hp','tanggal_diterima','dikelas','nama_ibu','pekerjaan_ibu','nama_ayah','pekerjaan_ayah','nama_wali','pekerjaan_wali','alamat_wali','no_hp_wali'];

    public function class(){

        return $this->belongsTo(kelas::class,'kelas','id_kelas');
    }
}
