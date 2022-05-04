<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{

    use HasFactory;
    protected $table = 'Tb_Jadwal';
    protected $primaryKey = 'id_jadwal';
    protected $fillable = ['id_jadwal','mengajar','semester','hari','jam_ke','jam_awal','jam_akhir','jumlah_menit'];

    public function mengajar(){

        return $this->belongsTo(mengajar::class,'mengajar','id_mengajar');
    }
}
