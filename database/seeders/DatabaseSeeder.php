<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_formulario')->insert([
            'descripcion' => "formulario paypal",
        ]);
        // multiples datos
        $roles = ["Administrador", "Cliente"];
        for ($i = 0; $i < count($roles); $i++) {
            DB::table('rol')->insert([
                'descripcion' => $roles[$i],
            ]);
        }
        $status = ["Espera", "Realizado"];
        for ($j = 0; $j < count($status); $j++) {
            DB::table('estado')->insert([
                'descripcion' => $status[$j],
            ]);
        }
        $tasa = ["pay-paypal"];
        for ($o = 0; $o < count($tasa); $o++) {
            DB::table('tasa_cambio')->insert([
                'descripcion' => $tasa[$o],
                'valor' => "999",
                'id_formulario' => 1,
            ]);
        }
    }
}
