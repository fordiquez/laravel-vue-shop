<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            VoyagerDatabaseSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            GoodStatusesSeeder::class,
            GoodSeeder::class,
            AttributeSeeder::class,
            PromoCodeSeeder::class,
            OrderSeeder::class,
        ]);
    }
}