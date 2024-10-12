<?php

namespace Database\Seeders;

use App\Models\Surat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Surat::factory(100)->create();

        for ($i = 0; $i < 100; $i++) {
            $surat = Surat::factory()->create();
            sleep(1);
        }
    }
}
