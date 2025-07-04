<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nim_mahasiswa',
        'nama_mahasiswa',
        'ttl_mahasiswa',
        'hp_mahasiswa',
        'email_mahasiswa',
        'alamat_mahasiswa',
        'asal_kampus',
        'file_suratpermohonan',
    ];
}
