<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'type' => USER_TYPES['admin']
        ]);

        $user = User::create([
            'name' => 'Ibrar',
            'email' => 'kamranabrar90@gmail.com',
            'password' => bcrypt('kamran'),
            'type' => USER_TYPES['user']
        ]);
    }
}
