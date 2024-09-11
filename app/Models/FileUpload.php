<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    use HasFactory;

    protected $fillable = [
        'fileName',
        'filePath',
        'ownerName',
    ];

    public function kredit()
    {
        return $this->belongsTo(Kredit::class, 'ownerName', 'nama');
    }
}
