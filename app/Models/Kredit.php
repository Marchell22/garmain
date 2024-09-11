<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kredit extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'alamat',
        'noKTP',
        'jenisBarang',
        'merkBarang',
        'tipeBarang',
        'hargaBarang',
    ];

    public function fileUploads()
    {
        return $this->hasMany(FileUpload::class, 'ownerName', 'nama');
    }
}
