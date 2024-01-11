<?php

namespace Database\Seeders;

use App\Models\Data;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FotoLatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama_file' => 'gambar1.jpg'],
            ['nama_file' => 'gambar2.jpg'],
            ['nama_file' => 'gambar3.jpg'],
            ['nama_file' => 'gambar4.jpeg'],
            ['nama_file' => 'gambar5.jpg'],
        ];

        DB::table('foto_latars')->insert($data);

    }
}
