<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\Models\User([
            'name' => 'Mohammed Ali',
            'email' => 'alimoh22062000@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        $user->save();
    }
}
