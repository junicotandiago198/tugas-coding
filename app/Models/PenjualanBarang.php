<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanBarang extends Model
{
    use HasFactory;

    protected $table = 'penjualan_barang';

    protected $fillable = [
        'nama_barang',
        'stok',
        'jumlah_terjual',
        'tanggal_transaksi',
        'jenis_barang',
    ];
}
