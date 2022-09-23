<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\kurir;

class KurirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['kurir' => 'jne', 'nama_kurir' => 'JNE'],
            ['kurir' => 'pos', 'nama_kurir' => 'POS'],
            ['kurir' => 'tiki', 'nama_kurir' => 'TIKI']
        ];
        kurir::insert($data);
    }
}
