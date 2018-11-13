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
        /*DB::table('users')->insert([
            'nombre' => 'Alexis Adrian',
            'apellidos' => 'Bogarin Santana',
            'username' => 'Necro',
            'password' => bcrypt('1234'),
            'apikey' => bcrypt('Necro')
        ]);*/

        DB::table('estacion_config')->insert([
            'image' => 'primavera.png',
            'estacion' => 'Primavera',
            'dia' => 22,
            'mes' => 03,
            'diaf' => 21,
            'mesf' => 06
        ]);

        DB::table('estacion_config')->insert([
            'image' => 'verano.png',
            'estacion' => 'Verano',
            'dia' => 22,
            'mes' => 06,
            'diaf' => 21,
            'mesf' => 9
        ]);

        DB::table('estacion_config')->insert([
            'image' => 'otono.png',
            'estacion' => 'Otono',
            'dia' => 22,
            'mes' => 9,
            'diaf' => 21,
            'mesf' => 12
        ]);

        DB::table('estacion_config')->insert([
            'image' => 'invierno.png',
            'estacion' => 'Invierno',
            'dia' => 22,
            'mes' => 12,
            'diaf' => 21,
            'mesf' => 3
        ]);
    }
}
