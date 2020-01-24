<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::where('name','admin')->first();
        $roleTeacher = Role::where('name','teacher')->first();
        $roleUser = Role::where('name','user')->first();

        $admin = User::create([
        	'name' => 'Admin',
        	'email' => 'admin@gmail.com',
        	'address' => 'Sukabumi',
        	'hobby' => 'Sepak Bola',
        	'phone' => '081234567890',
        	'born'=> '2003-10-08',
        	'password'=> bcrypt('secret')

        ]);
        $admin->roles()->attach($roleAdmin);

        $teacher = User::create([
        	'name' => 'Teacher',
        	'email' => 'teacher@gmail.com',
        	'address' => 'Sukabumi',
        	'hobby' => 'Sepak Bola',
        	'phone' => '081234567890',
        	'born'=> '2003-10-08',
        	'password'=> bcrypt('secret')

        ]);
        $teacher->roles()->attach($roleTeacher);

        $user = User::create([
        	'name' => 'User',
        	'email' => 'user@gmail.com',
        	'address' => 'Sukabumi',
        	'hobby' => 'Sepak Bola',
        	'phone' => '081234567890',
        	'born'=> '2003-10-08',
        	'password'=> bcrypt('secret')

        ]);
        $user->roles()->attach($roleUser);

    }
}
