<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(users::class);
        $this->call(BrandsSeeder::class);
        $this->call(ModelsSeeder::class);
        $this->call(BanTypesSeeder::class);
        $this->call(EnginesSeeder::class);
        $this->call(TransmissionsSeeder::class);
        $this->call(FuelsSeeder::class);
        $this->call(GearsSeeder::class);
        $this->call(LanguagesSeeder::class);
        $this->call(PropertiesSeeder::class);
        $this->call(ColorsSeeder::class);
        $this->call(GeneralSettingsSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(PageDesignSeeder::class);
        $this->call(TranslationsSeeder::class);

        if (config('variables.WITH_FAKER')) {
            // FAKE data
        }
    }
}
