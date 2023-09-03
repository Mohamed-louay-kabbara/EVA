<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Admin',
            'email'=>'Admin@gmail.com',
            'password'=>Hash::make('123456789'),
            'role'=>1,
            'phone'=>'0938787722',
            'gender'=>'ذكر'
        ]);
    }
}
