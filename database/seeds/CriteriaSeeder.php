<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('criterias')->insert([
            [
                'nama' => 'Vegetasi area genangan embung',
                'tipe' => 'benefit',
                'bobot' => 0.937,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'nama' => 'Volume material timbunan',
                'tipe' => 'cost',
                'bobot' => 0.701,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'nama' => 'Luas daerah yang akan dibebaskan',
                'tipe' => 'cost',
                'bobot' => 1.847,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'nama' => 'Volume tampungan efektif',
                'tipe' => 'benefit',
                'bobot' => 0.982,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'nama' => 'Lama operasi',
                'tipe' => 'benefit',
                'bobot' => 1.173,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'nama' => 'Harga air/m3',
                'tipe' => 'cost',
                'bobot' => 0.953,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'nama' => 'Akses jalan menuju site bendungan',
                'tipe' => 'cost',
                'bobot' => 0.752,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
