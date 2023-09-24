<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Engines;

class EnginesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            '0.2 L',
            '0.4 L',
            '0.6 L',
            '0.8 L',
            '1.0 L',
            '1.2 L',
            '1.4 L',
            '1.6 L',
            '1.8 L',
            '2.0 L',
            '2.2 L',
            '2.4 L',
            '2.6 L',
            '2.8 L',
            '3.0 L',
            '3.5 L',
            '4.0 L',
            '4.5 L',
            '5.0 L',
            '5.5 L',
            '6.0 L',
            '6.5 L',
            '7.0 L',
            '7.5 L',
            '8.0 L',
            '8.5 L',
            '9.0 L',
            '9.5 L',
            '10.0 L'
        ];

        foreach ($array as $key => $value) {
            Engines::create([
                'name'=>$value,
                'slug'=>Str::slug($value),
                'status'=>1
            ]);
        }
    }
}
