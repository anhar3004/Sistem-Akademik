<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengetahuan extends Model
{
    use HasFactory;

    protected $table = 'Tb_Pengetahuan';
    protected $primaryKey = 'id_pengetahuan';
    protected $fillable = ['id_pengetahuan','RPH','PTS','PAS','HPA','predikat'];

}
