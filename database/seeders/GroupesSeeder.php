<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Groupes;
use File;

class GroupesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $json = File::get("database/data/data.json");
        $groupes = json_decode($json, false, 512, JSON_THROW_ON_ERROR);

        foreach ($groupes as $obj) {
            foreach ($obj as $groupe){
            Groupes::create([
                "groupe" => $groupe->letter,
            ]);
            }
        }
    }
}
