<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keterampilan extends Model
{
    use HasFactory;

    protected $table = 'Tb_keterampilan';
    protected $primaryKey = 'id_keterampilan';
    protected $fillable = ['id_penilaian_harian','periode','semester','mapel','kelas','siswa','K1','K2','K3','K4','K5','K6','K7','K8','HPA','predikat'];
}
