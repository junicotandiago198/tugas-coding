<?php

namespace App\Http\Controllers\backsite;

use App\Http\Controllers\Controller;
use App\Models\PenjualanBarang;
use Illuminate\Http\Request;

class PenjualanBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PenjualanBarang::all();
        return view('pages.backsite.penjualan.index',[
            'data'  => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backsite.penjualan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_barang'       =>  'required|unique:penjualan_barang',
            'stok'              =>  'required',
            'tanggal_transaksi' =>  'required|date_format:Y-m-d',
            'jenis_barang'      =>  'required',
        ]);

        PenjualanBarang::create($validatedData);

        return redirect()->route('backsite.dashboard-penjualan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = PenjualanBarang::find($id);
        return view('pages.backsite.penjualan.edit', [
            'data'  => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = PenjualanBarang::findOrFail($id);

        $item->update($data);

        return redirect()->route('backsite.dashboard-penjualan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = PenjualanBarang::findOrFail($id);
        $item->delete();

        return redirect()->route('backsite.dashboard-penjualan.index');
    }
}
