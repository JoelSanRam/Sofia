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
            'name' => 'Sofia',
            'email' => 'contacto@sofiacona.com',
            'password' => Hash::make("Toledo11"),
        ]);
        
    }
}

