<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GeneralSettings;
class GeneralSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phone = ['0508221300'];
        $email = ['chaparoglucavid@gmail.com'];
        $keywords = ['rent a car', 'baku rental cars'];
        $social = [
                'facebook.com/rentalservices',
                'instagram.com/rentalservices'
        ];
        GeneralSettings::create([
            'logo' => 'logo.png',
            'numbers' => json_encode($phone),
            'emails' => json_encode($email),
            'address' => 'Bakı, Xətai rayonu Gəncə prospekti 56a',
            'about_text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'social_networks' => json_encode($social),
            'meta_title' => 'meta_title',
            'meta_description' => 'meta_description',
            'meta_keywords' => json_encode($keywords),
            'repair_mode' => 0
        ]);
    }
}
