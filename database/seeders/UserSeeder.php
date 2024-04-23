<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'login' => 'KiKO',
                'email'=> 'kozurev44@gmail.com',
                'admin_rights' => '1',
                'password' => '12345678',
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
