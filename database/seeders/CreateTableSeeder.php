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
            'floor' => 1,
            'turn_on' => '848359411a2b43a5814142c9839bef89',
            'turn_off' => 'ad0b221310fc46a7b4f22e4ae7fd1543'
        ]);
        Table::create([
            'name' => 'Table 2',
            'is_billiard' => 1,
            'floor' => 1,
            'turn_on' => '6e71d8b553ef472a82308a73291e6d78',
            'turn_off' => 'c4ba55ca115041a5ae5daeae316fc56c'
        ]);
        Table::create([
            'name' => 'Table 3',
            'is_billiard' => 1,
            'floor' => 2,
            'turn_on' => '00b6c15f73624d7cb9023d227766dba8',
            'turn_off' => 'c10a61f19a084ca3b3cf9706c86947c7'
        ]);
        Table::create([
            'name' => 'Table 4',
            'is_billiard' => 1,
            'floor' => 2,
            'turn_on' => 'e4e39690dac7471891604baa148c53f2',
            'turn_off' => 'cbf8d94ed1434b9cbcc5000ed301af75'
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
