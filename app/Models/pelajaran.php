<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelajaran extends Model
{
    use HasFactory;
    protected $table = 'Tb_Pelajaran';
    protected $primaryKey = 'id_mapel';
    protected $fillable = ['id_mapel','kd_mapel','nama_mapel','muatan','kkm'];

    public function mengajar(){

        return $this->hasMany(mengajar::class);
    }
}
