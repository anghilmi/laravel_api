<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    public $table = "tb_produk";
    protected $primaryKey = 'id_produk';
    public $timestamps = false;//
    protected $fillable = [
         'nama_produk', 'deskripsi_produk', 'harga_produk', 'url_produk'
    ];
}
