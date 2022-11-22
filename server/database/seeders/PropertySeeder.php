<?php

namespace Database\Seeders;

use App\Models\Property;
use App\Models\Good;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $goods = Good::all();
        $properties = Property::factory(10)->create();

        if ($goods->count()) {
            $goods->each(function ($good) use ($properties) {
                $good->properties()->attach($properties->random(rand(1, $properties->count() > 1 ? $properties->count() / 2 : $properties->count()))->pluck('id')->toArray());
            });
        }
    }
}
