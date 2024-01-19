<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $table = 'peminjaman';

    public $fillable = [
        'user_id',
        'buku_id',
        'nama_peminjam',
        'nama_buku',
        'tgl_pinjam',
        'tgl_pengembalian',
        'rating',
        'ulasan',
        'status_peminjam'
    ];
}
