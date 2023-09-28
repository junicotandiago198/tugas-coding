<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['id_category', 'name', 'stok'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category', 'id');
    }

    public function penjualan_barang()
    {
        return $this->hasMany(PenjualanBarang::class, 'id_product', 'id');
    }
}
