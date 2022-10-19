<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equipes;
use File;

class EquipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipes::truncate();

        $json = File::get("database/data/data.json");
        $data = json_decode($json);
       
        foreach ($data as $key => $value)
        {
            Equipes::create([
                    "drapeau" => $value->country,
                    "pays" => $value->name
                ]
            ) ;

        }
    }
}
