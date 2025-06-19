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
        Schema::create('sertifikats', function (Blueprint $table) {
            $table->id();
            $table->string('no_sertifikat',100)->unique();
            $table->string('nim_mahasiswa',100);
            $table->foreign('nim_mahasiswa')->references('nim_mahasiswa')->on('mahasiswa')->onDelete('cascade');
            $table->string('nip_petugas',100);
            $table->foreign('nip_petugas')->references('nip_petugas')->on('petugas')->onDelete('cascade');
            $table->string('file_sertifikat')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sertifikats');
    }
};
