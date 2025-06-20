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
        $table->id(); // ini otomatis auto increment dan primary key
        $table->string('no_sertifikat', 100);
        $table->bigInteger('pengajuans_id');
        $table->bigInteger('petugass_id'); // hilangkan autoIncrement()
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
