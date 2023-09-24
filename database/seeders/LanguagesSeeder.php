<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Languages;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                'name'=>'Azərbaycan dili',
                'shortened'=>'az',
                'status'=>1
            ],
            [
                'name'=>'İngilis dili',
                'shortened'=>'en',
                'status'=>1
            ],
            [
                'name'=>'Rus dili',
                'shortened'=>'ru',
                'status'=>1
            ]
        ];

        foreach ($array as $key => $value) {
            Languages::create([
                'name'=>$value['name'],
                'shortened'=>$value['shortened'],
                'status'=>$value['status']
            ]);
        }
    }
}
