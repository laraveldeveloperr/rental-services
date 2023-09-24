<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarsFaqs;
use Faker\Factory as Faker;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            CarsFaqs::create([
                'question' => $faker->sentence,
                'answer' => $faker->paragraph,
                'status' => 1
            ]);
        }
    }
}
