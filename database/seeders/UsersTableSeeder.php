<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=[
        [
            'name' => 'hajat',
            'email' => 'hajat@gmail.com',
            'password' => 'hajat123',
        ],
        [
            'name' => 'nabeer',
            'email' => 'nabeer@gmail.com',
            'password' =>'nabeer123',
        ],
        [
            'name' => 'ahmer',
            'email' => 'ahmer@gmail.com',
            'password' =>'ahmer123',
        ],
    ];

    foreach($users as $user){
        $model = new User();
        $model->name =$user['name'];
        $model->email =$user['email'];
        $model->password =Hash::make($user['password']) ;
        $model->save();

    }
    }
}
