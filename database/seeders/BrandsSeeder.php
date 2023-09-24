<?php

namespace Database\Seeders;

use App\Models\Brands;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
                        [
                            'icon'=>'images/brands/bmw_1120-icon.jpg', 
                            'name'=> 'BMW'
                        ]
        ];
            
            foreach($brands as $brand)
            {
                Brands::create([
                    'name'=>$brand['name'],
                    'icon'=>$brand['icon'],
                    'slug'=>Str::slug($brand['name']),
                    'status'=>1
                ]);
            }
            
    }
}
