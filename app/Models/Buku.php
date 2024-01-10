<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'buku';

    public $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit'
    ];
}
