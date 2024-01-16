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
        Schema::create('jadwal_meeting', function (Blueprint $table) {
            $table->id('id_meeting');
            $table->string('id_akun')->unique;
            $table->string('id_buat_meeting')->unique;
            $table->string('id_ruangan')->unique;
            $table->string('nama_meeting');
            $table->string('kategori_meeting');
            $table->string('model_meeting');
            $table->string('deskripsi_meeting');
            $table->string('id_peserta_meeting')->unique;
            $table->string('durasi_meeting');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_meeting');
    }
};
