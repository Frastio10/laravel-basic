<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Frastio Agustian',
        	'email' => 'frastio.agustian@gmail.com',
        	'address' => 'Sukabumi Jawa Barat',
        	'hobby' => 'Sepak Bola',
        	'phone' => '081234567890',
        	'born'=> '2003-10-08',
        	'password'=> bcrypt('secret')

        ]);
    }
}
