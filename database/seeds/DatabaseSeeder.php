<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(TestSeeder::class);

        // DB::table('users')->insert([
        // 	'name' => str_random(10),
        // 	'email'=> str_random(10).'@gmail.com',
        // 	'password'=>bcrypt('secret'),
        // ]);

        
       
    }
}
