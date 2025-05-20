<?php

namespace Database\Seeders;

use Hash;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
       $Users = [
        [
            'name'=> 'admin',
            'email'=> 'admin@gmail.com',        
        ],
        [
            'name'=> 'hajat',
            'email'=> 'hajat@gmail.com',
        ]
        ];
        foreach($Users as $user){
            $model =new User();
            $model->name = $user['name'];
            $model->email = $user['email'];
            $model->password = Hash::make('admin123');

            $model->save();

        }


    }
}
