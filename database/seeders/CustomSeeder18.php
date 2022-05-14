<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomSeeder18 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idFed = DB::table('federal_entities')->insertGetId(['key' => '18', 'name' => 'Nayarit', 'code' => '']);

        $idMun = DB::table('municipalities')->insertGetId(['key' => '017', 'name' => 'Tepic', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63000', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0001', 'name' => 'Tepic Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0150', 'name' => 'Esteban Baca Calderón', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63010', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0005', 'name' => 'Amado Nervo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0006', 'name' => 'Amado Nervo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0007', 'name' => 'Paseo de La Constitución', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0008', 'name' => 'Sacristán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63018', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0009', 'name' => 'El Punto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63019', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0010', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1061', 'name' => 'Loma Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63020', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0011', 'name' => 'Santa Teresita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0012', 'name' => 'Unidad Deportiva Santa Teresita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63021', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0013', 'name' => 'Adolfo López Mateos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63022', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0014', 'name' => 'INDECO', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63023', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0015', 'name' => 'Ojo de Agua', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0179', 'name' => 'Senderos del Monte', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1093', 'name' => 'Buenos Aires', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63030', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0016', 'name' => 'Cuitlahuac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0017', 'name' => 'Chapultepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0018', 'name' => 'Lomas de La Cruz Sutse', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0019', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63035', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0021', 'name' => 'Jardines del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0078', 'name' => 'Villas del Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0205', 'name' => 'Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1045', 'name' => 'Tulipanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1064', 'name' => 'Valle Verde de Matatipac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1066', 'name' => 'Valle de La Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1067', 'name' => 'Valle de Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1068', 'name' => 'Ampliación El Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1070', 'name' => 'Nuevo Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1112', 'name' => 'Islas del Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63037', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0025', 'name' => 'Lomas de La Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0026', 'name' => 'Los Viveros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0027', 'name' => 'Sindicalistas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0197', 'name' => 'Villas de la Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0201', 'name' => 'Residencial La Esmeralda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0992', 'name' => 'Valle Verde Conalep', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0996', 'name' => 'Ingeniero Agrónomo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1043', 'name' => 'La Loma', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1062', 'name' => 'Los Arcos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1094', 'name' => 'La Lomita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1097', 'name' => 'Zapopan', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1215', 'name' => 'Villas de la Laguna', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1856', 'name' => 'Villas Arana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63038', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0029', 'name' => 'El Mirador INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
                ['key' => '0030', 'name' => 'El Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0031', 'name' => 'Emilio M. González', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0032', 'name' => 'Las Conchas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0033', 'name' => 'Las Pares', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0034', 'name' => 'Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0215', 'name' => 'Rancho las Cruces', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63039', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0035', 'name' => 'Puerta de La Laguna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0203', 'name' => 'Real Montecarlo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0213', 'name' => 'Camino Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0214', 'name' => 'Social Progresivo Cuba', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0991', 'name' => 'Aztlán El Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1084', 'name' => 'Riveras de La Laguna', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63040', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0036', 'name' => 'Magisterial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63050', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0037', 'name' => 'El Parían', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0038', 'name' => 'Miguel Ángel Paredes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0039', 'name' => 'Mololoa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63058', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0040', 'name' => 'Rivas Allende', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0041', 'name' => 'Sandino', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0042', 'name' => 'Sanchez Ibarra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63059', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0043', 'name' => 'Lomas de Cortez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0044', 'name' => 'Lomas de La Laguna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0045', 'name' => 'Villas de Matatipac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0241', 'name' => 'El Limón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1071', 'name' => 'San Juanito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63060', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0046', 'name' => 'El Rodeo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63061', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0047', 'name' => 'Lomas Altas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63062', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0048', 'name' => 'El Palomar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0049', 'name' => 'Lomas Bonitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1092', 'name' => 'Alaska', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1156', 'name' => 'Rinconada Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63066', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0050', 'name' => 'Lomas del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1060', 'name' => 'Lomas del Valle Ampliación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1858', 'name' => 'Florencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63067', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0051', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63068', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0052', 'name' => 'Luis Echeverría A.', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0053', 'name' => 'América Manríquez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63069', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0054', 'name' => 'Primero de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0055', 'name' => 'Unidad Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1055', 'name' => 'Ampliación Unidad Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63070', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0056', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0057', 'name' => 'La Huerta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63080', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0058', 'name' => 'Heriberto Casas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63081', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0059', 'name' => 'Acayapan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63082', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0060', 'name' => 'El Faisán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0061', 'name' => 'El Naranjal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63083', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0062', 'name' => 'Ruinas de Jauja', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0063', 'name' => 'Ampliación Santa Teresita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63084', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0064', 'name' => 'Ingeniero Aguayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0065', 'name' => 'Los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63088', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0067', 'name' => 'Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63089', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0068', 'name' => 'Santa Cecilia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63100', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0069', 'name' => '20 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63109', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0070', 'name' => 'Estadios', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63110', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0071', 'name' => 'Lindavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0072', 'name' => 'Rodeo de La Punta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63114', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0024', 'name' => 'Nuevas Delicias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0073', 'name' => 'Solidaridad INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
                ['key' => '0208', 'name' => 'Colinas del Nayar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1056', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1057', 'name' => 'Solidaridad Primavera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1058', 'name' => 'Aztlán Solidaridad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1059', 'name' => 'Ecologistas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1096', 'name' => 'Dieciséis de Septiembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1857', 'name' => 'Residencial los Olivos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63115', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0074', 'name' => 'SPAUAN', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63116', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0075', 'name' => 'FOVISSSTE 2a Etapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63117', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0002', 'name' => 'Brisas de San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0076', 'name' => 'Las Brisas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0077', 'name' => 'Las Brisas FOVISSSTE', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63119', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0079', 'name' => 'FOVISSSTE 1a Etapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63120', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0080', 'name' => 'IMSS', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
                ['key' => '0081', 'name' => 'Obrera CTM', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0082', 'name' => 'Villa San Ángel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63128', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0003', 'name' => 'Lomas de San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63129', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0066', 'name' => 'Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0084', 'name' => 'Aves del Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0085', 'name' => 'Jagüey', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0086', 'name' => 'Cora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0087', 'name' => 'Rey Nayar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0088', 'name' => 'Tío Baltazar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0207', 'name' => 'Leonardo Rodríguez Alcaine', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1190', 'name' => 'Villas de San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63130', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0089', 'name' => 'San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63135', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0090', 'name' => 'El Tecolote', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0091', 'name' => 'El Tecolote INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63136', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0092', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63137', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0093', 'name' => 'Residencial La Loma', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63138', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0094', 'name' => 'Rincón de San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0095', 'name' => 'Versalles Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63139', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0096', 'name' => 'Versalles Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63150', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0099', 'name' => 'Menchaca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63155', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0101', 'name' => 'Universidad Autónoma de Nayarit', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63156', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0102', 'name' => 'Burócrata Federal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63157', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0103', 'name' => 'Ciudad del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63158', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0104', 'name' => 'Caja de Agua', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63159', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0105', 'name' => 'San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63160', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0106', 'name' => 'Electricistas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0107', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63163', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0109', 'name' => 'Corralón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63164', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0111', 'name' => 'El Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0993', 'name' => 'Nueva Alemania', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1044', 'name' => 'Pedregal de San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63165', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0236', 'name' => 'Biosfera Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63166', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0113', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0114', 'name' => 'Del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63167', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0115', 'name' => 'Peñita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0173', 'name' => 'Labores de Godínez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63168', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0116', 'name' => 'Jardines de La Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63169', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0117', 'name' => 'Fray Junipero Serra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63170', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0118', 'name' => '12 de Diciembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0119', 'name' => 'Dr. Lucas Vallarta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0120', 'name' => 'Ferrocarrilero 2a Secc.', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0122', 'name' => 'Las Aves', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0123', 'name' => 'Los Llanitos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0225', 'name' => 'Lagos  de Aztlán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0995', 'name' => 'México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1046', 'name' => 'Flamingos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1072', 'name' => 'Gobierno del Cambio I', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63172', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0100', 'name' => 'Unidos por Tu Tranquilidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0231', 'name' => 'Los Álamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0237', 'name' => '3 de Julio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0239', 'name' => 'Nuevo Amanecer', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63173', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1860', 'name' => 'Puesta del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0108', 'name' => 'Puerta Encanto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0124', 'name' => 'Ciudad Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0125', 'name' => 'Ciudad Industrial Microindustria', 'zone_type' => 'Urbano', 'settlementtype_id' => '17','zipcode_id' => $idZip],
                ['key' => '0126', 'name' => 'Jazmines', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0127', 'name' => 'Jesús García', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0128', 'name' => 'Nayarabastos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0135', 'name' => 'Parque Ecológico', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0223', 'name' => 'Puerta Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0224', 'name' => 'Villas del Prado', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0229', 'name' => 'Colinas del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0230', 'name' => 'Porta Alta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0233', 'name' => 'Puerta Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0234', 'name' => 'Lomas del Encanto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0238', 'name' => 'Antonio Echevarría Domínguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0240', 'name' => 'Responsabilidad Social Comunitaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1040', 'name' => 'El Rubí', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1041', 'name' => 'Cantera del Nayar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1049', 'name' => 'Justino Ávila Arce', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1075', 'name' => 'Villas del Parque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1076', 'name' => 'Jardines del Parque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1077', 'name' => 'Villas de La Cantera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1123', 'name' => 'Aramara', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1124', 'name' => 'Revolución', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1146', 'name' => 'Ejidal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1147', 'name' => 'La Floresta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1150', 'name' => 'Molinos del Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1153', 'name' => 'Vistas de La Cantera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1162', 'name' => 'Olimpo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1163', 'name' => 'Villas del Molino', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1198', 'name' => 'Villas del Roble', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1211', 'name' => 'Del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63174', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0129', 'name' => 'Prieto Crispín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0130', 'name' => '4 Milpas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0132', 'name' => 'Flores Magón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0133', 'name' => 'Genaro Vázquez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0134', 'name' => 'La Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0136', 'name' => 'Venceremos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0137', 'name' => 'Zitacua', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0226', 'name' => 'Las Fincas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63175', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0138', 'name' => 'Benito Juárez Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0139', 'name' => 'Comerciantes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0140', 'name' => 'Dr. Cuesta Barrios', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0141', 'name' => '2 de Agosto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0142', 'name' => 'Gobernadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0143', 'name' => 'Instituto Tecnológico de Tepic', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
                ['key' => '0144', 'name' => 'Lagos del Country', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0145', 'name' => 'Oriental', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0951', 'name' => 'Valle del Country', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1114', 'name' => 'Luis Donaldo Colosio Murrieta', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63176', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0146', 'name' => 'Cáp. Orozco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0147', 'name' => 'Colonial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0148', 'name' => 'Gustavo Díaz Ordaz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63177', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0121', 'name' => 'Juventud', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0149', 'name' => '18 de Agosto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0151', 'name' => 'El Capomo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0152', 'name' => 'Ferrocarrilero 1a Secc.', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0153', 'name' => 'Heriberto Jara', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0154', 'name' => 'Simancas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0155', 'name' => 'Universitario (AGEUAN)', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0232', 'name' => 'Los Manantiales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0948', 'name' => 'Ampliación Tierra y Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1042', 'name' => 'Los Colomos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1095', 'name' => 'Lirios', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1217', 'name' => 'Villas del Nayar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1854', 'name' => 'Villa las Rosas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63178', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0156', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
                ['key' => '0157', 'name' => 'Tierra y Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63179', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0158', 'name' => 'Gilberto Flores Muñoz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63180', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0159', 'name' => 'Burócrata Estatal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0160', 'name' => 'Colinas del Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0161', 'name' => 'Cuauhtémoc', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0162', 'name' => 'Moctezuma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0163', 'name' => 'Valle Dorado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1073', 'name' => 'Valle de Nayarit', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1074', 'name' => 'Bethel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63183', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0164', 'name' => 'Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63184', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0165', 'name' => 'Gardenias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0166', 'name' => 'Miravalles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63185', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0167', 'name' => 'El 8', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0168', 'name' => 'Félix Peña', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0169', 'name' => 'Los Fresnos Poniente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63186', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0170', 'name' => 'IMSS', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0171', 'name' => 'Leyva Medina', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0172', 'name' => 'Predio San Martín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63190', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0174', 'name' => 'Aviación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0175', 'name' => 'Juan Escutia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0176', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0177', 'name' => 'Los Fresnos Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0178', 'name' => '15 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63193', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0180', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63194', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0181', 'name' => 'El Puerto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0182', 'name' => 'Ladrilleras', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0183', 'name' => 'Nuevas Palomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0184', 'name' => 'Puente de San Cayetano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0219', 'name' => 'Valle Magno', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1081', 'name' => 'El Armadillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1151', 'name' => 'Bonaterra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63195', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0185', 'name' => 'Conasupo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0186', 'name' => 'Extamex', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0188', 'name' => 'Marco Antonio Fernández', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0189', 'name' => 'Los Sauces INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
                ['key' => '0190', 'name' => 'Valle de Matatipac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0222', 'name' => 'Los Ciruelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0949', 'name' => 'Jacarandas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0950', 'name' => 'Severiano Ocegueda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0954', 'name' => 'Las Islas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1078', 'name' => 'Paseo del Valle Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1079', 'name' => 'Las Palomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1148', 'name' => 'La Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63196', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0191', 'name' => 'Caminera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0192', 'name' => 'Castilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0193', 'name' => 'Nueva Aviación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0194', 'name' => 'Periodistas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0195', 'name' => '26 de Septiembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0220', 'name' => 'El Guayabo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63197', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0196', 'name' => '5 de Febrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0198', 'name' => 'Hermosa Provincia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0199', 'name' => 'Los Fresnos INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
                ['key' => '0200', 'name' => 'Los Sauces', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0202', 'name' => 'Tabacos Aztecas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0952', 'name' => 'Plan de Ayala', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
                ['key' => '0953', 'name' => 'Niños Héroes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0997', 'name' => 'Los Fresnos', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63198', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0204', 'name' => 'Villas de La Paz', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63199', 'locality' => 'Tepic', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0206', 'name' => 'José María Martínez (El Molino)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63500', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0110', 'name' => 'Hebrón', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0112', 'name' => 'Los Sabinos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0227', 'name' => 'Azucareros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0325', 'name' => 'Francisco I. Madero (Puga) Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0918', 'name' => 'Francisco Velázquez', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0919', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0920', 'name' => 'El Campo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0921', 'name' => '18 de Marzo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0922', 'name' => 'El Chorro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0923', 'name' => 'Caja de Agua', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0924', 'name' => 'Nueva Valey', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0925', 'name' => 'Las Parejas', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0926', 'name' => 'Las Cruces', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0927', 'name' => 'El Cerro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63501', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0328', 'name' => 'Bellavista', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63502', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0329', 'name' => 'El Rincón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0330', 'name' => 'San Andrés', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '1020', 'name' => 'CEFERESO', 'zone_type' => 'Rural', 'settlementtype_id' => '9','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63503', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0331', 'name' => 'San Fernando', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63504', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0333', 'name' => 'Mora', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0334', 'name' => 'Seis de Enero', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63505', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0326', 'name' => 'La Fortuna', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0336', 'name' => 'El Pichón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0337', 'name' => 'Lo de Lamedo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1098', 'name' => 'Morelos', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63506', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0338', 'name' => 'La Cantera', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63507', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0335', 'name' => 'El Izote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0339', 'name' => 'El Ahuacate', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0340', 'name' => 'Las Delicias', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0347', 'name' => 'Platanitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0349', 'name' => 'Venustiano Carranza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63508', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0341', 'name' => 'Camichín de Jauja', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0342', 'name' => 'La Escondida', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63509', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0344', 'name' => 'El Refugio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63510', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0216', 'name' => 'Catorce de Marzo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0345', 'name' => 'Cinco de Mayo (El Ciruelo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0346', 'name' => 'El Jicote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63511', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0209', 'name' => 'Novillero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0210', 'name' => 'Las Joyas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0211', 'name' => 'La Guadalupana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0212', 'name' => 'Diamante', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0218', 'name' => 'El Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0348', 'name' => 'San Cayetano', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1853', 'name' => 'Volcanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1855', 'name' => 'La Corregidora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63512', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0350', 'name' => 'Las Peñitas (La Repisa)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0351', 'name' => 'Lo de García', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63513', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0352', 'name' => 'Estación Roseta', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63514', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0353', 'name' => 'Las Pilas (El Tepeguaje)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0354', 'name' => 'Los Salazares', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63515', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0355', 'name' => 'Benito Juárez (Las Chivas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0356', 'name' => 'El Espino', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63516', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0358', 'name' => 'El Limón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0359', 'name' => 'Jumatán', 'zone_type' => 'Rural', 'settlementtype_id' => '3','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63517', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0360', 'name' => 'Barranca Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0361', 'name' => 'El Trapichillo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63518', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0362', 'name' => 'Pajuelazo (El Guanacaste)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0363', 'name' => 'La Herradura', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0364', 'name' => 'La Resolana', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63519', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0365', 'name' => 'La Yerba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63520', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0366', 'name' => 'El Colorado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63522', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0368', 'name' => 'Jesús María Cortes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63523', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0235', 'name' => 'Las Norias del Manantial', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0369', 'name' => 'Atonalisco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63524', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0217', 'name' => 'El Floreño (El Capulín)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0221', 'name' => 'Santiago de Pochotitán', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0357', 'name' => 'Buenos Aires', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
                ['key' => '0370', 'name' => 'Caleras de Cofrados', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63526', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0373', 'name' => 'Zapote de Picachos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63527', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0374', 'name' => 'San Luis de Lozada', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63528', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0375', 'name' => 'Mesa de Picachos (El Casco)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63529', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0376', 'name' => 'Las Blancas (Carretones de Cerritos)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '018', 'name' => 'Tuxpan', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63200', 'locality' => 'Tuxpan', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0207', 'name' => 'Tuxpan Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63202', 'locality' => 'Tuxpan', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0216', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0217', 'name' => 'Deportiva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0958', 'name' => 'Talpita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0959', 'name' => 'Antonio R. Laureles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0990', 'name' => 'El Beis', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63203', 'locality' => 'Tuxpan', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0209', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0210', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0211', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63205', 'locality' => 'Tuxpan', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0001', 'name' => 'Guadalupe Peña', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0002', 'name' => 'Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0213', 'name' => 'Magisterial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0220', 'name' => 'Juan Escutia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0221', 'name' => 'Ricardo Flores Magón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63207', 'locality' => 'Tuxpan', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0219', 'name' => 'Ángel Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0957', 'name' => 'Pueblo Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1218', 'name' => 'Ismael Verdín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63225', 'locality' => 'Tuxpan', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0214', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63227', 'locality' => 'Tuxpan', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0212', 'name' => 'Cantarranas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63660', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0534', 'name' => 'Coamiles', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0535', 'name' => 'El Tecomate', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0536', 'name' => 'Palma Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0537', 'name' => 'Peñas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63670', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0538', 'name' => 'Unión de Corrientes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '015', 'name' => 'Santiago Ixcuintla', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63300', 'locality' => 'Santiago Ixcuintla', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0039', 'name' => 'Cerro Chico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0222', 'name' => 'Santiago Ixcuintla Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0956', 'name' => 'Los Limos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63310', 'locality' => 'Santiago Ixcuintla', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0224', 'name' => 'Amado Nervo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63311', 'locality' => 'Santiago Ixcuintla', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0040', 'name' => 'El Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0041', 'name' => 'Ramón López Velarde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0042', 'name' => 'Magisterial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0043', 'name' => 'Universidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0225', 'name' => 'INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63312', 'locality' => 'Santiago Ixcuintla', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0226', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63313', 'locality' => 'Santiago Ixcuintla', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0227', 'name' => 'CTM', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63320', 'locality' => 'Santiago Ixcuintla', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0228', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63321', 'locality' => 'Santiago Ixcuintla', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0229', 'name' => 'Flores Magón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63330', 'locality' => 'Santiago Ixcuintla', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0230', 'name' => 'Cuauhtémoc', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1004', 'name' => 'Los Hornos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1005', 'name' => '19 de Septiembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63340', 'locality' => 'Santiago Ixcuintla', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0012', 'name' => 'La Quinta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0231', 'name' => 'Nuevo México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63341', 'locality' => 'Santiago Ixcuintla', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0013', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0232', 'name' => 'Primero de Enero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63350', 'locality' => 'Santiago Ixcuintla', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0233', 'name' => 'Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63351', 'locality' => 'Santiago Ixcuintla', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0234', 'name' => '12 de Octubre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63352', 'locality' => 'Santiago Ixcuintla', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0014', 'name' => 'Luís Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0015', 'name' => 'Villas de Ixcuintla', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0235', 'name' => 'Los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63360', 'locality' => 'Santiago Ixcuintla', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0236', 'name' => 'Cerro Grande', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63380', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0016', 'name' => 'Campo 7', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0017', 'name' => 'La Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0451', 'name' => 'Yago Estación', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63383', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0439', 'name' => 'Pantano Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63384', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0024', 'name' => 'Caramota', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0440', 'name' => 'Acaponetilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0442', 'name' => 'Corral de Piedra', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0444', 'name' => 'Emerita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0447', 'name' => 'Las Parejas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0450', 'name' => 'Redención', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63385', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0022', 'name' => 'El Manguito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0035', 'name' => 'Las Higueras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0441', 'name' => 'Acatán de las Piñas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0443', 'name' => 'El Cantón de Lozada', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0445', 'name' => 'Hacienda Vieja', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0449', 'name' => 'Paso Real de Cahuipa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63386', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0452', 'name' => 'El Colomo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63550', 'locality' => 'Villa Hidalgo (El Nuevo)', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0006', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0007', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0008', 'name' => 'Leyes de Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0009', 'name' => 'Las Colonias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0010', 'name' => 'José Martínez Escobedo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0011', 'name' => 'Amado Nervo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0409', 'name' => 'Villa Hidalgo Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0870', 'name' => 'Villa de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0871', 'name' => 'Solorceño', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0873', 'name' => 'San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0874', 'name' => 'Santa Cecilia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0875', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0876', 'name' => 'Talpita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0877', 'name' => 'Crispín Duran Z', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0878', 'name' => 'Roma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0879', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0880', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0881', 'name' => 'San Martín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0882', 'name' => 'La Nayarita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63552', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0025', 'name' => 'Loma Bonita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0400', 'name' => 'El Novillero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0401', 'name' => 'El Puente', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0403', 'name' => 'Ojos de Agua', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0405', 'name' => 'Paredones (La Punta de la Laguna)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0407', 'name' => 'Puerta Azul', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0408', 'name' => 'Valle Morelos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0413', 'name' => 'Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0436', 'name' => 'Pozo de Villa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63553', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0416', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0417', 'name' => 'Valle Zaragoza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1204', 'name' => '18 de Septiembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63554', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0030', 'name' => 'El Carrizo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0399', 'name' => 'Cerritos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0414', 'name' => 'Gavilán Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0418', 'name' => 'Amapa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63555', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0001', 'name' => 'Marcos Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0002', 'name' => 'Olímpica', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0003', 'name' => 'Talpita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0419', 'name' => 'La Presa Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63556', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0411', 'name' => 'Pozo de Ibarra', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0434', 'name' => 'El Limón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63557', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0020', 'name' => 'El Papalote', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63558', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0029', 'name' => 'Vado del Cora', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0404', 'name' => 'Vado del Cora (Estación Pani)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0421', 'name' => 'El Tambor', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63559', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0028', 'name' => 'Crucero de Villa Hidalgo', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
                ['key' => '0034', 'name' => 'Crucero las Higueras', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
                ['key' => '0038', 'name' => 'Crucero Bonfil', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
                ['key' => '0412', 'name' => 'Parque Industrial El Tizate', 'zone_type' => 'Rural', 'settlementtype_id' => '28','zipcode_id' => $idZip],
                ['key' => '0415', 'name' => 'Valle Lerma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0446', 'name' => 'Las Higueras', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0448', 'name' => 'Mojarritas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0453', 'name' => 'Estación Nanchi (Peñasquillo)', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63560', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0036', 'name' => 'La Quinta (El Rancho de la Higuera)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0423', 'name' => 'Santa Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63561', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0023', 'name' => 'Cañada Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0027', 'name' => 'Sinaloa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0425', 'name' => 'La Higuerita (La Escondida)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0426', 'name' => 'Rancho Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0427', 'name' => 'San Andrés', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0429', 'name' => 'Las Labores', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0430', 'name' => 'Mayorquín', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63562', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0032', 'name' => 'El Famoso', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0428', 'name' => 'Puerta de Palapares', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63563', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0031', 'name' => 'San Vicente', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0033', 'name' => 'El Nuevo Mexcaltitán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0422', 'name' => 'Mexcaltitán de Uribe', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63564', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0431', 'name' => 'El Mezcal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63565', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0004', 'name' => 'El Estero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0005', 'name' => '4 de Octubre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0019', 'name' => 'San Miguel Número Dos (El Quemado)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0037', 'name' => 'Los Pérez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0432', 'name' => 'Aztlán de las Garzas', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0433', 'name' => 'Campo de los Limones', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0435', 'name' => 'Gavilán Chico', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0437', 'name' => 'Sentispac', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63567', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0438', 'name' => 'El Capomal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63568', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0018', 'name' => 'Palmar de Cuautla', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63570', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0021', 'name' => 'La Guinea', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0455', 'name' => 'Sauta', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63573', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0026', 'name' => 'Playa el Sesteo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0456', 'name' => 'Boca de Camichín', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0464', 'name' => 'Los Corchos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0465', 'name' => 'Toro Mocho', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63575', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0406', 'name' => 'Patroneño I', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0458', 'name' => 'El Botadero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0459', 'name' => 'Pueblo Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63576', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0454', 'name' => 'El Corte (El Tuchi)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0461', 'name' => 'El Turco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63577', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0462', 'name' => 'Puerta de Mangos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63578', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0457', 'name' => 'Los Otates', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0460', 'name' => 'Cañada del Tabaco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0463', 'name' => 'Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63579', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0466', 'name' => 'Villa Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '001', 'name' => 'Acaponeta', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63400', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0242', 'name' => 'San José de Gracia', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63403', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0010', 'name' => 'Las Mesitas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0012', 'name' => 'El Naranjo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0013', 'name' => 'La Morita (Anamorita)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0020', 'name' => 'Las Higueras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0022', 'name' => 'El Vigal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0246', 'name' => 'La Lagunita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63404', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0009', 'name' => 'Mesa las Arpas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63405', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0249', 'name' => 'San Dieguito de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0250', 'name' => 'San Dieguito de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63406', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0251', 'name' => 'El Carrizo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0252', 'name' => 'Los Morillo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63407', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0007', 'name' => 'Mesa de la Laguna', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0021', 'name' => 'El Duraznito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0247', 'name' => 'Santa Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63408', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0253', 'name' => 'El Oro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0255', 'name' => 'San Diego de Alcalá', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63409', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0015', 'name' => 'El Carrizal', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0024', 'name' => 'Cañones', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0032', 'name' => 'La Guacamaya', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63410', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0019', 'name' => 'La Higuerita Nueva (El Carrizo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0254', 'name' => 'El Tigre', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0257', 'name' => 'El Aguaje', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0259', 'name' => 'La Bayona', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63412', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0014', 'name' => 'La Haciendilla', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0025', 'name' => 'El Guayabo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0260', 'name' => 'El Tacote', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0261', 'name' => 'Cerro Bola', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63413', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0006', 'name' => 'El Centenario', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0011', 'name' => 'La Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0023', 'name' => 'Hacienda Vieja', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0029', 'name' => 'Llano de Mariquitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0031', 'name' => 'Ochenta y Seis Batallón', 'zone_type' => 'Rural', 'settlementtype_id' => '24','zipcode_id' => $idZip],
                ['key' => '0238', 'name' => 'El Recodo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0263', 'name' => 'Las Casitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1161', 'name' => 'Hacienda de Mariquitas', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63414', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0018', 'name' => 'Las Palmitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0027', 'name' => 'Hojas Anchas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0030', 'name' => 'Estación Crucero de Acaponeta', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63415', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0008', 'name' => 'Chalpa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0264', 'name' => 'Valle de la Urraca (El Cabildo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63416', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0258', 'name' => 'El Tejón (El Cantón)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63420', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0028', 'name' => 'La Cortez (El Zapote)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0265', 'name' => 'Casas Coloradas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0267', 'name' => 'Piedra Ancha', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0268', 'name' => 'Sayulilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0273', 'name' => 'Llano de la Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63421', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0005', 'name' => 'El Alacrán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0017', 'name' => 'Las Bugambilias', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0026', 'name' => 'La Higuerita Vieja', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0269', 'name' => 'Buenavista (Las Paredes)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0270', 'name' => 'Los Sandovales', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63423', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0241', 'name' => 'Saycota', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63424', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0002', 'name' => 'San Blasito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0266', 'name' => 'El Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63425', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0272', 'name' => 'La Guásima', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0004', 'name' => 'El Llorón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0016', 'name' => 'Arroyo de San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0271', 'name' => 'Amado Nervo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63426', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0240', 'name' => 'Mesa de Pedro Pablo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0278', 'name' => 'San Pedro de Honor', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63427', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0001', 'name' => 'La Paloma Primera', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0276', 'name' => 'San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1178', 'name' => 'La Paloma Nueva Reforma', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63429', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0003', 'name' => 'San José de Motaje', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0275', 'name' => 'El Resbalón', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '1360', 'name' => 'Zavala', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63430', 'locality' => 'Acaponeta', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0784', 'name' => 'Acaponeta Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63434', 'locality' => 'Acaponeta', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0033', 'name' => 'El Camichin', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0243', 'name' => 'Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0785', 'name' => 'Antonio Chumacero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0786', 'name' => 'INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63435', 'locality' => 'Acaponeta', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0037', 'name' => 'Vicente Lombardo Toledano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0244', 'name' => 'INVINAY Porfirio Vázquez Cosío', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1018', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1021', 'name' => 'El Molino', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1024', 'name' => 'Nueva Galaxia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63436', 'locality' => 'Acaponeta', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0036', 'name' => 'Las Colonias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0038', 'name' => 'Del Carmen', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0040', 'name' => 'Estadio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1026', 'name' => 'Mazatlancito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1859', 'name' => 'La Capilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63437', 'locality' => 'Acaponeta', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0039', 'name' => 'Loma Atravesada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0239', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1008', 'name' => 'Las Mojoneras', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1025', 'name' => 'Juan Escutia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63438', 'locality' => 'Acaponeta', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0034', 'name' => 'Cerro de la Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0035', 'name' => 'Cerro de la Glorieta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1022', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '016', 'name' => 'Tecuala', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63440', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0014', 'name' => 'Guamuchilito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0281', 'name' => 'El Arrayán', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0309', 'name' => 'Las Anonas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63443', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0280', 'name' => 'Antonio R. Laureles', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63444', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0303', 'name' => 'Los Morillos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63445', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0295', 'name' => 'El Limón', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0300', 'name' => 'Los Esteros', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63446', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0001', 'name' => 'El Pato', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0002', 'name' => 'El Pozole', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0283', 'name' => 'El Filo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0296', 'name' => 'Milpas Viejas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0299', 'name' => 'San Felipe Aztatán', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63447', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0297', 'name' => 'La Presa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63449', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0015', 'name' => 'La Magdalena', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0308', 'name' => 'Las Lumbres', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0310', 'name' => 'Cuastecomate (Los Tecomates)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0311', 'name' => 'Palo Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63450', 'locality' => 'Tecuala', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0011', 'name' => 'Mancillas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0787', 'name' => 'Tecuala Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63453', 'locality' => 'Tecuala', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0004', 'name' => 'Del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0005', 'name' => 'El Tacote', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0008', 'name' => 'La Loma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0999', 'name' => 'Las Brisas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1030', 'name' => 'Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63454', 'locality' => 'Tecuala', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0788', 'name' => 'Juan Escutia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1029', 'name' => 'Pueblo Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63455', 'locality' => 'Tecuala', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0003', 'name' => 'Chino', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0006', 'name' => 'El Tinaco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0007', 'name' => 'La Bomba', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0009', 'name' => 'Los Camichines', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0010', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0789', 'name' => 'Patria Nueva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0790', 'name' => 'Vicente Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1028', 'name' => 'Prolongación Galeana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1031', 'name' => 'Amado Nervo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1032', 'name' => 'CNOP PRI', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1033', 'name' => 'Revolución', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63456', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0291', 'name' => 'Camalotita', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63457', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0279', 'name' => 'Agua Verde (El Salto)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63458', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0286', 'name' => 'Pajaritos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0293', 'name' => 'Los Remos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0298', 'name' => 'Huajuquilla', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63459', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0282', 'name' => 'Atotonilco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63460', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0302', 'name' => 'Quimichis', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63463', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0287', 'name' => 'Paso Hondo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0288', 'name' => 'Río Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0306', 'name' => 'Chocota', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63464', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0012', 'name' => 'Arenitas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0013', 'name' => 'El Tecomate', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0284', 'name' => 'El Roblito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63466', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0016', 'name' => 'La Puntilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0285', 'name' => 'Novillero', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0289', 'name' => 'San Cayetano', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0305', 'name' => 'Playa Novillero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63470', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0307', 'name' => 'Tierra Generosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '005', 'name' => 'Huajicori', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63480', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0312', 'name' => 'Huajicori', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63484', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0008', 'name' => 'Las Cebollitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63485', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0005', 'name' => 'El Tepehuaje', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0315', 'name' => 'Zapotillos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0322', 'name' => 'Santa María de Picachos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63486', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0011', 'name' => 'Agua Caliente', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0313', 'name' => 'Quiviquinta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63487', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0314', 'name' => 'San Francisco del Caimán', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63489', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0317', 'name' => 'La Estancia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0318', 'name' => 'Valle Morelos (Higuera Gacha)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1199', 'name' => 'Potrerillos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63494', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0007', 'name' => 'Mesa de los Ricos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0010', 'name' => 'La Murallita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63495', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0004', 'name' => 'El Colomo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0323', 'name' => 'San Andrés Milpillas', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63496', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0003', 'name' => 'El Aserradero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0006', 'name' => 'Llano Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63497', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0001', 'name' => 'Acatita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0319', 'name' => 'Mineral de Cucharas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0320', 'name' => 'El Guamuchilito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63498', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0012', 'name' => 'Tescomatita (Las Trojas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63499', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0002', 'name' => 'Contadero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0321', 'name' => 'Guamuchilar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '009', 'name' => 'Del Nayar', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63530', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0377', 'name' => 'Jesús María', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63533', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0382', 'name' => 'El Colomo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0383', 'name' => 'Santa Bárbara', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1107', 'name' => 'Las Huertitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1370', 'name' => 'Arroyo Capomo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1382', 'name' => 'Aurelio de la Cruz Serrano', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1397', 'name' => 'Cerro Chino', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1400', 'name' => 'Cerro Pelón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1403', 'name' => 'Ciénega de Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1425', 'name' => 'El Banco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1428', 'name' => 'El Caligüey', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1442', 'name' => 'El Cascabel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1470', 'name' => 'El Limón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1481', 'name' => 'El Molino', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1503', 'name' => 'El Purgatorio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1516', 'name' => 'El Salitre', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1519', 'name' => 'El Saucito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1522', 'name' => 'El Segundo Paso', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1532', 'name' => 'El Tesorero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1533', 'name' => 'El Trigalillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1551', 'name' => 'Guapinole', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1589', 'name' => 'La Laguna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1604', 'name' => 'La Mojarra', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1605', 'name' => 'La Mojonera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1608', 'name' => 'La Nanchilera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1615', 'name' => 'La Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1672', 'name' => 'Las Ranas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1684', 'name' => 'Los Aguacates', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1694', 'name' => 'Los Bancos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1707', 'name' => 'Los Corpos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1712', 'name' => 'Los Cuervitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1725', 'name' => 'Los Ladrillos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1731', 'name' => 'Los Manguitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1741', 'name' => 'Los Serranos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1778', 'name' => 'Picachitos (Juan Sabás)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1809', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1811', 'name' => 'San Joaquín', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1822', 'name' => 'Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1823', 'name' => 'Santos Rojas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1831', 'name' => 'Teodoro Valentín', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1832', 'name' => 'Terrurúripa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1845', 'name' => 'Zapopan', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63534', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0385', 'name' => 'Rancho Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0386', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '1108', 'name' => 'Arroyo Cañaveral', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1374', 'name' => 'Arroyo de Santiago', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1376', 'name' => 'Arroyo del Fraile', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1378', 'name' => 'Arroyo Hondo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1384', 'name' => 'Boca de Arroyo Santiago', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1385', 'name' => 'Boca del Arroyo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1418', 'name' => 'El Algodonal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1430', 'name' => 'El Campamento (La Silleta)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1436', 'name' => 'El Capomo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1446', 'name' => 'El Chalate', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1447', 'name' => 'El Chalate', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1468', 'name' => 'El Jazmín', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1490', 'name' => 'El Pastor', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1492', 'name' => 'El Picacho', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1541', 'name' => 'El Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1556', 'name' => 'Ixtalpa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1562', 'name' => 'La Banquita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1571', 'name' => 'La Ciénega', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1578', 'name' => 'La Concepción', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1580', 'name' => 'La Cuesta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1584', 'name' => 'La Guerra', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1601', 'name' => 'La Mesita (El Llano Grande)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1603', 'name' => 'La Mezquitera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1634', 'name' => 'Laguna de Ojo de Agua', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1665', 'name' => 'Las Patas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1692', 'name' => 'Los Arrayanes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1698', 'name' => 'Los Brincos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1732', 'name' => 'Los Manguitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1769', 'name' => 'Palomas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1781', 'name' => 'Piedra Iglesia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1787', 'name' => 'Puente el Fraile', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1818', 'name' => 'Santa Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63535', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0388', 'name' => 'San Juan Peyotán', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '1377', 'name' => 'Arroyo del Guamúchil', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1381', 'name' => 'Atonalisco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1383', 'name' => 'Bajío de la Cebolleta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1392', 'name' => 'Campatehuala', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1420', 'name' => 'El Arco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1421', 'name' => 'El Arrayán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1448', 'name' => 'El Chalate', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1460', 'name' => 'El Gabino', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1471', 'name' => 'El Limón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1506', 'name' => 'El Reventón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1509', 'name' => 'El Rincón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1520', 'name' => 'El Saucito Peyotán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1542', 'name' => 'El Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1564', 'name' => 'La Cebolleta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1565', 'name' => 'La China', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1574', 'name' => 'La Ciénega de San Felipe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1583', 'name' => 'La Curva', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1602', 'name' => 'La Metatita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1619', 'name' => 'La Peña Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1635', 'name' => 'Las Adjuntas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1666', 'name' => 'Las Patillas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1693', 'name' => 'Los Arrayanes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1763', 'name' => 'Ortega', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1773', 'name' => 'Peña Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1802', 'name' => 'Rancho del Bajío', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63536', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1711', 'name' => 'Los Cuervitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1714', 'name' => 'Los Encinos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1719', 'name' => 'Los Guajolotes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1733', 'name' => 'Los Medina', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1746', 'name' => 'Los Tigres (El Metate)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1760', 'name' => 'Nochecita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1804', 'name' => 'Rancho Nuevo (Juventino)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1834', 'name' => 'Tierra Caliente', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1839', 'name' => 'Tierras Blancas del Picacho', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0389', 'name' => 'Jazmines de Coyultita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0390', 'name' => 'Zoquipan', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0392', 'name' => 'Coyultita de Jazmines', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1368', 'name' => 'Arrayanes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1373', 'name' => 'Arroyo de Pericos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1388', 'name' => 'Cabeza de Venado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1405', 'name' => 'Cofradía de Pericos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1406', 'name' => 'Comal de Peñita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1414', 'name' => 'El Agua Caliente', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1434', 'name' => 'El Capomo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1435', 'name' => 'El Capomo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1450', 'name' => 'El Ciruelar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1453', 'name' => 'El Conejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1456', 'name' => 'El Duraznito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1466', 'name' => 'El Guayabo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1469', 'name' => 'El Limón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1472', 'name' => 'El Maguey', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1477', 'name' => 'El Manguito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1484', 'name' => 'El Naranjo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1500', 'name' => 'El Pitallito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1504', 'name' => 'El Quicuixtle', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1511', 'name' => 'El Risco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1517', 'name' => 'El Sapo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1537', 'name' => 'El Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1538', 'name' => 'El Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1539', 'name' => 'El Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
                ['key' => '1545', 'name' => 'Gabino Severiano', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1550', 'name' => 'Guamuchilillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1553', 'name' => 'Guásima del Metate', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1596', 'name' => 'La Mesa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1609', 'name' => 'La Nopalera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1613', 'name' => 'La Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1625', 'name' => 'La Quemada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1645', 'name' => 'Las Cuevas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1667', 'name' => 'Las Peñas Coloradas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1674', 'name' => 'Las Tapias (Santa Gertrudis)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1682', 'name' => 'Los Aguacates', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1685', 'name' => 'Los Aires', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63537', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0380', 'name' => 'Alto de Ventanas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0391', 'name' => 'Huaynamota', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1369', 'name' => 'Arroyo Barbón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1393', 'name' => 'Carrizal de las Vigas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1402', 'name' => 'Chapiles', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1458', 'name' => 'El Espejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1494', 'name' => 'El Pinito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1507', 'name' => 'El Rincón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1543', 'name' => 'El Zopilote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1554', 'name' => 'Guásimas del Caimán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1557', 'name' => 'Jazmines', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1567', 'name' => 'La Ciénega', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1594', 'name' => 'La Loma de los Encinos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1595', 'name' => 'La Mata', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1598', 'name' => 'La Mesa de la Pitayera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1618', 'name' => 'La Palmita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1636', 'name' => 'Las Adjuntas (La Peña)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1641', 'name' => 'Las Cruces', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1644', 'name' => 'Las Cuevas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1651', 'name' => 'Las Guásimas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1663', 'name' => 'Las Palmas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1713', 'name' => 'Los Encinos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1721', 'name' => 'Los Guayabos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1739', 'name' => 'Los Sabinos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1747', 'name' => 'Los Yugos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1766', 'name' => 'Palma Chica', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1770', 'name' => 'Paredes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1791', 'name' => 'Rancho de Emilia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1830', 'name' => 'Teneracas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1833', 'name' => 'Tierra Blanca (El Tempisque)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1842', 'name' => 'Tutuyecuamama', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1844', 'name' => 'Vuelta del Cerro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63538', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0381', 'name' => 'San Rafael', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0393', 'name' => 'Higuera Gorda', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1176', 'name' => 'El Novillero', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '1362', 'name' => 'Agua Caliente', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1365', 'name' => 'Aguamilpa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1389', 'name' => 'Caimantita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1390', 'name' => 'Caleras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1407', 'name' => 'Corrales', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1410', 'name' => 'Coyultita de Mala Noche', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1412', 'name' => 'Cuauhtémoc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1417', 'name' => 'El Aire', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1419', 'name' => 'El Anonito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1437', 'name' => 'El Carrizal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1449', 'name' => 'El Ciruelar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1452', 'name' => 'El Colorín', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1454', 'name' => 'El Cordón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1464', 'name' => 'El Guariche', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1476', 'name' => 'El Manguito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1485', 'name' => 'El Nogal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1488', 'name' => 'El Papalote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1499', 'name' => 'El Pino', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1505', 'name' => 'El Ranchito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1524', 'name' => 'El Sordo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1530', 'name' => 'El Tepetate', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1535', 'name' => 'El Vicenteño (Calaveras)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1536', 'name' => 'El Vicenteño (Huamiloya)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1585', 'name' => 'La Higuerita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1606', 'name' => 'La Nanchilera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1607', 'name' => 'La Nanchilera', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1622', 'name' => 'La Polvareda (Higueral de Don Pancho)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1629', 'name' => 'La Travesía', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1631', 'name' => 'La Ventanilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1638', 'name' => 'Las Azucenas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1643', 'name' => 'Las Cuevas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1649', 'name' => 'Las Guineas de Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1653', 'name' => 'Las Higueras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1662', 'name' => 'Las Palmas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1697', 'name' => 'Los Barros Negros', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1700', 'name' => 'Los Cajones', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1736', 'name' => 'Los Parejos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1785', 'name' => 'Potrero de la Palmita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1788', 'name' => 'Puerto de Mala Noche', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1805', 'name' => 'Rancho Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1812', 'name' => 'San Luisito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1813', 'name' => 'San Pablo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1846', 'name' => 'Zapotán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63539', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1103', 'name' => 'El Saucito', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '1196', 'name' => 'La Palmita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1474', 'name' => 'El Mango', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1475', 'name' => 'Los Limoncitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1497', 'name' => 'El Pinito (Pedro Esparza)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1512', 'name' => 'El Roble', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1521', 'name' => 'El Sauz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1549', 'name' => 'Gualupillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1591', 'name' => 'La Laguna Seca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1633', 'name' => 'Laguna de las Vacas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1723', 'name' => 'Los Hornitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1758', 'name' => 'Naranjito de Copal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1768', 'name' => 'Palomas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1771', 'name' => 'Paso de Álica (Agua Buena)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1772', 'name' => 'Paso de Lozada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1784', 'name' => 'Playa de Golondrinas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1789', 'name' => 'Rancho Alegre (Agua Hedionda)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63540', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0395', 'name' => 'Santa Teresa', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '1394', 'name' => 'Cebollitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1399', 'name' => 'Cerro del Águila', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1424', 'name' => 'El Bajío', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1441', 'name' => 'El Carrizo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1671', 'name' => 'Las Pulgas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1678', 'name' => 'Las Tortugas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1703', 'name' => 'Los Chapiles (Hitachi)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1755', 'name' => 'Mesa de Cocorochas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1816', 'name' => 'San Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1817', 'name' => 'Santa Anita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63543', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0396', 'name' => 'Dolores', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '1367', 'name' => 'Anselmo Lemus Valle', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1379', 'name' => 'Asención Lemus Valle', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1395', 'name' => 'Cerritos (Tierras Blancas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1409', 'name' => 'Coyultita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1426', 'name' => 'El Brinco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1427', 'name' => 'El Caimán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1433', 'name' => 'El Cangrejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1463', 'name' => 'El Guaco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1478', 'name' => 'El Manguito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1501', 'name' => 'El Portezuelo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1514', 'name' => 'El Roblito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1523', 'name' => 'El Sobadero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1552', 'name' => 'Guásimas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1560', 'name' => 'Juan Carrillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1563', 'name' => 'La Bonita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1621', 'name' => 'La Pintada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1640', 'name' => 'Las Conchas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1652', 'name' => 'Las Habitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1659', 'name' => 'Las Mesitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1677', 'name' => 'Las Tortugas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1705', 'name' => 'Los Coamiles', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1720', 'name' => 'Los Guajolotes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1735', 'name' => 'Los Padres', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1737', 'name' => 'Los Pinitos (Dolores Viejo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1743', 'name' => 'Los Tacos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1744', 'name' => 'Los Tenamaxtles', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1751', 'name' => 'Magdaleno Pérez Carrillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1753', 'name' => 'Melesio Valle Gómez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1757', 'name' => 'Mesa de los Huicholes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1767', 'name' => 'Palo Boludo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1776', 'name' => 'Petronilo Gutiérrez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1780', 'name' => 'Piedra Bola', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1810', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1814', 'name' => 'San Vicente', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1815', 'name' => 'San Vicente Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1824', 'name' => 'Sixto Santiago Lincer', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1829', 'name' => 'Tapinada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1840', 'name' => 'Tierras Coloradas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1847', 'name' => 'Zeferinos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63544', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1391', 'name' => 'Camaleones', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1566', 'name' => 'La Cieneguita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1600', 'name' => 'La Mesita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1632', 'name' => 'La Yerba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1647', 'name' => 'Las Guacamayas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1650', 'name' => 'Las Guitarras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1681', 'name' => 'Linda Vista', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1702', 'name' => 'Los Carrizos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1706', 'name' => 'Los Conejos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1710', 'name' => 'Los Cueros', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1716', 'name' => 'Los Fierros', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1749', 'name' => 'Los Zorrillos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1762', 'name' => 'Ojo de Agua', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1779', 'name' => 'Pico del Águila (Tankanini)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1803', 'name' => 'Rancho Doroteo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1806', 'name' => 'Rancho Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1819', 'name' => 'Santa Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1821', 'name' => 'Santa Gertrudis', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1828', 'name' => 'Tapeistes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1841', 'name' => 'Tierras Cuevas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63545', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1387', 'name' => 'Cañada de la Laguna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1561', 'name' => 'Juan Pérez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1572', 'name' => 'La Ciénega', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1617', 'name' => 'La Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1630', 'name' => 'La Ventana', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1660', 'name' => 'Las Minas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1690', 'name' => 'Los Arenales', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1724', 'name' => 'Los Huizaches', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1729', 'name' => 'Los Llanitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1734', 'name' => 'Los Nopales (Karurita)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1782', 'name' => 'Los Pinitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1843', 'name' => 'Meseta Llano Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63546', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0397', 'name' => 'Mesa del Nayar', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0398', 'name' => 'San Rafael (San Rafael Alto)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1366', 'name' => 'Anastasio Melchor Due', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1380', 'name' => 'Aserradero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1432', 'name' => 'El Cangrejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1455', 'name' => 'Mayolo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1480', 'name' => 'El Molcajete', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1510', 'name' => 'El Rincón (Las Sillas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1546', 'name' => 'Guadalupe (El Magueyito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1570', 'name' => 'La Ciénega', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1590', 'name' => 'La Laguna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1628', 'name' => 'La Taberna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1637', 'name' => 'Las Avispas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1680', 'name' => 'Las Vigas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1687', 'name' => 'Los Alacranes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1738', 'name' => 'Los Robles', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1745', 'name' => 'Los Tepetates', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1750', 'name' => 'Luis Romero (Las Cocorochas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1752', 'name' => 'Manuel Pancho', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1790', 'name' => 'Rancho de Antolino', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1793', 'name' => 'Rancho de Gervasio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1797', 'name' => 'Rancho de Margarito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1807', 'name' => 'Sacaymota', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63547', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0384', 'name' => 'Gavilanes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1363', 'name' => 'Agua Caliente', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1371', 'name' => 'Arroyo de Camarones', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1401', 'name' => 'Cerro Redondo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1438', 'name' => 'El Carrizal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1443', 'name' => 'El Cerrito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1457', 'name' => 'El Durazno', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1462', 'name' => 'El Guaco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1479', 'name' => 'El Mirador', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1483', 'name' => 'El Nanchi', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1491', 'name' => 'El Pescuezo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1496', 'name' => 'El Pinito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1498', 'name' => 'El Pinito Nuevo (La Muñeca)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1515', 'name' => 'El Sabino', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1531', 'name' => 'El Tepetate', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1547', 'name' => 'Gualacamote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1555', 'name' => 'Huizache', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1569', 'name' => 'La Ciénega', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1577', 'name' => 'La Cofradía Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1586', 'name' => 'La Joya', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1588', 'name' => 'La Laguna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1592', 'name' => 'La Lamedera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1611', 'name' => 'La Nopalera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1614', 'name' => 'La Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1626', 'name' => 'La Segueta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1627', 'name' => 'La Silleta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1648', 'name' => 'Las Guayabas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1670', 'name' => 'Las Pilas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1673', 'name' => 'Las Sillas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1675', 'name' => 'Las Tarabillas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1699', 'name' => 'Los Bules', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1701', 'name' => 'Los Calixtro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1718', 'name' => 'Los Granos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1726', 'name' => 'Los Limones', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1727', 'name' => 'Los Lirios', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1740', 'name' => 'Los Sabinos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1742', 'name' => 'Los Tabacos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1756', 'name' => 'Mesa de los Cánare', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1764', 'name' => 'Pajarillos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1765', 'name' => 'Pajaritos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1777', 'name' => 'Picachitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1786', 'name' => 'Primer Paso', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1796', 'name' => 'Rancho de Leandro Estrada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1801', 'name' => 'Rancho de Santos García', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1848', 'name' => 'Zoquipilla', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63548', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0379', 'name' => 'San Miguel del Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1089', 'name' => 'Las Hormigas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1175', 'name' => 'Los Ciruelos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1372', 'name' => 'Arroyo de la Cueva', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1375', 'name' => 'Arroyo del Capomo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1398', 'name' => 'Cerro de la Lluvia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1404', 'name' => 'Ciénega del Mango', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1413', 'name' => 'Culebras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1415', 'name' => 'El Agua Caliente', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1422', 'name' => 'El Arroyo del Tezcalame', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1423', 'name' => 'El Gato Negro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1429', 'name' => 'El Camichín', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1439', 'name' => 'El Carrizo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1445', 'name' => 'El Chalate', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1451', 'name' => 'El Clavellino', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1459', 'name' => 'El Faisán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1467', 'name' => 'El Izote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1473', 'name' => 'El Maguey', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1482', 'name' => 'El Monte del Palo Cuate', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1486', 'name' => 'El Nogal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1489', 'name' => 'El Papayito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1495', 'name' => 'El Pinito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1502', 'name' => 'El Puente de las Guayabas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1526', 'name' => 'El Tempisque', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1540', 'name' => 'El Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1548', 'name' => 'Gualsamayeta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1558', 'name' => 'Jazmín del Coquito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1559', 'name' => 'Jerónimo Melchor', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1568', 'name' => 'La Ciénega', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1581', 'name' => 'La Cueva Prieta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1582', 'name' => 'La Cumbre del Duraznito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1587', 'name' => 'La Ladrillera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1612', 'name' => 'La Nopalera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1620', 'name' => 'La Piedra del Cangrejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1624', 'name' => 'La Puerta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1639', 'name' => 'Las Calandrias', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1642', 'name' => 'Las Crucecitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1646', 'name' => 'Las Estrellas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1655', 'name' => 'Las Iguanas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1657', 'name' => 'Las Maravillas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1661', 'name' => 'Las Ollas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1668', 'name' => 'Las Peñitas (Las Antenas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1669', 'name' => 'Las Pestañas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1679', 'name' => 'Las Urracas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1683', 'name' => 'Los Aguacates', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1686', 'name' => 'Los Aires', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1689', 'name' => 'Los Arcos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1691', 'name' => 'Los Arrayanes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1695', 'name' => 'Los Banquitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1704', 'name' => 'Los Ciruelitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1717', 'name' => 'Los Fortines', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1730', 'name' => 'Los Mangos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1748', 'name' => 'Los Zapotes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1754', 'name' => 'Melquiades de la Cruz Cuevas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1774', 'name' => 'Peñas Amarillas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1775', 'name' => 'Peñasco Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1792', 'name' => 'Rancho de Eustorgio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1794', 'name' => 'Rancho de Ignacio (Los Fortines)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1795', 'name' => 'Rancho de la Cueva', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1798', 'name' => 'Rancho de Mariano', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1800', 'name' => 'Rancho de Pánfilo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1808', 'name' => 'San Gregorio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1820', 'name' => 'Santa Cruz de Guaybel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1826', 'name' => 'Ta Puaa Ta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1835', 'name' => 'Tierras Blancas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63549', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1722', 'name' => 'Los Llanitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1728', 'name' => 'Los Llanitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1759', 'name' => 'Naute', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1761', 'name' => 'Ojo de Agua', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1783', 'name' => 'Platanitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1825', 'name' => 'Las Lechuguillas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1827', 'name' => 'Tapanco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1836', 'name' => 'Tierras Blancas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1837', 'name' => 'Tierras Blancas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1408', 'name' => 'Coyultita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1411', 'name' => 'Coyunque', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1440', 'name' => 'El Carrizo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1461', 'name' => 'El Guaco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1487', 'name' => 'El Nogal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1518', 'name' => 'El Sapo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1525', 'name' => 'El Tapeiste', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1527', 'name' => 'El Tempisque', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1528', 'name' => 'El Tenamaiste', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1529', 'name' => 'El Tenamaste', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1534', 'name' => 'El Tunaiste', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1544', 'name' => 'Encino Colorado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1575', 'name' => 'La Cofradía', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1579', 'name' => 'La Cortadilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1610', 'name' => 'La Nopalera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1654', 'name' => 'Las Hormigas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1656', 'name' => 'Las Jabas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1676', 'name' => 'Las Tortugas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1696', 'name' => 'Los Banquitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1715', 'name' => 'Los Encinos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '019', 'name' => 'La Yesca', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63580', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0467', 'name' => 'La Yesca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63582', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1091', 'name' => 'San Juan Ixtapalapa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1301', 'name' => 'San Pelayo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63583', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0018', 'name' => 'Los Suspiros', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
                ['key' => '0469', 'name' => 'El Izote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0470', 'name' => 'La Cofradía', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1125', 'name' => 'Mesa de los Saucedos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1302', 'name' => 'Las Higueras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1852', 'name' => 'Popota', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63584', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0008', 'name' => 'El Pinal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0022', 'name' => 'El Limón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
                ['key' => '0472', 'name' => 'Amatlán de Jora', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0473', 'name' => 'Hacienda de Ambas Aguas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1119', 'name' => 'La Ciénega', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1197', 'name' => 'El Jirón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
                ['key' => '1300', 'name' => 'El Carrizal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63586', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0001', 'name' => 'La Piedra Picada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0006', 'name' => 'El Carrizal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0015', 'name' => 'Palmillas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0017', 'name' => 'La Ciénega', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1117', 'name' => 'La Playa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1120', 'name' => 'Guanacaste', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1121', 'name' => 'La Cuchilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1174', 'name' => 'La Palmita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1207', 'name' => 'La Guasimera', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63587', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0468', 'name' => 'Cortapico', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0471', 'name' => 'Apozolco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1106', 'name' => 'El Pinole', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1850', 'name' => 'La Cueva Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1851', 'name' => 'Los Encantos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63590', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0014', 'name' => 'Batallón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0474', 'name' => 'Puente de Camotlán', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63593', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0003', 'name' => 'Mesa del Tirador', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0012', 'name' => 'El Jazmín', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63594', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0007', 'name' => 'La Manga', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0475', 'name' => 'El Trapiche', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63595', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0010', 'name' => 'Las Jaras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0476', 'name' => 'Huajimic', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '1212', 'name' => 'Buenavista', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63596', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0002', 'name' => 'Guadalupe Ocotán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0004', 'name' => 'Ocota de la Sierra', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0005', 'name' => 'Mesa de Chapalilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0009', 'name' => '22 de Enero', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0011', 'name' => 'Cebolletas (El Maguey)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0013', 'name' => 'El Mirador', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0016', 'name' => 'Tierra Amarilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0019', 'name' => 'El Mezquite', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0020', 'name' => 'Las Palomas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0021', 'name' => 'La Mesa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63597', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0023', 'name' => 'Ayotita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '011', 'name' => 'Ruíz', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63600', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0481', 'name' => 'Vado de San Pedro', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '1288', 'name' => 'María de Jesús Parada', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63603', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1227', 'name' => 'Crucero de Ruiz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1231', 'name' => 'El Capomo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1233', 'name' => 'El Chalán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1263', 'name' => 'La Frontera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63604', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0483', 'name' => 'Heroico Batallón de San Blas (La Noria)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1297', 'name' => 'Salvador Allende (Las Labradas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63605', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0477', 'name' => 'Laguna del Mar', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0479', 'name' => 'San Lorenzo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0484', 'name' => 'La Jarretadera', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1225', 'name' => 'Crucero de Jarretadera (El Manguito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1226', 'name' => 'Crucero de la Laguna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1244', 'name' => 'El Mirador', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1252', 'name' => 'El Veinticinco (El Topete)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1254', 'name' => 'El Venadito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1271', 'name' => 'La Soledad', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1287', 'name' => 'Los Veranos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1289', 'name' => 'Pajaritos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1292', 'name' => 'Alfonso Vidal (El Mirador)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63606', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0485', 'name' => 'Juan Escutia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1236', 'name' => 'El Duende', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1239', 'name' => 'El Guarichi', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63607', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1264', 'name' => 'La Limonera (Las Higueras)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1268', 'name' => 'La Mojonera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63610', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0486', 'name' => 'El Venado', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63613', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0487', 'name' => 'Puerta de Platanares', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1284', 'name' => 'Los Llanitos (Los Rivera)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63614', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0488', 'name' => 'El Zopilote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1234', 'name' => 'El Coquito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1253', 'name' => 'El Veloz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1261', 'name' => 'La Embocada del Tenamache', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1267', 'name' => 'La Minera Nival', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1275', 'name' => 'Lagunitas de Ventanas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1290', 'name' => 'Planes de Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1298', 'name' => 'Santo Domingo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63615', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0489', 'name' => 'La Bolita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1232', 'name' => 'El Carrizal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1248', 'name' => 'El Refugio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63616', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0490', 'name' => 'Cordón del Jilguero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1246', 'name' => 'El Paraíso', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1250', 'name' => 'El Taixte', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1255', 'name' => 'El Volantín', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63617', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1222', 'name' => 'Anastacio Flores', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1223', 'name' => 'Andrés Lamas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1224', 'name' => 'Chimaltita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1229', 'name' => 'El Banco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1237', 'name' => 'El Guajolote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1257', 'name' => 'Huicot (Villa Hermosa)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1270', 'name' => 'La Sanguijuela', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1278', 'name' => 'Las Planillas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1283', 'name' => 'Los Limos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1286', 'name' => 'Los Tepehuanos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63618', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0491', 'name' => 'El Carrizo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0493', 'name' => 'El Naranjo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1230', 'name' => 'El Camichín (La Roblera)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1235', 'name' => 'El Crucero de los Sauces', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1238', 'name' => 'El Guanacaste', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1240', 'name' => 'El Limón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1242', 'name' => 'El Limoncito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1243', 'name' => 'El Manguito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1245', 'name' => 'El Otatillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1247', 'name' => 'El Pino', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1249', 'name' => 'El Sombrero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1259', 'name' => 'Huiscóyotl', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1266', 'name' => 'La Majada del Huanacaxtle', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1269', 'name' => 'La Petaquilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1272', 'name' => 'La Tepamera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1273', 'name' => 'La Trompeta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1274', 'name' => 'La Yerbabuena', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1276', 'name' => 'Las Adjuntas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1277', 'name' => 'Las Majadas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1281', 'name' => 'Los Cimientos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1282', 'name' => 'Los Cuernitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1285', 'name' => 'Los Sauces', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1294', 'name' => 'La Estaca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1295', 'name' => 'Pancho Guardado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1299', 'name' => 'Silvestre Trinidad', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63619', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0492', 'name' => 'Ixcatán del Pozolillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0495', 'name' => 'San Pedro Ixcatán', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '1221', 'name' => 'Presidio de los Reyes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1228', 'name' => 'El Agua Caliente', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1241', 'name' => 'El Limón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1251', 'name' => 'El Tempizque', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1256', 'name' => 'El Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1258', 'name' => 'Huiscóyotl', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1260', 'name' => 'La Ceiba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1262', 'name' => 'La Encinera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1265', 'name' => 'La Loma del Toro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1279', 'name' => 'Los Arrayanes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1280', 'name' => 'Los Cajones', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1291', 'name' => 'Prisciliano Flores', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1296', 'name' => 'René Salas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63620', 'locality' => 'Ruíz', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0791', 'name' => 'Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63622', 'locality' => 'Ruíz', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0792', 'name' => 'Rey Nayar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1186', 'name' => 'El Panteón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1188', 'name' => 'La Redonda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63623', 'locality' => 'Ruíz', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0793', 'name' => 'Talpita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0794', 'name' => 'El Capomal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1187', 'name' => 'Emilio M. González', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63625', 'locality' => 'Ruíz', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0480', 'name' => 'Tijuanita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0795', 'name' => 'San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63626', 'locality' => 'Ruíz', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0796', 'name' => 'Tiro al Blanco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0797', 'name' => 'Cerro de la Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0798', 'name' => 'El Rastro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0799', 'name' => 'Unidad Deportiva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63627', 'locality' => 'Ruíz', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1183', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63628', 'locality' => 'Ruíz', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0800', 'name' => 'Lindavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0801', 'name' => 'Achota', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '010', 'name' => 'Rosamorada', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63630', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0498', 'name' => 'Rosamorada Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '1307', 'name' => 'Agua Caliente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1308', 'name' => 'Las Lajitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1309', 'name' => 'El Rastro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1310', 'name' => 'Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1311', 'name' => 'La Pila', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63633', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0501', 'name' => 'Abelardo L. Rodríguez (Amapa)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0502', 'name' => 'Pescadero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1333', 'name' => 'Francisco Villa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63634', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0497', 'name' => 'Bonita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0503', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0504', 'name' => 'Providencia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0505', 'name' => 'Teponahuaxtla (Huaixta)', 'zone_type' => 'Rural', 'settlementtype_id' => '18','zipcode_id' => $idZip],
                ['key' => '1316', 'name' => 'Cerro Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1317', 'name' => 'Copales', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1321', 'name' => 'Crucero Providencia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1339', 'name' => 'Las Adelitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1340', 'name' => 'Las Anonas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1344', 'name' => 'Los Horcones', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1346', 'name' => 'Los Petates', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1356', 'name' => 'El Camionero [Restaurante]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63635', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0506', 'name' => 'Cofradía de Cuyutlán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0507', 'name' => 'Los Arrayanes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0508', 'name' => 'Paramita', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0509', 'name' => 'San Juan Bautista', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0510', 'name' => 'San Marcos Cuyutlán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1324', 'name' => 'El Cuatante', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1354', 'name' => 'Los Cinco Hermanos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63636', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0512', 'name' => 'Llano del Tigre', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0513', 'name' => 'San Miguelito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63637', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0496', 'name' => 'Chilapa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0514', 'name' => 'Zomatlán del Caimanero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0516', 'name' => 'Colonias 18 de Marzo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1319', 'name' => 'Crucero a Zomatlán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1327', 'name' => 'El Mil', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1336', 'name' => 'Huerta Paula Sojo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63638', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0499', 'name' => 'Minitas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0515', 'name' => 'Las Pilas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1328', 'name' => 'El Potro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1352', 'name' => 'Rancho de Ramón Ibarra', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63640', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0517', 'name' => 'La Boquita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0518', 'name' => 'Los Medina', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0521', 'name' => 'Vicente Guerrero (El Mogote)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1320', 'name' => 'Crucero de los Medina', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1351', 'name' => 'Rancho de Miguel Sosa (Crucero de Pericos)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63643', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0519', 'name' => 'Pericos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63644', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1335', 'name' => 'Los Espejos [Granja Camaronera]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0520', 'name' => 'Pimientillo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1330', 'name' => 'El Chirimoyo [Embarcadero]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1331', 'name' => 'Los Espejos [Embarcadero]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1334', 'name' => 'Francisco Contreras [Granja Camaronera]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63645', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0001', 'name' => '20 noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0524', 'name' => 'San Vicente Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1213', 'name' => '16 de Septiembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1304', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1305', 'name' => 'Obrera CTM', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1306', 'name' => 'Teodoro Estrada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63646', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0525', 'name' => 'La Loma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1326', 'name' => 'El Llanito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63648', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0511', 'name' => 'El Tamarindo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1318', 'name' => 'Crucero a Mexcaltitán (La Siesta)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1323', 'name' => 'El Canal de la Lima', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1342', 'name' => 'Los Cerritos (Loma de los Chivos)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1348', 'name' => 'Los Ramírez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63650', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0527', 'name' => 'San Diego del Naranjo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0532', 'name' => 'Coyotes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1355', 'name' => 'Rancho Miguel Cervantes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63652', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0529', 'name' => 'Santa Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1312', 'name' => 'Agua Aceda', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1337', 'name' => 'La Flecha', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63655', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0530', 'name' => 'Mojocuautla (Adjuntas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0531', 'name' => 'San Juan Corapan', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1350', 'name' => 'Rancho de Agripin Flores', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63656', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0526', 'name' => 'Paso Real del Bejuco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1332', 'name' => 'Estación Chilapa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1353', 'name' => 'Rancho Hermanos Bautista', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63657', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0528', 'name' => 'Rosarito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1314', 'name' => 'Benito Valle (San Miguel)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1322', 'name' => 'El Bálsamo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1341', 'name' => 'Las Conchas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1357', 'name' => 'Rincón de las Cucharas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63658', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0533', 'name' => 'El Ochenta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1325', 'name' => 'Los 5 Puentes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1329', 'name' => 'El Quebrantadero (Hermanos Ibarra)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1343', 'name' => 'Los Cuates', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1345', 'name' => 'Los Leandros', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1347', 'name' => 'Los Pimienta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1349', 'name' => 'Puente el Bejuco (El Capricho)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '004', 'name' => 'Compostela', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63700', 'locality' => 'Compostela', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0539', 'name' => 'Compostela Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63702', 'locality' => 'Compostela', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0019', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0020', 'name' => 'Alto', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '0542', 'name' => 'Miravalles', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0889', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0892', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0893', 'name' => 'Guadalupana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0896', 'name' => 'Lomas de San Cristóbal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0897', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1214', 'name' => 'Lomas Bonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63703', 'locality' => 'Compostela', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0018', 'name' => 'Guayabal', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '0032', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0885', 'name' => 'Aviación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0887', 'name' => 'Del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63704', 'locality' => 'Compostela', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0022', 'name' => 'De Chila', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '0888', 'name' => 'Librado Rivera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0900', 'name' => 'Nueva Galicia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63705', 'locality' => 'Compostela', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0021', 'name' => 'Santa Ana', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '0023', 'name' => 'El Molino', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0890', 'name' => 'Estadios', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0891', 'name' => 'Floresta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0894', 'name' => 'INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0899', 'name' => 'Nueva Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0901', 'name' => 'Subestación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0902', 'name' => 'Tierra y Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1157', 'name' => 'Las Ordeñas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1200', 'name' => 'Los Sauces', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63706', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0003', 'name' => 'El Refilión', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0008', 'name' => 'Las Víboras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0012', 'name' => 'Miravalles', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0544', 'name' => 'Tepiqueños', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63707', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0006', 'name' => 'Jaltepec', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0010', 'name' => 'Mesillas', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0011', 'name' => 'Mezcales', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0013', 'name' => 'Pajaritos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0016', 'name' => 'Vista al Mar (Bellavista)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0017', 'name' => 'Vizcarra', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0540', 'name' => 'Huicicila', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0541', 'name' => 'Cumbres de Huicicila', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63708', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0004', 'name' => 'El Salitre', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0545', 'name' => 'El Paranal (Arocha)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0546', 'name' => 'Coastecomatillo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0554', 'name' => 'Chacala', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0555', 'name' => 'La Cuata', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0556', 'name' => 'Las Piedras', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0558', 'name' => 'Paso de las Palmas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1189', 'name' => 'Palos María', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63709', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0014', 'name' => 'Platanitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0030', 'name' => 'Las Lomitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0548', 'name' => 'Ixtapa de la Concepción', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63710', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0025', 'name' => 'El Cerrito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0026', 'name' => 'San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0027', 'name' => 'La Concepción', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0028', 'name' => 'San Rafael', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0029', 'name' => 'De la Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0549', 'name' => 'Otates y Cantarranas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0550', 'name' => 'Zacualpan', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63713', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0002', 'name' => 'El Palmoso', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63714', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0553', 'name' => 'El Divisadero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0575', 'name' => 'Lima de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63715', 'locality' => 'Las Varas', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0024', 'name' => 'Guadajara', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '0557', 'name' => 'Las Varas Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0859', 'name' => 'Las Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '0860', 'name' => 'Tepeyac', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '0861', 'name' => 'Atenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '0862', 'name' => 'Puerta de Oro', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '0863', 'name' => 'Agua Azul', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '0864', 'name' => 'Celso Hernández', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0865', 'name' => 'Nueva Galicia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0866', 'name' => 'Nueva Era', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0867', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0869', 'name' => 'Niños Héroes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63717', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0001', 'name' => 'Caléxico', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0007', 'name' => 'Las Coloradas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0559', 'name' => 'Mazatán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0560', 'name' => 'Felipe Carrillo Puerto', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0561', 'name' => 'Juan Escutia (Borbollón)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0562', 'name' => 'Zapotán', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63719', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0009', 'name' => 'Mesa del Rodeo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63720', 'locality' => 'La Peñita de Jaltemba', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0577', 'name' => 'La Peñita de Jaltemba Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0903', 'name' => 'Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0904', 'name' => 'Playa Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0905', 'name' => 'Cedros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0906', 'name' => 'Pescadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0907', 'name' => 'Arroyo Zarco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0908', 'name' => 'Miramar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0909', 'name' => 'El Campesino', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0910', 'name' => 'Cerro de La Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0911', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0912', 'name' => 'Isla del Verano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0913', 'name' => 'El Girasol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0915', 'name' => 'Paraíso Escondido', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0917', 'name' => 'Las Cabras', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0978', 'name' => 'La Islita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1082', 'name' => 'Garzas Rosas', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63722', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0005', 'name' => 'El Tamarindo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0015', 'name' => 'Santa María de Jaltemba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0031', 'name' => 'La Cucaracha', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0565', 'name' => 'El Capomo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0566', 'name' => 'Mamey Grande de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0567', 'name' => 'Bella Unión', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0568', 'name' => 'Cándido Salazar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0573', 'name' => 'Altavista', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0574', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0576', 'name' => 'El Tonino', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63723', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0569', 'name' => 'La Puerta de la Lima', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63724', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0570', 'name' => 'Chulavista', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0571', 'name' => 'Úrsulo Galván', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0572', 'name' => 'Villa Morelos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0578', 'name' => 'Monteón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0579', 'name' => 'Rincón de Guayabitos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0583', 'name' => 'Nuevo Ixtlán (Las Cañadas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0980', 'name' => 'Los Ayala', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0981', 'name' => 'La Colmena', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1220', 'name' => 'El Betel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '020', 'name' => 'Bahía de Banderas', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63726', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0004', 'name' => 'El Guamúchil', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63728', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0002', 'name' => 'San Ignacio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0003', 'name' => 'San Quintín', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63729', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0585', 'name' => 'Lo de Marcos', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0596', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63730', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0023', 'name' => 'Las Hachas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0586', 'name' => 'San Juan de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0588', 'name' => 'Valle de Banderas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1034', 'name' => 'Santa Rosa Tapachula', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1051', 'name' => 'El Mirador', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1052', 'name' => 'Ramón Larios', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1205', 'name' => 'Tabacalera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63732', 'locality' => 'Bucerías', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0005', 'name' => 'Colibrí', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0018', 'name' => 'Residencial Los Mangos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0019', 'name' => 'Palma Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0020', 'name' => 'Flamingos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0034', 'name' => 'Villas las Parotas', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0590', 'name' => 'Brisas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0591', 'name' => 'Bucerías Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0592', 'name' => 'Dorada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0595', 'name' => 'Playas de Huanacaxtle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0846', 'name' => 'Lomas Huanacaxtle', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '0847', 'name' => 'Playas del Pacífico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0848', 'name' => 'Loma Bonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0849', 'name' => 'Vista Bahía', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0850', 'name' => 'Francisco Javier Ovando', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0852', 'name' => 'Paraíso del Indio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0853', 'name' => 'La Unidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0855', 'name' => 'Buenos Aires', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0856', 'name' => 'Tule Dorado', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '0858', 'name' => 'Las Palmas', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1087', 'name' => 'La Entrada', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
                ['key' => '1100', 'name' => 'Los Arboles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1128', 'name' => 'Terralta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1192', 'name' => 'La Primavera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63734', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0593', 'name' => 'Corral del Risco (Punta de Mita)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0597', 'name' => 'Sayulita', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0599', 'name' => 'Cruz de Huanacaxtle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0600', 'name' => 'Higuera Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0601', 'name' => 'Punta de Mita', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1160', 'name' => 'José Chávez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1164', 'name' => 'Nueva Era', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1179', 'name' => 'Monte Calvario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63735', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0001', 'name' => 'San Clemente de Lima', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
                ['key' => '0008', 'name' => 'Deportiva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0009', 'name' => 'Paraíso Vallarta', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0010', 'name' => 'Real Nuevo Vallarta', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0011', 'name' => 'La Lomita', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0012', 'name' => 'Lomas del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0014', 'name' => 'Villas Green Canal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0026', 'name' => 'Villas Vallarta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0027', 'name' => 'Puerta del Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0032', 'name' => 'Rinconada de Banderas', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0594', 'name' => 'Nuevo Vallarta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0603', 'name' => 'Las Jarretaderas', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0608', 'name' => 'Mezcales', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '1038', 'name' => 'Costa Coral', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1039', 'name' => 'Valle Dorado', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1048', 'name' => 'Las Ceibas', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1080', 'name' => 'Rincón del Cielo', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1083', 'name' => '13 de Septiembre', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1118', 'name' => 'Villa Esmeralda', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1177', 'name' => 'San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1193', 'name' => 'Los Encantos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1194', 'name' => 'Mezcalitos', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1206', 'name' => 'Altavela', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1219', 'name' => 'Virreyes Vallarta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63736', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0604', 'name' => 'El Colomo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63737', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0006', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0007', 'name' => 'Valle Marlín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0013', 'name' => 'Villas Miramar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0015', 'name' => 'San Vicente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0016', 'name' => 'Los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0017', 'name' => 'Villas de San Vicente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0022', 'name' => 'Tulipanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0024', 'name' => 'Los Palmares San Vicente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0025', 'name' => 'Ex-Hacienda San Ángel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0028', 'name' => 'El Parque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0029', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0030', 'name' => 'Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0031', 'name' => 'Valle Esmeralda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0033', 'name' => 'Jardín las Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0598', 'name' => 'San José del Valle', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0605', 'name' => 'San Vicente', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1035', 'name' => 'Valle de San José', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1036', 'name' => 'Santa Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1053', 'name' => 'Jardines de San José', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1054', 'name' => 'Jardines del Sol', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1086', 'name' => 'Haciendas de San Vicente', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1088', 'name' => 'La Primavera', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1101', 'name' => 'Jardines El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1102', 'name' => 'San Vicente del Mar', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1109', 'name' => 'Del Rastro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1110', 'name' => 'Villas de La Bahía', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1111', 'name' => 'Diana Laura', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1122', 'name' => 'Palma Real', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1145', 'name' => 'El Manglar', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1195', 'name' => 'La Misión', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1201', 'name' => 'La Nueva Aurora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1208', 'name' => 'Bahía de Banderas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1210', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1849', 'name' => 'Azul Turquesa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63738', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0606', 'name' => 'Aguamilpa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0607', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '1180', 'name' => 'Los Mangos', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1209', 'name' => 'Concepción de Valle', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63739', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0021', 'name' => 'El Carrizo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0609', 'name' => 'El Coatante', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0610', 'name' => 'Fortuna de Vallejo (La Gloria)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0611', 'name' => 'Los Sauces', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '012', 'name' => 'San Blas', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63740', 'locality' => 'San Blas', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0614', 'name' => 'San Blas Centro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63742', 'locality' => 'San Blas', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0928', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0929', 'name' => 'Fray Junipero Serra', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0930', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0942', 'name' => 'Gilberto Flores M.', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63743', 'locality' => 'San Blas', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0931', 'name' => 'El Conchal', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0932', 'name' => 'José María Mercado', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0933', 'name' => 'La Vaca y La Higuera', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0934', 'name' => 'Emilio M González', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0935', 'name' => 'Progreso', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0936', 'name' => 'La Playa del Borrego', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0941', 'name' => 'H. Batallón', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0946', 'name' => 'Palmar de los Cocos', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0947', 'name' => 'El Cerrito', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63744', 'locality' => 'San Blas', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0003', 'name' => 'Colonia La Marinera', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0937', 'name' => 'La Playita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0938', 'name' => 'El Guayabal', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0939', 'name' => '10 de Mayo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0943', 'name' => 'Barrio Chino', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0944', 'name' => 'Gómez Reyes', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0945', 'name' => 'Zona Portuaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63745', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0617', 'name' => 'José María Mercado', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0613', 'name' => 'Chacalilla', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0615', 'name' => 'Singaita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63750', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0618', 'name' => 'Aután', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63751', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0612', 'name' => 'Laureles y Góngora (El Ciruelo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0619', 'name' => 'Laureles y Góngora (El Limón)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0620', 'name' => 'El Madrigaleño', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0621', 'name' => 'La Culebra', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0622', 'name' => 'La Goma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0623', 'name' => 'Playa de Ramírez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0624', 'name' => 'Isla del Conde', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63753', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0625', 'name' => 'El Carleño', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63754', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0626', 'name' => 'Pimientillo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63755', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0627', 'name' => 'Boca del Asadero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63756', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0630', 'name' => 'La Chiripa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63757', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0628', 'name' => 'El Capomo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63758', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0004', 'name' => 'Felipe Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0629', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63760', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0633', 'name' => 'Reforma Agraria (La Colorada)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63762', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0634', 'name' => 'Huaristemba', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63763', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0635', 'name' => 'Huaynamota', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63764', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0632', 'name' => 'Navarrete', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0636', 'name' => 'La Chiltera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0637', 'name' => 'Las Palmas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63765', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0001', 'name' => 'El Tepeyac (Cofradía)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0638', 'name' => 'El Tepeyac', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0639', 'name' => 'La Libertad', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0640', 'name' => 'Pintadeño', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63766', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0641', 'name' => 'Mecatán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63770', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0643', 'name' => 'Jalcocotán', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63771', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0002', 'name' => 'Residencial Playa Los Cocos', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0644', 'name' => 'Playa de los Cocos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63772', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0645', 'name' => 'Santa Cruz de Miramar', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63773', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0646', 'name' => 'El Cora', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63774', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0647', 'name' => 'La Bajada', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63775', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0648', 'name' => 'La Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63776', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0649', 'name' => 'Aticama', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0783', 'name' => 'Matanchén (La Aguada)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63777', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0650', 'name' => 'Tecuitata', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0651', 'name' => 'El Espino', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0652', 'name' => 'El Llano', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0653', 'name' => 'Jolotemba', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63779', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0655', 'name' => 'Aserradero', 'zone_type' => 'Rural', 'settlementtype_id' => '3','zipcode_id' => $idZip],
                ['key' => '0656', 'name' => 'CICA (Bugambilias)', 'zone_type' => 'Rural', 'settlementtype_id' => '3','zipcode_id' => $idZip],
                ['key' => '0657', 'name' => 'Camarón', 'zone_type' => 'Rural', 'settlementtype_id' => '3','zipcode_id' => $idZip],
                ['key' => '0658', 'name' => 'Hospital (Veinte de Noviembre)', 'zone_type' => 'Rural', 'settlementtype_id' => '3','zipcode_id' => $idZip],
                ['key' => '0659', 'name' => 'Laguna del Toro', 'zone_type' => 'Rural', 'settlementtype_id' => '3','zipcode_id' => $idZip],
                ['key' => '0660', 'name' => 'Morelos', 'zone_type' => 'Rural', 'settlementtype_id' => '3','zipcode_id' => $idZip],
                ['key' => '0661', 'name' => 'Nayarit', 'zone_type' => 'Rural', 'settlementtype_id' => '3','zipcode_id' => $idZip],
                ['key' => '0662', 'name' => 'San Juan Papelillo', 'zone_type' => 'Rural', 'settlementtype_id' => '3','zipcode_id' => $idZip],
                ['key' => '0663', 'name' => 'Rehilete', 'zone_type' => 'Rural', 'settlementtype_id' => '3','zipcode_id' => $idZip],
                ['key' => '0664', 'name' => 'Zacatal', 'zone_type' => 'Rural', 'settlementtype_id' => '3','zipcode_id' => $idZip],
                ['key' => '0665', 'name' => 'Puerto Balleto (Isla María Madre)', 'zone_type' => 'Rural', 'settlementtype_id' => '20','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '008', 'name' => 'Xalisco', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63780', 'locality' => 'Xalisco', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0003', 'name' => 'Lomas Xalisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0667', 'name' => 'Xalisco Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1011', 'name' => 'Canoas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63782', 'locality' => 'Xalisco', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0002', 'name' => 'Alborada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0005', 'name' => 'Salvador Sánchez Vázquez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0803', 'name' => 'Nuevo Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0804', 'name' => 'Huertas de Matatipal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0805', 'name' => 'Ampliación Nuevo Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0806', 'name' => 'Lomas del Nayar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1171', 'name' => 'Las Águilas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63783', 'locality' => 'Xalisco', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1012', 'name' => 'Puerta del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1013', 'name' => 'José Santos Godínez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1014', 'name' => '1ro. de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1155', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1172', 'name' => 'SUTSEM Landereñas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1173', 'name' => 'Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1191', 'name' => 'Valle de Roma', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63784', 'locality' => 'Xalisco', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0807', 'name' => 'Ramos Millán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0808', 'name' => 'Jardines de Matatipac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1015', 'name' => '25 de Abril', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1016', 'name' => 'Landereñas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1165', 'name' => 'Los Cordoncillos II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1166', 'name' => 'El Navarreño II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1167', 'name' => 'Pueblo Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63785', 'locality' => 'Xalisco', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0001', 'name' => 'Puerta Luna', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0014', 'name' => 'Xalisca Residencial Los Laureles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0809', 'name' => 'Ejidal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0811', 'name' => 'Navarreño', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1303', 'name' => 'Hacienda Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63786', 'locality' => 'Xalisco', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0017', 'name' => 'Fernando Carrillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0812', 'name' => 'La Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0813', 'name' => '24 de Febrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63787', 'locality' => 'Xalisco', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0004', 'name' => 'Vicente Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0006', 'name' => 'Nahil', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0007', 'name' => 'Kiekari', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0008', 'name' => 'Las Rosas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0009', 'name' => 'Colinas de San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0010', 'name' => 'Nuevo México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0016', 'name' => 'Real del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0814', 'name' => 'Villas de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1009', 'name' => 'Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1010', 'name' => 'Lomas Verdes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1127', 'name' => 'Ampliación Xalisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1159', 'name' => 'Tanuz', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1168', 'name' => 'El Indio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1169', 'name' => 'Las Isabeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1170', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1202', 'name' => 'Colinas de Xalisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '1361', 'name' => 'Minas de Xalli', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63788', 'locality' => 'Xalisco', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0015', 'name' => 'Palomas Doradas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63790', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0011', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0676', 'name' => 'El Malinal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63792', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0018', 'name' => 'Valles del Nayar', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0674', 'name' => 'Pantanal', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63793', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0012', 'name' => 'El Carrizal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0680', 'name' => 'Adolfo López Mateos (Las Veredas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0681', 'name' => 'Cofradía de Chocolón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63794', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0666', 'name' => 'Emiliano Zapata (Majadas)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0668', 'name' => 'Aquiles Serdán', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0669', 'name' => 'Testerazo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0679', 'name' => 'San José de Costilla (Estación Costilla)', 'zone_type' => 'Rural', 'settlementtype_id' => '27','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63795', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0013', 'name' => 'Los Fortines', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0678', 'name' => 'Trigomil', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0682', 'name' => 'La Curva', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63797', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0670', 'name' => 'El Cuarenteño', 'zone_type' => 'Rural', 'settlementtype_id' => '15','zipcode_id' => $idZip],
                ['key' => '0671', 'name' => 'Palapita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0683', 'name' => 'El Tepozal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63799', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0673', 'name' => 'Tepic (Poeta Amado Nervo)', 'zone_type' => 'Rural', 'settlementtype_id' => '1','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '013', 'name' => 'San Pedro Lagunillas', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63800', 'locality' => 'San Pedro Lagunillas', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0815', 'name' => 'San Pedro Lagunillas Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0816', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0817', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63804', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0687', 'name' => 'Milpillas Bajas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63809', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0688', 'name' => 'Tepetiltic', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63810', 'locality' => 'San Pedro Lagunillas', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0689', 'name' => 'Amado Nervo (El Conde)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0690', 'name' => 'Cuastecomate', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0691', 'name' => 'Tequilita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63820', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0001', 'name' => 'Puerta del Río', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0692', 'name' => 'Las Guásimas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63826', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0693', 'name' => 'Cerro Pelón', 'zone_type' => 'Rural', 'settlementtype_id' => '27','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '014', 'name' => 'Santa María del Oro', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63830', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0003', 'name' => 'Buenavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0696', 'name' => 'Santa María del Oro', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '1007', 'name' => 'Del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63833', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0697', 'name' => 'Zapotanito', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63834', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0700', 'name' => 'El Limón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0716', 'name' => 'Cerro Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63835', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0695', 'name' => 'San Leonel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0701', 'name' => 'La Labor', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63836', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0702', 'name' => 'El Ermitaño', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63837', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0699', 'name' => 'La Galinda', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0703', 'name' => 'El Mirador', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63840', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0705', 'name' => 'San José de Mojarras', 'zone_type' => 'Rural', 'settlementtype_id' => '15','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63843', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0706', 'name' => 'Moderna', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0708', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63844', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0707', 'name' => 'Buckingham', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0710', 'name' => 'Las Cuevas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63845', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0709', 'name' => 'El Guanacaste', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63850', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0001', 'name' => 'Los Horcones', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0711', 'name' => 'Tequepexpan', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63853', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0712', 'name' => 'La Estanzuela', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63854', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0713', 'name' => 'El Caracol', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '1129', 'name' => 'Los Guajes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63856', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0002', 'name' => 'Real de Acuitapilco (Esteban Baca Calderón)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63865', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0715', 'name' => 'La Laguna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63866', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0718', 'name' => 'Rincón de Calimayo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63867', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0717', 'name' => 'El Buruato', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63870', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0719', 'name' => 'El Ahualamo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0720', 'name' => 'Chapalilla', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0721', 'name' => 'Las Mesitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0722', 'name' => 'El Torreón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63874', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0723', 'name' => 'El Ocotillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '007', 'name' => 'Jala', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63880', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0002', 'name' => 'San Juan de Dios', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0003', 'name' => 'San Pedro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0011', 'name' => 'San Andrés', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0732', 'name' => 'Jomulco', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0819', 'name' => 'El Naranjo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1017', 'name' => 'Severiano López', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1158', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63883', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0004', 'name' => 'Los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0005', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0822', 'name' => 'Jardines del Llano', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63885', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0001', 'name' => 'Los Ramírez', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0727', 'name' => 'San Miguel de Buenavista', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0730', 'name' => 'Los Aguajes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0731', 'name' => 'Rosa Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '1019', 'name' => 'Pueblo Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63886', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0725', 'name' => 'Cofradía de Juanacatlán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0728', 'name' => 'Francisco I. Madero (La Bolsa)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63887', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1203', 'name' => 'Jalpa Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63890', 'locality' => 'Jala', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0007', 'name' => 'San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0008', 'name' => 'Ricardo Flores Magón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0726', 'name' => 'Jala Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0820', 'name' => 'Juan Escutia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1006', 'name' => 'San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63893', 'locality' => 'Jala', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0006', 'name' => 'Jardines del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0009', 'name' => 'Epifanio Gómez Magañez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0821', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63894', 'locality' => 'Jala', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0823', 'name' => 'Lucio Cabañas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0826', 'name' => 'La Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0827', 'name' => 'Merced Ibarra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63895', 'locality' => 'Jala', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0010', 'name' => 'La Natividad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0824', 'name' => 'La Quinta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0825', 'name' => 'El Tucán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63897', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0734', 'name' => 'Coapan', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63899', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0733', 'name' => 'Santa Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '002', 'name' => 'Ahuacatlán', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63905', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0006', 'name' => 'Copales', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0008', 'name' => 'Crucero Heriberto Jara', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
                ['key' => '0742', 'name' => 'Heriberto Jara (La Haciendita)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63910', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0743', 'name' => 'Tetitlán', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '1216', 'name' => 'Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63911', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0744', 'name' => 'Estación Valle Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63913', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0007', 'name' => 'Crucero de Marquezado', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
                ['key' => '0737', 'name' => 'Marquezado', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63914', 'locality' => 'Ahuacatlán', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0746', 'name' => 'Uzeta', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63915', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0745', 'name' => 'Santa Isabel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63920', 'locality' => 'Ahuacatlán', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0828', 'name' => 'Ahuacatlán Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63923', 'locality' => 'Ahuacatlán', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0001', 'name' => 'La Otra Banda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0829', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63925', 'locality' => 'Ahuacatlán', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0002', 'name' => 'La Presa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0830', 'name' => 'El Cerrito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1099', 'name' => 'Las Huertas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63927', 'locality' => 'Ahuacatlán', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0003', 'name' => 'El Salto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0004', 'name' => 'El Chiquiliqui', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0010', 'name' => 'Villas del Carmen', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0831', 'name' => 'Prisciliano Sanchez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0832', 'name' => 'Demetrio Vallejo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63928', 'locality' => 'Ahuacatlán', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0009', 'name' => 'Emillio M González', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0833', 'name' => '8 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1359', 'name' => 'El Llano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63930', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0748', 'name' => 'Santa Cruz de Camotlán', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63935', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0749', 'name' => 'Las Guásimas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63938', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0750', 'name' => 'Las Palmas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63900', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0005', 'name' => 'Amequita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0736', 'name' => 'La Ciénega', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0739', 'name' => 'Zoatlán (San Francisco de Zoatlán)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63904', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0741', 'name' => 'La Campana', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '006', 'name' => 'Ixtlán del Río', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63940', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0755', 'name' => 'Mexpan', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63944', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0751', 'name' => 'El Terrero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0754', 'name' => 'La Sidra', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0756', 'name' => 'San José de Gracia', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0757', 'name' => 'San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0759', 'name' => 'San Clemente', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0761', 'name' => 'Ranchos de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63945', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1090', 'name' => 'Milpillas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63946', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0753', 'name' => 'La Haciendita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63947', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0001', 'name' => 'El Aguacate', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0002', 'name' => 'El Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0003', 'name' => 'Los Sauces', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0760', 'name' => 'Cacalután', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0762', 'name' => 'La Higuerita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0763', 'name' => 'Los Mezquites', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63950', 'locality' => 'Ixtlán del Río', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1130', 'name' => 'Ixtlán del Río Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63953', 'locality' => 'Ixtlán del Río', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1132', 'name' => 'La Huerta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1133', 'name' => 'Las Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63954', 'locality' => 'Ixtlán del Río', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0004', 'name' => 'Los Toriles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
                ['key' => '0835', 'name' => 'Esteban Baca Calderón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0836', 'name' => 'Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0998', 'name' => 'Juan Zamora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1085', 'name' => 'De Los Indios', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
                ['key' => '1131', 'name' => '10 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1139', 'name' => 'López Portillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1140', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1141', 'name' => 'Cristo Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63955', 'locality' => 'Ixtlán del Río', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1137', 'name' => 'Emilio M. González', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1138', 'name' => 'Carmen Romano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63956', 'locality' => 'Ixtlán del Río', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '1134', 'name' => 'Las 7 Esquinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1135', 'name' => 'Barrio Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1136', 'name' => 'Los Leones', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63957', 'locality' => 'Ixtlán del Río', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0837', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0838', 'name' => 'Amado Nervo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63958', 'locality' => 'Ixtlán del Río', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0839', 'name' => 'Moderna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0840', 'name' => 'El Pinar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0841', 'name' => 'Revolución', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1142', 'name' => 'Fátima', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63959', 'locality' => 'Ixtlán del Río', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0842', 'name' => 'Everardo Peña Navarro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0843', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0844', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0845', 'name' => 'Santo Santiago', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1000', 'name' => 'Eulogio Parra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1001', 'name' => 'Ernesto Che Guevara', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1002', 'name' => 'Juan Escutia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1143', 'name' => 'Los Arcos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '1144', 'name' => 'Adoberas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
            ]);
        
        
        $idMun = DB::table('municipalities')->insertGetId(['key' => '003', 'name' => 'Amatlán de Cañas', 'federal_entity_id' => $idFed]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63960', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0003', 'name' => 'Pueblo Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0004', 'name' => 'Ruben Martín Atalay', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0005', 'name' => 'Loma Linda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0764', 'name' => 'Amatlán de Cañas', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63963', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0001', 'name' => 'La Otra Banda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
                ['key' => '0002', 'name' => 'Colinas del Nayar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63967', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0007', 'name' => 'Las Hembrillas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0010', 'name' => 'La Máquina', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0768', 'name' => 'El Copalillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0769', 'name' => 'Pie de la Cuesta', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
                ['key' => '0770', 'name' => 'La Yerbabuena', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0771', 'name' => 'La Escondida (Agua Escondida)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63968', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0015', 'name' => 'El Naranjo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0767', 'name' => 'San Blasito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0780', 'name' => 'El Farito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63969', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0009', 'name' => 'La Lima', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0014', 'name' => 'El Platanar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0765', 'name' => 'Jesús María', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63970', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0772', 'name' => 'Barranca del Oro', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63973', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0006', 'name' => 'Las Anonas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0016', 'name' => 'El Ombligo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0774', 'name' => 'El Pilón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63974', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0012', 'name' => 'Nuevo México', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0013', 'name' => 'Potrerillos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0773', 'name' => 'Los Cerritos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0775', 'name' => 'San Valentín', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63975', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0008', 'name' => 'El Portezuelo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0776', 'name' => 'Los Agrios', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
                ['key' => '0777', 'name' => 'Mezquites', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63980', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0778', 'name' => 'El Rosario', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63985', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0779', 'name' => 'Tepuzhuacán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63990', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0781', 'name' => 'Estancia de los López', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
            ]);
        
        $idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '63996', 'locality' => '', 'municipality_id' => $idMun]);
        
            DB::table('settlements')->insert([
                ['key' => '0011', 'name' => 'El Zopilote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
                ['key' => '0017', 'name' => 'El Carrizo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
            ]);
        
        
        
        
    }
}
