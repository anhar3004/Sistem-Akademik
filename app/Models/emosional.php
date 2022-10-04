<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emosional extends Model
{
    use HasFactory;

    protected $table = 'Tb_Emosional';
    protected $primaryKey = 'id_emosional';
    protected $fillable = ['periode', 'semester', 'kelas', 'siswa', 'aspek_emosional', 'nilai', 'predikat', 'deskripsi'];
}
