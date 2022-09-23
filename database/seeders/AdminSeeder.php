<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = user::create([
            'name'=> 'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin123'),
            'role' => 'admin'
        ]);

    }
}
