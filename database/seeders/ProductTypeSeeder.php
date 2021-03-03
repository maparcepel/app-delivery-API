<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'product_types' )->insert( [
            'type_name'          => 'Delivery'
        ]);
        DB::table( 'product_types' )->insert( [
            'type_name'          => 'Normal'
        ]);
    }
}
