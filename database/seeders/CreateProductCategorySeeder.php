<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class CreateProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::create([
            'name' => 'Billiard',
            'detail' => 'Paket billiard'
        ]);
        ProductCategory::create([
            'name' => 'Makanan Berat',
            'detail' => 'Kategori produk makanan berat'
        ]);
        ProductCategory::create([
            'name' => 'Minuman',
            'detail' => 'Kategori produk minuman'
        ]);
        ProductCategory::create([
            'name' => 'Snack',
            'detail' => 'Kategori produk snack'
        ]);
    }
}
