<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanBarang extends Model
{
    use HasFactory;

    protected $table = 'penjualan_barang';

    protected $fillable = ['id_product', 'jumlah_terjual'];
    
    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }

}