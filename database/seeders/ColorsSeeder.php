<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Colors;
use Illuminate\Support\Str;
class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            "Açıq bənövşəyi",
            "Açıq yaşıl",
            "Ağ",
            "Al-qırmızı",
            "Ala",
            "Badımcan",
            "Bənövşəyi",
            "Boz",
            "Çəhrayı",
            "Dəniz mavisi",
            "Firuzə",
            "Göy",
            "Gümüş",
            "İndiqo",
            "Kardinal",
            "Krem",
            "Madjenta",
            "Mavi",
            "Narıncı",
            "Qara",
            "Qəhvəyi",
            "Qırmızı",
            "Qızılgül",
            "Sarı",
            "Şokolad",
            "Tünd göy",
            "Tünd qırmızı",
            "Yasəmən",
            "Yaşıl",
            "Zeytun"
        ];

        foreach ($array as $key => $value) {
            Colors::create([
                'name'=>$value,
                'slug'=>Str::slug($value),
                'status'=>1
            ]);
        }
    }
}
