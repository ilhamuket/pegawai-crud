<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawais')->insert([
            'nama' => 'Muhammad Ilham',
            'tgllahir' => '2022-12-30 11:11:36',
            'jeniskelamin' => 'pria',
            'alamat' => 'Bandung',
            'hobi' => 'ngoding'
        ]);
    }
}