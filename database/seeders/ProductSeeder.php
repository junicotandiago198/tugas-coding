<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'id_category'   => 1,
                'name'          => 'Kopi',
                'stok'          => '100',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ],
            [
                'id_category'   => 1,
                'name'          => 'Teh',
                'stok'          => '100',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ],
            [
                'id_category'   => 2,
                'name'          => 'Pasta Gigi',
                'stok'          => '100',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ],
            [
                'id_category'   => 2,
                'name'          => 'Sabun Mandi',
                'stok'          => '100',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ],
            [
                'id_category'   => 2,
                'name'          => 'Sampo',
                'stok'          => '100',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ],
        ];

        Product::insert($product);
    }
}
