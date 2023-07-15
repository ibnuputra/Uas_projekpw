<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;

    // hubungin dengan table
    protected $table = 'kategori_produk';

    // Matiin timestamps
    public $timestamps = false;

    // bikin relasi 
    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
