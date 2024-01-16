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
        Schema::create('peserta_meeting', function (Blueprint $table) {
            $table->id('id_peserta_meeting');
            $table->string('nip');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('id_absensi')->unique;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_meeting');
    }
};
