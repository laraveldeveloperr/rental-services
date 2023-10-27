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
