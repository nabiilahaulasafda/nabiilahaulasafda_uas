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
            $table->bigInteger('pengajuans_id');
            $table->bigInteger('petugass_id');
            $table->string('jadwal',100);
            $table->date('tgl_mulaimagang');
            $table->date('tgl_selesaimagang');
            $table->string('senin',100);
            $table->string('selasa',100);
            $table->string('rabu',100);
            $table->string('kamis',100);
            $table->string('jumat',100);
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
