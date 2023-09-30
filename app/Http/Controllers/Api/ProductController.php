<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\PenjualanBarang;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get(); 
        return response()->json($products);
    }

    public function pembelian($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }
    
        if ($product->stok <= 0) {
            return response()->json(['message' => 'Stok produk habis'], 400);
        }

        $product->stok -= 1;
        $product->save();

        $penjualan = PenjualanBarang::firstOrNew(['id_product' => $id]);
        $penjualan->id_product = $id;
        $penjualan->jumlah_terjual += 1;
        $penjualan->tanggal_transaksi = now();
        $penjualan->save();

        return response()->json(['message' => 'Produk berhasil dibeli'], 200);
    }
}
