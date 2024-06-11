<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password=Hash::make('12345');
        $userRecords = [
            [   'id'=>1,
                'first_name'=>'Asem',
                'last_name'=>'Al-Hakim',
                'username'=>'asem@gmail.com',
                'password'=>$password,
                'birth_date'=>'2024-06-11 ',
                'permission'=>true,
                'image'=>'https://avatars.githubusercontent.com/u/172431050?v=4'
            ],
            [   'id'=>2,
                'first_name'=>'Ahmed',
                'last_name'=>'Islam',
                'username'=>'Ahmed@gmail.com',
                'password'=>$password,
                'birth_date'=>'2024-06-11',
                'permission'=>false,
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHnVvrGei2D_fMcwSZC_p1xgi3rMzroYyk7g&s'
            ],
            [   'id'=>3,
                'first_name'=>'Mohamed',
                'last_name'=>'Sidiya',
                'username'=>'mohamed@outlook.com',
                'password'=>$password,
                'birth_date'=>'2024-06-11',
                'permission'=>false,
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKJQp8ndvEkIa-u1rMgJxVc7BBsR11uSLHGA&s'
            ],
        ];
        User::insert($userRecords);
    }
}
