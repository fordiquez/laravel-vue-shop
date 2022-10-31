<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::factory()->create([
            'first_name' => 'Gerald',
            'last_name' => 'Ford',
            'birthday_date' => '22.02.2022',
            'gender' => 'male',
            'role_id' => 1,
            'email' => 'fordiquez@gmail.com',
//            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' // fordiquez22
        ]);
        User::factory(10)->create();
    }
}
