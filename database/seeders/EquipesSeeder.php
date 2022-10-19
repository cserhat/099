<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
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
      

        $json = File::get("database/data/data.json");
        $groupes = json_decode($json, false, 512, JSON_THROW_ON_ERROR);

        foreach ($groupes as $obj) {
            foreach ($obj as $groupe){
                foreach($groupe->teams as $result)
                {
                    $lettre = $result->group_letter;
                    $groupe = DB::table('groupes')->where([
                        ['groupe', '=', $lettre]
                    ])->get();
                    
                    foreach($groupe as $groupe_id)
                    {
                    Equipes::create([
                        "pays" => $result->name,
                        "drapeau" => $result->country,
                        "groupe_id" => $groupe_id->id
                    ]);
                    }
                 }
                }
                }
            }
        }
