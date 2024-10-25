<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create an admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),  // Use Hash::make to hash passwords
            'role' => 'admin',  // Setting role as 'admin'
            'status' => 'active',  // Setting status as 'active'
            'email_verified_at' => now(),  // Marking email as verified
        ]);

        // Create an advertiser user
        User::create([
            'name' => 'Advertiser User',
            'email' => 'advertiser@example.com',
            'password' => Hash::make('password'),
            'role' => 'advertiser',
            'status' => 'active',
            'email_verified_at' => now(),
        ]);

        // Create a publisher user
        User::create([
            'name' => 'Publisher User',
            'email' => 'publisher@example.com',
            'password' => Hash::make('password'),
            'role' => 'publisher',
            'status' => 'active',
            'email_verified_at' => now(),
        ]);
    }
}
