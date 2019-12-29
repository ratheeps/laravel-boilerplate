<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now();
        $users = [
            [
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('secret'),
                'created_at' => $now
            ]
        ];
        \App\User::insert($users);
    }
}
