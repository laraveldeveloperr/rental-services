<?php

namespace Database\Seeders;

use App\Models\Fuels;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FuelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            "Benzin",
            "Dizel",
            "Qaz",
            "Elektro",
            "Hibrid",
            "Plug-in Hibrid"
        ];

        foreach ($array as $key => $value) {
            Fuels::create([
                'name'=>$value,
                'slug'=>Str::slug($value),
                'status'=>1
            ]);
        }
    }
}