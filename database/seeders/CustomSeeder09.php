<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomSeeder09 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idFed = DB::table('federal_entities')->insertGetId(['key' => '09', 'name' => 'Ciudad de México', 'code' => '']);

        $idMun = DB::table('municipalities')->insertGetId(['key' => '010', 'name' => 'Álvaro Obregón', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01000', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0001', 'name' => 'San Ángel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01010', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0005', 'name' => 'Los Alpes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01020', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0006', 'name' => 'Guadalupe Inn', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01030', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0009', 'name' => 'Axotla', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0010', 'name' => 'Florida', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01040', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0012', 'name' => 'Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01049', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0014', 'name' => 'Tlacopac', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01050', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0016', 'name' => 'Ex-Hacienda de Guadalupe Chimalistac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01060', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0017', 'name' => 'Altavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0018', 'name' => 'San Ángel Inn', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01070', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0019', 'name' => 'Chimalistac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01080', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0022', 'name' => 'Progreso Tizapan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01089', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0024', 'name' => 'Ermita Tizapan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01090', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0025', 'name' => 'La Otra Banda', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '0026', 'name' => 'Loreto', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '0028', 'name' => 'Tizapan', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01100', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0031', 'name' => 'Pólvora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01109', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0033', 'name' => 'La Conchita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01110', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0034', 'name' => 'Belém de las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0036', 'name' => 'El Capulín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0037', 'name' => 'Ampliación El Capulín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0039', 'name' => 'Liberales de 1857', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01120', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0042', 'name' => 'Acueducto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0044', 'name' => 'Cove', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0046', 'name' => 'Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0047', 'name' => 'Las Américas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01125', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0043', 'name' => 'Ampliación Acueducto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01130', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0052', 'name' => 'Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0053', 'name' => 'Molino de Santo Domingo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0056', 'name' => 'Real del Monte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01139', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0058', 'name' => 'Reacomodo Pino Suárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01140', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0059', 'name' => 'Bellavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0060', 'name' => 'José Maria Pino Suárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01150', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0063', 'name' => 'Cristo Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0064', 'name' => 'Tolteca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01160', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0066', 'name' => 'Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0067', 'name' => 'Isidro Fabela', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0068', 'name' => 'Maria G. de García Ruiz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0069', 'name' => '1a Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01170', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0074', 'name' => 'Abraham M. González', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01180', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0076', 'name' => 'Carola', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0077', 'name' => '8 de Agosto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0078', 'name' => 'San Pedro de los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01200', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0079', 'name' => 'Arturo Martínez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01210', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0082', 'name' => 'Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01219', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0084', 'name' => 'Lomas de Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01220', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2681', 'name' => 'La Estrella', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0085', 'name' => 'Bonanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0086', 'name' => 'Cuevitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0087', 'name' => 'El Cuernito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0089', 'name' => 'Mártires de Tacubaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0090', 'name' => 'Zenón Delgado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01230', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0092', 'name' => 'Campo de Tiro los Gamitos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0097', 'name' => 'Los Gamitos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0098', 'name' => 'Tlapechico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0132', 'name' => 'El Piru Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0224', 'name' => 'El Piru 2a Ampliación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01239', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0102', 'name' => 'La Huerta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01240', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0103', 'name' => 'Pueblo Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01250', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0104', 'name' => 'El Árbol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0105', 'name' => 'Ladera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0106', 'name' => 'Lomas de Nuevo México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0107', 'name' => 'Margarita Maza de Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0108', 'name' => 'Tecolalco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01259', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0109', 'name' => 'Ampliación La Cebada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2845', 'name' => 'La Mexicana 2a Ampliación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01260', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0110', 'name' => 'Calzada Jalalpa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0112', 'name' => 'La Mexicana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0113', 'name' => 'Ampliación La Mexicana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0114', 'name' => 'La Palmita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0115', 'name' => 'Liberación Proletaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01269', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0117', 'name' => '1a Sección Cañada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0118', 'name' => '2a Sección Cañada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01270', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0120', 'name' => 'El Tejocote', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0121', 'name' => 'La Presa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0123', 'name' => 'Golondrinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0124', 'name' => 'Golondrinas 1a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0125', 'name' => 'Golondrinas 2a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0127', 'name' => 'Lomas de Capula', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01275', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0131', 'name' => 'Villa Solidaridad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01276', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0093', 'name' => 'El Pirul', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01278', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0133', 'name' => 'Desarrollo Urbano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01279', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0136', 'name' => 'Lomas de Becerra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01280', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0138', 'name' => 'Arvide', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0139', 'name' => 'El Pocito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0140', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0141', 'name' => 'La Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01285', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0144', 'name' => 'El Rodeo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01289', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0146', 'name' => 'Reacomodo El Cuernito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01290', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0147', 'name' => 'Piloto Adolfo López Mateos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0148', 'name' => 'Presidentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01296', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0152', 'name' => 'Jalalpa Tepito 2a Ampliación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0153', 'name' => 'Ampliación Jalalpa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0154', 'name' => 'Jalalpa Tepito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01298', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0156', 'name' => 'Ampliación Piloto Adolfo López Mateos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01299', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0160', 'name' => '1a Ampliación Presidentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0161', 'name' => '2a Ampliación Presidentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01310', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0163', 'name' => 'San Gabriel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01320', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0164', 'name' => 'Carlos A. Madrazo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01330', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0168', 'name' => 'Paseo de las Lomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01340', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0170', 'name' => 'Bejero del Pueblo Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01376', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0171', 'name' => 'Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2682', 'name' => 'Santa Fe Peña Blanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2683', 'name' => 'Santa Fe La Loma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2864', 'name' => 'Santa Fe Centro Ciudad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01377', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0172', 'name' => 'Jalalpa El Grande', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01389', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0176', 'name' => 'Santa Fe Tlayapaca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01400', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0181', 'name' => 'Olivar del Conde 1a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0184', 'name' => 'Preconcreto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01407', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0187', 'name' => 'Galeana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01408', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0188', 'name' => 'Olivar del Conde 2a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01410', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0193', 'name' => 'Barrio Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0194', 'name' => 'Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01419', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0195', 'name' => 'Minas Cristo Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01420', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0196', 'name' => 'Sacramento', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0197', 'name' => 'Santa María Nonoalco', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01430', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0198', 'name' => 'Colina del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01450', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0202', 'name' => 'Hogar y Redención', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01460', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0204', 'name' => 'Alfonso XIII', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01470', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0206', 'name' => 'Alfalfar', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '0207', 'name' => 'Molino de Rosas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01480', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0209', 'name' => 'Lomas de Plateros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01490', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0211', 'name' => 'La Cascada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01500', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0213', 'name' => 'Santa Lucía', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '2704', 'name' => 'Miguel Gaona Armenta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01509', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0221', 'name' => 'Santa Lucía Chantepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01510', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0222', 'name' => 'Garcimarrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0223', 'name' => 'La Araña', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2636', 'name' => 'Los Cedros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01520', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0094', 'name' => 'Ampliación Los Pirules', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0225', 'name' => 'Estado de Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0226', 'name' => 'Ampliación Estado de Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0227', 'name' => 'Piru Santa Lucía', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2841', 'name' => 'El Politoco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01530', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0229', 'name' => 'Corpus Christy', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01538', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0232', 'name' => 'Tepopotla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01539', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0233', 'name' => 'Acuilotla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2643', 'name' => 'Cooperativa Unión Olivos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01540', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0238', 'name' => 'Balcones de Cehuayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0239', 'name' => 'Cehuaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0240', 'name' => 'Llano Redondo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0241', 'name' => 'Punta de Cehuaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01548', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2638', 'name' => 'Villa Progresista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01549', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0243', 'name' => 'Dos Ríos del Pueblo Santa Lucía', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01550', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0245', 'name' => 'Tepeaca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0246', 'name' => 'Ampliación Tepeaca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2849', 'name' => 'Rinconada Las Cuevitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01560', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0248', 'name' => 'Ave Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0249', 'name' => 'Canutillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0250', 'name' => 'Canutillo 3a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0251', 'name' => 'Canutillo 2a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01566', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2747', 'name' => 'Hueytlale', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01569', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0255', 'name' => 'Reacomodo Valentín Gómez Farías', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01588', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0259', 'name' => 'Tarango', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01590', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0261', 'name' => 'El Rincón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01600', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0263', 'name' => 'Merced Gómez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01610', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0265', 'name' => 'Colinas de Tarango', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2639', 'name' => 'Profesor J. Arturo López Martínez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01618', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0267', 'name' => 'Arcos Centenario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2745', 'name' => 'Ex-Hacienda de Tarango', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01619', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0268', 'name' => 'La Martinica', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0269', 'name' => 'Rinconada de Tarango', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01620', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0270', 'name' => 'Lomas de Tarango', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01630', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0271', 'name' => 'Lomas de Puerta Grande', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0273', 'name' => 'Puerta Grande', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2640', 'name' => 'Los Juristas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01640', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0275', 'name' => 'Herón Proal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01645', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0276', 'name' => 'Ponciano Arriaga', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01650', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0277', 'name' => 'La Milagrosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0278', 'name' => 'Palmas Axotitla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0279', 'name' => 'Tlacuitlapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0280', 'name' => 'Ampliación Tlacuitlapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0281', 'name' => '2o Reacomodo Tlacuitlapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2844', 'name' => 'El Ruedo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2848', 'name' => 'Santa Lucía Chantepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01700', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0282', 'name' => 'La Joyita del Pueblo Tetelpan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0283', 'name' => 'Ocotillos del Pueblo Tetelpan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0284', 'name' => 'San Agustín del Pueblo Tetelpan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0285', 'name' => '2a Del Moral del Pueblo Tetelpan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0286', 'name' => 'Tecalcapa del Pueblo Tetelpan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0287', 'name' => 'Tetelpan', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01708', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0291', 'name' => 'El Encino del Pueblo Tetelpan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0292', 'name' => 'El Mirador del Pueblo Tetelpan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01710', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0294', 'name' => 'Las Águilas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0295', 'name' => 'Ampliación Alpes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01720', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0297', 'name' => 'Lomas de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01729', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0298', 'name' => 'Alcantarilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01730', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0299', 'name' => 'Lomas de las Águilas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0300', 'name' => 'Puente Colorado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01740', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0303', 'name' => 'La Peñita del Pueblo Tetelpan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0304', 'name' => 'San Clemente Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2842', 'name' => 'San Clemente Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01750', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0305', 'name' => 'Las Águilas 1a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0306', 'name' => 'Las Águilas 2o Parque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0307', 'name' => 'Las Águilas 3er Parque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01759', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0308', 'name' => 'Ampliación Las Águilas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01760', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0309', 'name' => 'Atlamaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0310', 'name' => 'Flor de María', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0311', 'name' => 'La Herradura del Pueblo Tetelpan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01770', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0315', 'name' => 'La Angostura', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0316', 'name' => 'San José del Olivar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01780', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0318', 'name' => 'Olivar de los Padres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0319', 'name' => 'Tizampampano del Pueblo Tetelpan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01789', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0323', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01790', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0324', 'name' => 'Lomas de los Ángeles del Pueblo Tetelpan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0325', 'name' => 'Lomas de San Ángel Inn', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01800', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0327', 'name' => 'San Bartolo Ameyalco', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01807', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0328', 'name' => 'Rancho San Francisco Pueblo San Bartolo Ameyalco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01810', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0330', 'name' => 'Villa Verdún', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01820', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0332', 'name' => 'Lomas Axomiatla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2843', 'name' => 'Ejido San Mateo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01830', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0333', 'name' => 'Santa Rosa Xochiac', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01840', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0334', 'name' => 'Torres de Potrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01849', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0337', 'name' => 'Rincón de la Bolsa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2847', 'name' => 'Rancho del Carmen del Pueblo San Bartolo Ameyalco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01857', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0341', 'name' => 'Lomas de Chamontoya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01859', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0343', 'name' => 'Tlacoyaque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01860', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0344', 'name' => 'Lomas de La Era', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01863', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0003', 'name' => 'Lomas del Capulín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01870', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0345', 'name' => 'Lomas de los Cedros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01900', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0347', 'name' => 'Jardines del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '01904', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2846', 'name' => 'San Jerónimo Aculco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '002', 'name' => 'Azcapotzalco', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02000', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0353', 'name' => 'Centro de Azcapotzalco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02010', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0356', 'name' => 'Los Reyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '0357', 'name' => 'San Rafael', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0358', 'name' => 'Nuevo Barrio San Rafael', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02020', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0360', 'name' => 'San Marcos', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '0361', 'name' => 'Santo Tomás', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02040', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0362', 'name' => 'Del Maestro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0363', 'name' => 'San Sebastián', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02050', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0364', 'name' => 'Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0365', 'name' => 'Santa María Malinalco', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02060', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0368', 'name' => 'Sindicato Mexicano de Electricistas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0369', 'name' => 'Un Hogar Para Cada Trabajador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02070', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0371', 'name' => 'Del Recreo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0372', 'name' => 'Nextengo', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02080', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0374', 'name' => 'Clavería', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0376', 'name' => 'Sector Naval', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02090', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0377', 'name' => 'San Álvaro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02099', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0378', 'name' => 'Ángel Zimbrón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02100', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0379', 'name' => 'El Rosario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02120', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0385', 'name' => 'San Martín Xochinahuac', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02128', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0389', 'name' => 'Nueva El Rosario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02129', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0390', 'name' => 'Nueva España', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02130', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0391', 'name' => 'Tierra Nueva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02140', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0392', 'name' => 'Santa Inés', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02150', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0393', 'name' => 'Pasteros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02160', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0394', 'name' => 'Santo Domingo', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02200', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0396', 'name' => 'Reynosa Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02230', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0397', 'name' => 'Santa Bárbara', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02240', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0398', 'name' => 'San Andrés', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '0399', 'name' => 'San Andrés', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02250', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0400', 'name' => 'Santa Catarina', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02300', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0402', 'name' => 'Industrial Vallejo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02310', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0404', 'name' => 'Ferrería', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02320', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0405', 'name' => 'San Andrés de las Salinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02330', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0406', 'name' => 'Huautla de las Salinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02340', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0407', 'name' => 'Santa Cruz de las Salinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02360', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0409', 'name' => 'Las Salinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02400', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0410', 'name' => 'San Juan Tlihuaca', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02410', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0412', 'name' => 'Prados del Rosario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02420', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0415', 'name' => 'Ex-Hacienda El Rosario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02440', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0418', 'name' => 'Providencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02459', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0421', 'name' => 'Tezozomoc', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02460', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0422', 'name' => 'La Preciosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02470', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0423', 'name' => 'Ampliación Petrolera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02480', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0425', 'name' => 'Petrolera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02490', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0427', 'name' => 'San Mateo', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02500', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0428', 'name' => 'Unidad Cuitláhuac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02519', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0430', 'name' => 'El Jagüey', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02520', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0431', 'name' => 'Estación Pantaco', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02530', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0439', 'name' => 'Jardín Azpeitia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02600', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0441', 'name' => 'Pro-Hogar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02630', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0443', 'name' => 'Coltongo', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2798', 'name' => 'Coltongo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02640', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0444', 'name' => 'Monte Alto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02650', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0445', 'name' => 'Trabajadores de Hierro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02660', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0446', 'name' => 'Euzkadi', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02670', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0447', 'name' => 'Cosmopolita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02680', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0448', 'name' => 'Potrero del Llano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02700', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0449', 'name' => 'San Miguel Amantla', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02710', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0451', 'name' => 'San Pedro Xalpa', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02719', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0454', 'name' => 'Ampliación San Pedro Xalpa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02720', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0456', 'name' => 'San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0457', 'name' => 'San Bartolo Cahualtongo', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02730', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0459', 'name' => 'San Francisco Tetecala', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02750', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0461', 'name' => 'Santiago Ahuizotla', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02760', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0462', 'name' => 'Industrial San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0463', 'name' => 'Santa Lucía', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02770', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0464', 'name' => 'Santa Cruz Acayucan', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02780', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0465', 'name' => 'Plenitud', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02790', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0466', 'name' => 'Santa Apolonia', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02800', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0467', 'name' => 'Nueva Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02810', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0469', 'name' => 'Ignacio Allende', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0470', 'name' => 'Victoria de las Democracias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02830', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0473', 'name' => 'San Bernabé', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02840', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0474', 'name' => 'Obrero Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02860', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0476', 'name' => 'Tlatilco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02870', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0477', 'name' => 'San Salvador Xochimanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02900', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0478', 'name' => 'Aguilera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02910', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0479', 'name' => 'Aldana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02920', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0480', 'name' => 'Ampliación Cosmopolita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02930', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0481', 'name' => 'Liberación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02940', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0482', 'name' => 'Porvenir', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02950', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0483', 'name' => 'Del Gas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02960', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0484', 'name' => 'San Francisco Xocotitla', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02970', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0485', 'name' => 'Ampliación Del Gas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02980', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0486', 'name' => 'Arenal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0487', 'name' => 'Patrimonio Familiar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '02990', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0488', 'name' => 'La Raza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '014', 'name' => 'Benito Juárez', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03000', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0489', 'name' => 'Piedad Narvarte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03010', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0491', 'name' => 'Atenor Salas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03020', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0493', 'name' => 'Narvarte Poniente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03023', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2623', 'name' => 'Narvarte Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03100', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0496', 'name' => 'Del Valle Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2624', 'name' => 'Insurgentes San Borja', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03103', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2621', 'name' => 'Del Valle Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03104', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2622', 'name' => 'Del Valle Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03200', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0501', 'name' => 'Tlacoquemécatl', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03230', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0505', 'name' => 'Actipan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03240', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0506', 'name' => 'Acacias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03300', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0507', 'name' => 'Portales Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03303', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2625', 'name' => 'Portales Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03310', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0509', 'name' => 'Santa Cruz Atoyac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03320', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0512', 'name' => 'Residencial Emperadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03330', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0513', 'name' => 'Xoco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03340', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0515', 'name' => 'General Pedro María Anaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03400', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0516', 'name' => 'Álamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03410', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0518', 'name' => 'Postal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03420', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0519', 'name' => 'Miguel Alemán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03430', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0521', 'name' => 'Josefa Ortiz de Domínguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03440', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0522', 'name' => 'Niños Héroes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03500', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0523', 'name' => 'Nativitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03510', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0525', 'name' => 'Moderna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03520', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0526', 'name' => 'Iztaccihuatl', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03530', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0527', 'name' => 'Villa de Cortes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03540', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0528', 'name' => 'Del Carmen', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03550', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0529', 'name' => 'Zacahuitzco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03560', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0530', 'name' => 'Albert', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03570', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0531', 'name' => 'Portales Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03580', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0532', 'name' => 'Miravalle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03590', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0533', 'name' => 'Ermita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03600', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0534', 'name' => 'Vértiz Narvarte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03610', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0535', 'name' => 'Américas Unidas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03620', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0536', 'name' => 'Periodista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03630', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0537', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03640', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0538', 'name' => 'Del Lago', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03650', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0539', 'name' => 'Letrán Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03660', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0540', 'name' => 'San Simón Ticumac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03700', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0541', 'name' => 'Santa María Nonoalco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03710', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0542', 'name' => 'Ciudad de los Deportes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03720', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0543', 'name' => 'Nochebuena', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03730', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0544', 'name' => 'San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03740', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0545', 'name' => 'Extremadura Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03800', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0546', 'name' => 'San Pedro de los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03810', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0548', 'name' => 'Nápoles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03820', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0552', 'name' => '8 de Agosto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03840', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0554', 'name' => 'Ampliación Nápoles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03900', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0556', 'name' => 'San José Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03910', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0558', 'name' => 'Mixcoac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03920', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0559', 'name' => 'Insurgentes Mixcoac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03930', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0561', 'name' => 'Merced Gómez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '03940', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0562', 'name' => 'Crédito Constructor', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '003', 'name' => 'Coyoacán', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04000', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0563', 'name' => 'Villa Coyoacán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04010', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0566', 'name' => 'Santa Catarina', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04020', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0567', 'name' => 'La Concepción', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04030', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0569', 'name' => 'San Lucas', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04040', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0570', 'name' => 'Parque San Andrés', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04100', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0571', 'name' => 'Del Carmen', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04120', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0577', 'name' => 'San Diego Churubusco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0578', 'name' => 'San Mateo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04200', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0580', 'name' => 'Campestre Churubusco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04210', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0582', 'name' => 'Churubusco Country Club', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04230', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0584', 'name' => 'Prado Churubusco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04240', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0586', 'name' => 'Hermosillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04250', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0587', 'name' => 'Paseos de Taxqueña', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04260', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0590', 'name' => 'San Francisco Culhuacán Barrio de San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2807', 'name' => 'San Francisco Culhuacán Barrio de La Magdalena', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2808', 'name' => 'San Francisco Culhuacán Barrio de Santa Ana', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2831', 'name' => 'San Francisco Culhuacán Barrio de San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04300', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0596', 'name' => 'Ajusco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04310', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0601', 'name' => 'Romero de Terreros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04318', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0603', 'name' => 'Oxtopulco Universidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04320', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0606', 'name' => 'Cuadrante de San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0608', 'name' => 'Pedregal de San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04330', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0612', 'name' => 'El Rosedal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0613', 'name' => 'Los Reyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0614', 'name' => 'Del Niño Jesús', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04340', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0622', 'name' => 'Copilco El Bajo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04360', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0632', 'name' => 'Copilco El Alto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0633', 'name' => 'Copilco Universidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04369', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0636', 'name' => 'Pedregal de Santo Domingo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04370', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0637', 'name' => 'Atlántida', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0638', 'name' => 'Ciudad Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04380', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0640', 'name' => 'El Rosario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0641', 'name' => 'La Candelaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04390', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0643', 'name' => 'Huayamilpas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0644', 'name' => 'Nueva Díaz Ordaz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04400', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0645', 'name' => 'Educación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04410', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0646', 'name' => 'Petrolera Taxqueña', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04420', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0649', 'name' => 'Ex-Ejido de San Francisco Culhuacán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04440', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0651', 'name' => 'Culhuacán CTM Sección V', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2810', 'name' => 'Culhuacán CTM Sección II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2811', 'name' => 'Culhuacán CTM Sección I', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04450', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0652', 'name' => 'El Centinela', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04460', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0653', 'name' => 'Avante', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04470', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0655', 'name' => 'Presidentes Ejidales 1a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2805', 'name' => 'Presidentes Ejidales 2a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04480', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0657', 'name' => 'Culhuacán CTM Sección VI', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2809', 'name' => 'Culhuacán CTM Sección III', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2812', 'name' => 'Culhuacán CTM CROC', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2815', 'name' => 'Culhuacán CTM Sección X-A', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04489', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0658', 'name' => 'Culhuacán CTM Sección VII', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04490', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0659', 'name' => 'Culhuacán CTM Sección Piloto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2813', 'name' => 'Culhuacán CTM Canal Nacional', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04500', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0660', 'name' => 'Jardines del Pedregal de San Ángel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04510', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2793', 'name' => 'Universidad Nacional Autónoma de México', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04519', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0664', 'name' => 'La Otra Banda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04530', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0665', 'name' => 'Insurgentes Cuicuilco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04600', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0669', 'name' => 'Pedregal de Santa Úrsula', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04610', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0670', 'name' => 'Xotepingo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04620', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0671', 'name' => 'San Pablo Tepetlapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04630', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0672', 'name' => 'Adolfo Ruiz Cortínes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04640', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0673', 'name' => 'El Reloj', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04650', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0676', 'name' => 'Santa Úrsula Coapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04660', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0677', 'name' => 'Joyas del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04700', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0678', 'name' => 'Pedregal de Carrasco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04710', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0680', 'name' => 'Olímpica', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04730', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0686', 'name' => 'Cantil del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0687', 'name' => 'Bosques de Tetlameya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04739', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0690', 'name' => 'El Caracol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04800', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0691', 'name' => 'Alianza Popular Revolucionaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0692', 'name' => 'Los Cedros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04810', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0695', 'name' => 'Prados de Coyoacán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04815', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0696', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04830', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0697', 'name' => 'Los Cipreses', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04840', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2806', 'name' => 'Ex-Ejido de San Pablo Tepetlapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04870', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0706', 'name' => 'Espartaco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04890', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0708', 'name' => 'Jardines de Coyoacán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0709', 'name' => 'Los Olivos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04899', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0711', 'name' => 'El Parque de Coyoacán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04909', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0714', 'name' => 'Culhuacán CTM Sección VIII', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0715', 'name' => 'Culhuacán CTM Sección IX-A', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2814', 'name' => 'Culhuacán CTM Sección IX-B', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04910', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0716', 'name' => 'Carmen Serdán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04918', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0717', 'name' => 'Cafetales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04919', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0718', 'name' => 'Emiliano Zapata Fraccionamiento Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04920', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0719', 'name' => 'Los Girasoles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04929', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0723', 'name' => 'Las Campanas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04930', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0724', 'name' => 'Santa Cecilia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04938', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0725', 'name' => 'Campestre Coyoacán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04939', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0726', 'name' => 'Culhuacán CTM Sección X', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04940', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0727', 'name' => 'Los Sauces', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04950', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0728', 'name' => 'El Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04960', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0729', 'name' => 'Villa Quietud', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04970', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0730', 'name' => 'Haciendas de Coyoacán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '04980', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0674', 'name' => 'Ex-Ejido de Santa Úrsula Coapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0731', 'name' => 'Ex-Hacienda Coapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2792', 'name' => 'Viejo Ejido de Santa Úrsula Coapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '004', 'name' => 'Cuajimalpa de Morelos', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05000', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0732', 'name' => 'Cuajimalpa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05010', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0735', 'name' => 'Zentlapatl', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05020', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0736', 'name' => 'Loma del Padre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05030', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0737', 'name' => 'San Pedro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2867', 'name' => 'La Manzanita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05050', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0740', 'name' => 'San Pablo Chimalpa', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05100', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0746', 'name' => 'Lomas de Vista Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05110', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0748', 'name' => 'Cooperativa Palo Alto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05118', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0751', 'name' => 'Granjas Palo Alto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05119', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0752', 'name' => 'Campestre Palo Alto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05120', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0753', 'name' => 'Bosques de las Lomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05129', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0758', 'name' => 'Lomas del Chamizal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05200', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0766', 'name' => 'San José de los Cedros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05219', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0768', 'name' => 'Granjas Navidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05220', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0769', 'name' => 'Tepetongo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05230', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0770', 'name' => 'El Ébano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05240', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0774', 'name' => 'El Molino', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05260', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0777', 'name' => 'Jesús del Monte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05269', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0780', 'name' => 'Amado Nervo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05270', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0782', 'name' => 'Manzanastitla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05280', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0783', 'name' => 'Adolfo López Mateos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05310', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0785', 'name' => 'El Molinito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05320', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0786', 'name' => 'El Yaqui', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05330', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0787', 'name' => 'Lomas de Memetla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0788', 'name' => 'Memetla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0789', 'name' => 'Ampliación Memetla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2869', 'name' => 'Ampliación el Yaqui', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05348', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0792', 'name' => 'Santa Fe Cuajimalpa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05360', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0794', 'name' => 'Locaxco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05370', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0797', 'name' => 'Las Tinajas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05379', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0799', 'name' => 'Lomas de San Pedro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05400', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0800', 'name' => 'El Tianguillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05410', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0801', 'name' => 'San Lorenzo Acopilco', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '2866', 'name' => '1° de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05500', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0803', 'name' => 'Contadero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05520', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0808', 'name' => 'La Venta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05530', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0809', 'name' => 'Abdías García Soto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05600', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0810', 'name' => 'San Mateo Tlaltenango', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05610', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2868', 'name' => 'Santa Rosa Xochiac', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05700', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0819', 'name' => 'Cruz Blanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05710', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0820', 'name' => 'Las Maromas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05730', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0825', 'name' => 'Xalpa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05750', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0827', 'name' => 'La Pila', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05760', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0829', 'name' => 'Las Lajas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '05780', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0833', 'name' => 'Agua Bendita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '015', 'name' => 'Cuauhtémoc', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06000', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0838', 'name' => 'Centro (Área 1)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06010', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0847', 'name' => 'Centro (Área 2)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06020', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0850', 'name' => 'Centro (Área 3)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06030', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0853', 'name' => 'Tabacalera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06040', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0860', 'name' => 'Centro (Área 4)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06050', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0863', 'name' => 'Centro (Área 5)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06060', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0867', 'name' => 'Centro (Área 6)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06070', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0873', 'name' => 'Centro (Área 7)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06080', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0875', 'name' => 'Centro (Área 8)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06090', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0879', 'name' => 'Centro (Área 9)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06100', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0882', 'name' => 'Hipódromo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06140', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0884', 'name' => 'Condesa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06170', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0886', 'name' => 'Hipódromo Condesa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06200', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0891', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06220', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0894', 'name' => 'Peralvillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06240', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0895', 'name' => 'Valle Gómez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06250', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0896', 'name' => 'Ex-Hipódromo de Peralvillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06270', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0898', 'name' => 'Maza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06280', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0899', 'name' => 'Felipe Pescador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06300', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0900', 'name' => 'Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06350', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0906', 'name' => 'Buenavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06400', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0911', 'name' => 'Santa María la Ribera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06430', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0913', 'name' => 'Santa María Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06450', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0914', 'name' => 'Atlampa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06470', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0915', 'name' => 'San Rafael', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06500', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0919', 'name' => 'Cuauhtémoc', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06600', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0930', 'name' => 'Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06700', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0947', 'name' => 'Roma Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06720', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0955', 'name' => 'Doctores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06760', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0966', 'name' => 'Roma Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06780', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0970', 'name' => 'Buenos Aires', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06800', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0974', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06820', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0978', 'name' => 'Tránsito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06840', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0980', 'name' => 'Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06850', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0981', 'name' => 'Asturias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06860', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0982', 'name' => 'Vista Alegre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06870', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0983', 'name' => 'Paulino Navarro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06880', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0984', 'name' => 'Algarin', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06890', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0986', 'name' => 'Ampliación Asturias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06900', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0988', 'name' => 'Nonoalco Tlatelolco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '06920', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0989', 'name' => 'San Simón Tolnáhuac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '005', 'name' => 'Gustavo A. Madero', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07000', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0991', 'name' => 'Aragón la Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07010', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0994', 'name' => 'Rosas del Tepeyac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0995', 'name' => 'Santa Isabel Tola', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0996', 'name' => 'Tepetates', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07020', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0997', 'name' => 'Tepeyac Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07040', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0998', 'name' => 'Santiago Atzacoalco', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07050', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1001', 'name' => 'Villa Gustavo A. Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07058', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1003', 'name' => '15 de Agosto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07060', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1005', 'name' => 'Estanzuela', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07069', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1006', 'name' => 'Triunfo de La República', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07070', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1007', 'name' => 'La Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1008', 'name' => 'Dinamita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1010', 'name' => 'Martín Carrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07080', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1011', 'name' => 'Gabriel Hernández', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07089', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1012', 'name' => 'Ampliación Gabriel Hernández', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07090', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1013', 'name' => 'C.T.M. Atzacoalco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1014', 'name' => 'C.T.M. El Risco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07100', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1016', 'name' => 'Cuautepec Barrio Alto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1017', 'name' => 'San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07109', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1019', 'name' => 'San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07110', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1021', 'name' => 'Lomas de Cuautepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07119', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1022', 'name' => 'Malacates', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1227', 'name' => 'Ampliación Malacates', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07130', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1023', 'name' => 'Compositores Mexicanos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1024', 'name' => 'El Tepetatal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07140', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1026', 'name' => 'Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1027', 'name' => 'Ampliación Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1028', 'name' => 'Forestal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1029', 'name' => 'Forestal I', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07144', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2885', 'name' => 'Forestal II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2887', 'name' => 'La Lengüeta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07149', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1031', 'name' => 'Parque Metropolitano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07150', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1032', 'name' => 'Juventino Rosas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1033', 'name' => 'La Casilda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07160', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1034', 'name' => 'Loma La Palma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07164', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2548', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2549', 'name' => 'Tlacaélel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2717', 'name' => 'Graciano Sánchez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2718', 'name' => 'Prados de Cuautepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07170', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1035', 'name' => 'Palmatitla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07180', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1036', 'name' => 'Cocoyotes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1037', 'name' => 'General Felipe Berriozabal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2687', 'name' => 'Ampliación Cocoyotes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07183', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2688', 'name' => '6 de Junio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07187', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1038', 'name' => 'Vista Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07188', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1039', 'name' => 'Tlalpexco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07189', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1040', 'name' => 'Ahuehuetes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07190', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1041', 'name' => 'Valle de Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07199', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1042', 'name' => 'Del Carmen', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07200', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1043', 'name' => 'Cuautepec de Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07207', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1046', 'name' => 'Del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07209', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1048', 'name' => 'Guadalupe Victoria Cuautepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07210', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1049', 'name' => 'Chalma de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07214', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2884', 'name' => 'Ampliación Chalma de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07220', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1051', 'name' => 'Castillo Chico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1052', 'name' => 'Castillo Grande', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07224', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2883', 'name' => 'Ampliación Castillo Grande', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07230', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1053', 'name' => 'Zona Escolar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07239', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1054', 'name' => 'Zona Escolar Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07240', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1056', 'name' => 'El Arbolillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07250', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1061', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07259', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1063', 'name' => 'Ampliación Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07268', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1065', 'name' => 'Solidaridad Nacional', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07270', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1067', 'name' => 'Residencial Acueducto de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07279', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1069', 'name' => 'Acueducto de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07280', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1070', 'name' => 'Jorge Negrete', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07290', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1071', 'name' => 'La Pastora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07300', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1072', 'name' => 'Lindavista Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2888', 'name' => 'Lindavista Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07310', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1075', 'name' => 'Candelaria Ticomán', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07320', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1079', 'name' => 'La Purísima Ticomán', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1080', 'name' => 'Residencial la Escalera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07330', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1085', 'name' => 'Santa María Ticomán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07340', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1087', 'name' => 'La Laguna Ticomán', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1088', 'name' => 'San José Ticomán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07350', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1091', 'name' => 'Guadalupe Ticomán', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1092', 'name' => 'San Juan y Guadalupe Ticomán', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07359', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1093', 'name' => 'San Rafael Ticomán', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07360', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1095', 'name' => 'San Pedro Zacatenco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07369', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1097', 'name' => 'Residencial Zacatenco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07370', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1098', 'name' => 'Capultitlan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07380', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1099', 'name' => 'Maximino Ávila Camacho', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1100', 'name' => 'Tlacamaca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07400', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1101', 'name' => 'Salvador Díaz Mirón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07410', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1102', 'name' => 'Juan González Romero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1103', 'name' => 'Villa Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07420', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1105', 'name' => 'El Coyol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1106', 'name' => 'Nueva Atzacoalco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07430', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1108', 'name' => 'Del Obrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07440', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1109', 'name' => 'Vasco de Quiroga', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07450', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1110', 'name' => 'DM Nacional', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07455', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1111', 'name' => 'Ferrocarrilera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07456', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1112', 'name' => 'LI Legislatura', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07460', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1117', 'name' => 'Granjas Modernas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07469', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1118', 'name' => 'Constitución de la República', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07470', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1119', 'name' => 'Ampliación San Juan de Aragón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07480', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1120', 'name' => 'San Pedro El Chico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07500', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1122', 'name' => 'La Pradera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07509', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1125', 'name' => 'Pradera II Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07510', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1126', 'name' => 'San Felipe de Jesús', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07520', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1128', 'name' => '25 de Julio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07530', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1129', 'name' => 'Campestre Aragón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07540', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1131', 'name' => 'La Esmeralda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07550', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1135', 'name' => 'Providencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07560', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1136', 'name' => 'Ampliación Providencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07570', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1137', 'name' => 'Villa de Aragón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07580', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1138', 'name' => 'Ampliación Casas Alemán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07600', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1139', 'name' => 'Progreso Nacional', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07620', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1141', 'name' => 'Santa Rosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07630', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1142', 'name' => 'San José de la Escalera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07640', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1143', 'name' => 'Santiago Atepetlac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07650', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1144', 'name' => 'Ampliación Progreso Nacional', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07670', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1146', 'name' => 'Guadalupe Proletaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07680', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1147', 'name' => 'Ampliación Guadalupe Proletaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07700', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1148', 'name' => 'Nueva Industrial Vallejo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07707', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1149', 'name' => 'Siete Maravillas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07708', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1150', 'name' => 'Torres Lindavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07720', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1153', 'name' => 'Lindavista Vallejo I Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07730', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1155', 'name' => 'Churubusco Tepeyac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1156', 'name' => 'Montevideo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1157', 'name' => 'San Bartolo Atepehuacan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07739', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1159', 'name' => 'Planetario Lindavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07740', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1160', 'name' => 'Valle del Tepeyac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07750', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1161', 'name' => 'Nueva Vallejo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07754', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2890', 'name' => 'Lindavista Vallejo III Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07755', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2889', 'name' => 'Lindavista Vallejo II Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07760', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1162', 'name' => 'Magdalena de las Salinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07770', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1163', 'name' => 'Panamericana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1164', 'name' => 'Ampliación Panamericana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07780', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1166', 'name' => 'Defensores de La República', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1167', 'name' => 'Héroe de Nacozari', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07790', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1168', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1169', 'name' => 'Vallejo Poniente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07800', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1170', 'name' => 'Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07810', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1172', 'name' => 'Estrella', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07820', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1174', 'name' => 'Aragón Inguarán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1175', 'name' => 'Tres Estrellas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07830', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1176', 'name' => 'Gertrudis Sánchez 1a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07838', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2886', 'name' => 'Gertrudis Sánchez 3a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07839', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1178', 'name' => 'Gertrudis Sánchez 2a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07840', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1179', 'name' => 'Guadalupe Tepeyac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1180', 'name' => '7 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07850', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1181', 'name' => 'Bondojito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1182', 'name' => 'Faja de Oro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07858', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1183', 'name' => 'Ampliación Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07859', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1184', 'name' => 'Ampliación Mártires de Río Blanco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07860', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1185', 'name' => 'La Joyita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1187', 'name' => 'Tablas de San Agustín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07869', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1188', 'name' => 'Belisario Domínguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07870', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1189', 'name' => 'Guadalupe Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1190', 'name' => 'Vallejo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07880', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1191', 'name' => 'Mártires de Río Blanco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07889', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1192', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07890', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1193', 'name' => 'Cuchilla La Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1194', 'name' => 'La Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1195', 'name' => 'Nueva Tenochtitlán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07899', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1196', 'name' => 'La Malinche', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07900', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1197', 'name' => 'Cuchilla del Tesoro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07910', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1199', 'name' => 'San Juan de Aragón VII Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07918', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1200', 'name' => 'San Juan de Aragón VI Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07919', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1201', 'name' => 'Ex Ejido San Juan de Aragón Sector 32', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07920', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1202', 'name' => 'El Olivo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1203', 'name' => 'San Juan de Aragón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07930', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1204', 'name' => 'Indeco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07939', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1205', 'name' => 'Héroes de Chapultepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07940', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1206', 'name' => 'Ex Ejido San Juan de Aragón Sector 33', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07950', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1207', 'name' => 'San Juan de Aragón', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07960', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1211', 'name' => 'Héroes de Cerro Prieto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1212', 'name' => 'Ex Escuela de Tiro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1213', 'name' => 'Fernando Casas Alemán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07969', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1215', 'name' => 'San Juan de Aragón I Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1216', 'name' => 'San Juan de Aragón II Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07970', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1217', 'name' => 'San Juan de Aragón III Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07979', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1218', 'name' => 'San Juan de Aragón IV Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1219', 'name' => 'San Juan de Aragón V Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07980', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1220', 'name' => 'Narciso Bassols', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '07990', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1222', 'name' => 'C.T.M. Aragón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '006', 'name' => 'Iztacalco', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08000', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1233', 'name' => 'Gabriel Ramos Millán Sección Bramadero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08010', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1237', 'name' => 'Ex-Ejido de La Magdalena Mixiuhca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08020', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1238', 'name' => 'Ampliación Gabriel Ramos Millán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08030', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1241', 'name' => 'Gabriel Ramos Millán Sección Cuchilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08040', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1242', 'name' => 'Carlos Zapata Vela', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08100', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1244', 'name' => 'Agrícola Pantitlán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08200', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1250', 'name' => 'Viaducto Piedad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08210', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1251', 'name' => 'Nueva Santa Anita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08220', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1252', 'name' => 'San Pedro', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08230', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1253', 'name' => 'San Francisco Xicaltongo', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08240', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1254', 'name' => 'Santiago Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08300', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1255', 'name' => 'Santa Anita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08310', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1256', 'name' => 'La Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08320', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1257', 'name' => 'Fraccionamiento Coyuya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08400', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1258', 'name' => 'Granjas México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08420', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1262', 'name' => 'Cuchilla Agrícola Oriental', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08500', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1263', 'name' => 'Agrícola Oriental', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08510', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1265', 'name' => 'El Rodeo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08600', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1269', 'name' => 'La Asunción', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08610', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1270', 'name' => 'Zapotla', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08620', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1272', 'name' => 'Los Reyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08650', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1277', 'name' => 'San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08700', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1278', 'name' => 'Juventino Rosas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08710', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1279', 'name' => 'Tlazintla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08720', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1280', 'name' => 'Gabriel Ramos Millán Sección Tlacotal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08730', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1281', 'name' => 'Gabriel Ramos Millán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08760', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1284', 'name' => 'INPI Picos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2795', 'name' => 'Los Picos de Iztacalco Sección 2A', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2796', 'name' => 'Los Picos de Iztacalco Sección 1B', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08770', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1285', 'name' => 'Los Picos de Iztacalco Sección 1A', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08800', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1286', 'name' => 'Santiago Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08810', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1288', 'name' => 'Reforma Iztaccíhuatl Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08830', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1291', 'name' => 'Militar Marte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08840', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1292', 'name' => 'Reforma Iztaccíhuatl Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08900', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1293', 'name' => 'INFONAVIT Iztacalco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08910', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1294', 'name' => 'Santa Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08920', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1295', 'name' => 'Jardines Tecma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '08930', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1296', 'name' => 'Campamento 2 de Octubre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '007', 'name' => 'Iztapalapa', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09000', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1299', 'name' => 'La Asunción', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1300', 'name' => 'San Ignacio', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1301', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1302', 'name' => 'San Lucas', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1303', 'name' => 'San Pablo', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1304', 'name' => 'San Pedro', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1305', 'name' => 'Santa Bárbara', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09010', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1308', 'name' => 'Real del Moral', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09020', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1310', 'name' => 'Dr. Alfonso Ortiz Tirado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09030', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1314', 'name' => 'Paseos de Churubusco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09040', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1316', 'name' => 'Central de Abasto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09060', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1320', 'name' => 'Escuadrón 201', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1321', 'name' => 'Sector Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09070', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1322', 'name' => 'Granjas de San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09080', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1325', 'name' => 'Cacama', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09089', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1328', 'name' => 'Unidad Modelo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09090', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1329', 'name' => 'Héroes de Churubusco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09099', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1330', 'name' => 'Mexicaltzingo', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09100', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1331', 'name' => 'Juan Escutia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09130', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1334', 'name' => 'San Lorenzo Xicotencatl', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09140', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1335', 'name' => 'Santa Martha Acatitla Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09180', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1339', 'name' => 'Ermita Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09200', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1341', 'name' => 'Unidad Vicente Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09208', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1345', 'name' => 'Chinampac de Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09209', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1352', 'name' => 'Renovación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09210', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1355', 'name' => 'Tepalcates', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09220', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1357', 'name' => 'Unidad Ejército Constitucionalista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09230', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1364', 'name' => 'Álvaro Obregón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1365', 'name' => 'Ejército de Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1368', 'name' => 'El Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1369', 'name' => 'José María Morelos y Pavón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09239', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1370', 'name' => 'Ejército de Oriente Zona Peñón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09240', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1371', 'name' => 'Progresista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09250', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1373', 'name' => 'La Regadera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09260', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1375', 'name' => 'Constitución de 1917', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09270', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1376', 'name' => 'Colonial Iztapalapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09280', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1377', 'name' => 'Jacarandas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09290', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1378', 'name' => 'Santa Cruz Meyehualco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09300', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1380', 'name' => 'Guadalupe del Moral', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09310', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1382', 'name' => 'Leyes de Reforma 1a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1383', 'name' => 'Leyes de Reforma 2a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2839', 'name' => 'Leyes de Reforma 3a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09319', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1384', 'name' => 'Cuchilla del Moral', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09320', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1388', 'name' => 'Sideral', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09350', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1392', 'name' => 'Albarrada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09359', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1393', 'name' => 'Eva Sámano de López Mateos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09360', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1399', 'name' => 'Ampliación San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1398', 'name' => 'San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09400', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1407', 'name' => 'San Juanico Nextipac', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '1408', 'name' => 'El Sifón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09410', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1410', 'name' => 'Aculco', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '1412', 'name' => 'Jardines de Churubusco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1413', 'name' => 'Magdalena Atlazolpa', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '1414', 'name' => 'San José Aculco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09420', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1415', 'name' => 'Los Picos VI-B', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1416', 'name' => 'Nueva Rosita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09429', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1417', 'name' => 'Purísima Atlazolpa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09430', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1418', 'name' => 'Apatlaco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1419', 'name' => 'El Triunfo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09438', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1422', 'name' => 'Ampliación El Triunfo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09440', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1425', 'name' => 'El Retoño', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1426', 'name' => 'San Andrés Tetepilco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2840', 'name' => 'Zacahuitzco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09450', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1429', 'name' => 'Banjidal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09460', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1430', 'name' => 'Justo Sierra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09470', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1431', 'name' => 'Sinatel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09479', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1432', 'name' => 'Ampliación Sinatel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09480', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1433', 'name' => 'El Prado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09500', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1435', 'name' => 'Santa María Aztahuacán', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '2565', 'name' => 'Santa María Aztahuacán Ampliación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09510', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1436', 'name' => 'Santa Martha Acatitla', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09520', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1439', 'name' => 'El Edén', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1440', 'name' => 'San Sebastián Tecoloxtitla', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09530', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1441', 'name' => 'Santa Martha Acatitla Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09550', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1443', 'name' => 'Monte Alban', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09560', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1444', 'name' => 'Paraje Zacatepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09570', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1445', 'name' => 'Santa María Aztahuacán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09578', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1449', 'name' => 'Ejército de Agua Prieta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09600', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1453', 'name' => 'Santiago Acahualtepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09608', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1454', 'name' => 'Santiago Acahualtepec 1ra. Ampliación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09609', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1455', 'name' => 'Santiago Acahualtepec 2a. Ampliación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09620', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1456', 'name' => 'Lomas de Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09630', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1481', 'name' => 'San Miguel Teotongo Sección Corrales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2850', 'name' => 'San Miguel Teotongo Sección Acorralado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2851', 'name' => 'San Miguel Teotongo Sección Avisadero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2852', 'name' => 'San Miguel Teotongo Sección Capilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2853', 'name' => 'San Miguel Teotongo Sección Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2854', 'name' => 'San Miguel Teotongo Sección Iztlahuaca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2855', 'name' => 'San Miguel Teotongo Sección Jardines', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2856', 'name' => 'San Miguel Teotongo Sección La Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2857', 'name' => 'San Miguel Teotongo Sección Loma Alta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2858', 'name' => 'San Miguel Teotongo Sección Mercedes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2859', 'name' => 'San Miguel Teotongo Sección Palmitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2860', 'name' => 'San Miguel Teotongo Sección Puente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2861', 'name' => 'San Miguel Teotongo Sección Ranchito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2862', 'name' => 'San Miguel Teotongo Sección Rancho Bajo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2863', 'name' => 'San Miguel Teotongo Sección Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09637', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1461', 'name' => 'Campestre Potrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09638', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1462', 'name' => 'Ampliación Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09640', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1464', 'name' => 'Lomas de la Estancia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1465', 'name' => 'Xalpa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09648', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1467', 'name' => 'San Pablo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09660', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1470', 'name' => 'Citlalli', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09670', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1471', 'name' => 'Palmitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09680', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1473', 'name' => 'Tenorios', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09689', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1477', 'name' => 'Barranca de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09690', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1478', 'name' => 'Iztlahuacán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09696', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1480', 'name' => 'Miravalles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09698', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1482', 'name' => 'Miguel de La Madrid Hurtado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09700', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1485', 'name' => 'Buenavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1486', 'name' => 'Carlos Hank Gonzalez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1488', 'name' => 'Desarrollo Urbano Quetzalcoatl', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1491', 'name' => 'Santa Cruz Meyehualco', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09704', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1492', 'name' => 'Degollado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09705', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2726', 'name' => 'Degollado - Mexicatlalli', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09706', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1497', 'name' => 'San José Buenavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09708', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1500', 'name' => 'Mixcoatl', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09709', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1501', 'name' => 'Lomas de Santa Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09710', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1502', 'name' => 'Los Ángeles Apanoaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09720', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1505', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1506', 'name' => 'La Era', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09730', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1508', 'name' => 'Reforma Política', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09740', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1511', 'name' => 'Presidentes de México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09750', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1512', 'name' => 'Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1514', 'name' => 'La Polvorilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1515', 'name' => 'Las Peñas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09760', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1518', 'name' => 'Consejo Agrarista Mexicano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09769', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1523', 'name' => 'El Triángulo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09770', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1524', 'name' => 'Puente Blanco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09780', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1527', 'name' => 'Año de Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1528', 'name' => 'Lomas de San Lorenzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09790', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1531', 'name' => 'San Lorenzo Tezonco', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09800', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1532', 'name' => 'Culhuacán', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '1534', 'name' => 'El Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1535', 'name' => 'Estrella Culhuacán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1536', 'name' => 'Fuego Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1538', 'name' => 'San Antonio Culhuacán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1539', 'name' => 'San Antonio Culhuacán', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1540', 'name' => 'San Simón Culhuacán', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1541', 'name' => 'Tula', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1542', 'name' => 'Valle de Luces', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09810', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1547', 'name' => 'Granjas Esmeralda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1548', 'name' => 'Los Cipreses', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1549', 'name' => 'Minerva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1550', 'name' => 'Progreso del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09819', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1551', 'name' => 'Valle del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09820', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1552', 'name' => 'El Santuario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1553', 'name' => 'Estrella del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1556', 'name' => 'Ricardo Flores Magón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1557', 'name' => 'Santa Isabel Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09828', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1559', 'name' => 'Ampliación Ricardo Flores Magón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09829', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1560', 'name' => 'Ampliación El Santuario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09830', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1562', 'name' => 'El Manto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1563', 'name' => 'El Molino', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1565', 'name' => 'Lomas El Manto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1566', 'name' => 'Los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1568', 'name' => 'Paraje San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09837', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1570', 'name' => 'San Miguel 8va. Ampliación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09838', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1571', 'name' => 'Plan de Iguala', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09839', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1573', 'name' => 'Ampliación Paraje San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1576', 'name' => 'San Juan Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09840', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1578', 'name' => 'Los Reyes Culhuacán', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09849', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1580', 'name' => 'Ampliación Los Reyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09850', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1586', 'name' => 'San Juan Xalpa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1588', 'name' => 'San Nicolás Tolentino', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1589', 'name' => 'Santa María del Monte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09856', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1590', 'name' => 'Estado de Veracruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1591', 'name' => 'Ampliación Veracruzana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09858', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1594', 'name' => 'Paraje San Juan Cerro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09859', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1595', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09860', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1596', 'name' => 'Bellavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1597', 'name' => 'Ampliación Bellavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1598', 'name' => 'Casa Blanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1600', 'name' => 'Cerro de La Estrella', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1601', 'name' => 'Parque Nacional Cerro  de la Estrella', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1602', 'name' => 'El Rodeo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09868', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1607', 'name' => 'San Juan Estrella', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09870', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1609', 'name' => '12 de Diciembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1611', 'name' => 'San Andrés Tomatlán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1613', 'name' => 'San Andrés Tomatlán', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '1616', 'name' => 'Santa María Tomatlán', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09880', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1620', 'name' => 'El Vergel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1621', 'name' => 'Granjas Estrella', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09890', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1629', 'name' => 'Lomas Estrella', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09897', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1633', 'name' => 'Carlos Jonguitud Barrios', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09900', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1637', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1638', 'name' => 'San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1639', 'name' => 'San Lorenzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09910', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1640', 'name' => 'La Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09920', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1643', 'name' => 'José López Portillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09930', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1644', 'name' => 'El Rosario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09940', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1645', 'name' => 'Jardines de San Lorenzo Tezonco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09960', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1646', 'name' => 'Celoalliotli', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1647', 'name' => 'USCOVI', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1648', 'name' => 'El Molino Tezonco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1961', 'name' => 'Allapetlalli', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2736', 'name' => 'La Planta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09969', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1651', 'name' => 'Cananea', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '09970', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1652', 'name' => 'Valle de San Lorenzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '008', 'name' => 'La Magdalena Contreras', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10000', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1672', 'name' => 'Lomas Quebradas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10010', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1673', 'name' => 'La Malinche', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1674', 'name' => 'San Bartolo Ameyalco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10020', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1675', 'name' => 'Cuauhtémoc', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10130', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1681', 'name' => 'El Maestro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10200', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1682', 'name' => 'San Jerónimo Lídice', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10300', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1686', 'name' => 'San Bernabé Ocotepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10320', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1690', 'name' => 'El Tanque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10330', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1691', 'name' => 'Las Cruces', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10340', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1692', 'name' => 'Los Padres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10350', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1693', 'name' => 'Lomas de San Bernabé', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10360', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1694', 'name' => 'Huayatla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10368', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1695', 'name' => 'Ampliación Potrerillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10369', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1696', 'name' => 'Ampliación Lomas de San Bernabé', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2669', 'name' => 'Tierra Unida', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10370', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1697', 'name' => 'Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10378', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1698', 'name' => 'Atacaxco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10379', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1700', 'name' => 'Vista Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10380', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1701', 'name' => 'Barros Sierra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10400', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1702', 'name' => 'San Jerónimo Aculco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10500', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1703', 'name' => 'Barrio San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10580', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1707', 'name' => 'Barranca Seca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10600', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1710', 'name' => 'El Rosal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10610', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1713', 'name' => 'El Toro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10620', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1714', 'name' => 'Potrerillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10630', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2706', 'name' => 'El Ocotal', 'zone_type' => 'Urbano', 'settlementtype_id' => '3','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10640', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1716', 'name' => 'La Carbonera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1717', 'name' => 'Pueblo Nuevo Alto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1718', 'name' => 'Pueblo Nuevo Bajo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10660', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1720', 'name' => 'El Ermitaño', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10700', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1721', 'name' => 'Héroes de Padierna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10710', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1723', 'name' => 'Santa Teresa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10800', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1728', 'name' => 'La Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10810', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1730', 'name' => 'San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10820', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1731', 'name' => 'La Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10830', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1732', 'name' => 'La Concepción', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10840', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1733', 'name' => 'Las Calles', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1734', 'name' => 'Plazuela del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10900', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1735', 'name' => 'San Nicolás Totolapan', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10910', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1737', 'name' => 'La Magdalena', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10920', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1738', 'name' => 'Las Huertas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '10926', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1739', 'name' => 'Tierra Colorada', 'zone_type' => 'Urbano', 'settlementtype_id' => '3','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '016', 'name' => 'Miguel Hidalgo', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11000', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1745', 'name' => 'Lomas de Chapultepec I Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2774', 'name' => 'Lomas de Chapultepec VIII Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2775', 'name' => 'Lomas de Chapultepec II Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2776', 'name' => 'Lomas de Chapultepec III Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2777', 'name' => 'Lomas de Chapultepec IV Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2778', 'name' => 'Lomas de Chapultepec V Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2779', 'name' => 'Lomas de Chapultepec VI Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2780', 'name' => 'Lomas de Chapultepec VII Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11040', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1752', 'name' => 'Molino del Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11100', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1754', 'name' => 'Bosque de Chapultepec II Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
                ['key' => '2772', 'name' => 'Bosque de Chapultepec III Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11200', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1757', 'name' => 'Lomas Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1758', 'name' => 'Lomas de Sotelo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11210', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1761', 'name' => 'San Lorenzo Tlaltenango', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11220', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1764', 'name' => 'Periodista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11230', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1765', 'name' => 'Argentina Poniente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11240', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1767', 'name' => 'Ignacio Manuel Altamirano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11250', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1768', 'name' => '10 de Abril', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11260', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1770', 'name' => 'México Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1771', 'name' => 'San Joaquín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11270', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1772', 'name' => 'Argentina Antigua', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11280', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1773', 'name' => 'Torre Blanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11289', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1774', 'name' => 'Ampliación Torre Blanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11290', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1775', 'name' => 'Huíchapan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1776', 'name' => 'San Diego Ocoyoacac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11300', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1777', 'name' => 'Verónica Anzures', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11310', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1780', 'name' => 'Mariano Escobedo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11320', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1782', 'name' => 'Anáhuac I Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2771', 'name' => 'Anáhuac II Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11330', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1784', 'name' => 'Un Hogar Para Nosotros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11340', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1785', 'name' => 'Santo Tomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11350', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1786', 'name' => 'Plutarco Elías Calles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11360', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1787', 'name' => 'Agricultura', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11370', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1789', 'name' => 'Tlaxpana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11400', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1791', 'name' => 'Popotla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11410', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1793', 'name' => 'Legaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1794', 'name' => 'Tacuba', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11420', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1796', 'name' => 'Nextitla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11430', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1797', 'name' => 'Pensil Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1798', 'name' => 'Ventura Pérez de Alva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11440', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1799', 'name' => 'Reforma Pensil', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1800', 'name' => 'San Juanico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11450', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1801', 'name' => 'Ahuehuetes Anáhuac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1802', 'name' => 'Modelo Pensil', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1803', 'name' => 'Peralitos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11460', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1804', 'name' => 'Dos Lagos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1805', 'name' => 'Lago Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1806', 'name' => 'Lago Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1807', 'name' => 'Los Manzanos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11470', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1808', 'name' => '5 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1809', 'name' => 'Deportivo Pensil', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11480', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1811', 'name' => 'Francisco I Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1812', 'name' => 'Popo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11489', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1813', 'name' => 'Ampliación Popo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11490', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1814', 'name' => 'Cuauhtémoc Pensil', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1815', 'name' => 'Pensil Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11500', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1816', 'name' => 'Irrigación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11510', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2781', 'name' => 'Polanco I Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11520', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1822', 'name' => 'Granada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11529', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1823', 'name' => 'Ampliación Granada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11530', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2782', 'name' => 'Polanco II Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11540', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2783', 'name' => 'Polanco III Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11550', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2784', 'name' => 'Polanco IV Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11560', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2785', 'name' => 'Polanco V Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11580', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1833', 'name' => 'Bosque de Chapultepec I Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11590', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1838', 'name' => 'Anzures', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11600', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1843', 'name' => 'Residencial Militar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11610', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1844', 'name' => 'Manuel Avila Camacho', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11619', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1846', 'name' => 'Campo Militar 1', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11650', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1855', 'name' => 'Reforma Social', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11700', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1856', 'name' => 'Bosque de las Lomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11800', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1858', 'name' => 'Escandón I Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2773', 'name' => 'Escandón II Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11810', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1860', 'name' => '16 de Septiembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11820', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1861', 'name' => 'América', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11830', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1862', 'name' => 'Daniel Garza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11840', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1863', 'name' => 'Ampliación Daniel Garza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11850', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1864', 'name' => 'San Miguel Chapultepec I Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2786', 'name' => 'San Miguel Chapultepec II Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11860', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1865', 'name' => 'Observatorio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11870', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1867', 'name' => 'Tacubaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11910', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1869', 'name' => 'Lomas de Bezares', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11920', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1870', 'name' => 'Real de las Lomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11930', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2789', 'name' => 'Lomas de Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '11950', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1874', 'name' => 'Lomas Altas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '009', 'name' => 'Milpa Alta', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '12000', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1877', 'name' => 'La Concepción', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1878', 'name' => 'La Luz', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1879', 'name' => 'Los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1881', 'name' => 'San Mateo', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1882', 'name' => 'Santa Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1883', 'name' => 'Santa Martha', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1884', 'name' => 'Villa Milpa Alta Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '12070', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1889', 'name' => 'San Agustin', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '12080', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1890', 'name' => 'San Agustin Ohtenco', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '12100', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1891', 'name' => 'Cruztitla', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1893', 'name' => 'Tecaxtitla', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1894', 'name' => 'Tenantitla', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1895', 'name' => 'Xaltipac', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1896', 'name' => 'Xochitepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '12110', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2010', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2011', 'name' => 'La Conchita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '12200', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1897', 'name' => 'Nochtla', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1898', 'name' => 'Ocotitla', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1899', 'name' => 'Panchimalco', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1901', 'name' => 'Tula', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '12250', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1903', 'name' => 'San Bartolomé Xicomulco', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '12300', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1904', 'name' => 'San Salvador Cuauhtenco', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '12400', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1905', 'name' => 'Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1906', 'name' => 'San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1907', 'name' => 'San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '12410', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2870', 'name' => 'Chalmita', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '12500', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1910', 'name' => 'San Lorenzo Tlacoyucan', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '12600', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1911', 'name' => 'San Jerónimo Miacatlán', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '12700', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1912', 'name' => 'San Francisco Tecoxpa', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '12800', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1913', 'name' => 'San Juan Tepenahuac', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '12910', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2871', 'name' => 'La Lupita Teticpac', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '12920', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1880', 'name' => 'San Marcos', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '12930', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2873', 'name' => 'San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '12940', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2874', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '12950', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2872', 'name' => 'La Lupita Xolco', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '011', 'name' => 'Tláhuac', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13000', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1919', 'name' => 'La Asunción', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13010', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1923', 'name' => 'Santa Cecilia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13020', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1924', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13030', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1925', 'name' => 'San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13040', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1926', 'name' => 'San Mateo', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13050', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1928', 'name' => 'La Habana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13060', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1929', 'name' => 'La Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1930', 'name' => 'Santa Ana', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13070', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1931', 'name' => 'La Magdalena', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1932', 'name' => 'San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13080', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1933', 'name' => 'Los Reyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13090', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1934', 'name' => 'Quiahuatla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13093', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2497', 'name' => 'San Sebastián', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13094', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2898', 'name' => 'San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13099', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1935', 'name' => 'San Andrés', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13100', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1937', 'name' => 'La Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13120', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1942', 'name' => 'Ampliación Santa Catarina', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1943', 'name' => 'Santiago', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13150', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1945', 'name' => 'La Concepción', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13180', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1946', 'name' => 'San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13200', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1947', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13210', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1949', 'name' => 'Los Olivos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13219', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1950', 'name' => 'Las Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1951', 'name' => 'Ampliación Los Olivos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13220', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1952', 'name' => 'La Nopalera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13230', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1955', 'name' => 'Granjas Cabrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13250', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1957', 'name' => 'La Turba', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13270', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1958', 'name' => 'Del Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13273', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2580', 'name' => 'La Draga', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13278', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1959', 'name' => 'Villa Centroamericana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13280', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1962', 'name' => 'Agrícola Metropolitana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13300', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1963', 'name' => 'Santa Ana Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1964', 'name' => 'Santiago Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2891', 'name' => 'Santa Ana Poniente', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2893', 'name' => 'Santa Ana Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2894', 'name' => 'Santiago Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13310', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1966', 'name' => 'Zapotitla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13315', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2897', 'name' => 'Ampliación Zapotitla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13319', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1970', 'name' => 'La Estación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13360', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1971', 'name' => 'La Conchita Zapotitlán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2895', 'name' => 'Santa Ana Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2896', 'name' => 'Santiago Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13400', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1972', 'name' => 'San Francisco Tlaltenco', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13410', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1973', 'name' => 'López Portillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13419', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1975', 'name' => 'Ampliación José López Portillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13420', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1976', 'name' => 'Selene', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13430', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1978', 'name' => 'Ampliación Selene', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13440', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1980', 'name' => 'Zacatenco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13450', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1981', 'name' => 'Guadalupe Tlaltenco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1982', 'name' => 'Ojo de Agua', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13460', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1983', 'name' => 'El Triángulo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13508', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1985', 'name' => 'San Agustín', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2593', 'name' => 'La Soledad', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13509', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1986', 'name' => 'La Concepción', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13510', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1987', 'name' => 'La Lupita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13520', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1988', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13530', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1990', 'name' => 'Jaime Torres Bodet', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1991', 'name' => 'La Asunción', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13540', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1992', 'name' => 'El Rosario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1994', 'name' => 'Tierra Blanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13545', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2587', 'name' => 'Ampliación La Conchita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13549', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1995', 'name' => 'Peña Alta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13550', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1997', 'name' => 'Jardines del Llano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1998', 'name' => 'Potrero del Llano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13600', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2002', 'name' => 'San Bartolomé', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13610', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2004', 'name' => 'Los Reyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13625', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2005', 'name' => 'Santa Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13630', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2007', 'name' => 'San Agustín', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13640', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2008', 'name' => 'San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '13700', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2009', 'name' => 'San Nicolás Tetelco', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '2892', 'name' => 'Tepantitlamilco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '012', 'name' => 'Tlalpan', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14000', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2027', 'name' => 'Tlalpan Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2876', 'name' => 'Tlalpan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14010', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2029', 'name' => 'Parque del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14020', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2035', 'name' => 'Villa Olímpica', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14030', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2036', 'name' => 'Isidro Fabela', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14039', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2041', 'name' => 'Ampliación Isidro Fabela', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14040', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2042', 'name' => 'Cantera Puente de Piedra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2043', 'name' => 'Pueblo Quieto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14049', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2044', 'name' => 'Comuneros de Santa Úrsula', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14050', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2045', 'name' => 'Toriello Guerra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14060', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2046', 'name' => 'Peña Pobre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14070', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2048', 'name' => 'Rómulo Sánchez Mireles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2049', 'name' => 'San Fernando', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2050', 'name' => 'San Pedro Apóstol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14080', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2051', 'name' => 'Belisario Domínguez Sección XVI', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2052', 'name' => 'Del Niño Jesús', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14090', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2054', 'name' => 'La Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14100', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2060', 'name' => 'Pedregal de San Nicolás 1A Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2061', 'name' => 'Pedregal de San Nicolás 2A Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2062', 'name' => 'Pedregal de San Nicolás 3A Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2063', 'name' => 'Pedregal de San Nicolás 4A Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2064', 'name' => 'Pedregal de San Nicolás 5ª Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14108', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2067', 'name' => 'Chichicaspatl', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14110', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2881', 'name' => 'Ampliación Fuentes del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14120', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2071', 'name' => 'Rincón del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14140', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2074', 'name' => 'Fuentes del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14150', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2078', 'name' => 'Lomas del Pedregal Framboyanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14160', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2079', 'name' => 'Popular Santa Teresa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14200', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2080', 'name' => 'Héroes de Padierna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2081', 'name' => 'Jardines del Ajusco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14208', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2083', 'name' => 'Colinas del Ajusco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14209', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2084', 'name' => 'Torres de Padierna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14210', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2085', 'name' => 'Jardines en la Montaña', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14219', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2087', 'name' => 'Six Flags (Reino Aventura)', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
                ['key' => '2187', 'name' => 'Parque Nacional Bosque del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14220', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2088', 'name' => 'Cuchilla de Padierna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2090', 'name' => 'Lomas del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14230', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2091', 'name' => 'Cultura Maya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14239', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2093', 'name' => 'Los Encinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14240', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2094', 'name' => 'Lomas de Padierna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2095', 'name' => 'Lomas Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14248', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2096', 'name' => 'Cruz del Farol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14250', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2098', 'name' => 'Miguel Hidalgo 2A Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2099', 'name' => 'Miguel Hidalgo 3A Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2100', 'name' => 'Miguel Hidalgo 4A Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2101', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14260', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2102', 'name' => 'El Capulín', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2103', 'name' => 'Miguel Hidalgo 1A Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14266', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2106', 'name' => 'Zacayucan Peña Pobre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14267', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2107', 'name' => 'De Caramagüey', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14268', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2108', 'name' => 'La Lonja', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14269', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2109', 'name' => 'La Fama', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14270', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2110', 'name' => 'Primavera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14275', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2111', 'name' => 'Paraje 38', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14300', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2113', 'name' => 'Nueva Oriental Coapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2114', 'name' => 'Residencial Acoxpa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2115', 'name' => 'Residencial Miramontes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14308', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2879', 'name' => 'Ex Hacienda Coapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14310', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2120', 'name' => 'Belisario Domínguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2121', 'name' => 'Floresta Coyoacán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14320', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2123', 'name' => 'Vergel Coapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14325', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2125', 'name' => 'Rinconada Coapa 2A Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14326', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2126', 'name' => 'Tenorios', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14330', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2132', 'name' => 'Granjas Coapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2134', 'name' => 'Rinconada Coapa 1A Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14340', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2145', 'name' => 'Vergel de Coyoacán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2146', 'name' => 'Vergel del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14350', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2147', 'name' => 'Prado Coapa 1A Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14357', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2149', 'name' => 'Prado Coapa 2A Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2150', 'name' => 'Prado Coapa 3A Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14360', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2153', 'name' => 'Magisterial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2877', 'name' => 'Magisterial Coapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14370', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2155', 'name' => 'Residencial Chimali', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2157', 'name' => 'San Lorenzo Huipulco', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '2158', 'name' => 'Villa Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14376', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2159', 'name' => 'Arboledas del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14377', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2161', 'name' => 'Hacienda San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14380', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2163', 'name' => 'A.M.S.A', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2167', 'name' => 'San Bartolo El Chico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14386', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2168', 'name' => 'Rancho los Colorines', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14387', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2169', 'name' => 'Ex Hacienda San Juan de Dios', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14388', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2170', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14389', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2172', 'name' => 'Arenal de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14390', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2174', 'name' => 'Rinconada Las Hadas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2175', 'name' => 'Narciso Mendoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2176', 'name' => 'Residencial Villa Coapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2878', 'name' => 'Villa Coapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14400', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2179', 'name' => 'San Andrés Totoltepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14406', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2182', 'name' => 'Divisadero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14408', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2183', 'name' => 'Nuevo Renacimiento de Axalco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14409', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2184', 'name' => 'Tecorral', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14410', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2186', 'name' => 'Fuentes Brotantes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14420', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2188', 'name' => 'Cumbres de Tepetongo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2190', 'name' => 'Mesa de los Hornos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2192', 'name' => 'Santa Úrsula Xitla', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14426', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2194', 'name' => 'Texcaltenco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2195', 'name' => 'Tlaxcaltenco la Mesa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14427', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2196', 'name' => 'San Juan Tepeximilpa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2197', 'name' => 'Tepeximilpa la Paz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14429', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2200', 'name' => 'Santísima Trinidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14430', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2201', 'name' => 'El Truenito', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2203', 'name' => 'Tlalcoligia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14438', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2205', 'name' => 'Pedregal de Santa Úrsula Xitla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14439', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2206', 'name' => 'Pedregal de las Águilas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14440', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2207', 'name' => 'Los Volcanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14449', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2208', 'name' => 'El Mirador 1A Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2209', 'name' => 'El Mirador 2A Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2210', 'name' => 'El Mirador 3A Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14460', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2213', 'name' => 'Tlalpuente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14470', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2214', 'name' => 'Plan de Ayala', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14476', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2216', 'name' => 'La Palma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14479', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2219', 'name' => 'Viveros Coatectlán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14480', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2220', 'name' => 'La Magdalena Petlacalco', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14490', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2221', 'name' => 'San Miguel Xicalco', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14500', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2222', 'name' => 'San Miguel Topilejo', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14600', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2229', 'name' => 'Valle Escondido', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14608', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2231', 'name' => 'Colinas del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14609', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2232', 'name' => 'Las Tórtolas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14610', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2233', 'name' => 'Arenal Tepepan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14620', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2741', 'name' => 'Club de Golf México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14629', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2236', 'name' => 'San Buenaventura', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14630', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2237', 'name' => 'Chimalcoyoc', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '2238', 'name' => 'Villa Tlalpan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14640', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2240', 'name' => 'Ejidos de San Pedro Mártir', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14643', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2241', 'name' => 'Fuentes de Tepepan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14646', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2245', 'name' => 'Valle de Tepepan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14647', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2246', 'name' => 'Juventud Unida', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2247', 'name' => 'Movimiento Organizado de Tlalpan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2880', 'name' => 'Rinconada El Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14650', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2252', 'name' => 'San Pedro Mártir', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14653', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2882', 'name' => 'Heróico Colegio Militar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14657', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2258', 'name' => 'Tlalmille', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14658', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2259', 'name' => 'Mirador del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14659', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2260', 'name' => 'María Esther Zuno de Echeverría', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14700', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2261', 'name' => 'San Miguel Ajusco', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14710', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2262', 'name' => 'Santo Tomas Ajusco', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14720', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2263', 'name' => 'Belvedere Ajusco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14730', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2265', 'name' => 'Lomas de Cuilotepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14735', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2695', 'name' => 'Lomas de Tepemecatl', 'zone_type' => 'Rural', 'settlementtype_id' => '3','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14737', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2268', 'name' => 'Vistas del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14738', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2269', 'name' => 'Bosques del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14739', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2270', 'name' => '2 de Octubre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14740', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2272', 'name' => 'Lomas de Padierna Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14748', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2273', 'name' => 'Mirador I', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2274', 'name' => 'Mirador II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14749', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2275', 'name' => 'Chimilli', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14760', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2278', 'name' => 'Héroes de 1910', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '14900', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2286', 'name' => 'Parres El Guarda', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '017', 'name' => 'Venustiano Carranza', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15000', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2287', 'name' => 'General Ignacio Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15010', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2289', 'name' => 'Valentín Gómez Farias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15020', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2290', 'name' => 'Puebla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15100', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2291', 'name' => 'Zona Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15200', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2293', 'name' => 'Janitzio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15210', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2294', 'name' => 'Valle Gómez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15220', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2295', 'name' => 'Nicolás Bravo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2296', 'name' => 'Popular Rastro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15230', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2297', 'name' => 'Emilio Carranza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15240', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2298', 'name' => 'Michoacana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15250', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2299', 'name' => 'Ampliación Michoacana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15260', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2300', 'name' => 'Ampliación 20 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15270', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2301', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15280', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2302', 'name' => 'Penitenciaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15290', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2303', 'name' => '10 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15300', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2305', 'name' => '20 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15309', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2307', 'name' => '5o Tramo 20 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15310', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2308', 'name' => 'Felipe Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15320', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2309', 'name' => 'Azteca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15330', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2310', 'name' => 'Tres Mosqueteros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15339', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2311', 'name' => 'Ampliación Venustiano Carranza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15340', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2312', 'name' => 'Venustiano Carranza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15350', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2313', 'name' => 'Ampliación Penitenciaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15370', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2315', 'name' => 'Progresista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15380', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2316', 'name' => 'Escuela de Tiro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15390', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2319', 'name' => '7 de Julio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15400', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2320', 'name' => 'Romero Rubio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15410', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2321', 'name' => 'Simón Bolívar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15420', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2322', 'name' => 'Ampliación Simón Bolívar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15430', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2323', 'name' => 'Aquiles Serdán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15440', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2324', 'name' => '1° de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15450', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2325', 'name' => 'Damián Carmona', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15460', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2326', 'name' => 'Revolución', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15470', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2327', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15500', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2328', 'name' => 'Moctezuma 1a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15510', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2330', 'name' => 'Pensador Mexicano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15520', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2331', 'name' => 'Peñón de los Baños', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15530', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2332', 'name' => 'Moctezuma 2a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15540', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2333', 'name' => 'Santa Cruz Aviación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15600', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2334', 'name' => 'Arenal 1a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15610', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2335', 'name' => 'Cuchilla Pantitlán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15620', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2336', 'name' => 'México (Lic. Benito Juárez)', 'zone_type' => 'Urbano', 'settlementtype_id' => '1','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15630', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2340', 'name' => 'Caracol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15640', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2342', 'name' => 'Arenal 4a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2351', 'name' => 'Arenal Puerto Aéreo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15650', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2343', 'name' => 'Ampliación Caracol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15660', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2344', 'name' => 'Arenal 3a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15670', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2346', 'name' => 'Adolfo López Mateos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15680', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2347', 'name' => 'Arenal 2a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15700', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2349', 'name' => 'Federal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15710', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2350', 'name' => 'Industrial Puerto Aéreo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15730', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2353', 'name' => '4 Árboles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15740', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2354', 'name' => 'Aviación Civil', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15750', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2355', 'name' => 'Ampliación Aviación Civil', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15800', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2356', 'name' => 'Jamaica', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15810', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2358', 'name' => 'Merced Balbuena', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15820', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2359', 'name' => 'Lorenzo Boturini', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15830', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2360', 'name' => 'Artes Gráficas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15840', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2361', 'name' => 'Sevilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15850', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2362', 'name' => 'Magdalena Mixiuhca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15860', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2363', 'name' => 'La Magdalena Mixiuhca', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15870', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2364', 'name' => 'Aarón Sáenz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15900', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2365', 'name' => 'Jardín Balbuena', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15960', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2372', 'name' => 'Del Parque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15970', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2376', 'name' => 'Aeronáutica Militar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15980', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2377', 'name' => '24 de Abril', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '15990', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2378', 'name' => 'Álvaro Obregón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '013', 'name' => 'Xochimilco', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16000', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2379', 'name' => 'La Concepción Tlacoapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2380', 'name' => 'San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2381', 'name' => 'San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16010', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2385', 'name' => 'Bosque Residencial del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2386', 'name' => 'Las Peritas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2388', 'name' => 'Paseos del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2832', 'name' => 'San Bartolo El Chico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16020', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2395', 'name' => 'San Juan Tepepan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2396', 'name' => 'Santa María Tepepan', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16029', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2399', 'name' => 'Ampliación Tepepan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16030', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2401', 'name' => 'Huichapan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2402', 'name' => 'La Noria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2403', 'name' => 'Potrero de San Bernardino', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2919', 'name' => 'Ampliación La Noria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16034', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2405', 'name' => '18', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16035', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2407', 'name' => 'San Lorenzo La Cebada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2833', 'name' => 'Rinconada Coapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16036', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2408', 'name' => 'Mercado de Flores Plantas y Hortalizas', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16038', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2409', 'name' => 'Ampliación San Marcos Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16040', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2411', 'name' => 'La Asunción', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2412', 'name' => 'San Lorenzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16050', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2413', 'name' => 'Jardines del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2414', 'name' => 'San Marcos', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2415', 'name' => 'Tierra Nueva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16059', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2420', 'name' => 'Pblo. Stgo.Tepalcatlalpan, U. H. Rinconada del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16060', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2421', 'name' => 'El Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16070', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2423', 'name' => 'Belén', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2424', 'name' => 'El Rosario', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2425', 'name' => 'La Guadalupita', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2426', 'name' => 'Santa Crucita', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16080', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2427', 'name' => 'La Santísima', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2428', 'name' => 'San Cristóbal', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2429', 'name' => 'San Diego', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2430', 'name' => 'San Esteban', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16090', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2432', 'name' => 'San Pedro', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2433', 'name' => 'Tablas de San Lorenzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2434', 'name' => 'Xaltocan', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16100', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2439', 'name' => 'Santa Cruz Xochitepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16200', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2443', 'name' => 'Santiago Tepalcatlalpan', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16210', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2444', 'name' => 'La Concha', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16300', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2458', 'name' => 'San Lucas Xochimanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16310', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2459', 'name' => 'La Cañada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16320', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2460', 'name' => 'San Lucas Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16340', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2462', 'name' => 'Texmic', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16400', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2464', 'name' => 'San Lorenzo Atemoaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16410', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2465', 'name' => 'Lomas de Tonalco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16420', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2466', 'name' => 'San Jerónimo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16428', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2467', 'name' => 'El Jazmín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16429', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2468', 'name' => 'Rancho Tejomulco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16430', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2470', 'name' => 'Xochipilli', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16440', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2471', 'name' => 'Año de Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16443', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2899', 'name' => 'Pocitos', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16450', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2472', 'name' => 'Santa María Nativitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16457', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2480', 'name' => 'Lomas de Nativitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16459', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2473', 'name' => 'Ampliación Nativitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16500', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2475', 'name' => 'Santa Cruz Acalpixca', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16513', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2900', 'name' => 'Apatlaco', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2901', 'name' => 'Del Puente', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16514', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2902', 'name' => 'La Gallera', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2903', 'name' => 'Tetitla', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2904', 'name' => 'Calpulco', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16520', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2478', 'name' => 'La Planta', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16530', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2479', 'name' => 'Las Cruces', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2834', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16533', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2905', 'name' => 'Ahualapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16550', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2481', 'name' => 'Valle de Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16600', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2482', 'name' => 'San Gregorio Atlapulco', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16604', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2906', 'name' => 'San Andrés', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16605', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2907', 'name' => 'Los Reyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16606', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2908', 'name' => '3 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16607', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2909', 'name' => 'San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16609', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2483', 'name' => 'La Candelaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16610', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2484', 'name' => 'San Luis Tlaxialtemalco', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16614', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2910', 'name' => 'Niños Héroes', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16615', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2911', 'name' => 'La Asunción', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16616', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2913', 'name' => 'Santa Cecilia', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16617', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2912', 'name' => 'San Sebastián', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16620', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2485', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16629', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2487', 'name' => 'La Guadalupana', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '2489', 'name' => 'San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16630', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2490', 'name' => 'San Juan Moyotepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16640', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2491', 'name' => 'San Juan Minas', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16710', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2494', 'name' => 'Quirino Mendoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16720', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2495', 'name' => 'Del Carmen', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16739', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2498', 'name' => 'San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16740', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2499', 'name' => 'Guadalupita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16749', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2500', 'name' => 'Las Animas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16750', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2501', 'name' => 'Calyequita', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16770', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2502', 'name' => 'San Felipe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16776', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2503', 'name' => 'Santiaguito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2600', 'name' => 'El Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16780', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2504', 'name' => 'Cerrillos Primera Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2602', 'name' => 'El Sacrificio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2604', 'name' => 'Cristo Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2835', 'name' => 'Cerrillos Segunda Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2836', 'name' => 'Cerrillos Tercera Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16797', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2508', 'name' => 'Nativitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16799', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2509', 'name' => 'Las Mesitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16800', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2510', 'name' => 'San Mateo Xalpa', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16810', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2515', 'name' => 'San Andrés Ahuayucan', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '2516', 'name' => 'Santa Inés', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '2607', 'name' => 'Rosario Tlali', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16813', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2914', 'name' => 'El Calvario', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16840', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2519', 'name' => 'Santa Cruz Chavarrieta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16850', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2520', 'name' => 'Chapultepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16860', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2521', 'name' => 'Santa Cruz de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16880', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2527', 'name' => 'Santa Cecilia Tepetlapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '16900', 'locality' => 'Ciudad de México', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '2530', 'name' => 'San Francisco Tlalnepantla', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        
        
        
    }
}
