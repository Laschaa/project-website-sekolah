<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ppdb_santri', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 150);
            $table->string('nama_panggilan', 80)->nullable();
            $table->string('tempat_tanggal_lahir', 150);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('nama_ayah', 150);
            $table->string('nama_ibu', 150);
            $table->string('no_whatsapp', 20);
            $table->text('alamat');
            $table->string('status_pendaftaran', 30)->default('menunggu');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ppdb_santri');
    }
};
