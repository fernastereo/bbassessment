<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomSeeder25 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idFed = DB::table('federal_entities')->insertGetId(['key' => '25', 'name' => 'Sinaloa', 'code' => '']);

$idMun = DB::table('municipalities')->insertGetId(['key' => '006', 'name' => 'Culiacán', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80000', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0525', 'name' => 'Centro Sinaloa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80010', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'Ignacio Allende', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0012', 'name' => '6 de Enero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0013', 'name' => 'Vicente Lombardo Toledano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'Villa Universidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2023', 'name' => 'Fresnos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2808', 'name' => 'Espacios Marsella', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80013', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'Ciudad Universitaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
		['key' => '0017', 'name' => 'Obrero Campesino', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Universitaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80014', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0019', 'name' => 'Agrarista Mexicana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'Buena Vista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'Rosario Uzarraga', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0045', 'name' => 'Zona Dorada II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0280', 'name' => 'Valle del Agua', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0287', 'name' => 'Amorada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0295', 'name' => 'Sfera Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0299', 'name' => 'Portabelo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0303', 'name' => 'Albaterra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0319', 'name' => 'Benevento Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0544', 'name' => 'Lomas de Tamazula', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1345', 'name' => 'Los Angeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1346', 'name' => 'Nueva Galaxia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2155', 'name' => 'Floresta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2320', 'name' => 'Las Glorias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2809', 'name' => 'Maralago', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2994', 'name' => 'Zona Dorada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80015', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Lomas de San Jerónimo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0024', 'name' => 'Ruben Jaramillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0025', 'name' => 'Solidaridad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0026', 'name' => 'Villa Del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0545', 'name' => 'Lomas Del Magisterio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1341', 'name' => 'Grecia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2047', 'name' => 'Residencial Hacienda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80016', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0028', 'name' => '16 de Septiembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0029', 'name' => 'Juan de Dios Bátiz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0030', 'name' => 'Lomas Del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0031', 'name' => 'Lomas del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0517', 'name' => 'Las Américas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2156', 'name' => 'Lomas del Sol Duplex', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2960', 'name' => 'Interlomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80017', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0034', 'name' => 'El Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0035', 'name' => 'Jesús Valdez Aldana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0036', 'name' => 'Montesierra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80018', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0037', 'name' => 'Las Cucas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0038', 'name' => 'Los Alamitos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2035', 'name' => 'Lirios del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2150', 'name' => 'Bosques Del Álamo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80019', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Los Ciruelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'Hacienda Alameda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0039', 'name' => 'Loma de Rodriguera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0040', 'name' => 'Los Mezcales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0268', 'name' => 'Hacienda los Huertos Sección Bosques de la Colina', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0308', 'name' => 'Las Cerezas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0323', 'name' => 'Mont Alto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0379', 'name' => 'Bicentenario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0387', 'name' => 'Las Amapas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0515', 'name' => 'Alameda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0547', 'name' => 'Los Huertos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1340', 'name' => 'Girasoles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1343', 'name' => 'Jardines de La Sierra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1347', 'name' => 'Paseo Alameda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2311', 'name' => 'Hacienda Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2811', 'name' => 'Rotarismo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2812', 'name' => 'Hacienda Los Huertos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3039', 'name' => 'San Fermín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80020', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0041', 'name' => 'FOVISSSTE Diamante', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0042', 'name' => 'Humaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0043', 'name' => 'INFONAVIT Humaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0044', 'name' => 'STASE', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0365', 'name' => 'Torres del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '5','zipcode_id' => $idZip],
		['key' => '1351', 'name' => 'Tres Ríos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2024', 'name' => 'STASE III', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2151', 'name' => 'Privada La Rivera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2152', 'name' => 'Bonanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2153', 'name' => 'Pueblo Bonito', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80025', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0015', 'name' => 'Villa del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0047', 'name' => 'Brisas de Humaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0048', 'name' => 'Los Olivos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0049', 'name' => 'Nueva Vizcaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0050', 'name' => 'STASE II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0106', 'name' => 'Bosques del Humaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0267', 'name' => 'Colinas de la Rivera Segunda Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0277', 'name' => 'Jardines del Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1358', 'name' => 'Riberas del Humaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2031', 'name' => 'Jardines Del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2097', 'name' => 'Colinas de La Rivera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2202', 'name' => 'Las Canarias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2522', 'name' => 'Villas del Humaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2820', 'name' => 'Alegranza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2821', 'name' => 'La Ribera Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2822', 'name' => 'Humaya del Super', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80026', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0051', 'name' => 'ISSSTESIN', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80027', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0052', 'name' => 'Cuauhtémoc', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0053', 'name' => 'Campestre Los Laureles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0054', 'name' => 'Lago Tres Ríos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0285', 'name' => 'Altamira', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0310', 'name' => 'Altamira Sección Altana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0311', 'name' => 'Altamira Sección Barceló', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2105', 'name' => 'Los Almendros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80028', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1355', 'name' => 'Lomas Verdes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1357', 'name' => 'Rincón Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2524', 'name' => 'Privada La Rinconada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2823', 'name' => 'Villas de Culiacán', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2829', 'name' => 'Campestre Tres Ríos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3137', 'name' => 'Portanova', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0055', 'name' => 'Agustina Ramirez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0057', 'name' => 'Los Sauces', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0058', 'name' => 'Santa Elena', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0059', 'name' => 'Tulipanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0060', 'name' => 'Villa Fontana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0282', 'name' => 'Portafe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0519', 'name' => 'Balcones Del Humaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0538', 'name' => 'La Puerta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1353', 'name' => 'La Cascada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80029', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Fincas del Humaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0061', 'name' => 'Colinas del Humaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0062', 'name' => '10 de Abril', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0063', 'name' => 'FOVISSSTE Humaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0064', 'name' => 'Pedregal del Humaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0116', 'name' => 'Real de Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0175', 'name' => 'Cimas del Humaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0493', 'name' => 'Joel Ramírez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0534', 'name' => 'Heraclio Bernal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0567', 'name' => 'Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1354', 'name' => 'Lomas Del Humaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2511', 'name' => 'Sección Cumbres', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2704', 'name' => 'Jardines de Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2705', 'name' => 'Santa Fe Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2825', 'name' => 'Campestre San Jorge', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2982', 'name' => 'Cumbre Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2996', 'name' => 'Los Cerritos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2997', 'name' => 'Santa Rosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3198', 'name' => 'Bosque Encinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80030', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0065', 'name' => 'Burócrata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0066', 'name' => 'Gabriel Leyva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0067', 'name' => 'Tierra Blanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2284', 'name' => 'Portales del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2285', 'name' => 'Privada La Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2318', 'name' => 'Riverside', 'zone_type' => 'Urbano', 'settlementtype_id' => '5','zipcode_id' => $idZip],
		['key' => '2319', 'name' => 'Parque Alameda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80034', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1337', 'name' => 'Comunicadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2715', 'name' => 'Los Olivos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2728', 'name' => 'Los Cisnes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2813', 'name' => 'Rincón Alameda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80040', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0068', 'name' => 'FOVISSSTE Abelardo de La Torre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0069', 'name' => 'Chapultepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0070', 'name' => 'La Lima', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0071', 'name' => 'Santa Margarita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1338', 'name' => 'Chapultepec Del Rio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1348', 'name' => 'Paseo Del Rio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1349', 'name' => 'Privada Del Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1350', 'name' => 'Riberas de Tamazula', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2225', 'name' => 'Santa Teresa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2810', 'name' => 'Real de Chapultepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80050', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0072', 'name' => 'Hermanos Flores Magón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0073', 'name' => 'Juntas de Humaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0074', 'name' => 'Villas Del Rio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0176', 'name' => 'La Rioja', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0283', 'name' => 'Culiacán Tres Ríos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0313', 'name' => 'Villas de Bacurimí Sección Acacia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0320', 'name' => 'Villas de Bacurimí Sección Britania', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2048', 'name' => 'Country del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2103', 'name' => 'Valle Del Rio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2268', 'name' => 'Villas Del Rio Elite', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2321', 'name' => 'Valle Alto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2815', 'name' => 'Stanza Toscana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2817', 'name' => 'Enrique Félix Castro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3038', 'name' => 'Avellaneda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3191', 'name' => 'Prados de Occidente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80054', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0075', 'name' => '4 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0076', 'name' => 'Horizontes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1356', 'name' => 'Parque Industrial CANACINTRA I', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2098', 'name' => 'Montecarlo Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2510', 'name' => 'Misiones', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2818', 'name' => 'Del Humaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80055', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1359', 'name' => 'Universidad 94 II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80058', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0078', 'name' => 'Pradera Dorada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0079', 'name' => 'Rincón Del Humaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0080', 'name' => 'INFONAVIT Solidaridad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0081', 'name' => 'Universidad 94', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0291', 'name' => 'Stanza Castilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0307', 'name' => 'Conquista del Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0317', 'name' => 'Granada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0321', 'name' => 'Bosques del Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0352', 'name' => 'Montereal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0562', 'name' => 'San Florencio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1360', 'name' => 'Villas Santa Anita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1361', 'name' => 'Villas San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1362', 'name' => 'Villas Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2030', 'name' => 'La Conquista', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2033', 'name' => 'INFONAVIT FTS', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2099', 'name' => 'Praderas Del Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2100', 'name' => 'Rancho Contento', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2102', 'name' => 'Santa Aynes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2104', 'name' => 'Valle Dorado', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2148', 'name' => 'Acueducto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2323', 'name' => 'Pedregal de San Angel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2513', 'name' => 'Azaleas Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2655', 'name' => 'Rincón Colonial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2731', 'name' => 'Prados de La Conquista', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2748', 'name' => 'Valencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2750', 'name' => 'Diamante', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2814', 'name' => 'Pradera Dorada II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2826', 'name' => '9 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2827', 'name' => 'Altos Bacurimi', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2828', 'name' => 'Villa del Cedro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3037', 'name' => 'Bonaterra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3094', 'name' => 'Portalegre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3116', 'name' => 'Urbivilla del Prado', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3117', 'name' => 'Acueducto III', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80059', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0082', 'name' => 'CANACO', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0301', 'name' => 'Barcelona Sección Villa Barcelona', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0322', 'name' => 'Barcelona Sección Villa Barcelona Etapa II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2745', 'name' => 'Espacios Barcelona', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2824', 'name' => 'Praderas del Humaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80060', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0083', 'name' => 'La Campiña', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0084', 'name' => 'Las Quintas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0086', 'name' => 'Aurora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0087', 'name' => 'Periodista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80063', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2021', 'name' => 'Viñedos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2670', 'name' => 'Amapas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2696', 'name' => 'Quinta Americana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2697', 'name' => 'Los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80064', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0085', 'name' => 'Limita de Hitaje', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0312', 'name' => 'Massara', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1342', 'name' => 'Haciendas del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3138', 'name' => 'Verona', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80065', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0318', 'name' => 'Pontevedra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2503', 'name' => 'Músala Isla Bonita', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2504', 'name' => 'Banus', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2505', 'name' => 'Banus 360', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80070', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0088', 'name' => 'Vicente Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80080', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0089', 'name' => 'El Barrio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0090', 'name' => 'INFONAVIT El Barrio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0091', 'name' => 'Genaro Estrada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0309', 'name' => 'Punto Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80088', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0092', 'name' => 'Villa Satélite', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80090', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0093', 'name' => 'Las Vegas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0094', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80093', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2961', 'name' => 'Novena Zona Militar', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80100', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0095', 'name' => 'Los Álamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0096', 'name' => 'Portales Del Country', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0304', 'name' => 'Jardines Tres Ríos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0353', 'name' => 'Privanzas Natura', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1366', 'name' => 'Country Álamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2184', 'name' => 'San Ángel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2196', 'name' => 'Puerta de Hierro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2197', 'name' => 'Los Patios 1', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2198', 'name' => 'Las Moras', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2199', 'name' => 'Las Dunas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2200', 'name' => 'Condesa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2733', 'name' => 'Real del Álamo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2737', 'name' => 'Residencial San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2746', 'name' => 'Misión del Álamo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2837', 'name' => 'Privanzas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2838', 'name' => 'La Paloma', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2839', 'name' => 'Magnolias Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2840', 'name' => 'Santa Inés', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2950', 'name' => 'Los Patios 2', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80103', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0100', 'name' => 'Unidad de Servicios Educativos A Descentralizar', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80104', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0101', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0102', 'name' => 'Real Del Country', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0316', 'name' => 'Floresta Tres Ríos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2046', 'name' => 'Tabachines', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2716', 'name' => 'Palermo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80105', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0097', 'name' => 'Recursos Hidráulicos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2962', 'name' => 'Vallado Viejo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80106', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2390', 'name' => 'Central Internacional Milenium', 'zone_type' => 'Urbano', 'settlementtype_id' => '26','zipcode_id' => $idZip],
		['key' => '2755', 'name' => 'La Cantera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80107', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2717', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2841', 'name' => 'Country Courts', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3092', 'name' => 'Country Tres Ríos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80109', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2389', 'name' => 'Unidad de Servicios Estatales', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80110', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0103', 'name' => 'El Vallado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0104', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0105', 'name' => 'Lomas del Boulevard', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80120', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0107', 'name' => 'Industrial Bravo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0108', 'name' => 'Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80128', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0109', 'name' => 'Los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80130', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0111', 'name' => 'Aeropuerto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1384', 'name' => 'Altos de Bachigualato', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1386', 'name' => 'Bachigualato', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '2507', 'name' => 'Los Helechos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2671', 'name' => 'Villa Andalucía', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80135', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1387', 'name' => 'Nuevo Bachigualato', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1390', 'name' => 'San Javier', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1392', 'name' => 'Santa Rocio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2288', 'name' => 'Joyas del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2848', 'name' => 'Hacienda San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3062', 'name' => 'Villas del Campo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80139', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0112', 'name' => 'Culiacán (Culiacán)', 'zone_type' => 'Urbano', 'settlementtype_id' => '1','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80140', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0113', 'name' => 'Bachigualato', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1385', 'name' => 'Campo Bello', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1393', 'name' => 'Villas de Cortés', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1394', 'name' => 'Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1395', 'name' => 'San Diego', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2165', 'name' => 'Las Mañanitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2166', 'name' => 'San Luis Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2167', 'name' => 'Villas Del Manantial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2170', 'name' => 'Danubio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2192', 'name' => 'Las Terrazas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2252', 'name' => 'Valle Bonito', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2722', 'name' => 'Las Alondras', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2846', 'name' => 'Real San Ángel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3063', 'name' => 'Paseos del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3196', 'name' => 'San Luis Residencial II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80143', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0114', 'name' => 'Terranova', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0324', 'name' => 'Parque Industrial La Costa', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '1388', 'name' => 'Privadas la Estancia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1391', 'name' => 'Santa Bárbara', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2168', 'name' => 'Valles Del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2253', 'name' => 'San Fernando', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2847', 'name' => 'Real San Sebastián', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80144', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0115', 'name' => 'Torres Aeropuerto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80145', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0278', 'name' => 'Parque Industrial Orión', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '0298', 'name' => 'Stanza Solare', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0314', 'name' => 'Roma Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2041', 'name' => 'Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2164', 'name' => 'Hacienda de La Mora', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2500', 'name' => 'Privada Real del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2653', 'name' => 'Versalles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2754', 'name' => 'Valles Españoles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2845', 'name' => 'Torre Dorada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3036', 'name' => 'Residencial Santa Sofía', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80150', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0118', 'name' => 'San Rafael', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1374', 'name' => 'Parque Industrial CANACINTRA II', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2654', 'name' => 'Palmillas Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2739', 'name' => 'Rincón Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2747', 'name' => 'Palma Dorada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2842', 'name' => 'Rincón San Rafael', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80155', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0119', 'name' => 'Rincón del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1370', 'name' => 'Fuentes Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2161', 'name' => 'Hacienda Molino de Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80159', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0120', 'name' => 'INFONAVIT Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0121', 'name' => 'Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0122', 'name' => 'Villa Contenta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2751', 'name' => 'Villa Serena', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80160', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0123', 'name' => 'Industrial El Palmito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0124', 'name' => 'Salvador Alvarado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80170', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0125', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0126', 'name' => 'Nuevo Culiacán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0127', 'name' => 'Virreyes SC', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2032', 'name' => 'ISSSTE Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80176', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0128', 'name' => 'Balcones de San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0129', 'name' => 'Colinas Del Parque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80177', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2836', 'name' => 'Alteza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0130', 'name' => 'Loma Linda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2034', 'name' => 'Colina del Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2160', 'name' => 'Privada Del Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2307', 'name' => 'Misión San Fernando', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2835', 'name' => 'La Cúspide', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80178', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0131', 'name' => 'Cañadas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0132', 'name' => 'Las Palomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0133', 'name' => 'San Carlos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2738', 'name' => 'Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80179', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0134', 'name' => 'INFONAVIT Cañadas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0135', 'name' => 'Lomas del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0136', 'name' => 'La Ventana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80180', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0138', 'name' => 'Gustavo Díaz Ordaz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0139', 'name' => 'Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0140', 'name' => 'Loma Bonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0141', 'name' => 'Paseo de los Arcos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0142', 'name' => 'PEMEX', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0288', 'name' => 'Paseos del Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1372', 'name' => 'Los Girasoles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1373', 'name' => 'Los Portales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1382', 'name' => 'Santa Clara', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2963', 'name' => 'Parque Industrial Nueva Estación', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80184', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0143', 'name' => 'Balcones Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0144', 'name' => 'INFONAVIT Barrancos II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0145', 'name' => 'INFONAVIT Barrancos III', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0146', 'name' => 'INFONAVIT Barrancos IV', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0147', 'name' => 'Casas Lindas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0148', 'name' => 'San Agustin', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0149', 'name' => 'Villa Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0150', 'name' => 'Vinoramas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0290', 'name' => 'Mont Blanc', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0292', 'name' => 'Dos Puntas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0302', 'name' => 'Belcantto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1365', 'name' => 'Centenario', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1368', 'name' => 'Del Camino', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1380', 'name' => 'San Cipriano', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1381', 'name' => 'San Sebastián', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2019', 'name' => 'Santa Susana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2022', 'name' => 'Villa Dorada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2159', 'name' => 'Rincón Santa Rosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2523', 'name' => 'Casa Blanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2707', 'name' => 'Villa del Roble', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80189', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0152', 'name' => 'INFONAVIT Barrancos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0153', 'name' => 'Jardines Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0154', 'name' => 'Miravalle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0155', 'name' => 'Villa Colonial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2157', 'name' => 'El Olivar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2158', 'name' => 'Azucena', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80190', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0156', 'name' => 'Adolfo Lopez Mateos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0157', 'name' => 'Aquiles Serdán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0158', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0159', 'name' => 'Josefa Ortiz de Dominguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0160', 'name' => 'Adolfo Ruiz Cortinez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80194', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0161', 'name' => 'Domingo Rubí', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0162', 'name' => 'Ferrocarrilera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0163', 'name' => 'Antonio Nakayama', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0164', 'name' => 'Plutarco Elias Calles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1367', 'name' => 'Chulavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1369', 'name' => 'Finisterra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1377', 'name' => 'Real Del Parque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2512', 'name' => 'Urbi Villa del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2514', 'name' => 'Capistrano Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2672', 'name' => 'Lomas Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2673', 'name' => 'Paseo Azteca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2732', 'name' => 'Colinas del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2843', 'name' => 'Prados Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3064', 'name' => 'Valle de Amapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80197', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0165', 'name' => 'Esthela Ortiz de Toledo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0166', 'name' => 'Felipe Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0265', 'name' => 'Valle de Encino', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0294', 'name' => 'Parque Andares', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1371', 'name' => 'Lomas de San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1375', 'name' => 'Prados Del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1379', 'name' => 'Rincón Del Parque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2162', 'name' => 'Hacienda Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2254', 'name' => 'Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2502', 'name' => 'Valle Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2674', 'name' => 'Esmeralda Life', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2979', 'name' => 'Colinas del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2980', 'name' => 'Ibérica', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3078', 'name' => 'Perisur', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3192', 'name' => 'Lomas de San Isidro Sección Cumbres del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80199', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0167', 'name' => 'Amado Nervo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0168', 'name' => 'Buenos Aires', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0170', 'name' => 'Francisco I. Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0171', 'name' => 'Francisco Labastida Ochoa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0172', 'name' => '22 de Diciembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0188', 'name' => 'Barrio San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0229', 'name' => 'Barrio San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1333', 'name' => 'Diana Laura Riojas de Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1334', 'name' => 'Francisco Alarcon Fregoso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1378', 'name' => 'Renato Vega Alvarado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1383', 'name' => 'Villa Bonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2028', 'name' => 'La Primavera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2830', 'name' => 'Barrio San Agustín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2831', 'name' => 'Campos Elíseos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2832', 'name' => 'Barrio de San Luis', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2833', 'name' => 'Isla del Oeste', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2834', 'name' => 'Barrio de San Anselmo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3075', 'name' => 'Real de Minas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80200', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0173', 'name' => 'Jorge Almada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0174', 'name' => 'Miguel Alemán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80210', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0177', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80220', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0178', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80225', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0179', 'name' => 'Instituto Tecnológico Regional de Culiacán', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80227', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0181', 'name' => 'Montebello', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0306', 'name' => 'Montebello Sección Dalí', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80228', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0182', 'name' => 'Colinas de San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80230', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0183', 'name' => 'Antonio Rosales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0184', 'name' => '5 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0185', 'name' => 'Melchor Ocampo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80240', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0186', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0187', 'name' => 'San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80246', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0189', 'name' => 'Banjercito', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0190', 'name' => 'Florida', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0191', 'name' => 'Laureles Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0192', 'name' => 'San Benito', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0193', 'name' => 'Vista Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0542', 'name' => 'Laureles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2988', 'name' => 'Las Coloradas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80247', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0194', 'name' => '5 de Febrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0195', 'name' => '7 Gotas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0284', 'name' => 'Portareal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0286', 'name' => 'Torralba', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0577', 'name' => 'Villa Del Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1364', 'name' => 'San Valentino', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2508', 'name' => 'Camino Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3031', 'name' => 'Florenza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80248', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0197', 'name' => 'La Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0198', 'name' => 'Revolución', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0559', 'name' => 'Rincón Feliz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0569', 'name' => 'Servidor Publico Municipal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80249', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0199', 'name' => 'Campesina El Barrio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0200', 'name' => 'Constitución CROC', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0201', 'name' => 'El Pipila', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0202', 'name' => 'La Amistad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2807', 'name' => 'Ampliación El Barrio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80250', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0203', 'name' => 'Lomas de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80260', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0204', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0205', 'name' => 'Rafael Buelna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0206', 'name' => 'Sinaloa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80270', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0207', 'name' => '10 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0208', 'name' => 'Margarita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80279', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0209', 'name' => 'República Mexicana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80280', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0210', 'name' => 'Mezquitillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0211', 'name' => '21 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0555', 'name' => 'Renato Vega Amador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1363', 'name' => 'Estrella Nueva Galicia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3032', 'name' => 'La Cascada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80290', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0212', 'name' => 'Las Huertas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0213', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0215', 'name' => 'Simon Bolívar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1336', 'name' => 'Providencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80294', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0289', 'name' => 'Córcega', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80295', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0216', 'name' => 'Las Ilusiones', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0217', 'name' => 'Miguel de La Madrid', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0552', 'name' => 'Nueva Galicia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2998', 'name' => 'Alturas del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80296', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0218', 'name' => 'Antonio Toledo Corro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0220', 'name' => '12 de Diciembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0221', 'name' => 'La Costera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0222', 'name' => '8 de Febrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1335', 'name' => 'Prados Del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80297', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0223', 'name' => 'CNOP', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0224', 'name' => 'Nuevo México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80298', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0225', 'name' => 'Huizaches', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80299', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0226', 'name' => 'Mercado de Abastos', 'zone_type' => 'Urbano', 'settlementtype_id' => '26','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80300', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0227', 'name' => 'Culiacancito', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0228', 'name' => 'El Quemadito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0243', 'name' => 'Estación Rosales', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0273', 'name' => 'Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0275', 'name' => 'Loma de los Huizaches', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0276', 'name' => 'Unión Antorchista', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0315', 'name' => 'La Primavera Sección Parque Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0437', 'name' => 'El Venadillo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0471', 'name' => 'El Alto de Culiacancito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0483', 'name' => 'El Quince', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0486', 'name' => 'La Platanera (El Pizal)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2069', 'name' => 'El Ranchito', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2297', 'name' => 'Los Huizaches', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2302', 'name' => 'Campo La Flor', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2421', 'name' => 'El Diez', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2509', 'name' => 'Jesús Manuel Camez Valdez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2590', 'name' => 'Campo Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2591', 'name' => 'Campo Patricia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2593', 'name' => 'Argentina Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2594', 'name' => 'El Pinole', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2595', 'name' => 'Campo El Huarache', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2597', 'name' => 'Campo La Baqueta', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2598', 'name' => 'Campo El Chorizo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2600', 'name' => 'Campo El Cardenal I', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2883', 'name' => 'El Carrizalejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2949', 'name' => 'Costa del Sol', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3029', 'name' => 'La Primavera', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3139', 'name' => 'Parque Industrial El Trébol', 'zone_type' => 'Rural', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80301', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0232', 'name' => 'Bellavista', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0296', 'name' => 'Cantabria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0300', 'name' => 'La Higuerita (Las Higueras de Culiacán)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0465', 'name' => 'Las Brisas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2422', 'name' => 'La Presita', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2601', 'name' => 'Bacurimi', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2725', 'name' => 'Huertos del Pedregal', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2727', 'name' => 'Campo Morelia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80302', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0233', 'name' => 'La Campana', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0234', 'name' => 'La Higuera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0441', 'name' => 'Las Higueras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80303', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0235', 'name' => 'Adolfo Lopez Mateos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0274', 'name' => 'Estación Vitaruto', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2602', 'name' => 'Campo San Emilio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80304', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0236', 'name' => 'Acapulco', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0237', 'name' => 'La Higuerita', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0238', 'name' => 'Paredones', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0472', 'name' => 'Dos Arroyos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80305', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0239', 'name' => 'La Palmita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0240', 'name' => 'El Limón de los Ramos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0241', 'name' => 'Palos Blancos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0351', 'name' => 'El Tecomate', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0443', 'name' => 'Mojolo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0456', 'name' => 'La Boca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0459', 'name' => 'La Guásima', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2957', 'name' => 'El Sifón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80308', 'locality' => 'Culiacán Rosales', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0245', 'name' => 'Aguaruto Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0444', 'name' => 'Campo Moroleón', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '1667', 'name' => '20 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1668', 'name' => 'Demetrio Vallejo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1669', 'name' => 'Agustina Ramirez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1670', 'name' => 'Villegas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1671', 'name' => 'Jardines de San Bartolome', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1672', 'name' => 'Nueva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1674', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1859', 'name' => 'Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1860', 'name' => 'La Compuerta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1861', 'name' => 'Rosita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1862', 'name' => 'Aguaruto Viejo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1863', 'name' => 'La Ceiba', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2018', 'name' => 'Presidentes de México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2169', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3018', 'name' => 'Campo Batán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3061', 'name' => 'Las Amapas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80309', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0246', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0488', 'name' => 'El Alto del Coyote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2625', 'name' => 'Campo San Javier', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80310', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0251', 'name' => 'Jesús María', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80311', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0252', 'name' => 'Bagrecitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0475', 'name' => 'El Guayabito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80313', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0253', 'name' => 'La Anona', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0477', 'name' => 'Los Limones', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0491', 'name' => 'El Limoncito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80314', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0350', 'name' => 'La Huerta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2603', 'name' => 'Zalate de Los Ibarra', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80315', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0481', 'name' => 'La Pitahayita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3059', 'name' => 'El Paso del Norte (El Pasito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80316', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0254', 'name' => 'San Rafael', 'zone_type' => 'Urbano', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0271', 'name' => 'Tecolotes', 'zone_type' => 'Urbano', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0449', 'name' => 'La Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0453', 'name' => 'Las Guásimas', 'zone_type' => 'Urbano', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80317', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0255', 'name' => 'Tachinolpa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0256', 'name' => 'Tepuchito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80318', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0257', 'name' => 'Agua Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0258', 'name' => 'Tepuche', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0480', 'name' => 'La Pitahayita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80319', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0259', 'name' => 'Agua Caliente de los Monzon', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80380', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0325', 'name' => 'Sanalona', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0455', 'name' => 'Arroyo Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80383', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0266', 'name' => 'Los Brasiles', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0281', 'name' => 'Puerto Rico (El Reparito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0326', 'name' => 'Tomo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3197', 'name' => 'El Espinal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80384', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0262', 'name' => 'El Rincón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0279', 'name' => 'Portezuelo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0297', 'name' => 'Mezquitita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0327', 'name' => 'El Pozo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0328', 'name' => 'Imala', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0403', 'name' => 'Las Aguamitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0436', 'name' => 'Ayuné', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0448', 'name' => 'Plan de Oriente (El Doce)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0454', 'name' => 'La Cruz de Carrizalejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2604', 'name' => 'Los Naranjos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80385', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0329', 'name' => 'Carboneras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0330', 'name' => 'El Limón de Tellaeche', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0331', 'name' => 'La Esmeralda', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0332', 'name' => 'La Noria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80386', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0333', 'name' => 'Las Milpas 2', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0334', 'name' => 'Los Mayos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0435', 'name' => 'Arroyo de la Higuera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0450', 'name' => 'El Rincón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2989', 'name' => 'El Ciruelar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80387', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3122', 'name' => 'Las Vinoramas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80390', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0335', 'name' => 'Baila', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0336', 'name' => 'El Tule', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0337', 'name' => 'Laguna Colorada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80391', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0338', 'name' => 'Alcoyonqui', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0445', 'name' => 'Nuevo Mundo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80393', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0339', 'name' => 'Abuya y Ceuta 2', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80394', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0340', 'name' => 'El Álamo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0341', 'name' => 'Salate de los Tapias', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0342', 'name' => 'La Guamuchilera', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0343', 'name' => 'La Mora', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80396', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0345', 'name' => 'San Román', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80397', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0346', 'name' => 'Las Flechas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80398', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0293', 'name' => 'La Pedrera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0347', 'name' => 'El Gato', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0348', 'name' => 'Las Bateas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0349', 'name' => 'San Rafael de Costa Rica', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0457', 'name' => 'El Quince (El Quincito)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0470', 'name' => 'El Álamo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2605', 'name' => 'Campo El Sol (Campo Pegaso)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2606', 'name' => 'Canán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2607', 'name' => 'Campo Nuevo México', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2608', 'name' => 'NCPE El 30', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80400', 'locality' => 'Quilá', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1696', 'name' => 'Ampliación Unión (Nueva)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1750', 'name' => 'Quilá Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80402', 'locality' => 'Quilá', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1749', 'name' => 'Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2743', 'name' => 'Alto de Quilá (San Francisco)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80403', 'locality' => 'Quilá', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1747', 'name' => 'Unión', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80405', 'locality' => 'Quilá', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2744', 'name' => 'Ejidal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80408', 'locality' => 'Quilá', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0264', 'name' => 'Cedros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2067', 'name' => 'Bellavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2924', 'name' => 'La Candelaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80409', 'locality' => 'Quilá', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0263', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1752', 'name' => 'Aviación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80410', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0357', 'name' => 'El Carrizal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0358', 'name' => 'Las Tapias', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2609', 'name' => 'El Carrizal Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80411', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0359', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0360', 'name' => 'Las Tranquitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0361', 'name' => 'Lo de Bartolo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80415', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0362', 'name' => 'Campo La Laguna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0363', 'name' => 'Campo Laguna', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0364', 'name' => 'La Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0463', 'name' => 'El Talayote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80416', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0366', 'name' => 'La Pitahayita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0452', 'name' => 'Santa Loreto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80417', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0367', 'name' => 'Las Milpas 1', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0442', 'name' => 'Lo de Clemente', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80419', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0368', 'name' => 'Tierra y Libertad', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0369', 'name' => 'Tierra y Libertad 1', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0370', 'name' => 'Valle Escondido', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0474', 'name' => 'La Florida', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2610', 'name' => 'Tierra y Libertad Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2611', 'name' => 'La Reforma', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2612', 'name' => 'Comanito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2613', 'name' => 'Libertad (Piramo)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80430', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0371', 'name' => 'San Marcos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0372', 'name' => 'Campo el Seis', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0373', 'name' => 'Arkadia Uno (El Siete)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0374', 'name' => 'Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0375', 'name' => 'Los Becos (Duranguito)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0376', 'name' => 'El Alhuate', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0377', 'name' => 'Los Becos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1723', 'name' => 'Benito Juárez Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1724', 'name' => 'Benito Juárez Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1725', 'name' => '18 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1727', 'name' => 'Cañitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1728', 'name' => 'Nuevas Cañitas', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1729', 'name' => 'Constituyentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1730', 'name' => 'Juan de Dios Bátiz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1731', 'name' => 'Las Carpas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1732', 'name' => 'Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2626', 'name' => 'Campo Arbaco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2627', 'name' => 'Campo San Marcos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2628', 'name' => 'Campo Santa Lucía', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2629', 'name' => 'Miguel Valdez Quintero (El Corazón)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '3054', 'name' => 'Villa Rica', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3070', 'name' => 'Solidaridad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3071', 'name' => 'San Ángel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3095', 'name' => 'Sinaloa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3096', 'name' => 'Las Piedritas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3099', 'name' => 'INFONAVIT Alondras', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3100', 'name' => 'Solidaridad Campesina', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3101', 'name' => 'INFONAVIT Prados del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3102', 'name' => 'El Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3103', 'name' => 'Magisterial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3104', 'name' => 'INFONAVIT 88', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3105', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3106', 'name' => 'Loma Linda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3107', 'name' => 'General Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3108', 'name' => 'S.T.A.S.A.C.', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3109', 'name' => 'Ignacio Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3110', 'name' => 'Veracruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3111', 'name' => 'Ingenio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3112', 'name' => 'Barrio Estación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3113', 'name' => 'Los Chinitos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3114', 'name' => 'Renato Vega Amador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3115', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3195', 'name' => 'Revolución', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80433', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0438', 'name' => 'Campo la Catorce', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2630', 'name' => 'Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80434', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0380', 'name' => 'Campo 5 y Medio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0467', 'name' => 'Campo Érika', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0492', 'name' => 'San Antonio Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0494', 'name' => 'Ampliación el Realito I (Curva el Treinta y Seis)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2631', 'name' => 'Campo Cuarenta y Cuatro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2632', 'name' => 'Campo El Conejo (Campo Esperazna)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2633', 'name' => 'Campo El Toro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2634', 'name' => 'Campo Isabelitas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2635', 'name' => 'Campo Nota', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2636', 'name' => 'Campo Paredes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2637', 'name' => 'Empaque del Valle', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2638', 'name' => 'Las Isabeles', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2639', 'name' => 'Santa Lourdes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80435', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0489', 'name' => 'Antonio Toledo Corro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3058', 'name' => 'Campo Gobierno II', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80436', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0447', 'name' => 'El Paraíso', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0460', 'name' => 'Doroteo Arango', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80437', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0490', 'name' => 'Campo Florencia (La Píldora)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0495', 'name' => 'Villa Arredondo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80439', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0381', 'name' => 'Campo Mezquitillo 2', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0382', 'name' => 'Mezquitillo 2', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0420', 'name' => 'Sección Alhuate', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0431', 'name' => 'Sección Alhuate', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0468', 'name' => 'Campo Santa Aurora', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2640', 'name' => 'Mezquitillo (La Curva)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2729', 'name' => 'Campo Eureka', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80440', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0383', 'name' => 'El Salado', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80441', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0384', 'name' => 'Monte Verde de Villa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2293', 'name' => 'El Vizcaíno', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80442', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0385', 'name' => 'La Estancia de los Burgos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0464', 'name' => 'El Ranchito de los Burgos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80443', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0386', 'name' => 'Los Vasitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2922', 'name' => 'El Vichi de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80444', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0446', 'name' => 'Palo Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2614', 'name' => 'El Realito', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80447', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0388', 'name' => 'San Lorenzo Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0458', 'name' => 'Los Durmientes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80449', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0389', 'name' => 'La Bebelama San Lorenzo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80450', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0230', 'name' => 'Villa Eldorado', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0231', 'name' => 'La Huertita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0242', 'name' => 'Eldorado Viejo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0244', 'name' => 'Navito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0248', 'name' => 'La Arboleda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0250', 'name' => 'Renato Vega Amador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0260', 'name' => 'Adolfo Ruiz Cortines', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0261', 'name' => 'Jardines del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0390', 'name' => 'Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0391', 'name' => 'El Higueral', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0392', 'name' => 'Las Arenitas', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0393', 'name' => 'Las Piedritas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0394', 'name' => 'San Diego', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0395', 'name' => 'San Manuel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1698', 'name' => 'Los Cuartos', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1699', 'name' => 'Fidel Velázquez', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1700', 'name' => 'Los Payes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1701', 'name' => 'Lienzo Charro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1703', 'name' => 'Huerta de Redo 1', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1704', 'name' => 'Huerta de Redo 2', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1705', 'name' => 'Quinto Patio', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1706', 'name' => 'Ampliación Navito', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1707', 'name' => 'Ruben Jaramillo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1708', 'name' => 'El Chorrito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1709', 'name' => 'Alejandro Redo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1710', 'name' => '5° Álvarez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1711', 'name' => 'INFONAVIT San Diego', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1712', 'name' => 'INFONAVIT San Diego 2', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1713', 'name' => 'Mariano Escobedo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1714', 'name' => 'Rastro Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1716', 'name' => 'Bombas de Redo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1717', 'name' => 'La Cuchilla', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2049', 'name' => 'La Aviación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2642', 'name' => 'El Robalar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2643', 'name' => 'El Saucito Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2644', 'name' => 'Nuevo Higueral', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2645', 'name' => 'San Joaquín', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2702', 'name' => 'Campo San Martín', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2956', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3022', 'name' => 'Santo Niño', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3133', 'name' => 'Bicentenario', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80452', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0397', 'name' => 'Mezquitillo Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0482', 'name' => 'Rebeca Uno (1 de Mayo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80453', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0398', 'name' => 'Leopoldo Sanchez Celis', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2646', 'name' => 'El Manguito', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2647', 'name' => 'Las Tres Gotas de Agua', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2648', 'name' => 'Rebeca II (Metesaca)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80454', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0269', 'name' => 'Santa Rita (Tableta)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0399', 'name' => 'La Flor', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0400', 'name' => 'La Flor (Metesaca)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80455', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0401', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0402', 'name' => 'Navito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0462', 'name' => 'La Mojonera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80457', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0478', 'name' => 'Las Palmas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3060', 'name' => 'El Rosarito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80460', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0404', 'name' => 'El Camalote', 'zone_type' => 'Rural', 'settlementtype_id' => '15','zipcode_id' => $idZip],
		['key' => '0405', 'name' => 'Jacola', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0406', 'name' => 'Laguna de Canachi', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0407', 'name' => 'Portacaeli', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0439', 'name' => 'La Compuerta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0461', 'name' => 'La Romana', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2649', 'name' => 'El Huinacaxtle', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2650', 'name' => 'El Melón (San Alejandro)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2726', 'name' => 'Nicolás Bravo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3057', 'name' => 'Las Güeras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80463', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0409', 'name' => 'La Cruz Del Dorado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0473', 'name' => 'La Esperanza (La Torta)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0484', 'name' => 'El Tule', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3049', 'name' => 'Loma y Tecomate', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0408', 'name' => 'Heraclio Bernal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80464', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0270', 'name' => 'La Constancia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0476', 'name' => '5 de Febrero (Las Güeras)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0487', 'name' => 'Marcelo Loya (Las Güeras)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80465', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0410', 'name' => 'La Arrocera', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80466', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0411', 'name' => 'Rebeca', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80467', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0412', 'name' => 'El Conchal', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0413', 'name' => 'El Cuervo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2651', 'name' => 'Soyatita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2652', 'name' => 'Soyatita (Cruz Segunda)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80468', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0414', 'name' => 'Península de Villamoros', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80470', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0415', 'name' => 'Estancia de los Garcia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0416', 'name' => 'Tacuichamona', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2292', 'name' => 'Walamito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80473', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0396', 'name' => 'La Chilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80475', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0355', 'name' => 'San Lorenzo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0417', 'name' => 'Tabala', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80480', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0354', 'name' => 'Estación Quilá', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0356', 'name' => 'Oso Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0418', 'name' => 'La Loma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80481', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0419', 'name' => 'Las Flores', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80483', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0421', 'name' => 'Oso Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80484', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0422', 'name' => 'Pueblos Unidos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80485', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0423', 'name' => 'Estación Obispo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80486', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0466', 'name' => 'El Cachorón (Nuevo Rosarito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80489', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0424', 'name' => 'Higueras de Abuya', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80490', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0305', 'name' => 'Campo Agrícola San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0425', 'name' => 'El Sinaloense', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0426', 'name' => 'Emancipación', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0469', 'name' => 'Campo Jal-Aca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2615', 'name' => 'Francisco Villa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80491', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0427', 'name' => 'Obispo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0428', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0440', 'name' => 'Jacola (El Guayabo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0451', 'name' => 'Río Florido', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0485', 'name' => 'La Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2617', 'name' => 'El Retiro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2618', 'name' => 'Santa Refugio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3051', 'name' => 'Nuevo Rosarito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80492', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0429', 'name' => 'Adolfo López Mateos (Casa Blanca)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0479', 'name' => 'Panaltita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80493', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0430', 'name' => 'La Guasima', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80496', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0432', 'name' => 'Abuya', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0433', 'name' => 'Chiqueritos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80498', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0434', 'name' => 'Cospita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '018', 'name' => 'Navolato', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80320', 'locality' => 'Navolato', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1578', 'name' => 'Navolato Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80322', 'locality' => 'Navolato', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1585', 'name' => 'Nayarit', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1586', 'name' => 'Pueblo Nuevo No. 1', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1587', 'name' => 'Los Alcanfores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1588', 'name' => 'Manuel Ávila Camacho (Obrera)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1592', 'name' => 'Antonio Yamaguchi González', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1593', 'name' => 'José María Martínez CTM INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1597', 'name' => 'Los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1602', 'name' => 'Secciones Hermanas CTM', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1603', 'name' => 'Rincón de Navolato', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2188', 'name' => 'Pradera Dorada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80323', 'locality' => 'Navolato', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1589', 'name' => 'La Arrocera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1615', 'name' => 'Chula Vista', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80324', 'locality' => 'Navolato', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1584', 'name' => 'Pueblo Nuevo No. 2 (Los Cochambres)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1591', 'name' => 'Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1598', 'name' => 'Primavera II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1599', 'name' => '5 de Febrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1600', 'name' => 'Primavera I', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1607', 'name' => 'La Villita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1608', 'name' => 'Renato Vega Alvarado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1609', 'name' => 'Amalia Plata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1610', 'name' => 'Solidaridad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1611', 'name' => 'Prodensa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1612', 'name' => 'Salvador Alvarado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1613', 'name' => 'Las Vegas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2079', 'name' => 'Belén Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80327', 'locality' => 'Navolato', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1579', 'name' => 'Ejidal (Los Mangos)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1580', 'name' => 'Los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1581', 'name' => 'ISSSTESIN Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1582', 'name' => 'Coca Cola INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1583', 'name' => 'Alfonso G. Calderón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1590', 'name' => 'Heriberto Zazueta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1594', 'name' => 'Antonio Bonifant', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1595', 'name' => 'Los Aguilares', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1596', 'name' => 'Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1601', 'name' => 'Albañiles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1605', 'name' => 'Residencial Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1606', 'name' => 'Valle Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1614', 'name' => 'Ampliación Alfonso G. Calderón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2080', 'name' => 'Embotelladoras', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2081', 'name' => 'El Batey', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2082', 'name' => 'La Tenería', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80330', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Campo Cinco Hermanos (Emiliano Zapata)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'Campo el Chamizal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'Casa Blanca (Ángeles Dos)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0266', 'name' => 'Bachimeto', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0267', 'name' => 'Ciudad de los Niños', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0268', 'name' => 'El Bledal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0269', 'name' => 'El Patagón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0270', 'name' => 'Monte Largo', 'zone_type' => 'Rural', 'settlementtype_id' => '15','zipcode_id' => $idZip],
		['key' => '0275', 'name' => 'Bachoco', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1617', 'name' => 'Campo 5 Hermanos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2346', 'name' => 'Casa Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2367', 'name' => 'Ensenada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80332', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'Ensenada (Tecomate)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'Macario Gaxiola (El Poblado)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0274', 'name' => 'Los Pochotes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0276', 'name' => 'Juan Aldama (El Tigre)', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2345', 'name' => '5 de Mayo (Col. El Debate)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80333', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2239', 'name' => 'Constituyentes de Sinaloa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80334', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0277', 'name' => 'El Bolsón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0278', 'name' => 'Lo de Reyes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80335', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0279', 'name' => 'Limoncito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2347', 'name' => 'El Portugués (El Campito)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80336', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0271', 'name' => 'Baricueto 2', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0273', 'name' => 'Las Trancas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0280', 'name' => 'La Aviación', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0281', 'name' => 'Otameto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2339', 'name' => 'La Higuerita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2340', 'name' => 'Monte Calvario', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2356', 'name' => 'Toboloto', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2357', 'name' => 'Campillo Veronica', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2364', 'name' => 'La Vuelta', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80337', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0282', 'name' => 'Villamoros', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2349', 'name' => 'La Pipima', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80338', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Nuevo Cosalá', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'Bariometo Segundo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0012', 'name' => 'Ezequiel Leyva (Tacuache)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'Yameto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0283', 'name' => 'Iraguato', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1618', 'name' => 'Dautillos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1619', 'name' => 'El Vergel', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2303', 'name' => 'Lic Alfredo Valdez Montoya', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2313', 'name' => 'La Bandera', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2341', 'name' => 'Primavera', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2348', 'name' => 'El Tetuan Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80339', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0285', 'name' => 'El Potrero de Sataya', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2361', 'name' => 'Rosa Morada', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80345', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0287', 'name' => 'Los Angeles', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80346', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'El Diecisiete', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80347', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'San Blas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0288', 'name' => 'Santa Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3012', 'name' => 'La Paloma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80348', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0289', 'name' => 'Caimancito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2215', 'name' => 'Cañada de Guamuchilito', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '3013', 'name' => 'Campo Berlín ( Berlín)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80349', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0291', 'name' => 'Campo El 17', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0293', 'name' => 'Zona Centro Villa Ángel Flores (La Palma)', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1676', 'name' => 'Nicolás Bravo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1677', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1678', 'name' => 'Fidel Gutiérrez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1679', 'name' => 'Del Parque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1680', 'name' => 'Vicente Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1681', 'name' => 'Linda Vista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2749', 'name' => 'Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3027', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3149', 'name' => '22 de Junio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3150', 'name' => 'Fidel Velázquez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3151', 'name' => 'Manuel de Jesús Clouthier del Rincón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3152', 'name' => 'Matzumoto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3171', 'name' => 'Juan S. Millán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80360', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0294', 'name' => 'El Castillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80363', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Santorini', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'Punta Esmeralda', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0295', 'name' => 'Altata', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80365', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0296', 'name' => 'Aguapepito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2344', 'name' => 'El Realito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2371', 'name' => 'Las Aguamitas', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '3009', 'name' => 'El Pintor', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3067', 'name' => 'Laco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80366', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'Bainoritos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0297', 'name' => 'Los Molinos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80367', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'Batauto (Laguna de Batauto)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'Agrícola AGA JBS', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0025', 'name' => 'Sacrificio (El Serrucho)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0298', 'name' => 'Pénjamo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0299', 'name' => 'Santa Alicia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2337', 'name' => 'Campo Clouthier', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2338', 'name' => 'Campo El Trinquete', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2343', 'name' => 'El Gran Chaparral', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2351', 'name' => 'Campo Alvarez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2358', 'name' => 'El Cafetal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2359', 'name' => 'Campo San José', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2365', 'name' => 'Campo Santa Cecilia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2366', 'name' => 'Alonso', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2368', 'name' => 'Campo Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2369', 'name' => 'Las Puentes (Guadalupe Victoria)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2958', 'name' => 'San Raúl', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80368', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3010', 'name' => 'El Contrabando (Campo Pesquero)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80370', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0301', 'name' => 'Sataya', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2342', 'name' => 'Plan de Ayala (el Zanjon)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80371', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0021', 'name' => 'Campo Vital (Cofradía de la Estancia Número Dos)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0303', 'name' => 'Campo Campaña', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0304', 'name' => 'La Curva 1', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0305', 'name' => 'La Michoacana', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0306', 'name' => 'Lo de Jesús', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0307', 'name' => 'Lo de Sauceda', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0308', 'name' => 'Luis G Vélez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2360', 'name' => 'Campo San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3068', 'name' => 'Villa Morelos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80372', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0024', 'name' => 'Campo México y Oriente', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0027', 'name' => 'Los Rieles', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0309', 'name' => 'Cofradia de los Rocha', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0310', 'name' => 'Convención de Aguascalientes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0311', 'name' => 'El Melón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0312', 'name' => 'La Sinaloa', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80373', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0014', 'name' => 'El Tanque', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0313', 'name' => 'Cofradia de La Loma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0314', 'name' => 'Los Arredondos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2350', 'name' => 'Lo de Verdugo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2352', 'name' => 'Rio Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2893', 'name' => 'Campo Ochiqui', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80374', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'Los Alamitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0026', 'name' => 'San Luis', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0302', 'name' => 'Balbuena', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0316', 'name' => 'Bariometo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0317', 'name' => 'Cofradia de San Pedro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0318', 'name' => 'Las Bebelamas de San Pedro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2314', 'name' => 'El Batallón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2354', 'name' => 'Laguna de San Pedro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2370', 'name' => 'Yebavito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2589', 'name' => 'San Pedro', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80376', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0018', 'name' => 'La Bebelama de San Pedro', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0320', 'name' => 'San Pedro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80377', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0321', 'name' => 'Bachigualatillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80378', 'locality' => 'Licenciado Benito Juárez (Campo Gobierno)', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Rosario Ortíz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Villa del Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1683', 'name' => 'El Tapacal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1684', 'name' => 'José López Portillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1685', 'name' => '4 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1686', 'name' => 'Margarita Maza de Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1688', 'name' => 'Las Cupias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2676', 'name' => 'La Primavera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2677', 'name' => 'INFONAVIT ABC', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2882', 'name' => 'Tierra y Libertad (Las Cañitas)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2886', 'name' => 'Liberación 89', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2999', 'name' => 'Perfecto Arredondo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3000', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3001', 'name' => 'José Vasconcelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3002', 'name' => 'Manuel Gómez Morin', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3003', 'name' => 'Praderas del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3004', 'name' => 'Ampliación Praderas del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3005', 'name' => 'Las Granjas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3023', 'name' => 'Las Amapas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3024', 'name' => 'Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3025', 'name' => 'Santa Natalia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3026', 'name' => 'Víctor Godoy', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3048', 'name' => 'Villa Bonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3076', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '003', 'name' => 'Badiraguato', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80500', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0435', 'name' => 'Badiraguato', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2723', 'name' => 'Colinas del Camichín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80503', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0027', 'name' => 'Chaparahueto', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80504', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'La Acendrada (La Cendrada)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0161', 'name' => 'El Guamúchil del Barranco', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80505', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'La Amapa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0163', 'name' => 'Viejo de los Serrano', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80520', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'Babunica', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0071', 'name' => 'El Sauce', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0118', 'name' => 'La Noria', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80524', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0034', 'name' => 'Las Juntas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0129', 'name' => 'El Real', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0177', 'name' => 'El Potrero de los Páez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0184', 'name' => 'San José del Taste', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80526', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0038', 'name' => 'Maturipa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0117', 'name' => 'Santa María', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0200', 'name' => 'Caiquiva', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0210', 'name' => 'Las Limas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80527', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2243', 'name' => 'Bamopa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80530', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'El Álamo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0032', 'name' => 'El Guasimal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0130', 'name' => 'Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0181', 'name' => 'Potrerillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0194', 'name' => 'La Dispencilla', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0437', 'name' => 'Sitio de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80533', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0025', 'name' => 'La Cieneguilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0046', 'name' => 'Ojo de Agua', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0219', 'name' => 'Las Palmas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'El Barril', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80534', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'El Aguaje', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0438', 'name' => 'El Huejote', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0439', 'name' => 'San Nicolás del Sitio (Sitio de Arriba)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80535', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0440', 'name' => 'Sitio de en Medio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80536', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'Los Alcajeces', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0017', 'name' => 'Baymusari', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0133', 'name' => 'Los Zapotes de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0180', 'name' => 'El Platanar', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0228', 'name' => 'La Tasajera', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0255', 'name' => 'Los Zapotes de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0441', 'name' => 'La Juanilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0442', 'name' => 'Potrero de los Medina', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80537', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0018', 'name' => 'Boca de Arroyo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0084', 'name' => 'El Aguaje', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0100', 'name' => 'Cinco de Mayo (Tepalcates)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0443', 'name' => 'San José de la Puerta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0444', 'name' => 'San Antonio de la Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80540', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0229', 'name' => 'El Tecuán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0445', 'name' => 'Las Higueras del Tecuán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80543', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0029', 'name' => 'Dos Arroyos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0087', 'name' => 'El Aguaje de los Monzón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0178', 'name' => 'Palo Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80544', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0202', 'name' => 'Chinacates', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0232', 'name' => 'El Zapotillo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0274', 'name' => 'Boca de Arroyo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2241', 'name' => 'Morirato', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80545', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0059', 'name' => 'Potrero de los Vega', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0190', 'name' => 'El Tule', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0234', 'name' => 'El Zapote de los Monzón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2273', 'name' => 'Aguaje Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80550', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0446', 'name' => 'Higueras de Álvarez Borboa (Higuera de los Monzón)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80553', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0037', 'name' => 'Los Mapaches', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0088', 'name' => 'Las Aguamas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0175', 'name' => 'La Majada de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80554', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0149', 'name' => 'Los Chinos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0174', 'name' => 'La Higuerita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0448', 'name' => 'Alcoyonqui', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0449', 'name' => 'Llano de los Rochín', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80555', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0028', 'name' => 'El Divisadero', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0193', 'name' => 'Jurisdicción de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80556', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0160', 'name' => 'Cerro de los Guerrero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0450', 'name' => 'Batequitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0451', 'name' => 'Rincón de los Monzón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80557', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0447', 'name' => 'La Apoma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3040', 'name' => 'El Hormiguero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80560', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0043', 'name' => 'Nocoriba', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0062', 'name' => 'El Pueblito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0105', 'name' => 'Las Higueritas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0141', 'name' => 'La Vainilla', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0192', 'name' => 'El Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0253', 'name' => 'La Mezcla', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0452', 'name' => 'Otatillos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80563', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0119', 'name' => 'Los Negritos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0135', 'name' => 'La Tarahumara', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0146', 'name' => 'Guaténipa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0164', 'name' => 'Rincón de los López', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0176', 'name' => 'El Mezcalito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0220', 'name' => 'La Presita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0453', 'name' => 'La Higuerita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80564', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0031', 'name' => 'La Guásima de los Guerrero', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0127', 'name' => 'El Paso de San Nicolás', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0162', 'name' => 'La Presa de Moributo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0166', 'name' => 'Cariatapa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80565', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0126', 'name' => 'El Portezuelo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0454', 'name' => 'Batopito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0455', 'name' => 'Palmar de los Ríos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3128', 'name' => 'San Antonio de los Ortiz (El Riyito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80566', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0218', 'name' => 'La Otra Banda de Badiraguato', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80567', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0456', 'name' => 'Ciénega de los Lara', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80570', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0089', 'name' => 'La Amapa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0251', 'name' => 'Zoquitita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0457', 'name' => 'Cortijos de Guatenipa (Los Cortijos)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80573', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0041', 'name' => 'El Naranjo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0075', 'name' => 'Tareapa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0252', 'name' => 'La Quebrada de Cuén', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80574', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0101', 'name' => 'El Cielo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0154', 'name' => 'El Sauce', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0272', 'name' => 'La Coronilla', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0273', 'name' => 'Los Brasiles', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0039', 'name' => 'El Mautal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80575', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0081', 'name' => 'El Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0212', 'name' => 'Lo de Tomás', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80576', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0158', 'name' => 'Los Ayales', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0182', 'name' => 'El Potrerillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80577', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0248', 'name' => 'Potrerito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0249', 'name' => 'Atoribito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80580', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0131', 'name' => 'Rancho Viejo de los Velázquez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0266', 'name' => 'El Mezquite', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80583', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Huicharabito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0121', 'name' => 'Las Olorosas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0458', 'name' => 'Camotete [Campo Camotete]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2240', 'name' => 'Saca de Agua', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2309', 'name' => 'El Rincón de los Montes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80584', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0157', 'name' => 'Agua Amarilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0165', 'name' => 'Las Canoas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80585', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0052', 'name' => 'Paso del Huejote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0090', 'name' => 'Higueras de Bayaca (Bayaca)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0091', 'name' => 'El Brasil', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2242', 'name' => 'El Huejotillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80586', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0221', 'name' => 'El Potrero del Varejonal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0459', 'name' => 'El Varejonal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80600', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0056', 'name' => 'Plan Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0153', 'name' => 'El Ranchito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0461', 'name' => 'Surutato', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80603', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0145', 'name' => 'El Sauce', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0265', 'name' => 'La Colonia', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0462', 'name' => 'Copalitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80604', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Llano Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0067', 'name' => 'La Sábila', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0148', 'name' => 'El Molino', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0217', 'name' => 'Los Sonocores', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0238', 'name' => 'La Cañita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0257', 'name' => 'Los Inditos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80606', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0019', 'name' => 'La Boca', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'Las Calabazas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0036', 'name' => 'Lo de Gabriel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0074', 'name' => 'Soyatita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0214', 'name' => 'Los Mimbre', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0460', 'name' => 'San José del Llano', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80607', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0047', 'name' => 'Los Pacheco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0271', 'name' => 'El Naranjo de los Salomón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80610', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0068', 'name' => 'San Javier de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0096', 'name' => 'Casas Viejas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0104', 'name' => 'Las Higueras', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0112', 'name' => 'El Molino', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0113', 'name' => 'Los Mirasoles', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0124', 'name' => 'El Picacho', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0207', 'name' => 'Huanacaxtle', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0239', 'name' => 'Terreros de San Javier', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0261', 'name' => 'Palmarito de San Javier', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0264', 'name' => 'El Saucito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0463', 'name' => 'Potrerillos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0464', 'name' => 'San Javier de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80613', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'El Frijolar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'Alisitos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0099', 'name' => 'Carricitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0241', 'name' => 'Milpitas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0258', 'name' => 'Los Laureles', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80614', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0022', 'name' => 'La Caña', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0033', 'name' => 'La Higuerita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0057', 'name' => 'El Playón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0098', 'name' => 'La Cieneguita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0114', 'name' => 'El Mezcal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0147', 'name' => 'Palos Dulces', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0169', 'name' => 'Los Gavilanes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0191', 'name' => 'Los Zapotes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0242', 'name' => 'El Tastecito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0243', 'name' => 'Los Coyotes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0244', 'name' => 'El Pueblito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0260', 'name' => 'El Naranjo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0262', 'name' => 'Las Paredes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80615', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0070', 'name' => 'Santo Tomás de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0076', 'name' => 'Tecuxiapa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0233', 'name' => 'Los Zapotillos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0236', 'name' => 'La Comisión', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0237', 'name' => 'Mesa de Bernal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80620', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0058', 'name' => 'Potrero de la Vainilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80623', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0066', 'name' => 'Sabanillas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0083', 'name' => 'Alisitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0102', 'name' => 'Los Echaderos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80625', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0167', 'name' => 'El Carricito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0267', 'name' => 'La Soledad', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80627', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0045', 'name' => 'El Nogalito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0048', 'name' => 'La Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0069', 'name' => 'San José del Barranco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0215', 'name' => 'Pie de la Cuesta', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0465', 'name' => 'La Tuna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80630', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0053', 'name' => 'El Pelón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0064', 'name' => 'Rancho Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0095', 'name' => 'Los Cacahuates', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0225', 'name' => 'El Salto', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0227', 'name' => 'Santo Tomás de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80633', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0092', 'name' => 'Los Coquitos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0107', 'name' => 'El Laurel', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0123', 'name' => 'Los Pinos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0134', 'name' => 'El Tepehuán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0136', 'name' => 'El Trigo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0173', 'name' => 'Las Hiedritas (Terremoto)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0179', 'name' => 'Ladrillera', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0246', 'name' => 'Las Vainillas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0277', 'name' => 'Rancho Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80634', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0078', 'name' => 'El Terrero', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0094', 'name' => 'Cerco Quemado', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0140', 'name' => 'Válgame Dios', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0168', 'name' => 'El Cedro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0198', 'name' => 'Los Bajillos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0199', 'name' => 'Las Burras', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0226', 'name' => 'Santa Bárbara de la Caña', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0235', 'name' => 'La Caña de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0247', 'name' => 'El Infiernito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0263', 'name' => 'Portezuelo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80635', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0086', 'name' => 'El Aguaje del Charo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0093', 'name' => 'Carboneras', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0122', 'name' => 'Pericos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0132', 'name' => 'Saca de Agua', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0142', 'name' => 'Chivas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0201', 'name' => 'El Seno', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0224', 'name' => 'Salomón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0245', 'name' => 'Vinaterías', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0259', 'name' => 'La Mesa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80636', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0014', 'name' => 'Los Amoles', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'La Calera', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0024', 'name' => 'La Ciénega', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0040', 'name' => 'El Molino (Molino de los Pérez)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0106', 'name' => 'El Jacal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0143', 'name' => 'Palmarito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0144', 'name' => 'La Ensenada', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0211', 'name' => 'Jerónimo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0216', 'name' => 'El Muertecito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0222', 'name' => 'Rancho de Luna', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0269', 'name' => 'Agujas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3090', 'name' => 'El Potrero de Bejarano', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80639', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Piedra Bola', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0055', 'name' => 'El Pinito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0072', 'name' => 'El Saucito (El Saucito de Lugo)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0082', 'name' => 'Los Alisitos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0103', 'name' => 'El Gato', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0171', 'name' => 'El Guayabo de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0172', 'name' => 'El Guayabo de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0189', 'name' => 'Terreros Bayos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0270', 'name' => 'Los Cocos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0276', 'name' => 'Mesa Colorada', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0466', 'name' => 'Calabazas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80640', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0268', 'name' => 'Las Cuevitas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0467', 'name' => 'El Triguito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80643', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0012', 'name' => 'Alisos (Alisitos)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80644', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0061', 'name' => 'Las Pozas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0063', 'name' => 'El Ranchito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0120', 'name' => 'El Ojito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0186', 'name' => 'Santa Rita de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0204', 'name' => 'El Garbancito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80645', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0035', 'name' => 'Los Lobitos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0049', 'name' => 'La Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0054', 'name' => 'El Pinal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0128', 'name' => 'Santa Rita de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80646', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0050', 'name' => 'El Palmar de Santa Rita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0205', 'name' => 'La Hacienda', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3131', 'name' => 'La Mesa del Fierro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80670', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0080', 'name' => 'El Vallecito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0109', 'name' => 'La Pitahayita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0139', 'name' => 'El Terrero', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0155', 'name' => 'Jajalpa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0213', 'name' => 'El Mezquite', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0231', 'name' => 'El Zapotillo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0468', 'name' => 'Tameapa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'Arroyo de los Payán', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'La Catalina', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0026', 'name' => 'La Cofradía', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0030', 'name' => 'El Epazote', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0065', 'name' => 'El Reparo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0073', 'name' => 'El Saucito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80673', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0156', 'name' => 'El Sapo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0159', 'name' => 'Batacomito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0183', 'name' => 'El Potrero de los Pérez', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0197', 'name' => 'Alisitos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0469', 'name' => 'Tegoripa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80674', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0137', 'name' => 'El Terrero', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80675', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0044', 'name' => 'Los Nogales', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0077', 'name' => 'Tepaca', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0188', 'name' => 'La Soledad', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0256', 'name' => 'El Aguaje', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80677', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0079', 'name' => 'La Vainilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0151', 'name' => 'El Potrerito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0170', 'name' => 'Guanajuato', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0196', 'name' => 'Alisos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0206', 'name' => 'La Haciendita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0223', 'name' => 'El Realito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0254', 'name' => 'El Arroyo de la Vainilla', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0470', 'name' => 'Santiago de los Caballeros (Santiago)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80678', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0110', 'name' => 'La Ladrillera', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0185', 'name' => 'Santa Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2970', 'name' => 'Los Tepehuajes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80679', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0042', 'name' => 'Los Naranjos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0152', 'name' => 'El Pueblito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0230', 'name' => 'Los Veneros', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0250', 'name' => 'Los Rebajes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0471', 'name' => 'La Lapara', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80680', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0051', 'name' => 'Las Paredes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0472', 'name' => 'Huixiopa', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2308', 'name' => 'Bacacoragua', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80683', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'El Aguaje', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0060', 'name' => 'Potrero de Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0115', 'name' => 'El Mentidero', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0209', 'name' => 'La Huerta', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0275', 'name' => 'Yesqueros', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3006', 'name' => 'Revolcadero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80684', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0108', 'name' => 'Limón de los Aguirre', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0111', 'name' => 'La Lechuguilla', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80685', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0085', 'name' => 'Arroyo Seco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0097', 'name' => 'Los Cuates', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0150', 'name' => 'La Vainilla', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0195', 'name' => 'El Aguaje', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0203', 'name' => 'El Chorro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0208', 'name' => 'Las Güejas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80686', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0138', 'name' => 'Los Terreros', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0187', 'name' => 'Los Sauces', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80687', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0116', 'name' => 'Milpas Viejas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0125', 'name' => 'Persogaderos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '005', 'name' => 'Cosalá', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80700', 'locality' => 'Cosalá', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0083', 'name' => 'Lomas de San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0473', 'name' => 'Cosala Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80702', 'locality' => 'Cosalá', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1661', 'name' => 'Las Quintas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1666', 'name' => 'Sánchez Celis', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2283', 'name' => 'Capellanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80704', 'locality' => 'Cosalá', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Los Arroyos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1665', 'name' => 'Las Lomitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80705', 'locality' => 'Cosalá', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1659', 'name' => 'Bajío', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80706', 'locality' => 'Cosalá', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1660', 'name' => 'Canela', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1662', 'name' => 'Sierra Mojada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2282', 'name' => 'El Rastro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80707', 'locality' => 'Cosalá', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0081', 'name' => 'VIVAH', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1663', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80708', 'locality' => 'Cosalá', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1664', 'name' => 'El Llano de La Carrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80720', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0063', 'name' => 'Los Llanos de Refugio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0079', 'name' => 'El Guamúchil', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0475', 'name' => 'La Ilama', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80723', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0026', 'name' => 'El Reparo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0032', 'name' => 'La Vuelta del Cerro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0039', 'name' => 'El Veinticuatro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80724', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'Las Amargosas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0036', 'name' => 'Tachichilte', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0037', 'name' => 'El Sauce', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80725', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0476', 'name' => 'Bacata', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80726', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Los Cedritos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80730', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0030', 'name' => 'El Tecomate', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0071', 'name' => 'Las Milpas del Carrizo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80733', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0019', 'name' => 'Los Mimbritos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3142', 'name' => 'Los Mimbres', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80734', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0022', 'name' => 'El Palmarito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0028', 'name' => 'Santa Ana', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0042', 'name' => 'El Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80735', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0024', 'name' => 'Pueblo de Alayá', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80736', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0478', 'name' => 'El Ranchito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80737', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Los Algodones', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0038', 'name' => 'El Vertedor', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2208', 'name' => 'Higueras de Jacopa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80738', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0477', 'name' => 'Santa Anita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80740', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'La Culacha', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80743', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0025', 'name' => 'La Rastra', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0033', 'name' => 'El Cajón de las Minas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0479', 'name' => 'Mezcaltitán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80744', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0080', 'name' => 'Pueblo Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80750', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Agua Caliente', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0069', 'name' => 'El Rincón de la Lagunita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2700', 'name' => 'Chiricahueto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80753', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2955', 'name' => 'Higueras de Campaña', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80754', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0021', 'name' => 'Palmar de los Ceballos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0068', 'name' => 'Palmillas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80755', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0040', 'name' => 'La Ciruelita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80756', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0058', 'name' => 'El Bichi', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0061', 'name' => 'El Cerro de los Barraza', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80757', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0018', 'name' => 'Lo de Garza', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80758', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'El Realito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0031', 'name' => 'Los Vasitos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0060', 'name' => 'Los Carricitos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80760', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0480', 'name' => 'El Carrizal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80763', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0034', 'name' => 'Las Truchas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80764', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0023', 'name' => 'Pozo Zarco', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0062', 'name' => 'La Ciénega', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0070', 'name' => 'San José de las Bocas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0073', 'name' => 'Los Tigres', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80770', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0012', 'name' => 'Las Habas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'La Huerta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0041', 'name' => 'Ibonía', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0482', 'name' => 'Santa Cruz de Alaya', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2527', 'name' => 'Chapala', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80773', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0072', 'name' => 'Picacho', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0074', 'name' => 'El Vaso', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0483', 'name' => 'San Miguel de las Mesas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80774', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0020', 'name' => 'Los Mimbres de Quiroz', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0035', 'name' => 'Palo Dulce', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80775', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0027', 'name' => 'El Sabino', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0043', 'name' => 'La Cuchilla (Cachahua)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0044', 'name' => 'Los Aguajitos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0045', 'name' => 'Buenavista', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0047', 'name' => 'La Cañita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0049', 'name' => 'Las Cupías de Cachahua', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0056', 'name' => 'Los Salates', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0059', 'name' => 'El Cajón de Cachahua', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80776', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0484', 'name' => 'Calafato', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0485', 'name' => 'El Potrero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0486', 'name' => 'El Rodeo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2895', 'name' => 'Vado Hondo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80777', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'El Huizachal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0050', 'name' => 'La Chuchupira', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0051', 'name' => 'El Jagüey', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0053', 'name' => 'La Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0066', 'name' => 'Palo Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80778', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'Ipucha', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0064', 'name' => 'Las Mimbres (Las Mimbres del Padre)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0067', 'name' => 'El Papachal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0487', 'name' => 'Comoa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80780', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Los Braceros', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80783', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0014', 'name' => 'Las Higueras de Urrea', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0481', 'name' => 'Las Higueras de Padilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80784', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0065', 'name' => 'Los Molinos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0489', 'name' => 'Cholula', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0490', 'name' => 'El Portezuelo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80785', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'Higuera Larga', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80786', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'Los Bulitos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0029', 'name' => 'Santa Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0491', 'name' => 'La Estancia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80790', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'Guadalupe de los Reyes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0046', 'name' => 'El Camichín', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80793', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0048', 'name' => 'El Capule', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0054', 'name' => 'Potrerillo de los Torres', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0075', 'name' => 'Agua Caliente de los Urrea', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80794', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0057', 'name' => 'El Saucito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0077', 'name' => 'El Pino', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0078', 'name' => 'El Tule', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80795', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0076', 'name' => 'El Sauz', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80797', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'La Tasajera', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0052', 'name' => 'Llano Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0055', 'name' => 'Las Habitas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '013', 'name' => 'Mocorito', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80800', 'locality' => 'Mocorito', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1396', 'name' => 'Mocorito Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80803', 'locality' => 'Mocorito', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3172', 'name' => 'Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3173', 'name' => 'Candilejas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80804', 'locality' => 'Mocorito', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1806', 'name' => 'Las Delicias', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '3174', 'name' => 'Mercadito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80805', 'locality' => 'Mocorito', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0080', 'name' => 'Las Casitas Nuevas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1809', 'name' => 'Fovissste', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3175', 'name' => 'Las Playitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3176', 'name' => 'La Brecha', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80806', 'locality' => 'Mocorito', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1808', 'name' => 'Infonavit', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3177', 'name' => 'Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80807', 'locality' => 'Mocorito', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1807', 'name' => 'Aviación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3178', 'name' => 'Tabachines', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3179', 'name' => 'La Loma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80808', 'locality' => 'Mocorito', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3180', 'name' => 'Alameda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80810', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2373', 'name' => 'Constancio Rodríguez (La Otra Banda)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80830', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1397', 'name' => 'Alhueycito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1398', 'name' => 'Cerro Agudo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1399', 'name' => 'Los Pérez', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1400', 'name' => 'Rancho Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1401', 'name' => 'Las Milpas de los González', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1402', 'name' => 'Palmarito Mineral', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80833', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'El Salto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0025', 'name' => 'Lo de Gabriel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0026', 'name' => 'Mautillos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1403', 'name' => 'Las Tahonas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1404', 'name' => 'El Valle de Leyva Solano (El Valle)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1405', 'name' => 'La Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3066', 'name' => 'La Campanilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3194', 'name' => 'El Reparo de los Galindo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80834', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0024', 'name' => 'La Ladrillera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0041', 'name' => 'Ranchito de los Gaxiola', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0059', 'name' => 'La Primavera', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1406', 'name' => 'El Chinal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1407', 'name' => 'Lomas Blancas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3077', 'name' => 'Las Juntas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80836', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'La Cañada', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1408', 'name' => 'Los Pocitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80840', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1409', 'name' => 'El Becal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1410', 'name' => 'Higuera de los Vega', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1411', 'name' => 'Palo de Asta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1412', 'name' => 'Mazate de los López', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1413', 'name' => 'Mazate de los Sánchez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80845', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1414', 'name' => 'El Tule de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1415', 'name' => 'El Gallo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80846', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'La Joya de los López', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'La Laguna', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0017', 'name' => 'Corral Quemado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'Boca de Guamúchil', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0051', 'name' => 'Los Vasitos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0064', 'name' => 'Los Charcos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1416', 'name' => 'El Sauce de los Gámez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1417', 'name' => 'Milpas Viejas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1418', 'name' => 'Tabalopa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80850', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0058', 'name' => 'Los Medina', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1419', 'name' => 'El Tule', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1420', 'name' => 'El Mezquite', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1421', 'name' => 'El Magistral', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80853', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Lagunillas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0008', 'name' => 'Bacamopa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'Cahuinahuato', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'El Encinal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0031', 'name' => 'El Nacimiento', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0039', 'name' => 'El Pueblito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0055', 'name' => 'Cahuinahuatillo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0057', 'name' => 'La Loma', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0061', 'name' => 'El Potrero Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1422', 'name' => 'Rincón de los Santos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1423', 'name' => 'Los Llanos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1424', 'name' => 'Canutillos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2884', 'name' => 'La Virgen', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2885', 'name' => 'El Potrero de las Perdices', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3124', 'name' => 'El Manchón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3125', 'name' => 'El Taray', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3126', 'name' => 'San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3130', 'name' => 'La Higuerita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80854', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0062', 'name' => 'La Bebelama', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1425', 'name' => 'Santa Rosalía', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '3127', 'name' => 'La Pionilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80855', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0040', 'name' => 'Las Quebradas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0046', 'name' => 'El Salto', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1426', 'name' => 'Terrero de los Pacheco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1427', 'name' => 'Palos Colorados', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1428', 'name' => 'Palo Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80856', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'El Aguaje', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'La Higuera Caída', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0042', 'name' => 'Rancho Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0043', 'name' => 'El Recodo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0045', 'name' => 'El Sabinito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0056', 'name' => 'Palmarito de la Sierra (Casas de Abajo)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0063', 'name' => 'La Cascada', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0065', 'name' => 'El Lancón Número Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0066', 'name' => 'Loma Redonda', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0069', 'name' => 'La Tasajera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1429', 'name' => 'Los Letreros', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1430', 'name' => 'La Laguna de los Bojórquez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1431', 'name' => 'Ojo de Agua', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1432', 'name' => 'Potrero de los Gastélum', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1433', 'name' => 'Las Milpas de los Valenzuela', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1434', 'name' => 'Guamúchiles Altos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1435', 'name' => 'La Cueva', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2995', 'name' => 'Palmarito de la Sierra', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80857', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1436', 'name' => 'San Benito', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80870', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1438', 'name' => 'El Guasimal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1439', 'name' => 'Bequillos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80873', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1440', 'name' => 'El Limón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1441', 'name' => 'El Zapote de los Moya', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80875', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0020', 'name' => 'Los Chinos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1442', 'name' => 'Bebelama', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1443', 'name' => 'El Sabino Gordo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1444', 'name' => 'Lo de Félix', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2374', 'name' => 'La Huerta', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80876', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0053', 'name' => 'Pochotillos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0072', 'name' => 'La Higuerita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1446', 'name' => 'Bequillitos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1447', 'name' => 'La Palma Envuelta', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3193', 'name' => 'Palma de los Rocha', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80877', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'Aguaje de Rosa Morada', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0035', 'name' => 'Portezuelo de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0036', 'name' => 'Portezuelo de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80880', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0032', 'name' => 'La Nanche', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0038', 'name' => 'Potrero de los Guerrero', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0070', 'name' => 'La Tasajera', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0071', 'name' => 'La Estancia', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1448', 'name' => 'Rosa Morada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1449', 'name' => 'El Limoncito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1450', 'name' => 'La Calera de los Moya', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3065', 'name' => 'El Carrizal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80883', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1451', 'name' => 'Puerta de los Rocha', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2724', 'name' => 'El Guayabito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80884', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0033', 'name' => 'El Número Tres', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0044', 'name' => 'La Reforma', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0049', 'name' => 'El Sauce de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1452', 'name' => 'La Cañada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1453', 'name' => 'La Noria de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1454', 'name' => 'La Noria de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1455', 'name' => 'Batamotita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1456', 'name' => 'El Malinal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80885', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1457', 'name' => 'Jurisdicción de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1458', 'name' => 'Los Mezcales', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80886', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1459', 'name' => 'Bacamacari', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80887', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1460', 'name' => 'El Aguajito de León', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1461', 'name' => 'Potrerillos Aguajito de León', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80888', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0028', 'name' => 'Mezquite Gordo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80890', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1462', 'name' => 'El Palmar de los Leal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80893', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0076', 'name' => 'La Loma (El Altón)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1463', 'name' => 'Boca de Arroyo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1464', 'name' => 'La Misión', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80894', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1465', 'name' => 'El Pochote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80895', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0027', 'name' => 'Mecatita de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0048', 'name' => 'San Juan', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1466', 'name' => 'Mecatita de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1467', 'name' => 'Los Ángeles', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1468', 'name' => 'Tecomate', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1469', 'name' => 'La Cofradía de Soto', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80896', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0029', 'name' => 'Monte Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1470', 'name' => 'El Progreso (El Jalón)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1471', 'name' => 'Tepantita', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80897', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0037', 'name' => 'Potrerillos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80920', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1473', 'name' => 'El Platanar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1474', 'name' => 'La Nanchita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80923', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2983', 'name' => 'El Tancote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80925', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1477', 'name' => 'El Guadare', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80926', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1478', 'name' => 'El Chino', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1479', 'name' => 'El Guamúchil', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1480', 'name' => 'El Zapote de los Cázares', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80927', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1481', 'name' => 'Majada de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1482', 'name' => 'Piedras Blancas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80928', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0019', 'name' => 'Chicorato', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2984', 'name' => 'Sasalpa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80930', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0068', 'name' => 'Perico Petrolero', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0079', 'name' => 'Bachoco Pollo', 'zone_type' => 'Rural', 'settlementtype_id' => '14','zipcode_id' => $idZip],
		['key' => '1483', 'name' => 'Juan Escutia', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1498', 'name' => 'Santiago de Comanito (Comanito)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80935', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'El Barrial de Capirato', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'La Calera de Capirato', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0016', 'name' => 'La Cofradía de Capirato', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0060', 'name' => 'El Salto (De Capirato)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0073', 'name' => 'Las Aguamitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80936', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0015', 'name' => 'El Carrizo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0030', 'name' => 'La Morita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1484', 'name' => 'La Vainilla', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1485', 'name' => 'Tepuche', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1486', 'name' => 'Aguapepe de los Gallardo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2376', 'name' => 'Capirato', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80940', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'El Zapote de los Gastélum', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0075', 'name' => 'Juan Escutia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2375', 'name' => 'El Aguaje de Pericos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2377', 'name' => 'Guamuchilera Segunda', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80950', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1497', 'name' => 'Pericos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2050', 'name' => 'Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2051', 'name' => 'Fonhapo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2052', 'name' => 'Salinas de Gortari', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2053', 'name' => 'Del Parque', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2054', 'name' => 'La Loma', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80953', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0012', 'name' => 'Calomato (Calomatillo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'El Rosario (Chayo)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0034', 'name' => 'La Pipima', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0047', 'name' => 'San Francisco (El Crucero)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0078', 'name' => 'El Nazario [SPR]', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0081', 'name' => 'Albergue Calomato', 'zone_type' => 'Rural', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80954', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0052', 'name' => 'Los Altos de Jalisco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0067', 'name' => 'Dique Mariquita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1487', 'name' => 'Calomato', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1488', 'name' => 'El Rodeo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80955', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0014', 'name' => 'El Capule', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0082', 'name' => 'Santa María', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1489', 'name' => 'Agua Salada', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80956', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1490', 'name' => 'El Bueycito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80957', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0077', 'name' => 'La Loma', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1492', 'name' => 'Caimanero', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1493', 'name' => 'Estación Retes', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1495', 'name' => 'Recoveco', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80960', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1496', 'name' => 'Potrero de los Sánchez (Estación Techa)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80963', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1472', 'name' => 'Rancho Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80964', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1494', 'name' => 'Zapotillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80965', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0054', 'name' => 'San Jorge', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1476', 'name' => 'Melchor Ocampo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80966', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1475', 'name' => 'Tierritas Blancas', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '80967', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0050', 'name' => 'Tobora', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '011', 'name' => 'Guasave', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81000', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0579', 'name' => 'Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81010', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0581', 'name' => 'Ocoro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81014', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0582', 'name' => '2 de Octubre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2703', 'name' => 'Fresno', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81015', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0583', 'name' => 'La Florida', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2174', 'name' => 'Once Ríos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81016', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0584', 'name' => 'Revolución Mexicana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81017', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0585', 'name' => 'La Piedrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81018', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0586', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81020', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0588', 'name' => 'Ejidal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81028', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0518', 'name' => 'Ayuntamiento 92', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0563', 'name' => 'San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0565', 'name' => 'San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0589', 'name' => 'Valle Bonito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1983', 'name' => 'Josefa Ortiz de Domínguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81029', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0169', 'name' => 'Zona Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '0529', 'name' => 'Eduardo Labastida', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0549', 'name' => 'Los Sauces', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0571', 'name' => 'STASE', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0590', 'name' => 'Sinaloa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1987', 'name' => 'México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81030', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2173', 'name' => 'Sector La Ermita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2899', 'name' => 'Sector DIF', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81040', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0528', 'name' => 'Del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0593', 'name' => 'Ángel Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81042', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0561', 'name' => 'San Carlos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81043', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0530', 'name' => 'Electricistas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0575', 'name' => 'Valle del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1984', 'name' => 'San Fernando', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81044', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'Fundadores Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81045', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'Ampliación Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0170', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0553', 'name' => 'Petatlán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1988', 'name' => 'Margaritas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2850', 'name' => 'Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81048', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Residencial Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0540', 'name' => 'Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0595', 'name' => 'Lomas del Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1990', 'name' => 'U.N.E.', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1991', 'name' => 'Delicias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2178', 'name' => 'Jardines del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2180', 'name' => 'Las Garzas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2267', 'name' => 'Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2849', 'name' => 'Unión de Colonos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81049', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Santa Clara', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'Miguel Leyson Pérez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0522', 'name' => 'Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0539', 'name' => 'Las Glorias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0596', 'name' => 'Constelación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2176', 'name' => 'Doctores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2177', 'name' => 'San Joachin', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81050', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0597', 'name' => 'Sector Rivera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81060', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0600', 'name' => 'Magisterial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81065', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Universitaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0602', 'name' => '24 de Febrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1992', 'name' => 'Tecomate', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81066', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0603', 'name' => '18 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81075', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Privada Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0605', 'name' => 'Las Huertas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81077', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0606', 'name' => 'Makarenko', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81090', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0612', 'name' => 'El Chaleco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0613', 'name' => 'Tierra y Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81095', 'locality' => 'Guasave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0557', 'name' => 'Renato Vega Amador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0614', 'name' => '17 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2182', 'name' => 'Jardines del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81100', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'Cabreritas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0012', 'name' => 'Las Choyitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0013', 'name' => 'Lázaro Cárdenas del Río', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'Las Playitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'El Arroyo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0016', 'name' => 'La Pelti', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0615', 'name' => 'El Varal (San Sebastián Número Uno)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2427', 'name' => 'San Sebastián 2', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81101', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0024', 'name' => 'La Línea', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0025', 'name' => 'Las Guásimas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0026', 'name' => 'El Mezquital', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0027', 'name' => 'Canal 21', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0029', 'name' => 'Canal Alto', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0030', 'name' => 'Los Guayacanes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0031', 'name' => 'La Entrada', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0033', 'name' => 'Agua Escondida', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0034', 'name' => 'La Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0035', 'name' => 'La Providencia (Guayparime)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0036', 'name' => 'El Campito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0039', 'name' => 'Casa de la Comisión', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0616', 'name' => 'Caimanero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0617', 'name' => 'Cofradía de Tamazula (La Cofradía)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0619', 'name' => 'El Dorado', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0620', 'name' => 'Guasavito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0621', 'name' => 'La Entrada Vieja', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0622', 'name' => 'Los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0623', 'name' => 'Ranchito de Castro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0624', 'name' => 'San Joachín', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2428', 'name' => 'Utatave (Mautillos)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2429', 'name' => 'San José de Guayparime', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2494', 'name' => 'Emilio Portes Gil (Agua Blanca)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2582', 'name' => 'La Sabanilla [Campo Preciado]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2661', 'name' => '5 de Mayo (Agua Blanca)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2710', 'name' => 'La Uva', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0017', 'name' => 'Las Compuertas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Campo Bórquez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'Agua Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'Las Moritas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'Agua Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'Agua Blancona', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'San Fernandito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81102', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0625', 'name' => 'Gambino', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81103', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0037', 'name' => 'El Cercón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0038', 'name' => 'La Cuchilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0040', 'name' => 'Ranchito de Caimanero (Infiernito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0041', 'name' => 'Las Pitahayas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0042', 'name' => 'Las Palmitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2430', 'name' => 'El Cuitabón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2431', 'name' => 'Plan del Río', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2432', 'name' => 'Las Juntitas de Valdez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2581', 'name' => 'Ladrilleras de Ocoro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81104', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0028', 'name' => 'Canal 21', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0043', 'name' => 'La Virgencita (Lindavista)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0045', 'name' => 'Choipa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0046', 'name' => 'Camagüey (Campo Bórquez)', 'zone_type' => 'Rural', 'settlementtype_id' => '14','zipcode_id' => $idZip],
		['key' => '0047', 'name' => 'Santa Teresa de los Olivos (Los Pinitos)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0048', 'name' => 'El Amolito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2433', 'name' => 'Ranchito de Inzunza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2434', 'name' => 'La Escalera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81106', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2435', 'name' => 'Callejones de Guasavito', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2436', 'name' => 'San Pedro Paredes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2437', 'name' => 'Las Crucecitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81107', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0032', 'name' => 'Campo Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0049', 'name' => 'La Mojonera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0050', 'name' => 'Campo Dimas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0051', 'name' => 'Campo Inzunza', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0052', 'name' => 'Chino de los López', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0053', 'name' => 'Campo Tajín', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2438', 'name' => 'San Pedro Guasave (El Ranchito)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2439', 'name' => 'Chorohui', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2440', 'name' => 'San Gabriel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2441', 'name' => 'La Cuestona (La Cuesta)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2442', 'name' => 'Las Pitahayitas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2443', 'name' => 'La Guamuchilera', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2444', 'name' => 'Jesús María', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2495', 'name' => 'Cuesta de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81108', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0054', 'name' => 'El Toro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0055', 'name' => 'El Chinal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0056', 'name' => 'El Colorado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0057', 'name' => 'Sabanillas del Burrión', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0058', 'name' => 'Las Ladrilleras del Burrión', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0059', 'name' => 'Las Joyitas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81110', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0627', 'name' => 'Juan José Ríos', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81113', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0060', 'name' => 'Babujaqui', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0061', 'name' => 'Guayparime', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0062', 'name' => 'Campo Treinta y Ocho', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0063', 'name' => 'La Diez', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2445', 'name' => 'Héroes Mexicanos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2575', 'name' => 'Treinta y Ochito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81117', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0064', 'name' => 'Paraíso', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0065', 'name' => 'San Carlos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0629', 'name' => 'Miguel Alemán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81118', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0630', 'name' => 'El Cerro Cabezón', 'zone_type' => 'Urbano', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81119', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0631', 'name' => 'Bachoco', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81120', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0066', 'name' => '24 de Febrero', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0067', 'name' => 'Sacramento (Campo la Once)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2583', 'name' => 'La Once', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81121', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0068', 'name' => 'Campo el Tajito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0069', 'name' => 'Campo el Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0070', 'name' => 'San Luis', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0071', 'name' => 'Campo las Margaritas Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0634', 'name' => 'Adolfo Ruiz Cortinez', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1718', 'name' => 'Campestre Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1719', 'name' => 'Rancho California', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2446', 'name' => 'El Campesino', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3186', 'name' => 'Adolfo Ruiz Cortinez Dos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81122', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0635', 'name' => 'Gabriel Leyva Solano', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2576', 'name' => 'Figueroa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3033', 'name' => 'Ampliación Leyva Solano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3035', 'name' => 'San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81123', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0072', 'name' => 'Jesús María', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2447', 'name' => 'El Huitussi y Anexos (El Huitussito)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81124', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0637', 'name' => 'Corerepe', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '3188', 'name' => 'Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3189', 'name' => 'El Gallo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81127', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0171', 'name' => 'El Retiro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0633', 'name' => 'Lic. Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1733', 'name' => 'El Tajito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3034', 'name' => 'Gallo de los Limones', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81128', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0073', 'name' => 'California', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2577', 'name' => 'Las Parritas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2578', 'name' => 'Campo Figueroa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81130', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0074', 'name' => 'Francisco Ley', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0640', 'name' => 'León Fonseca', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81131', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0642', 'name' => 'La Trinidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81132', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0075', 'name' => 'Las Moritas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0076', 'name' => 'La Aceituna', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0643', 'name' => 'Portugués de Gálvez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2584', 'name' => 'Las Juntas de Chamicari', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81133', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0077', 'name' => 'Palos Verdes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0078', 'name' => 'Los Hornos Número Uno (Salsipuedes)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0644', 'name' => 'Las Moras', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0645', 'name' => 'Las Quemazones', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0646', 'name' => 'Los Hornos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81134', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0079', 'name' => 'El Toruno', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81135', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0080', 'name' => 'El Tanque', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0081', 'name' => 'La Palmita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2448', 'name' => 'El Zopilote', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81136', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0082', 'name' => 'Los Pinitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0083', 'name' => 'La Familia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0641', 'name' => 'La Noria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2669', 'name' => 'Abelardo L. Rodríguez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81140', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0648', 'name' => 'Bamoa', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1734', 'name' => '6 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2585', 'name' => 'Ranchito de Zavala', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3187', 'name' => 'Horacio Gracía Arrayales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81141', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0084', 'name' => 'Crucero de Bamoa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0649', 'name' => 'Estación Bamoa', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81142', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0650', 'name' => 'El Sabino', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2449', 'name' => 'Carboneras', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81143', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0085', 'name' => 'La Cuerda', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0086', 'name' => 'Las Pilas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0618', 'name' => 'Chino de los López', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0651', 'name' => 'Orba (Infiernito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2450', 'name' => 'Cruz Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81144', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0652', 'name' => 'Nío', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0654', 'name' => 'Pueblo Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81147', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0087', 'name' => 'Tahuilana (El Chorizo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0653', 'name' => 'Norotillos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81148', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0088', 'name' => 'Campo California', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0089', 'name' => 'El Tecomate', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0090', 'name' => 'La Curva', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0091', 'name' => 'San José de Palos Blancos (Palos Blancos)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0092', 'name' => 'Campo Sinaloa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0093', 'name' => 'Nío Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0094', 'name' => 'Charco Largo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0657', 'name' => 'Palos Blancos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2451', 'name' => 'Terahuito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2452', 'name' => 'El Platanito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81149', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0658', 'name' => 'El Burrión', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81160', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0095', 'name' => 'Bonanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0096', 'name' => 'San Rafael', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0659', 'name' => 'Cubilete 1', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2207', 'name' => 'Sodi [Productora Agrícola]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2216', 'name' => 'Campo Crucero [Campo Díaz]', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2453', 'name' => 'El Marcol', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81161', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0097', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0098', 'name' => 'Dorado Número Tres (Doradito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0099', 'name' => 'Campo Treinta y Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0660', 'name' => 'Buenavista', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81162', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0100', 'name' => 'Campo Yory', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0101', 'name' => 'Palos Dulces', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0102', 'name' => 'Tapachula (Los Chapos)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0103', 'name' => 'La Rosita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0105', 'name' => 'Tapachula', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0106', 'name' => 'Torihuia', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0107', 'name' => 'Campo el Jito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0108', 'name' => 'Las Tortugas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0109', 'name' => 'Los Añiles', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0661', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2454', 'name' => 'La Chuparrosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2455', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2586', 'name' => 'Campo Filipinas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81163', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2456', 'name' => 'El Sacrificio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2457', 'name' => 'El Tortugo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2458', 'name' => 'Maximiliano R. López (El Pochote)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2496', 'name' => 'Cubilete Número Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81164', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0110', 'name' => 'Las Cañadas Número Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0111', 'name' => 'El Mezquitón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0112', 'name' => 'San Carlos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0113', 'name' => 'San Fernando', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0114', 'name' => 'El Dorado Número Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0115', 'name' => 'Chorohui', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2459', 'name' => 'Roberto Barrios', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81165', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2497', 'name' => 'Flor de Mayo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81166', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0116', 'name' => 'Mendívil', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0117', 'name' => 'General Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0118', 'name' => 'Callejón de Tamazula', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0119', 'name' => 'Los Hornos Número Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2668', 'name' => 'El Coloradito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81167', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0120', 'name' => '22-15 [Campo Pesquero]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0636', 'name' => 'El Huitussi', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2460', 'name' => 'El Caracol', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81170', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0662', 'name' => 'El Amole', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0663', 'name' => 'La Bebelama', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0664', 'name' => 'Callejones de Tamazula', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0665', 'name' => 'Tamazula', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2461', 'name' => 'Buen Retiro (El Retiro)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2498', 'name' => 'Cubiri del Amole', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81173', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0121', 'name' => 'El Bajío', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0122', 'name' => 'La Isleta', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0123', 'name' => 'Las Pilas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81174', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0124', 'name' => 'Valle de Huyaqui (Los Solares)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0125', 'name' => 'Las Colonias (Colonia Ángel Flores)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81175', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0126', 'name' => 'Tierra y Libertad', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0127', 'name' => 'Las Cañadas Viejas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0128', 'name' => 'El Guayabo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0129', 'name' => 'Santa Elena', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0130', 'name' => 'El Crucero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0632', 'name' => 'El Progreso', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2462', 'name' => 'Las Cañadas Número Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81176', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2206', 'name' => 'Las Flores', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2246', 'name' => 'Las Culebras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81177', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0131', 'name' => 'Alamito Caimanero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0132', 'name' => 'La Pitahaya', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0133', 'name' => 'Rosales', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0134', 'name' => 'Carricitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2463', 'name' => 'Las Higueras (Las Flores)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81178', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0135', 'name' => 'Campo Berrelleza', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0136', 'name' => 'El Alto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0137', 'name' => 'Río Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0138', 'name' => 'El Choyal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0139', 'name' => 'El Realito (El Realito del Amole)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0140', 'name' => 'El Papachal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0141', 'name' => 'El Carrizal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0142', 'name' => 'Tres de Mayo (Nombre Feo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0143', 'name' => 'El Bacatete (San Pascual)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0626', 'name' => 'Las Playas (La Palma)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0666', 'name' => 'Casa Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0667', 'name' => 'Palos Verdes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2708', 'name' => 'San Pascual', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81180', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0144', 'name' => 'Charco Largo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0145', 'name' => 'Paul', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0146', 'name' => 'Los Tesitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0147', 'name' => 'Las Cuchillas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0669', 'name' => 'La Pichihuila', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0670', 'name' => 'San Rafael (General Miguel Valle Dávalos)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2204', 'name' => 'El Serranito', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2294', 'name' => 'Palmarito de los Angulo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2711', 'name' => 'El Pochote (Potrerillos)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81181', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0671', 'name' => 'Francisco R Serrano', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81182', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0148', 'name' => 'Norotíos Cuba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0149', 'name' => 'Norotío (El Gato)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0150', 'name' => 'San Martín', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0672', 'name' => 'Las Américas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81183', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0151', 'name' => 'San Francisco de Capomos (El Charro)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0152', 'name' => 'El Varali', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2205', 'name' => 'Choipa Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2464', 'name' => 'Herculano de la Rocha', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2465', 'name' => 'Choipa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81184', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0153', 'name' => 'San Marcial', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0154', 'name' => 'El Reparo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0155', 'name' => 'Estación Capomas', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0156', 'name' => 'Ricardo Flores Magón (La Aceituna)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0168', 'name' => 'San Francisco de Capomos Viejos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0668', 'name' => 'San Francisquito de Capomos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81186', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0157', 'name' => '15 de Octubre', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0158', 'name' => 'La Curva', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2466', 'name' => 'Las Brisas (Emiliano Zapata)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81189', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0159', 'name' => 'Campo América', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0160', 'name' => 'Campo Santa Isabel', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0161', 'name' => 'Las Cruces', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0162', 'name' => 'Cuatro Caminos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0163', 'name' => 'El Sartenejal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0164', 'name' => 'El Batallón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0165', 'name' => 'Las Compuertas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0166', 'name' => 'El Pochote', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0673', 'name' => 'El Pitahayal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2467', 'name' => 'Vicente Guerrero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2499', 'name' => 'Javier Rojo Gómez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81190', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0674', 'name' => 'La Brecha', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0675', 'name' => 'San José de la Brecha', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81197', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0167', 'name' => 'Las Glorias', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2203', 'name' => 'Boca del Río', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '001', 'name' => 'Ahome', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81200', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0676', 'name' => 'Primer Cuadro (Centro)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81210', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0680', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81215', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0681', 'name' => 'ISSSTESIN', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2401', 'name' => 'Las Fuentes 2000', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81216', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0682', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1571', 'name' => 'Reyes Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1998', 'name' => 'Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1999', 'name' => 'Gaviotas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81217', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0683', 'name' => 'Narciso Mendoza (Las Malvinas)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81218', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0684', 'name' => 'Conrado Espinoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81220', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0685', 'name' => 'Sector Fátima', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0686', 'name' => 'Jiquilpan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1565', 'name' => 'Jordan', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81223', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0688', 'name' => 'Las Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1570', 'name' => 'Deportivo y Rincón', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81224', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0689', 'name' => 'Juan Cota', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81225', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0690', 'name' => 'Ávila Corona', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1569', 'name' => 'Sanchez Ruiz', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81226', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0691', 'name' => 'Jardines de Fátima', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81227', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0692', 'name' => 'Fovissste', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81228', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Privada Palladio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0024', 'name' => 'Ampliación Viñedos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0694', 'name' => 'Macapule Infonavit', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '2005', 'name' => 'Residencial Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2145', 'name' => 'Bosques Del Country', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2310', 'name' => 'Viñedos Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2936', 'name' => 'Privada Toscana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2939', 'name' => 'Daniel Biul Ruelas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81229', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0695', 'name' => 'Palos Verdes Infonavit', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '1568', 'name' => 'Jiquilpan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1575', 'name' => 'Tepeka', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1996', 'name' => 'Residencial Diamante', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2004', 'name' => 'Fuentes Del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81230', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0696', 'name' => 'Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0697', 'name' => 'Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0698', 'name' => 'Ruben Jaramillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81233', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2393', 'name' => 'Los Sabinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2399', 'name' => 'FOVISSSTE 3', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2517', 'name' => 'Residencial Palmira', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0699', 'name' => 'México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1499', 'name' => 'Flor de las Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1564', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1926', 'name' => 'Providencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2143', 'name' => 'Nuevo Horizonte', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2144', 'name' => 'Valle Cañaveral', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81234', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0700', 'name' => 'El Chamizal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0701', 'name' => 'Del Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1500', 'name' => '75 (Heriberto Valdez Romero)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1924', 'name' => 'Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1925', 'name' => 'Valle Bonito', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2864', 'name' => 'Carolina Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2865', 'name' => 'Bosques del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81235', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0702', 'name' => 'San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81236', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0703', 'name' => 'Alfonso G Calderón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1510', 'name' => '10 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81237', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0705', 'name' => 'Estrella', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81238', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0706', 'name' => 'Adolfo Lopez Mateos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0707', 'name' => '28 de Junio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81240', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0710', 'name' => 'Scally', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1502', 'name' => 'Jordan Jiquilpan', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1514', 'name' => 'Valentín Gutiérrez', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1517', 'name' => 'Ibarra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1518', 'name' => 'Julia Viuda de Ríos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1519', 'name' => 'Popular Blanca Gastelum', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1520', 'name' => 'Zaky Muez', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1521', 'name' => 'Mario Avilez', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1522', 'name' => 'Alfredo Salazar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1523', 'name' => 'Alma Guadalupe Estrada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1524', 'name' => 'Dolores Castro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1525', 'name' => 'Mayra H Pamplona', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1526', 'name' => 'Germán Arroyo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2394', 'name' => 'Las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2403', 'name' => 'Ernesto Hays Borbo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2866', 'name' => 'Toledo Ceballos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81245', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0712', 'name' => 'Jardines Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1504', 'name' => 'Jardines Del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1515', 'name' => 'Jordan Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1516', 'name' => 'Gastelum', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1527', 'name' => 'Ofelia Duarte', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1535', 'name' => 'Deportivo Country Club', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2397', 'name' => 'Grijalva', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81247', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0714', 'name' => 'Bachomo Infonavit', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0717', 'name' => 'Los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1528', 'name' => 'Islas Residenciales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1928', 'name' => 'Los Sauces', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81248', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Álamo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0025', 'name' => 'José Ángel Ferrusquilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0718', 'name' => 'Cuauhtémoc', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0719', 'name' => 'Jardines del Country', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0720', 'name' => 'Álamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1501', 'name' => 'Jardines del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1529', 'name' => 'Los Olivos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1530', 'name' => 'Primavera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1531', 'name' => 'Monico Soto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2404', 'name' => 'Del Carmen', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2405', 'name' => 'Monferrat', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2862', 'name' => 'Residencial del Country', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2863', 'name' => 'Real del Country', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2925', 'name' => 'Álamos I', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2926', 'name' => 'Álamos II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2928', 'name' => 'U.A.S. Álamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81249', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0721', 'name' => 'Lastras Altamirano', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0722', 'name' => 'Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0723', 'name' => 'Residencial Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0724', 'name' => 'Teresita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1509', 'name' => 'Progresivo San Rafael', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1567', 'name' => 'Menonitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1923', 'name' => 'INFONAVIT Mochicahui II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2003', 'name' => 'Jardines de Zacatecas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3008', 'name' => 'Villas del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81250', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0725', 'name' => 'La Cuchilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81254', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0027', 'name' => 'Universidad de los Mochis', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
		['key' => '1573', 'name' => 'Centro Plaza Mochis', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1574', 'name' => 'Loma Dorada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2002', 'name' => 'La Memoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2867', 'name' => 'Mallorca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2877', 'name' => 'Versalles Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2930', 'name' => 'Parque Industrial Ecológico', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '3089', 'name' => 'Monte Carlo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81255', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0726', 'name' => 'Zona Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81256', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0727', 'name' => 'Ingeniero Heriberto Valdez Romero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0728', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1511', 'name' => 'Central de Abastos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1920', 'name' => 'Bellavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1922', 'name' => 'Villa Huites', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2398', 'name' => 'FOVISSSTE Tabachines IV', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2400', 'name' => 'Jiquilpan 2', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2933', 'name' => 'INFONAVIT Mochicahui', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81257', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0729', 'name' => 'Tabachines', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1507', 'name' => 'Roberto Perez Jacobo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2195', 'name' => 'Villa Owen', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81259', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0730', 'name' => 'Del Parque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81260', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'Hacienda Santa Clara', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0731', 'name' => 'Alejandro Peña', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0732', 'name' => 'Rosendo G Castro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1556', 'name' => 'Realito', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1557', 'name' => 'La Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2515', 'name' => 'Las Mañanitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2945', 'name' => 'Valle Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81263', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0012', 'name' => 'Real Aurora', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2396', 'name' => 'Las Glorias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2420', 'name' => 'Santa Lourdes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2519', 'name' => 'Prados del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2521', 'name' => 'Santa Rosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2931', 'name' => 'Residencial Aurora', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81265', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0733', 'name' => 'Ferrocarril', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2407', 'name' => 'Residencial Ahome 2000', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81270', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0014', 'name' => 'Quinta de Cortes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0734', 'name' => 'Gabriel Leyva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0735', 'name' => 'Margarita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1505', 'name' => 'Jardines de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1542', 'name' => 'Villa de Cortes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1544', 'name' => 'Terranova', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1545', 'name' => 'San Fernando', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1546', 'name' => 'Conquistadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1921', 'name' => 'Villas Monterrey', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2000', 'name' => 'Los Naranjos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2001', 'name' => 'Residencial Platino', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2137', 'name' => 'Campanario', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2147', 'name' => 'Paseo de las Aves', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2408', 'name' => 'Las Huertas II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2520', 'name' => 'Salvador Esquer Apodaca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2858', 'name' => 'Las Quintas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2927', 'name' => 'Las Huertas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81271', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Real del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'Tulipanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0016', 'name' => 'Villa Fontana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0736', 'name' => '12 de Octubre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1548', 'name' => 'Sierra Bonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1549', 'name' => 'Santa Cecilia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1577', 'name' => 'Santa Teresa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2006', 'name' => 'Álamos Country', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2007', 'name' => 'Residencial Paseo Alameda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2134', 'name' => 'Zafiro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2136', 'name' => 'Santa Bárbara', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2304', 'name' => 'Paseo Alameda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2675', 'name' => 'Portal de Hierro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2857', 'name' => 'Las Villas Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2944', 'name' => 'Villa de Cortez', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3030', 'name' => 'Quinta Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81277', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Haciendas Country', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0737', 'name' => 'Las Delicias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1927', 'name' => 'Hacienda del Arroyo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2255', 'name' => 'Palmera Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2409', 'name' => 'Las Haciendas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2861', 'name' => 'Hacienda Arroyo Pioneros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81278', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Valle de la Rosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Alcázar del Country', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0028', 'name' => 'Haciendas del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0029', 'name' => 'Buenavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0738', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1559', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1560', 'name' => 'Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1561', 'name' => 'Santa Alicia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1562', 'name' => 'Cedros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1563', 'name' => 'Colon', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2135', 'name' => 'El Dorado', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2248', 'name' => 'Los Virreyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2410', 'name' => 'La Esmeralda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2851', 'name' => 'Santa Catalina', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2860', 'name' => 'San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2937', 'name' => 'Valle del Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3056', 'name' => 'Urbi Villa del Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81280', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0739', 'name' => 'Anáhuac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0740', 'name' => 'Bienestar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0741', 'name' => 'Insurgentes Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1503', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1532', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1533', 'name' => 'Vivienda Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1534', 'name' => 'Sinaloa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81285', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0742', 'name' => 'Antonio Toledo Corro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1508', 'name' => 'Raul Romanillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1512', 'name' => 'STASE Los Álamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1541', 'name' => 'Francisco Labastida Ochoa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2247', 'name' => 'La Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2322', 'name' => 'La Florida', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2392', 'name' => 'Residencial Mar de Cortés', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2395', 'name' => 'Las Isabeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2412', 'name' => 'Universitario', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2518', 'name' => 'Prados del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3080', 'name' => 'STASE IV', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81289', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0743', 'name' => 'La Herradura', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1536', 'name' => 'Parque Sinaloa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2419', 'name' => 'Americana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81290', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0744', 'name' => 'Burócrata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0745', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1538', 'name' => 'Lopez Portillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2971', 'name' => 'Ampliación Burócrata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81293', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'Real de Santiago', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1543', 'name' => 'Pradera de Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2256', 'name' => 'Las Misiones', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2269', 'name' => 'Mediterráneo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2413', 'name' => 'Las Nubes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2414', 'name' => 'Real de Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2855', 'name' => 'Villa Centenario', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2934', 'name' => 'Jardines de Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2935', 'name' => 'Villa de Santiago', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2938', 'name' => 'Montebello', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2978', 'name' => 'Privanzas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81294', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0055', 'name' => 'Andalucía', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1513', 'name' => 'Prado Bonito', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1539', 'name' => 'Los Laureles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1550', 'name' => 'Siglo XXI', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1551', 'name' => 'Jardines de Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1552', 'name' => 'Nueva Revolución', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1553', 'name' => 'Almendras', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1576', 'name' => 'Las Azucenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2139', 'name' => 'Lázaro Cárdenas Del Rio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2140', 'name' => 'Catarinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2141', 'name' => 'Nuevo Siglo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2270', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2416', 'name' => 'Prados III', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2417', 'name' => 'Camelias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2852', 'name' => 'La Primavera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2853', 'name' => 'Las Cerezas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2929', 'name' => 'Jardines de Primavera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3014', 'name' => 'Niños Héroes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3017', 'name' => 'La Cantera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81295', 'locality' => 'Los Mochis', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1554', 'name' => 'Los Girasoles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1555', 'name' => 'Las Cañas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2138', 'name' => 'Las Praderas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2391', 'name' => 'Morelos CTM', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2418', 'name' => 'Morelos CTM 2', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2854', 'name' => 'Santa Luz', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2856', 'name' => 'Los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2932', 'name' => 'San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3015', 'name' => 'Los Portales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81300', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0747', 'name' => 'Huatabampito', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0749', 'name' => 'Mayocoba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2554', 'name' => 'Campo Gastelum', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2559', 'name' => 'Tozalibampo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2560', 'name' => 'Tabelojeca', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81303', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2300', 'name' => 'Agua Nueva', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81304', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0023', 'name' => 'El Embudo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0030', 'name' => 'El Añil', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0035', 'name' => 'Las Varitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0042', 'name' => 'Goros Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0045', 'name' => 'Camayeca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0051', 'name' => 'El Chalate', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0753', 'name' => 'Zapotillo 1', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0782', 'name' => 'Los Goros', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0783', 'name' => 'San Miguel Zapotitlán', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2056', 'name' => 'Mezcalera', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2057', 'name' => 'Juricahui', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2058', 'name' => 'Paroscahui', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2423', 'name' => 'Nuevo San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2555', 'name' => 'Bacaporobampo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2556', 'name' => 'Choacahui', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2557', 'name' => 'Bajada de San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2558', 'name' => 'Las Calaveras', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2666', 'name' => 'Vallejo (Porvenir Vallejo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81305', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0785', 'name' => 'Flor Azul', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0786', 'name' => 'Gabriel Leyva Solano (Zapotillo Dos)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81306', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0034', 'name' => 'La Fortuna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0043', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0047', 'name' => 'La Fortuna (La Primavera)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0752', 'name' => 'Goros 2', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0756', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2561', 'name' => 'Bagojo del Río (Bombas Aguilas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2574', 'name' => 'Cachoana', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81307', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0033', 'name' => 'La Esmeralda', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0754', 'name' => 'Águila Azteca', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2562', 'name' => 'Macapule', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81308', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0784', 'name' => 'Bolsa de Tosalibampo 1', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81310', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0750', 'name' => 'Bagojo Colectivo', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0751', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2657', 'name' => 'Cuchilla de Cachoana', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81311', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0748', 'name' => 'Los Suárez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0757', 'name' => 'El Guayabo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81312', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0759', 'name' => 'Cohuibampo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81315', 'locality' => 'Ahome', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'Puesta de Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1757', 'name' => 'Individual Ahome', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1760', 'name' => 'Hidráulica', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1763', 'name' => 'Ahome Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81316', 'locality' => 'Ahome', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0020', 'name' => 'La Florida', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1755', 'name' => 'Las Bombitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1756', 'name' => 'Inzunza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1758', 'name' => 'Melchor Ocampo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1762', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2040', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2896', 'name' => 'San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81317', 'locality' => 'Ahome', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1759', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81318', 'locality' => 'Ahome', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2039', 'name' => 'Ahome Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81320', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0039', 'name' => 'El Cardal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81323', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0046', 'name' => 'El Peluchín', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81324', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0773', 'name' => 'La Despensa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81325', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0052', 'name' => 'El Molino', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0778', 'name' => 'El Refugio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81326', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0776', 'name' => 'Huacaporito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0777', 'name' => 'San Pablo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81330', 'locality' => 'Higuera de Zaragoza', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0018', 'name' => 'La Capilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'Gloria Ochoa de Labastida', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0026', 'name' => 'Guasavito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1764', 'name' => 'Higueras de Zaragoza Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1765', 'name' => 'San Lorenzo Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1767', 'name' => 'Hidráulica', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1768', 'name' => 'Ejidal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1769', 'name' => 'Buenavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1770', 'name' => 'Francisco Ceballos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81333', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2244', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81334', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0036', 'name' => 'Matacahui (El Campito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1771', 'name' => 'Nueva', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2233', 'name' => 'Las Lajitas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2563', 'name' => 'Jitzamuri', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2564', 'name' => 'Bolsa de Tozalibampo Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81335', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0031', 'name' => 'El Ranchito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0774', 'name' => 'San Lorenzo Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0779', 'name' => 'Los Algodones', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81336', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0781', 'name' => 'San José de Ahome', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81337', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0049', 'name' => 'Ohuime', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0780', 'name' => 'El Aguajito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81340', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0769', 'name' => 'Poblado 5', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0770', 'name' => 'Chihuahuita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0771', 'name' => 'Poblado 6 (Los Natoches)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81341', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0764', 'name' => 'Mártires de Sinaloa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0765', 'name' => 'Gral. Guillermo Chavez Talamantes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0766', 'name' => 'Niños Héroes de Chapultepec', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81343', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0761', 'name' => 'Gustavo Díaz Ordaz (El Carrizo)', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1735', 'name' => 'Antonio Toledo Corro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2424', 'name' => 'Revolución Mexicana', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2565', 'name' => 'Venustiano Carranza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81344', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0054', 'name' => 'El Hecho', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81345', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0037', 'name' => 'El Desengaño', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2667', 'name' => 'Emigdio Ruiz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81346', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Alfonso G. Calderón (Poblado Siete)', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81349', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0762', 'name' => 'Bacorehuis', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0763', 'name' => 'Dolores Hidalgo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0767', 'name' => 'Sinaloa de Leyva', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81350', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0788', 'name' => 'Las Grullas Margen Derecho', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0789', 'name' => 'El Colorado', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0792', 'name' => 'Las Grullas Margen Izquierdo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2232', 'name' => 'El Alhuate', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81351', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0048', 'name' => 'Las Quintas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0790', 'name' => 'La Florida', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0791', 'name' => 'El Bule', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81353', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0032', 'name' => 'Cobayme', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81360', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0794', 'name' => 'Dieciocho de Marzo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0795', 'name' => 'Felipe Angeles', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2301', 'name' => 'Cerrillos (campo 35)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2656', 'name' => 'Cereso Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81361', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0050', 'name' => 'El Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0793', 'name' => 'Compuertas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0803', 'name' => '5 de Mayo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0804', 'name' => 'Campo La Arrocera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81363', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0796', 'name' => 'Los Mochis', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0800', 'name' => '20 de Noviembre Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2946', 'name' => '20 de Noviembre Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81364', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0799', 'name' => 'Ricardo Flores Magón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81367', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0797', 'name' => 'Louisiana', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0802', 'name' => 'Plan de San Luis', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2658', 'name' => 'Albergue Louisiana', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3055', 'name' => 'Santa Bárbara (Cabaihunaca)', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81369', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0805', 'name' => 'Los Mochis (Los Mochis)', 'zone_type' => 'Rural', 'settlementtype_id' => '1','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81370', 'locality' => 'Topolobampo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0015', 'name' => 'Atardeceres', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0806', 'name' => 'Topolobampo Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3182', 'name' => 'Topolobampo', 'zone_type' => 'Urbano', 'settlementtype_id' => '20','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81372', 'locality' => 'Topolobampo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0021', 'name' => 'Correos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'Secundaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1879', 'name' => 'Plaza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1884', 'name' => 'Estación 1', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1885', 'name' => 'Aduana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1886', 'name' => 'Capilla San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1887', 'name' => 'San José 1', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1888', 'name' => 'San José 2', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1889', 'name' => 'El Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1890', 'name' => 'Kilómetro 23', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1891', 'name' => 'Pestalozzi', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1892', 'name' => 'Varadero 1', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1893', 'name' => 'Varadero 2', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1894', 'name' => 'Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '1895', 'name' => 'Sindicatura', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81373', 'locality' => 'Topolobampo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1880', 'name' => 'Banamex', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1881', 'name' => 'Seguro Social', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1897', 'name' => 'Los Conchos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1899', 'name' => 'Pérgola 1', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1900', 'name' => 'Pérgola 2', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1901', 'name' => 'Providencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1902', 'name' => 'Mendez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1903', 'name' => 'Secretaria de Marina', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1904', 'name' => 'Sindicato', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1905', 'name' => 'Estándar', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '1906', 'name' => 'Telmex', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1907', 'name' => 'Pesquera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1908', 'name' => 'Secretaria de Marina Bajos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3016', 'name' => 'Iglesia de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81374', 'locality' => 'Topolobampo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1883', 'name' => 'CET Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1896', 'name' => 'La Guasima', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81375', 'locality' => 'Topolobampo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1882', 'name' => 'Estación 2', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1909', 'name' => 'INFONAVIT La Curva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1910', 'name' => 'Cartolandia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1911', 'name' => '24 de Febrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81376', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0808', 'name' => 'Ohuira', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81377', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0041', 'name' => 'Campo Guadalupe Estrada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0044', 'name' => 'Topolobampo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0801', 'name' => 'Rosendo G. Castro', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2566', 'name' => 'Paredones', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81378', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0809', 'name' => 'Bachomobampo 1', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0810', 'name' => 'Bachomobampo 2', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81379', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0807', 'name' => '9 de Diciembre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0811', 'name' => 'Plan de Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2425', 'name' => 'Plan de Ayala (Campo Cinco)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3011', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81380', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0053', 'name' => 'Nuevo Luis Echeverría', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81383', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Los Batequis', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81384', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0813', 'name' => 'Primero de Mayo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81386', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2659', 'name' => 'El Estero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81390', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2567', 'name' => 'Lázaro Cárdenas (Muellecito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81393', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'Carrizo Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0038', 'name' => 'Bachoco Número Dos (Macochín)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0040', 'name' => 'Cerro Cabezón (El Chorrito)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '015', 'name' => 'Salvador Alvarado', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81400', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0814', 'name' => 'Zona Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0815', 'name' => 'Empleados de FFCC Nacionales de México Secc 26', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0851', 'name' => 'Empleados de FFCC Nacionales de México Secc 27', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81410', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0817', 'name' => 'Lomas del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0818', 'name' => 'Ampliación Lomas del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0819', 'name' => 'Santa Rosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81413', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0523', 'name' => 'CANACO', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0548', 'name' => 'Los Mautos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81420', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0820', 'name' => 'San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81426', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0546', 'name' => 'Los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0821', 'name' => '5 de Febrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81427', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0822', 'name' => 'La Cuesta de Higuera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2086', 'name' => 'Los Laureles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2087', 'name' => 'Buenos Aires', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2091', 'name' => 'Villahermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81429', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0823', 'name' => '10 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81430', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0824', 'name' => 'Agustina Ramírez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0825', 'name' => 'Niños Héroes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2154', 'name' => 'El Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2892', 'name' => 'Privada San Felipe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81440', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0826', 'name' => 'Militar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0827', 'name' => '15 de Julio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1972', 'name' => 'Viva Bien', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1974', 'name' => '12 de Enero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81448', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Fernando Irizar López', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0541', 'name' => 'Lomas de las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0829', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0830', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2872', 'name' => 'Profesionistas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3050', 'name' => 'Colinas de San Ambrosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81450', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0831', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81460', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0520', 'name' => 'Bebelamas INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0527', 'name' => 'Chutamonas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0832', 'name' => 'Del Evora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0833', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81469', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0834', 'name' => 'Los Parques', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81470', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0835', 'name' => 'Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0836', 'name' => 'La Gloria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0837', 'name' => 'Magisterio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1973', 'name' => 'FOVISSSTE', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81474', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0838', 'name' => 'Jobori', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0839', 'name' => 'Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0840', 'name' => 'San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81475', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0570', 'name' => 'Solidaridad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0841', 'name' => '10 de Abril', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2084', 'name' => 'Pedro Infante', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2085', 'name' => 'Maquío Clouthier', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2721', 'name' => 'Las Praderas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2869', 'name' => 'Évora 2000', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2876', 'name' => 'Valle Bonito', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81476', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0556', 'name' => 'Renato Vega', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0842', 'name' => '1 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2088', 'name' => 'Prado Bonito', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81477', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0843', 'name' => 'Tultita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81478', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0844', 'name' => 'Unidad Nacional', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2272', 'name' => 'Las Fincas de Tultita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2874', 'name' => 'Linda Vista', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81479', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Santa Sofía Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0532', 'name' => 'Las Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0543', 'name' => 'Loma Linda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0558', 'name' => 'Residencial del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0568', 'name' => 'Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0845', 'name' => 'Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2089', 'name' => 'San Cristóbal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2870', 'name' => 'Nuestra Señora de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2871', 'name' => 'Lomas del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81480', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0846', 'name' => 'San Pedro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1971', 'name' => 'Los Álamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81489', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0578', 'name' => 'Zona Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81490', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0848', 'name' => 'Cuauhtémoc', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0849', 'name' => 'Las Garzas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0850', 'name' => 'Amapas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2257', 'name' => 'Loma Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2258', 'name' => 'Loma Dorada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2259', 'name' => 'Haciendas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2868', 'name' => 'Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2875', 'name' => 'INFONAVIT Las Higueras', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81493', 'locality' => 'Guamúchil', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2873', 'name' => 'Lomas de los Achiris', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81500', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0022', 'name' => 'La Víbora', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0024', 'name' => 'Campo San Felipe', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0026', 'name' => 'Campo Rochín', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0853', 'name' => 'El Salitre', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2385', 'name' => 'Gabriel Leyva Velázquez (La Escalera)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81504', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'Campo Pénjamo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2378', 'name' => 'Lucio Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2379', 'name' => 'Emilio Álvarez Ibarra (Las Golondrinas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2383', 'name' => 'Cruz Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2384', 'name' => 'Rodolfo Sánchez Taboada (Las Lagunitas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81510', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'Los Chinos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2382', 'name' => 'Veintisiete de Noviembre', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81513', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => '20 de Noviembre', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0017', 'name' => 'Tres Palmas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2381', 'name' => 'Las Cabezas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81520', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0857', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81523', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0014', 'name' => 'Yacochito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2718', 'name' => 'El Mauto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81524', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0025', 'name' => 'San Martín', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2305', 'name' => '15 de Septiembre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81525', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0021', 'name' => 'El Guayacán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0856', 'name' => 'Ciénega de Casal', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81530', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0020', 'name' => 'El Alto del Taballal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0854', 'name' => 'El Taballal', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2380', 'name' => 'Álamo de los Montoya', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81533', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'El Descanso', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81535', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Buenavista', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'Carricitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Gustavo Díaz Ordaz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'Toro Manchado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0852', 'name' => 'Caitime', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81540', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Cacalotita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'Cerro Bola', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'El Batallón de los Montoya', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81543', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'El Gato de los Gallardo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'La Tasajera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81544', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0012', 'name' => 'Terrero de los Guerrero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81545', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'Laguna de Palos Blancos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '002', 'name' => 'Angostura', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81600', 'locality' => 'Angostura', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0858', 'name' => 'Angostura Centro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81605', 'locality' => 'Angostura', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1805', 'name' => 'Fovissste', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3079', 'name' => 'Los Álamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81607', 'locality' => 'Angostura', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1804', 'name' => 'Labastida Ochoa', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81610', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0860', 'name' => 'Alhuey', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0861', 'name' => 'Capomos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2387', 'name' => 'Batamotos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81613', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Capomones', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'La Loma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0004', 'name' => 'La Isleta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81620', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Toberi', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'Santa Rita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0862', 'name' => 'El Ébano', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0863', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81621', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0864', 'name' => 'La Primavera', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81622', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'La Colorada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'El Fuerte', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'Alhueycito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0865', 'name' => 'La Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81623', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'Mojolo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0866', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81624', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0012', 'name' => 'La Cercada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0013', 'name' => 'El Molino', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'Las Infamias', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'El Bonete', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0016', 'name' => 'Nacozari', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0867', 'name' => 'El Llano', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0868', 'name' => 'San Luciano', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81625', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Las Tunas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0869', 'name' => 'La Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81630', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'Acatita de los Castro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0870', 'name' => 'Estación Acatita', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81632', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0019', 'name' => 'El Cachorón (La Esmeralda)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0871', 'name' => 'La Unión', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2719', 'name' => 'El Ranchito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Chumpilihuiztle', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81635', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0020', 'name' => 'El Ebanito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2386', 'name' => 'La Ilama', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2388', 'name' => '18 de Diciembre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3123', 'name' => 'La Providencia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81639', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0021', 'name' => 'Juan de la Barrera Número Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0872', 'name' => 'Bruno Beltrán García', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81640', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0022', 'name' => 'Cerro Segundo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0873', 'name' => 'Gustavo Díaz Ordaz [Campo Plata]', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81642', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0023', 'name' => 'Palos Verdes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0874', 'name' => 'Campo el General', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81644', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0024', 'name' => 'Guayparime', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0025', 'name' => 'Las Tatemitas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81649', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0026', 'name' => 'Cerro Angostura', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0027', 'name' => 'Cerro de los Sánchez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0875', 'name' => 'Agustina Ramírez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81650', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0028', 'name' => 'Doce de Octubre (La Sonrisa)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0029', 'name' => 'El Nuevo Ostional', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0876', 'name' => 'Valentín Gómez Farías (El Muerto)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81652', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0030', 'name' => 'Chapo Arce', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0877', 'name' => 'Playa Colorada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81653', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0878', 'name' => 'Batury', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81654', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0031', 'name' => 'El Batallón (El Batallón de los Pallanes)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0032', 'name' => 'El Saucito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2981', 'name' => 'La Rosita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81655', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0033', 'name' => 'El Playón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0879', 'name' => 'Protomártir de Sinaloa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81660', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0880', 'name' => 'Agrícola México (Palmitas)', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81661', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0882', 'name' => 'Dámaso Cárdenas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0883', 'name' => 'Rafael Buelna', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81663', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0034', 'name' => 'Contreras', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81664', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0035', 'name' => 'Santa María del Playón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0884', 'name' => 'Independencia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81666', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0885', 'name' => 'Costa Azul', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81670', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0886', 'name' => 'Leopoldo Sánchez Celis (El Gato de Lara)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2306', 'name' => 'Ignacio Allende', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81675', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0887', 'name' => 'Agrícola Sinaloa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81680', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0888', 'name' => 'La Reforma', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81690', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0890', 'name' => 'Independencia (Chinitos)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3153', 'name' => 'Arboladas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '007', 'name' => 'Choix', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81700', 'locality' => 'Choix', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1772', 'name' => 'Choix Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81703', 'locality' => 'Choix', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1774', 'name' => 'El Guajito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1776', 'name' => 'Huites', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2037', 'name' => 'Francisco R. Serrano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2038', 'name' => 'Francisco I. Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81705', 'locality' => 'Choix', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1780', 'name' => 'La Higuera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81706', 'locality' => 'Choix', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1775', 'name' => 'Las Conchas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81707', 'locality' => 'Choix', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1779', 'name' => 'Ayuntamiento', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2889', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81708', 'locality' => 'Choix', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1778', 'name' => 'Ampliación Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1781', 'name' => 'Nuevo Huites', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81709', 'locality' => 'Choix', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1773', 'name' => 'Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1777', 'name' => 'Ejidal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81710', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Ranchito de Islas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0101', 'name' => 'El Vado (El Cerrito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81712', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0111', 'name' => 'Poblado Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0120', 'name' => 'La Calera', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0123', 'name' => 'La Igualamita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0124', 'name' => 'Los Barbechitos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0125', 'name' => 'El Mezquite Caído', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0127', 'name' => 'La Salvia', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0137', 'name' => 'Las Taunitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0894', 'name' => 'Tasajeras', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2295', 'name' => 'El Nacimiento', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81713', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0107', 'name' => 'Las Colmenas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0116', 'name' => 'El Reparo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0122', 'name' => 'El Cedrito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0128', 'name' => 'Nuevo Techobampo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0138', 'name' => 'Los Chinos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81715', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0891', 'name' => 'Bajosori', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0909', 'name' => 'El Guayabito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81716', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Las Urracas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0092', 'name' => 'Estación Loreto', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0097', 'name' => 'San José de los Portillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0168', 'name' => 'Rancho Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0901', 'name' => 'Loreto', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0902', 'name' => 'Tabucahui', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81717', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'El Altillo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'Las Rastras', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'El Rancho', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0105', 'name' => 'Toipaqui', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0899', 'name' => 'Loretillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81718', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'Subilimayo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0109', 'name' => 'La Estancia', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0110', 'name' => 'Los Chinitos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0115', 'name' => 'El Embarcadero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0118', 'name' => 'Los Arenales', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0121', 'name' => 'El Garabato', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0126', 'name' => 'El Veranito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0129', 'name' => 'El Zataque', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0896', 'name' => 'Baca', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0897', 'name' => 'Agua Caliente de Baca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3120', 'name' => 'El Aguaje', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3121', 'name' => 'Conicari', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3129', 'name' => 'La Tuna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81719', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0130', 'name' => 'El Cajoncito (La Cieneguita)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0134', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0136', 'name' => 'Las Cruces', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0903', 'name' => 'El Descanso', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0904', 'name' => 'Los Pozos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81720', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0155', 'name' => 'Los Cedros', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81724', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0014', 'name' => 'Tezcalama (Tezcalama de Tararán)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'Las Presitas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0098', 'name' => 'Las Higueras', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0161', 'name' => 'El Muerto', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0164', 'name' => 'Último Vado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0173', 'name' => 'La Nopalera', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81725', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0091', 'name' => 'El Carricito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0093', 'name' => 'Tararancito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0094', 'name' => 'Los Alisos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0095', 'name' => 'El Tule', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0169', 'name' => 'Los Cocos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81727', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0087', 'name' => 'El Bainoral', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0096', 'name' => 'El Trigo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0167', 'name' => 'Las Canoas (Huillachapa)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0900', 'name' => 'Huillachapa (Buenavista)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81730', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'La Cieneguita de Núñez', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81733', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'La Culebra', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0119', 'name' => 'El Oro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81734', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'El Difunto', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'El Real Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'El Saucito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0016', 'name' => 'La Ladrillera de Madriles', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0106', 'name' => 'Mina Fría', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0112', 'name' => 'El Palmar', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0113', 'name' => 'Corral Quemado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0114', 'name' => 'El Saucillo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0117', 'name' => 'Las Juntas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0171', 'name' => 'Madriles', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3041', 'name' => 'Puerto la Judía', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81735', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0103', 'name' => 'El Sauz', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0170', 'name' => 'El Tacuache', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2992', 'name' => 'Cieneguita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81736', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0100', 'name' => 'El Orito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0102', 'name' => 'José Lucas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0104', 'name' => 'Zapote de Madriles', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2993', 'name' => 'Coscomate', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81737', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0108', 'name' => 'El Guamúchil (Guamúchil de los Valdez)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0905', 'name' => 'Potrero de Cancio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0906', 'name' => 'Cajón de Cancio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81738', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0086', 'name' => 'El Mochiqui', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0088', 'name' => 'El Mochiquito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0152', 'name' => 'El Saquillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0153', 'name' => 'Las Pilas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0156', 'name' => 'Los Mimbres', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0160', 'name' => 'El Babu', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0162', 'name' => 'La Sauceda', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0166', 'name' => 'La Molienda', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81740', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0099', 'name' => 'Los Mautos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0898', 'name' => 'El Sauz de Baca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2299', 'name' => 'Agua Zarca', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2887', 'name' => 'Techobampo de los Cota', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81743', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0081', 'name' => 'Agua Nueva', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0154', 'name' => 'La Piedra Bola', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0158', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0163', 'name' => 'Los Cauques', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0907', 'name' => 'San Javier', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3200', 'name' => 'Techobampo de los Montes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81745', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0911', 'name' => 'La Ciénega', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81746', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0074', 'name' => 'El Ranchito de Buyubampo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0157', 'name' => 'La Viuda', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0910', 'name' => 'Buyubampo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81749', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0079', 'name' => 'El Pajarito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0089', 'name' => 'Tres Hermanos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0090', 'name' => 'Los Batequis', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0172', 'name' => 'El Tepeguaje (Caballihuaza)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0908', 'name' => 'Los Picachos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81750', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'El Saucillo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0076', 'name' => 'Las Juntas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0149', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0150', 'name' => 'La Guayepa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0151', 'name' => 'El Guayabo de San Pantaleón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2712', 'name' => 'San Pantaleón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81753', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0077', 'name' => 'Moliendita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0078', 'name' => 'El Sabino Gordo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0080', 'name' => 'El Sauz de San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0082', 'name' => 'Potrerillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0083', 'name' => 'El Chapote', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0084', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0159', 'name' => 'El Hornito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0165', 'name' => 'Los Mirasoles', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81754', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0069', 'name' => 'Los Llanitos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0071', 'name' => 'El Palmarito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0072', 'name' => 'Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0075', 'name' => 'Horconcitos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81755', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0066', 'name' => 'San Pedro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0068', 'name' => 'San José de los Llanos (Los Llanos)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0070', 'name' => 'El Potrerito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0073', 'name' => 'Santana', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81756', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0019', 'name' => 'La Estancia de Baymena', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0060', 'name' => 'Rincón Grande de Baymena', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0062', 'name' => 'El Zapote de Baymena', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0067', 'name' => 'Sauz de Baymena (El Sauz)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81757', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'Mesa de los Torres', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0135', 'name' => 'Nacapule', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0912', 'name' => 'Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81760', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0055', 'name' => 'Baymena', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0895', 'name' => 'Agua Caliente Grande (De Gastélum)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0914', 'name' => 'Santa Ana', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0916', 'name' => 'El Aguajito de Bajahui', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2235', 'name' => 'Venicia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81763', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0052', 'name' => 'Las Guayabas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0054', 'name' => 'La Igualama', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0917', 'name' => 'Baymena', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81764', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0018', 'name' => 'Chicuras', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'El Cojinillo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'El Carrizo de los Torres', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'Agua Calientilla', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0024', 'name' => 'Chavira', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0025', 'name' => 'La Mesa del Oro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0033', 'name' => 'El Chapote', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0041', 'name' => 'Vinaterías', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0142', 'name' => 'San José de Choix (Las Lajitas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0143', 'name' => 'San José de los Pericos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0144', 'name' => 'Los Pericos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0145', 'name' => 'Casa Vieja', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0180', 'name' => 'Los Chinos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0181', 'name' => 'La Rondana', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0918', 'name' => 'Yecorato', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2226', 'name' => 'El Frijol', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81765', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0053', 'name' => 'Rincón de Agua Caliente Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0064', 'name' => 'Antonio Rosales (El Disparate)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0915', 'name' => 'El Colexio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2234', 'name' => 'El Cajón de los Félix', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3019', 'name' => 'Los Cedros', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81766', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0139', 'name' => 'El Platanito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0140', 'name' => 'Los Chapotes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0141', 'name' => 'Las Lajas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0174', 'name' => 'El Terrero', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0175', 'name' => 'Cañada el Rengo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0176', 'name' => 'El Realito de los Espinoza', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0177', 'name' => 'Potrero de los Fierro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0178', 'name' => 'La Vinata', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3088', 'name' => 'Ranchito de Cabrera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81770', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0030', 'name' => 'El Llano', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0034', 'name' => 'Las Mercedes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0036', 'name' => 'Bacayopa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0037', 'name' => 'La Cuevita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0039', 'name' => 'El Cajón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0043', 'name' => 'Pie de la Cuesta (Los Laureles)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0045', 'name' => 'Los Laureles', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0048', 'name' => 'El Pinito (La Cañada de León)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0919', 'name' => 'Casas Viejas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81773', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0059', 'name' => 'El Sabino', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0061', 'name' => 'El Taparuyo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0063', 'name' => 'Las Ranas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0065', 'name' => 'Sacochi (Haracoche)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81774', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0057', 'name' => 'Norogachi', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0058', 'name' => 'Barranco de los Ruelas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0147', 'name' => 'Sonogoris', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0148', 'name' => 'La Sauceda', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0913', 'name' => 'El Píchol', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81775', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0031', 'name' => 'La Cumbre', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0032', 'name' => 'Puerto la Joya', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0038', 'name' => 'El Ranchito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0040', 'name' => 'La Chirimoya', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0042', 'name' => 'El Reparo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3046', 'name' => 'La Sidra', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81776', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0026', 'name' => 'El Limón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0027', 'name' => 'Potrero de los Ceceña', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0028', 'name' => 'San Simón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0029', 'name' => 'Los Parajes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0035', 'name' => 'Puerto del Reparo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0179', 'name' => 'El Carrizo de los Sarmiento', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81777', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0044', 'name' => 'Cadena', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0046', 'name' => 'Las Algarrobas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0047', 'name' => 'El Terrero', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0049', 'name' => 'La Noria de Minitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0050', 'name' => 'El Ancón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0051', 'name' => 'Batayaqui', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0056', 'name' => 'Las Arenas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0146', 'name' => 'El Realito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81780', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0133', 'name' => 'Macoribo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81783', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'Los Molinos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0012', 'name' => 'Huepaco', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81784', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0131', 'name' => 'Tacopaco', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0132', 'name' => 'Las Juntas de Osornio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '010', 'name' => 'El Fuerte', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81800', 'locality' => 'San Blas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0920', 'name' => 'San Blas Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81802', 'locality' => 'San Blas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1845', 'name' => 'Kansas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1846', 'name' => 'Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1847', 'name' => 'Ejidal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3169', 'name' => 'San Blas Viejo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81803', 'locality' => 'San Blas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1848', 'name' => 'La Loma', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1849', 'name' => 'Cananea', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1850', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1851', 'name' => 'Sección 23', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1852', 'name' => 'Sección 29', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1853', 'name' => 'Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '1854', 'name' => 'Las Flores', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '1855', 'name' => 'La Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '3170', 'name' => 'La Candelaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81804', 'locality' => 'San Blas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1857', 'name' => '8 de Octubre', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81805', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Santa Lucía', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'El Naranjo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0046', 'name' => 'La Curva', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0926', 'name' => 'Las Estacas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0927', 'name' => 'Tesila', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0928', 'name' => 'El Vateve', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0929', 'name' => 'La Carrera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2245', 'name' => 'Las Chunas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2568', 'name' => 'Ranchito de Bateve', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3087', 'name' => 'Buenos Aires', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81806', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0029', 'name' => 'Sibirijoa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0030', 'name' => 'Tetamboca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0921', 'name' => 'Buenavista', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0922', 'name' => 'Buenavista de Mochicahui', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0924', 'name' => 'Sibajahui', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0925', 'name' => 'Mulanjey [Estación Vega]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0930', 'name' => 'El Aliso', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0931', 'name' => 'La Capilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81807', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0021', 'name' => 'Lomalinda', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2231', 'name' => 'Santa María', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81810', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Crucero de Hornillos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0012', 'name' => 'Bacausa de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'El Mahone', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0040', 'name' => 'Los Capomitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0932', 'name' => 'Hornillos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0933', 'name' => 'Los Capomos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2296', 'name' => 'San Pedro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81811', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0934', 'name' => 'Agua Caliente', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0935', 'name' => 'El Tepeguaje', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0936', 'name' => 'La Laguna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81812', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0937', 'name' => 'Rincón de Alisos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81815', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'La Gavilana', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81820', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0941', 'name' => 'Tehueco', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1975', 'name' => 'Pablo Macias Valenzuela', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1976', 'name' => 'El Diquito', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1977', 'name' => 'Obrera', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1980', 'name' => 'Los Ayalos', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1981', 'name' => 'Leopoldo Sanchez Celis', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1982', 'name' => 'Infonavit', 'zone_type' => 'Rural', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '2055', 'name' => 'Solidaridad', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2229', 'name' => 'Llano de los Soto', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3007', 'name' => 'Villa de Montesclaros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3069', 'name' => 'Palma Sola', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3154', 'name' => 'Campamento CNA', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3155', 'name' => 'El Dique', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3156', 'name' => 'El Rastro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3157', 'name' => 'H. Ayuntamiento', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3158', 'name' => 'Hospital', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3159', 'name' => 'La Bolsa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3160', 'name' => 'La Bomba', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3161', 'name' => 'La Tenería', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3162', 'name' => 'Quince', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0017', 'name' => 'Las Cabanillas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0024', 'name' => 'Ocolome', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0038', 'name' => 'Los Ayón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0938', 'name' => 'Baroten', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0940', 'name' => 'El Fuerte', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81825', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0943', 'name' => 'Estación Hoyancos [Estación el Fuerte]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81827', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0944', 'name' => 'Vivajaqui', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81828', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0945', 'name' => 'Bajada de Monte', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0946', 'name' => 'El Vado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2230', 'name' => 'Los Terreros', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81830', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0947', 'name' => 'Tetaroba', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81833', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1645', 'name' => 'Loma', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81834', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1647', 'name' => 'Barrio Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1650', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81840', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0948', 'name' => 'Chinobampo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81843', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0949', 'name' => 'El Realito 1', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81844', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Los Amoles', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'Chino de los Vázquez', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'Chino de los Gámez', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81845', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0950', 'name' => 'San Lázaro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81846', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'La Junta', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0026', 'name' => 'Potrero de los Soto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81847', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2228', 'name' => 'Bacapaco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81850', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'Borabampo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0951', 'name' => 'Boca de Arroyo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2315', 'name' => 'La Misión Vieja', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2569', 'name' => 'Cuesta Alta', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2570', 'name' => 'La Misión Nueva', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81854', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'Arroyo de los Armenta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Las Cabras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'La Galera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'Llano de los López', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0952', 'name' => 'Zozorique', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81855', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Presa de los Valdez', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0027', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81856', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0025', 'name' => 'Los Parajes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2426', 'name' => 'Tepic', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2571', 'name' => 'Palo Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81860', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0953', 'name' => 'Canutillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81864', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0954', 'name' => 'Lo de Vega', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2227', 'name' => 'Los Ojitos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81870', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0956', 'name' => 'Jahuara Primero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81871', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0957', 'name' => 'Agua Nueva 2', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81872', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0035', 'name' => 'San José de Cahuinahua', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0043', 'name' => 'La Bomba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0048', 'name' => 'San Rafael', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0955', 'name' => 'Charay', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0958', 'name' => 'Camajoa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0959', 'name' => 'La Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2888', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3163', 'name' => 'El Chorizo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3164', 'name' => 'El Nopal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3165', 'name' => 'El Poblado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3166', 'name' => 'La Bacilia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3167', 'name' => 'La Calaca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3168', 'name' => 'La Pitaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81873', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0047', 'name' => '12 de Agosto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0960', 'name' => 'Adolfo López Mateos (Jahuara Segundo)', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81874', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0033', 'name' => 'Estación Charay (El Terco)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2660', 'name' => 'Campo Seco (3 de Mayo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81875', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0962', 'name' => 'Tres Garantías', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81876', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0036', 'name' => 'Cerrillos Número Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81877', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'La Guásima', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0037', 'name' => 'Basoteve', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0963', 'name' => 'Macoyahui', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2572', 'name' => 'El Sufragio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81878', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => '16 de Septiembre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81880', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0964', 'name' => 'Huepaco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81887', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0965', 'name' => 'La Genoveva', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81888', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0031', 'name' => 'Producto de la Revolución', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0032', 'name' => 'Joaquín Amaro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0041', 'name' => 'El Alhuate', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0049', 'name' => 'La Arrocera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0966', 'name' => '4 Milpas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2573', 'name' => 'Kilómetro Diecinueve', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81889', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0967', 'name' => 'Agua de las Arenas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81890', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0015', 'name' => 'Campestre los Algodones', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0034', 'name' => 'La Ladrillera (La Cuera)', 'zone_type' => 'Urbano', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0044', 'name' => 'Júpare', 'zone_type' => 'Urbano', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0045', 'name' => 'Téroque Viejo', 'zone_type' => 'Urbano', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0968', 'name' => 'Dos de Abril', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0969', 'name' => 'Mochicahui', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81891', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0028', 'name' => 'Santa Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0039', 'name' => 'Campo Cuatro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0970', 'name' => 'Antonio Rosales', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0971', 'name' => 'Los Tastes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81892', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0972', 'name' => 'Higueras de los Natoches', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0973', 'name' => 'Kilómetro 26', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81893', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0042', 'name' => 'Vialacahui', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0974', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0975', 'name' => 'Constancia', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0976', 'name' => 'Pochotal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2298', 'name' => 'El Carricito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81895', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0014', 'name' => 'Las Higueras de los Natoches', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'La Línea', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0978', 'name' => 'El Ranchito 1', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0979', 'name' => 'El Ranchito 2', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '017', 'name' => 'Sinaloa', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81900', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0033', 'name' => 'Maripita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0053', 'name' => 'La Cuevita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0073', 'name' => 'Casas Nuevas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0077', 'name' => 'El Gatal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0079', 'name' => 'Cabrera de Bones y Olivos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0981', 'name' => 'Baburia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0982', 'name' => 'Cubiri de La Cuesta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0983', 'name' => 'Cubiri de Portelas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2468', 'name' => 'Cubiri de la Capilla', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2469', 'name' => 'Cubiri de la Máquina', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2662', 'name' => 'Cubiri de La Loma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81902', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0025', 'name' => 'Cabrera de Gámez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0026', 'name' => 'Cabrera de Inzunza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0059', 'name' => 'El Caimán (Margen Izquierdo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0063', 'name' => 'El Mezquitillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0065', 'name' => 'Licenciado Benito Juárez (Paredón Blanco)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0071', 'name' => 'Lombardo Toledano', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0072', 'name' => 'El Norteño', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0986', 'name' => 'El Caimán (Margen Derecho)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81903', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0070', 'name' => 'La Bocatoma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0987', 'name' => 'Maquipo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0988', 'name' => 'Opochi', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2470', 'name' => 'El Pueblito (El Realito)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2471', 'name' => 'Los Melones', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2472', 'name' => 'Las Playas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81904', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0047', 'name' => 'Agua Fría', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0051', 'name' => 'Sanaria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0055', 'name' => 'El Macapule', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2473', 'name' => 'Cabrera de Limones', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2587', 'name' => 'La Loma de Lugo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81906', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0048', 'name' => 'Matapán del Llano', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0989', 'name' => 'Buenavista', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0990', 'name' => 'Maripa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2663', 'name' => 'Agua Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81907', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0031', 'name' => 'Güera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0032', 'name' => 'Las Lajas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0049', 'name' => 'El Limón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0991', 'name' => 'Porohui', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81910', 'locality' => 'Sinaloa de Leyva', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0984', 'name' => 'Sinaloa de Leyva Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2265', 'name' => 'El Rastro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81912', 'locality' => 'Sinaloa de Leyva', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1796', 'name' => 'El Kalzetin', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1798', 'name' => 'Tierra Blanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1799', 'name' => 'Choipa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1800', 'name' => 'Lomas de San Felipe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2262', 'name' => 'Guadalupana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2263', 'name' => 'Los Doctores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81913', 'locality' => 'Sinaloa de Leyva', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1797', 'name' => 'La Choya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81915', 'locality' => 'Sinaloa de Leyva', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1795', 'name' => 'La Torre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81916', 'locality' => 'Sinaloa de Leyva', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1801', 'name' => 'Bellavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1802', 'name' => 'Ejidal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2264', 'name' => 'San Jerónimo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81920', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0044', 'name' => 'Agua Caliente de Cebada (La Churea)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0993', 'name' => 'Agua Caliente de Cebada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2219', 'name' => 'Santa Magdalena', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81924', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0022', 'name' => 'Los Alisos de Olguín', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0078', 'name' => 'La Mesa del Frijol', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81930', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2223', 'name' => 'Sierrita de Los Germán', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81933', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2224', 'name' => 'Ocurague', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81935', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2622', 'name' => 'San José de Los Hornos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81940', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0994', 'name' => 'El Platanito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81943', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0014', 'name' => 'El Cochi', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'Santa Lucía', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Las Bayas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81945', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2221', 'name' => 'Mazocari', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81946', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2474', 'name' => 'Portugués de Norzagaray', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2475', 'name' => 'Las Tatemas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81947', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0036', 'name' => 'Ranchito de Llanes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0060', 'name' => 'La Cañada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2220', 'name' => 'El Veranito', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81950', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0020', 'name' => 'La Aceituna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0054', 'name' => 'Pueblo Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0995', 'name' => 'El Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2238', 'name' => 'Buchinari', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2476', 'name' => 'Sarabia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2477', 'name' => 'Los Mezquites', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81960', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2291', 'name' => 'Genaro Estrada', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2478', 'name' => 'Santiago de Ocoroni', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2479', 'name' => 'La Playita de Casillas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81963', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0028', 'name' => 'La Cebolla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2480', 'name' => 'El Gatal de Ocoroni', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2481', 'name' => 'San José de Alvarado (San José Nuevo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81964', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2482', 'name' => 'San Miguel de los Orrantia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81965', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0029', 'name' => 'Gallo Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0075', 'name' => 'Los Cerquitos (La Pila Dos)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81967', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0021', 'name' => 'El Alamito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'El Altillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0027', 'name' => 'Casas Nuevas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0030', 'name' => 'El Garbanzo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0034', 'name' => 'La Playa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0035', 'name' => 'El Potrero de Soto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0039', 'name' => 'Santa Ana', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0040', 'name' => 'Tepantita de Ocoroni', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0064', 'name' => 'La Mojonera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0074', 'name' => 'Los Tastes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81970', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0076', 'name' => 'Agua Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0997', 'name' => 'Palmar de Sepúlveda', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '3082', 'name' => 'Las Huacapas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3083', 'name' => 'El Ranchito de los López', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3084', 'name' => 'Mapiri', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3093', 'name' => 'San José del Álamo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81971', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0998', 'name' => 'Los Troncones', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81972', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0061', 'name' => 'La Huerta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81973', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0024', 'name' => 'Baromena', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0052', 'name' => 'Potrero de los Félix', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0999', 'name' => 'Bacubirito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2217', 'name' => 'Chacoapana', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2709', 'name' => 'Bacurato', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81975', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'El Corral de Piedra', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2483', 'name' => 'Los Quintero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81976', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0992', 'name' => 'San José de Gracia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2623', 'name' => 'Llanos de Peraza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81977', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Hacienda de los Ceballos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'Ventura de los Bojórquez', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0008', 'name' => 'El Rincón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'El Peñón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0012', 'name' => 'Las Tinas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0062', 'name' => 'La Mesa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0068', 'name' => 'El Saucito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2218', 'name' => 'San José de las Delicias', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2624', 'name' => 'Coronado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3085', 'name' => 'El Terrero de Durán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3086', 'name' => 'Carrizalejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81980', 'locality' => 'Estación Naranjo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1001', 'name' => 'Naranjo Centro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1736', 'name' => 'Alfredo V Bonfil', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81983', 'locality' => 'Estación Naranjo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Nuevo San Fermín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1844', 'name' => 'Las Viejas', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81985', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Gabriel Leyva Velázquez', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0037', 'name' => 'San Pablo Mochobampo (San Ignacio)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0045', 'name' => 'Francisco Villa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0050', 'name' => 'José María Morelos y Pavón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0056', 'name' => 'Francisco J. Múgica', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1004', 'name' => 'Ruiz Cortines 3', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2484', 'name' => 'Concentración 5 de Febrero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2485', 'name' => 'Tobobampo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2486', 'name' => 'Santa Teresita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2487', 'name' => 'Ruiz Cortinez 1', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2579', 'name' => 'La Guamuchilera', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2580', 'name' => 'Ceferino Paredes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2664', 'name' => 'Alfonso G Calderón Velarde', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81986', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0041', 'name' => 'Campo Torreón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0042', 'name' => 'Tres Marías (Las Vinoramas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0043', 'name' => 'Tres Reyes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0046', 'name' => 'El Toruno Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0058', 'name' => 'Campo Seis', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0066', 'name' => 'La Pitahaya', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0067', 'name' => 'Melchor Ocampo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2222', 'name' => 'El Campito (campo Zamora)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2488', 'name' => 'Playa Segunda', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2489', 'name' => 'El Palotal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2490', 'name' => 'Naranjo Segundo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81988', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1005', 'name' => 'La Presita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2491', 'name' => 'Batamote', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2492', 'name' => 'San Sebastían Lázaro Cárdenas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81989', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1006', 'name' => 'Capomas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81990', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'La Tranquilidad', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0017', 'name' => 'Tabalopa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0057', 'name' => 'San Joaquín (San Joaquín Viejo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0069', 'name' => 'Tierra Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1007', 'name' => 'Agua Escondida', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1008', 'name' => 'San Joaquín', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2493', 'name' => 'El Mezquite', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3047', 'name' => 'Seis de Enero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81991', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1009', 'name' => 'Llano Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1010', 'name' => 'Nacaveba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81993', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'El Noroto', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'El Camichín', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'Palo Hediondo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81995', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'Tezcalama (Tescalama de Arriba)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81996', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'San Pedro', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0038', 'name' => 'San Miguel de San Joaquín (San Miguel)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '81997', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0019', 'name' => 'Alfredo V. Bonfil (Siete Ejidos)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2665', 'name' => 'El Coyote', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '012', 'name' => 'Mazatlán', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82000', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1011', 'name' => 'Balcones de Loma Linda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1012', 'name' => 'Los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1013', 'name' => 'Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1016', 'name' => 'Loma Linda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82010', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1019', 'name' => 'Campo Bello', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1020', 'name' => 'Estero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1021', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1022', 'name' => 'Juan Carrasco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1023', 'name' => 'Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1024', 'name' => 'Lomas del Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1025', 'name' => 'Palos Prietos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2786', 'name' => 'Palmeiras Club Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82013', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1027', 'name' => 'Ferrocarrilera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82014', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1028', 'name' => 'San Angel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82015', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1029', 'name' => 'Trópico de Cáncer', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82016', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1030', 'name' => 'Brisas del Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82017', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1031', 'name' => 'Telleria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82018', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1032', 'name' => 'Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82019', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1033', 'name' => 'Tierra y Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82020', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1034', 'name' => '12 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1119', 'name' => 'Klein', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1289', 'name' => 'Bahías', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2975', 'name' => 'Nueva Creación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82028', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1035', 'name' => 'Casas Económicas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82030', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1036', 'name' => 'Montuosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1037', 'name' => 'Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82035', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1038', 'name' => 'Sanchez Taboada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82037', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1040', 'name' => 'Francisco Solís', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82038', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1041', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82040', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1042', 'name' => 'Gabriel Leyva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1043', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1044', 'name' => 'Playas del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1329', 'name' => 'Villas Playa Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2902', 'name' => 'Cerro del Vigía', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82043', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0014', 'name' => 'José de Nazaret', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1301', 'name' => 'Isla de la Piedra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2782', 'name' => 'Vicente Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2783', 'name' => 'Ecológica', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2784', 'name' => 'Anabella de Gavica', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82047', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3181', 'name' => 'Octava Zona Naval (Puerto Mazatlán)', 'zone_type' => 'Urbano', 'settlementtype_id' => '20','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82050', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1047', 'name' => 'Alfredo V. Bonfil', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2785', 'name' => 'Las Malvinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82059', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1050', 'name' => 'Casa Redonda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82060', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1051', 'name' => 'Francisco I Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2011', 'name' => 'José María Pino Suárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82070', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1053', 'name' => 'Ejido Rincón de Urías', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82080', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1055', 'name' => 'Gral. Rafael Buelna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1963', 'name' => '5ta Chapalita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82089', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1057', 'name' => 'La Sirena', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2801', 'name' => 'Miramar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2805', 'name' => '23 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82090', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0115', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1058', 'name' => 'Diaz Ordaz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1936', 'name' => 'Ampliación Felipe Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1937', 'name' => 'Felipe Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2122', 'name' => 'Hacienda de Urias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2266', 'name' => 'Santa Teresa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2316', 'name' => '2a Ampliación Felipe Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2796', 'name' => 'María del Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2798', 'name' => 'Urbivilla del Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2803', 'name' => 'Valle de Urias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2917', 'name' => '2da. Ampliación Valle de Urias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82099', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0127', 'name' => 'Villa de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1059', 'name' => 'Urías', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2799', 'name' => 'Ladrillera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2800', 'name' => 'María Elena', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82100', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1060', 'name' => 'Sábalo Country Club', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2919', 'name' => 'Las Varas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82102', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2012', 'name' => 'Marina El Cid', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82103', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2681', 'name' => 'El Secreto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2684', 'name' => 'Palmas del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2690', 'name' => 'Punta Diamante', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2691', 'name' => 'Marina Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2760', 'name' => 'Marina Mazatlán', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2762', 'name' => 'Isla Mazatlán', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2763', 'name' => 'El Encanto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2903', 'name' => 'Puerta al Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3052', 'name' => 'Raíces', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82110', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1061', 'name' => 'El Cid', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1062', 'name' => 'El Dorado', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1063', 'name' => 'Las Gaviotas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1064', 'name' => 'Ex Laguna Las Gaviotas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1065', 'name' => 'Lomas de Mazatlán', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1331', 'name' => 'Zona Dorada', 'zone_type' => 'Urbano', 'settlementtype_id' => '26','zipcode_id' => $idZip],
		['key' => '2904', 'name' => 'Puerta Dorada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2920', 'name' => '5a. Gaviotas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82112', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'Azul Pacific', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0111', 'name' => 'Almar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0113', 'name' => 'Marina del Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0117', 'name' => 'Azul Marino', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0120', 'name' => 'Palmilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0122', 'name' => 'Altabrisa Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0125', 'name' => 'Almarena Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1291', 'name' => 'Cerritos Resort', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1317', 'name' => 'Quintas del Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1318', 'name' => 'Real del Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1321', 'name' => 'Royal Country', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1328', 'name' => 'Villas de Rueda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2015', 'name' => 'Villa del Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2017', 'name' => 'Villa Tranquila', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2059', 'name' => 'Playa Linda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2620', 'name' => 'Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2621', 'name' => 'Villa Marina', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2753', 'name' => 'Marina Garden', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2759', 'name' => 'El Palmar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2905', 'name' => 'Marina Kelly', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2964', 'name' => 'Cerritos al Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82113', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1967', 'name' => 'Club Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2761', 'name' => 'Mediterráneo Club Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82118', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1067', 'name' => 'Rincón Colonial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82120', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1069', 'name' => 'El Toreo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1070', 'name' => 'Olimpo Infonavit', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1071', 'name' => 'Periodista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1072', 'name' => 'Pueblo Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1073', 'name' => 'Sanchez Celis', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1297', 'name' => 'El Toro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1299', 'name' => 'Hacienda del Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1304', 'name' => 'Jardines del Toreo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1314', 'name' => 'Plaza Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1330', 'name' => 'Zafiro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2766', 'name' => 'Residencial Rinconada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2972', 'name' => 'Azalea', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82123', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0114', 'name' => 'Jardines de la Alameda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1074', 'name' => 'Alameda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82124', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0015', 'name' => 'El Palmito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0116', 'name' => 'Bluu Habitat Lagoons', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0118', 'name' => 'Marsella', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1316', 'name' => 'Puesta del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2013', 'name' => 'Paseo de Las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2014', 'name' => 'Prados del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2110', 'name' => 'Rincón de las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2113', 'name' => 'Paseo Alameda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2114', 'name' => 'Terranova', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2171', 'name' => 'Chulavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2683', 'name' => 'La Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2685', 'name' => 'Paseo Los Olivos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2687', 'name' => 'Real del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2765', 'name' => 'Real Pacífico', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2767', 'name' => 'Paseo Alameda Dos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2965', 'name' => 'Predio Rancho Las Habas', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2966', 'name' => 'Terranova Plus', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82125', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1075', 'name' => 'Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1320', 'name' => 'Rincón de Las Plazas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1323', 'name' => 'San Carlos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2769', 'name' => 'Quinta Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82126', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1076', 'name' => 'Hacienda Las Cruces', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82127', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1077', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1296', 'name' => 'Dorados de Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1307', 'name' => 'Libertad de Expresión', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2764', 'name' => 'Ejidal Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82128', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1078', 'name' => 'INFONAVIT Playas', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '2108', 'name' => 'Los Mangos I', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2736', 'name' => 'Los Mangos II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2752', 'name' => 'Hacienda Los Mangos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2768', 'name' => 'Privanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82129', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Hacienda del Seminario', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1079', 'name' => 'El Venadillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2773', 'name' => 'Monte Calvario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2906', 'name' => 'Huerta Grande', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82130', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1951', 'name' => 'Mar de Cortes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82132', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Portomolino', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0013', 'name' => 'Roca Condominios', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1285', 'name' => 'Arboledas I', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1286', 'name' => 'Arboledas II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1298', 'name' => 'Francisco Alarcón Infonavit', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1327', 'name' => 'Valle Dorado', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1929', 'name' => 'Los Caracoles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1932', 'name' => 'Delfines', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1933', 'name' => 'Torremolinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1964', 'name' => 'Tortugas I', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2682', 'name' => 'Jardines del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2921', 'name' => 'Ampliación Francisco Alarcón (Venadillo II)', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82133', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1295', 'name' => 'Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1930', 'name' => 'Las Misiones', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1931', 'name' => 'Las Brisas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2679', 'name' => 'Brisas del Valle II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2907', 'name' => 'Misiones 2000', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2908', 'name' => 'Valle Dorado II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82134', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'Monte Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0128', 'name' => 'Manuel de la Vega', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1287', 'name' => 'Arboledas III', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1300', 'name' => 'Hogar Pescador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1305', 'name' => 'Jesús Osuna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1309', 'name' => 'Colosio Si', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1319', 'name' => 'Renato Vega', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1322', 'name' => 'Salinas de Gortari', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1326', 'name' => 'Valle del Ejido', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2106', 'name' => 'Nuevo Milenio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2109', 'name' => 'Santa Rosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2116', 'name' => 'San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2678', 'name' => 'Villa Carey', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2680', 'name' => 'El Conchi II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2686', 'name' => 'Prado Bonito', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2774', 'name' => 'Felicidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2775', 'name' => 'San Marcos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2776', 'name' => 'Jardines Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2777', 'name' => 'San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2778', 'name' => 'Puerta del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2779', 'name' => 'Sinaloa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2780', 'name' => 'Lucio Valverde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2909', 'name' => 'Jardines del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2910', 'name' => 'Los Robles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2911', 'name' => 'Romanita de La Peña', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2913', 'name' => 'Huerta Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3072', 'name' => 'La Riviera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3073', 'name' => 'Jardines de la Riviera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3118', 'name' => 'Mundialista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82136', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0112', 'name' => 'Montebello', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1082', 'name' => 'Petróleos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1948', 'name' => 'Jaripillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1949', 'name' => 'Santa Laura', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1952', 'name' => 'La Campiña', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1953', 'name' => 'Bosques del Arroyo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2009', 'name' => 'Colinas del Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2126', 'name' => 'María Antonieta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2132', 'name' => 'Valle Bonito', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2133', 'name' => 'Villa Tutuli', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2787', 'name' => 'Buenos Aires', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2788', 'name' => 'Torremolinos Costa Azul', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2968', 'name' => 'Villa Tutuli II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82137', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1083', 'name' => 'Huertos Familiares', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82138', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1313', 'name' => 'FOVISSSTE Playa Azul', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82139', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0123', 'name' => 'La Cantera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1085', 'name' => 'El Conchi Infonavit', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '1954', 'name' => 'Vista del Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1957', 'name' => 'Villa de las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1958', 'name' => 'Jesús Kumate', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1959', 'name' => 'Villa Florida', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1960', 'name' => 'San Joaquín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1961', 'name' => 'Villa Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1962', 'name' => 'Lomas de San Jorge', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2008', 'name' => 'Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2117', 'name' => 'Arboledas INVIES', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2119', 'name' => 'Costa Dorada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2121', 'name' => 'Francisco Labastida Ochoa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2124', 'name' => 'Los Laureles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2125', 'name' => 'Los Conchis Sección Arrecifes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2127', 'name' => 'El Conchi', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2129', 'name' => 'Santa Sofía', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2172', 'name' => 'Las Mañanitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2261', 'name' => 'Ampliación Villa Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2526', 'name' => 'Nuevo Cajeme', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2619', 'name' => 'Pradera Dorada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2789', 'name' => 'Viva Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82140', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1086', 'name' => 'Estadio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1087', 'name' => 'Lomas del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1088', 'name' => 'López Mateos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82143', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1089', 'name' => 'Casa Blanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82144', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1091', 'name' => 'Girasoles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82146', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1093', 'name' => 'Sembradores de La Amistad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1965', 'name' => 'Antiguo Aeropuerto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82147', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1094', 'name' => 'María Fernanda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82148', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1095', 'name' => 'Playas del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82149', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1096', 'name' => 'Flamingos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82150', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1098', 'name' => 'Olímpica', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1099', 'name' => '20 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1100', 'name' => 'Villa Galaxia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1941', 'name' => 'Villa Satélite', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2043', 'name' => 'Villa de Jacaro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2044', 'name' => 'Los Ángeles (Santa Fe)', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2806', 'name' => 'El Castillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82153', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1101', 'name' => 'Antonio Toledo Corro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1102', 'name' => 'Jabalines Infonavit', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82154', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0124', 'name' => 'Portal de los Olivos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1303', 'name' => 'FOVISSSTE Jabalíes', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '1308', 'name' => 'Los Venados', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1935', 'name' => 'Los Portales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2107', 'name' => 'Los Olivos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2115', 'name' => 'Issstesin', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2758', 'name' => 'Lomas del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2770', 'name' => 'Las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2771', 'name' => 'Corredor de Abasto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2772', 'name' => 'Privada Santa Rita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2914', 'name' => 'San Nicolás', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82155', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1103', 'name' => 'Ruben Jaramillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82156', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1104', 'name' => 'Villas del Estero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82157', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2967', 'name' => 'Residencial Flamingos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'La Cima Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1105', 'name' => 'Jacarandas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1288', 'name' => 'Bahía de Mazatlán FOVISSSTE', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1293', 'name' => 'Costa Brava', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1302', 'name' => 'Isla Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1315', 'name' => 'Plazas San Ignacio', 'zone_type' => 'Urbano', 'settlementtype_id' => '26','zipcode_id' => $idZip],
		['key' => '1324', 'name' => 'Santa Virginia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1934', 'name' => 'Gilberto Lopez', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2915', 'name' => 'Villa Bonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82158', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1106', 'name' => 'Federico Velarde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82159', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1107', 'name' => 'Esperanza Fovissste', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1945', 'name' => 'Melina', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1955', 'name' => 'Universidad 94', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2249', 'name' => 'Los Sauces', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82160', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1108', 'name' => 'Luis Echeverría Alvarez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82163', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1109', 'name' => 'Burócrata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1969', 'name' => 'Fuentes del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1970', 'name' => 'Las Olas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82164', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1110', 'name' => 'Salvador Allende', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2042', 'name' => 'Villa Residencial del Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2120', 'name' => 'Esmeralda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82165', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1111', 'name' => 'Jabalíes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82170', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1113', 'name' => 'Constitución', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1114', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1115', 'name' => 'Ramon F Iturbide', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82180', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1116', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1117', 'name' => 'Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1118', 'name' => 'Jesús Garcia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1120', 'name' => 'Lomas de Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1121', 'name' => 'Santa Elena', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1122', 'name' => 'Venustiano Carranza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82183', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1124', 'name' => 'Obrera Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82185', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1125', 'name' => 'Loma Atravesada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82186', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1126', 'name' => 'Azteca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1946', 'name' => 'Santa Cecilia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82187', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1128', 'name' => 'San Rafael', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1947', 'name' => 'Del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82188', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1129', 'name' => 'Anáhuac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82190', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'Lomas de las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1131', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1132', 'name' => 'Flores Magón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1133', 'name' => 'Niños Héroes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1939', 'name' => 'Mazatlan I', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2794', 'name' => 'El Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2901', 'name' => 'Ampliación Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82195', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0126', 'name' => 'Palmares', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1938', 'name' => 'Mazatlán III', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1940', 'name' => 'Mazatlan II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2123', 'name' => 'Lomas Del Porvenir', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2189', 'name' => 'Hacienda Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2730', 'name' => 'Lomas de Cristo Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2792', 'name' => 'Universo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2793', 'name' => 'Rincón de Mazatlán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2969', 'name' => 'El Pescador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3141', 'name' => 'La Alborada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82196', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1134', 'name' => 'Mirasol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1135', 'name' => 'Petrolero', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82197', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1136', 'name' => 'Primavera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82198', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1017', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1137', 'name' => 'Lomas del Ébano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1942', 'name' => 'Villas Del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1943', 'name' => 'La Foresta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1944', 'name' => 'Loma Bonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2010', 'name' => 'Ex Hacienda del Conchi', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2128', 'name' => 'Rinconada Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2131', 'name' => 'Simon Jimenez Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2251', 'name' => 'San Fernando', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2501', 'name' => 'Doña Chonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2525', 'name' => 'Valle del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2693', 'name' => 'Ejidal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2720', 'name' => 'Hacienda del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2791', 'name' => 'Ampliación Lomas del Ébano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82199', 'locality' => 'Mazatlán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0119', 'name' => 'Higueras Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1138', 'name' => 'Genaro Estrada Calderón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2250', 'name' => 'Los Magueyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2790', 'name' => 'Los Tabachines', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2918', 'name' => 'Praderas del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82200', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'La Tuna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Las Mañanitas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1139', 'name' => 'San Francisquito', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2528', 'name' => 'Lomas de Monterrey', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82203', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2529', 'name' => 'El Vainillo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82204', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Parque Industrial Mazatlán', 'zone_type' => 'Rural', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'El Pozole', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'Los Pozos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2878', 'name' => 'La Urraca Nueva', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82205', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0021', 'name' => 'La Amapa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'La Limonera', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'Estación Presidio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0024', 'name' => 'El Aguaje de Costilla', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2211', 'name' => 'La Amapa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82206', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1142', 'name' => 'El Walamo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '3045', 'name' => 'Pedro Rodríguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82207', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0025', 'name' => 'Campo Rey', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0026', 'name' => 'El Garitón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3044', 'name' => 'El Habalito del Tubo', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82210', 'locality' => 'Villa Unión', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1620', 'name' => 'Villa Unión Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82213', 'locality' => 'Villa Unión', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1782', 'name' => 'El Tronconal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82214', 'locality' => 'Villa Unión', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1627', 'name' => 'Buenavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1783', 'name' => 'Fidel Velázquez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1784', 'name' => 'Alfonso G. Calderón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1785', 'name' => 'Lomas de Villa Unión', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1786', 'name' => 'Flor de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2286', 'name' => 'Agustina Ramírez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2287', 'name' => '7 de Abril', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82215', 'locality' => 'Villa Unión', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1787', 'name' => 'Antonio Toledo Corro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1788', 'name' => 'José López Portillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1789', 'name' => 'Renato Vega', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1790', 'name' => 'Lienzo Charro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1791', 'name' => 'Ángela Peralta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82216', 'locality' => 'Villa Unión', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1792', 'name' => 'Ejidal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1793', 'name' => '11 Ríos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3119', 'name' => 'Los Sauces', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82217', 'locality' => 'Villa Unión', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1621', 'name' => 'Margarita Maza de Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1623', 'name' => 'Sixto Osuna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1794', 'name' => 'Raul Osuna Burgueño', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2987', 'name' => 'Julio Arroyo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82230', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0027', 'name' => 'Telcoyonqui', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82233', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0028', 'name' => 'Veranos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0029', 'name' => 'Pichilingue', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0030', 'name' => 'Las Conchas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0031', 'name' => 'Porras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0032', 'name' => 'El Llano', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0033', 'name' => 'Tiro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0034', 'name' => 'El Zacate', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0035', 'name' => 'Los Paisas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1146', 'name' => 'El Recodo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '3021', 'name' => 'Loma Alta de los Zataráin', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82234', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0036', 'name' => 'El Zapotal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0037', 'name' => 'Los Ébanos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82235', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0038', 'name' => 'El Arenal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82236', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1145', 'name' => 'Siqueros', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82238', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0040', 'name' => 'El Guayabo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0041', 'name' => 'Charcos Prietos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1144', 'name' => 'El Salto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2891', 'name' => 'El Espinal', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82240', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0109', 'name' => 'Lomas del Guayabo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0110', 'name' => 'Campo Pueblo Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82243', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0042', 'name' => 'Los Ébanos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82245', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1149', 'name' => 'El Roble', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82246', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2530', 'name' => 'El Guayabo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82247', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1151', 'name' => 'Escamillas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82248', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1152', 'name' => 'El Bajío', 'zone_type' => 'Rural', 'settlementtype_id' => '15','zipcode_id' => $idZip],
		['key' => '2880', 'name' => 'El Tecomate de Siqueros', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82249', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1150', 'name' => 'Cofradía (Cofradía de Leyva Solano)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82264', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0043', 'name' => 'De los Niños', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0121', 'name' => 'Stanza Magnolia', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82266', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1153', 'name' => 'Barrón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82267', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0048', 'name' => 'El Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0049', 'name' => 'Ampliación el Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1155', 'name' => 'CERESO Mazatlán', 'zone_type' => 'Rural', 'settlementtype_id' => '9','zipcode_id' => $idZip],
		['key' => '0044', 'name' => 'Ampliación el Castillo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0045', 'name' => 'La Guanera', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0046', 'name' => 'Los Gavilanes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0047', 'name' => 'El Contento', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82269', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2149', 'name' => 'Mazatlán (Gral. Rafael Buelna)', 'zone_type' => 'Urbano', 'settlementtype_id' => '1','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82270', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0050', 'name' => 'El Milagro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0051', 'name' => 'El Mirabal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0052', 'name' => 'El Cañón de Batopilas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1147', 'name' => 'El Habal', 'zone_type' => 'Rural', 'settlementtype_id' => '15','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82273', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0053', 'name' => 'Armadillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0054', 'name' => 'Los Cedros', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2531', 'name' => 'El Chilillo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2879', 'name' => 'Puerta de Canoas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82274', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0055', 'name' => 'Escondida de Palmillas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0056', 'name' => 'Palmillas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0057', 'name' => 'La Presa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0058', 'name' => 'Las Higueras del Conchi', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0059', 'name' => 'Miravalles', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3136', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82275', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0060', 'name' => 'San Juan', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0061', 'name' => 'Ejército de Salvación', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1148', 'name' => 'El Pozole', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82277', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0062', 'name' => 'Santa Teresa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0063', 'name' => 'La Yerbabuena', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0064', 'name' => 'El Huizachal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0065', 'name' => 'San José (Chuchupiras)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0066', 'name' => 'La Curva del Potrero', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0067', 'name' => 'San José', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2688', 'name' => 'El Potrero de Carrasco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82300', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0068', 'name' => 'Piedra Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0069', 'name' => 'Los Arrayanes (El Saucito)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0070', 'name' => 'Las Salvias', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2735', 'name' => 'Los Copales', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82303', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0071', 'name' => 'Guaymas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0072', 'name' => 'El Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0073', 'name' => 'La Embocada', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0074', 'name' => 'La Chapalota', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82304', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2532', 'name' => 'Guamúchil', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2533', 'name' => 'El Tecomate de la Noria', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82305', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0075', 'name' => 'La Osa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0076', 'name' => 'Las Guásimas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0077', 'name' => 'Los Cocos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82306', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0078', 'name' => 'El Magistral', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0079', 'name' => 'Metates', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0080', 'name' => 'El Pinto (El Cerro)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0081', 'name' => 'El Palmillar (El Palmillar de los Agüeros)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82310', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0082', 'name' => 'San José del Cañón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0083', 'name' => 'Potrerillos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82313', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0084', 'name' => 'El Olvido', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0085', 'name' => 'Las Tatemas de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0086', 'name' => 'El Bebedero', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1158', 'name' => 'Juantillos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1161', 'name' => 'San Marcos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2734', 'name' => 'Puerta de San Marcos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82314', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2986', 'name' => 'El Placer', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82320', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Chicura de la Noria', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0087', 'name' => 'Los Columpios', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0088', 'name' => 'Los Cuilones', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0089', 'name' => 'Las Tinajas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0090', 'name' => 'Los Cardones de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82329', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1157', 'name' => 'La Noria de San Antonio (La Noria)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82330', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0091', 'name' => 'San Pedro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0092', 'name' => 'Colima', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0093', 'name' => 'El Chilar', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0094', 'name' => 'Los Añiles', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2534', 'name' => 'Los Zapotes', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2947', 'name' => 'San Pablo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82334', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'La Palma Sola', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0095', 'name' => 'Las Moras de Alonso', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0096', 'name' => 'Santa Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0097', 'name' => 'El Pochote', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82335', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Los Limones', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0098', 'name' => 'La Semana', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82350', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1159', 'name' => 'El Quelite', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2210', 'name' => 'El Puente del Quelite', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82353', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0099', 'name' => 'El Amole del Quelite', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82354', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0100', 'name' => 'El Llorón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82355', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0101', 'name' => 'San José', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82360', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2535', 'name' => 'El Quemado', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82363', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0102', 'name' => 'El Moral', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82365', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0103', 'name' => 'El Vainillo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0104', 'name' => 'Los Cedros', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0105', 'name' => 'La Mora Escarbada', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82366', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0106', 'name' => 'Jiménez', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82369', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1160', 'name' => 'La Sábila', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82370', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2536', 'name' => 'El Recreo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2954', 'name' => 'Camacho', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82373', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0107', 'name' => 'El Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82380', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0108', 'name' => 'El Chamizal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2209', 'name' => 'Los Llanitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82384', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1143', 'name' => 'Mármol de Salcido (Mármol)', 'zone_type' => 'Rural', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '009', 'name' => 'Escuinapa', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82400', 'locality' => 'Escuinapa de Hidalgo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1162', 'name' => 'Escuinapa Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2062', 'name' => 'FOVISSSTE Buenos Aires', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82410', 'locality' => 'Escuinapa de Hidalgo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1164', 'name' => 'Pueblo Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2063', 'name' => 'INFONAVIT El Arroyo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82419', 'locality' => 'Escuinapa de Hidalgo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1165', 'name' => 'Loma Linda INFONAVIT Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82420', 'locality' => 'Escuinapa de Hidalgo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1166', 'name' => 'Francisco I. Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1995', 'name' => 'INFONAVIT Arroyo Seco', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '2071', 'name' => 'Azteca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82430', 'locality' => 'Escuinapa de Hidalgo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1167', 'name' => 'Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2076', 'name' => 'El Roblito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82440', 'locality' => 'Escuinapa de Hidalgo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1168', 'name' => '10 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82457', 'locality' => 'Escuinapa de Hidalgo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'INFONAVIT Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1170', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1994', 'name' => 'El Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2072', 'name' => '13 de Septiembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2073', 'name' => 'Solidaridad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2074', 'name' => 'INFONAVIT Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2191', 'name' => 'Dámaso Murua', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82458', 'locality' => 'Escuinapa de Hidalgo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1171', 'name' => 'Las Huertas INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '2077', 'name' => 'Las Huertas II INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '2186', 'name' => 'Villa Galaxia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82459', 'locality' => 'Escuinapa de Hidalgo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'Las Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1172', 'name' => 'Antonio Toledo Corro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2070', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2187', 'name' => 'INFONAVIT del Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82460', 'locality' => 'Escuinapa de Hidalgo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1173', 'name' => 'Gabriel Leyva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2075', 'name' => 'INFONAVIT Los Mangos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2185', 'name' => 'Juvencio Aragón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82470', 'locality' => 'Escuinapa de Hidalgo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1174', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82478', 'locality' => 'Escuinapa de Hidalgo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1175', 'name' => 'Ampliación Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2064', 'name' => 'Santa Lucía', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82500', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1177', 'name' => 'Rincón del Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82505', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'El Capomo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82513', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3143', 'name' => 'El Camarón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82517', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3098', 'name' => 'Pilas de Estancia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82530', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1178', 'name' => 'José María Morelos y Pavón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1180', 'name' => 'Isla del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82532', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'Revolución', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0012', 'name' => 'La Estacada', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1179', 'name' => 'Celaya', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82534', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'La Villita de la Estación', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82540', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1181', 'name' => 'Tecualilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82545', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0014', 'name' => 'San Miguel de la Atarjea', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82550', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'El Trébol', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1182', 'name' => 'La Campana Número Dos (El Pochote)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1183', 'name' => 'Ejido de la Campana Número Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82553', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0015', 'name' => 'El Tule (La Cobacha)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82554', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'La Ciénega', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82560', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1186', 'name' => 'Teacapan', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82563', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'El Camichín [Sitio de Pesca]', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1184', 'name' => 'Cristo Rey', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82564', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1185', 'name' => 'Palmito del Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82580', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1188', 'name' => 'Ojo de Agua de Palmillas', 'zone_type' => 'Urbano', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82590', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'La Loma (Gabriel Leyva Solano)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1190', 'name' => 'La Concha (La Concepción)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82591', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1191', 'name' => 'Copales', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82592', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'La Ceiba', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'Las Pilas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'Agua Caliente', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'El Trébol 2', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '004', 'name' => 'Concordia', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82600', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3147', 'name' => 'Invies Colinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3148', 'name' => 'La Cañada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1193', 'name' => 'Concordia', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2274', 'name' => 'Villa de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2275', 'name' => 'San Sebastián', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2276', 'name' => 'La Maravilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2277', 'name' => 'Magisterial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2278', 'name' => 'Los Ranchitos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2279', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2280', 'name' => '20 de Enero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2281', 'name' => 'Jardines de La Loma', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3145', 'name' => 'Estadio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3146', 'name' => 'INFONAVIT Loma Linda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82603', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0015', 'name' => 'Los Zacatitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82604', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1194', 'name' => 'Zavala', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82605', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1197', 'name' => 'La Embocada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82607', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0014', 'name' => 'Las Porras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82608', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0028', 'name' => 'El Cardón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0029', 'name' => 'El Cardón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0030', 'name' => 'San Gabriel', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82610', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'El Tiro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0004', 'name' => 'El Naranjo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Los Laureles', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0052', 'name' => 'La Cieneguilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82613', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Agua Caliente del Favor', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'El Sesteadero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'El Pueblito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'San José del Favor', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82614', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Cerro Pelón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'Santa Bárbara', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'El Palo Parado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82616', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'Las Guacamayas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'El Llano', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0012', 'name' => 'Los Vasitos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0053', 'name' => 'Zaragoza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82617', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'Agua Caliente del Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82620', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1198', 'name' => 'Agua Caliente de Gárate (Agua Caliente)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82625', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1196', 'name' => 'El Huajote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82628', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0027', 'name' => 'Ejido Caleritas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82630', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1200', 'name' => 'El Palmito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82635', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0046', 'name' => 'Loberas [Microondas]', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0047', 'name' => 'Loberas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0049', 'name' => 'La Laguna', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82636', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0050', 'name' => 'El Carrizo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82637', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'El Puente', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82640', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1201', 'name' => 'La Concepción (La Barrigona)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82642', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0019', 'name' => 'Agua Caliente de Jacobo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1202', 'name' => 'San Juan de Jacobo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82643', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0024', 'name' => 'Palmillas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0051', 'name' => 'Los Huanacaxtles', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1199', 'name' => 'Las Iguanas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3020', 'name' => 'Casas Viejas', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82644', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1203', 'name' => 'Tepuxta', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2948', 'name' => 'Los Cerritos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82646', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1205', 'name' => 'Malpica', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82647', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'Los Corrales', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0025', 'name' => 'El Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82648', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1204', 'name' => 'El Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82650', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0034', 'name' => 'El Naranjito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0035', 'name' => 'Copalita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1206', 'name' => 'Copala', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82653', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0059', 'name' => 'Charcas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0060', 'name' => 'Joachinque', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0061', 'name' => 'El Saucillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0062', 'name' => 'La Válvula', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0063', 'name' => 'Las Juntas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0064', 'name' => 'Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1207', 'name' => 'Pánuco', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '3134', 'name' => 'Palos Blancos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82655', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0048', 'name' => 'La Venada', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82656', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0058', 'name' => 'Los Naranjos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1208', 'name' => 'Platanar de los Ontiveros', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1209', 'name' => 'Santa Catarina', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82658', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'Los Chinitos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'La Guásima', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0026', 'name' => 'Piedra Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0032', 'name' => 'Magistral', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0033', 'name' => 'La Pitarrilla', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1210', 'name' => 'Chupaderos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82660', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0056', 'name' => 'La Capilla del Taxte', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0057', 'name' => 'El Picacho', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1211', 'name' => 'Santa Lucía', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82663', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0041', 'name' => 'La Cañita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0042', 'name' => 'Corte Alto', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0043', 'name' => 'Santa Rita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0044', 'name' => 'Trópico de Cáncer', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0045', 'name' => 'El Batel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1212', 'name' => 'Chirimoyos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1213', 'name' => 'Potrerillos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82666', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0023', 'name' => 'La Mesa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0036', 'name' => 'El Coco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0037', 'name' => 'La Mesa del Carrizal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0039', 'name' => 'La Guayanera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0040', 'name' => 'El Encinal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82667', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1214', 'name' => 'La Petaca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82670', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2537', 'name' => 'Cuatantal', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82675', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3135', 'name' => 'Habal de Copala', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82677', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0038', 'name' => 'El Purgatorio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82680', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1215', 'name' => 'Mesillas', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82684', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0031', 'name' => 'Los Ciruelos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82685', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'San Lorenzo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82686', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0054', 'name' => 'La Ciénega', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0055', 'name' => 'La Pastoría', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '008', 'name' => 'Elota', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82700', 'locality' => 'La Cruz', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1216', 'name' => 'La Cruz Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82702', 'locality' => 'La Cruz', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0037', 'name' => 'Azteca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1816', 'name' => 'Arroyitos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82703', 'locality' => 'La Cruz', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1815', 'name' => 'Colinas del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1820', 'name' => 'Santa Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2943', 'name' => 'Las Brisas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3028', 'name' => 'Nuevo Amanecer', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3053', 'name' => 'Los Claveles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3081', 'name' => 'Macías', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3132', 'name' => 'Los Árboles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82704', 'locality' => 'La Cruz', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1810', 'name' => 'Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1811', 'name' => 'Loma Linda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82705', 'locality' => 'La Cruz', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1818', 'name' => 'Ejidal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82706', 'locality' => 'La Cruz', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1813', 'name' => 'Palos Blancos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1817', 'name' => 'Víctor Manuel Quintero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1819', 'name' => 'Margarita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82707', 'locality' => 'La Cruz', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1812', 'name' => 'Miramar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82708', 'locality' => 'La Cruz', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1814', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2698', 'name' => 'Montebello', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2985', 'name' => 'Vicente Escobar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82710', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Rincón de Ibonía', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2990', 'name' => 'Ibonía', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82713', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2991', 'name' => 'El Sabinal', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82720', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Casas Nuevas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'El Portezuelo de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0004', 'name' => 'El Portezuelo de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82721', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1219', 'name' => 'Conitaca', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1220', 'name' => 'Salto Chico', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82723', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'La Resbalosa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2977', 'name' => 'El Chirimole', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82724', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2894', 'name' => 'Japuino', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82725', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1221', 'name' => 'Nuevo Salto Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82726', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Paredón Colorado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82727', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'El Solito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82730', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1223', 'name' => 'El Espinal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2538', 'name' => 'San José de Conitaca (Nuevo Conitaca)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82733', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1231', 'name' => 'Las Tinas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82734', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Potrerillo de los Landeros', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Los Mecates', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82739', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1224', 'name' => 'El Aguaje', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82740', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'Las Granjas del Norote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1225', 'name' => 'Potrerillo del Norote', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82741', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1226', 'name' => 'Alta Rosa (Pípila II)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82743', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'Gabriel Leyva Solano', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0012', 'name' => '26 de Enero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1227', 'name' => 'Vida Campesina', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82745', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'Higuera de los López', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1228', 'name' => 'Higueras de Culiacancito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82747', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0014', 'name' => 'Los Leones', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'Santa Rita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1229', 'name' => 'La Ventana (El Carrizo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1230', 'name' => 'Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82750', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'El Tabachín', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82755', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'El Mautillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Aguapepe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82758', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0019', 'name' => 'La Bebelama', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'Crucero de la Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1232', 'name' => 'Casas Viejas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2539', 'name' => 'El Bolillo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82760', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1233', 'name' => 'Agua Nueva', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82763', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1234', 'name' => 'Ensenada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82764', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0021', 'name' => 'La Papalota', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1235', 'name' => 'Casas Grandes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82765', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1222', 'name' => 'Elota', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82770', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0022', 'name' => 'Buenos Aires', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1237', 'name' => 'Tanques', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82773', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0023', 'name' => 'Campo Agrovo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0024', 'name' => 'Campo la Paloma (Agrícola el Chaparral)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1238', 'name' => 'Boscoso', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2540', 'name' => 'Culiacán (Culiacancito)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2541', 'name' => 'Campo Cachanilla', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82774', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0025', 'name' => 'Campo Nueva Florida', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0026', 'name' => 'Abocho (Estación Abocho)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1236', 'name' => 'Pueblo Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82775', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2542', 'name' => 'Campo San Juan', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2543', 'name' => 'Campo Santa Lucía II', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82776', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2544', 'name' => 'Campo Cinco (La Retama)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82777', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0027', 'name' => 'Los Difuntos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1239', 'name' => 'Los Caimanes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2545', 'name' => 'Caimanes II', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2546', 'name' => 'Campo Nuevo Caimanes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82780', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1240', 'name' => 'Celestino Gazca Villaseñor', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82783', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0028', 'name' => 'Campo Santa Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82786', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0029', 'name' => 'Bellavista', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2547', 'name' => 'Campo Bellavista', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2548', 'name' => 'Campo Capule', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82787', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0030', 'name' => 'Los Majaguales', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1241', 'name' => 'Ceuta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2549', 'name' => 'Empaque Tarriba', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82788', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0031', 'name' => 'Santa Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0032', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0033', 'name' => 'El Limoncito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1242', 'name' => 'El Roble', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82790', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1243', 'name' => 'El Saladito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2550', 'name' => 'Campo Tayoltita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2551', 'name' => 'Tayoltita', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2552', 'name' => 'Campo Tayoltita II', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2553', 'name' => 'Píder (Los Arroyitos)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82793', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1246', 'name' => 'El Salado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82794', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0034', 'name' => 'Nuevo Tecuyo (Tepalcates)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1245', 'name' => 'Tecuyo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82795', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0035', 'name' => 'Buenavista', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1244', 'name' => 'Loma de Tecuyo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82796', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0036', 'name' => 'Fructuoso Núñez Campaña (El Perical)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82797', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2701', 'name' => 'Rosendo Nieblas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '014', 'name' => 'Rosario', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82800', 'locality' => 'El Rosario', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1247', 'name' => 'El Rosario Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3185', 'name' => 'Anonal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82802', 'locality' => 'El Rosario', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1830', 'name' => 'Rosendo G. Castro INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1831', 'name' => 'Panteón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1842', 'name' => 'López Portillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82803', 'locality' => 'El Rosario', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1832', 'name' => 'INFONAVIT Lola Beltrán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1833', 'name' => 'Genaro Estrada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1834', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82804', 'locality' => 'El Rosario', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Mecha Ardiendo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1835', 'name' => 'Rubén Jaramillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1836', 'name' => 'La Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82805', 'locality' => 'El Rosario', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1822', 'name' => 'La Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1839', 'name' => 'Pablo de Villavicencio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2092', 'name' => 'El Tierral', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82806', 'locality' => 'El Rosario', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1823', 'name' => 'Vicente Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1825', 'name' => 'Potreritos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1826', 'name' => 'Pedro Ibarra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82807', 'locality' => 'El Rosario', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1824', 'name' => 'Bonifacio Rojas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1838', 'name' => 'Alfonso G. Calderón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1840', 'name' => 'INFONAVIT Real de Minas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2094', 'name' => 'Juan S. Millán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2271', 'name' => 'María Luisa Lizarraga Saucedo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3183', 'name' => 'Ampliación Juan S. Millán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82808', 'locality' => 'El Rosario', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1827', 'name' => 'Marcelo Loya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1828', 'name' => 'Valle Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1829', 'name' => 'Presidentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1841', 'name' => 'Minas del Tajo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82809', 'locality' => 'El Rosario', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1837', 'name' => 'Villas del Mineral', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82810', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Las Piñas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'La Escondida', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'Palos Blancos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1253', 'name' => 'Chele', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82813', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Los Tambos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'La Mimbre', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82814', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'Los Sitios del Picacho', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'Quebrada Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82817', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0012', 'name' => 'El Guajolote', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3190', 'name' => 'Los Arrayanes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82820', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'Francisco Villa (Las Garzas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1254', 'name' => 'Teodoro Beltrán (La Hacienda)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2335', 'name' => 'Los Pozos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82823', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2334', 'name' => 'Gregorio Vázquez Moreno (San Joachín)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82824', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2332', 'name' => 'La Guásima', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82825', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0014', 'name' => 'Pozos Labrados', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82826', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1256', 'name' => 'El Matadero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82827', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2325', 'name' => 'El Zopilote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82830', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0015', 'name' => 'El Infiernillo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0016', 'name' => 'El Recodo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1257', 'name' => 'Cacalotán', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1258', 'name' => 'Copales', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2330', 'name' => 'El Tamarindo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2740', 'name' => 'Francisco Quintero', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2757', 'name' => 'Hacienda el Tamarindo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '3091', 'name' => 'El Nuevo Tonalá', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82832', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1250', 'name' => 'Cruz Pedregoza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1252', 'name' => 'Laguna de Beltranes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2329', 'name' => 'Nieblas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82833', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'El Tablón Número Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'Rincón de Higueras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2214', 'name' => 'Tablón Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2331', 'name' => 'Las Higueras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2333', 'name' => 'Tablón Número Uno (Las Cruces Cuatas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3199', 'name' => 'El Portezuelo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82834', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'Santa María (Santa María de Gracia)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'La Canoa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2324', 'name' => 'Ojo de Agua', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82835', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0019', 'name' => 'Los Guajolotes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'Estación Rosario', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'La Angarilla', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2328', 'name' => 'Ojitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82839', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0022', 'name' => 'Loma de Potrerillos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'Otates', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1259', 'name' => 'Potrerillos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2317', 'name' => 'Ojo de Agua de Osuna', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82850', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0025', 'name' => 'San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2213', 'name' => 'Tebaira', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82853', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0026', 'name' => 'Agua Zarca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82860', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0027', 'name' => 'El Plan', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0028', 'name' => 'Agua Fría', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0029', 'name' => 'El Colomo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0030', 'name' => 'El Azafrán', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1260', 'name' => 'La Rastra', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2289', 'name' => 'Plomosas', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82863', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0031', 'name' => 'San Marcial', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0032', 'name' => 'Los Cajones', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0033', 'name' => 'Mesa de Santa Rita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82864', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0034', 'name' => 'Palmarito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0035', 'name' => 'La Palma Barrenada', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82865', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0036', 'name' => 'El Llano de la Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0037', 'name' => 'Las Cebollitas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0038', 'name' => 'Charco Hondo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0039', 'name' => 'El Carrizo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82866', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0040', 'name' => 'Picachitos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82870', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1261', 'name' => 'Chametla', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82871', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0041', 'name' => 'La Loma', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0042', 'name' => 'El Potrero de Astengo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0043', 'name' => 'Montealto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0044', 'name' => 'Duranguito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0045', 'name' => 'La Reforma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1251', 'name' => 'El Pozole', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1262', 'name' => 'Apoderado', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2941', 'name' => 'El Chupadero', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82872', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1263', 'name' => 'Agua Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2940', 'name' => 'Ampliación Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82874', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0046', 'name' => 'El Valamo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1248', 'name' => 'Ponce', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82875', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0047', 'name' => 'Loma Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0048', 'name' => 'Guatimozitl', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0049', 'name' => 'Los Alacranes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0050', 'name' => 'La Urraca', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2326', 'name' => 'Chilillos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82876', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0051', 'name' => 'Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0052', 'name' => 'Tazajal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0053', 'name' => 'El Limoncito (El Riyito)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0054', 'name' => 'Loma del Zorrillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0055', 'name' => 'Loma Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2327', 'name' => 'Cajón Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82877', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1264', 'name' => 'El Puyeque', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2336', 'name' => 'Cajón Ojo de Agua Número Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82880', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Las Habitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0056', 'name' => 'Maloyita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0057', 'name' => 'El Ciruelo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0058', 'name' => 'Las Juntas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1266', 'name' => 'Matatán', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82883', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0059', 'name' => 'Potrero de los Laureles', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0060', 'name' => 'Guamuchiltita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0061', 'name' => 'Tepehuaje', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82884', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0062', 'name' => 'San Marco Otatitán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82885', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0063', 'name' => 'Tecomatillo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0064', 'name' => 'Buenavista', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0065', 'name' => 'Maloya', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2212', 'name' => 'Corral de Piedras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82886', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0066', 'name' => 'El Aguacate', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0067', 'name' => 'Jalpa Número Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82887', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0068', 'name' => 'La Tuna', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0069', 'name' => 'La Arrastrada', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3097', 'name' => 'Agua Caliente de los Panales', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '016', 'name' => 'San Ignacio', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82900', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Chacualtita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'El Platanar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82902', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'El Carrizal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1269', 'name' => 'Ajoya', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82904', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Los Humayes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2881', 'name' => 'Las Lajas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82905', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'El Chaco', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'Tolosa (Guallanila)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'El Cantón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82906', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0012', 'name' => 'Tacuitapa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0013', 'name' => 'El Capule', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82907', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0014', 'name' => 'Los Frailes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82909', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0015', 'name' => 'El Limoncito (El Palmar)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0016', 'name' => 'Vado Hondo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1270', 'name' => 'San Juan', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82910', 'locality' => 'San Ignacio', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1637', 'name' => 'San Ignacio Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82912', 'locality' => 'San Ignacio', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1638', 'name' => 'Heraclio Bernal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2201', 'name' => 'Feliciano Roque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82913', 'locality' => 'San Ignacio', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1639', 'name' => 'Azucena del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3144', 'name' => 'El Pueblito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82916', 'locality' => 'San Ignacio', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1640', 'name' => 'La Chora (Renato Vega)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82917', 'locality' => 'San Ignacio', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1641', 'name' => 'La Vega', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82918', 'locality' => 'San Ignacio', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1642', 'name' => 'Labastida Ochoa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82920', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'Agua Caliente de los Yuriar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Acatitán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82923', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0019', 'name' => 'La Ciénega', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'Rincón del Chilar', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1271', 'name' => 'El Chilar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82925', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0021', 'name' => 'Piedras Negras (Piedras Prietas Guasimillas)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'Güillapa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'El Sauz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0024', 'name' => 'Campanillas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82930', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2312', 'name' => 'La Caña', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82933', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0025', 'name' => 'El Espíritu', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82934', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0026', 'name' => 'El Guayabo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0027', 'name' => 'Los Tarayes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82935', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0028', 'name' => 'El Rincón de Tenchoquelite', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0029', 'name' => 'Tepehuajes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0030', 'name' => 'Tenchoquelite', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0031', 'name' => 'Los Brasiles', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82937', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0033', 'name' => 'Cofradía', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82940', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1272', 'name' => 'Ixpalino', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82943', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0035', 'name' => 'San Agustín', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82945', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0034', 'name' => 'El Guamúchil', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0036', 'name' => 'El Tecolote', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1273', 'name' => 'La Quebrada de los Sandoval', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82950', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1274', 'name' => 'Contraestaca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82953', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0037', 'name' => 'Casa de Texas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0038', 'name' => 'Rincón de Guayabito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0039', 'name' => 'Pueblo Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0040', 'name' => 'El Arroyo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82954', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0041', 'name' => 'El Limón de los Castañeda', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0042', 'name' => 'La Vainilla', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0043', 'name' => 'Las Milpillas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82955', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0044', 'name' => 'La Caña', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0045', 'name' => 'Las Azoteas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82956', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0046', 'name' => 'California', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82960', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'El Cajón de Piaxtla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'Crucero de Piaxtla (La Cacharola)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0047', 'name' => 'Las Lomas del Pedregal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0048', 'name' => 'El Pujido', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1275', 'name' => 'Piaxtla de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2695', 'name' => 'Piaxtla de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82963', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0049', 'name' => 'El Arrayán', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0050', 'name' => 'El Mariachi Piaxtla', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1276', 'name' => 'Camino Real de Piaxtla', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82965', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0051', 'name' => 'El Patole', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82966', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1278', 'name' => 'Duranguito de Dimas', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82967', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0082', 'name' => 'Guillermo Prieto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0083', 'name' => 'La Chicayota (Chilacayotas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82968', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1279', 'name' => 'Barras de Piaxtla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82969', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1280', 'name' => 'Dimas', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82970', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0052', 'name' => 'Los Mecates', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1281', 'name' => 'La Labor', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82973', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0053', 'name' => 'Los Plátanos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0054', 'name' => 'El Veladero', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0055', 'name' => 'El Quelele', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0056', 'name' => 'El Manchón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3140', 'name' => 'El Tule', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82974', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0057', 'name' => 'Los Platanitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0058', 'name' => 'Las Pilas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0059', 'name' => 'El Carmen', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82975', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0061', 'name' => 'El Lodazal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1283', 'name' => 'Cabazán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82976', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0062', 'name' => 'Coacoyol', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0063', 'name' => 'Camacho de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1282', 'name' => 'San Javier', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82980', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0064', 'name' => 'La Tasajera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82983', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0065', 'name' => 'El Aguaje de lo Devota', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82984', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0066', 'name' => 'El Arrayanal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0067', 'name' => 'Los Colomos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0068', 'name' => 'La Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82985', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0069', 'name' => 'El Limoncito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0070', 'name' => 'Jinetes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0071', 'name' => 'El Cedro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0072', 'name' => 'Los Tarayes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0073', 'name' => 'El Moral (Las Tinas)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82990', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0074', 'name' => 'Higueras de Ponce', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0075', 'name' => 'Entronque de Coyotitán', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0076', 'name' => 'La Calavera', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0077', 'name' => 'Los Gordos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0078', 'name' => 'El Verano', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1284', 'name' => 'Coyotitán', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2290', 'name' => 'Lo de Ponce', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82993', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Palmarito de los Ramírez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82994', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0079', 'name' => 'El Limón de los Peraza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82995', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0080', 'name' => 'Ejido Toyhua', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0081', 'name' => 'El Pozole', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '82996', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2976', 'name' => 'Lomas del Mar de Piaxtla', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);


    }
}
