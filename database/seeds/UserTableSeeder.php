<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->nama = 'Admin';
        $user->email = 'admin@admin.admin';
        $user->password = bcrypt('Admin123');
        $user->save();
    }
}
