<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomSeeder05 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idFed = DB::table('federal_entities')->insertGetId(['key' => '05', 'name' => 'Coahuila de Zaragoza', 'code' => '']);

$idMun = DB::table('municipalities')->insertGetId(['key' => '030', 'name' => 'Saltillo', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25000', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Saltillo Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25010', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'Vista Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1842', 'name' => 'La Fuente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2400', 'name' => 'Privada la Misión', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2401', 'name' => 'Privada la Campana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2830', 'name' => 'Nuevo Saltillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2832', 'name' => 'Privada de San Javier', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2877', 'name' => 'Solidaridad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2906', 'name' => 'Parajes de la Sierra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25013', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => '15 de Septiembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0051', 'name' => 'Villa Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0354', 'name' => 'Milenio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0377', 'name' => 'El Monte del Sinaí', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0439', 'name' => 'Cordillera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1844', 'name' => 'Ampliación Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1845', 'name' => 'Amistad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2578', 'name' => 'Morelos Nueva Creación', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2697', 'name' => 'Balcones de Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2864', 'name' => 'Valle de Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3198', 'name' => 'Parque Industrial Amistad', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '3222', 'name' => 'Privada Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3269', 'name' => 'Colibrí', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25014', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => '10 de Abril', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'San Pedro de los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2402', 'name' => 'Cecilia Ocelli de Salinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25015', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0015', 'name' => 'Fundadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0378', 'name' => 'El Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0380', 'name' => 'Fuentes del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0424', 'name' => 'Edgar Puente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1747', 'name' => 'Villa de Santiago', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1759', 'name' => 'Lomas del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1769', 'name' => 'Lomas de Zapaliname', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1770', 'name' => 'Valle de las Aves', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2403', 'name' => 'Nuevo Amanecer', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2404', 'name' => 'Salomón Abedrop', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2562', 'name' => 'Lomas de San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2563', 'name' => 'Nueva Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2564', 'name' => 'Nuevo Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2709', 'name' => 'Introductores de Ganado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25016', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'Ignacio Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0152', 'name' => 'Residencial los Rosales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0180', 'name' => 'Colinas de Santiago', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0396', 'name' => 'Popular Loma Blanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0411', 'name' => 'Sierra Alta Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0418', 'name' => 'Prados de San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0465', 'name' => 'Tres Vientos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1838', 'name' => 'Ciudad Mirasierra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1839', 'name' => 'Lomas del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1841', 'name' => 'Puerta del Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2405', 'name' => 'Privadas la Torre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2577', 'name' => 'Privada los Magueyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2580', 'name' => 'Loma Linda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2582', 'name' => 'Gaspar Valdez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2761', 'name' => 'Real del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2855', 'name' => 'Recreativo Sección 38', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2862', 'name' => 'Francisco I Madero Rústico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2863', 'name' => 'Nuevo Mirasierra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3164', 'name' => 'Privadas Sierras del Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3165', 'name' => 'Sierra Blanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3189', 'name' => 'Misión Cerritos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3218', 'name' => 'Santa Lucía', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25017', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'Ampliación Valle de Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0363', 'name' => 'Ampliación Morelos Segundo Sector', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25019', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0020', 'name' => 'Conquistadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0204', 'name' => 'Privada Nogal I', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1744', 'name' => 'La Nogalera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1746', 'name' => 'El Cerrito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1748', 'name' => 'Nueva Tlaxcala', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1749', 'name' => 'Rubén Jaramillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1760', 'name' => 'Tierra y Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1761', 'name' => 'La Morita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1762', 'name' => 'Nueva Imagen', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1771', 'name' => 'El Ejido', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1843', 'name' => 'El Nogalar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2567', 'name' => 'Las Candelarias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2568', 'name' => 'Postal Cerritos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2710', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2749', 'name' => 'Los Lirios', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2817', 'name' => 'Candelarias Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2856', 'name' => 'Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2873', 'name' => 'Las Maravillas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3173', 'name' => 'Villa Fundadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25020', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0021', 'name' => 'Provivienda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'San Ramón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0024', 'name' => 'Urdiñola', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0025', 'name' => 'Zapaliname', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0426', 'name' => 'Indio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1739', 'name' => 'San Esteban', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2395', 'name' => 'Valle de San Ramón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25022', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1794', 'name' => 'Centro Metropolitano', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
		['key' => '1795', 'name' => 'Parque las Maravillas', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25023', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0095', 'name' => 'Universidad Pueblo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0369', 'name' => 'Montevista', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0457', 'name' => 'Cantabria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1740', 'name' => 'La Palma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1741', 'name' => 'El Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1742', 'name' => 'San Vicente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1750', 'name' => 'Arboledas Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1751', 'name' => 'Loma Bonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2399', 'name' => 'Valle de las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2585', 'name' => 'Valle de Santa Elena', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3215', 'name' => 'La Rosaleda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25030', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0026', 'name' => 'Agua Azul', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0027', 'name' => 'Arcos de Belén', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0028', 'name' => 'González Cepeda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0029', 'name' => 'Loma de Santa Anita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25034', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0030', 'name' => 'Magisterio Sección 38', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2872', 'name' => 'Santa Anita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2878', 'name' => 'Esther Santos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25036', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0031', 'name' => 'Huertas de Venancio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25038', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0032', 'name' => 'Condesa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1743', 'name' => 'Ampliación San Ramón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25039', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0033', 'name' => 'Deimos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25040', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0034', 'name' => 'Ojo de Agua', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0035', 'name' => 'San Lorenzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0036', 'name' => 'Barrio Santa Anita', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0037', 'name' => 'Viramontes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1755', 'name' => 'Balcones de Bellavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25043', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0038', 'name' => 'Héroes de Chapultepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25045', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0040', 'name' => 'Zapateros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2828', 'name' => 'Portal de Santiago', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25047', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2883', 'name' => 'Los Álamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25048', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0042', 'name' => 'Burócratas del Estado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2394', 'name' => 'Lomas de Chapultepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25049', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0043', 'name' => 'Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0044', 'name' => 'Simón Bolívar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0087', 'name' => 'Águila de Oro', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2875', 'name' => 'Privada Coahuila', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25050', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0045', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0046', 'name' => 'María del Carmen Cabello', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0047', 'name' => 'Centenario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0048', 'name' => 'Chapultepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0050', 'name' => 'La Madrid', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1754', 'name' => 'Rosa María Gutiérrez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25056', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1763', 'name' => 'El Salvador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25057', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0353', 'name' => 'El Volcán', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0389', 'name' => 'Los Nogales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1753', 'name' => 'Jesús Cabello', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1764', 'name' => 'Lomas de San Javier', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1766', 'name' => 'Colinas de San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1804', 'name' => 'La Herradura', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1807', 'name' => 'Los Nogales II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2750', 'name' => 'Parajes de Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25060', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0054', 'name' => 'Bellavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0056', 'name' => 'Francisco I Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0057', 'name' => 'Segovia Gil', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0058', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0059', 'name' => 'Los Arcos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0060', 'name' => 'Lucio Blanco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0061', 'name' => 'Miravalle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0063', 'name' => 'San Lorenzo Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0428', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1801', 'name' => 'Acueducto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1805', 'name' => 'La Central', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2359', 'name' => 'Bellavista Mesa de Arizpe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25065', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0065', 'name' => 'Huertas de San Lorenzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0066', 'name' => '15 de Abril', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0374', 'name' => 'Cerrada San Lorenzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1756', 'name' => 'Jesús Garcia Corona', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1758', 'name' => 'Patria Libre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2554', 'name' => 'Nueva Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25067', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0067', 'name' => 'Quinta Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25068', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0068', 'name' => 'Quinta Esmeralda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25069', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0069', 'name' => 'Villa Universidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1776', 'name' => 'Valle de Lourdes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1800', 'name' => 'Las Haciendas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25070', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0072', 'name' => 'Landin', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0073', 'name' => 'Lomas de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0074', 'name' => 'Lourdes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0355', 'name' => 'Privada Obregón Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1757', 'name' => 'Balcones de Landin', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2833', 'name' => 'Lomas de Landín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3260', 'name' => 'Privada Rincón de Salazar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25075', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0075', 'name' => '26 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0076', 'name' => 'Ferrocarrilero 7 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25076', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0077', 'name' => 'Buenos Aires', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25077', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0078', 'name' => 'Los Balcones de Buenavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1767', 'name' => 'Valle Alto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25080', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0081', 'name' => 'Eulalio Gutiérrez Treviño', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0082', 'name' => 'Girasol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0083', 'name' => 'Parques de la Cañada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0084', 'name' => 'Froylán Mier Narro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2933', 'name' => 'Los Periodistas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25083', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2539', 'name' => 'El Refugio la Soledad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2542', 'name' => 'Hacienda del Refugio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2555', 'name' => 'Parque Industrial la Angostura', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2560', 'name' => 'Sierra del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2824', 'name' => 'Hacienda el Mimbre', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
		['key' => '2934', 'name' => 'Amistad Alianzas', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25084', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Lomas del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0086', 'name' => 'Valle de San Lorenzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1796', 'name' => 'La Estrella', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1797', 'name' => '69 Batallón de Infantería', 'zone_type' => 'Urbano', 'settlementtype_id' => '29','zipcode_id' => $idZip],
		['key' => '1799', 'name' => 'Las Teresitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2543', 'name' => 'Niños Héroes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2587', 'name' => 'Lomas del Refugio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2748', 'name' => 'Las Rosas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2861', 'name' => 'Colinas de San Lorenzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2865', 'name' => 'Parajes de Santa Elena', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2926', 'name' => 'Hacienda las Isabeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2927', 'name' => 'Villas de la Angostura', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2932', 'name' => 'Ampliación la Estrella', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3231', 'name' => 'Nuevo Teresitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25085', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0088', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0455', 'name' => 'Rincón de Foret', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1778', 'name' => 'Genaro Vázquez Rojas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2792', 'name' => 'El Latifundio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25086', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0089', 'name' => 'Burócratas Municipales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0091', 'name' => 'Ampliación 26 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0375', 'name' => 'Privada Colombia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25087', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0092', 'name' => 'Ampliación Girasol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25088', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0350', 'name' => 'Hacienda Narro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0371', 'name' => 'Villas de San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0425', 'name' => 'Viñedos el Álamo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1768', 'name' => 'Agua Nueva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1779', 'name' => 'Ricardo Flores Magón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1780', 'name' => 'Nueva Jerusalén', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1781', 'name' => 'El Álamo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1782', 'name' => '23 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1784', 'name' => 'El Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1793', 'name' => 'María del Carmen Cavazos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1803', 'name' => 'Australia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2387', 'name' => '12 de Octubre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2538', 'name' => 'La Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2549', 'name' => 'San Juanita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2551', 'name' => 'El Álamo II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2704', 'name' => 'Mario Ortiz Rodríguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2879', 'name' => 'El Álamo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25090', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0093', 'name' => 'Lomas de Lourdes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1775', 'name' => 'Valle Dorado', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25092', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1787', 'name' => 'Lomas de Santa Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2391', 'name' => 'Humberto Dávila Esquivel', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '2545', 'name' => 'Villas de San Lorenzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2708', 'name' => 'Las Huertas de Lourdes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25093', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0409', 'name' => 'Santa Mónica', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1777', 'name' => 'Los Buitres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1789', 'name' => 'Colinas del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1790', 'name' => '10 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2392', 'name' => 'Hacienda el Cortijo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2715', 'name' => 'Mesa de Lourdes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2859', 'name' => 'Portal del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2860', 'name' => 'Ampliación Colinas del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2881', 'name' => 'Los Buitres II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25094', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0197', 'name' => 'Monteverde Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0394', 'name' => 'Paseo de la Estrella', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0395', 'name' => 'Privadas la Estrella', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0422', 'name' => 'Bosques de las Lomas Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0468', 'name' => 'Cumbres Vista Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3228', 'name' => 'Portal de las Lomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25096', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0367', 'name' => 'Vistas de Peña', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0456', 'name' => 'Vistas de Peña Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1772', 'name' => 'María de León', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1773', 'name' => 'Federico Berrueto Ramón Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1786', 'name' => 'Federico Berrueto Ramón', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2546', 'name' => 'Lomas Verdes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0096', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25097', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0098', 'name' => 'Vicente Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0384', 'name' => 'Las Rosas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25100', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0099', 'name' => 'Nazario S Ortiz Garza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1819', 'name' => 'Industrial Valle de Saltillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2348', 'name' => 'Hacienda San Rafael', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2565', 'name' => 'Omega', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2566', 'name' => 'La Purísima', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25107', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0100', 'name' => 'Asturias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0397', 'name' => 'Portal de Asturias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0406', 'name' => 'Rincón de Asturias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1818', 'name' => 'Valle Verde Sector II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2357', 'name' => 'Nuevo México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25110', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0101', 'name' => 'Ciudad las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0362', 'name' => 'Las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0390', 'name' => 'Nuevo Atardecer', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1809', 'name' => 'Portales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1810', 'name' => 'Evaristo Pérez Arreola', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1811', 'name' => 'Valle de las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2376', 'name' => 'Flora Ortega', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2536', 'name' => 'El Rodeo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2537', 'name' => 'Valle Azteca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2558', 'name' => 'La Florencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2559', 'name' => 'Valle de las Torres II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2711', 'name' => 'Balcones de las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2746', 'name' => 'Valle Satélite', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25113', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0102', 'name' => 'Satélite Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25114', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0103', 'name' => 'Parque Industrial las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25115', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0104', 'name' => 'Satélite Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0466', 'name' => 'Santorini', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1855', 'name' => 'Saltillo 2000', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2712', 'name' => 'Portal de los Agaves', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2713', 'name' => 'Portal del Quijote', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2826', 'name' => 'San José de Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2930', 'name' => 'Portal del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25116', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Valencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0370', 'name' => 'Andalucía', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0407', 'name' => 'San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25117', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0243', 'name' => 'Ankara Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0368', 'name' => 'Triana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0432', 'name' => 'Privada Lantana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0433', 'name' => 'Privada Luxor', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0440', 'name' => 'Villas Castellana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0453', 'name' => 'Real Ankara', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0469', 'name' => 'El Rocal Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3196', 'name' => 'Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25120', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0107', 'name' => 'Francisco I Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25123', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0352', 'name' => 'Pedregal de los Santos Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0376', 'name' => 'Ejido Padres Santos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0463', 'name' => 'La Magueyada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0464', 'name' => 'Ejido la Vega', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25124', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0108', 'name' => 'Las Cumbres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0134', 'name' => 'Rancho Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0385', 'name' => 'Loma Dorada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0391', 'name' => 'Ocho de Enero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1816', 'name' => 'Ignacio Allende', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2868', 'name' => 'Residencial Rincón de San Vicente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25125', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0109', 'name' => 'Roma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1815', 'name' => 'Adolfo López Mateos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25128', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0111', 'name' => 'Josefa Ortiz de Domínguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2383', 'name' => 'Puerto de Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2384', 'name' => '1° de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25130', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0113', 'name' => 'Anáhuac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0114', 'name' => 'Antonio Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0115', 'name' => 'Gustavo Espinosa Mireles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0116', 'name' => 'Isabel Amalia Dávila', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25137', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0117', 'name' => 'Pueblo Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0392', 'name' => 'Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2576', 'name' => 'Hacienda la Magueyada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25138', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0118', 'name' => 'González Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0348', 'name' => 'Altaria Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1808', 'name' => 'Emilio Carranza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1830', 'name' => 'Valle Universidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2858', 'name' => 'Privada Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2870', 'name' => 'Cerrada Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25140', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0119', 'name' => 'Cerro del Pueblo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0120', 'name' => 'Ejército Constitucionalista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0121', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0122', 'name' => 'Panteones', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1813', 'name' => 'Hacienda San Pablo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1814', 'name' => 'Las Mitras', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2353', 'name' => 'Sierras del Poniente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2355', 'name' => 'Azteca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2378', 'name' => 'Valle de San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2379', 'name' => 'Campo Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2380', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2382', 'name' => 'María Luisa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2550', 'name' => 'Antonio Cárdenas Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25146', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0123', 'name' => 'Oscar Flores Tapia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25147', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0124', 'name' => 'Loma Alta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25150', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0125', 'name' => 'Alfredo V Bonfil', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0126', 'name' => 'Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0127', 'name' => 'Universo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0128', 'name' => 'Valle de las Flores Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25154', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0462', 'name' => 'Ejido la Minita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25155', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0129', 'name' => 'Los Balcones', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0130', 'name' => 'Puerto de la Virgen', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0131', 'name' => 'Rincón de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2876', 'name' => 'Las Margaritas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25156', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0132', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25157', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0135', 'name' => 'Los Fresnos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0136', 'name' => 'Valle Escondido', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0137', 'name' => 'Valle Escondido Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0138', 'name' => 'Venustiano Carranza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25160', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2823', 'name' => 'Privada Quinta Narro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0139', 'name' => 'Alameda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0140', 'name' => 'Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0141', 'name' => 'Zamora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0373', 'name' => 'Bordo Ferrocarril', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2741', 'name' => 'Huerta los Pilares', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25167', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0142', 'name' => 'Guayulera Tierra y Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0372', 'name' => 'Ampliación Pacheco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0431', 'name' => 'Providencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2822', 'name' => 'Privada Coahuila y Zacatecas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25168', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0143', 'name' => 'Privada Beta Centauro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25169', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0144', 'name' => 'Brisas del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2575', 'name' => 'Unidad Modelo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25170', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0145', 'name' => 'El Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0146', 'name' => 'La Minita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0147', 'name' => 'La Peñita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25179', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0148', 'name' => 'Los Cuernitos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25180', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0149', 'name' => 'Chamizal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0150', 'name' => 'Guayulera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0151', 'name' => 'Ruiz Cortines', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25186', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0153', 'name' => 'San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0423', 'name' => 'El Edén', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25188', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0155', 'name' => 'Río Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25190', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0157', 'name' => '5 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0158', 'name' => 'El Tanquecito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0159', 'name' => 'Providencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25193', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0304', 'name' => 'Rincón de los Pastores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25194', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0160', 'name' => 'Ignacio Zaragoza Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0161', 'name' => 'Valle Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2385', 'name' => 'Julieta Pérez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2386', 'name' => 'Diana Laura Riojas de Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2548', 'name' => 'Los Berros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25195', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0162', 'name' => 'Patria Nueva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25196', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0163', 'name' => 'Santa Teresa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25197', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0164', 'name' => 'Ladrilleros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0165', 'name' => 'Los Rosarios Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1802', 'name' => 'La Esmeralda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2389', 'name' => 'La Joyita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2716', 'name' => 'El Morillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2869', 'name' => 'La Romita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25198', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0167', 'name' => 'Los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25199', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0168', 'name' => 'San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25200', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0171', 'name' => 'Las Huertas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0172', 'name' => 'Los Rodríguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0173', 'name' => 'Arboledas Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0217', 'name' => 'Los Zendejos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0218', 'name' => 'La Rioja Terrán', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0242', 'name' => 'La Rioja', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0357', 'name' => 'Villanatura', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0415', 'name' => 'Villas de Sayavedra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1823', 'name' => 'Jardines de Versalles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1873', 'name' => 'Las Cabañas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2699', 'name' => 'Villas del Ranchito', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2753', 'name' => 'Rincón de Sayavedra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25203', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1828', 'name' => 'Las Magnolias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1850', 'name' => 'Jacarandas Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2351', 'name' => 'Nuestra Señora de Fátima', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25204', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0170', 'name' => 'Habita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0174', 'name' => 'Los González', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0175', 'name' => 'San Alberto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0176', 'name' => 'Residencial San Patricio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0361', 'name' => 'El Portal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0398', 'name' => 'Privada Emilio Rodríguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0399', 'name' => 'La Cantera Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0449', 'name' => 'Habita II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0454', 'name' => 'La Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0472', 'name' => 'Albareda Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0473', 'name' => 'Saqqara', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1846', 'name' => 'Los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1868', 'name' => 'Valle Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2369', 'name' => 'Villa Toscana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2370', 'name' => 'Villas de San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2589', 'name' => 'Los Siller', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2718', 'name' => 'San Patricio Plus', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2851', 'name' => 'San José Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2857', 'name' => 'Hacienda San Jerónimo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3100', 'name' => 'Villas de Aranjuez', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25206', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0177', 'name' => 'Jardines Coloniales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2571', 'name' => 'Las Quintas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2874', 'name' => 'Privada Coloniales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25207', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0070', 'name' => 'Los Algodones', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0178', 'name' => 'Country Club Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0179', 'name' => 'Puerta del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0379', 'name' => 'El Suspiro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1820', 'name' => 'Valle Hermoso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2371', 'name' => 'Los Cedros Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3217', 'name' => 'Albatros Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25208', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0169', 'name' => 'Jardines del Campestre Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0181', 'name' => 'Loma Blanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0387', 'name' => 'Los Bosques', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0471', 'name' => 'Vivennto Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1833', 'name' => 'Nogalar del Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2362', 'name' => 'Campestre Capellanía', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25209', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0182', 'name' => 'Los Valdez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0202', 'name' => 'Villa San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0360', 'name' => 'Rincón de los Adobes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0364', 'name' => 'Rincón de Alcántara', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0365', 'name' => 'Sorrento', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0386', 'name' => 'Lomas de Peña', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0408', 'name' => 'San Juan Bautista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0412', 'name' => 'Torrealta Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0414', 'name' => 'Rincón de los Encinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0436', 'name' => 'Punta Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0437', 'name' => 'La Poza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0438', 'name' => 'Peña Alta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1832', 'name' => 'Campestre la Poza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1871', 'name' => 'El Campanario', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2572', 'name' => 'Las Misiones', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2573', 'name' => 'Quinta Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2882', 'name' => 'Los Arrayanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3219', 'name' => 'Santa Rosa Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3244', 'name' => 'Villa del Carmen Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25210', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0183', 'name' => 'Hacienda de Peña', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0184', 'name' => 'Las Brisas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0185', 'name' => 'Los Álamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0187', 'name' => 'Nueva España', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0188', 'name' => 'Rancho de Peña', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0470', 'name' => 'Rivera del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2372', 'name' => 'La Noria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2570', 'name' => 'Villa Vergel Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2599', 'name' => 'Privadas de Santiago', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2754', 'name' => 'Valle las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2755', 'name' => 'Oasis', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25215', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0190', 'name' => 'Valle San Agustín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25220', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0192', 'name' => 'Río Bravo', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0193', 'name' => 'Virreyes Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0194', 'name' => 'Virreyes Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0366', 'name' => 'Residencial los Encinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3197', 'name' => 'Zona Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25225', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0195', 'name' => 'Virreyes Colonial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1822', 'name' => 'Brisas Poniente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2533', 'name' => 'Virreyes Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25230', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0198', 'name' => 'Villa Olímpica', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0199', 'name' => 'FOVISSSTE Virreyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0200', 'name' => 'Virreyes Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25238', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0203', 'name' => 'Valle de los Virreyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25239', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0205', 'name' => 'Virreyes Pensiones', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2717', 'name' => 'Cima de Virreyes Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25240', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0206', 'name' => 'Kiosco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0208', 'name' => 'Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0209', 'name' => 'La Salle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0210', 'name' => 'Privadas Luxemburgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0211', 'name' => 'Santiago', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0349', 'name' => 'San Luis', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0435', 'name' => 'Villas de San Fernando', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1826', 'name' => 'Villa Olímpica Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25250', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0212', 'name' => 'Los Doctores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1825', 'name' => 'Villas de San Carlos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2373', 'name' => 'Villas de San Gabriel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2374', 'name' => 'Villas de San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25253', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0215', 'name' => 'Alpes Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0216', 'name' => 'Lagos Continental', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2591', 'name' => 'Residencial los Reales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2700', 'name' => 'Centro de Investigación en Química Aplicada', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25254', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0219', 'name' => 'San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25256', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0221', 'name' => 'Real de Peña', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25260', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0223', 'name' => 'Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0224', 'name' => 'Jardines del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0225', 'name' => 'Los Maestros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0227', 'name' => 'Universidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0400', 'name' => 'Privada Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25265', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0229', 'name' => 'República Poniente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25270', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0230', 'name' => 'Cumbres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0231', 'name' => 'Latinoamericana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0232', 'name' => 'Alpes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0233', 'name' => 'Los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25277', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0234', 'name' => 'Jardín Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25279', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0236', 'name' => 'Residencial los Parques', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25280', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0237', 'name' => 'El Olmo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0238', 'name' => 'Guanajuato', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0239', 'name' => 'ISSSTE', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0240', 'name' => 'Jardines del Lago', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0241', 'name' => 'República', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1827', 'name' => 'República Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1875', 'name' => 'República Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2354', 'name' => 'Tecnológico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2574', 'name' => 'Rancho las Varas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25284', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0244', 'name' => 'Topo Chico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25285', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0245', 'name' => 'Joyas del Boulevard', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25286', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0246', 'name' => 'Guanajuato Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2929', 'name' => 'Los Adobes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25290', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0248', 'name' => 'América', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0249', 'name' => 'Europa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0250', 'name' => 'Oceanía', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0251', 'name' => 'Oceanía Boulevares', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0252', 'name' => 'Saltillo 400', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0253', 'name' => 'Valle de las Flores INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0429', 'name' => 'Privadas de Aragón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1851', 'name' => 'Portales de Aragón', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2350', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2361', 'name' => 'Avícola', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25293', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0403', 'name' => 'Real Hibernia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0404', 'name' => 'Villa Hibernia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0434', 'name' => 'Rincón del Cielo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2368', 'name' => 'Rinconada de la Hibernia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25294', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0064', 'name' => 'Terranova', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0201', 'name' => 'Terralta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0254', 'name' => 'Magisterio Sección 38', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0359', 'name' => 'Los Zacatones', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0393', 'name' => 'Parque Industrial Cerritos', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '0416', 'name' => 'Visalta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1834', 'name' => 'El Sáuz', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1840', 'name' => 'Santa Bárbara', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1861', 'name' => 'San José de los Cerritos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1862', 'name' => 'Leandro Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2707', 'name' => 'Los Cerritos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2763', 'name' => 'Camino Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2853', 'name' => 'Ex Hacienda los Cerritos', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2880', 'name' => 'Hacienda Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25295', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Residencial el Tapanco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0255', 'name' => 'Las Praderas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1864', 'name' => 'Las Margaritas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25296', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0257', 'name' => 'Bonanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0258', 'name' => 'Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0259', 'name' => 'La Florida', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0260', 'name' => 'Nueva Aurora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0261', 'name' => 'Villas de la Aurora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0467', 'name' => 'Hacienda la Aurora Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1859', 'name' => 'Cruz del Aire', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1860', 'name' => 'Rincón de la Florida', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2349', 'name' => 'La Rosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2598', 'name' => 'Los Geranios', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25297', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0262', 'name' => 'La Hibernia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0264', 'name' => 'Los Cipreses', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0265', 'name' => 'Nueva Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0266', 'name' => 'Los Tulipanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0347', 'name' => 'Alcazar Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0388', 'name' => 'Los Chabacanos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1849', 'name' => 'Gustavo Díaz Ordaz', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1867', 'name' => 'La Fragua', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1869', 'name' => 'Privada Tulipanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1872', 'name' => 'Los Olivos Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2345', 'name' => 'El Baluarte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2530', 'name' => 'El Rosario', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2590', 'name' => 'Balcones de la Aurora', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25298', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'Universidad la Salle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0263', 'name' => 'La Libertad el Puente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0267', 'name' => 'La Aurora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0268', 'name' => 'Los Manantiales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0351', 'name' => 'Las Canteras', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0358', 'name' => 'Terrazas Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0381', 'name' => 'Villas la Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0382', 'name' => 'La Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0383', 'name' => 'La Trinidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0401', 'name' => 'Real de Torrecillas Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0402', 'name' => 'Villa Fontana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0405', 'name' => 'Tierra Santa Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0410', 'name' => 'Lenna Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0413', 'name' => 'Villa Colonial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0417', 'name' => 'Plaza Armillita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0419', 'name' => 'Bosques de la Aurora', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0420', 'name' => 'Jardines del Plaza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0421', 'name' => 'Cerrada del Plaza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0427', 'name' => 'La Herradura', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0430', 'name' => 'Privadas Plaza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0458', 'name' => 'La Escondida', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1835', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1836', 'name' => 'San Ángel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1837', 'name' => 'Santa Cristina', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1847', 'name' => 'La Palmilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1852', 'name' => 'Rosales de la Aurora', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1853', 'name' => 'La Cieneguita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1854', 'name' => 'San Luis', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1856', 'name' => 'Real de Villas de la Aurora', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2346', 'name' => 'El Toreo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2347', 'name' => 'Hacienda San Carlos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2364', 'name' => 'La Ciudadela', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2365', 'name' => 'Los Molinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2588', 'name' => 'Torrecillas y Ramones', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2592', 'name' => 'Jardines de los Bosques', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2593', 'name' => 'Residencial Plaza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2594', 'name' => 'San José Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2597', 'name' => 'Conejo Ixtlero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2696', 'name' => 'Villa Bonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2751', 'name' => 'Villas de San Sebastián', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2752', 'name' => 'Rincones de la Aurora', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2854', 'name' => 'Alondra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3141', 'name' => 'Villas de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3166', 'name' => 'Villas del Camino Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3270', 'name' => 'Puerta del Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'Portareal Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25300', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0273', 'name' => 'Providencia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0443', 'name' => 'San José de la Joya', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25301', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0276', 'name' => 'El Clavel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0277', 'name' => 'Hedionda del Lobo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0285', 'name' => 'La Noria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25302', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0271', 'name' => 'El Derramadero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0278', 'name' => 'Santa Teresa de los Muchachos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0306', 'name' => 'El Refugio de las Cajas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0460', 'name' => 'La Pompa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25303', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0274', 'name' => 'Rancho Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0279', 'name' => 'Chapula', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0280', 'name' => 'San Blas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0281', 'name' => 'Santa Rita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25304', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0275', 'name' => 'San Juan de la Vaquería', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25305', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3264', 'name' => 'San José de los Cerritos', 'zone_type' => 'Rural', 'settlementtype_id' => '11','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25306', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0283', 'name' => 'Cuauhtémoc', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0284', 'name' => 'El Recreo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25307', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0287', 'name' => 'La Encantada', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0288', 'name' => 'La Encantada [Estación]', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25310', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0298', 'name' => 'El Caracol', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0299', 'name' => 'El Sauz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0459', 'name' => 'Cinco de Mayo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25311', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0293', 'name' => 'Cuautla', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0294', 'name' => 'La Majada y Tinaja', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0295', 'name' => 'Plan de Ayala', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0296', 'name' => 'Puebla', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25313', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0300', 'name' => 'Llanos de la Unión', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25315', 'locality' => 'Saltillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0085', 'name' => 'Buenavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0303', 'name' => 'La Angostura', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0356', 'name' => 'Eulalio Gutiérrez Treviño', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25316', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0461', 'name' => 'La Parcela 74', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25317', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0451', 'name' => 'Llanos de la Unión', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25318', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0452', 'name' => 'Palma Gorda', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25320', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0307', 'name' => 'Agua Nueva [Estación]', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
		['key' => '0308', 'name' => 'El Jagüey de Ferniza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25321', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0290', 'name' => 'Santa Fe de los Linderos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25322', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0272', 'name' => 'Hedionda Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25324', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0309', 'name' => 'Agua Nueva', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0310', 'name' => 'Los Ángeles', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25325', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0311', 'name' => 'Estación Carneros', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
		['key' => '0441', 'name' => 'Las Colonias', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25326', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0312', 'name' => 'Buñuelos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0450', 'name' => 'San Felipe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25327', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0313', 'name' => 'Tanque de Emergencia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25328', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0314', 'name' => 'El Cercado', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0315', 'name' => 'Puyas y las Hormigas (Las Hormigas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25329', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0316', 'name' => 'La Esperanza (Las Puyas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0444', 'name' => 'San José del Alamito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25330', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0317', 'name' => 'Estación el Fraile', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
		['key' => '0318', 'name' => 'La India', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25331', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0319', 'name' => 'Santa Anita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0320', 'name' => 'Santa Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25332', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0321', 'name' => 'Astillero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0322', 'name' => 'Palmas Altas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0323', 'name' => 'Tinajuela', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25333', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0324', 'name' => 'Zacatera', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25334', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0325', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0326', 'name' => 'El Mezquite', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0327', 'name' => 'El Salitre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0328', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0330', 'name' => 'Las Mangas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25335', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0329', 'name' => 'Gómez Farías', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0331', 'name' => 'San Miguel (San Miguel del Banco)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25336', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0332', 'name' => 'Presa de los Muchachos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0333', 'name' => 'San Francisco del Ejido', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0334', 'name' => 'San Juan del Retiro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0447', 'name' => 'Nuevo Gómez Farías', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25337', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0335', 'name' => 'El Colorado', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0442', 'name' => 'El Rayado', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25338', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0336', 'name' => 'Jazminal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0337', 'name' => 'Punta Santa Elena', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25340', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0339', 'name' => 'Presa de San Pedro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0445', 'name' => 'Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25343', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0340', 'name' => 'Encarnación de Guzmán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0341', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0446', 'name' => 'Tanque Escondido', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0448', 'name' => 'Puerto Rocamontes', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25344', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0342', 'name' => 'Santa Elena [Estación]', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25345', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0343', 'name' => 'Presa de San Javier', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25346', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0344', 'name' => 'La Purísima', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25347', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0338', 'name' => 'La Ventura', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0345', 'name' => 'Tanque del Cerro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25348', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0346', 'name' => 'El Ranchito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '004', 'name' => 'Arteaga', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25350', 'locality' => 'Arteaga', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0347', 'name' => 'Arteaga Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25352', 'locality' => 'Arteaga', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Autopista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0012', 'name' => 'Residencial la Nogalera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0027', 'name' => 'Santa Elena', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2172', 'name' => 'Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2173', 'name' => 'La Partición', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25353', 'locality' => 'Arteaga', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2174', 'name' => 'Abraham Cepeda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2175', 'name' => 'Ayuntamiento', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2176', 'name' => 'San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2177', 'name' => 'San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25354', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Fraccionamiento las Casas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'Valle Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0008', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Estrella de David', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'Los Cedros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0013', 'name' => 'Privada Alameda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2169', 'name' => 'San Isidro de las Palomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2170', 'name' => 'El Refugio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2171', 'name' => 'La Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2178', 'name' => 'Ejidal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2179', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3210', 'name' => 'Loma Bonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25355', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0348', 'name' => 'Bella Unión', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25356', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Valle del Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'Parque Industrial Fundadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'Los Llanos Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2180', 'name' => 'San Jerónimo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2181', 'name' => 'Los Laureles', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25357', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0022', 'name' => 'Cumbres de Zapalinamé', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0026', 'name' => 'San Ignacio', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25360', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0351', 'name' => 'Los Lirios', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25363', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0353', 'name' => 'Puerto Carbonera', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0354', 'name' => 'Las Copetonas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3239', 'name' => 'Piedra Blanca (El Ranchito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25365', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0023', 'name' => 'El Paraíso', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0350', 'name' => 'El Tunal', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0355', 'name' => 'San Juan de los Dolores', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0357', 'name' => 'Rancho Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25366', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0352', 'name' => 'El Carmen (Las Vigas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25367', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Los Pioneros', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3234', 'name' => 'Loma Alta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25368', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'Server Industrial Park', 'zone_type' => 'Rural', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25369', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Privanzas del Campestre', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0025', 'name' => 'La Soledad', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25370', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0359', 'name' => 'San Antonio de las Alazanas', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25372', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0018', 'name' => 'Los Quelites', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25373', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0360', 'name' => 'Potrero de Ábrego', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0361', 'name' => 'El Ranchito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0362', 'name' => 'Nuncio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25374', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0363', 'name' => 'La Efigenia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0364', 'name' => 'Santa Rita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25375', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0365', 'name' => 'La Ciruela', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0366', 'name' => 'Mesa de las Tablas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25376', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0356', 'name' => 'La Purísima', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0367', 'name' => 'El Dieciocho de Marzo (El Dieciocho)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25380', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0020', 'name' => 'Tierras Prietas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'La Presa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0368', 'name' => 'Escobedo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0369', 'name' => 'La Biznaga', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25382', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0019', 'name' => 'La Rosita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0370', 'name' => 'Jame', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25385', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0371', 'name' => 'San Ignacio de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0372', 'name' => 'San Juanito (San Juanito de los Valdez)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25386', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0373', 'name' => 'Los Llanos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25387', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0024', 'name' => 'San José del Vergel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0374', 'name' => 'Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25389', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0375', 'name' => 'Artesillas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25390', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0376', 'name' => 'Sierra Hermosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25393', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'El Diamante', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25395', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0377', 'name' => 'El Cedrito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25396', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0378', 'name' => 'Chapultepec (Chapul)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25398', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0358', 'name' => 'Huachichil (El Huache)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25399', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0379', 'name' => 'El Poleo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '015', 'name' => 'Juárez', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25400', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0380', 'name' => 'Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25406', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0381', 'name' => 'Presita Magueyosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25410', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0382', 'name' => 'Don Martín', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25413', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0383', 'name' => 'El Álamo (Hacienda el Álamo)', 'zone_type' => 'Rural', 'settlementtype_id' => '11','zipcode_id' => $idZip],
		['key' => '0384', 'name' => 'El Álamo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25418', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0388', 'name' => 'Santa Rita', 'zone_type' => 'Rural', 'settlementtype_id' => '14','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25419', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0386', 'name' => 'Sección 22-0', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0387', 'name' => 'El Cuarenta y Cinco', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '026', 'name' => 'Progreso', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25420', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0389', 'name' => 'Ignacio Zaragoza (Casa Blanca)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0390', 'name' => 'Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25428', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0399', 'name' => 'Agua Buena', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25430', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0391', 'name' => 'San José de Aura', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25431', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'San José de Aura', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0392', 'name' => 'Mineral la Luz (Minas de la Luz)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25440', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'San Alberto', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0393', 'name' => 'San Alberto', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0398', 'name' => 'Puente el Columpio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25443', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0394', 'name' => 'Santa Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25446', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Minas de Barroterán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0395', 'name' => 'Jaboncillos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25447', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0396', 'name' => 'Las Iglesias', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25450', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0397', 'name' => 'Mota de Corona (Mota Corona)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25460', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0400', 'name' => 'Ramírez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25463', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0401', 'name' => 'Mexiquito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '008', 'name' => 'Escobedo', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25470', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0402', 'name' => 'Escobedo', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25480', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0404', 'name' => 'Obayos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25483', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0405', 'name' => 'Veintinueve de Noviembre (Borregas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25490', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0403', 'name' => 'Estación Hermanas', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
		['key' => '0406', 'name' => 'Primero de Mayo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25494', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0407', 'name' => 'Colonia Menonita (La Gaviota)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25495', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Agua de la Herradura', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25496', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0408', 'name' => 'El Tulillo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '031', 'name' => 'San Buenaventura', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25500', 'locality' => 'San Buenaventura', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0410', 'name' => 'San Buenaventura Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25503', 'locality' => 'San Buenaventura', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2079', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3178', 'name' => 'Pueblo Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3179', 'name' => 'Nueva Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25504', 'locality' => 'San Buenaventura', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2075', 'name' => 'Ejido Saca de Bucareli', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2076', 'name' => 'Solidaridad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2077', 'name' => 'San Andrés', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25505', 'locality' => 'San Buenaventura', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2070', 'name' => 'Magisterio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2071', 'name' => '18 de Febrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2073', 'name' => 'Eulalio Gutiérrez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2074', 'name' => 'Amalia Solórzano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25506', 'locality' => 'San Buenaventura', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2066', 'name' => 'Chabacanos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2067', 'name' => 'California', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2068', 'name' => 'Reforma', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2069', 'name' => '16 de Abril', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25507', 'locality' => 'San Buenaventura', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2064', 'name' => 'Nogalera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25508', 'locality' => 'San Buenaventura', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2062', 'name' => 'San Pedro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2063', 'name' => 'Lindavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25522', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'El Berrendo (Nuevo Sacramento)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25530', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0413', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25532', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0414', 'name' => 'Guadalupe Victoria (El Cerrito)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25533', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0415', 'name' => 'San Antonio de las Higueras', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0416', 'name' => 'San Blas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25534', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0417', 'name' => 'San Lorenzo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25535', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0418', 'name' => 'San Antonio de la Cascada', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25536', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0409', 'name' => 'Nuevo Poblado del Sombrerete (Nuevo Sombrerete)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0411', 'name' => 'Santa Gertrudis', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '001', 'name' => 'Abasolo', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25540', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0419', 'name' => 'Abasolo', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '3311', 'name' => 'La Granja', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25543', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3285', 'name' => 'Hidilio de Hoyos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3288', 'name' => 'La Tinaja', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3303', 'name' => 'Rogelio Medrano Rodríguez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25544', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3279', 'name' => 'El Nogal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3290', 'name' => 'Los Ángeles (Osvaldo Mata)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25545', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3274', 'name' => 'Oscar Jiménez Pérez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3280', 'name' => 'El Orejas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3289', 'name' => 'La Unión', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3295', 'name' => 'Los Vargas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3296', 'name' => 'Lozano', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3297', 'name' => 'Lupita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25547', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3293', 'name' => 'Los Pozos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3294', 'name' => 'Los Pozos Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3305', 'name' => 'San Ángel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25550', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0420', 'name' => 'Los Rodríguez', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '3286', 'name' => 'José Treviño Ibarra', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3298', 'name' => 'Manuel Ibarra', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3299', 'name' => 'Oscar García Valdez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3302', 'name' => 'Roberto Valdés', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3304', 'name' => 'Rubén Maldonado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25554', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3273', 'name' => 'Casa Blanca [Centro de Mejoramiento Genético]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3277', 'name' => 'El Huracán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3287', 'name' => 'La Chimenea', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3291', 'name' => 'Los Arcos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3292', 'name' => 'Los Fresnos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3306', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3307', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3308', 'name' => 'San Pablo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25555', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0421', 'name' => 'Las Adjuntas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3272', 'name' => 'Antonio de Hoyos (Kilómetro 24) [Taller]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3281', 'name' => 'El Paraíso', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3282', 'name' => 'El Rosario', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3284', 'name' => 'Buena Suerte (Los García)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3309', 'name' => 'Santa Elvira', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3310', 'name' => 'Vitali', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25560', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3275', 'name' => 'El Arco (El Arco de Babiácora)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25565', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3300', 'name' => 'Pájaros Azules', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3301', 'name' => 'Pájaros Azules (La Pancha)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25567', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3278', 'name' => 'El Indio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '005', 'name' => 'Candela', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25570', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'San Luisito', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0422', 'name' => 'Candela', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25571', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0423', 'name' => 'Las Coloradas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25576', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0425', 'name' => 'Valladares', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25580', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'San Pedro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25587', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Nueva Esperanza (Las Vacas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25590', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0426', 'name' => 'El Huizachal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '010', 'name' => 'Frontera', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25600', 'locality' => 'Frontera', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0427', 'name' => 'Frontera Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25610', 'locality' => 'Frontera', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0429', 'name' => 'Héroe de Nacozari', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25616', 'locality' => 'Frontera', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Teksid', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25617', 'locality' => 'Frontera', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0430', 'name' => 'Aviación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2110', 'name' => 'Huizachal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2111', 'name' => 'Magisterio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2112', 'name' => 'Aeropuerto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2764', 'name' => 'Industrial Aeropuerto', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '3257', 'name' => 'Monte Albán', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25618', 'locality' => 'Frontera', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0431', 'name' => 'Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2434', 'name' => 'Regidores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2438', 'name' => 'Cordón Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25619', 'locality' => 'Frontera', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0432', 'name' => 'San Cristóbal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2113', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25626', 'locality' => 'Frontera', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0434', 'name' => 'Elsa Hernández', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2114', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25627', 'locality' => 'Frontera', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0435', 'name' => 'Praderas del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25628', 'locality' => 'Frontera', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0436', 'name' => 'Sierrita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2634', 'name' => 'Ampliación Sierrita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25629', 'locality' => 'Frontera', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0437', 'name' => 'Felipe Pescador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2116', 'name' => 'Ferrocarrilera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2439', 'name' => 'Magisterial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2633', 'name' => 'Jesús García Corona', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3187', 'name' => 'Monterreal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3262', 'name' => 'Nuevo Monterreal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25630', 'locality' => 'Frontera', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0438', 'name' => 'PEMEX', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2117', 'name' => 'El Alacrán', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '3220', 'name' => 'Americana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25640', 'locality' => 'Frontera', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Venustiano Carranza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0440', 'name' => 'Occidental', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25643', 'locality' => 'Frontera', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Fidencio Mendoza Castillo [Sector de Producción 1]', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2765', 'name' => 'Industrial Fundidores', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25644', 'locality' => 'Frontera', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'Vanesa Guerrero', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2436', 'name' => 'Diana Laura Riojas de Colosio', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2437', 'name' => 'Hermosa Provincia', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25650', 'locality' => 'Frontera', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0441', 'name' => 'Bellavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25660', 'locality' => 'Frontera', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0442', 'name' => 'Roma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25668', 'locality' => 'Frontera', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0443', 'name' => '10 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25669', 'locality' => 'Frontera', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0444', 'name' => 'Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2632', 'name' => 'Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25670', 'locality' => 'Frontera', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0445', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25680', 'locality' => 'Frontera', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0446', 'name' => 'Guadalupe Borja de Díaz Ordaz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25800', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Ampliación la Cruz Tercer Sector', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0573', 'name' => 'La Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0574', 'name' => 'Ocho de Enero', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25802', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0575', 'name' => 'Nuevo Poblado de Fresnillo (Fresnillo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0577', 'name' => 'Fracción Ejidal Pozuelos de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25803', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => '8 de Enero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25804', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Pozuelos de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25805', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'El Borrego (Pueblo Nuevo)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25810', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Doctor Esteban Martínez', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0578', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25815', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0579', 'name' => 'La Polka 1', 'zone_type' => 'Rural', 'settlementtype_id' => '27','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25820', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0580', 'name' => 'Pozuelos de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25823', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0581', 'name' => 'La Mota', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '018', 'name' => 'Monclova', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25700', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0447', 'name' => 'Monclova Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25710', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Los Cedros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0449', 'name' => 'Los Bosques', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0451', 'name' => 'Los Reyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0454', 'name' => 'Roma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0462', 'name' => 'Rosita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25714', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0455', 'name' => 'Picasso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25716', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0457', 'name' => 'Tecnológico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2134', 'name' => 'Magisterio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25717', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => '10 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0016', 'name' => 'Ampliación Roma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0458', 'name' => 'Teocali', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25718', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0459', 'name' => 'Leandro Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2142', 'name' => 'PEMEX', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2328', 'name' => 'Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25720', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3163', 'name' => 'Contry Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0460', 'name' => 'Chamizal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0461', 'name' => 'Francisco I Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0464', 'name' => 'Jesús Garcia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0465', 'name' => 'Los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0466', 'name' => 'Regina', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0467', 'name' => 'San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0468', 'name' => 'Santa Mónica', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2136', 'name' => 'Escorial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2605', 'name' => 'Guadalupe Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2795', 'name' => 'Jardines de Santa Cecilia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2980', 'name' => 'La Salle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3147', 'name' => 'Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25724', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0015', 'name' => 'Rinconada Santa Mónica', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'Privada las Nueces', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0469', 'name' => 'Brisas del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2631', 'name' => 'Universitaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3171', 'name' => 'Quinta San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25725', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Brisas Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0470', 'name' => 'Elsa Hernández', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3146', 'name' => 'Maravillas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25726', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2145', 'name' => 'San Pablo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25730', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'Santa Lucía', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'Victoriano Cepeda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'Williamson', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0472', 'name' => 'Chapultepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0473', 'name' => 'Del Prado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0474', 'name' => 'Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0475', 'name' => 'El Pueblo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0476', 'name' => 'Jardines del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0477', 'name' => 'Los Nogales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0478', 'name' => 'Palma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0480', 'name' => 'Jardines de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2129', 'name' => 'Jardines de Guanajuato', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2130', 'name' => 'El Milagro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2133', 'name' => 'Aguanaval', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3145', 'name' => 'Guanajuato', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3156', 'name' => 'Saltillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25732', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2137', 'name' => 'Santa Isabel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2140', 'name' => '5 de Abril', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25733', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => '21 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0590', 'name' => 'Estancias de San Juan Bautista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2143', 'name' => 'Los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2144', 'name' => 'Los 90s', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2329', 'name' => 'Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3102', 'name' => 'Jardines de Montessori', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25734', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0026', 'name' => 'Villas del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0027', 'name' => 'Privanzas Monclova Residencial', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0582', 'name' => 'Estancias de Santa Ana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2146', 'name' => 'Villas de Santa Ana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2147', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2331', 'name' => 'FSTSE las Estancias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2343', 'name' => 'Conjunto Acero', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3142', 'name' => 'Granjas del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3143', 'name' => 'Estableros del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3144', 'name' => 'Brisas del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25740', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0481', 'name' => 'Continental', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0482', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0483', 'name' => 'Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0484', 'name' => 'Héroes del 47', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0485', 'name' => 'Hipódromo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0486', 'name' => 'Pedregal de San Ángel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0487', 'name' => 'San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0488', 'name' => 'Santa Bárbara', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0489', 'name' => 'Tierra y Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0554', 'name' => 'Revolución', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2337', 'name' => 'San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2340', 'name' => 'San Carlos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2629', 'name' => 'Soledad Reyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25743', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Las Misiones', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'Posada del Sol', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'Lucrecia Solano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2334', 'name' => 'Valle de San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2990', 'name' => 'El Campanario', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3150', 'name' => '2 de Abril', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3151', 'name' => 'Ampliación Barrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25746', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0491', 'name' => 'Hipódromo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25747', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'Guadalupe Murguía', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0492', 'name' => 'José de las Fuentes Rodriguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2128', 'name' => 'Eliseo Mendoza Berrueto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2132', 'name' => '21 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2344', 'name' => 'Veteranos de la Revolución', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2622', 'name' => 'Ciudad Sanitaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2985', 'name' => 'Lomas de San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2987', 'name' => 'Plan de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3149', 'name' => 'Policarpo Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25748', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0494', 'name' => 'Chinameca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0495', 'name' => 'Del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0498', 'name' => 'Pipila', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2342', 'name' => '23 de Abril', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2626', 'name' => 'La Ribera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2702', 'name' => 'Esmeralda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3148', 'name' => 'San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25749', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'Lomas de Tecolotes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0499', 'name' => 'Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0500', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25750', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0501', 'name' => 'Anáhuac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0502', 'name' => 'Deportiva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0504', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0505', 'name' => 'Guadalupe AHMSA', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0507', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0508', 'name' => 'Miravalle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2149', 'name' => 'Nueva Miravalle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3153', 'name' => 'Mirador Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25756', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Zona Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '0514', 'name' => 'Azteca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25757', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0515', 'name' => 'Margarito Silva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0516', 'name' => 'San Salvador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25758', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0517', 'name' => 'Telefonistas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3152', 'name' => 'Lomas de La Cantera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25760', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0519', 'name' => 'Benavides', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0520', 'name' => 'Cañada Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0521', 'name' => 'Cañada Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0522', 'name' => 'Carranza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0523', 'name' => 'Deportivo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0524', 'name' => '18 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0525', 'name' => 'Ejidal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0526', 'name' => 'Elizondo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0527', 'name' => 'Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0528', 'name' => '1 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25766', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0529', 'name' => 'Cañada Sureste', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25767', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0531', 'name' => 'Braulio Fernández Aguirre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2638', 'name' => 'Emiliano Zapata Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25768', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0532', 'name' => 'Cañada Poniente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25770', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0534', 'name' => 'Aguilar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0535', 'name' => 'Barrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0536', 'name' => 'Buenos Aires', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0537', 'name' => 'El Potrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0538', 'name' => 'La Loma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0539', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0541', 'name' => 'Moderno', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0542', 'name' => 'Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0543', 'name' => 'San Antonio del Potrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0544', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2628', 'name' => 'Purísima', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2983', 'name' => 'Lomas de La Gloria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2984', 'name' => 'Andalucía', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25775', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0547', 'name' => 'Ampliación las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0548', 'name' => 'Las Malvinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0549', 'name' => 'Monclova 400', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0550', 'name' => 'Oscar Flores Tapia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0551', 'name' => 'Paloma Cordero de de La Madrid', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2123', 'name' => 'Córdoba', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2703', 'name' => 'Loma Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25776', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0018', 'name' => 'Santiago de la Monclova', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0552', 'name' => 'Fraccionamiento 288', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2338', 'name' => 'El Roble', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2339', 'name' => 'La Amistad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2601', 'name' => 'Aguilar 3er Sector', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25777', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0553', 'name' => 'Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25780', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0555', 'name' => 'Calderón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0556', 'name' => 'Miguel Ramos Arizpe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0557', 'name' => 'Estación Fierro (Fierro)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2630', 'name' => 'Carmen Serdán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25785', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0558', 'name' => 'Curva de Juan Sanchez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25790', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0012', 'name' => 'Las Villas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'Vicente Armendariz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0559', 'name' => 'Asturias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0561', 'name' => 'Burócratas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0562', 'name' => 'Eva Sámano de Lopez Mateos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0563', 'name' => 'Francisco I Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0564', 'name' => 'Loma Linda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0565', 'name' => 'Monclova', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0566', 'name' => 'Obrera Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0567', 'name' => 'Obrera Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2118', 'name' => 'Rogelio Montemayor Segui', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2119', 'name' => 'Carlos Salinas de Gortari', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2121', 'name' => 'Industrial Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2151', 'name' => 'Obrera Sur Sector II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2152', 'name' => 'Obrera Sur Sector III', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2341', 'name' => 'Colinas de Santiago', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2621', 'name' => 'Guadalupe Camarillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25793', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0019', 'name' => 'Patricia Blizzard de Paez', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0568', 'name' => 'Santa Eulalia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0570', 'name' => 'Villarreal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25796', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0571', 'name' => 'Otilio Montaño', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2122', 'name' => 'Las Esperanzas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2332', 'name' => 'Los Álamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2976', 'name' => 'Mezquital del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2978', 'name' => 'Praderas del Sur 3er Sector', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25799', 'locality' => 'Monclova', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0572', 'name' => 'Praderas del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25836', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0588', 'name' => 'Las Higueras', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25843', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0587', 'name' => 'La Cola de Agua', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25844', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0024', 'name' => 'El Oro (Nuevo Poblado el Oro)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0592', 'name' => 'La Coma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25845', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0593', 'name' => 'Carrizalejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0594', 'name' => 'Capichola', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25846', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0586', 'name' => 'Las Flores', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25847', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0595', 'name' => 'El Oro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25850', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0584', 'name' => 'Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25851', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0596', 'name' => 'Salitrillos (Yucatán)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25853', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0597', 'name' => 'El Mimbre', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0598', 'name' => 'El Bragado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25855', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0599', 'name' => 'La Mota', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25860', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0025', 'name' => 'Las Quintas', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25865', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0583', 'name' => 'El Rubio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0589', 'name' => 'San Antonio (California)', 'zone_type' => 'Rural', 'settlementtype_id' => '14','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25866', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Hacienda Real', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0600', 'name' => 'San Pablo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '006', 'name' => 'Castaños', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25870', 'locality' => 'Castaños', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0601', 'name' => 'Castaños Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2279', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2280', 'name' => 'California', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2281', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2282', 'name' => 'Héroes del 47', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2283', 'name' => 'Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2285', 'name' => 'Venustiano Carranza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2782', 'name' => '21 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2788', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2789', 'name' => 'Santa Cecilia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3200', 'name' => 'Colinas Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3201', 'name' => 'Villas de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25873', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0603', 'name' => 'Bocatoche (Las Pompas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25874', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0604', 'name' => 'El Granjeno', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25875', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0605', 'name' => 'Dolomita [Estación]', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25876', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0606', 'name' => 'Palo Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25877', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Soledad', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0607', 'name' => 'Leñadero (La Soledad)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25878', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0619', 'name' => 'El Zago (Loma Bola)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25879', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0620', 'name' => 'Estación Valle Bocatoche', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25880', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0608', 'name' => 'Baján (Estación Baján)', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25884', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0609', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0612', 'name' => 'San Lorenzo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25885', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0610', 'name' => 'Presa Rodríguez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25886', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0611', 'name' => 'La Gloria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25887', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0613', 'name' => 'Providencia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25890', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0614', 'name' => 'La Joya', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25893', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0615', 'name' => 'Acámbaro de Arriba (Nuevo Acámbaro)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25894', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Espinazo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25895', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0617', 'name' => 'Santa Teresa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25896', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0618', 'name' => 'Dolores', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25897', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0616', 'name' => 'La Bolita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '027', 'name' => 'Ramos Arizpe', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25900', 'locality' => 'Ramos Arizpe', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0621', 'name' => 'Ramos Arizpe Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25902', 'locality' => 'Ramos Arizpe', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'Hacienda de las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '26','zipcode_id' => $idZip],
		['key' => '0013', 'name' => 'La Estación', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'Residencial Palmeras', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Real del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'Valle de los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'Lomas de Villasol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'Valparaíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0063', 'name' => 'Privada Encinales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1985', 'name' => 'El Baratillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1987', 'name' => 'La Esmeralda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1988', 'name' => 'La Tenería', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1989', 'name' => 'Girón de Castro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1990', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1991', 'name' => 'El Escorial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1992', 'name' => 'El Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1994', 'name' => 'Analco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1995', 'name' => 'La Palma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1996', 'name' => 'Anacahuita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1999', 'name' => 'Peña Alta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2888', 'name' => 'La Ciénega', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2889', 'name' => 'Subdivición Girón de Castro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2891', 'name' => 'El Cura', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2894', 'name' => 'Armillita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2895', 'name' => 'Cañadas del Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2896', 'name' => 'El Cactus', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2897', 'name' => 'Jardines de Analco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2900', 'name' => 'Santa Luz Analco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2901', 'name' => 'Valle Poniente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2905', 'name' => 'Privada Esmeralda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2928', 'name' => 'Parajes del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3204', 'name' => 'Villa Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3252', 'name' => 'Ampliación la Ciénega', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3255', 'name' => 'Urbivilla del Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25903', 'locality' => 'Ramos Arizpe', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Rincón del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'Lomas del Valle II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0029', 'name' => 'Industrial 360 2da Etapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2001', 'name' => 'Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2002', 'name' => 'Año de Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2003', 'name' => 'San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2004', 'name' => 'Eulalio Gutiérrez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2010', 'name' => 'Capellanía', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2011', 'name' => 'Del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2027', 'name' => 'La Hacienda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2031', 'name' => 'Loma Linda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2032', 'name' => 'Molinos del Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2033', 'name' => 'Nuevo Ramos Arizpe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2034', 'name' => 'Fidel Velázquez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2035', 'name' => 'Torremolinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2036', 'name' => 'Parque Industrial Ramos Arizpe', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2038', 'name' => 'Parque Industrial Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2886', 'name' => 'El Capitán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2887', 'name' => 'La Ermita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2890', 'name' => 'Alameda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2893', 'name' => 'Villamagna', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2903', 'name' => 'Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2904', 'name' => 'Villas de Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3159', 'name' => 'Lomas del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3167', 'name' => 'Privadas el Campanario', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25904', 'locality' => 'Ramos Arizpe', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'La Gran Hacienda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0008', 'name' => 'Sierra Morena', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'San Fernando', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'Arborea', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'Alyssa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0062', 'name' => 'Valle de Fontanna', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1983', 'name' => 'Cerrito de La Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1997', 'name' => 'La Nogalera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1998', 'name' => 'Villas del Nogalar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2005', 'name' => 'Revolución Mexicana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2006', 'name' => 'Guanajuato de Arriba', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2007', 'name' => 'Guanajuato de Abajo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2008', 'name' => 'El Ranchito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2009', 'name' => 'Huerta Vieja', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2012', 'name' => 'Manantiales del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2017', 'name' => 'Blanca Esthela', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2019', 'name' => 'Rincón Blanca Esthela', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2021', 'name' => 'Santos Saucedo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2022', 'name' => 'Elsa Hernandez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2023', 'name' => 'Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2039', 'name' => 'La Soledad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2301', 'name' => 'Parque Industrial FINSA', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2672', 'name' => 'Quinta Manantiales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2892', 'name' => 'Portales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2898', 'name' => 'Manantiales del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2899', 'name' => 'Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2902', 'name' => 'Villa Alta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3181', 'name' => 'Balcones de Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3188', 'name' => 'Portal las Palomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3258', 'name' => 'Bonterra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25905', 'locality' => 'Ramos Arizpe', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'Ramos Arizpe Industrial Park', 'zone_type' => 'Rural', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '0017', 'name' => 'VYNMSA Ramos Arizpe Industrial Park Sector II', 'zone_type' => 'Rural', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '0037', 'name' => 'Los Cedros', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3193', 'name' => 'Parajes de los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25908', 'locality' => 'Ramos Arizpe', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0012', 'name' => 'Parque Industrial Amistad Aeropuerto', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'Corredor Industrial Insignia', 'zone_type' => 'Rural', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '0030', 'name' => 'Micro Parque Industrial Aeropuerto', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25909', 'locality' => 'Ramos Arizpe', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '4242', 'name' => 'Aeropuerto Ramos Arizpe (Plan de Guadalupe)', 'zone_type' => 'Urbano', 'settlementtype_id' => '1','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25910', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0057', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0627', 'name' => 'Paredón', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25913', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0052', 'name' => 'Luna (Carlos Pereyra)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0061', 'name' => 'El Coyote', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0629', 'name' => 'Anhelo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25914', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0031', 'name' => 'San Juan de Amargos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0630', 'name' => 'Amargos', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
		['key' => '0631', 'name' => 'La Leona', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25915', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0027', 'name' => 'San Ignacio', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0043', 'name' => 'El Panal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0632', 'name' => 'Alto de Norias (El Nuevo Alto de Norias)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0633', 'name' => 'Las Norias', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0639', 'name' => 'Fraustro [Estación]', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
		['key' => '0643', 'name' => 'Fraustro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25916', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0634', 'name' => 'El Pelillal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0635', 'name' => 'Las Esperanzas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25917', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0034', 'name' => 'La Popa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0636', 'name' => 'Estación Reata (General Coss)', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
		['key' => '0637', 'name' => 'Tanque Tuxtepec', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25918', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0047', 'name' => 'Nacapa (Nuevo Nacapa)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0638', 'name' => 'Nuevo Nacapa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25925', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0642', 'name' => 'El Barril', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0644', 'name' => 'Higo (La Norita)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0042', 'name' => 'Lázaro Cárdenas (El Edén)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0048', 'name' => 'San Felipe', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0060', 'name' => 'La Gamuza', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0641', 'name' => 'Mesita de León (Granadillo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25927', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0046', 'name' => 'San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0054', 'name' => 'El Ojito (Estación Sauceda)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0645', 'name' => 'La Tortuga', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0647', 'name' => 'Cosme', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0648', 'name' => 'El Ojito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0650', 'name' => 'La Sauceda (El Tanque)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25929', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0651', 'name' => 'La Paloma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25930', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'La Cañada', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'San Lucas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0058', 'name' => 'San Juan Bautista', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0652', 'name' => 'Estación Zertuche', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
		['key' => '0669', 'name' => 'San José de los Nuncios', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0670', 'name' => 'Landeros', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25932', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'Santa Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0036', 'name' => 'Santa Rita del Muerto', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0044', 'name' => 'El Realito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0640', 'name' => 'Rancho Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0653', 'name' => 'San Antonio de Acatita', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0654', 'name' => 'San Juan de la Sauceda', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25933', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0026', 'name' => 'San Gregorio (Comunidad San Gregorio)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0035', 'name' => 'Santa María (Santa María del Rosario)', 'zone_type' => 'Rural', 'settlementtype_id' => '15','zipcode_id' => $idZip],
		['key' => '0049', 'name' => 'El Barrial', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0051', 'name' => 'La Virgen', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0056', 'name' => 'San Francisco de los Desmontes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0059', 'name' => 'El Tanque (Tanque Viejo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0655', 'name' => 'Las Encinas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0656', 'name' => 'Santo Domingo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0662', 'name' => 'Higueras', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0665', 'name' => 'Ojo Caliente', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25934', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0025', 'name' => 'Mesón del Norte', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0032', 'name' => 'San Antonio de Encinas', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0041', 'name' => 'La Agüita del Rosario', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0623', 'name' => 'La Campana', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0646', 'name' => 'San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0658', 'name' => 'El Pantano', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25935', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0659', 'name' => 'Hipólito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25936', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0023', 'name' => 'Cañada Ancha', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0038', 'name' => 'San Martín (Doce de Diciembre)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0045', 'name' => 'Las Imágenes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0050', 'name' => 'Los Jacalitos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0625', 'name' => 'San Martín de las Vacas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0626', 'name' => 'Guajardo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25937', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0024', 'name' => 'Mesillas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0028', 'name' => 'Centro Federal de Readaptación Social Número 18', 'zone_type' => 'Rural', 'settlementtype_id' => '9','zipcode_id' => $idZip],
		['key' => '0033', 'name' => 'Estación Higo', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
		['key' => '0040', 'name' => 'Agua Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0053', 'name' => 'Noria de los Medrano', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0660', 'name' => 'La Noria de las Ánimas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0661', 'name' => 'San Rafael', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25942', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0663', 'name' => 'La Azufrosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0664', 'name' => 'Las Coloradas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25943', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0039', 'name' => 'Nuevo Yucatán (El Jabalí)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0055', 'name' => 'Parreños', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25944', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'El Cedral', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25946', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0666', 'name' => 'Sacrificio (San Luis)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25947', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0667', 'name' => 'Plan de Guadalupe (La Delfina)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '011', 'name' => 'General Cepeda', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25950', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0671', 'name' => 'General Cepeda', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25952', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0676', 'name' => 'El Tejocote', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0681', 'name' => 'Dos de Abril', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25953', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0677', 'name' => 'El Jaralito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25954', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Fermín', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'Huachichil', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0678', 'name' => 'Guelatao', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0679', 'name' => 'Porvenir de Tacubaya', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0680', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25955', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0682', 'name' => 'El Gavillero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0683', 'name' => 'La Puerta', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0684', 'name' => 'Las Cuatas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25956', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0673', 'name' => 'La Trinidad', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25960', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0685', 'name' => 'Marte (Estación Marte)', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
		['key' => '0687', 'name' => 'San José de la Paila (Rancho Nuevo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0688', 'name' => 'Piedras de Lumbre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25970', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0689', 'name' => 'La Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0690', 'name' => 'Rincón Colorado', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0694', 'name' => 'Depósito de la Luz', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25974', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0691', 'name' => 'La Hedionda Chica', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25975', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'San Antonio del Jaral', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0692', 'name' => 'El Tanque San Vicente', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25976', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0686', 'name' => 'La Parrita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25977', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0696', 'name' => 'Agua de la Mula', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25978', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0697', 'name' => 'Independencia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0698', 'name' => 'La Luz y Colón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0699', 'name' => 'El Fortín', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0700', 'name' => 'La Florida', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0701', 'name' => 'La Florida (Ojo de Agua)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0703', 'name' => 'Narigua', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25980', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Presa de Guadalupe (Guadalupe)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0672', 'name' => 'Guadalupe Alamitos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0674', 'name' => 'Macuyú', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25984', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0704', 'name' => 'San Juan del Cohetero (El Colorado)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25985', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0702', 'name' => 'Porvenir de Jalpa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0705', 'name' => 'Jalpa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25986', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Benecio López Padilla (Benito Juárez)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3216', 'name' => 'Santa Inés (El Ojito)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25987', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0706', 'name' => 'El Dorado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0707', 'name' => 'La Noria de la Sabina', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3243', 'name' => 'Kilómetro Sesenta y Cuatro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25989', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0708', 'name' => 'El Pilar de Richardson', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25990', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0709', 'name' => 'El Nogal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0710', 'name' => 'San Isidro de Gómez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0711', 'name' => 'La Paz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0713', 'name' => 'San José del Refugio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '25993', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0714', 'name' => 'La Casita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '025', 'name' => 'Piedras Negras', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26000', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0716', 'name' => 'Piedras Negras Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26010', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0719', 'name' => 'Francisco I Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0720', 'name' => 'Las Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1698', 'name' => 'Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1702', 'name' => 'Claustro las Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2422', 'name' => 'El Pocito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26013', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3251', 'name' => 'Villa Fontana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26014', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0724', 'name' => 'Campo Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26015', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Los Laureles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Los Olivos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0026', 'name' => 'Lomas de Santiago', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0725', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0774', 'name' => 'Ejido Piedras Negras', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1699', 'name' => 'División del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1727', 'name' => 'Ampliación Tierra y Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1728', 'name' => 'Los Montes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1729', 'name' => 'Nueva Imagen', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2417', 'name' => 'El Cenizo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2613', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2919', 'name' => 'Los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2924', 'name' => 'Ramos Arizpe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3108', 'name' => 'Las Américas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26016', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0014', 'name' => 'Quinta Andalucía', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0726', 'name' => 'Las Malvinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1694', 'name' => 'El Edén', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2410', 'name' => 'Doña Irma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2420', 'name' => 'Valle del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2421', 'name' => 'El Noval', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2909', 'name' => 'Valle del Norte Ampliación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3095', 'name' => 'La Hacienda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3104', 'name' => 'Hacienda la Luna', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3112', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26017', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0727', 'name' => 'San Pedro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1695', 'name' => 'Las Maravillas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1697', 'name' => 'Lázaro Cárdenas Sector Dos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1700', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1701', 'name' => 'Río Bravo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2406', 'name' => 'Country House', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2408', 'name' => 'Álamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2608', 'name' => 'Argentinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3116', 'name' => 'INFONAVIT Las Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26018', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1691', 'name' => 'Sector Sanitario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1692', 'name' => 'La Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1693', 'name' => 'Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2925', 'name' => 'Parque Industrial del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26020', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0728', 'name' => 'Burócratas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0729', 'name' => 'González', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0730', 'name' => 'Nísperos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2614', 'name' => 'La Misión', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26025', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0731', 'name' => 'Roma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26030', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'Expresidentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0732', 'name' => 'Bravo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0733', 'name' => 'Buenos Aires', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0735', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0736', 'name' => 'Presidentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1704', 'name' => 'Americana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1705', 'name' => 'CROC I', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1714', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2611', 'name' => 'El Maestro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26033', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2907', 'name' => 'Ampliación Ramón Bravo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2920', 'name' => 'Ramón Bravo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26034', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0012', 'name' => 'Valle Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3131', 'name' => 'Centenario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26035', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3226', 'name' => 'Nogalar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26040', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0737', 'name' => 'Buenavista Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0738', 'name' => 'Buenavista Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0739', 'name' => 'San Luis', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0740', 'name' => '28 de Junio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26050', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0741', 'name' => 'Harold R Pape', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0742', 'name' => 'INFONAVIT Río Grande', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0743', 'name' => 'Ugarte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1706', 'name' => 'Estadio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2921', 'name' => 'Villa de Herrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3127', 'name' => 'La Toscana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26060', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0744', 'name' => 'Central', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0745', 'name' => 'Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0746', 'name' => 'Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0747', 'name' => 'Nueva Vista Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0749', 'name' => 'Vista Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2618', 'name' => 'Parque Industrial Piedras Negras', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26063', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Privada Residencial Santa Teresa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2922', 'name' => 'Loma Bonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26064', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0025', 'name' => 'Las Lomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0028', 'name' => 'Las Misiones Segundo Sector', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3106', 'name' => 'Piedra Angular', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3107', 'name' => 'El Oasis', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3253', 'name' => 'Las Misiones', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26065', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0019', 'name' => 'Praderas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26068', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0750', 'name' => 'Las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1724', 'name' => 'FSTSE', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26069', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0029', 'name' => 'Magisterial Sección Dos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0030', 'name' => 'República', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0751', 'name' => 'SUTERM', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1725', 'name' => 'Don Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1726', 'name' => 'Tierra y Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2407', 'name' => 'Privada Blanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2413', 'name' => '24 de Agosto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2609', 'name' => 'Residencial del Lago', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2617', 'name' => 'Valle Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2916', 'name' => 'Tierra y Esperanza 2da Etapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3097', 'name' => 'Los Gobernadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3113', 'name' => 'Los Arcos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3114', 'name' => 'Plaza Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3115', 'name' => 'Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3214', 'name' => 'Nueva Republica', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26070', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0752', 'name' => 'Chapultepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0753', 'name' => 'ISSSTE', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0754', 'name' => 'Las Delicias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0755', 'name' => 'Lomas del Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0756', 'name' => 'San Felipe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0758', 'name' => 'Venustiano Carranza Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0759', 'name' => 'Venustiano Carranza Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0765', 'name' => 'Magisterio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1709', 'name' => 'Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1710', 'name' => 'Real del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1711', 'name' => 'Nueva Americana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1712', 'name' => 'Las Palmas Sector II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1730', 'name' => 'Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2918', 'name' => 'El Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26073', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1713', 'name' => 'Las Pompas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1716', 'name' => 'Periodistas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26080', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'Desarrollo Industrial Río Grande', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '0761', 'name' => 'Guillen', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0762', 'name' => 'Tecnológico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0763', 'name' => 'Andrés S. Viesca (100 Casas)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1719', 'name' => 'La Constancia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1720', 'name' => 'Cumbres', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1731', 'name' => 'Villa del Carmen', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2412', 'name' => 'Los Alamitos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2793', 'name' => 'Acoros I', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2794', 'name' => 'Acoros II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26083', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Ampliación Acoros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2409', 'name' => 'Año 2000', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2911', 'name' => 'Ampliación Año 2000', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3223', 'name' => 'Valle de las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26085', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0764', 'name' => 'FOVISSSTE', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '3120', 'name' => 'La Retama', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3121', 'name' => 'Las Canteras Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26086', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3118', 'name' => 'Villa Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3119', 'name' => 'Jacarandas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26088', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0766', 'name' => 'Esfuerzo Nacional', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1722', 'name' => 'Town House', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1723', 'name' => 'Doña Pura', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26089', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0767', 'name' => 'Lomas del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1718', 'name' => 'Colinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2610', 'name' => 'Deportivo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3134', 'name' => 'Residencial Colinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26090', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0771', 'name' => 'Villa de Fuente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26092', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1732', 'name' => 'Ejido Villa de Fuente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26093', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Valle de San Pablo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'Valle San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Lomas del Valle Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'Portal del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0017', 'name' => 'La Rioja', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1733', 'name' => 'Villa Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1734', 'name' => 'Los Espejos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1735', 'name' => 'Valle Escondido', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2912', 'name' => 'Los Compadres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2913', 'name' => 'San Anselmo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2917', 'name' => 'Sector Uribe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3093', 'name' => 'Hacienda de la Laja', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3094', 'name' => 'Lomas de La Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3135', 'name' => 'Río Escondido', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3138', 'name' => 'Hijos de Veteranos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26094', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'Rancho Josefina', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'Venustiano Carranza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0027', 'name' => 'Loma Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0768', 'name' => 'Altamira', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0769', 'name' => 'Los Doctores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0770', 'name' => 'San Joaquín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1736', 'name' => 'Del Cap', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3136', 'name' => 'San Ramón', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26095', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'Compositores Mexicanos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2414', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3137', 'name' => 'Parque Industrial Aeropuerto', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26096', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3132', 'name' => 'Rincón del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26099', 'locality' => 'Piedras Negras', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '4239', 'name' => 'Aeropuerto Internacional de Piedras Negras', 'zone_type' => 'Urbano', 'settlementtype_id' => '1','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26110', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0775', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26114', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0021', 'name' => 'La Navaja (La Loma)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0776', 'name' => 'La Navaja', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26119', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0022', 'name' => 'El Centinela (La Loma)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0777', 'name' => 'El Centinela', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26120', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0778', 'name' => 'El Moral', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26133', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0780', 'name' => 'El Refugio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26137', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0781', 'name' => 'Casa Roja', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26140', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Haciendita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0004', 'name' => 'Las Tinajas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'Centro de Readaptación Social Piedras Negras', 'zone_type' => 'Rural', 'settlementtype_id' => '9','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'San Carlos', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0024', 'name' => '12/o Regimiento de Caballería Motorizado', 'zone_type' => 'Rural', 'settlementtype_id' => '29','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '022', 'name' => 'Nava', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26170', 'locality' => 'Nava', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0783', 'name' => 'Nava Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26172', 'locality' => 'Nava', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2040', 'name' => 'Chamizal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2041', 'name' => 'El Encino', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2042', 'name' => 'Rogelio Montemayor', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2043', 'name' => 'Carlos Salinas de Gortari', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2044', 'name' => 'Bosques de Río Escondido', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26173', 'locality' => 'Nava', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2045', 'name' => 'Juan Antonio Osuna Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26174', 'locality' => 'Nava', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'El Manantial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'Las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0004', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2046', 'name' => 'SUTERM', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2047', 'name' => 'Acosta Vidales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2048', 'name' => '20 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2049', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2050', 'name' => 'Napoleón Gómez Sada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2053', 'name' => 'Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2055', 'name' => 'Sanitaria', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26175', 'locality' => 'Nava', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2052', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2054', 'name' => 'Nogalar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26176', 'locality' => 'Nava', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2051', 'name' => '2 de Agosto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3191', 'name' => 'Camino Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26177', 'locality' => 'Nava', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3211', 'name' => 'Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3212', 'name' => 'Magisterio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3213', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26180', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0789', 'name' => 'Estación Río Escondido', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
		['key' => '0792', 'name' => 'Santo Domingo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26183', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Plan de Ayala', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'Los Encinos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'Granja las Villas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'Venustiano Carranza Poniente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26184', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'Rancho Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '14','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'Las Praderas', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26185', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0790', 'name' => 'El Milagro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26186', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'Santo Domingo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0012', 'name' => 'Rodolfo Fernández y Asociados (Lotes Campestres)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'La Miseria', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26190', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0791', 'name' => 'El Saucito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26196', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'La Cascajera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0013', 'name' => 'Nava', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '002', 'name' => 'Acuña', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26200', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0794', 'name' => 'Ciudad Acuña Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26210', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0796', 'name' => 'Granjas del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2206', 'name' => 'La Rivera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2210', 'name' => 'División del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2211', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26215', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0797', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2212', 'name' => '10 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26220', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0798', 'name' => 'Parque Industrial La Amistad', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2686', 'name' => 'Parque Industrial Acuña', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26230', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0799', 'name' => 'Aeropuerto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0800', 'name' => 'Atilano Barrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2205', 'name' => 'Irene Arreola', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2680', 'name' => '16 de Junio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2691', 'name' => 'Angel Pérez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3265', 'name' => 'California', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26233', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Noblasi', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2200', 'name' => 'Cedros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3103', 'name' => 'La Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26234', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Veracruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'Lomas del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'Real del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26235', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0801', 'name' => 'El Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0802', 'name' => 'Municipio Libre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2204', 'name' => 'Los Reales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26236', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Arizona', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0008', 'name' => 'Cedros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0803', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2203', 'name' => 'Nueva Laguna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2233', 'name' => 'Las Américas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2670', 'name' => 'Sonora', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2683', 'name' => 'Linda Vista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2684', 'name' => 'Los Nogales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2687', 'name' => 'Fundadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2692', 'name' => 'Benjamín Canales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26237', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0012', 'name' => 'Nueva Jerusalén', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0804', 'name' => 'Revolución', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0805', 'name' => 'Tierra y Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2199', 'name' => '5 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2201', 'name' => 'Venustiano Carranza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2202', 'name' => 'Valle Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2505', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2693', 'name' => 'Acoros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2694', 'name' => 'Burócratas Municipales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2695', 'name' => 'Valle del Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3183', 'name' => 'Villa Milenio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26238', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Parque Industrial Modelo', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '0806', 'name' => 'Maestros Federales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2689', 'name' => 'Parque Industrial la Paz', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2690', 'name' => 'Ibico', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26239', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0807', 'name' => 'INFONAVIT Unidad Mexicanidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26240', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0808', 'name' => 'Los Álamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26248', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0015', 'name' => 'Villas del Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0809', 'name' => 'Amistad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2207', 'name' => 'Las Américas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26249', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0810', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26250', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0811', 'name' => 'Francisco I Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0812', 'name' => '28 de Junio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2216', 'name' => 'Ojo de Agua', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2217', 'name' => 'Fresnos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2678', 'name' => 'Los Tigres', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26260', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'Héroes Mexicanos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0813', 'name' => 'Oscar Flores Tapia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0814', 'name' => 'San Andrés', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0815', 'name' => 'FOVISSSTE Unidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2507', 'name' => 'Yunuen', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2675', 'name' => 'Pérez Arreola', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26263', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3160', 'name' => 'Campistrano', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2227', 'name' => 'Apolo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2228', 'name' => 'Encinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2230', 'name' => 'Valle Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26264', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2232', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26269', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'Maestros Municipales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'Praderas del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0816', 'name' => 'Periodistas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2231', 'name' => 'Santa Martha', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2673', 'name' => 'La Misión', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2674', 'name' => 'Mártires del 26 de Junio de 1906', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26270', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0817', 'name' => 'Santa Cecilia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2221', 'name' => 'Teotihuacan Parte Alta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2222', 'name' => 'Teotihuacan Parte Baja', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2224', 'name' => 'Eusebio Arizpe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26272', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Rubén Moreira', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2219', 'name' => 'San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2220', 'name' => 'Evaristo Pérez Arreola', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2223', 'name' => 'Enrique Martínez y Martínez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26278', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0818', 'name' => '11 de Octubre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26279', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0819', 'name' => 'Porvenir', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26280', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0820', 'name' => '1° de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26282', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2214', 'name' => 'Jesús María Ramón', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2215', 'name' => 'Tierra y Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26283', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2208', 'name' => 'Valle del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2682', 'name' => 'Santa Rosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3194', 'name' => 'Las Quintas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26284', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'San Alberto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'La Hacienda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0831', 'name' => 'Las Cuevas', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2209', 'name' => 'Santa Teresa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2506', 'name' => 'Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2758', 'name' => 'Las Aves', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2759', 'name' => 'Altos de Santa Teresa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3177', 'name' => 'Nuevo Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3247', 'name' => 'Guanajuato', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26288', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0821', 'name' => 'Gámez Sumaran', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26289', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0822', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26290', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0823', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0824', 'name' => 'Vista Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26293', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2676', 'name' => 'Potrero del Abuelo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26299', 'locality' => 'Ciudad Acuña', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0826', 'name' => 'Las Alamedas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26300', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0827', 'name' => 'Balcones', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26302', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0014', 'name' => 'Las Torres', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'La Estrella', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26304', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0832', 'name' => 'San Lorenzo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26305', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0830', 'name' => 'El Olmo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26308', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'El Venadito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'Calles', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0833', 'name' => 'El Castillo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26309', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'La Esmeralda', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'El Pilar', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0834', 'name' => 'Buena Vista', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26310', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0836', 'name' => 'Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26315', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0837', 'name' => 'Ojo de Agua (San Gregorio)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26320', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0839', 'name' => 'Santa María', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26328', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0840', 'name' => 'El Cedrito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '020', 'name' => 'Múzquiz', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26340', 'locality' => 'Ciudad Melchor Múzquiz', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0841', 'name' => 'Ciudad Melchor Múzquiz Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26342', 'locality' => 'Ciudad Melchor Múzquiz', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2088', 'name' => 'La Gloria', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2089', 'name' => 'El Cuartel', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2090', 'name' => 'La Nogalera', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2091', 'name' => 'Los Terreros', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2092', 'name' => 'El Alto', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2094', 'name' => 'Los Franco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2095', 'name' => 'INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2096', 'name' => 'México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2097', 'name' => 'Los Fresnos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2098', 'name' => 'Azteca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2099', 'name' => 'Guillermo Hernández', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2527', 'name' => 'El Porvenir', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '3190', 'name' => 'Estrella', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0004', 'name' => 'El Embarcadero', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0845', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2084', 'name' => 'El Aguacate', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26343', 'locality' => 'Ciudad Melchor Múzquiz', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'El Socorrito', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'El Zoológico', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2081', 'name' => 'La Piedra', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2082', 'name' => '28 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2083', 'name' => 'FONHASOL', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26344', 'locality' => 'Ciudad Melchor Múzquiz', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Las Aves', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'Nueva Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2080', 'name' => 'El Pescadito', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2085', 'name' => 'Placita Fundadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2086', 'name' => 'La Ford', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2087', 'name' => 'Sección 38', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2100', 'name' => 'El Bajío', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2101', 'name' => 'Magisterio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2102', 'name' => 'Casa Azul', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2104', 'name' => 'Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2105', 'name' => 'Los Bosques', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2107', 'name' => 'El Colorín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2109', 'name' => 'El Panteón', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2526', 'name' => 'Magisterial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3225', 'name' => 'Occidental', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3241', 'name' => 'Del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26345', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0019', 'name' => 'La Loma', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26346', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0018', 'name' => 'Nogalitos', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26348', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2108', 'name' => 'Nueva Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26350', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0847', 'name' => 'La Cuchilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0848', 'name' => 'Palaú', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26353', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Obrera 2', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26356', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0852', 'name' => 'El Cedral', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26360', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0851', 'name' => 'Las Esperanzas', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26363', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0021', 'name' => 'El Cedral (La Escondida)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0843', 'name' => 'Rancherías', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26365', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0853', 'name' => 'Barroterán [Estación]', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26366', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0854', 'name' => 'La Mota', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26370', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Número Tres', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0007', 'name' => '11 de Julio', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0008', 'name' => 'De Madera', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Malvinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'Número Cuatro', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'Número Dos', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0012', 'name' => 'Santa Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'Las Esperanzas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0855', 'name' => 'Minas la Florida (La Florida)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0856', 'name' => 'Minas de Barroterán', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26380', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'Morelos (Cuarterones)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26383', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0846', 'name' => 'La Venada (El Nogal)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26384', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'Negros Maskogos (Nacimiento)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0842', 'name' => 'Tribu Kikapoo (Nacimiento)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '014', 'name' => 'Jiménez', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26400', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0859', 'name' => 'Jiménez', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0866', 'name' => 'Ejido Dolores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0874', 'name' => 'Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26401', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Madero del Río', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0860', 'name' => 'Madero del Río', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0861', 'name' => 'Purísima', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0862', 'name' => 'Santa María', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26405', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0865', 'name' => 'La Potasa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26406', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'Casa de Rescate Cristo Vive de México', 'zone_type' => 'Rural', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26409', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0867', 'name' => 'Tepeyac (El Capricho)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26410', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3176', 'name' => 'El Divisadero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26411', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0869', 'name' => 'Nueva Palestina (La Y)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26412', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'San Vicente', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0870', 'name' => 'La Muralla', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26415', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0871', 'name' => 'Cristales', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26416', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0868', 'name' => 'Vieja Palestina', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26420', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Balcones', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0008', 'name' => 'El Carmen', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'San Carlos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0872', 'name' => 'San Carlos', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26423', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'La Bandera (Nueva Bandera)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Balcones', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'Balcones (Nuevos Balcones)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26429', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0873', 'name' => 'El Orégano', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26431', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Emiliano Zapata (Santa Elena)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0875', 'name' => 'San Matías', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26435', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Nueva Jarita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0876', 'name' => 'Palmira (Victoria)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '038', 'name' => 'Zaragoza', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26450', 'locality' => 'Zaragoza', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Presidentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0877', 'name' => 'Zaragoza Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26452', 'locality' => 'Zaragoza', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2056', 'name' => 'Sagón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2057', 'name' => 'La Pedrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2058', 'name' => 'La Nogalera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2059', 'name' => 'Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3232', 'name' => 'Manantiales del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26453', 'locality' => 'Zaragoza', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2061', 'name' => 'El Mimbre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26454', 'locality' => 'Zaragoza', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2060', 'name' => 'Nuevo Pueblo INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26460', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'La Maroma', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0884', 'name' => 'La Maroma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26463', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Corte Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Porvenir y Canal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0883', 'name' => 'Zaragoza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0885', 'name' => 'San Fernando (Dávila)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26464', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0878', 'name' => 'Paso del Tío Pío', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26465', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0881', 'name' => 'El Mimbre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0882', 'name' => 'Patiño', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0886', 'name' => 'Maravillas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26467', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'La Agrícola', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0887', 'name' => 'Congregación el Remolino', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26470', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'Minerva', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26477', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'El Caballo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26485', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'El Progreso', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26486', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Santa Eulalia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '019', 'name' => 'Morelos', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26500', 'locality' => 'Morelos', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0158', 'name' => 'Abelardo Galindo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0159', 'name' => 'Gerardo Treviño', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0160', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0161', 'name' => 'Rogelio Montemayor', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0162', 'name' => 'San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0164', 'name' => 'Santa Rita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0889', 'name' => 'Morelos Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2157', 'name' => 'Santa Lucía', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3229', 'name' => 'Jesús Perales Treviño', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26506', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'Antonio Bueno (La Concepción)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Armando Guadiana Tijerina', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0012', 'name' => 'Bermudas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0049', 'name' => 'Huerta Viola', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0051', 'name' => 'Itamar de Luna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0063', 'name' => 'José Benito Garza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0064', 'name' => 'José Isaac de Luna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0066', 'name' => 'José Ramón Garza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0068', 'name' => 'La Concepción', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0074', 'name' => 'La Ilusión', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0086', 'name' => 'Las Norias', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0087', 'name' => 'Las Palmas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0088', 'name' => 'Las Raíces', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0101', 'name' => 'Los Puente', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0107', 'name' => 'Lunas, Flores y Rosas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0115', 'name' => 'Ciudad Sanitaria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0117', 'name' => 'Estación Ferrocarriles Nacionales de México', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
		['key' => '0118', 'name' => 'Lienzo Charro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0143', 'name' => 'San Jorge', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0144', 'name' => 'San José', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0151', 'name' => 'Santa Teresita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0152', 'name' => 'Sergio Figueroa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0156', 'name' => 'Víctor Puentes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26507', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => '7 Mares [Restaurante Pescadería]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0004', 'name' => 'Alfredo Hernández', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'Aroldo de Hoyos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0013', 'name' => 'Campamento Venustiano Carranza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'Cipriano Delgado Alejandro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0017', 'name' => 'Doctor Barrera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'Domingo Rodríguez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0025', 'name' => 'El Papalote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0028', 'name' => 'El Primo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0030', 'name' => 'El Reparo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0033', 'name' => 'Eleazar Barrientos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0040', 'name' => 'Fernando Santos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0041', 'name' => 'Florentino Pérez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0046', 'name' => 'Hilario Avitia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0047', 'name' => 'Huerta Jiménez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0055', 'name' => 'Javier Cuellar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0056', 'name' => 'Javier Rosas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0078', 'name' => 'La Pila (Mario Martínez González)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0080', 'name' => 'La Tierra Seca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0085', 'name' => 'Las Jaulas (Eduardo Lafuente) [Restaurante]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0094', 'name' => 'Los Albañiles', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0097', 'name' => 'Los Compadres', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0105', 'name' => 'Luis Ángeles', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0110', 'name' => 'Martín de Hoyos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0111', 'name' => 'María de la Luz Lara Zamarripa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0112', 'name' => 'Mi Ranchito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0114', 'name' => 'Natividad Urdiales', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0116', 'name' => 'Estación de Servicio Pemex', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0132', 'name' => 'Real [Palenque]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0135', 'name' => 'Rodolfo Galindo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0142', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0147', 'name' => 'Santa María', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0148', 'name' => 'Santa María', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0150', 'name' => 'Santa Rita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0153', 'name' => 'Sergio Zúñiga', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0154', 'name' => 'Tres Banderas (Genaro Urdiales)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0155', 'name' => 'Tronco Mocho', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26510', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Álvaro Luna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'Antonia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'El Huracán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0042', 'name' => 'Gonzalo Treviño (Alamitos)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0044', 'name' => 'Hacienda Cuajimulco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0048', 'name' => 'Huerta Patricia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0058', 'name' => 'Jesús Martínez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0060', 'name' => 'Jesús Rodríguez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0062', 'name' => 'Joben [Granja]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0071', 'name' => 'La Flor', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0092', 'name' => 'Los Abuelos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0093', 'name' => 'Los Alamitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0099', 'name' => 'Los Nietos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0104', 'name' => 'Lucas de Hoyos Olivares', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0106', 'name' => 'Luis Cervantes Molina', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0109', 'name' => 'Manuel Galván', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0119', 'name' => 'Noé Garza Flores', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0120', 'name' => 'Odilón de Paz Machado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0123', 'name' => 'Paredes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0127', 'name' => 'Puente de Madera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0133', 'name' => 'René González González', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0140', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0141', 'name' => 'San Carlos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0146', 'name' => 'Santa Julia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26513', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'Beatriz Fernández Cárdenas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0016', 'name' => 'Corrientes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'El Campamento', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0024', 'name' => 'El Palmito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0035', 'name' => 'Enrique de Luna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0043', 'name' => 'Guadalupe (Arsenio de Hoyos)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0057', 'name' => 'Hugo López', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0069', 'name' => 'La Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0073', 'name' => 'La Herradura', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0075', 'name' => 'La Lajita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0083', 'name' => 'Las Compuertas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0091', 'name' => 'Los Álamos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0102', 'name' => 'Los Tecolotes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0124', 'name' => 'Paso de Piedra', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0126', 'name' => 'Praderas de Tarango', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0130', 'name' => 'Rancho Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0131', 'name' => 'Rancho Nuevo Número Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0134', 'name' => 'Roberto Rodríguez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0137', 'name' => 'Rumaldo de Hoyos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26514', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0052', 'name' => 'Jaco Primero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26515', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0053', 'name' => 'Jaco Segundo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0084', 'name' => 'Las Conchas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26516', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Apolinar Arriaga', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'El Huizache', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0032', 'name' => 'El Toro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0081', 'name' => 'Las Bacinicas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0082', 'name' => 'Las Cabeceras del Río Escondido', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0090', 'name' => 'Leonardo Villarreal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0096', 'name' => 'Los Ayajiles', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0103', 'name' => 'Lázaro García', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0129', 'name' => 'Rancho de Beto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0145', 'name' => 'San Rafael', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26517', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Albino Pérez Ramos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'Casa Hogar Getsemaní', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Domingo Estrada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'El Consuelo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0026', 'name' => 'El Papalote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0034', 'name' => 'Eleazar Omar Rodríguez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0036', 'name' => 'Ernesto Aguilar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0037', 'name' => 'Eutimio Cuéllar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0038', 'name' => 'Fernando Garza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0039', 'name' => 'Fernando Moreno', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0045', 'name' => 'Hermila de Hoyos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0050', 'name' => 'Isidro Yáñez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0054', 'name' => 'Jaime de Hoyos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0059', 'name' => 'Jesús Orozco Rubio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0061', 'name' => 'Jesús Rodríguez Galindo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0065', 'name' => 'José María Pérez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0067', 'name' => 'La Calera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0072', 'name' => 'La Fuente (Fernando Garza González)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0076', 'name' => 'La Lomita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0077', 'name' => 'La Nogalera', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0089', 'name' => 'Leobardo Delgado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0095', 'name' => 'Los Arados', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0098', 'name' => 'Los Martínez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0100', 'name' => 'Los Nogales', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0108', 'name' => 'Manuel Esparza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0113', 'name' => 'Monasterio de las Carmelitas Descalzas', 'zone_type' => 'Rural', 'settlementtype_id' => '11','zipcode_id' => $idZip],
		['key' => '0121', 'name' => 'Ojo de San Ildefonso', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0122', 'name' => 'Oscar Rodríguez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0125', 'name' => 'Porfirio Cedillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0136', 'name' => 'Román Aguilar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0157', 'name' => 'Zeferino Garza de Hoyos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0888', 'name' => 'Los Álamos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26520', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0029', 'name' => 'Saldívar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0031', 'name' => 'El Sauz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0070', 'name' => 'La Estrella', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0128', 'name' => 'Rancherías', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0149', 'name' => 'Santa Rita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26524', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0079', 'name' => 'La Salada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26525', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0138', 'name' => 'San Ángel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26526', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0027', 'name' => 'El Perro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0139', 'name' => 'San Ángel Viejo (Rancho Viejo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '003', 'name' => 'Allende', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26530', 'locality' => 'Allende', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0891', 'name' => 'Allende Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26532', 'locality' => 'Allende', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2191', 'name' => 'Manantial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2192', 'name' => 'Ignacio Allende', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2194', 'name' => 'Las Brisas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2196', 'name' => 'San Tito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2257', 'name' => 'El Manantial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2953', 'name' => 'Magisterio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2956', 'name' => 'Esteban Barrón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3256', 'name' => 'Ejidal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3454', 'name' => 'INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26533', 'locality' => 'Allende', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Las Granjas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2182', 'name' => 'Jardines del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2183', 'name' => 'Las Granjas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2184', 'name' => 'CFE', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2185', 'name' => 'Parque Industrial Allende', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2197', 'name' => 'Santa Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2954', 'name' => 'Presidentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26534', 'locality' => 'Allende', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2186', 'name' => 'Los Parques', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2188', 'name' => 'Rogelio Montemayor Segui', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2189', 'name' => 'Eduardo Montemayor', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2256', 'name' => 'Nogalera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2955', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3384', 'name' => 'La Molinera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26540', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0893', 'name' => 'Río Bravo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '3316', 'name' => 'Armando Guerra', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3328', 'name' => 'El Comanche', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3336', 'name' => 'El Ingeniero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3360', 'name' => 'Guadalupe Reyna Navarro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3374', 'name' => 'Juan Hernández', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3388', 'name' => 'La Tembladora', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3389', 'name' => 'La Tembladora', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3402', 'name' => 'Los Pinos (González)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3452', 'name' => 'Vicente González Muñoz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26543', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3312', 'name' => 'Ábrego', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3319', 'name' => 'Benjamín Realme', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3320', 'name' => 'Casa Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3347', 'name' => 'El Sauz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3349', 'name' => 'Elizondo [Triturados]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3354', 'name' => 'Enrique Navarro Montemayor (Santa Cecilia)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3359', 'name' => 'Gonzalo de Luna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3362', 'name' => 'Huerta Quinta María Teresa (Guillermo Álvarez)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3363', 'name' => 'Ignacio Salazar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3375', 'name' => 'Juan Ortiz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3398', 'name' => 'Los Laureles', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3401', 'name' => 'Los Pinos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3404', 'name' => 'Los Tres Fresnos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3408', 'name' => 'Marco Antonio Mendoza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3412', 'name' => 'Carolina', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3419', 'name' => 'Aduana', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3423', 'name' => 'Oscar Barrón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3431', 'name' => 'Refugio Buentello Aguilar (San José)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3435', 'name' => 'San Ángel [Mini Súper]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3437', 'name' => 'San Fernando', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3449', 'name' => 'Tomás Navarro Valdez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26544', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3318', 'name' => 'Baldo Valdez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3338', 'name' => 'El Milagro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3382', 'name' => 'Efraín Fuentes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3385', 'name' => 'La Mota', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3396', 'name' => 'Los Cuatro Vientos [Bar]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3399', 'name' => 'Los Nogalitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3417', 'name' => 'Moreno [Transcarga de Ganado]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3445', 'name' => 'Siete Once [Depósito]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26545', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3322', 'name' => 'La Gallera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3331', 'name' => 'El Durazno', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3361', 'name' => 'Hipólito Peña', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3373', 'name' => 'José Zertuche', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3377', 'name' => 'JZG', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3394', 'name' => 'Los Compadres [Restaurante]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3414', 'name' => 'María Victoria de Cintas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26546', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3358', 'name' => 'Gaspar Apolinar Casa Nova', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3391', 'name' => 'Las Margaritas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3420', 'name' => 'Nueva Frontera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3422', 'name' => 'Ojo de Esteban', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3446', 'name' => 'Siete Torres', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26547', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3315', 'name' => 'Antonio Trujillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3407', 'name' => 'Macario Trujillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26550', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3337', 'name' => 'El Jardín', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3344', 'name' => 'El Ranchito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3348', 'name' => 'El Trece (Jesús Treviño)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3355', 'name' => 'Fermín Segura', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3376', 'name' => 'Juan Román Martínez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3393', 'name' => 'Las Playas [Zona de Tolerancia]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3405', 'name' => 'Los Tres Gerardos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3433', 'name' => 'Rogelio Lira López', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26553', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0895', 'name' => 'Allende', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3314', 'name' => 'Antonio Hernández Ortiz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3366', 'name' => 'Jaime López Muñoz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3367', 'name' => 'Jesús Canales', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3395', 'name' => 'Los Corrales', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3403', 'name' => 'Los Sauces', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3411', 'name' => 'Martha Rodríguez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3432', 'name' => 'Rodolfo Riojas Coronado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3448', 'name' => 'Simón Oliden', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26554', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3313', 'name' => 'Alfonso Valdez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3369', 'name' => 'Jesús Sánchez Mejía', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3378', 'name' => 'La Esmeralda', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26555', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3352', 'name' => 'Enrique Jiménez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26556', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3335', 'name' => 'El Indio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3406', 'name' => 'Los Tres Potrillos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3409', 'name' => 'Mariano Flores (San José)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3439', 'name' => 'San José', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26557', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3324', 'name' => 'Don Pedro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3327', 'name' => 'El Cincuenta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3330', 'name' => 'El Dorado (Jesús López)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3356', 'name' => 'Fracción los Medina', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3381', 'name' => 'La Liebre', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3400', 'name' => 'Los Pepes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3415', 'name' => 'Mi Ranchito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3418', 'name' => 'Nicolás Portales', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3424', 'name' => 'Pablo González', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3441', 'name' => 'Santa Martha', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3442', 'name' => 'Santa Martha Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3443', 'name' => 'Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3447', 'name' => 'Silicas Independientes de Coahuila [Molino]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26563', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0896', 'name' => 'Chamacuero (El Seis)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3372', 'name' => 'José Moreno', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26564', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3351', 'name' => 'Elída González García', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26565', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0897', 'name' => 'Palomas y Dolores', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3350', 'name' => 'Elsa Nélida Flores de Lozano (Palomas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3364', 'name' => 'Indalecio López Arizpe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3365', 'name' => 'Ismael Martínez Franco (Palomas y Dolores)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3370', 'name' => 'Joaquín Guzmán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3425', 'name' => 'Palomas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3426', 'name' => 'Palomas y Dolores', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3450', 'name' => 'Valeriano Hernández Lira', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26566', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3317', 'name' => 'Bakará [Centro Nocturno]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3325', 'name' => 'El Abuelo (El Bosque)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3380', 'name' => 'La Ladrillera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26567', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3339', 'name' => 'El Papalote (Emilio Treviño)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3343', 'name' => 'El Picadero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3368', 'name' => 'Jesús Ibarra', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3379', 'name' => 'La Huizachada (La Hacienda)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3386', 'name' => 'La Muralla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3427', 'name' => 'José Martín Trinidad Maltos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26570', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3342', 'name' => 'El Pesebre', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3390', 'name' => 'La Tembladora', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3392', 'name' => 'Las Marías (Ojo de Agua)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3410', 'name' => 'Mario Camarillo Zertuche', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26573', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3340', 'name' => 'El Paraíso', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3353', 'name' => 'Enrique Lira (Osmar)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3371', 'name' => 'José María Moreno Ramírez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3383', 'name' => 'La Mariposa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3429', 'name' => 'Raúl López de Luna (Ojo de Agua)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26574', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3326', 'name' => 'El Centenario', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3413', 'name' => 'María Isabel (El Encino) [Restaurante]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3421', 'name' => 'Ojo de Agua (El Consuelo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3428', 'name' => 'Poco Bueno', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3434', 'name' => 'Río Vista (Parque Paraíso) [Motel]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3440', 'name' => 'Santa Margarita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3453', 'name' => 'Villa de Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26575', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3332', 'name' => 'El Encino', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3333', 'name' => 'El Galeno', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3357', 'name' => 'Gardea [Sociedad de Producción Rural]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3430', 'name' => 'Rancho Chiquito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3451', 'name' => 'Valle Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26577', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3323', 'name' => 'Don Casimiro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3341', 'name' => 'El Pato', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26580', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3436', 'name' => 'San Fernando', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26584', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3387', 'name' => 'La Piedra', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26590', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3345', 'name' => 'El Salitre', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3397', 'name' => 'Los Galindo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26593', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3329', 'name' => 'El Coyotillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3346', 'name' => 'El Salitre Tres (Monsiváis)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26595', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3438', 'name' => 'San Isidro (Elías Galindo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26596', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3334', 'name' => 'El Gavilán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '037', 'name' => 'Villa Unión', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26600', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Universidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0898', 'name' => 'Villa Unión Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3455', 'name' => 'Del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3456', 'name' => 'Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26603', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3499', 'name' => 'El Encino', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3509', 'name' => 'El Moran', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3512', 'name' => 'El Nogalito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3514', 'name' => 'El Pasito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3515', 'name' => 'El Pasito Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3528', 'name' => 'Espinoza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3531', 'name' => 'Ezequiel Fuentes Muñoz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3544', 'name' => 'Hilda Cobio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3551', 'name' => 'Jesús Rocha', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3560', 'name' => 'Juan Manuel Arizpe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3566', 'name' => 'La Carmona', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3568', 'name' => 'La Escondida', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3596', 'name' => 'Las Uvas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3597', 'name' => 'Loma Alta [Club de Tiro, Caza y Pesca]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3610', 'name' => 'Los Ojitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3617', 'name' => 'Manuel Arreola', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3618', 'name' => 'Margarita Rocha', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3647', 'name' => 'Petra de Luna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26604', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0894', 'name' => 'La Azufrosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3463', 'name' => 'Anastacio Vázquez Gallegos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3486', 'name' => 'El Álamo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3494', 'name' => 'El Chupadero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3498', 'name' => 'El Divisadero (Jaime López)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3505', 'name' => 'El Herradero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3516', 'name' => 'El Pedregal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3532', 'name' => 'Francisco Garza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3546', 'name' => 'Huerta Beatriz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3547', 'name' => 'Huerta María de Lourdes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3563', 'name' => 'Juan Reyes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3579', 'name' => 'La Mota', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3582', 'name' => 'La Noria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3588', 'name' => 'Las Charcas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3593', 'name' => 'Las Margaritas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3606', 'name' => 'Los Girasoles', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3621', 'name' => 'Mario Tapia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3638', 'name' => 'Palo Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3640', 'name' => 'Palo Blanco Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3657', 'name' => 'Ricardo Vázquez Gallegos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3661', 'name' => 'Rolando Villanueva', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3663', 'name' => 'San Carlos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26605', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0901', 'name' => 'Los Charcos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0905', 'name' => 'Galeras', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3460', 'name' => 'Allende', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3468', 'name' => 'Raúl Cadena', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3469', 'name' => 'Benjamín López', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3471', 'name' => 'Caballo Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3475', 'name' => 'Casa Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3476', 'name' => 'Casa Blanca Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3478', 'name' => 'Chupadero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3482', 'name' => 'Cruz Castillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3488', 'name' => 'El Arcoíris (Los Dávila)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3495', 'name' => 'El Chupadero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3500', 'name' => 'El Faisán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3519', 'name' => 'El Sacrificio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3521', 'name' => 'El Silencio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3529', 'name' => 'Evaristo Espinoza Pérez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3541', 'name' => 'Hacienda la Trinidad', 'zone_type' => 'Rural', 'settlementtype_id' => '11','zipcode_id' => $idZip],
		['key' => '3542', 'name' => 'Higinio Delgado Ortiz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3545', 'name' => 'El Ingeniero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3548', 'name' => 'Los Roles', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3554', 'name' => 'José Hernández', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3557', 'name' => 'Juan Antonio Martínez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3561', 'name' => 'Juan Ortiz de Luna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3564', 'name' => 'Juan Sánchez López', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3565', 'name' => 'La Alegría', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3569', 'name' => 'La Gloria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3578', 'name' => 'La Morita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3587', 'name' => 'Las Alcantarillas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3589', 'name' => 'Las Cruces', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3590', 'name' => 'Las Encinas (La Mota de en Medio)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3595', 'name' => 'Las Moras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3601', 'name' => 'Los Álamos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3608', 'name' => 'Los Lupes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3614', 'name' => 'Los Venados (Benecio Esteban Martínez)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3619', 'name' => 'Margil Garza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3620', 'name' => 'Mario Lara', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3626', 'name' => 'Mi Ranchito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3635', 'name' => 'Oscar Segura', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3639', 'name' => 'Palo Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3646', 'name' => 'Pedro Reyes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3654', 'name' => 'Río Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3660', 'name' => 'Rodolfo Castellanos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3669', 'name' => 'San José del Carmen', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3670', 'name' => 'San Juan', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3679', 'name' => 'The Eagles Paradaise', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3681', 'name' => 'Vicente Niño', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26606', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3472', 'name' => 'Caballo Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3502', 'name' => 'El Fresno', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3534', 'name' => 'Gerónimo Elizondo Buendía', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3580', 'name' => 'La Mota del Burro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3583', 'name' => 'La Palangana', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3629', 'name' => 'Moto Muñoz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3658', 'name' => 'Rito Castilleja González', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3667', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3673', 'name' => 'Santa Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3683', 'name' => 'Yolanda Martínez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26607', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0904', 'name' => 'El Arroyo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3457', 'name' => 'Adolfo Melchor', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3462', 'name' => 'Amparito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3465', 'name' => 'Antonio Martínez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3474', 'name' => 'Casa Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3480', 'name' => 'Conrado Martínez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3485', 'name' => 'Dos Hermanas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3506', 'name' => 'El Limosín', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3510', 'name' => 'El Nogal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3511', 'name' => 'El Nogalón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3525', 'name' => 'Enrique Mendoza Guajardo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3539', 'name' => 'Guayacán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3543', 'name' => 'Hilario García', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3549', 'name' => 'Jesús Aguilar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3558', 'name' => 'Juan de Luna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3594', 'name' => 'Las Moras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3598', 'name' => 'Loma del Patrón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3607', 'name' => 'Los Liras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3655', 'name' => 'Rancho Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3656', 'name' => 'Ricardo Cárdenas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3665', 'name' => 'San Esteban', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3666', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3668', 'name' => 'San Javier', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3672', 'name' => 'Santa Eulalia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3678', 'name' => 'Santo Cristo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3680', 'name' => 'Rancho Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3682', 'name' => 'Villarreal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26610', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3459', 'name' => 'Alfonso Lara Talamante', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3466', 'name' => 'Armando Hernández', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3470', 'name' => 'Buena Vista', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3487', 'name' => 'El Amparo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3526', 'name' => 'Ernesto Acevedo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3553', 'name' => 'Jorge Villarreal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3573', 'name' => 'La Lajita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3575', 'name' => 'La Luz Vieja', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3605', 'name' => 'Los Cuates Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3612', 'name' => 'Los Pepes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3643', 'name' => 'Paty', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3644', 'name' => 'Pedro Contreras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3651', 'name' => 'Piedra Pinta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26613', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0909', 'name' => 'Santa Ana', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3493', 'name' => 'El Chivato', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3504', 'name' => 'El Gavilán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3524', 'name' => 'El Vive', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3527', 'name' => 'Ernesto González', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3570', 'name' => 'La Herradura', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3584', 'name' => 'La Potaza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3585', 'name' => 'La Zacatosa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3586', 'name' => 'La Zacatosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3600', 'name' => 'Lomas del Tule', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3628', 'name' => 'Mojarras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26614', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0902', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3507', 'name' => 'El Milagro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3517', 'name' => 'El Potrero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3520', 'name' => 'El Setenta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3537', 'name' => 'Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3604', 'name' => 'Los Altares', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3611', 'name' => 'Los Papalotes Cuates', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3634', 'name' => 'Ojo de Agua de San Diego', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3664', 'name' => 'San Diego', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26616', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3491', 'name' => 'El Cedrito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3652', 'name' => 'Puerto Romero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26617', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0907', 'name' => 'La Luz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3530', 'name' => 'Ex-Hacienda de Santa Ana', 'zone_type' => 'Rural', 'settlementtype_id' => '11','zipcode_id' => $idZip],
		['key' => '3552', 'name' => 'Jesús Rodríguez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3613', 'name' => 'Los Realitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3637', 'name' => 'Palmira', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26620', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3492', 'name' => 'El Chapote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3503', 'name' => 'El Garabatal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3576', 'name' => 'La Mona', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3591', 'name' => 'Las Flores', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26623', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3508', 'name' => 'El Millón (El Milagro)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3574', 'name' => 'La Lechuza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3599', 'name' => 'Loma Pinta (Las Jaritas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3674', 'name' => 'Santa Isabel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3675', 'name' => 'Santa Isabel Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26624', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3496', 'name' => 'El Cimarrón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3572', 'name' => 'La Jauja', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3676', 'name' => 'Santa Margarita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26625', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3473', 'name' => 'Casa Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3497', 'name' => 'El Comandante', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3523', 'name' => 'El Venadito (La Mezquitosa)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3536', 'name' => 'Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26626', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3623', 'name' => 'Matamoreño', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3624', 'name' => 'Matamoreño Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26627', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3627', 'name' => 'Minas Viejas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26630', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0908', 'name' => 'Ciénega Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3535', 'name' => 'Gilberto Villarreal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3609', 'name' => 'Los Nogales', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3633', 'name' => 'Ojo de Agua', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26634', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3489', 'name' => 'El Caracol', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3518', 'name' => 'El Refugio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3522', 'name' => 'El Silencio (Sección K-R Noventa)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3636', 'name' => 'Pablo Rodríguez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3650', 'name' => 'Piedra Pinta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26635', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3540', 'name' => 'Guillermo Ochoa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3577', 'name' => 'La Morita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3648', 'name' => 'Peyotes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3671', 'name' => 'San Ramón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3677', 'name' => 'Santana Ortiz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26636', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0906', 'name' => 'Las Blancas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3458', 'name' => 'La Amistad (Alejandro Frías)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3477', 'name' => 'Celso Frías', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3479', 'name' => 'Conrado Arizpe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3483', 'name' => 'Daniel Flores', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3484', 'name' => 'Dora Elia Pérez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3513', 'name' => 'El Nogalito (Daniel Frías)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3533', 'name' => 'Fundadores', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3538', 'name' => 'Guadalupe Frías', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3550', 'name' => 'Jesús Frías', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3556', 'name' => 'José Luis Lira', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3562', 'name' => 'Juan Raúl Méndez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3592', 'name' => 'Las Jaras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3602', 'name' => 'Los Aguilares (Alejandro Aguilar)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3603', 'name' => 'Los Aguilares (José Elisandro Aguilar)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3615', 'name' => 'Luis Pérez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3622', 'name' => 'María Leticia Valdez Rodríguez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3630', 'name' => 'Nicolás de Luna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3641', 'name' => 'Palomares (Ramón de Luna)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3653', 'name' => 'Rafaela Salomón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3662', 'name' => 'Roque Martínez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26637', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3464', 'name' => 'Antonio Frías', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3467', 'name' => 'Arturo Frías', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3481', 'name' => 'Crescencio Frías', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3501', 'name' => 'El Fresnito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3559', 'name' => 'Juan Frías', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3567', 'name' => 'La Escondida', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3571', 'name' => 'La Iguana', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3632', 'name' => 'Norberto Alarcón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3645', 'name' => 'Pedro Lira', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3659', 'name' => 'Roberto Frías', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '012', 'name' => 'Guerrero', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26640', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Doctor Virgilio P Farías Valdés', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0910', 'name' => 'Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26643', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Rodríguez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'San José', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3180', 'name' => 'San Vicente', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26646', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'El Saucito', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26650', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0911', 'name' => 'La Reforma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0912', 'name' => 'Santa Mónica', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26659', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0914', 'name' => 'Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0915', 'name' => 'Hacienda de Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '11','zipcode_id' => $idZip],
		['key' => '0916', 'name' => 'San Pablo (El Rosario)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '013', 'name' => 'Hidalgo', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26670', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Elsa Hernández de las Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'Enrique Martínez y Martínez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'Hidalgo II', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0917', 'name' => 'Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '3240', 'name' => 'Humberto Moreira', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26690', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26695', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Los Borregos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'El Semoro (Arroyitos)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '028', 'name' => 'Sabinas', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26700', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0918', 'name' => 'Sabinas Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26710', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0920', 'name' => '21 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26719', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0921', 'name' => 'Santa Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26720', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0922', 'name' => 'Ismael Rodríguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26729', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'La Capilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0923', 'name' => 'Los Montes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2320', 'name' => 'Sector Sanitario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2769', 'name' => 'La Retama', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2770', 'name' => 'La Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26730', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0924', 'name' => 'Reynera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26736', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0925', 'name' => 'San Luis', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2315', 'name' => 'Rincón de Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26737', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0926', 'name' => 'Los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2298', 'name' => 'Valle de Santo Domingo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3168', 'name' => 'Villas de Vista Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26739', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0928', 'name' => 'Manuel López Huitrón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2297', 'name' => 'El Nogal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2935', 'name' => 'Lomas de la Virgen', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26740', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0929', 'name' => 'Fundadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2316', 'name' => 'Magisterio Sección 38', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3242', 'name' => 'Los Manzanos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26741', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2299', 'name' => 'Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26747', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0931', 'name' => 'Zona Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26748', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0932', 'name' => 'Residencial Lomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2768', 'name' => 'Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26749', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0933', 'name' => 'Residencial del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2766', 'name' => 'Del Bosque Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3098', 'name' => 'Privada Hacienda San Rafael', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26750', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0934', 'name' => 'Centenario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26759', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0935', 'name' => 'Profesor Federico Berrueto Ramón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26760', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0936', 'name' => 'Francisco Sarabia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26763', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2318', 'name' => 'Sabinas 50', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2319', 'name' => 'Ampliación Colonia Cincuenta Aniversario', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26764', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0937', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2290', 'name' => 'San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2291', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26765', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0938', 'name' => 'La Aurora', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26766', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0939', 'name' => 'Jorge B Cuéllar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2286', 'name' => 'El Mimbre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2287', 'name' => 'Nuevo Amanecer', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2288', 'name' => 'Atenas II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2292', 'name' => 'San Joaquín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2293', 'name' => 'Buenos Aires', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26768', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0941', 'name' => 'El Consuelo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26769', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0942', 'name' => 'INFONAVIT los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '2289', 'name' => 'Atenas I', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26770', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0943', 'name' => 'Coahuila', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26779', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0944', 'name' => 'Gobernadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26780', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0945', 'name' => 'Flores Magón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26788', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0946', 'name' => 'Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26790', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0947', 'name' => 'Chapultepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2767', 'name' => 'El Mezquite', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26799', 'locality' => 'Sabinas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0948', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26950', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Seis (Agujita)', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0989', 'name' => 'Agujita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2771', 'name' => 'Barrio Uno', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2772', 'name' => 'Barrio Dos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2773', 'name' => 'Barrio Cuatro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2774', 'name' => 'Barrio Siete', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2775', 'name' => 'Agujita', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2776', 'name' => 'Cocedores', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2777', 'name' => 'Nueva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2778', 'name' => 'Dávila', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2779', 'name' => 'Alberto González', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2780', 'name' => 'Villarreal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2781', 'name' => 'Cuauhtémoc', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3237', 'name' => 'Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26954', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3099', 'name' => 'Nuevo Barroterán', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3174', 'name' => 'Valle Dorado', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26959', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Sabinas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26960', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0992', 'name' => 'Cloete', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '3221', 'name' => 'Loma Alta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26963', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0993', 'name' => 'Puente Negro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26964', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'San José de Cloete', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26980', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0994', 'name' => 'Guadalupe Victoria (Pueblo Nuevo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '032', 'name' => 'San Juan de Sabinas', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26800', 'locality' => 'Nueva Rosita', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0949', 'name' => 'Nueva Rosita Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26809', 'locality' => 'Nueva Rosita', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0952', 'name' => 'Zona Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '3195', 'name' => 'Humberto Moreira', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26810', 'locality' => 'Nueva Rosita', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0953', 'name' => 'Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26813', 'locality' => 'Nueva Rosita', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0954', 'name' => 'Prolongación Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26820', 'locality' => 'Nueva Rosita', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Mina Siete', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0955', 'name' => 'Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0956', 'name' => 'Sarabia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26825', 'locality' => 'Nueva Rosita', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0957', 'name' => 'Ramos Arizpe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3266', 'name' => 'Antonio Gutiérrez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26830', 'locality' => 'Nueva Rosita', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0959', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0960', 'name' => 'Nuevo León', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3267', 'name' => 'Maseca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26832', 'locality' => 'Nueva Rosita', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2265', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26834', 'locality' => 'Nueva Rosita', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0962', 'name' => 'Roma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26840', 'locality' => 'Nueva Rosita', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0963', 'name' => 'Allende', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0964', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0965', 'name' => 'Nueva Imagen', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0966', 'name' => 'San Luisito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2278', 'name' => 'Paso del Coyote', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26843', 'locality' => 'Nueva Rosita', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0967', 'name' => 'Prolongación Allende', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2275', 'name' => 'Nueva Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26850', 'locality' => 'Nueva Rosita', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0968', 'name' => 'Comercial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26860', 'locality' => 'Nueva Rosita', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0969', 'name' => 'Chapultepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0970', 'name' => 'Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2267', 'name' => 'INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2269', 'name' => 'Doctor Mier', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3248', 'name' => 'Praderas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26862', 'locality' => 'Nueva Rosita', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2268', 'name' => 'Jardines', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2273', 'name' => 'Las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26870', 'locality' => 'Nueva Rosita', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0971', 'name' => 'Dávila', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0972', 'name' => 'Del Maestro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26875', 'locality' => 'Nueva Rosita', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0973', 'name' => 'Las Lomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26879', 'locality' => 'Nueva Rosita', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0974', 'name' => '11 de Julio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2266', 'name' => 'Colinas del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26880', 'locality' => 'Nueva Rosita', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0975', 'name' => 'Americana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0976', 'name' => 'Del 6', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0977', 'name' => 'Lomas de Rosita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26885', 'locality' => 'Nueva Rosita', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Amelia Rodríguez Hernández', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0978', 'name' => 'Carlos A Rovirosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2276', 'name' => 'Los Filtros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26886', 'locality' => 'Nueva Rosita', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2277', 'name' => 'María', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26890', 'locality' => 'Nueva Rosita', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'Lomas de Chapultepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0979', 'name' => 'Francisco I Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2274', 'name' => 'Burócratas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2312', 'name' => 'Magisterial Sección 38', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2313', 'name' => 'Libramiento Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26900', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0980', 'name' => 'San Juan de Sabinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0981', 'name' => 'Santa María', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26903', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'San Juan de Sabinas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26908', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0983', 'name' => 'Los Garza (Paso de las Garzas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26910', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0984', 'name' => 'Carlos Salazar', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0985', 'name' => 'Santa Isabel (La Leona)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26930', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'El Gallo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0986', 'name' => 'Ignacio Zaragoza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26940', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0987', 'name' => 'Sauceda del Naranjo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26942', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0982', 'name' => 'El Rodeo (Hacienda de Purísima)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0988', 'name' => 'Paso del Coyote (Predio Purísima)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '26943', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0004', 'name' => 'La Minita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '035', 'name' => 'Torreón', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27000', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0995', 'name' => 'Torreón Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1033', 'name' => 'Jardines Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27009', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1000', 'name' => 'Administración Fiscal Regional Norte Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27010', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1001', 'name' => 'Estrella', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1002', 'name' => 'Magdalenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1003', 'name' => 'Navarro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3055', 'name' => 'Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3063', 'name' => 'Las Trojes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27013', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0040', 'name' => 'Residencial Palmares', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0056', 'name' => 'Rincón las Trojes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0065', 'name' => 'Palo Blanco Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0066', 'name' => 'Hacienda Santa Lucía', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3058', 'name' => 'La Paz', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3081', 'name' => 'Villas San Agustín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3082', 'name' => 'San Agustín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27014', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3024', 'name' => 'Alebrijes Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3030', 'name' => 'Quintas Anna', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3162', 'name' => 'Jardines del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3170', 'name' => 'Real de San Agustín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3246', 'name' => 'Conjunto de Todos los Santos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27015', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1894', 'name' => 'Satélite de la Laguna', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2498', 'name' => 'Villas San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2499', 'name' => 'Aviación San Ignacio Segunda Etapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2744', 'name' => 'Puerta Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27016', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0041', 'name' => 'Ampliación San Ignacio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0048', 'name' => 'Ejido Ignacio Allende', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1006', 'name' => 'Aeropuerto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1007', 'name' => 'Quintas San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2446', 'name' => 'Torreón 2000', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3004', 'name' => 'Aviación San Ignacio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3033', 'name' => 'Rincón San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3172', 'name' => 'El Siglo de Torreón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27017', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2607', 'name' => 'Los Rodríguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27018', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0029', 'name' => 'La Toscana Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0039', 'name' => 'Ejido Ana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0043', 'name' => 'Cerrada Ibero', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0054', 'name' => 'Residencial Alpes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0071', 'name' => 'La Rioja Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1009', 'name' => 'Residencial el Fresno', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1191', 'name' => 'Ignacio Allende', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2441', 'name' => 'Villas de la Ibero', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2473', 'name' => 'Quintas Ibero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2502', 'name' => 'Residencial Cumbres', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2739', 'name' => 'Campiñas de Iberia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2740', 'name' => 'Real del Nogalar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2742', 'name' => 'La Ciénega', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2743', 'name' => 'Residencial Senderos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2745', 'name' => 'Ampliación Senderos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2952', 'name' => 'La Arboleda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3025', 'name' => 'Residencial los Fresnos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3027', 'name' => 'Magisterio Iberoamericana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3031', 'name' => 'Residencial Galerías', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27019', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1011', 'name' => 'Ciudad Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27020', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1012', 'name' => 'Abastos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1013', 'name' => 'Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27023', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0052', 'name' => 'Puerto Cielo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0060', 'name' => 'Villa de las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2500', 'name' => 'Los Viñedos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3069', 'name' => 'Residencial Palma Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3091', 'name' => 'Cerrada las Palmas II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27029', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1014', 'name' => 'El Capricho', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27030', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1015', 'name' => 'Bocanegra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1016', 'name' => 'Moctezuma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27039', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1017', 'name' => 'Torreón (Francisco Sarabia)', 'zone_type' => 'Urbano', 'settlementtype_id' => '1','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27040', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1018', 'name' => 'Carolinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1020', 'name' => 'Tierra y Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27050', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1021', 'name' => 'Aviación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1022', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1023', 'name' => 'Palmas Aeropuerto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1024', 'name' => 'Salvador Allende', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27053', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0012', 'name' => 'Conjunto Habitacional Oyamel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0050', 'name' => 'Quinta Álamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0051', 'name' => 'Residencial Quintas Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0067', 'name' => 'Cerrada Castello', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1194', 'name' => 'San Luis', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1196', 'name' => 'La Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2497', 'name' => 'Los Virreyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2535', 'name' => 'Quintas Campestre los Laureles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27054', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0018', 'name' => 'Privadas de Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1026', 'name' => 'Valle Revolución', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1027', 'name' => 'Valle Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2450', 'name' => 'La Cortina', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2451', 'name' => 'Ciudad Nazas Polígono 24 A', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2452', 'name' => 'Pedregal del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2508', 'name' => 'El Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2520', 'name' => 'Rincón de los Nogales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2521', 'name' => 'Rincón del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2525', 'name' => 'La Amistad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2791', 'name' => 'Hacienda la Noria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3039', 'name' => 'Chapultepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3042', 'name' => 'El Kiosco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3051', 'name' => 'Parque Industrial la Amistad', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '3072', 'name' => 'Ciudad Nazas Polígono 24', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3073', 'name' => 'Quintas del Nazas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3079', 'name' => 'Residencial Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3238', 'name' => 'Villas Centenario', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3719', 'name' => 'Veredas de Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27055', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1028', 'name' => 'La Mina', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27056', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1029', 'name' => 'Elsa Hernández de las Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2513', 'name' => 'Villas Saltillo 400', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27057', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1030', 'name' => 'Miguel de La Madrid', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3268', 'name' => 'Residencial Santiago', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27058', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'Los Almendros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0025', 'name' => 'Los Almendros II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0030', 'name' => 'Valle de los Almendros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0031', 'name' => 'Desarrollo Ciudad Nazas San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
		['key' => '0049', 'name' => 'Puerta de Hierro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0063', 'name' => 'Lomas de las Etnias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1031', 'name' => 'San Antonio de los Bravos', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2447', 'name' => 'Quintas San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2449', 'name' => 'Rincón San Salvador', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2656', 'name' => 'Residencial las Etnias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2657', 'name' => 'Jardines las Etnias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2950', 'name' => 'Los Portones', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2951', 'name' => 'Las Lomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27059', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1032', 'name' => 'Fidel Velázquez', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27060', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1019', 'name' => 'San Marcos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1034', 'name' => 'Nuevo Torreón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27070', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3101', 'name' => 'Residencial Rincón del Desierto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27073', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0026', 'name' => 'Toledo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0064', 'name' => 'Rincón Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1192', 'name' => 'La Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2701', 'name' => 'Loma Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27080', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1036', 'name' => 'Gustavo Díaz Ordaz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1037', 'name' => 'Felipe Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27083', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2453', 'name' => 'Rincón de las Nóas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2454', 'name' => 'Valles del Nazas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2455', 'name' => 'Residencial del Nazas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2491', 'name' => 'José de las Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2493', 'name' => 'Quintas Laguna', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2494', 'name' => 'Ampliación Valles del Nazas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2644', 'name' => 'Ciudad Nazas Polígono 27', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2645', 'name' => 'Ciudad Nazas Polígono 30', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2646', 'name' => 'Joyas del Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27084', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1038', 'name' => 'Las Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2456', 'name' => 'Residencial el Secreto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27085', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0059', 'name' => 'Villa California', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1039', 'name' => 'Residencial las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1901', 'name' => 'San Felipe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2306', 'name' => 'Nueva Villas California', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2660', 'name' => 'Horizonte', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3049', 'name' => 'FOVISSSTE Nueva California', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3050', 'name' => 'INFONAVIT Nueva California', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27086', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Las Aves', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'Villas de la Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'Villas de San Ángel III', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0017', 'name' => 'Los Ciruelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0024', 'name' => 'Las Puertas del Desierto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0027', 'name' => 'Privadas de Allende', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0033', 'name' => 'Altaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1040', 'name' => 'Oscar Flores Tapia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3044', 'name' => 'Ex Hacienda la Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3053', 'name' => 'La Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3054', 'name' => 'Ampliación la Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3085', 'name' => 'San Diego', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3186', 'name' => 'Villas de San Ángel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3192', 'name' => 'Villas Diamante', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '4243', 'name' => 'El Castaño', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27087', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Quintas los Nogales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'Veredas de la Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'Rincón de la Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'Villas del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0028', 'name' => 'Quintas del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0044', 'name' => 'Cerrada Laureles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0057', 'name' => 'Terra Bella', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0061', 'name' => 'Viñedos de la Vega', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1041', 'name' => 'Amistad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1738', 'name' => 'Sol de Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2532', 'name' => 'Sol de Oriente III', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2705', 'name' => 'Jardines Universidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2706', 'name' => 'Joyas del Desierto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2719', 'name' => 'Viñedos de la Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2720', 'name' => 'Villas de la Huerta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2941', 'name' => 'Villas del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2942', 'name' => 'Joyas de Torreón', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2943', 'name' => 'Villas Universidad Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2944', 'name' => 'Villas Universidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2947', 'name' => 'Recintos Villa Universidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2948', 'name' => 'San Eduardo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2949', 'name' => 'Quintas Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3077', 'name' => 'Real del Sol I', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3078', 'name' => 'Real del Sol II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3092', 'name' => 'Joyas del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27088', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1042', 'name' => 'Plan de San Luis', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3026', 'name' => 'Residencial Portones Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3070', 'name' => 'Pequeña Zona Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27089', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1044', 'name' => 'Nueva California', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27090', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1046', 'name' => 'Aquiles Serdán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1047', 'name' => 'Cerro de la Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1049', 'name' => 'Martínez Adame', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27096', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1050', 'name' => 'Torreón Viejo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27098', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1051', 'name' => '20 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27100', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0053', 'name' => 'Residencial Paraíso del Nazas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1052', 'name' => 'El Tajito', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1053', 'name' => 'Granjas San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1054', 'name' => 'Nuevo San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1055', 'name' => 'San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3034', 'name' => 'Villa San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27103', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3006', 'name' => 'Club de Golf los Azulejos', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3721', 'name' => 'Jesús María Echavarría [Recreativo]', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27104', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0038', 'name' => 'El Tajito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1056', 'name' => 'Palmas San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27105', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0032', 'name' => 'La Vinícola Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0035', 'name' => 'San Marino', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0062', 'name' => 'El Cardenchal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0068', 'name' => 'Villa Frondoso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1878', 'name' => 'Residencial las Isabeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2442', 'name' => 'Villa Florida', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2472', 'name' => 'Las Villas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2641', 'name' => 'Santa Bárbara', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2642', 'name' => 'Las Quintas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2643', 'name' => 'Residencial Frondoso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2937', 'name' => 'Cipreses', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2938', 'name' => 'Villas Santorini', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2939', 'name' => 'Quintas del Desierto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2940', 'name' => 'Country Frondoso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27106', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0055', 'name' => 'Hacienda San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1059', 'name' => 'San Luciano', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2429', 'name' => 'Hacienda del Rosario', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2522', 'name' => 'Villas las Margaritas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2636', 'name' => 'Ricardo Flores Magón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2640', 'name' => 'Residencial Ibero', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2936', 'name' => 'Villa Romana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27107', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0020', 'name' => 'Almeras', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0069', 'name' => 'La Rúa Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3008', 'name' => 'El Campanario', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3010', 'name' => 'El Ranchito', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3013', 'name' => 'La Muralla', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3748', 'name' => 'Las Moras', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3753', 'name' => 'Marsella', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27108', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0036', 'name' => 'Las Acacias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1211', 'name' => 'La Unión', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2440', 'name' => 'Rincón San Ángel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27110', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0019', 'name' => 'Residencial los Llanos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0037', 'name' => 'Prolongación los Nogales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0046', 'name' => 'Jacarandas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1060', 'name' => 'INFONAVIT Alamedas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1061', 'name' => 'Jacarandas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1062', 'name' => 'Villa Jacarandas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2443', 'name' => 'Nueva Laguna Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2444', 'name' => 'Nueva Laguna Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2445', 'name' => 'Universidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2501', 'name' => 'Paraíso del Nazas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27119', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1064', 'name' => 'El Roble', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27120', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1066', 'name' => 'Leandro Rovirosa Wade', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1067', 'name' => 'Los Nogales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3022', 'name' => 'Leandro Rovirosa Wade', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27130', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1068', 'name' => 'Las Margaritas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1070', 'name' => 'Villa Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27140', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1072', 'name' => 'Los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1073', 'name' => 'Nueva los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3011', 'name' => 'FOVISSSTE Nueva los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27148', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1074', 'name' => 'Los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27150', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1075', 'name' => 'Esparza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1076', 'name' => 'Nazario Ortíz Garza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27159', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1077', 'name' => 'Eugenio Aguirre Benavides', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27160', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1078', 'name' => 'Francisco Villa Poniente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1079', 'name' => '28 de Abril', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27167', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1080', 'name' => 'Arenal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27168', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1081', 'name' => 'Cuauhtémoc', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27170', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1082', 'name' => 'Ana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1083', 'name' => 'Moderna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27180', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1084', 'name' => 'Nueva Rosita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27190', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1086', 'name' => 'Maclovio Herrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27199', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1087', 'name' => 'Plan de Ayala', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27200', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1088', 'name' => 'Torreón Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27210', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1090', 'name' => 'Antigua Aceitera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1091', 'name' => 'Vencedora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27217', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1092', 'name' => 'José López Portillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27220', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1095', 'name' => 'Luis Echeverría Álvarez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1096', 'name' => 'Nueva Aurora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27228', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1097', 'name' => 'Jesús María del Bosque Rodríguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27229', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1098', 'name' => 'Monumental Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27230', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1099', 'name' => 'Lucio Blanco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1100', 'name' => 'Miguel Alemán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27240', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1101', 'name' => 'Ferrocarrilera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1103', 'name' => 'Jardines de California', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2468', 'name' => 'Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27250', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1104', 'name' => 'Residencial Campestre la Rosita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3028', 'name' => 'Palmas la Rosita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3037', 'name' => 'Villas la Rosita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27258', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1105', 'name' => 'Ampliación la Rosita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1106', 'name' => 'Roma', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2762', 'name' => 'Residencial Saulo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27260', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0047', 'name' => 'Los Portales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1108', 'name' => 'Los Ángeles Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3043', 'name' => 'Ex Hacienda Antigua los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27265', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1110', 'name' => 'Ex Hacienda los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1936', 'name' => 'Casa Blanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27266', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1111', 'name' => 'Residencial la Rosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1112', 'name' => 'Villas Residenciales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27267', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1113', 'name' => 'Rincón la Rosita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3048', 'name' => 'FOVISSSTE la Rosita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3074', 'name' => 'Quinta Isabella', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3080', 'name' => 'Rincón Aurora', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27268', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1114', 'name' => 'Torreón Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2510', 'name' => 'Florida Blanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27269', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1115', 'name' => 'Ampliación FOVISSSTE la Rosita', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27270', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1116', 'name' => 'División del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1117', 'name' => 'Las Flores Cooperativa Habitacional', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1118', 'name' => 'PROVITEC', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1911', 'name' => 'Lucio Cabañas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2457', 'name' => 'Villas del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2458', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2459', 'name' => 'Britania', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2469', 'name' => 'Nueva Corona', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2470', 'name' => 'Plaza Jumbo', 'zone_type' => 'Urbano', 'settlementtype_id' => '26','zipcode_id' => $idZip],
		['key' => '2512', 'name' => 'Rincón del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2661', 'name' => 'Santa Bárbara', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2662', 'name' => 'Residencial del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2663', 'name' => 'Jesús Garcia Corona', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3045', 'name' => 'Ex Hacienda la Merced', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27272', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1120', 'name' => 'Rincón de la Hacienda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1121', 'name' => 'Villas de la Hacienda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2460', 'name' => 'Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2462', 'name' => 'Sección 38', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2466', 'name' => 'Residencial las Misiones', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2488', 'name' => 'La Orquídea', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2489', 'name' => 'Parque Industrial Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2490', 'name' => 'Parque Industrial Lajat', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2665', 'name' => 'Residencial Tecnológico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27273', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1122', 'name' => 'Lomas del Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27274', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2461', 'name' => 'Montebello', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2619', 'name' => 'Lindavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2664', 'name' => 'Residencial del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3038', 'name' => 'Cerrada Esmeralda Montebello', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27275', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1201', 'name' => 'El Águila', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1209', 'name' => 'Campo Militar la Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '29','zipcode_id' => $idZip],
		['key' => '1917', 'name' => 'Los Sauces', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27276', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1125', 'name' => 'Carmen Romano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1126', 'name' => 'La Hacienda Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1127', 'name' => 'La Merced', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1918', 'name' => 'La Merced II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1937', 'name' => 'Residencial la Hacienda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27277', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0021', 'name' => 'Campiñas Romanas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'Perla del Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0034', 'name' => 'Moretto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0042', 'name' => 'Cerrada California', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0070', 'name' => 'Arezzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1129', 'name' => 'Valle Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2311', 'name' => 'Monte Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2515', 'name' => 'Campo Nuevo de Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2647', 'name' => 'Cerrada las Flores II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2648', 'name' => 'Los Periodistas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2649', 'name' => 'Latinoamericano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2650', 'name' => 'Zaragoza Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2651', 'name' => 'La Rosita', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2756', 'name' => 'Villas de las Perlas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3040', 'name' => 'Condominios Punta Diamante', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3046', 'name' => 'Ex Hacienda la Perla', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3068', 'name' => 'Nueva Provincia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3071', 'name' => 'Perla del Mar del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3088', 'name' => 'Villas Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3089', 'name' => 'Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3158', 'name' => 'Hacienda Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3182', 'name' => 'Rincón del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3185', 'name' => 'Condominio los Agaves', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3235', 'name' => 'Quintas la Perla', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27278', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1130', 'name' => 'Parque Industrial las Américas', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27279', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1131', 'name' => 'Luis Horacio Salinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27280', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1132', 'name' => 'Eduardo Guerra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27287', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1133', 'name' => 'Narciso Mendoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27289', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1135', 'name' => 'Hogares Ferrocarrileros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27290', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1137', 'name' => 'Fuentes del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1138', 'name' => 'Ampliación Fuentes del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1139', 'name' => 'La Fuente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27293', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'Los Monasterios', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0045', 'name' => 'Eduardo Olmos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1048', 'name' => 'Ejido la Perla', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1197', 'name' => 'La Perla', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3065', 'name' => 'Los Arenales', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3086', 'name' => 'Santa Sofía', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27294', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'Prados del Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1141', 'name' => 'Santa Elena', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1928', 'name' => 'Santa Anita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1932', 'name' => 'Quinta la Merced', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2463', 'name' => 'Rincón de la Merced', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2465', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2477', 'name' => 'El Oasis', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2480', 'name' => 'Residencial los Cedros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2481', 'name' => 'Rogelio Montemayor', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2486', 'name' => 'María Mercado de López Sánchez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2487', 'name' => 'Mayrán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27295', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1142', 'name' => 'Cerrada las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27296', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1143', 'name' => 'Las Julietas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1935', 'name' => 'Villas la Merced', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27297', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2523', 'name' => 'Zaragoza Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3041', 'name' => 'Cuca Orona', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3066', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'El Pensador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0004', 'name' => 'Rinconada Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Rosario Villanueva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0058', 'name' => 'Valle la Rosita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1145', 'name' => 'Nueva Merced', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2516', 'name' => 'El Arenal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2517', 'name' => 'Ferropuerto', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2518', 'name' => 'José Luz Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27298', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1146', 'name' => 'Valle Dorado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27299', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1147', 'name' => 'Bellavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2464', 'name' => 'El Obispado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2524', 'name' => '5 de Febrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27300', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1148', 'name' => 'Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27309', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1149', 'name' => 'Vista Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27310', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1151', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27320', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1154', 'name' => 'La Constancia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1155', 'name' => 'Durangueña', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27329', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1156', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27330', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1157', 'name' => 'Caleras Martínez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1158', 'name' => 'Jacobo Meyer', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27338', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1160', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27340', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1161', 'name' => 'Caleras Solares', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1162', 'name' => 'San Joaquín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27349', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1163', 'name' => 'San Carlos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27350', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1164', 'name' => 'Compresora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1165', 'name' => 'La Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1166', 'name' => 'Torreón y Anexas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27357', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1167', 'name' => 'Nuevo México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27360', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1168', 'name' => 'José Ramírez Mijares', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1169', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1170', 'name' => 'Primera Rinconada de la Unión', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1171', 'name' => 'Segunda Rinconada de la Unión', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2475', 'name' => 'Buenos Aires', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27364', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1172', 'name' => 'Camilo Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27368', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1174', 'name' => 'Polvorera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27370', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1175', 'name' => 'Metalúrgica', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1176', 'name' => 'Primero de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1177', 'name' => 'Zacatecas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27376', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1178', 'name' => 'Francisco I Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2478', 'name' => 'Diana María Galindo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2479', 'name' => 'Nueva Creación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27377', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1179', 'name' => 'Justo Sierra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27380', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1180', 'name' => 'Braulio Fernández Aguirre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1181', 'name' => 'Vicente Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3005', 'name' => 'Caleras de la Laguna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27390', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1182', 'name' => 'Las Luisas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1184', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2519', 'name' => 'Las Brisas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27397', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1186', 'name' => 'La Dalia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3052', 'name' => 'La Dalia Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27399', 'locality' => 'Torreón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1189', 'name' => 'Santiago Ramírez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27400', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1193', 'name' => 'San Agustín', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1195', 'name' => 'Santa Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3083', 'name' => 'San Armando', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3759', 'name' => 'Noria Cuatro (La Joya)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27403', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3734', 'name' => 'La Joyita (Recreativo la Hacienda)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3746', 'name' => 'La Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27405', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3692', 'name' => 'Braña [Granja]', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3693', 'name' => 'Braulio Fernández Aguirre (Providencia)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3699', 'name' => 'Cruz Colunga', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3726', 'name' => 'La Barranca', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3730', 'name' => 'La Cuchilla', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3764', 'name' => 'Noria la Cinco la Paz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27406', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3696', 'name' => 'Ciudad de los Niños', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3779', 'name' => 'Santa Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27407', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3685', 'name' => 'Amapolas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3686', 'name' => 'Amapolas Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3705', 'name' => 'El Rosario (El Clavel)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3770', 'name' => 'El Cariño (Patricio González Olguín)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3780', 'name' => 'Santa Fe [Granja Porcina]', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3784', 'name' => 'Sector Doce A Santa Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3785', 'name' => 'Kilómetro Doce (Sector Uno)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27410', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1204', 'name' => 'La Partida', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2666', 'name' => 'Anna', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27412', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1207', 'name' => 'La Paz', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27413', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1206', 'name' => 'El Pacífico', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3706', 'name' => 'El Cuatro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3708', 'name' => 'El Doce', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3711', 'name' => 'El Estanque', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27414', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1203', 'name' => 'La Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3697', 'name' => 'Diez de Abril (El Queso)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3740', 'name' => 'La Noria del Perú', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3756', 'name' => 'Monte Alegre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27415', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1202', 'name' => 'El Perú', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1208', 'name' => 'Ricardo Flores Magón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3029', 'name' => 'Providencia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3700', 'name' => 'Diana', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3717', 'name' => 'Lagos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3768', 'name' => 'Nueva la Paz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27416', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1205', 'name' => 'Paso del Águila', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3703', 'name' => 'El Cercado (El Perico)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3757', 'name' => 'Montolleras', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27420', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1210', 'name' => 'Albia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3035', 'name' => 'Villas del Renacimiento', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3684', 'name' => 'Albia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27422', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0023', 'name' => 'Sendas del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1212', 'name' => 'La Concha', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27423', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3709', 'name' => 'El Duraznito (El Ranchito)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3743', 'name' => 'La Polka (Albia Sector Tres)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27425', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3713', 'name' => 'La Cúpula', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3772', 'name' => 'Quinta San Nicolás [Club Hípico]', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3787', 'name' => 'Taller los Azulejos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27426', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3012', 'name' => 'La Conchita Roja', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3690', 'name' => 'Antonio Noriega', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3704', 'name' => 'El Chaparral', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3766', 'name' => 'Noria Sector Dieciocho la Concha (Noria Uno)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3767', 'name' => 'Noria Sector Seis a la Concha', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27430', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1198', 'name' => 'Rancho Alegre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3689', 'name' => 'Antonio Guerrero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3702', 'name' => 'El Águila', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3718', 'name' => 'Residencial Rancho Alegre', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3738', 'name' => 'La Noria (La Rosita)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3786', 'name' => 'Sin Cabeza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27433', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3694', 'name' => 'Campo Sagrado (Los Álvarez) [Establo]', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3710', 'name' => 'El Encino', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3714', 'name' => 'Helguera', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3715', 'name' => 'Enrique Murey García', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3731', 'name' => 'Dos Hermanos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3736', 'name' => 'Mieleras', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3747', 'name' => 'La Sagra', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3749', 'name' => 'Los Álvarez (San Esteban)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3776', 'name' => 'San Esteban', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27434', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1199', 'name' => 'Nuevo Mieleras (La Tres)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3695', 'name' => 'Carroceras', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3712', 'name' => 'El Mostrenco (Euskal)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3733', 'name' => 'La Fortuna', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3755', 'name' => 'Mieleras [Aeropuerto]', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3778', 'name' => 'San Luis', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27435', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3687', 'name' => 'Ampuero (La Arenosa)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3769', 'name' => 'Nueva Unión (San Alberto)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3771', 'name' => 'Quince de Mayo (Las Magdalenas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3781', 'name' => 'Santa Gema', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3788', 'name' => 'Torreón [Club de Caza y Tiro]', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27436', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3732', 'name' => 'La Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27438', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1213', 'name' => 'Jimulco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1214', 'name' => 'Juan Eugenio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1215', 'name' => 'La Flor de Jimulco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1216', 'name' => 'Barreal de Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1218', 'name' => 'La Nueva Colonia (Peralta)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1220', 'name' => 'La Trinidad', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1221', 'name' => 'Jalisco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3691', 'name' => 'Ávila Camacho (El Coronel)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3701', 'name' => 'Doce de Diciembre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3722', 'name' => 'Juan Eugenio Cinco (Cuba)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3723', 'name' => 'Juan Eugenio Cinco (Noria Nueva York)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3724', 'name' => 'Juan Eugenio Número Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3725', 'name' => 'Juan Eugenio Número Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3728', 'name' => 'La Colonia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3744', 'name' => 'La Presa de la Flor', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3761', 'name' => 'Noria de la Sociedad', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3762', 'name' => 'Noria de la Trinidad', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3763', 'name' => 'Noria del Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3775', 'name' => 'El Tejón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3782', 'name' => 'Santa María', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '017', 'name' => 'Matamoros', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27440', 'locality' => 'Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1225', 'name' => 'Matamoros Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1226', 'name' => 'Ejido San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27442', 'locality' => 'Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Baltazar Agüero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'Felipe Zarate', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1228', 'name' => 'Eulalio Gutiérrez Treviño', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1229', 'name' => 'Francisco I. Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1230', 'name' => 'Ignacio Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1231', 'name' => 'José López Portillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1232', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1233', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2160', 'name' => 'Enrique Martínez y Martínez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2163', 'name' => 'Monte Calvario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2164', 'name' => 'Nogal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2165', 'name' => 'Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3997', 'name' => 'La Garcita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4048', 'name' => 'Portal del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '4052', 'name' => 'Jesús Ríos Rueda II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '4055', 'name' => 'Rincón del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27443', 'locality' => 'Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'Gilberto Ordaz Rocha', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0012', 'name' => 'Niños Héroes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1234', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1235', 'name' => 'Galeme', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1236', 'name' => 'Jacinto Argumedo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1237', 'name' => 'José Ayup Tedy', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1238', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2168', 'name' => 'Ampliación José Santos Valdéz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '4050', 'name' => 'Ejidal y Deportiva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '4056', 'name' => 'Rosa Rodríguez de Ordaz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27444', 'locality' => 'Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1239', 'name' => 'Carolinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1240', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1241', 'name' => 'José T Luna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1242', 'name' => '29 de Junio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2166', 'name' => 'Jardines de Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2167', 'name' => 'José Santos Valdéz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2667', 'name' => 'Las Nogaleras', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '4053', 'name' => 'Las Carolinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27445', 'locality' => 'Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1244', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1245', 'name' => 'Manuel Muñoz Olivares', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1246', 'name' => 'Mariano Matamoros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1247', 'name' => 'Oscar González', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27446', 'locality' => 'Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Carlos Salinas de Gortari', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Manuel Muñoz', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1248', 'name' => 'Ejidal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1249', 'name' => 'Hortalizas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1250', 'name' => 'Jesús Ríos Rueda I', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1251', 'name' => 'Rosalinda Ramírez Esquivel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1252', 'name' => 'Sector Tres Ejidal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2159', 'name' => 'Valle Hermoso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27447', 'locality' => 'Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1253', 'name' => 'Andalucía', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1254', 'name' => 'Año de Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1255', 'name' => 'El Chalet', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1257', 'name' => 'Ferrocarril', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1258', 'name' => 'Las Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27448', 'locality' => 'Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Ladrillera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1259', 'name' => 'Aureliano Barajas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1260', 'name' => 'Maravillas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1261', 'name' => 'Santa Mónica', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1262', 'name' => 'Vega de Marrufo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '4054', 'name' => 'Residencial Punta Laguna', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '4057', 'name' => 'Villas Santa Cecilia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27449', 'locality' => 'Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => '21 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0013', 'name' => 'Nuevo Matamoros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1263', 'name' => 'Jesús Aguilera Luna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1264', 'name' => 'Ejido Santo Tomás', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2158', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2161', 'name' => 'Matamoros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '4049', 'name' => 'Residencial Lumbalca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '4051', 'name' => 'Rancho Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27450', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'El Fénix', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1266', 'name' => 'San Antonio del Coyote', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27452', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1272', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3979', 'name' => 'El Tejabán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3989', 'name' => 'Guadalupe [Establo]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27453', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1267', 'name' => 'Los Ángeles', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1275', 'name' => 'La Luz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3958', 'name' => 'El Cinco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4001', 'name' => 'La Libertad', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27454', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1265', 'name' => 'Noria Número Dos del Ejido Buen Abrigo (La Selva)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1281', 'name' => 'Granada', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1282', 'name' => 'Solima', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1283', 'name' => 'Atalaya', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3948', 'name' => 'Corona', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3961', 'name' => 'El Coyote', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3972', 'name' => 'El Milagro de Fresneo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3988', 'name' => 'Granada Noria Setecientos Sesenta y Siete', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27455', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1280', 'name' => 'El Cambio', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27456', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1278', 'name' => 'Maravillas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1284', 'name' => 'Monte Alegre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3096', 'name' => 'Residencial 21', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3945', 'name' => 'Montolleras', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3985', 'name' => 'Gracielas A', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3999', 'name' => 'La Gavia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4011', 'name' => 'Las Palmas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4016', 'name' => 'Maravillas [Establo]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4022', 'name' => 'Nidia Edith', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4027', 'name' => 'Otto el Cambio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4030', 'name' => 'Rancho de Afuera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27457', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'Noria Santa Ana del Pilar Sector Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Entrada al Cuije', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1268', 'name' => 'Purísima', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1269', 'name' => 'Santa Ana del Pilar', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1270', 'name' => 'El Cuije', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1276', 'name' => 'El Fénix [Establo]', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1277', 'name' => 'Escuadrón Doscientos Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1279', 'name' => 'Hormiguero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3932', 'name' => 'Albia [Granja]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3933', 'name' => 'Aldali (La Aurora)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3967', 'name' => 'El Fuerte', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4005', 'name' => 'La Noria Tres', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4034', 'name' => 'San Gerardo [Granja]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4040', 'name' => 'Santa Anita [Granja]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27458', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1222', 'name' => 'Compuertas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1274', 'name' => 'Veinte de Noviembre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4024', 'name' => 'Noria de Compuertas (El Ranchito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4039', 'name' => 'El Pilar (Vigo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27459', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1271', 'name' => 'El Pilar', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27460', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Noria Número Tres Ejido San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0016', 'name' => 'Cerrada Girasoles', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1223', 'name' => 'El Consuelo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1224', 'name' => 'La Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3934', 'name' => 'Andalucía', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3956', 'name' => 'El Carmen', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3960', 'name' => 'El Consuelo [Establo]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3965', 'name' => 'Breka (Sector Cuatro Andalucía)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3970', 'name' => 'El Loco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3971', 'name' => 'El Loco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3977', 'name' => 'El Parreño', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27463', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1285', 'name' => 'Solís', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1286', 'name' => 'Vicente Guerrero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1288', 'name' => 'Corona', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1289', 'name' => 'Vizcaya', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3938', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27464', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3954', 'name' => 'El Cariño Veinte', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3990', 'name' => 'Ignacio Zaragoza (La Crisis)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3992', 'name' => 'La Azufrera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4018', 'name' => 'La Niña', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27465', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1290', 'name' => 'La Escondida', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3976', 'name' => 'El Parreño', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4010', 'name' => 'Las Margaritas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4013', 'name' => 'Los Alfredos Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4021', 'name' => 'Morelos Dos (Bilbao)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4025', 'name' => 'Nueva Soledad', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4047', 'name' => 'Veintiuno de Marzo (La Reforma)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27466', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1291', 'name' => 'Benavides (Morelos Uno)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3941', 'name' => 'Báscula la Sandillita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3942', 'name' => 'Campo Espiguero del Cuate', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3943', 'name' => 'Las Palmas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3944', 'name' => 'Las Carolinas', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3957', 'name' => 'El Cinco (Mariano Matamoros)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3980', 'name' => 'Baracaldo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3996', 'name' => 'La Fortuna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4002', 'name' => 'La Luz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4046', 'name' => 'Torreón (Los Alcohólicos)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27467', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1301', 'name' => 'La Flor de Mayo y la Barca', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3982', 'name' => 'Filipinas (Lampacitos)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3991', 'name' => 'Irlanda', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4015', 'name' => 'Mapulas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4033', 'name' => 'San Felipe Aguanaval', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4036', 'name' => 'San José de los Emilianos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4038', 'name' => 'San Pablo Guelatao', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27468', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1293', 'name' => 'Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3981', 'name' => 'Entronque Congregación Hidalgo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27470', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1295', 'name' => 'Santo Niño Aguanaval', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1300', 'name' => 'Manantial', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3963', 'name' => 'El Dólar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3984', 'name' => 'Fresno del Sur (El Fresno)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4037', 'name' => 'San Julián', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27473', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Hacienda San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'Valle de San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'Veredas de San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3973', 'name' => 'El Olivo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3983', 'name' => 'Hacienda los Olivos', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3998', 'name' => 'La Garcita', 'zone_type' => 'Rural', 'settlementtype_id' => '14','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27474', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1294', 'name' => 'Petronilas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1297', 'name' => 'San Francisco Aguanaval', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1304', 'name' => 'Unión del Barreal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4032', 'name' => 'San Antonio del Alto', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27475', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3940', 'name' => 'Bozanes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3952', 'name' => 'El Bastan', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4000', 'name' => 'La Grulla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4031', 'name' => 'Redención Agraria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4041', 'name' => 'Santa Brígida', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27476', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1299', 'name' => 'El Sacrificio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1303', 'name' => 'El Refugio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3935', 'name' => 'Asturias', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3946', 'name' => 'Congregación Sacrificio (El Dólar)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3947', 'name' => 'Corea', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3959', 'name' => 'El Consuelo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4009', 'name' => 'Las Enramadas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4035', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27477', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1296', 'name' => 'Tierra Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1298', 'name' => 'Noacan', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3993', 'name' => 'La Batalla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4007', 'name' => 'La Pola', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4012', 'name' => 'Las Palomas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4023', 'name' => 'Noacan (No que No)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4026', 'name' => 'Nuevo Mieleras (La Tres)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4042', 'name' => 'Santa Cecilia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27478', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3950', 'name' => 'Doña Margarita (Monclova) [Establo]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3955', 'name' => 'El Carmen', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3974', 'name' => 'El Pacífico', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4020', 'name' => 'Monte Carlo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27479', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '4006', 'name' => 'La Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '036', 'name' => 'Viesca', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27480', 'locality' => 'Viesca', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Paso del Águila', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1305', 'name' => 'Viesca Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2153', 'name' => 'La Tapatía', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2154', 'name' => 'Monterrey', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2155', 'name' => 'La Ermita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2156', 'name' => 'Oscar Flores Tapia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27484', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1307', 'name' => 'Flor de Mayo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27485', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Las Margaritas (Casco)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1308', 'name' => 'Venustiano Carranza (Hacienda de Hornos)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1309', 'name' => 'La Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1312', 'name' => 'Villa de Bilbao', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27486', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1313', 'name' => 'Boquilla de las Perlas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1314', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27487', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0012', 'name' => 'Poanas Margaritas (Margaritas Dos)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1315', 'name' => 'Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1316', 'name' => 'Las Margaritas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1317', 'name' => 'Saucillo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1318', 'name' => 'Tierra y Libertad', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27488', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1319', 'name' => 'Buenavista', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1320', 'name' => 'Gabino Vázquez (San Luis)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1321', 'name' => 'Nuevo Margaritas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1322', 'name' => 'Nueva Reynosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1323', 'name' => 'San Juan de Villanueva (Villanueva)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1324', 'name' => 'San Manuel', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27489', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'La Rosita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'Santa Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0004', 'name' => 'Santa María Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'Alto del Palomillo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'La Noria (El Control)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'Juan Antonio del Sur (Sector Gilita Ocho)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0013', 'name' => 'La Siete (Laguna Seca)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1325', 'name' => 'Gilita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1326', 'name' => 'Gregorio García (El Taconazo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1327', 'name' => 'Ignacio Zaragoza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1328', 'name' => 'La Ventana', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1329', 'name' => 'Mieleras', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1330', 'name' => 'Río Escondido', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1331', 'name' => 'Rosita Cuatro A (Noria los Valero)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1332', 'name' => 'Tejabán de la Rosita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1333', 'name' => 'Tejabán del Esfuerzo (El Esfuerzo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27490', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1334', 'name' => 'La Mancha [Estación]', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
		['key' => '1335', 'name' => 'San José del Aguaje', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27494', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'Cinco de Mayo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'La Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1336', 'name' => 'Bajío de Ahuichila', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27498', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1340', 'name' => 'Tanque Aguilereño (El Tanque)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'La Presa de Yenti', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1339', 'name' => 'Darías', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27499', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1342', 'name' => 'Punta de Santo Domingo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '023', 'name' => 'Ocampo', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27500', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1345', 'name' => 'Ocampo', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27502', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0029', 'name' => 'Altamar', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0034', 'name' => 'Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0042', 'name' => 'San Miguel (El Papalote)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0064', 'name' => 'La Vinata', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0071', 'name' => 'Peñalba', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0080', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0105', 'name' => 'El Barrón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1353', 'name' => 'La Morita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27505', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0047', 'name' => 'San Antonio de la Tinaja', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0066', 'name' => 'La Bolsa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0078', 'name' => 'La Trinidad', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0110', 'name' => 'Los Corrales', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27507', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0018', 'name' => 'El Mimbre', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0083', 'name' => 'Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0084', 'name' => 'Santo Niño', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1348', 'name' => 'Nuevo Reforma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27508', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'Agua Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'Pedro Prieto', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0024', 'name' => 'El Rescalco (Las Cuatas)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0037', 'name' => 'Las Marías', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0058', 'name' => 'Los Portales', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0106', 'name' => 'Las Morenas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1349', 'name' => 'La Azufrosa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1350', 'name' => 'Los Laureles', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27510', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0015', 'name' => 'Jaboncillos (Jaboncillos Chico)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0028', 'name' => 'Los Álamos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0086', 'name' => 'Taraíses', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0120', 'name' => 'Entronque San Vicente', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0129', 'name' => 'El Mensajero', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1351', 'name' => 'La Unión y el Olán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27511', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0059', 'name' => 'La Salada', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1352', 'name' => 'San Vicente y Zacatonal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27514', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0065', 'name' => 'La Agüita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0123', 'name' => 'Las Norias', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1354', 'name' => 'San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27515', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0012', 'name' => 'Buena Vista', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'El Veinte', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0035', 'name' => 'El Jardín', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0049', 'name' => 'Santa Anita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0067', 'name' => 'Agua del Caballo (La Pila)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0070', 'name' => 'Agua de los Frijoles', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0130', 'name' => 'Las Lupes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1355', 'name' => 'Jaboncillos (Jaboncillos Grande)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27516', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1356', 'name' => 'Piedritas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27517', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0022', 'name' => 'Cuesta de Roque', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0043', 'name' => 'La Parcela', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0074', 'name' => 'El Pino', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0097', 'name' => 'El Chupadero Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0124', 'name' => 'El Revolcadero', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0125', 'name' => 'Miguel Magallanes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0126', 'name' => 'La Boquillita (Los Hinojo)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1357', 'name' => 'Álamos de Márquez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1358', 'name' => 'La Salada (La Salada Grande)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1366', 'name' => 'Santa Fe del Pino (La Morita)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27518', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Boquillas del Carmen', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0016', 'name' => 'Los Llanos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0025', 'name' => 'Ojo Caliente', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0121', 'name' => 'El Ranchito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1359', 'name' => 'Boquillas del Carmen (Norias)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27520', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0079', 'name' => 'San Ildefonso (El Caballo)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0115', 'name' => 'Soledad', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1360', 'name' => 'Acebuches', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27521', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0033', 'name' => 'Cerritos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0036', 'name' => 'Juan de la Cruz Borrego', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1361', 'name' => 'El Guaje', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27522', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0057', 'name' => 'Las Burras', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27523', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'Las Margaritas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0089', 'name' => 'Media Luna', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1365', 'name' => 'San Guillermo Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27524', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0031', 'name' => 'El Bajío', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0082', 'name' => 'El Granizo (Santa María de los Ángeles)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0094', 'name' => 'San Enrique (El Papalote)', 'zone_type' => 'Rural', 'settlementtype_id' => '14','zipcode_id' => $idZip],
		['key' => '0099', 'name' => 'El Granizo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27525', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'La Sabina', 'zone_type' => 'Rural', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '0048', 'name' => 'San Enrique (El Kelly)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0104', 'name' => 'La Esmeralda', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0116', 'name' => 'Fátima', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0117', 'name' => 'Aries', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27526', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0020', 'name' => 'Peña Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'Noche Buena', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0127', 'name' => 'El Sauz', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0128', 'name' => 'El Girasol', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1362', 'name' => 'La Gloria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1363', 'name' => 'La Rosita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1375', 'name' => 'La Fortuna', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27527', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'Chapala', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0050', 'name' => 'El Centenario (Buenavista)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0076', 'name' => 'Nueva Italia (La Reyna)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1364', 'name' => 'Las Eutimias', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27528', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0068', 'name' => 'Morteros', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0069', 'name' => 'Santa Salomé', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27529', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0103', 'name' => 'El Polko', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0118', 'name' => 'El Rincón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0119', 'name' => 'El Seco', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1367', 'name' => 'El Milagro (El Polko)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27530', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0051', 'name' => 'Ventanas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1368', 'name' => 'Charcos de Figueroa (Falcón)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1378', 'name' => 'El Socorro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27531', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0032', 'name' => 'La Boquilla (El Cascajo)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0041', 'name' => 'La Pista', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0077', 'name' => 'La Rueda', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0100', 'name' => 'Santa Teresa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1369', 'name' => 'La Encantada (La Prieta)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27532', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0014', 'name' => 'La Fortuna (Fortuna de Arocha)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0045', 'name' => 'La Presa de María Rebeca', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0098', 'name' => 'Las Pulgas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27533', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'Santa Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0027', 'name' => 'Agua Chica', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0063', 'name' => 'San Antonio de los Álamos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0114', 'name' => 'El Mirador', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1370', 'name' => 'El Cenzontle (El Chonte)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27534', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0061', 'name' => 'Claveinas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1347', 'name' => 'Nuevo Peñalba (El Águila)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1371', 'name' => 'Norias del Caballo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27535', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0038', 'name' => 'Nuevo Gabino Vázquez', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0075', 'name' => 'El Rayo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1372', 'name' => 'Santa Elena Uno (Santa Elena)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1373', 'name' => 'Santa Elena Dos (San Josecito)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27536', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0085', 'name' => 'San Lorenzo (El Revés)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1346', 'name' => 'La Mora', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27537', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1374', 'name' => 'El Alicante', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27540', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0030', 'name' => 'Los Americanos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0060', 'name' => 'Laguna el Triguillo (Los Garay)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0090', 'name' => 'Vicente Guerrero', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0091', 'name' => 'Palitos Blancos (La Mena)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1376', 'name' => 'El Oro [Estación]', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27543', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0026', 'name' => 'Palmira', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0052', 'name' => 'La Marsella', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0072', 'name' => 'Vicente Suárez (Jericó)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0073', 'name' => 'Puertecitos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0092', 'name' => 'El Bandido', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0093', 'name' => 'El Fuste', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0096', 'name' => 'Villanueva (Macheros)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0111', 'name' => 'La Bayoneta', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0135', 'name' => 'Las Ánimas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27544', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0087', 'name' => 'Las Flores', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0088', 'name' => 'General Gregorio A. García (El Socorro)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0107', 'name' => 'La Leona', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0112', 'name' => 'El Albur', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0113', 'name' => 'El Espejo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27545', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Chula Vista', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'Laguna del Rey (Químicas del Rey)', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0004', 'name' => 'INFONAVIT Perla del Desierto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'La Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Guadalupe del Rey', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0044', 'name' => 'El Porvenir (El Cuatro)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0062', 'name' => 'León Cerda (La Rinconada)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0109', 'name' => 'El Rey', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0131', 'name' => 'La Piedra', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1381', 'name' => 'Salinas del Rey Norte (Salinas del Rey)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27546', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0039', 'name' => 'La Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0053', 'name' => 'Magueyal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0054', 'name' => 'La Curva', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0055', 'name' => 'La Víbora', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0056', 'name' => 'Matrimonio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0108', 'name' => 'Laguna de la Leche (La Pompa)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0122', 'name' => 'Santa María', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1379', 'name' => 'Barranquitas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27547', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0046', 'name' => 'Cañón de Rosenda', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0132', 'name' => 'Fernando Llamas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0133', 'name' => 'Charretera', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0134', 'name' => 'Cerro de la Madera', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1380', 'name' => 'La Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27548', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0040', 'name' => 'Palos Blancos (La Pasta)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0081', 'name' => 'San Pedro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0095', 'name' => 'El Trozado', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0101', 'name' => 'Casa Blanca (El Gato)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0102', 'name' => 'La Puerta', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '021', 'name' => 'Nadadores', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27550', 'locality' => 'Nadadores', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1382', 'name' => 'Nadadores Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1981', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27560', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1384', 'name' => 'Estación San José del Águila', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27565', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1386', 'name' => 'Nuevo Poblado de Nadadores (El Huizachal)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27570', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1388', 'name' => 'Las Flores (Estación Celemania)', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27575', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1387', 'name' => 'Villa de Nadadores', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27579', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1389', 'name' => 'San Isidro (El Coyote)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27580', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1390', 'name' => 'El Gato', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27586', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Santiago y Paso de la Morita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'Alfredo V. Bonfil', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27587', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1391', 'name' => 'Trincheras', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27588', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1392', 'name' => 'Nuevo Poblado de Sardinas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '034', 'name' => 'Sierra Mojada', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27600', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1394', 'name' => 'Sierra Mojada', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27601', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0046', 'name' => 'Licenciado Adolfo López Mateos (Jesús María)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0049', 'name' => 'San Antonio (Los Duraznos)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1395', 'name' => 'El Volcán (Los Muchachos)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27602', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Los Comanches', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1396', 'name' => 'San Vicente', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27603', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'El Cariño (Santa Ana)', 'zone_type' => 'Urbano', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'El Espejo', 'zone_type' => 'Urbano', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'La Gloria', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'Llanos Blancos', 'zone_type' => 'Urbano', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0027', 'name' => 'San Juan de Ramiro Aponte', 'zone_type' => 'Urbano', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0030', 'name' => 'Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0052', 'name' => 'San Pedro', 'zone_type' => 'Urbano', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0056', 'name' => 'Tierra Blanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1397', 'name' => 'Hércules', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27604', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0054', 'name' => 'Santa Anita (La Parcela)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1398', 'name' => 'La Alcanforada (La Mora)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27605', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'La Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1399', 'name' => 'San José de Carranza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27606', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0012', 'name' => 'La Boquilla', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0029', 'name' => 'San Rafael', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1400', 'name' => 'El Perdido', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27607', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1401', 'name' => 'Cerros de Leija', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27609', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0036', 'name' => 'El Palmo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27610', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0015', 'name' => 'La Parreña', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Leija', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'La Eta', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1403', 'name' => 'La Esmeralda', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27611', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'El Trozado', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27612', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'El Oro Predio la Jarita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1404', 'name' => 'Laguna Colorada', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1405', 'name' => 'San Fernando Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27613', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'Las Marías (La Florida)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'Nueva Era', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0024', 'name' => 'San Bartolo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0025', 'name' => 'San Francisco (La Chanata)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0026', 'name' => 'San Juan', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0031', 'name' => 'Sección Sabaneta (Kilómetro Treinta y Cuatro)', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
		['key' => '0034', 'name' => 'El Colorado', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0037', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0038', 'name' => 'El Refugio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0039', 'name' => 'Erasmo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0051', 'name' => 'San Marcos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0053', 'name' => 'San Salvador (Cerros Prietos)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27614', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0042', 'name' => 'La Luz', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0043', 'name' => 'La Rosita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0044', 'name' => 'La Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0048', 'name' => 'Nuevos Horizontes (San Francisco)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0055', 'name' => 'Sección San Fernando [Estación]', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
		['key' => '1406', 'name' => 'San Isidro de las Norias', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27616', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Diana', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'El Pozo de San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0045', 'name' => 'Las Mariquitas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1407', 'name' => 'La Sabaneta (Tanque Cundo)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27618', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'Eliseo Gutiérrez', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0016', 'name' => 'La Planchada', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'Peña Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27621', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0032', 'name' => 'Vicente Guerrero Uno (Las Lilas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0033', 'name' => 'Ganadera Constitución', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0047', 'name' => 'Mohovano de las Lilas (Santa María)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27622', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'El Cinco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27623', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0035', 'name' => 'El Futuro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1410', 'name' => 'El Carmen', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27624', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'El Granjeno', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0050', 'name' => 'San Juan de Astilleros', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27625', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Salina del Rey (Del Rey Sur)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'Salinas Santa Clara', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1411', 'name' => 'Providencia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27626', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1412', 'name' => 'San José de Madero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27627', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0028', 'name' => 'San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0040', 'name' => 'Guimbalete', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0041', 'name' => 'La Falsa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '007', 'name' => 'Cuatro Ciénegas', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27640', 'locality' => 'Cuatro Ciénegas de Carranza', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1416', 'name' => 'Cuatro Ciénegas de Carranza Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27642', 'locality' => 'Cuatro Ciénegas de Carranza', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1965', 'name' => 'Maldonado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1966', 'name' => 'Palo Blanco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1967', 'name' => 'Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1968', 'name' => 'Siller', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1969', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1970', 'name' => '1ro de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1971', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1972', 'name' => 'Álamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1973', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1974', 'name' => '22 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1979', 'name' => 'San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27643', 'locality' => 'Cuatro Ciénegas de Carranza', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1975', 'name' => '26 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1977', 'name' => 'Elsa Hernández de las Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2974', 'name' => 'Ramón Guevara', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2975', 'name' => 'Las Magdalenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27644', 'locality' => 'Cuatro Ciénegas de Carranza', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1963', 'name' => 'Venustiano Carranza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2973', 'name' => 'Coronel Jesús Carranza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27645', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1418', 'name' => 'El Oso', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27646', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1419', 'name' => 'La Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27650', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1421', 'name' => 'Estación San Juan de Boquillas (San Juan)', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27652', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1422', 'name' => 'La Reforma (La Colonia)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27654', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1427', 'name' => 'San Vicente', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27655', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1423', 'name' => 'El Venado', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1426', 'name' => 'La Vega', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27656', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1424', 'name' => 'Antiguos Mineros del Norte (Santa Tecla)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27657', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Emilio Bichara', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1425', 'name' => 'Nuevo Atalaya (San Marcos)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27660', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1428', 'name' => 'Gabino Vázquez (El Naranjo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27680', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1430', 'name' => 'Tanque Nuevo (El Cinco)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'Cuates de Abajo (Cerros Prietos)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27682', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1431', 'name' => 'Cuates de Australia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27684', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Estanque de León', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'Lucio Blanco (La Pelota)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27689', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1432', 'name' => 'Santa Teresa de Sofía', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27690', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1433', 'name' => 'Estanque de Palomas (Las Palomas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27695', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1434', 'name' => 'Estanque de Norias', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '016', 'name' => 'Lamadrid', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27700', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'El Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'Manuel W González', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'Oscar Flores Tapia', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '1435', 'name' => 'Lamadrid', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27704', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Polka (Estación Polka)', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27720', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1437', 'name' => 'El Marqués de Aguayo (Los Ojos de Adriana)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27739', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1438', 'name' => 'Potrero de Menchaca (Jaime García Sánchez)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '029', 'name' => 'Sacramento', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27750', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Siete de Abril', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1439', 'name' => 'Sacramento', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27755', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'San Felipe', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27758', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1440', 'name' => 'El Chamizal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27760', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1441', 'name' => 'La Atravesada', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '033', 'name' => 'San Pedro', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27800', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1442', 'name' => 'San Pedro Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27804', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1444', 'name' => 'Barrio San Luis', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2999', 'name' => 'Viviendas Populares', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27805', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1445', 'name' => 'Barrio Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27810', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Cerrada San Fernando', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'Cerrada San Javier', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1446', 'name' => 'El Ancora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2241', 'name' => 'Popular el Fénix', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2242', 'name' => 'Ampliación el Fénix', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2243', 'name' => 'Burócratas Municipales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2254', 'name' => 'Raúl Gámez Espinoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2326', 'name' => 'Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27811', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1447', 'name' => 'INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '2236', 'name' => 'Eliseo Mendoza Berrueto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2237', 'name' => 'Los Nogales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27812', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2234', 'name' => 'Altamira', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2249', 'name' => 'Altamira', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2995', 'name' => 'Valle del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27813', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2993', 'name' => 'Villas del América', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2994', 'name' => 'Maura Gómez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2998', 'name' => 'La América', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27820', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1448', 'name' => 'La Trinidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27822', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1450', 'name' => 'Popular San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27823', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3001', 'name' => 'Junta Cívica Francisco I Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27830', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1451', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1452', 'name' => 'Monterrey', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27838', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1453', 'name' => 'Ramos Arizpe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2248', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27839', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1454', 'name' => 'Ampliación Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27840', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1455', 'name' => 'Proletaria Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2240', 'name' => 'Ejido el Ancora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27845', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1456', 'name' => 'El Chamizal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2247', 'name' => 'El Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2251', 'name' => 'Agua Nueva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2253', 'name' => 'Diana Laura Rioja de Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2303', 'name' => 'Ampliación Agua Nueva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3002', 'name' => 'Parque Industrial San Pedro', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27846', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1457', 'name' => 'Aníbal Flores Neira', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27847', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1458', 'name' => 'La Quinta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27848', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1460', 'name' => 'Villa Magisterial los Tulipanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2246', 'name' => 'Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27850', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1462', 'name' => 'Las Rosas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1464', 'name' => 'Barrio Saltillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2245', 'name' => 'El Fénix', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2322', 'name' => 'Las Habas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2323', 'name' => 'Las Margaritas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2996', 'name' => 'Las Rosas Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2997', 'name' => 'El Triángulo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27860', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1466', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1467', 'name' => 'Obrera Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27863', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Villas del Desierto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'Zona Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '3003', 'name' => 'Las Misiones', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27870', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2244', 'name' => 'Los Sauces', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2327', 'name' => 'Francisco I Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3000', 'name' => 'Las Catarinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27880', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1469', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1470', 'name' => 'Barrio de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2239', 'name' => 'Valparaíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27890', 'locality' => 'San Pedro', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1471', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2250', 'name' => 'Las Américas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27940', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1518', 'name' => 'Luchana', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27943', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1532', 'name' => 'El Retiro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1534', 'name' => 'Aquiles Serdán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1551', 'name' => 'El Estribo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1554', 'name' => 'Ricardo Flores Magón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3804', 'name' => 'El Cosaco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3810', 'name' => 'El Ranchito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3842', 'name' => 'La Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3856', 'name' => 'Maravillas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3858', 'name' => 'Marte', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3860', 'name' => 'Mitla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3875', 'name' => 'Pequeña Lote Cuatro Concordia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27944', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1515', 'name' => 'Alejo González (Bilbao)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1523', 'name' => 'La Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1531', 'name' => 'Veinte de Noviembre (Santa Lucía)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1535', 'name' => 'Diez de Mayo (Las Casitas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1536', 'name' => 'Primero de Mayo (Algorta)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1538', 'name' => 'San Rafael de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1539', 'name' => 'Emiliano Zapata (Albia)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1550', 'name' => 'Diez de Mayo (El Chorizo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3790', 'name' => 'Algorta', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3801', 'name' => 'Diez de Mayo (El Grupo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3802', 'name' => 'Diez de Mayo (Los Ramírez)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3819', 'name' => 'Fraba [Lácteos]', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3822', 'name' => 'Grupo Número Tres (Ejido Alejo González)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3848', 'name' => 'Las Carretas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3862', 'name' => 'Noria Algorta Número 2', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3863', 'name' => 'Noria Algorta Número 3', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3865', 'name' => 'La Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3890', 'name' => 'San Francisco de la Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3927', 'name' => 'Luchana Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27945', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1517', 'name' => 'La Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1530', 'name' => 'Sofía de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1537', 'name' => 'Nuevo Mundo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1543', 'name' => 'Santa Ana', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1544', 'name' => 'Vega Larga', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3800', 'name' => 'Cuauhtémoc Cárdenas (Medio Pulmón)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3834', 'name' => 'La Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3872', 'name' => 'La Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3889', 'name' => 'San Carlos de la Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3905', 'name' => 'Santa Ana', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3906', 'name' => 'Santa Ana (Santa Ana de Arriba)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3926', 'name' => 'Tres Estrellas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27946', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1540', 'name' => 'Vigo (Bella Vista)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1541', 'name' => 'Gabino Vázquez (Begoña)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1545', 'name' => 'Lagos de Moreno (Ampueros)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1546', 'name' => 'Félix Ramírez (Gavilanes)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3827', 'name' => 'La Asunción (La Chona)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3880', 'name' => 'Purísima de Rubio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3881', 'name' => 'Purísima de Rubio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3885', 'name' => 'San Alberto', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3886', 'name' => 'San Alberto la Herradura (Archandas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3892', 'name' => 'San Ignacio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3897', 'name' => 'Don José (El Recuerdo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27948', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1516', 'name' => 'Lázaro Cárdenas (Dolores)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1527', 'name' => 'Santa Mónica', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1528', 'name' => 'Estación Santa Teresa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3791', 'name' => 'Pequeña de Urquizo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3793', 'name' => 'Beta Santa Mónica [Sociedad de Producción Rural]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3799', 'name' => 'Agrícola Aquiles Serdán Número Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3807', 'name' => 'El Gatuño', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3814', 'name' => 'Emiliano Zapata (Las Jaulas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3841', 'name' => 'La Noria Número Uno (Lázaro Cárdenas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3852', 'name' => 'Guadalupe Ramírez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3867', 'name' => 'Noria Sector Tres A (Ejido Luchana)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3874', 'name' => 'Parcela Uno de Aquiles Serdán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3878', 'name' => 'El Jacalón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3879', 'name' => 'Presa de Guadalupe (Vida Nueva)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3920', 'name' => 'Sociedad Bellavista (Ejido Luchana)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3925', 'name' => 'El Chubasco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3928', 'name' => 'Vida Nueva (Las Palmas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3929', 'name' => 'Vida Nueva Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27950', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1521', 'name' => 'Urquizo', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1549', 'name' => 'Concordia (La Rosita)', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1555', 'name' => 'La Rosita', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3209', 'name' => 'San Luis de Gurza', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3931', 'name' => 'Doroteo Arango', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27953', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1533', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1548', 'name' => 'Bolívar', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1552', 'name' => 'La Carolina (La Nueva Carolina)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1557', 'name' => 'San Antonio de Gurza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1560', 'name' => 'San Francisco de Gurza (Santa Rosa)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3796', 'name' => 'Carolina del Norte', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3797', 'name' => 'Carolinas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3798', 'name' => 'Charco Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3805', 'name' => 'El Destino de Abajo de San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3812', 'name' => 'El Triángulo (Vicente Vázquez Ontiveros)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3818', 'name' => 'Flores Magón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3820', 'name' => 'Héctor Chapa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3824', 'name' => 'Miguel del Hoyo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3832', 'name' => 'La Estrella y la Barca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3864', 'name' => 'Noria Doroteo Arango', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3866', 'name' => 'El Cristo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3882', 'name' => 'Rafael Padilla Medina (El Olmo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3887', 'name' => 'San Antonio de Gurza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3888', 'name' => 'San Carlos (Las Margaritas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3896', 'name' => 'San Isidro (El Jacalón)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3913', 'name' => 'Santa Rita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27954', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1558', 'name' => 'Tacubaya', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1571', 'name' => 'Buenavista', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1575', 'name' => 'Candelaria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1582', 'name' => 'San Esteban de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1587', 'name' => 'Santa Elena', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1588', 'name' => 'El Triángulo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1593', 'name' => 'Tacuba', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3826', 'name' => 'San Pedro (José Ruiz Velázquez)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3831', 'name' => 'Doña Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3833', 'name' => 'La Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3844', 'name' => 'La Pentalfa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3868', 'name' => 'Nueva Candelaria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3873', 'name' => 'Panamá', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3884', 'name' => 'San Agustín', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3904', 'name' => 'Santa Alicia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3921', 'name' => 'Tacuba', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27955', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1529', 'name' => 'Santa Sofía (Sofía de Abajo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1583', 'name' => 'San Felipe (San Felipe de Purcell)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1584', 'name' => 'San Marcos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1586', 'name' => 'San Rafael de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1589', 'name' => 'Ignacio Zaragoza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3851', 'name' => 'Las Mercedes [Agrícola]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3870', 'name' => 'Nuevo San Juan Bautista', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3900', 'name' => 'San Patricio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3903', 'name' => 'San Salvador (El Despepite)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27956', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1522', 'name' => 'Alejandría', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1570', 'name' => 'Santiago', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3922', 'name' => 'Tacubaya Uno (San José de los Álamos)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27957', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Manuel Samaniego Aguilar', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1520', 'name' => 'San Francisco de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1524', 'name' => 'San Lorenzo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1526', 'name' => 'Santa Eulalia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1562', 'name' => 'Progreso', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3811', 'name' => 'El Retiro Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3840', 'name' => 'La Noria de Progreso', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3854', 'name' => 'Los Arenales (Félix Fernández)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3877', 'name' => 'Pequeña Propiedad Urquizo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3893', 'name' => 'San Ignacio [Establo]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3894', 'name' => 'Los Rebeldes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3895', 'name' => 'San Ignacio Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27958', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1525', 'name' => 'Santa Brígida', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1559', 'name' => 'Reynosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1561', 'name' => 'San Pablo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1566', 'name' => 'San Ignacio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1567', 'name' => 'Gatas Mochas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3794', 'name' => 'Carlos Salinas de Gortari (San Salvador)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3806', 'name' => 'La Ciudadela (El Eucalipto)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3809', 'name' => 'El Porvenir (El Siete)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3813', 'name' => 'El Venado', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3815', 'name' => 'Estrellita del Norte (El Retiro Nuevo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3816', 'name' => 'Estrellita del Norte (Santa María)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3817', 'name' => 'Estrellita del Norte (Santa María)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3830', 'name' => 'La Casa de la Noria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3838', 'name' => 'Santo Tomás', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3861', 'name' => 'Morelos y Pavón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3876', 'name' => 'Santo Tomás', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3899', 'name' => 'San Pablo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3916', 'name' => 'Santo Tomás', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3917', 'name' => 'Santo Tomás (Ernesto Meléndez)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27960', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1553', 'name' => 'El Porvenir de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1563', 'name' => 'El Áncora (La Independencia)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1565', 'name' => 'Patrocinio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1569', 'name' => 'Santa María', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3803', 'name' => 'El Cairo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3849', 'name' => 'Las Margaritas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3850', 'name' => 'Las Margaritas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3853', 'name' => 'Las Pistolas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3901', 'name' => 'San Roque', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3902', 'name' => 'San Roque 2', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3907', 'name' => 'Santa Anita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3908', 'name' => 'Santa Anita Uno (El Jacalón)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3909', 'name' => 'Santa Anita Medio Lote (Gabriel Díaz López)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3911', 'name' => 'Santa María', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27965', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1573', 'name' => 'Nuevo Delicias', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1576', 'name' => 'El Rayo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1577', 'name' => 'El Pinto', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27966', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3857', 'name' => 'Margarita del Norte', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3891', 'name' => 'San Francisco del Valle', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27967', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1572', 'name' => 'Nueva Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27970', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1579', 'name' => 'El Nilo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1580', 'name' => 'Frontera', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1581', 'name' => 'Mayrán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1585', 'name' => 'San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1590', 'name' => 'Cleto', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1591', 'name' => 'Presa de Cleto', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1594', 'name' => 'Tebas y Palmira', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3795', 'name' => 'La Encantada (Carlos Sifuentes Ugalde)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3835', 'name' => 'La Lucecita (La Luz Nueva)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3836', 'name' => 'La Luz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3837', 'name' => 'La Luz (La Luz Vieja)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3859', 'name' => 'Menfis', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3898', 'name' => 'San Nicolás', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3912', 'name' => 'Santa Rita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3915', 'name' => 'Santo Niño', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3923', 'name' => 'Tebas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3924', 'name' => 'Tebas y Palmira', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27974', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3828', 'name' => 'La Candelaria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3829', 'name' => 'La Candelaria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27975', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3808', 'name' => 'El Mezquite', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3869', 'name' => 'Nueva Candelaria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3871', 'name' => 'Nuevo San Pedro (La Puerta)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27976', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1595', 'name' => 'Mala Noche y Arracadas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27977', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3883', 'name' => 'Rincón de García (Rincón de García Chacón)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '009', 'name' => 'Francisco I. Madero', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27900', 'locality' => 'Francisco I. Madero (Chávez)', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1472', 'name' => 'Francisco I. Madero (Chávez) Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27902', 'locality' => 'Francisco I. Madero (Chávez)', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1485', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1949', 'name' => 'Las Vegas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1950', 'name' => 'Las Gabrielas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27904', 'locality' => 'Francisco I. Madero (Chávez)', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1481', 'name' => 'Montemayor', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1482', 'name' => 'Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1483', 'name' => 'Isaura Chávez de Montemayor', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1951', 'name' => 'Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1953', 'name' => 'Solidaridad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2721', 'name' => 'Las Brisas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27905', 'locality' => 'Francisco I. Madero (Chávez)', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Residencial Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Ejido Nuevo Linares', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1480', 'name' => 'Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1956', 'name' => '2 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3208', 'name' => 'Cerrada San Alberto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '4236', 'name' => '7 de Abril', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '4237', 'name' => 'Torres del PRI', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27906', 'locality' => 'Francisco I. Madero (Chávez)', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0008', 'name' => 'Residencial los Nogales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1479', 'name' => 'Nuevo Jaboncillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1955', 'name' => 'Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1959', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1960', 'name' => '5 de Abril', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1961', 'name' => 'Sector Seis', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1962', 'name' => 'Gustavo Díaz Ordaz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2620', 'name' => 'Pueblo Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2722', 'name' => '8 de Abril', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3207', 'name' => 'Sector Siete', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '4238', 'name' => 'Nuevo Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27907', 'locality' => 'Francisco I. Madero (Chávez)', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Fresno del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1954', 'name' => 'Nuevo Linares', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2723', 'name' => 'San Alberto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27908', 'locality' => 'Francisco I. Madero (Chávez)', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Residencial el Fresno', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'Pinabetes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1484', 'name' => 'Fresno del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1491', 'name' => 'Corralitos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27911', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1489', 'name' => 'Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27913', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1493', 'name' => 'San Juan de Ulúa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1494', 'name' => 'Colón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1498', 'name' => 'Santa María (Santa María de Arriba)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4064', 'name' => 'Amabizkar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4069', 'name' => 'Benito Valenzuela', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4096', 'name' => 'Ana Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4130', 'name' => 'La Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4194', 'name' => 'Nuevo Lequeitio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27914', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1487', 'name' => 'Buenavista de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1495', 'name' => 'Florencia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1497', 'name' => 'Las Mercedes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4061', 'name' => 'Alberto Ibarra Moreno', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4062', 'name' => 'Ana Carmen Tricio Haro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4071', 'name' => 'Benjamín Rivera González', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4100', 'name' => 'Ernesto Sedma (Noria Buenavista)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4118', 'name' => 'J. Jesús Ramírez Hernández', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4122', 'name' => 'José Luis Aguilera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4170', 'name' => 'Muba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4171', 'name' => 'Nicolás Muñiz Méndez (Sector Número Uno)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4172', 'name' => 'Nogalera (César Muñiz)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4179', 'name' => 'Noria Florencia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4181', 'name' => 'Noria las Mercedes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4184', 'name' => 'Noria Sector Número Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4187', 'name' => 'Noria Tres', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27915', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1477', 'name' => 'Lequeitio', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27916', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Corralitos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1486', 'name' => 'El Porvenir (El Porvenir de Arriba)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1488', 'name' => 'La Florida', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1490', 'name' => 'San Esteban de Egipto', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1514', 'name' => 'Palestina (El Porvenir)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4105', 'name' => 'La Montañesa (Florida Libertad)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4126', 'name' => 'La Amapola', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4128', 'name' => 'La Argolla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4134', 'name' => 'Quinta Don Pancho', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4136', 'name' => 'Florida Libertad', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4141', 'name' => 'La Noria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4160', 'name' => 'Los Cuates', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4162', 'name' => 'Lupita', 'zone_type' => 'Rural', 'settlementtype_id' => '14','zipcode_id' => $idZip],
		['key' => '4165', 'name' => 'María de Lourdes Encina Bernal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4177', 'name' => 'Noria del Alto', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4185', 'name' => 'Noria Sector Ocho (Noria Dos)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4197', 'name' => 'Oscar Javier Campos Sifuentes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4209', 'name' => 'San Gonzalo (La Aurora)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4224', 'name' => 'Tolibia [Sociedad de Producción Rural]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27917', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1474', 'name' => 'Las Virginias', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1492', 'name' => 'San Agustín de Ulúa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4065', 'name' => 'Ampuero (Las Vegas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4072', 'name' => 'Beta San Gabriel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4077', 'name' => 'David Flores', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4098', 'name' => 'El Trébol Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4106', 'name' => 'Fraccionamiento de los Santos', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '4108', 'name' => 'Francisco de la Torre', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4109', 'name' => 'Francisco I. Madero (Banco de Londres)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4132', 'name' => 'La Estrella', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4145', 'name' => 'La Noria Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4147', 'name' => 'La Nueve', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4151', 'name' => 'La Pompita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4178', 'name' => 'Noria del Naranjo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4183', 'name' => 'Noria Santo Niño', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4199', 'name' => 'Pedro Ramírez Quevedo (El Papalote)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4211', 'name' => 'Rubén Castañeda Vázquez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4215', 'name' => 'San Ramiro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4231', 'name' => 'Vidal Vázquez Barrios', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27918', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Fresno del Norte (José Guadalupe Villegas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1473', 'name' => 'Jaboncillo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1475', 'name' => 'Nuevo León', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1476', 'name' => 'Seis de Octubre (Santo Niño)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1499', 'name' => 'Alamito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4058', 'name' => 'Ángel del Hoyo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4059', 'name' => 'Los Abuelos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4060', 'name' => 'Alamito (Ignacio Martínez Tricio)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4075', 'name' => 'Caseta Treinta y Cinco más 432', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4121', 'name' => 'José Ángel García Cabrera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4152', 'name' => 'La Tres', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4155', 'name' => 'Las Tres Nenas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4156', 'name' => 'Lazarín González', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4176', 'name' => 'Noria del Grupo de los Amarillos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4189', 'name' => 'Noé Saldaña', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4200', 'name' => 'Pequeña Santo Niño', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4226', 'name' => 'Toro Moro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4233', 'name' => 'Villas del Fresno', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27920', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1502', 'name' => 'El Venado', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4066', 'name' => 'Andalucía', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4079', 'name' => 'Diana', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4081', 'name' => 'El Cañón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4082', 'name' => 'El Camarón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4086', 'name' => 'El Dorado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4094', 'name' => 'El Refugio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4101', 'name' => 'Esfuerzo Campesino (Andrés Posada)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4119', 'name' => 'Jacaranda (Filipinas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4124', 'name' => 'La Botella', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4159', 'name' => 'Rancho de los Santos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4169', 'name' => 'La Negra', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4198', 'name' => 'Otzanduri', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4201', 'name' => 'Providencia del Norte', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4212', 'name' => 'San José del Venado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27923', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1500', 'name' => 'Covadonga', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1501', 'name' => 'El Cántabro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1503', 'name' => 'Finisterre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1506', 'name' => 'San Salvador de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1512', 'name' => 'Dieciocho de Marzo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4074', 'name' => 'Cántabro Progreso (El Veintiocho)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4085', 'name' => 'El Cántabro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4089', 'name' => 'El León', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4095', 'name' => 'El Relicario', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4111', 'name' => 'Francisco Vega', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4138', 'name' => 'La Manada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4139', 'name' => 'La Marsellita (Marsella Dos)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4164', 'name' => 'Marsella (Santa Ligia)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4190', 'name' => 'Nueva Rosita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4208', 'name' => 'San Gabriel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4210', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4213', 'name' => 'San Martín (Covadonga)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4214', 'name' => 'San Pablo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4219', 'name' => 'Sector Número Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4222', 'name' => 'Tierra Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27924', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1505', 'name' => 'San José de la Niña', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4080', 'name' => 'El Botecito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4084', 'name' => 'El Cinco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4088', 'name' => 'El Encanto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4113', 'name' => 'Granja Axa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4150', 'name' => 'La Pinta', 'zone_type' => 'Rural', 'settlementtype_id' => '14','zipcode_id' => $idZip],
		['key' => '4167', 'name' => 'Mena Chiqui', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4186', 'name' => 'Noria Sector Seis', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4216', 'name' => 'Santa María 2', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '4217', 'name' => 'Sector Cuatro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4218', 'name' => 'Sector Dos (Pascual Esparza Soto)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4220', 'name' => 'Sector Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4234', 'name' => 'WX', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27925', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1496', 'name' => 'La Coruña', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1504', 'name' => 'La Pinta', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4093', 'name' => 'El Once (Guillermo Garza)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4107', 'name' => 'Francisco Aranzaba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4114', 'name' => 'Grupo Covadonga [Sociedad]', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4157', 'name' => 'Lequeitio (Víctor Handall)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4163', 'name' => 'Luz de Luna (Andrés Izaguirre)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4175', 'name' => 'Noria de Ramón Marrufo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4203', 'name' => 'Ramón Marrufo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4221', 'name' => 'Sector Uno B Lequeitio (Teodoro López)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27926', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1507', 'name' => 'Saloña', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1508', 'name' => 'Yucatán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4110', 'name' => 'Francisco Rodríguez Delgado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4116', 'name' => 'El Cerrito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4117', 'name' => 'Huitrón (Heriberto Ochoa)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4153', 'name' => 'La Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4182', 'name' => 'José Cruz Delgado Sonora', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4206', 'name' => 'Saloña (Tres Norias)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4225', 'name' => 'Tomasa Alonso', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4230', 'name' => 'Vasconia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27927', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1511', 'name' => 'Batopilas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4063', 'name' => 'Alonso Tegui', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4068', 'name' => 'Batopilas', 'zone_type' => 'Rural', 'settlementtype_id' => '14','zipcode_id' => $idZip],
		['key' => '4076', 'name' => 'Castrejana', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4083', 'name' => 'El Chaparro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4087', 'name' => 'El Ebro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4097', 'name' => 'El Sella', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4115', 'name' => 'Guadalupe (Las Lupes)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4129', 'name' => 'La Aurora', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4146', 'name' => 'La Trinidad', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4154', 'name' => 'Lanchares', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4166', 'name' => 'Matienzo (La Ocho)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4191', 'name' => 'La Nueva Trinidad', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4223', 'name' => 'Toberas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4232', 'name' => 'Villa Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27930', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1509', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4091', 'name' => 'El Milagro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4195', 'name' => 'El Terraceño', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4207', 'name' => 'San Elías del Álamo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4228', 'name' => 'Trincheras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27933', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1513', 'name' => 'Charcos de Risa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4137', 'name' => 'La Liliana', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4148', 'name' => 'La Perlita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27934', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '4142', 'name' => 'La Noria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4227', 'name' => 'Tres Manantiales (La Parrita)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27935', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '4103', 'name' => 'Felipe Ángeles', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4143', 'name' => 'La Noria de Linda Vista', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4149', 'name' => 'La Pezuña', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '4158', 'name' => 'Linda Vista', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4188', 'name' => 'Norias de Felipe Ángeles', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27936', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '4204', 'name' => 'Río Aguanaval', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '4205', 'name' => 'Río Aguanaval', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27937', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '4196', 'name' => 'Ojo de Agua (Zona de Manantiales)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '024', 'name' => 'Parras', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27980', 'locality' => 'Parras de la Fuente', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1597', 'name' => 'Estrella', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1598', 'name' => 'Márquez de Aguayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1599', 'name' => 'Parras de la Fuente Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1600', 'name' => 'Parras 85 (Y Griega)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27983', 'locality' => 'Parras de la Fuente', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1602', 'name' => 'Barrio Santo Niño', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1603', 'name' => 'Barrio Tacubaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2262', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2428', 'name' => 'Rincón del Refugio', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2961', 'name' => 'Barrio del Sombreretillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27984', 'locality' => 'Parras de la Fuente', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1604', 'name' => 'Agua de los Padres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1605', 'name' => 'Ojo de Agua', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1606', 'name' => 'Saltillo 400', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2263', 'name' => 'PRI 92', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2427', 'name' => 'Sol Azteca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2958', 'name' => 'El Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27985', 'locality' => 'Parras de la Fuente', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1607', 'name' => 'CIPSA', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1608', 'name' => 'Ciudadela', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1610', 'name' => 'Miramar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2425', 'name' => 'Hacienda los Viñedos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2426', 'name' => 'Nuevo Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2957', 'name' => 'Viñedos del Márquez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2959', 'name' => 'Esmeralda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27986', 'locality' => 'Parras de la Fuente', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1611', 'name' => 'Elíseo Mendoza Berrueto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1613', 'name' => 'Las Tres Lomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2965', 'name' => 'Barrio de La Loma', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2966', 'name' => 'Del Santuario', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2967', 'name' => 'Barrio Macuyu', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2968', 'name' => 'Barrio de La Tequila', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2969', 'name' => 'La Ermita de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2970', 'name' => 'Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2972', 'name' => 'San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27987', 'locality' => 'Parras de la Fuente', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Rogelio Montemayor', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1614', 'name' => 'Federico Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1615', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1616', 'name' => 'INFONAVIT Nogalera', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '1617', 'name' => 'Vidriera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2260', 'name' => 'Nogalar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2261', 'name' => 'Los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2304', 'name' => 'Del Marquez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2360', 'name' => 'Quintas del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2971', 'name' => 'Parras', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27988', 'locality' => 'Parras de la Fuente', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1619', 'name' => 'Burócratas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1620', 'name' => 'Hacienda del Rosario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1621', 'name' => 'Jardines del Márquez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2960', 'name' => 'Los Arcos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1618', 'name' => 'Antigua Guayulera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27989', 'locality' => 'Parras de la Fuente', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Profesor Humberto Moreira Váldez', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1622', 'name' => 'El Vergel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1623', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1624', 'name' => 'José G Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1625', 'name' => 'Luz Rodriguez de las Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1626', 'name' => 'Valle de Parras', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2258', 'name' => 'Del Refugio', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2259', 'name' => 'Las Palmeras', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2411', 'name' => 'Rincón del Montero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2430', 'name' => 'Barrio del Perico', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2431', 'name' => 'Guillermo Urbina', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2963', 'name' => 'Los Barrios', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27990', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Pomona II', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'La Requena (La Requena de Fátima)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'El Progreso (San Isidro del Progreso)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0013', 'name' => 'Las Gordas (Las Conchas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'La Luz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'El Refugio (La Quiroga)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0024', 'name' => 'Providencia (Maravillas Uno)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0029', 'name' => 'Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1628', 'name' => 'La Candelaria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1630', 'name' => 'El Mimbre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1631', 'name' => 'El Sol', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1632', 'name' => 'Madero [Estación]', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
		['key' => '1633', 'name' => 'El Sacramento (Sacramento de la Jarosa)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1635', 'name' => 'San José de Mahoma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1638', 'name' => 'Santa María (Santa María Número Tres)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1639', 'name' => 'Talía', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1640', 'name' => 'Veintiocho de Agosto', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27991', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0015', 'name' => 'La Morita', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '1641', 'name' => 'Garambullo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1642', 'name' => 'Jalapa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1643', 'name' => 'Las Ánimas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1644', 'name' => 'Notillas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1645', 'name' => 'San José de la Unión', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27992', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Nuevo Sabanilla (Sabanilla)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Las Abras', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1648', 'name' => 'La Candelaria de los Yeguales', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1649', 'name' => 'La Constancia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1651', 'name' => 'Sabanilla Dos (Sabanilla del Tapón)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1653', 'name' => 'San Rafael de los Yeguales', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1654', 'name' => 'El Siete de Enero (El Mezquite)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1655', 'name' => 'Tanque Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27993', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'San Lorenzo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0025', 'name' => 'Santa Isabel y Santa Rita Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0027', 'name' => 'Cuatro Hermanos (El Sol)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1627', 'name' => 'Boquillas del Refugio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1629', 'name' => 'Cuatro de Marzo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1634', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1637', 'name' => 'San Rafael de los Milagros', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1656', 'name' => 'Cadillal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1657', 'name' => 'Cerro Colorado', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1664', 'name' => 'San Francisco del Progreso', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1665', 'name' => 'Hacienda San Lorenzo (Casa Madero)', 'zone_type' => 'Rural', 'settlementtype_id' => '11','zipcode_id' => $idZip],
		['key' => '1666', 'name' => 'San Rafael de la Hedionda', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1667', 'name' => 'Santa Isabel y Santa Rita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27994', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'Sombreretillo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'San Miguel el Alto', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0017', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'Jazminal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0026', 'name' => 'Los Castro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1646', 'name' => 'El Cinco (Cinco de Mayo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1660', 'name' => 'El Durazno', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1668', 'name' => 'Abrevadero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1669', 'name' => 'Huariche', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1670', 'name' => 'La Presa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1671', 'name' => 'Los Hoyos (El Potrero)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1672', 'name' => 'San José de Patagalana', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1673', 'name' => 'San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1674', 'name' => 'Seis de Enero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27995', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1650', 'name' => 'Menchaca (Tanque de Menchaca)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1652', 'name' => 'San Francisco del Barrial', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1659', 'name' => 'El Capulín', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27996', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'La Vega', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'El Porvenir de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'Tizoc', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0012', 'name' => 'Santa María de las Esperanzas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0016', 'name' => 'El Saucillo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'Bajío del Calabacillal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'El Carmen', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0028', 'name' => 'La Paloma', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1636', 'name' => 'Paila', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1658', 'name' => 'Cruz Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1661', 'name' => 'Ganivete', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1663', 'name' => 'San Carlos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1675', 'name' => 'Presa de San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1676', 'name' => 'Santa Cecilia (La Cecilia)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1677', 'name' => 'Seguín', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1679', 'name' => 'Ciénega del Carmen', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1680', 'name' => 'El Mesteño', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1681', 'name' => 'Loma Bonita (La Vega)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1682', 'name' => 'Palo Alto (El Carrizal)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1683', 'name' => 'Piedra Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1684', 'name' => 'Trincheras', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1688', 'name' => 'Veinte de Noviembre (Veinte de Noviembre Nuevo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '27997', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1647', 'name' => 'El Amparo (La Peña)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);




    }
}
