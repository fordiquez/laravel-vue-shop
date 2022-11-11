<?php

namespace Database\Seeders;

use App\Models\OrderRecipient;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\UserContact;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory()
            ->has(OrderRecipient::factory()->count(rand(1, 3)))
            ->has(UserAddress::factory()->count(rand(1, 3)))
            ->has(UserContact::factory()->count(rand(1, 3)))
            ->create([
            'first_name' => 'Gerald',
            'last_name' => 'Ford',
            'birthday_date' => '2001-02-22',
            'gender' => 'male',
            'role_id' => 1,
            'email' => 'fordiquez@gmail.com',
            'password' => '$2y$10$Y.tltioAYrGTul6J8GeDoOqjv/98LM8iSj4PCIDsVYkE3KWFah.lC'
        ]);
        User::factory(10)
            ->has(OrderRecipient::factory()->count(rand(1, 3)))
            ->has(UserAddress::factory()->count(rand(1, 3)))
            ->has(UserContact::factory()->count(rand(1, 3)))
            ->create();
    }
}
