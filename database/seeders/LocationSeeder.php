<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use App\Models\provinsi;
use App\Models\kota;
class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Ambil Data Provinsi
      $daftarProvinsi = RajaOngkir::provinsi()->all();
      foreach($daftarProvinsi as $itemProvinsi){
          Provinsi::create([
              'provinsi_id' => $itemProvinsi['province_id'],
              'nama_provinsi' => $itemProvinsi['province']

          ]);

          //Ambil data kota berdasarkan Provinsi
          $daftarKota = RajaOngkir::kota()->dariProvinsi($itemProvinsi['province_id'])->get();
          foreach($daftarKota as $itemKota){
              Kota::create([
                  'provinsi_id' => $itemProvinsi['province_id'],
                  'kota_id' => $itemKota['city_id'],
                  'nama_kota' => $itemKota['city_name']
              ]);
          }

      }
    }
}
