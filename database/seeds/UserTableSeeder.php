<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' 		=> 'Rey',
                'last_name' => 'Rodriguez',
                'email' 	=> 'reirpinf@gmail.com',
                'user' 		=> 'r3ing',
                'password' 	=> \Hash::make('12345'),
                'type' 		=> 'admin',
                'active' 	=> 1,
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name' 		=> 'Abel',
                'last_name' => 'Falcon',
                'email' 	=> 'salgado27in@gmail.com',
                'user' 		=> 'abelito',
                'password' 	=> \Hash::make('12345'),
                'type' 		=> 'admin',
                'active' 	=> 1,
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name' 		=> 'Nelsa',
                'last_name' => 'Reyes',
                'email' 	=> 'nelsitareyes@gmail.com',
                'user' 		=> 'fresita',
                'password' 	=> \Hash::make('12345'),
                'type' 		=> 'user',
                'active' 	=> 1,
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],

        );

        User::insert($data);
    }
}
