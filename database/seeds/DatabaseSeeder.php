<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            AlternativeSeeder::class,
            CriteriaSeeder::class,
            ClassificationSeeder::class,
            ValueSeeder::class,
        ]);
    }
}
