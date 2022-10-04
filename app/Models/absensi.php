<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
    use HasFactory;

    protected $table = 'Tb_Absensi';
    protected $primaryKey = 'id_absensi';
    protected $fillable = ['periode', 'semester', 'kelas', 'siswa', 'keterangan', 'created_at', 'updated_at'];
}
