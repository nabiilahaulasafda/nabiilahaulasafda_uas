<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nip_petugas',
        'nama_petugas',
        'jabatan_petugas',
    ];

    public function Sertifikats(){
        return $this->belongTo(Sertifikat::class);
    }
}
