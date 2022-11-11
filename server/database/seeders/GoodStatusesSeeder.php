<?php

namespace Database\Seeders;

use App\Models\GoodStatus;
use Illuminate\Database\Seeder;

class GoodStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        GoodStatus::factory(count(GoodStatus::$statuses) - 1)->create();
    }
}
