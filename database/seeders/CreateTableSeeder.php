<?php

namespace Database\Seeders;

use App\Models\Table;
use Illuminate\Database\Seeder;

class CreateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Table::create([
            'name' => 'Table 1',
            'is_billiard' => 1,
            'floor' => 1
        ]);
        Table::create([
            'name' => 'Table 2',
            'is_billiard' => 1,
            'floor' => 1
        ]);
        Table::create([
            'name' => 'Table 3',
            'is_billiard' => 1,
            'floor' => 2
        ]);
        Table::create([
            'name' => 'Table 4',
            'is_billiard' => 1,
            'floor' => 2
        ]);
        
        Table::create([
            'name' => 'Caffe 1',
            'floor' => 1
        ]);
        Table::create([
            'name' => 'Caffe 2',
            'floor' => 1
        ]);
        Table::create([
            'name' => 'Caffe 3',
            'floor' => 2
        ]);
        Table::create([
            'name' => 'Caffe 4',
            'floor' => 2
        ]);
    }
}
