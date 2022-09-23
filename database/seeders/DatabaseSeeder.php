<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ConnectRelationshipsSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(KurirSeeder::class);
        //  $this->call(UsersSeeder::class);
        //  $this->call(KategorisTableSeeder::class);
    }
}
