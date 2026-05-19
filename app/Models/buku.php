<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    //
    protected $primaryKey = 'isbn';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'isbn',
        'judul_buku',
        'pengarang',
        'penerbit',
        'tahun_terbit',
        'genre',
        'stok',
    ];
    public function peminjamen()
    {
        return $this->hasMany(peminjaman::class, 'isbn', 'isbn');
    }
}
