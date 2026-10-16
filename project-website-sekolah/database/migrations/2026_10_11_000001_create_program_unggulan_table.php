<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('program_unggulan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_program', 150);
            $table->text('deskripsi')->nullable();
            $table->string('ikon_foto')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('program_unggulan');
    }
};
