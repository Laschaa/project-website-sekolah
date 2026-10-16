<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GaleriKegiatan extends Model
{
    protected $table = 'galeri_kegiatan';

    protected $fillable = [
        'judul_kegiatan',
        'kategori',
        'foto_path',
        'tanggal',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];
}
