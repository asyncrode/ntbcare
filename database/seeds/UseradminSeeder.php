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
            'nama' => 'Dinas PU Kota Mataram',
            'email' => 'pumtr@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        $lombok->assignRole('OPD');

        $bima = Admin::create([
            'nama' => 'Dinas PUPR Provinsi NTB',
            'email' => 'pupr@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        $bima->assignRole('OPD-Prov');

        $mataram = Admin::create([
            'nama' => 'Pimpinan',
            'email' => 'vip@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        $mataram->assignRole('Executive');
    }
}
