<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spiritual extends Model
{
    use HasFactory;

    protected $table = 'Tb_Spiritual';
    protected $primaryKey = 'id_spiritual';
    protected $fillable = ['periode', 'semester', 'kelas', 'siswa', 'aspek_spiritual', 'nilai', 'predikat', 'deskripsi'];
}
