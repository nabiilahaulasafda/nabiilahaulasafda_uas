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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('nim_mahasiswa',100);
            $table->string('nama_mahasiswa',100);
            $table->integer('ttl_mahasiswa');
            $table->integer('hp_mahasiswa');
            $table->string('email_mahasiswa',100);
            $table->string('alamat_mahasiswa',100);
            $table->string('asal_kampus',100);
            $table->string('file_suratpermohonan',100
        );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
