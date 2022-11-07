<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Good;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $goods = Good::all();
        $attributes = Attribute::factory(10)->create();

        if ($goods->count()) {
            $goods->each(function ($good) use ($attributes) {
                $good->attributes()->attach($attributes->random(rand(1, $attributes->count() > 1 ? $attributes->count() / 2 : $attributes->count()))->pluck('id')->toArray());
            });
        }
    }
}
