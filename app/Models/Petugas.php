<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;
    protected $table = 'petugass';

    protected $fillable = [
        'nip_petugas',
        'nama_petugas',
        'jabatan_petugas',
    ];

    public function Sertifikats(){
        return $this->hasOne(Sertifikat::class);
    }

    public function Jadwals(){
        return $this->hasOne(Jadwal::class);
    }
}
