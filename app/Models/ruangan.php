<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    use HasFactory;

    protected $table = 'Tb_Ruangan';
    protected $primaryKey = 'id_ruangan';
    protected $fillable = ['id_ruangan','kd_ruangan','ruangan'];

    public function kelas(){

        return $this->hasOne(kelas::class);
    }


}
