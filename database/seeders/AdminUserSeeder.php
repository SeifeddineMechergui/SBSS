<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'mechergui.seifeddine@sbss.com',
            'password' => bcrypt('sbssAdmin123'),
            'email_verified_at' => now(),
            'is_admin' => true
        ]);
    }
}
