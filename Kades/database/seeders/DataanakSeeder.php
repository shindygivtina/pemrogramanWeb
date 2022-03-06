<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataanakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dataanaks')->insert([
            'nama' => 'oki krisna',
            'tanggal_lahir' => '2000-12-22',
            'anakKe' => '2',
            'jenis_kelamin' => 'Laki-laki',
        ]);
    }
}
