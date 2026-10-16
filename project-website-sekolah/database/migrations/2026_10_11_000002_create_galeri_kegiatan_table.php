<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('galeri_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('judul_kegiatan', 200);
            $table->string('kategori', 100);
            $table->string('foto_path');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('galeri_kegiatan');
    }
};
