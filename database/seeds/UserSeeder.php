<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'nik' => '12313414',
            'password' => bcrypt('test123')
        ]);
    }
}
