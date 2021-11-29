<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
	public function run()
    {
        $userA = User::create([
            'name' => 'Dennys Yutaro Sullcahuaman Valdez',
            'email' => 'dennys.sullcahuaman.valdez@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $userM = User::create([
            'name' => 'Liz Montañez',
            'email' => 'liz@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $userU = User::create([
            'name' => 'Juana ribera',
            'email' => 'juana@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $userA->assignRole('admin');
        $userM->assignRole('mantenedor');
        $userU->assignRole('user');
        
    }
}
