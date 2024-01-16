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
        Schema::create('model_eksternal', function (Blueprint $table) {
            $table->id('id_model_eksternal');
            $table->string('nama_tamu');
            $table->string('asal_instansi');
            $table->string('id_absensi')->unique;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_eksternal');
    }
};
