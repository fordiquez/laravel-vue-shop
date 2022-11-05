<?php

namespace Database\Seeders;

use App\Models\Good;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class GoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $tags = Tag::all();
        $goods = Good::factory(10)->create();

        if ($tags->count()) {
            $goods->each(function ($good) use ($tags) {
                $good->tags()->attach($tags->random(rand(1, $tags->count() > 1 ? $tags->count() / 2 : $tags->count()))->pluck('id')->toArray());
            });
        }
    }
}
