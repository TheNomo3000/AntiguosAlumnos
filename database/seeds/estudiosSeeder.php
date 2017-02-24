<?php

use Illuminate\Database\Seeder;

class estudiosSeeder extends Seeder
{

    public function run()
    {
        DB::table('estudios')->insert([
            'nombre'=> 'Desarrollo de Aplicaciones Web',
            'abreviatura' => 'DAW',
        ]);
        DB::table('estudios')->insert([
            'nombre'=> 'Sistemas Microinformaticos y Redes',
            'abreviatura' => 'SMR',
        ]);
        DB::table('estudios')->insert([
            'nombre'=> 'Gestion Administritiva',
            'abreviatura' => 'GA',
        ]);
    }
}
