<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Transmissions;

class TransmissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            'Mexaniki',
            'Avtomat',
            'Robotlaşdırılmış',
            'Variator'
        ];

        foreach ($array as $key => $value) {
            Transmissions::create([
                'name'=>$value,
                'slug'=>Str::slug($value),
                'status'=>1
            ]);
        }
    }
}
