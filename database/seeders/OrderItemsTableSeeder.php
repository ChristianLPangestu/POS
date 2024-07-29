<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderItems = [
            // Items for first order
            [
                'order_id' => 1,
                'item_id' => 1, // ID item yang sesuai
                'quantity' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 1,
                'item_id' => 2, // ID item yang sesuai
                'quantity' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Items for second order
            [
                'order_id' => 2,
                'item_id' => 3, // ID item yang sesuai
                'quantity' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 2,
                'item_id' => 4, // ID item yang sesuai
                'quantity' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('order_items')->insert($orderItems);
    }
}
