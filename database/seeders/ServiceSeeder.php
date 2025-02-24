<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::create(['name' => 'Service AC', 'description' => 'Perbaikan AC', 'category' => 'Perawatan']);
        Service::create(['name' => 'Cuci AC', 'description' => 'Pembersihan AC', 'category' => 'Perawatan']);
        Service::create(['name' => 'Isi Freon', 'description' => 'Mengisi ulang Freon AC', 'category' => 'Pengisian']);
    }
}