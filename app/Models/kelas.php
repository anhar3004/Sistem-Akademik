<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    protected $table = 'Tb_Kelas';
    protected $primaryKey = 'id_kelas';
    protected $fillable = ['id_kelas','kelas','ruangan','walkes'];

    public function ruang(){

        return $this->belongsTo(ruangan::class,'ruangan','id_ruangan');
    }

    public function guru(){

        return $this->belongsTo(guru::class,'walkes','id_guru');
    }

    public function siswa(){

        return $this->hasMany(siswa::class);
    }

    public function mengajar(){

        return $this->hasMany(mengajar::class);
    }
}
