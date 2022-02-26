<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Role::create(['name' => 'super-admin','guard_name' => 'admin']);
        Role::create(['name' => 'opd-lombok','guard_name' => 'admin']);
        
    }
}
