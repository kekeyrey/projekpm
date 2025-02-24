<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Pastikan user tidak dibuat duplikat
        User::firstOrCreate(
            ['email' => 'test@example.com'], // Cek apakah email sudah ada
            [
                'name' => 'Test User',
                'password' => bcrypt('password'), // Pastikan ada password
                'email_verified_at' => now(), // Tandai email sebagai terverifikasi
            ]
        );

        // Panggil ServiceSeeder
        $this->call(ServiceSeeder::class);
    }
}
