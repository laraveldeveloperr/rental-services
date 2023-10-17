<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
                'name'     => 'Cavid Şıxıyev',
                'email'    => 'chaparoglucavid@gmail.com',
                'password' => bcrypt('123456'),
                'user_role'     => 10,
                'bio'      => "",
        ]);

        $role = Role::first();
        $admin->assignRole($role);
    }
}
