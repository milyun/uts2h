<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'id_product' => 'id',
            'product_name' => 'name',
            'category' => 'category',
            'price' => 'price',
            'quantity' => 'quantity',
        ]);
    }
}
