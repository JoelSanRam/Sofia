<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

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
            'name' => 'Alexis',
            'email' => 'alexis@email.com',
            'password' => Hash::make("12345678"),
        ]);
        
        User::create([
            'name' => 'Uriel',
            'email' => 'uriel@email.com',
            'password' => Hash::make("12345678"),
        ]);
    }
}
