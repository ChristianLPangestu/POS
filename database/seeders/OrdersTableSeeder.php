<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = [
            [
                'customer_id' => 2, // ID customer Argi Putra
                'table_number' => 1,
                'total_price' => 150000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 2, // ID customer Argi Putra
                'table_number' => 2,
                'total_price' => 200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('orders')->insert($orders);
    }
}
