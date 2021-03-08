<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classifications')->insert([
            [
                'criteria_id' => 1,
                'value' => 1,
                'classification' => 'Hutan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 1,
                'value' => 2,
                'classification' => 'Semak Belukar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 1,
                'value' => 3,
                'classification' => 'Ladang/tegalan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 1,
                'value' => 4,
                'classification' => 'Sawah tadah hujan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 1,
                'value' => 5,
                'classification' => 'Perkampungan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 2,
                'value' => 1,
                'classification' => '< 4000 m3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 2,
                'value' => 2,
                'classification' => '40000 m3 ≤ X < 80000 m3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 2,
                'value' => 3,
                'classification' => '80000 m3 ≤ X < 120000 m3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 2,
                'value' => 4,
                'classification' => '120000 m3 ≤ X < 160000 m3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 2,
                'value' => 5,
                'classification' => '160000 m3 ≤ X < 200000 m3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 3,
                'value' => 1,
                'classification' => '1.5 Ha ≤ X < 3 Ha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 3,
                'value' => 2,
                'classification' => '3 Ha ≤ X < 4.5 Ha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 3,
                'value' => 3,
                'classification' => '4.5 Ha ≤ X < 6 Ha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 3,
                'value' => 4,
                'classification' => '6 Ha ≤ X < 7.5 Ha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 3,
                'value' => 5,
                'classification' => '≥ 7.5 Ha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 4,
                'value' => 1,
                'classification' => '≥ 1500000 m3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 4,
                'value' => 2,
                'classification' => '750000 m3 ≤ X < 1500000 m3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 4,
                'value' => 3,
                'classification' => '500000 m3 ≤ X < 750000 m3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 4,
                'value' => 4,
                'classification' => '250000 m3 ≤ X < 500000 m3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 4,
                'value' => 5,
                'classification' => '< 250000 m3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 5,
                'value' => 1,
                'classification' => '≥100 hr',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 5,
                'value' => 2,
                'classification' => '80 hr ≤ X < 100 hr',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 5,
                'value' => 3,
                'classification' => '60 hr ≤ X < 80 hr',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 5,
                'value' => 4,
                'classification' => '40 hr ≤ X < 60 hr',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 5,
                'value' => 5,
                'classification' => '< 40 hr',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 6,
                'value' => 1,
                'classification' => '< Rp10.000,00',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 6,
                'value' => 2,
                'classification' => 'Rp10.000,00 ≤ X < Rp20.000,00',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 6,
                'value' => 3,
                'classification' => 'Rp20.000,00 ≤ X < Rp30.000,00',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 6,
                'value' => 4,
                'classification' => 'Rp30.000,00 ≤ X < Rp40.000,00',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 6,
                'value' => 5,
                'classification' => '≥ Rp40.0000,00',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 7,
                'value' => 1,
                'classification' => 'tersedia jalan aspal sampai site',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 7,
                'value' => 2,
                'classification' => 'jalan makadam/tanah sampai site',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 7,
                'value' => 3,
                'classification' => 'jalan setapak',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'criteria_id' => 7,
                'value' => 4,
                'classification' => 'tidak tersedia jalan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
