<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Equipment;
use Illuminate\Database\Seeder;

class DemoPhotographerSeeder extends Seeder
{
    public function run(): void
    {
        Service::create([
            'name' => 'Paket Photo Wedding Indoor & Outdoor',
            'description' => 'Termasuk 2 Fotografer, Album Fisik, dan Flashdisk All Files',
            'base_price_amount' => 4500000,
            'is_available' => true,
        ]);

        Service::create([
            'name' => 'Paket Photo Portrait / Graduation',
            'description' => 'Durasi 2 Jam Studio, 10 Foto Retouch',
            'base_price_amount' => 750000,
            'is_available' => true,
        ]);

        Equipment::create([
            'name' => 'Kamera Sony A7 IV Body Only',
            'daily_rental_fee_amount' => 350000,
            'stock_qty' => 2,
            'is_available' => true,
        ]);

        Equipment::create([
            'name' => 'Lensa Sony FE 24-70mm f/2.8 GM II',
            'daily_rental_fee_amount' => 250000,
            'stock_qty' => 3,
            'is_available' => true,
        ]);
    }
}
