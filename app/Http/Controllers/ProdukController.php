<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk; // import model produk

class ProdukController extends Controller
{
    //
    public function listProduk(){ 
        $daftarProduk = Produk::all();
        return view('produk',compact(['daftarProduk']));
    }
}
