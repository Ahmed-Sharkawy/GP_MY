<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Database\Seeders\TripSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'              => 'Admin',
            'email'             => 'admin@admin.com',
            'password'          =>  123456789,
            'location'          => 'Egypt',
            'email_verified_at' => now(),
        ]);

        $this->call([
            UserSeeder::class,
            TripSeeder::class,
        ]);
    }
}
