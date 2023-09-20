<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\PenjualanBarang;
use App\Http\Controllers\Controller;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = PenjualanBarang::all(); 
        return response()->json($penjualan);
    }

    public function search(Request $request)
    {
        $query = $request->input('q');

        $penjualan = PenjualanBarang::where('nama_barang', 'LIKE', '%' . $query . '%')->get();

        return response()->json($penjualan);
    }
}
