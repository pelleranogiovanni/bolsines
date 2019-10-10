<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EscuelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('escuelas')->insert([
            'escuela' => 'EEP N° 140 REGIMIENTO DE PATRICIOS',
            'domicilio' => 'AV. DEL TRABAJO 1-B° SUR',
        ]);

        DB::table('escuelas')->insert([
            'escuela' => 'EEP N° 1057 B° ESCALADA',
            'domicilio' => 'B° ESCALADA',
        ]);

        DB::table('escuelas')->insert([
            'escuela' => 'EET N° 25',
            'domicilio' => 'JOSE MARIA MUÑOZ Y FORMOSA',
        ]);

        DB::table('escuelas')->insert([
            'escuela' => 'EEP N° 14 MANUEL BELGRANO',
            'domicilio' => 'COLON N° 586',
        ]);

        DB::table('escuelas')->insert([
            'escuela' => 'EEP N° 389',
            'domicilio' => 'PASTEUR N° 1073',
        ]);

        DB::table('escuelas')->insert([
            'escuela' => 'EEP N° 11 BARTOLOME MITRE',
            'domicilio' => 'BARTOLOME MITRE N° 1002',
        ]);

        DB::table('escuelas')->insert([
            'escuela' => 'EEP N° 82 ALBERTO LARROQUE',
            'domicilio' => 'NECOCHEA 698',
        ]);

        DB::table('escuelas')->insert([
            'escuela' => 'EEP N° 418 EL PASTORIL',
            'domicilio' => 'LOTE N° 262 - COLONIA PASTORIL',
        ]);

        DB::table('escuelas')->insert([
            'escuela' => 'EEP N° 663',
            'domicilio' => 'AV. ALBERDI N° 1900',
        ]);

        DB::table('escuelas')->insert([
            'escuela' => 'EEP N° 1021 PEDRO ORTEGA',
            'domicilio' => 'MAIPU N° 1875',
        ]);

        DB::table('escuelas')->insert([
            'escuela' => 'EGB N° 708 ALMIRANTE JULIAN IRIZAR',
            'domicilio' => 'LOTE 53-MESON DE FIERRO',
        ]);

        DB::table('escuelas')->insert([
            'escuela' => 'EGB N° 29',
            'domicilio' => 'LOTE 88-RUTA PROV. 89 - COLONIA J. J. PASO',
        ]);


    }
}
