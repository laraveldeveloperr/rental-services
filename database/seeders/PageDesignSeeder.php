<?php

namespace Database\Seeders;

use App\Models\PageDesigns;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageDesignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PageDesigns::create([
            'topbar'=>1,
            'header'=>1,
            'menu'=>1,
            'slide'=>1,
            'search'=>1,
            'about_us_section'=>1,
            'banner1'=>1,
            'banner2'=>1,
            'blogs'=>1,
            'comments_for_site'=>1,
            'members'=>1,
            'offers'=>1,
            'services'=>1
        ]);
    }
}
