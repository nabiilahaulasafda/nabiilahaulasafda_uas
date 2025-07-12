<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    use HasFactory;
    public function Pengajuans(){
        return $this->hasOne(Pengajuan::class, 'id', 'pengajuans_id');
    }

    public function Petugass(){
        return $this->hasOne(Petugas::class, 'id', 'petugass_id');
    }

}
