<?php

use Illuminate\Database\Seeder;
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
       User::create([
        'name'      => 'André Tiago',
        'email'     => 'eu@andretiago.com.br',
        'password'  => bcrypt('spckr@123'),
       ]);
    }
}
