<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UserTableSeeder extends Seeder{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        factory(Course\User::class)->create([
            'name'=>'Daniel',
            'role'=>'admin',
            'email'=>'daniel@hola.com',
            'password'=>bcrypt('super')
        ]);
        factory(Course\User::class, 49)->create();
    }
}