<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        schema::disableForeignKeyConstraints();
        Role::truncate();
        schema::enableForeignKeyConstraints();

        $data = [
            ['nama' => 'admin'],
            ['nama' => 'dosen'],
            ['nama' => 'mahasiswa'],
        ];

        foreach ($data as $d) {
            Role::insert([
                'nama' => $d['nama'],
            ]);
        }
    }
}
