<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBuku_relasi extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = [
        'buku_id',
        'kategori_id'
        
    ];

}
