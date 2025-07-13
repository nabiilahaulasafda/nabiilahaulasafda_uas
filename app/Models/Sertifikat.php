<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    use HasFactory;
    public function Pengajuans(){
        return $this->belongsTo(Pengajuan::class, 'pengajuans_id', 'id');
    }

    public function Petugass(){
        return $this->belongsTo(Petugas::class, 'petugass_id', 'id');
    }

}
