<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mengajar extends Model
{
    use HasFactory;
    protected $table = 'Tb_Mengajar';
    protected $primaryKey = 'id_mengajar';
    protected $fillable = ['id_mengajar','kelas','mapel','guru'];

    public function class(){

        return $this->belongsTo(kelas::class,'kelas','id_kelas');
    }

    public function pelajaran(){

        return $this->belongsTo(pelajaran::class,'mapel','id_mapel');
    }

    public function pengajar(){

        return $this->belongsTo(guru::class,'guru','id_guru');
    }

    public function jadwal(){

        return $this->hasMany(jadwal::class);
    }

}
