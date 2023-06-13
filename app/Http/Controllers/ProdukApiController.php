<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukApiController extends Controller
{
    //
    public function listProduk(){ //semua produk
        $daftarProduk = Produk::all();
        return response()->json([
            'message' => 'sukses',
            'data'=> $daftarProduk
        ]);
    }

    public function tampilProduk($id){ //1 produk berdasar id
        $produk = Produk::find($id);
        return response()->json([
            'message' => 'sukses',
            'data'=> $produk            
        ]);
    }

    public function simpanProduk(Request $request){
        $tambahProduk = Produk::create($request->all()); // phpcs:ignore ..Mode4DetectInputValidation.Found
        return response()->json([
            'message' => 'sukses',
            'nama_produk'=> $request->nama_produk,
            'deskripsi_produk' => $request->deskripsi_produk,     
            'harga_produk' => $request->harga_produk, 
            'url_produk' => $request->url_produk         
        ]);
    }

    public function updateProduk(Request $request, $id){
        // $produk = Produk::find($request->id_produk);
        $produk = Produk::find($id);

        $produk->update($request->all());
        return response()->json([
            'message' => 'sukses',
            'nama_produk'=> $request->nama_produk,
            'deskripsi_produk' => $request->deskripsi_produk,     
            'harga_produk' => $request->harga_produk, 
            'url_produk' => $request->url_produk                
        ]);
    }

    public function hapusProduk(Request $request,$id){
        $produk = Produk::find($id);
        $produk->delete();
        return response()->json([
            'message' => 'sukses'
                     
        ]);
    }
}
