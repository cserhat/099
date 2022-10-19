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
        Groupes::truncate();

        $json = File::get("database/data/data.json");
        $datas = json_decode($json);

        Groupes::create(
            [
             "groupe" => $value->group_letter
            ]
            );
    }
}
