<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Category::factory()->createMany([
            [
                'title' => 'Women',
                'slug' => 'women'
            ],
            [
                'title' => 'Men',
                'slug' => 'men'
            ],
            [
                'title' => 'Clothing',
                'slug' => 'women-clothing',
                'parent_id' => 1
            ],
            [
                'title' => 'Tops',
                'slug' => 'women-tops',
                'parent_id' => 3
            ],
            [
                'title' => 'Accessories',
                'slug' => 'women-accessories',
                'parent_id' => 1
            ],
            [
                'title' => 'Bags',
                'slug' => 'women-bags',
                'parent_id' => 5
            ],
            [
                'title' => 'Brands',
                'slug' => 'women-brands',
                'parent_id' => 1
            ],
            [
                'title' => 'Full Nelson',
                'slug' => 'full-nelson',
                'parent_id' => 7
            ],
            [
                'title' => 'Clothing',
                'slug' => 'men-clothing',
                'parent_id' => 2
            ],
            [
                'title' => 'Jackets',
                'slug' => 'men-jackets',
                'parent_id' => 9
            ],
            [
                'title' => 'Accessories',
                'slug' => 'men-accessories',
                'parent_id' => 2
            ],
            [
                'title' => 'Wallets',
                'slug' => 'men-wallets',
                'parent_id' => 11
            ],
            [
                'title' => 'Brands',
                'slug' => 'men-brands',
                'parent_id' => 2
            ],
            [
                'title' => 'Lacoste',
                'slug' => 'lacoste',
                'parent_id' => 13
            ],
        ]);
    }
}
