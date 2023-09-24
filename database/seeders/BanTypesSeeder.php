<?php

namespace Database\Seeders;

use App\Models\BanTypes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BanTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            "Avtobus",
            "Dartqı",
            "Furqon",
            "Hetçbek",
            "Kabriolet",
            "Karvan",
            "Kupe",
            "Kvadrosikl",
            "Liftbek",
            "Mikroavtobus",
            "Minivan",
            "Moped",
            "Motosiklet",
            "Offroader / SUV",
            "Pikap",
            "Qolfkar",
            "Rodster",
            "Sedan",
            "Universal",
            "Van",
            "Yük maşını"
        ];

        foreach ($array as $key => $value) {
            BanTypes::create([
                'name'=>$value,
                'slug'=>Str::slug($value),
                'status'=>1
            ]);
        }
    }   
}
