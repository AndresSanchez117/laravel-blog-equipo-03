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
    public function run()
    {

        User::create([
            'name' => 'Andres Sanchez',
            'email' => 'andres-sanchezs@outlook.com',
            'password' => bcrypt('password')
        ])->assignRole('Admin');

        User::factory(99)->create();
    }
}
