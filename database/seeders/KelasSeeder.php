<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        schema::disableForeignKeyConstraints();
        Kelas::truncate();
        schema::enableForeignKeyConstraints();

        // $data = [
        //     ['nama' => 'D3TI01'],
        //     ['nama' => 'D3TI02'],
        //     ['nama' => 'D3TI03']
        // ];

        // foreach ($data as $d) {
        //     Kelas::insert([
        //         'nama' => $d['nama'],
        //     ]);
        // }

        Kelas::factory()->count(10)->create();
    }
}
