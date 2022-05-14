<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettlementtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settlementtypes')->insert([
            ['id' => '1', 'name' => 'Aeropuerto'],
            ['id' => '2', 'name' => 'Barrio'],
            ['id' => '3', 'name' => 'Campamento'],
            ['id' => '4', 'name' => 'Colonia'],
            ['id' => '5', 'name' => 'Condominio'],
            ['id' => '6', 'name' => 'Congregación'],
            ['id' => '7', 'name' => 'Conjunto habitacional'],
            ['id' => '8', 'name' => 'Ejido'],
            ['id' => '9', 'name' => 'Equipamiento'],
            ['id' => '10', 'name' => 'Estación'],
            ['id' => '11', 'name' => 'Exhacienda'],
            ['id' => '12', 'name' => 'Finca'],
            ['id' => '13', 'name' => 'Fraccionamiento'],
            ['id' => '14', 'name' => 'Granja'],
            ['id' => '15', 'name' => 'Hacienda'],
            ['id' => '16', 'name' => 'Paraje'],
            ['id' => '17', 'name' => 'Parque industrial'],
            ['id' => '18', 'name' => 'Poblado comunal'],
            ['id' => '19', 'name' => 'Pueblo'],
            ['id' => '20', 'name' => 'Puerto'],
            ['id' => '21', 'name' => 'Ranchería'],
            ['id' => '22', 'name' => 'Rancho'],
            ['id' => '23', 'name' => 'Residencial'],
            ['id' => '24', 'name' => 'Unidad habitacional'],
            ['id' => '25', 'name' => 'Villa'],
            ['id' => '26', 'name' => 'Zona comercial'],
            ['id' => '27', 'name' => 'Zona federal'],
            ['id' => '28', 'name' => 'Zona industrial'],
            ['id' => '29', 'name' => 'Zona militar'],
            ['id' => '30', 'name' => 'Zona naval'],
        ]);
    }
}
