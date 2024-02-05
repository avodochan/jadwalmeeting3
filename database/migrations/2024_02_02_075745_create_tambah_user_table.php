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
        Schema::create('tambah_user', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->integer('nip');
            $table->enum('jabatan', ['Kepala Sekolah', 'Staff', 'Guru']);
            $table->string('nama');
            $table->enum('hak_akses', ['Admin', 'User']);
            $table->text('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tambah_user');
    }
};