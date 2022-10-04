<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penilaian_harian extends Model
{
    use HasFactory;
    protected $table = 'Tb_penilaian_harian';
    protected $primaryKey = 'id_penilaian_harian';
    protected $fillable = ['id_penilaian_harian','periode','semester','mapel','kelas','siswa','PH1','PH2','PH3','PH4','PH5','PH6','PH7','PH8','RPH'];
}
