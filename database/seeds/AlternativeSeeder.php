<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlternativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alternatives')->insert([
            [
                'nama' => 'Dadapayam',
                'kode' => 'A1',
                'vegetasi_area' => 4,
                'volume_material' => 1,
                'luas_daerah' => 2,
                'volume_tampungan' => 3,
                'lama_operasi' => 4,
                'harga_air' => 4,
                'akses_jalan' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'nama' => 'Mluweh',
                'kode' => 'A2',
                'vegetasi_area' => 1,
                'volume_material' => 5,
                'luas_daerah' => 1,
                'volume_tampungan' => 1,
                'lama_operasi' => 1,
                'harga_air' => 1,
                'akses_jalan' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'nama' => 'Lebak',
                'kode' => 'A3',
                'vegetasi_area' => 4,
                'volume_material' => 3,
                'luas_daerah' => 1,
                'volume_tampungan' => 2,
                'lama_operasi' => 4,
                'harga_air' => 1,
                'akses_jalan' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'nama' => 'Pakis',
                'kode' => 'A4',
                'vegetasi_area' => 4,
                'volume_material' => 1,
                'luas_daerah' => 2,
                'volume_tampungan' => 2,
                'lama_operasi' => 4,
                'harga_air' => 2,
                'akses_jalan' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'nama' => 'Jatikurung',
                'kode' => 'A5',
                'vegetasi_area' => 1,
                'volume_material' => 1,
                'luas_daerah' => 3,
                'volume_tampungan' => 5,
                'lama_operasi' => 5,
                'harga_air' => 5,
                'akses_jalan' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'nama' => 'Gogodalem',
                'kode' => 'A6',
                'vegetasi_area' => 1,
                'volume_material' => 2,
                'luas_daerah' => 4,
                'volume_tampungan' => 4,
                'lama_operasi' => 3,
                'harga_air' => 5,
                'akses_jalan' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'nama' => 'Kandangan',
                'kode' => 'A7',
                'vegetasi_area' => 3,
                'volume_material' => 2,
                'luas_daerah' => 1,
                'volume_tampungan' => 5,
                'lama_operasi' => 5,
                'harga_air' => 5,
                'akses_jalan' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'nama' => 'Ngrawan',
                'kode' => 'A8',
                'vegetasi_area' => 3,
                'volume_material' => 1,
                'luas_daerah' => 2,
                'volume_tampungan' => 5,
                'lama_operasi' => 5,
                'harga_air' => 5,
                'akses_jalan' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
