<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BumilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bumils')->insert([
            'nama' => 'Nengah Ranti',
            'tanggal_lahir' => '2000-12-22',
            'no_telephone' => '081246222338',
            'alamat' => 'Jalan Raja Wali No.10, Singaraja',
        ]);
    }
}
