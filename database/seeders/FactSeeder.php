<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("facts")->insert([
            "chiffre" => 30,
            "titre" => "lorem ipsum",
            "texte" => "Je suis le premier chiffre",
            "created_at" => now()
        ]);
        DB::table("facts")->insert([
            "chiffre" => 50,
            "titre" => "lorem ipsum 2",
            "texte" => "Je suis le deuxième chiffre",
            "created_at" => now()
        ]);
        DB::table("facts")->insert([
            "chiffre" => 70,
            "titre" => "lorem ipsum3",
            "texte" => "Je suis le troisième chiffre",
            "created_at" => now()
        ]);
    }
}
