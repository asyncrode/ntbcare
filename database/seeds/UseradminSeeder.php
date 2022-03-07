<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Spatie\Permission\Models\Role;

class UseradminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::create([
            'nama' => 'super user',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        $admin->assignRole('super-admin');

        $lombok = Admin::create([
            'nama' => 'opd lombok',
            'email' => 'lombok@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        $lombok->assignRole('opd-lombok');

        $bima = Admin::create([
            'nama' => 'opd bima',
            'email' => 'bima@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        $bima->assignRole('opd-bima');

        $mataram = Admin::create([
            'nama' => 'OPD PU Mataram',
            'email' => 'pu@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        $mataram->assignRole('opd-pu');
    }
}
