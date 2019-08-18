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
    public function run() {
        DB::table('users')->insert([
            ['fullname' => 'admin', 'nickname' => 'admin', 'email' => 'admin@gmail.com', 'password' => bcrypt('12345678'), 'role_id' => config('seed.admin')],
            ['fullname' => 'user', 'nickname' => 'user', 'email' => 'user@gmail.com', 'password' => bcrypt('12345678'), 'role_id' => config('seed.user')],
        ]);
    }
}
