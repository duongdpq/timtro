<?php

use Illuminate\Database\Seeder;
use App\Admin;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Admin::create([
            'name' => 'Admin Istrator',
            'email' => 'admin@admin.com',
            'password' => '123456',
        ]);

        User::create([
            'name' => 'End User',
            'email' => 'user@user.com',
            'password' => '123456',
        ]);
    }
}
