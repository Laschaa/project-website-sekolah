<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpdbSantri extends Model
{
    protected $table = 'ppdb_santri';

    protected $fillable = [
        'nama_lengkap',
        'nama_panggilan',
        'tempat_tanggal_lahir',
        'jenis_kelamin',
        'nama_ayah',
        'nama_ibu',
        'no_whatsapp',
        'alamat',
    ];
}
