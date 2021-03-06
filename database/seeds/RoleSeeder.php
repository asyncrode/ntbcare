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

        Role::create(['name' => 'super-admin', 'guard_name' => 'admins']);
        Role::create(['name' => 'OPD', 'guard_name' => 'admins']);
        Role::create(['name' => 'OPD-Prov', 'guard_name' => 'admins']);
        Role::create(['name' => 'Executive', 'guard_name' => 'admins']);
    }
}
