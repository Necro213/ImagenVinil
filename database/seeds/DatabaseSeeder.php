<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => 'Alexis Adrian',
            'apellidos' => 'Bogarin Santana',
            'username' => 'Necro',
            'password' => bcrypt('1234'),
            'apikey' => bcrypt('Necro')
        ]);
    }
}
