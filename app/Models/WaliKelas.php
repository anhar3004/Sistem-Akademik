<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaliKelas extends Model
{
    use HasFactory;

    protected $table = 'Tb_Guru';
    protected $primaryKey = 'id_guru';
    protected $fillable = ['id_guru','nip','nama_lengkap','tempat_lahir','tanggal_lahir','jenis_kelamin','alamat','no_hp','email','foto','username'];

    public function kelas(){

        return $this->hasOne(kelas::class);
    }

    public function mengajar(){

        return $this->hasMany(mengajar::class);
    }

    public function user(){

        return $this->belongsTo(User::class,'username','id_user');
    }
}
