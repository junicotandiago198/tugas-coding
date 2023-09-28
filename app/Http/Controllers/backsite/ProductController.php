<?php

namespace App\Http\Controllers\backsite;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::with('category')->get();
        return view('pages.backsite.product.index',[
            'data'  => $data
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('pages.backsite.product.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        // Store Product
        Product::create($data);

        return redirect()->route('backsite.dashboard-barang.index')->with('success', 'Product/Barang berhasil ditambah.');;
    }

    public function edit($id)
    {
        $categories = Category::all();
        $data = Product::find($id);
        return view('pages.backsite.product.edit', [
            'data'  => $data,
            'categories' =>  $categories
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Product::findOrFail($id);

        $item->update($data);

        return redirect()->route('backsite.dashboard-barang.index')->with('success', 'Product/Barang berhasil diedit.');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('backsite.dashboard-jenis-barang.index')->with('error', 'Kategori tidak ditemukan.');
        }
    
        $relatedSaleProductsCount = $product->penjualan_barang()->count();
    
        if ($relatedSaleProductsCount > 0) {
            return redirect()->route('backsite.dashboard-barang.index')->with('error', 'Tidak dapat menghapus barang ini karena barang tersebut sudah masuk record penjualan sebanyak ' . $relatedSaleProductsCount . ' record.');
        }
    
        $product->delete();
    
        return redirect()->route('backsite.dashboard-barang.index')->with('success', 'Barang berhasil dihapus.');
    }
}
