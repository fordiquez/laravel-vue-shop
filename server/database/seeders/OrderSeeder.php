<?php

namespace Database\Seeders;

use App\Models\Good;
use App\Models\Order;
use App\Models\OrderHistory;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $goods = Good::all();
        $orders = Order::factory(10)->has(OrderHistory::factory()->count(rand(1, 3)))->create();

        if ($goods->count()) {
            $orders->each(function ($order) use ($goods) {
                $order->goods()->attach($goods->random(rand(1, $goods->count() > 1 ? $goods->count() / 2 : $goods->count()))->pluck('id')->toArray());
            });
        }
    }
}
