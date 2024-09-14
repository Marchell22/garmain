<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kredit extends Model
{
    use HasFactory;
    protected $table    = 'peminjaman';

    protected $fillable = [
        'nama',
        'alamat',
        'noKTP',
        'document',
        'ktp',
        'stnk',
        'kk',
        'uraian_barang',
    ];

    // If you need to cast 'uraian_barang' as an array
    protected $casts = [
        'uraian_barang' => 'array',
    ];
}
