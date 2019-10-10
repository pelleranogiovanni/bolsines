<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'categoria' => 'GOBERNADOR Y VICEGOBERNADOR',
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'DIPUTADOS',
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'INTENDENTE',
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'CONCEJALES',
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'BLANCOS',
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'NULOS',
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'RECURRIDOS',
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'IMPUGNADOS',
        ]);
    }
}
