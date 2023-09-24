<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Models;

class ModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $models = 
        [
        ["brands_id"=> 1, "name"=> "1 series", "slug"=> "1-series"],
        ["brands_id"=> 1, "name"=> "2 series", "slug"=> "2-series"],
        ["brands_id"=> 1, "name"=> "3 series", "slug"=> "3-series"],
        ["brands_id"=> 1, "name"=> "4 series", "slug"=> "4-series"],
        ["brands_id"=> 1, "name"=> "5 series", "slug"=> "5-series"],
        ["brands_id"=> 1, "name"=> "6 series", "slug"=> "6-series"],
        ["brands_id"=> 1, "name"=> "7 series", "slug"=> "7-series"],
        ["brands_id"=> 1, "name"=> "M3", "slug"=> "m3"],
        ["brands_id"=> 1, "name"=> "M4", "slug"=> "m4"],
        ["brands_id"=> 1, "name"=> "M5", "slug"=> "m5"],
        ["brands_id"=> 1, "name"=> "X1", "slug"=> "x1"],
        ["brands_id"=> 1, "name"=> "X3", "slug"=> "x3"],
        ["brands_id"=> 1, "name"=> "X5", "slug"=> "x5"],
        ["brands_id"=> 1, "name"=> "X5 M", "slug"=> "x5-m"],
        ["brands_id"=> 1, "name"=> "X6", "slug"=> "x6"],
        ["brands_id"=> 1, "name"=> "X6 M", "slug"=> "x6-m"],
        ["brands_id"=> 1, "name"=> "X7", "slug"=> "x7"],
        ["brands_id"=> 1, "name"=> "Z3", "slug"=> "z3"],
        ["brands_id"=> 1, "name"=> "Z4", "slug"=> "z4"],
        ["brands_id"=> 1, "name"=> "02 (E10)", "slug"=> "02-e10"],
        ["brands_id"=> 1, "name"=> "1M", "slug"=> "1m"],
        ["brands_id"=> 1, "name"=> "2000 C/CS", "slug"=> "2000-ccs"],
        ["brands_id"=> 1, "name"=> "315", "slug"=> "315"],
        ["brands_id"=> 1, "name"=> "3/15", "slug"=> "3-15"],
        ["brands_id"=> 1, "name"=> "3200", "slug"=> "3200"],
        ["brands_id"=> 1, "name"=> "321", "slug"=> "321"],
        ["brands_id"=> 1, "name"=> "326", "slug"=> "326"],
        ["brands_id"=> 1, "name"=> "327", "slug"=> "327"],
        ["brands_id"=> 1, "name"=> "340", "slug"=> "340"],
        ["brands_id"=> 1, "name"=> "501", "slug"=> "501"],
        ["brands_id"=> 1, "name"=> "502", "slug"=> "502"],
        ["brands_id"=> 1, "name"=> "503", "slug"=> "503"],
        ["brands_id"=> 1, "name"=> "507", "slug"=> "507"],
        ["brands_id"=> 1, "name"=> "600", "slug"=> "600"],
        ["brands_id"=> 1, "name"=> "700", "slug"=> "700"],
        ["brands_id"=> 1, "name"=> "8 series", "slug"=> "8-series"],
        ["brands_id"=> 1, "name"=> "E3", "slug"=> "e3"],
        ["brands_id"=> 1, "name"=> "E9", "slug"=> "e9"],
        ["brands_id"=> 1, "name"=> "i3", "slug"=> "i3"],
        ["brands_id"=> 1, "name"=> "i4", "slug"=> "i4"],
        ["brands_id"=> 1, "name"=> "I5", "slug"=> "i5"],
        ["brands_id"=> 1, "name"=> "i7", "slug"=> "i7"],
        ["brands_id"=> 1, "name"=> "i8", "slug"=> "i8"],
        ["brands_id"=> 1, "name"=> "iX", "slug"=> "ix"],
        ["brands_id"=> 1, "name"=> "M1", "slug"=> "m1"],
        ["brands_id"=> 1, "name"=> "M2", "slug"=> "m2"],
        ["brands_id"=> 1, "name"=> "M6", "slug"=> "m6"],
        ["brands_id"=> 1, "name"=> "M8", "slug"=> "m8"],
        ["brands_id"=> 1, "name"=> "Nazca", "slug"=> "nazca"],
        ["brands_id"=> 1, "name"=> "New Class", "slug"=> "new-class"],
        ["brands_id"=> 1, "name"=> "X2", "slug"=> "x2"],
        ["brands_id"=> 1, "name"=> "X2 M", "slug"=> "x2-m"],
        ["brands_id"=> 1, "name"=> "X3 M", "slug"=> "x3-m"],
        ["brands_id"=> 1, "name"=> "X4", "slug"=> "x4"],
        ["brands_id"=> 1, "name"=> "X4 M", "slug"=> "x4-m"],
        ["brands_id"=> 1, "name"=> "XM", "slug"=> "xm"],
        ["brands_id"=> 1, "name"=> "Z1", "slug"=> "z1"],
        ["brands_id"=> 1, "name"=> "Z3 M", "slug"=> "z3-m"],
        ["brands_id"=> 1, "name"=> "Z4 M", "slug"=> "z4-m"],
        ["brands_id"=> 1, "name"=> "Z8", "slug"=> "z8"]
        ];

        foreach ($models as $value) {
            Models::create([
                'brands_id' => $value['brands_id'],
                'name' => $value['name'],
                'slug' => $value['slug'],
                'status' => 1
            ]);
        }

    }
}
