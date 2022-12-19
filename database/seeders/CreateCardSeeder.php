<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Seeder;

class CreateCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $codes = [
            '3354',
            '6073',
            '3597',
            '4588',
            '6051',
            '8843',
            '3145',
            '8330',
            '1714',
            '7443'
        ];

        foreach ($codes as $value) {
            Card::create([
                'code' => $value,
            ]);
        }
    }
}
