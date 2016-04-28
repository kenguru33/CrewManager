<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        User::truncate();
        factory(User::class)->create(['member_id' => 1, 'first_name' => 'Super', 'last_name' => 'Administrator' , 'email' => 'admin@localhost', 'password' => bcrypt('admin')]);
        factory(User::class,10)->create();
    }
}
