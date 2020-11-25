<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("skils")->insert([
            "langue" => "Ruby",
            "pourcentage" => 76,
            "created_at" => now()
        ]);
        DB::table("skils")->insert([
            "langue" => "Python",
            "pourcentage" => 50,
            "created_at" => now()
        ]);
        DB::table("skils")->insert([
            "langue" => "C#",
            "pourcentage" => 10,
            "created_at" => now()
        ]);
        DB::table("skils")->insert([
            "langue" => "C++",
            "pourcentage" => 100,
            "created_at" => now()
        ]);
    }
}
