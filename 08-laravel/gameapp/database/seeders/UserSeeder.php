<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // using ORM eloquent
        $user = new User;
        $user->document = 1052772332;
        $user->fullname = 'Karina Monserrat Masache';
        $user->gender = 'Female';
        $user->birthdate = '1995-11-07';
        $user->phone = '3004205674';
        $user->email = 'karinamasache@gmail.com';
        $user->password = bcrypt ('admin');
        $user->role = 'Administator';
        $user->save();

        // using ORM eloquent
        $user = new User;
        $user->document = 1053835222;
        $user->fullname = 'erika velasquez';
        $user->gender = 'Female';
        $user->birthdate = '1994-02-23';
        $user->phone = '3135200643';
        $user->email = 'erikavelasquezvalencia@gmail.com';
        $user->password = bcrypt('admin');
        $user->role = 'Administator';
        $user->save();
    
        DB::table('users')->insert([
        'document' => 1054835222,
        'fullname' => 'Nicolas Llanos',
        'gender' => 'Male',
        'birthdate' => '1994-11-08',
        'phone' => '3207896983',
        'email' => 'samnicko26928@gmail.com',
        'password' => bcrypt('admin'),
        'role' => 'Customer',
    ]);
    }
}
