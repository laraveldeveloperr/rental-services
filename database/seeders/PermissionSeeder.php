<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [

            'users',
            'create users',
            'edit users',
            'show users',
            'delete users',


            'brands',
            'create brands',
            'edit brands',
            'show brands',
            'delete brands',

            'models',
            'create models',
            'edit models',
            'show models',
            'delete models',

            'ban types',
            'create ban types',
            'edit ban types',
            'show ban types',
            'delete ban types',

            'fuels',
            'create fuels',
            'edit fuels',
            'show fuels',
            'delete fuels',

            'gears',
            'create gears',
            'edit gears',
            'show gears',
            'delete gears',

            'transmissions',
            'create transmissions',
            'edit transmissions',
            'show transmissions',
            'delete transmissions',

            'engines',
            'create engines',
            'edit engines',
            'show engines',
            'delete engines',

            'colors',
            'create colors',
            'edit colors',
            'show colors',
            'delete colors',

            'properties',
            'create properties',
            'edit properties',
            'show properties',
            'delete properties',

            'discounts',
            'create discounts',
            'edit discounts',
            'show discounts',
            'delete discounts',

            'cars',
            'create cars',
            'edit cars',
            'show cars',
            'show cars gallery',
            'delete cars',

            'brons',
            'create brons',
            'edit brons',
            'show brons',
            'delete brons',
            'accept',
            'reject',
            'pending',

            'call requests',
            'answer',


            'blogs',
            'create blogs',
            'edit blogs',
            'show blogs',
            'delete blogs',

            'site comments',
            'create site comments',
            'edit site comments',
            'show site comments',
            'delete site comments',

            'car comments',
            'create car comments',
            'edit car comments',
            'show car comments',
            'delete car comments',

            'site faqs',
            'create site faqs',
            'edit site faqs',
            'show site faqs',
            'delete site faqs',

            'car faqs',
            'create car faqs',
            'edit car faqs',
            'show car faqs',
            'delete car faqs',

            'partners',
            'create partners',
            'edit partners',
            'show partners',
            'delete partners',

            'messages',

            'slide',
            'create slide',
            'edit slide',
            'show slide',
            'delete slide',
            
            'team',
            'create team',
            'edit team',
            'show team',
            'delete team',

            'languages',
            'create languages',
            'edit languages',
            'show languages',
            'delete languages',
            'edit translations',

            'admins',
            'create admins',
            'edit admins',
            'show admins',
            'delete admins',

            'roles',
            'create roles',
            'edit roles',
            'show roles',
            'delete roles',
            
            'services',
            'create services',
            'edit services',
            'show services',
            'delete services',

            'permissions',
            'set permissions',

            'general settings',
            'edit general settings',

            'main page view'
        ];

        foreach ($permissions as $key => $value) {
            Permission::create([
                'name'=>$value,
                'guard_name'=>'web',
            ]);
            $role = Role::first();
            $role->givePermissionTo($value);
        }
    }
}
