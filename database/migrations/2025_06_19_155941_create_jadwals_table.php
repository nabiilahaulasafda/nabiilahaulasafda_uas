<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->string('nim_mahasiswa',100);
            $table->foreign('nim_mahasiswa')->references('nim_mahasiswa')->on('pengajuans')->onDelete('cascade');
            $table->string('nip_petugas',100);
            $table->foreign('nip_petugas')->references('nip_petugas')->on('petugass')->onDelete('cascade');
            $table->string('jadwal',100);
            $table->date('tgl_mulaimagang');
            $table->date('tgl_selesaimagang');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
