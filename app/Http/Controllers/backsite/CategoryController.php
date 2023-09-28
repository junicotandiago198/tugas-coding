<?php

namespace App\Http\Controllers\backsite;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::all();
        return view('pages.backsite.category.index',[
            'data'  => $data
        ]);
    }

    public function create()
    {
        return view('pages.backsite.category.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        // Store Product
        Category::create($data);

        return redirect()->route('backsite.dashboard-jenis-barang.index')->with('success', 'Jenis Barang berhasil ditambah.');;
    }

    public function edit($id)
    {
        $data = Category::find($id);
        return view('pages.backsite.category.edit', [
            'data'  => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Category::findOrFail($id);

        $item->update($data);

        return redirect()->route('backsite.dashboard-jenis-barang.index')->with('success', 'Jenis Barang berhasil diedit.');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return redirect()->route('backsite.dashboard-jenis-barang.index')->with('error', 'Kategori tidak ditemukan.');
        }
    
        $relatedProductsCount = $category->products()->count();
    
        if ($relatedProductsCount > 0) {
            return redirect()->route('backsite.dashboard-jenis-barang.index')->with('error', 'Tidak dapat menghapus kategori ini karena masih terkait dengan ' . $relatedProductsCount . ' produk.');
        }
    
        $category->delete();
    
        return redirect()->route('backsite.dashboard-jenis-barang.index')->with('success', 'Jenis Barang berhasil dihapus.');
    }
    
    
}
