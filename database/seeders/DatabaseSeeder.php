<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

     /**
      * sebelum menjalankan seeder terlebih dahulu jalankan
      * php artisan permission:create-permission-routes
      */
    public function run()
    {
        $this->call([
            CreateTableSeeder::class,
            CreateProductCategorySeeder::class,
            CreateAdminUserSeeder::class,
        ]);
    }
}
