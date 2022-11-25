<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            [
                'nim' => '2041720034',
                'nama' => 'Della Jannata Febiana',
                'kelas' => 'TI 3E',
                'jurusan' => 'Teknologi Informasi',
                'no_handphone' => '0888888888'
            ],
            [
                'nim' => '204170000',
                'nama' => 'Fafa',
                'kelas' => 'TI 3E',
                'jurusan' => 'Teknologi Informasi',
                'no_handphone' => '085671234566'
            ]
        ]);
    }
}