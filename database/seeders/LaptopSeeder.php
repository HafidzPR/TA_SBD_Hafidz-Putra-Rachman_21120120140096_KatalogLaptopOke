<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laptops')->insert([
            'Laptop' => 'Legion 7',
            'Merek' => 'Lenovo',
            'Tipe' => 'Gaming Laptop',
            'Harga' => '55000000',
        ]);
    }
}
