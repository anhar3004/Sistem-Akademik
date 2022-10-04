<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saran extends Model
{
    use HasFactory;

    protected $table = 'Tb_Saran';
    protected $primaryKey = 'id_saran';
    protected $fillable = ['periode', 'semester', 'kelas', 'siswa', 'saran_emosional','saran_spiritual', 'saran_akal'];
}
