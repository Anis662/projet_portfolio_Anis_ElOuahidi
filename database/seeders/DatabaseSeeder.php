<?php

namespace Database\Seeders;

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
        \App\Models\About::factory(5)->create();
        $this->call(FactSeeder::class);
        $this->call(SkilSeeder::class);
        \App\Models\Portfolio::factory(6)->create();
    }
}
