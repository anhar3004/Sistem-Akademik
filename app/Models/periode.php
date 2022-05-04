<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class periode extends Model
{
    use HasFactory;

    protected $table = 'Tb_Periode';
    protected $primaryKey = 'id_periode';
    protected $fillable = ['id','periode_awal','periode_akhir'];

    // public function nilais(){

    //     return $this->hasMany(nilai::class);
    // }
}
