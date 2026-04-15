<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        $arrUser = [
            [
                'name' => 'Super Admin',
                'email'=> 'superadmin@gmail.com',
                'password'=> Hash::make('123456'),
            ],
            [
                'name' => 'Mohon Sarker',
                'email'=> 'morshedmohon4@gmail.com',
                'password'=> Hash::make('123456'),
            ],
        ];
        User::truncate();
        foreach ($arrUser as $eachuser){
            $use = new User();
            $use->fill($eachuser);
            $use->save();
        }
    }
}
