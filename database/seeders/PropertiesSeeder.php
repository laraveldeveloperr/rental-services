<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Properties;
use Illuminate\Support\Str;

class PropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            'Kondisioner',
            'GPS sistemi',
            'Hava yastıqları',
            'Uşaq oturacağı',
            'Multimedia',
            'Bluetooth',
            'Touch Screen',
            'Naviqasiya',
            '1 baqaj',
            '2 baqaj',
            '3 baqaj',
            'Avtopilot',
            'Qış təkərləri'
        ];

        foreach ($array as $key => $value) {
            Properties::create([
                'name'=>$value,
                'slug'=>Str::slug($value),
                'status'=>1
            ]);
        }
    }
}
