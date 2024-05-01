<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Staff;
use Illuminate\Database\Seeder;

use App\Models\Dosen;
use App\Models\Ktm;
use App\Models\Mahasiswa;
use App\Models\DetailDosen;

use Database\Seeders\DosenSeeder;
use Database\Seeders\KtmSeeder;
use Database\Seeders\MahasiswaSeeder;
use Database\Seeders\DetailDosenSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com', 
        // ]);

        $this->call([
            MahasiswaSeeder::class,
            DosenSeeder::class,
            KtmSeeder::class,
            DetailDosenSeeder::class,
        ]);
    }
}
