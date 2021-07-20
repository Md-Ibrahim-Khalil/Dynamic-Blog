<?php

use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Saepe ex fugit reprehenderit, consectetur libero quis omnis maiores, 
                                tempora tempore ad voluptatem ratione excepturi expedita est, 
                                eum commodi sequi atque inventore.',
        ]);
    }
}