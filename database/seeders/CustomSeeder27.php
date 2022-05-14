<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomSeeder27 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idFed = DB::table('federal_entities')->insertGetId(['key' => '27', 'name' => 'Tabasco', 'code' => '']);

$idMun = DB::table('municipalities')->insertGetId(['key' => '004', 'name' => 'Centro', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86000', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Portal del Agua', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'Villahermosa Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86010', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0224', 'name' => 'Medellin y Pigua 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1272', 'name' => 'Triangulo Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1281', 'name' => 'Fideicomiso Ciudad Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86017', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0015', 'name' => 'Indeco Unidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '1278', 'name' => 'La Pigua', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1279', 'name' => 'Jardines Del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1280', 'name' => 'Cosmos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1486', 'name' => 'Las Garzas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86018', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'Infonavit', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86019', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'Roberto Madrazo Pintado Ciudad Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0017', 'name' => 'Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Villa de las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1262', 'name' => 'Lagunas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1263', 'name' => 'Olmeca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1487', 'name' => 'Vicente Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1568', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2548', 'name' => 'Lagunas de San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2612', 'name' => 'Privada de Lagunas del Maurel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86020', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0020', 'name' => 'El Recreo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'Framboyanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86025', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0023', 'name' => 'Universidad Autónoma de Tabasco', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86026', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0024', 'name' => 'Privada Golondrinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0025', 'name' => 'Villa de las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1257', 'name' => 'Valle Marino', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1283', 'name' => 'Las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86027', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0026', 'name' => 'Jardines de Villahermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86029', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0028', 'name' => 'José María Pino Suárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0029', 'name' => 'Tierra Colorada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86030', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0030', 'name' => 'Bonanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0032', 'name' => 'Heriberto Kehoe Vicent', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0033', 'name' => 'Oropeza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0034', 'name' => 'Prados de Villahermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0126', 'name' => 'Residencial Los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1286', 'name' => 'Residencial Flamingos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1490', 'name' => 'Nueva Imagen', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '1493', 'name' => 'Bosques de Villahermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1494', 'name' => 'Nances', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86035', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0038', 'name' => 'Galaxia/tabasco 2000', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0040', 'name' => 'Paseos Del Usumacinta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0085', 'name' => 'Galaxia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1287', 'name' => 'Villa de los Ríos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1289', 'name' => 'Real de Minas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1492', 'name' => 'Los Ríos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1495', 'name' => 'Multiochenta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1521', 'name' => 'Villas Del Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1522', 'name' => 'Club de Lago', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1527', 'name' => 'Real de Tabasco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2601', 'name' => 'La Gran Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86037', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0042', 'name' => 'Club Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1290', 'name' => 'Parque Tabasco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1294', 'name' => 'La Choca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86038', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0043', 'name' => 'Carrizal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2624', 'name' => 'Las Giraldas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86040', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0047', 'name' => 'Adolfo Lopez Mateos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0048', 'name' => 'Florida', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0049', 'name' => 'Jesús Garcia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0050', 'name' => 'Lago Ilusiones', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0051', 'name' => 'Lidia Esther Mónica de Portilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0052', 'name' => 'Magisterial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86049', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0054', 'name' => 'Villahermosa (Cap. P. A. Carlos Rovirosa)', 'zone_type' => 'Urbano', 'settlementtype_id' => '1','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86050', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0055', 'name' => 'Jose N Rovirosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0056', 'name' => 'Lindavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0057', 'name' => 'Loma Bonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0058', 'name' => 'Loma Linda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0086', 'name' => 'Militar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1168', 'name' => 'Residencial Paseo de las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1478', 'name' => 'Álvaro Obregón', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86059', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0060', 'name' => 'Periodista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86060', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0061', 'name' => 'Casa Blanca 1a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1297', 'name' => 'Brisas Del Grijalva', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1299', 'name' => 'Fovissste Casa Blanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '5','zipcode_id' => $idZip],
		['key' => '1485', 'name' => 'Casa Blanca 2a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86067', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0063', 'name' => 'Gaviotas Norte Sector Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86068', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0064', 'name' => 'Gaviotas Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1300', 'name' => 'La Manga II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1301', 'name' => 'La Manga III', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1302', 'name' => 'Cedros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86069', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0065', 'name' => 'La Manga I', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86070', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0066', 'name' => 'Nueva Villahermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86079', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0067', 'name' => 'Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '7','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86080', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0068', 'name' => 'Gil y Sáenz (El Águila)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0069', 'name' => 'Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86087', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0071', 'name' => 'Secretaria de La Defensa Nacional', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86090', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0074', 'name' => 'Guayabal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0075', 'name' => 'Gaviotas Sur Sección San Jose', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0076', 'name' => 'Municipal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1304', 'name' => 'Gaviotas Norte Sector Explanada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86095', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0077', 'name' => 'Las Brisas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86096', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0078', 'name' => 'El Parque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86097', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0079', 'name' => 'Los Tulipanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86098', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0080', 'name' => 'Mayito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86099', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1306', 'name' => 'Gaviotas Sur Sector Armenia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1470', 'name' => 'Triunfo La Manga 2', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '1471', 'name' => 'Triunfo La Manga 3', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1672', 'name' => 'Gaviotas Sur (El Monal)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2597', 'name' => 'Triunfo la Manga I', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86100', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0082', 'name' => 'Atasta de Serra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0083', 'name' => 'Jose Colomo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0125', 'name' => 'Residencial Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0138', 'name' => 'Madeiras', 'zone_type' => 'Urbano', 'settlementtype_id' => '5','zipcode_id' => $idZip],
		['key' => '2489', 'name' => 'Macuilis', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2540', 'name' => 'Privada Alcatraces', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2616', 'name' => 'Residencial Villas del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2663', 'name' => 'Brisa del Usumacinta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86107', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1316', 'name' => 'Aurora', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1317', 'name' => 'Tucanes las Quintas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86108', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0088', 'name' => 'El Espejo 1', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0124', 'name' => 'Residencial San Ángel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1319', 'name' => 'Virginia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1320', 'name' => 'Conjunto Habitacional Los Álamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1321', 'name' => 'Villa de los Trabajadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1452', 'name' => 'Carrizal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1479', 'name' => 'Real Usumacinta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86109', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0089', 'name' => 'El Espejo 2', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1322', 'name' => 'La Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1323', 'name' => 'Villas Del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86120', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0091', 'name' => 'Guadalupe Borja', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86125', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0092', 'name' => 'Jose Pages Llergo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86126', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0095', 'name' => 'Nueva Invitab', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1043', 'name' => 'Carlos A Madrazo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1135', 'name' => 'Islas Del Mundo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1324', 'name' => 'Santa Elena', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1327', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1575', 'name' => 'Villa las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2652', 'name' => 'Manuel Andrade Díaz', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86127', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0073', 'name' => 'Estrellas de Buenavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0130', 'name' => 'Residencial del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0131', 'name' => 'San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0132', 'name' => 'Los Sauces Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1189', 'name' => 'Miguel Hidalgo 2da. Sección (La Guaira)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1267', 'name' => 'Río Viejo 1a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1328', 'name' => 'Rio Viejo 2a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1329', 'name' => 'Rio Viejo 3a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1483', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1538', 'name' => 'Olimpo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1540', 'name' => 'Residencial Río Viejo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1541', 'name' => 'Privada La Mandarina', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1544', 'name' => 'La Ceiba', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2609', 'name' => 'Chichicaste', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2614', 'name' => 'Real del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2636', 'name' => 'Jardines de Buenavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2637', 'name' => 'Bonampak', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2645', 'name' => 'Los Gansos', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86129', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0096', 'name' => 'Cotip', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86130', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0097', 'name' => 'Artesanos Infonavit', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0098', 'name' => 'Villa de los Arcos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1331', 'name' => 'Palmitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86137', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0099', 'name' => 'Vista Alegre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86140', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0103', 'name' => '18 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0104', 'name' => 'Las Delicias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1333', 'name' => 'Conjunto Habitacional Revolución', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86143', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0084', 'name' => 'Privanza del Campo', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0134', 'name' => 'Santa Teresa', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1044', 'name' => 'Carlos A Madrazo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1268', 'name' => 'Ixtacomitán 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1334', 'name' => 'América', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1335', 'name' => 'Palma Real', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2611', 'name' => 'Ángeles Ixtacomitan', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2634', 'name' => 'Los Mezquites', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86144', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0128', 'name' => 'Ónix', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0133', 'name' => 'Cumbres', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1338', 'name' => 'Ixtacomitan 4a Sección', 'zone_type' => 'Semiurbano', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1339', 'name' => 'Ixtacomitán 2a. Sección', 'zone_type' => 'Semiurbano', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1484', 'name' => 'Las Huertas', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2523', 'name' => 'Hacienda Esmeralda', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2582', 'name' => 'Las Lomas', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86149', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0105', 'name' => 'Nueva Pensiones', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86150', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0106', 'name' => 'Punta Brava', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0107', 'name' => 'Tamulte de las Barrancas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1340', 'name' => 'Jardines Del Sur I y II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2495', 'name' => 'Santa Karla II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86153', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1341', 'name' => 'Sabina', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1342', 'name' => 'Popular Pedro C Colorado', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1343', 'name' => 'Lomas Del Dorado', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1344', 'name' => 'Real del Angel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1345', 'name' => 'Ixtacomitan 3a Sección', 'zone_type' => 'Semiurbano', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1523', 'name' => 'El Edén', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1524', 'name' => 'Real de Sabina', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1532', 'name' => 'Paso Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1567', 'name' => 'Real de San Jorge', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2518', 'name' => 'San Jorge III', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2593', 'name' => 'Edén Premier', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2662', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86160', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0108', 'name' => 'Del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0109', 'name' => 'Sanchez Magallanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86167', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1265', 'name' => 'Villa las Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86168', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0111', 'name' => 'Pino Suárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86169', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0112', 'name' => 'Pensiones', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86170', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0113', 'name' => 'Fovissste 2a Etapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0127', 'name' => 'Loma Diamante', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0137', 'name' => 'Centrópolis', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1346', 'name' => 'Militar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1347', 'name' => 'Real Del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1348', 'name' => 'Plutarco Elías Calles (Cura Hueso)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1515', 'name' => 'Plaza Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1554', 'name' => 'La Gloria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1557', 'name' => 'Blancas Mariposas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2606', 'name' => 'Residencial Los Robles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2610', 'name' => 'Loma Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86179', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0114', 'name' => 'Plaza Villahermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86180', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0115', 'name' => 'Fovissste 1a Etapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0116', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0135', 'name' => 'La Ceiba', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1264', 'name' => 'Orquidea', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86189', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0118', 'name' => 'Deportiva Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86190', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0035', 'name' => 'Residencial Esmeralda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0119', 'name' => 'Marcos Buendia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0120', 'name' => 'Primero de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1313', 'name' => 'España', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2576', 'name' => 'Palmeira', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86193', 'locality' => 'Villahermosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1351', 'name' => 'La Providencia (La Majahua)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86250', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0182', 'name' => 'Buena Vista 2da. Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0183', 'name' => 'Macultepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0184', 'name' => 'Tamulté de las Sabanas', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0185', 'name' => 'Tocoal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1640', 'name' => 'El Novillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2642', 'name' => 'Conjunto Habitacional Tercer Milenio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86253', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0189', 'name' => 'Estancia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1035', 'name' => 'El Alambrado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1634', 'name' => 'Torno Largo Estancia (El Manguito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1642', 'name' => 'Aniceto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2255', 'name' => 'La Loma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86254', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0093', 'name' => 'García', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0190', 'name' => 'Miramar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1638', 'name' => 'Rovirosa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1659', 'name' => 'La Manga', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1757', 'name' => 'La Ceiba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2235', 'name' => 'Buena Vista 1a Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86255', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0198', 'name' => 'Acachapan y Colmena 4ta. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1637', 'name' => 'Acachapan y Colmena 5a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2236', 'name' => 'Buena Vista 3a Sección (Boca de Escoba)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86256', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1636', 'name' => 'Aztlán 4ta. Sección (Corcho y Chilapilla)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86257', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1633', 'name' => 'La Arena', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1635', 'name' => 'Aztlán 5ta. Sección (Palomillal)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86258', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1632', 'name' => 'El Espino', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86260', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0230', 'name' => 'Torno Largo 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1671', 'name' => 'Gaviotas Sur (El Cedral)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2249', 'name' => 'Gaviotas Sur (El Chiflón)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2277', 'name' => 'Torno Largo 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2278', 'name' => 'Torno Largo 3ra. Sección (Sabanilla)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86265', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2242', 'name' => 'Coronel Traconis 2da. Sección (El Zapote)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2243', 'name' => 'Coronel Traconis (Guerrero 3ra. Sección)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2244', 'name' => 'Coronel Traconis (San Francisco 4ta. Sección)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2245', 'name' => 'Coronel Traconis (San Diego 5ta. Sección)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2268', 'name' => 'Miraflores 2da. Sección (Zapotillo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2269', 'name' => 'Miraflores 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2497', 'name' => 'Coronel Traconis 1ra Sección (La Isla)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86266', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1230', 'name' => 'Ribera de las Raíces', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1667', 'name' => 'El Censo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86270', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1552', 'name' => 'La Ceiba', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1555', 'name' => 'Carlos Pellicer Camara', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1641', 'name' => 'Tierra Amarilla 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2252', 'name' => 'Jolochero (Boca de Culebra)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2262', 'name' => 'Medellín y Madero 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2263', 'name' => 'Medellín y Madero 3a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2264', 'name' => 'Medellín y Madero 4ta. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2492', 'name' => 'Colinas de Santo Domingo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2641', 'name' => 'Santa Isabel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3053', 'name' => 'Real de Diamante', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'Tierra Amarilla 3ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0191', 'name' => 'Jolochero 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0192', 'name' => 'Medellin y Madero 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0193', 'name' => 'Ocuiltzapotlán', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0195', 'name' => 'Tierra Amarilla 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1083', 'name' => 'Lomas del Encanto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1136', 'name' => 'Isset', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1148', 'name' => 'Ocuitzapotlán Dos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1170', 'name' => 'Las Rosas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1177', 'name' => 'Lomas de Ocuiltzapotlan', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1206', 'name' => 'Paso Real de La Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1533', 'name' => 'Los Angeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1534', 'name' => 'Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1551', 'name' => 'Villa Unión', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86273', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0204', 'name' => 'Barrancas y Amate 3ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0235', 'name' => 'Miraflores 3ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1566', 'name' => 'El Corozal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2231', 'name' => 'Barrancas y Amate 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2266', 'name' => 'Miraflores 1ra. Sección (Arroyo Grande)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2267', 'name' => 'Miraflores 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86274', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0200', 'name' => 'Sabanas Nuevas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0231', 'name' => 'Ismate y Chilapilla 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0233', 'name' => 'Chiquiguao 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1664', 'name' => 'Ismate y Chilapilla 2a Sección (Zapotal)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1665', 'name' => 'Ismate y Chilapilla 2a Sección (Jahuactillo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1666', 'name' => 'La Vuelta (laguna)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2240', 'name' => 'Chacté', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2241', 'name' => 'Chiquiguao 2da. Sección (Chiquiguaíto)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2251', 'name' => 'Ismate y Chilapilla 1ra Sección (San Antonio)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2259', 'name' => 'Las Matillas 4ta Sección (San Antonio)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2260', 'name' => 'Las Matillas 4a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86275', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0209', 'name' => 'Dos Montes', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1647', 'name' => 'Barrancas y Guanal González', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1650', 'name' => 'La Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1756', 'name' => 'La Cruz del Bajío', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2232', 'name' => 'Barrancas y Guanal López Portillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2233', 'name' => 'Barrancas y Guanal Tintillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2256', 'name' => 'La Manga 2da. Sección (El Jobal)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2272', 'name' => 'Pajonal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86276', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0123', 'name' => 'San Felipe de Jesús', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0216', 'name' => 'Medellin y Pigua 3ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0225', 'name' => 'Medellín y Pigua 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1064', 'name' => 'Constitución', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2247', 'name' => 'El Zapotal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2257', 'name' => 'Lagartera 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2258', 'name' => 'Lagartera 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2265', 'name' => 'Medellín y Pigua 4ta. Sección (El Aguacate)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2626', 'name' => 'La Huerta Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86277', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0197', 'name' => 'Acachapan y Colmena 3ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0201', 'name' => 'Acachapan y Colmena 2da. Sección (La Arena)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1643', 'name' => 'Jornaleros y Aparceros (Pajaritos)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1645', 'name' => 'Aztlán 1a Sección (Sector La Piedad)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2225', 'name' => 'Acachapan y Colmena 2da. Sección (El Maluco)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86278', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0199', 'name' => 'Aztlán 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1646', 'name' => 'Aztlán 1ra. Sección (Sector Majahual)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1648', 'name' => 'Boca de Guanal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1661', 'name' => 'Boca de Aztlán 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1662', 'name' => 'Aztlán 3a Sección (Jahuacte)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1663', 'name' => 'Aztlán 2da. Sección el Cuy', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86280', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0205', 'name' => 'Buena Vista Río Nuevo 1ra. Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0206', 'name' => 'Corregidora Ortiz 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0207', 'name' => 'Corregidora Ortiz 3ra Sección (San Pedrito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0208', 'name' => 'Corregidora Ortiz 5a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0210', 'name' => 'Gonzalez 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0211', 'name' => 'Gonzalez 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0212', 'name' => 'Gonzalez 3a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0215', 'name' => 'Luis Gil Pérez', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0217', 'name' => 'Pablo L Sidar (Miramar)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0219', 'name' => 'Plátano y Cacao 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0220', 'name' => 'Plátano y Cacao 2da. Sección (La Isla)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0221', 'name' => 'Plátano y Cacao 3a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1141', 'name' => 'Jesús Antonio Sibilla Zurita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2239', 'name' => 'Buena Vista Río Nuevo 4a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2246', 'name' => 'Corregidora Ortiz 4a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2273', 'name' => 'Plátano y Cacao 4ta. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2513', 'name' => 'Hacienda Buena Vista', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2516', 'name' => 'Joyas de Buena Vista', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2520', 'name' => 'Lomas de Bella Vista', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86281', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0223', 'name' => 'Acachapan y Colmena 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1717', 'name' => 'San Ángel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0004', 'name' => 'Alfa y Omega', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86283', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0227', 'name' => 'Estancia Vieja 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0228', 'name' => 'Guineo 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0229', 'name' => 'Rio Tinto 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2237', 'name' => 'Buena Vista Río Nuevo 2a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2238', 'name' => 'Buena Vista Río Nuevo 3a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2248', 'name' => 'Estancia Vieja 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2250', 'name' => 'González 4a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2271', 'name' => 'Pablo L. Sidar (La Aurora)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2275', 'name' => 'Río Tinto 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2276', 'name' => 'Río Tinto 3a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86284', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0139', 'name' => 'Campestre Paseo de la Sierra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0140', 'name' => 'La Luna', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1042', 'name' => 'Campestre Parrilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1045', 'name' => 'Casas Para Todos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1078', 'name' => 'El Amate', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1099', 'name' => 'Espinoza Galindo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1115', 'name' => 'Fovissste Kilómetro 9', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1127', 'name' => 'Guapinol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1131', 'name' => 'Infonavit Parrilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1204', 'name' => 'Parrilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1215', 'name' => 'Policía y Transito', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1256', 'name' => 'La Unión hace la Fuerza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1353', 'name' => 'Parrilla 4ta. Sección (Los Acosta)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1547', 'name' => 'Hacienda Del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1548', 'name' => 'Villa Floresta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1719', 'name' => 'El Árbol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1720', 'name' => 'Chilam Balam', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1722', 'name' => 'Jardines de Huapinol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1737', 'name' => 'Santa Cecilia (los Músicos)', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1738', 'name' => 'Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1754', 'name' => 'Juchimán', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2541', 'name' => 'Casa del Árbol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2623', 'name' => 'Popular Manuel Silva', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86287', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0046', 'name' => 'Zafiro', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0053', 'name' => 'Puerta Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0062', 'name' => 'Puerta de Hierro', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0090', 'name' => 'Valle del Jaguar', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0122', 'name' => 'Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0129', 'name' => 'Jardines del Country', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0136', 'name' => 'Puerta Madero', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0214', 'name' => 'Lázaro Cárdenas 1a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0236', 'name' => 'Corregidora Ortiz 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1310', 'name' => 'Anacleto Canabal 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1312', 'name' => 'Flores del Trópico', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1520', 'name' => 'El Country', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1657', 'name' => 'Santa Catalina (San Marcos)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1658', 'name' => 'Lázaro Cárdenas 2a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1660', 'name' => 'Anacleto Canabal 2da. Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1675', 'name' => 'Anacleto Canabal 3ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1676', 'name' => 'Anacleto Canabal 4ta. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2261', 'name' => 'Lázaro Cárdenas 2da Sección (21 de Marzo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2490', 'name' => 'Puerta Real', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2496', 'name' => 'Las Hadas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2550', 'name' => 'Sol Campestre', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2569', 'name' => 'Puerta Azul', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2595', 'name' => 'Parque Logístico Industrial Tabasco', 'zone_type' => 'Rural', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2617', 'name' => 'Puerta Magna', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2635', 'name' => 'Hacienda Casa Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86288', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2561', 'name' => 'La Venta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2584', 'name' => 'El Encanto', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2608', 'name' => '27 de Octubre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2619', 'name' => 'Gracias México', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2620', 'name' => 'San Manuel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2640', 'name' => 'Monteceibas', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0036', 'name' => 'Clara Córdova Moran', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0045', 'name' => 'Lomas del Palmar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0237', 'name' => 'La Parrilla 2a Secc La Lima', 'zone_type' => 'Semiurbano', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0245', 'name' => 'Estanzuela 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1086', 'name' => 'El Manzano', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1106', 'name' => 'Estanzuela 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1156', 'name' => 'La Lima', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1214', 'name' => 'Playas del Rosario (Subteniente García)', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1352', 'name' => 'Parrilla II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1517', 'name' => 'Las Mercedes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1549', 'name' => 'El Almendro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1550', 'name' => 'Villa los Claustros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1553', 'name' => 'Revolución', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1556', 'name' => 'El Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2227', 'name' => 'Parrilla 5ta. Sección (El Carmen)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2511', 'name' => 'Topacio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2524', 'name' => 'San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2525', 'name' => 'Santa Rita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86289', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0238', 'name' => 'Pueblo Nuevo de las Raíces', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1149', 'name' => 'Agraria (La Isla)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1668', 'name' => 'El Recreo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86290', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0022', 'name' => 'Villa el Cielo', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0239', 'name' => 'Tumbulushal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2226', 'name' => 'La Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2253', 'name' => 'La Huasteca 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2254', 'name' => 'La Huasteca 2da. Sección (Alvarado la Raya)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2646', 'name' => 'Bicentenario', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86291', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0240', 'name' => 'Alvarado (Colima)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0241', 'name' => 'Alvarado Guardacosta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86292', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0244', 'name' => 'Alvarado Jimbal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86293', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2228', 'name' => 'Alvarado Santa Irene 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2234', 'name' => 'Boquerón 2a Sección (El Barquillo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2553', 'name' => 'Las Margaritas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86294', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1651', 'name' => 'Boquerón (San Pedro)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1653', 'name' => 'Boquerón 3a Sección (Guanal)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1654', 'name' => 'Boquerón 4a Sección (Laguna Nueva)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1656', 'name' => 'Ixtacomitan 5a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1673', 'name' => 'Pablo L Sidar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2274', 'name' => 'Parrilla 3ra Sección (La Providencia)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2500', 'name' => 'Plutarco Elías Calles (La Majahua)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2519', 'name' => 'Bosques de Araba', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86295', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1655', 'name' => 'Boquerón 5a Sección (La Lagartera)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2270', 'name' => 'Pablo L. Sidar (Guineo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86297', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0100', 'name' => 'Alvarado Santa Irene 2da. Sección (El Taizal)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86298', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0246', 'name' => 'Hueso de Puerco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '010', 'name' => 'Jalpa de Méndez', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86200', 'locality' => 'Jalpa de Méndez', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'La Hacienda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0122', 'name' => 'Amatitán', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0128', 'name' => 'Jalpa de Mendez Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1120', 'name' => 'Gonzalez Pedrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1121', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '1150', 'name' => 'La Candelaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '1239', 'name' => 'San Luis', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '1243', 'name' => 'Santa Ana', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '1690', 'name' => 'Tomás Garrido Canabal (San José)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86203', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0124', 'name' => 'El Rio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0152', 'name' => 'La Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0155', 'name' => 'Jalupa', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0156', 'name' => 'Tierras Peleadas (Tierras Amigas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86205', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1684', 'name' => 'Rivera Alta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1685', 'name' => 'Santuario 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1689', 'name' => 'Santuario 2da Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86206', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0130', 'name' => 'Tierra Adentro 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0153', 'name' => 'Santa Ana (El Río)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0154', 'name' => 'La Concepción', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1677', 'name' => 'Tierra Adentro 3ra Sección (El Vigía)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86207', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0143', 'name' => 'Vicente Guerrero 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0151', 'name' => 'Vicente Guerrero 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1678', 'name' => 'El Juncal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1679', 'name' => 'Santa Lucía', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1680', 'name' => 'San Nicolás', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1681', 'name' => 'San Hipólito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1682', 'name' => 'Nabor Cornelio Álvarez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1683', 'name' => 'El Púlpito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86208', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0150', 'name' => 'Chacalapa 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1687', 'name' => 'Huapacal 2da. Sección (Punta Brava)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1688', 'name' => 'El Carmen', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0125', 'name' => 'Hermenegildo Galeana 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0126', 'name' => 'Hermenegildo Galeana 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0144', 'name' => 'Benito Juárez 3a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0145', 'name' => 'Huapacal 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0146', 'name' => 'Benito Juárez 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0147', 'name' => 'Benito Juárez 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0148', 'name' => 'Boquiapa', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0149', 'name' => 'Chacalapa 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86209', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'El Mango', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0127', 'name' => 'Iquinuapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0138', 'name' => 'Ayapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0139', 'name' => 'Gregorio Mendez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0141', 'name' => 'Pueblo Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0142', 'name' => 'Soyataco', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1686', 'name' => 'Iquinuapa (El Clavo)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1691', 'name' => 'La Trinidad', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2509', 'name' => 'El Carmen (La Ensenada)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86214', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0123', 'name' => 'El Recreo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0135', 'name' => 'Mecoacán 2da. Sección (San Lorenzo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1695', 'name' => 'El Novillero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86215', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0134', 'name' => 'Nicolás Bravo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86216', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0129', 'name' => 'Mecoacan', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0132', 'name' => 'Reforma 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1692', 'name' => 'Campo Petrolero Mecoacan', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1693', 'name' => 'Reforma 3ra. Sección (El Guano)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1694', 'name' => 'Reforma 2da Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1696', 'name' => 'La Ceiba', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2539', 'name' => 'El Carmen', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2556', 'name' => 'San Gregorio', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '013', 'name' => 'Nacajuca', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86220', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0025', 'name' => 'Rivera Alta', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0168', 'name' => 'Nacajuca', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1076', 'name' => '17 de Julio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1080', 'name' => 'El Carmen', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1761', 'name' => 'Nacaxuxuca 2a Secc', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1762', 'name' => 'Nacaxuxuca 1a Secc', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86230', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0167', 'name' => 'Mazateupa', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0174', 'name' => 'Tapotzingo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0177', 'name' => 'Tucta', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86233', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Tecoluta 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'San Isidro 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0163', 'name' => 'Guaytalpa', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0176', 'name' => 'Tecoluta 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1763', 'name' => 'San Simón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1764', 'name' => 'San Isidro 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1765', 'name' => 'San José Pajonal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86235', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'Isla Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'Chicozapote', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0170', 'name' => 'Oxiacaque', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1766', 'name' => 'El Sitio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1771', 'name' => 'El Chiflón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1773', 'name' => 'El Pastal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86236', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0173', 'name' => 'Sandial', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1770', 'name' => 'Banderas (Guatacalca 2da. Sección)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2504', 'name' => 'El Cometa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86237', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'Corriente 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0012', 'name' => 'Guatacalca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0013', 'name' => 'La Cruz de Nacajuca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'Belén', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0158', 'name' => 'Corriente 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0162', 'name' => 'Guatacalca', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0169', 'name' => 'Olcuatitán', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0180', 'name' => 'El Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1768', 'name' => 'La Loma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2572', 'name' => 'La Cruz de Olcuatitán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86238', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'Cantemoc 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Cantemoc 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'Chicozapote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86240', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0026', 'name' => 'Arroyo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0175', 'name' => 'Taxco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0178', 'name' => 'Vainilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1767', 'name' => 'Salvador Allende', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86243', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'Arroyo San Cipriano', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'El Hormiguero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0160', 'name' => 'El Guásimo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0164', 'name' => 'Jiménez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86244', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'Ferlles Nuevo Campestre', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0172', 'name' => 'Samarkanda', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86245', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0024', 'name' => 'Guatacalca (Guatacalca 1ra. Sección)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0030', 'name' => 'Amatón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0157', 'name' => 'Arroyo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0161', 'name' => 'El Tigre', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0166', 'name' => 'Lomitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0171', 'name' => 'Saloya 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2570', 'name' => 'El Dorado', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86246', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'Libertad 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0029', 'name' => 'Palmira', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0031', 'name' => 'Real Campestre', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0046', 'name' => 'Bosque de Saloya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1271', 'name' => 'La Selva', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1295', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1296', 'name' => 'Manuel Buendía Téllez Girón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1526', 'name' => 'La Pera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2664', 'name' => 'Tabasco I', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2665', 'name' => 'Tabasco II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2666', 'name' => 'Brisas del Carrizal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2667', 'name' => 'Paseos de La Primavera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2668', 'name' => 'Aparceros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86247', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'América', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'Residencial Mediterráneo', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'Europa', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'El Cedro', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0027', 'name' => 'Privada Real del Cedro', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0028', 'name' => 'Pomoca Valle Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0181', 'name' => 'Saloya 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1769', 'name' => 'Corralillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2487', 'name' => 'Pomoca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2562', 'name' => 'Tenerife', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2659', 'name' => 'Quintas del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2669', 'name' => 'Los Naranjos', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2670', 'name' => 'Guayacan', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '005', 'name' => 'Comalcalco', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86300', 'locality' => 'Comalcalco', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0247', 'name' => 'Comalcalco Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86320', 'locality' => 'Comalcalco', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0249', 'name' => 'San Silverio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1125', 'name' => 'Gustavo de La Fuente Dorantes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1454', 'name' => 'Belén', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1504', 'name' => 'Tomas Garrido', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1509', 'name' => 'Infonavit', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1571', 'name' => 'Conjunto Habitacional Presidentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1839', 'name' => 'Palma Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1840', 'name' => 'Conjunto Habitacional Presidentes 2', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86323', 'locality' => 'Comalcalco', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0250', 'name' => 'San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1844', 'name' => 'Adolfo López Mateos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86324', 'locality' => 'Comalcalco', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1574', 'name' => 'Villa Maya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86325', 'locality' => 'Comalcalco', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1841', 'name' => 'Magisterial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1843', 'name' => 'Ecológica Lic. Carlos A. Madrazo Becerra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86330', 'locality' => 'Comalcalco', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0252', 'name' => 'San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86340', 'locality' => 'Comalcalco', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Bicentenario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1453', 'name' => 'Solidaridad Nacional A C', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1842', 'name' => 'Magisterial 2', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86350', 'locality' => 'Comalcalco', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0254', 'name' => 'Vicente Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86357', 'locality' => 'Comalcalco', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0255', 'name' => 'San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1154', 'name' => 'La Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1456', 'name' => 'Buenavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1846', 'name' => 'Asturias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86360', 'locality' => 'Comalcalco', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'La Escondida', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0257', 'name' => 'Las Rosas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1845', 'name' => 'Jorge Díaz Serrano', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86369', 'locality' => 'Comalcalco', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0253', 'name' => 'Santo Domingo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0258', 'name' => 'Xochimilco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1503', 'name' => 'Villas de Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86370', 'locality' => 'Comalcalco', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0259', 'name' => 'Santa Amalia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1071', 'name' => 'Delicias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86380', 'locality' => 'Comalcalco', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1847', 'name' => 'La Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86388', 'locality' => 'Comalcalco', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0261', 'name' => 'PEMEX (Cobertizo)', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2632', 'name' => 'Las Brisas', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86389', 'locality' => 'Comalcalco', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0262', 'name' => 'Lázaro Cárdenas Del Rio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1095', 'name' => 'Empleado de Confianza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1457', 'name' => 'Fovissste', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1458', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86630', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0508', 'name' => 'Guayo 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0509', 'name' => 'Guayo 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0510', 'name' => 'Guayo 3ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0511', 'name' => 'Emiliano Zapata 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0512', 'name' => 'Hermenegildo Galeana', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0513', 'name' => 'Lázaro Cárdenas 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0514', 'name' => 'Lázaro Cárdenas 3ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0515', 'name' => 'Emiliano Zapata 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0570', 'name' => 'Ignacio Gutiérrez Gómez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0578', 'name' => 'Arroyo Hondo 4ta. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1608', 'name' => 'Carlos Greene 3a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1609', 'name' => 'Carlos Greene 4a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1849', 'name' => 'Lázaro Cárdenas 2da. Sección (El Retiro)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86640', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0519', 'name' => 'Francisco I Madero 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0520', 'name' => 'Francisco I Madero 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0521', 'name' => 'Gregorio Méndez 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0522', 'name' => 'Gregorio Mendez 3a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0527', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0531', 'name' => 'Tecolutilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0550', 'name' => 'Reyes Hernández 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0564', 'name' => 'Aldama', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0569', 'name' => 'León Zárate 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0573', 'name' => 'Aldama 3ra. Sección (Huapacalito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0575', 'name' => 'Aldama 4ta. Sección (El Naranjito)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1610', 'name' => 'Belisario Dominguez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1613', 'name' => 'Betania', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1622', 'name' => 'León Zárate 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1631', 'name' => 'Sur Aldama', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1851', 'name' => 'Aldama 2da. Sección (Fernando Segovia)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86643', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Progreso Tular 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0507', 'name' => 'Centro Tular 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0516', 'name' => 'Centro Tular 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0525', 'name' => 'José María Pino Suárez 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0526', 'name' => 'José María Pino Suárez 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0532', 'name' => 'Tránsito Tular', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0535', 'name' => 'Chicozapote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0537', 'name' => 'Progreso Tular 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1611', 'name' => 'José María Pino Suárez 3ra. Sección (Corinto)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86644', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0523', 'name' => 'Ignacio Zaragoza 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0524', 'name' => 'Ignacio Zaragoza 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0528', 'name' => 'Patastal 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0529', 'name' => 'Patastal 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0530', 'name' => 'Patastal 3ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1612', 'name' => 'Tío Moncho (Urania Franyutti de Vázquez)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1616', 'name' => 'Ignacio Zaragoza 4ta. Sección (San Andrés)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86645', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0536', 'name' => 'Ignacio Zaragoza 3ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0517', 'name' => 'Cocohital', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86650', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0542', 'name' => 'Norte 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0543', 'name' => 'Occidente 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0544', 'name' => 'Occidente 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0583', 'name' => 'Independencia 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1617', 'name' => 'Occidente 3a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1618', 'name' => 'Occidente 4a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1854', 'name' => 'San Fernando (Pueblo Nuevo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86652', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0518', 'name' => 'Zapotal 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0551', 'name' => 'Zapotal 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1615', 'name' => 'Gregorio Méndez 4ta. Sección (El Santiago)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1852', 'name' => 'Zapotal 3ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86654', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0547', 'name' => 'Sargento López 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0552', 'name' => 'Sgto. López 2a Secc (El Chuzo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0557', 'name' => 'Sargento López 3ra. Sección (San Jorge)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1619', 'name' => 'Guatemalán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1848', 'name' => 'Sargento López 4a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86655', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0539', 'name' => 'Reyes Hernández 2da. Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1614', 'name' => 'Gregorio Méndez 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86657', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0558', 'name' => 'Sur 2a Secc (La Trinidad)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0559', 'name' => 'Sur 3a Secc (El Zapote)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86658', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'San Joaquín', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0546', 'name' => 'Oriente 2da. Sección (San Cayetano)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0548', 'name' => 'Sur 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0553', 'name' => 'Sur 4ta. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0556', 'name' => 'Oriente 4ta. Sección (Tripa Ciega)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0560', 'name' => 'Sur 5ta. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0562', 'name' => 'Oriente 3a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0563', 'name' => 'Oriente 5a Secc (La Candelaria)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1850', 'name' => 'Oriente 6ta. Sección (Los Mulatos)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86660', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0565', 'name' => 'Arena 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0566', 'name' => 'Arroyo Hondo 1ra. Sección (Guácimo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0567', 'name' => 'Arroyo Hondo 3a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0568', 'name' => 'Carlos Greene', 'zone_type' => 'Urbano', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0571', 'name' => 'Arroyo Hondo 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0572', 'name' => 'Carlos Greene 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0574', 'name' => 'Arena 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0576', 'name' => 'Arena 3ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0577', 'name' => 'Arena 4ta. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1620', 'name' => 'Arena 5a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1621', 'name' => 'Arena 6ta Sección (La Bolsa)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86670', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'La Quinta', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0541', 'name' => 'Norte 1ra. Sección (Buena Vista)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0545', 'name' => 'Oriente 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0554', 'name' => 'Francisco Trujillo Gurría', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0555', 'name' => 'Jesús Carranza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0579', 'name' => 'Cupilco', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0580', 'name' => 'Cuxcuxapa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0581', 'name' => 'Chichicapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0582', 'name' => 'Independencia 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0584', 'name' => 'Paso de Cupilco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1624', 'name' => 'El Ángel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1625', 'name' => 'Independencia 3a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1626', 'name' => 'Champa de Cupilco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1627', 'name' => 'Lagartera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1628', 'name' => 'Novillero 4a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1629', 'name' => 'Carlos Pellicer Cámara', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1630', 'name' => 'Uspí', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1750', 'name' => 'Potrerillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1853', 'name' => 'Oriente 1a Secc (Santo Domingo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2547', 'name' => 'Gobernadores', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '008', 'name' => 'Huimanguillo', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86400', 'locality' => 'Huimanguillo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0268', 'name' => 'Huimanguillo Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0343', 'name' => 'Villa Flores 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1054', 'name' => 'Nuevo Centro de Convivencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1061', 'name' => '5 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1063', 'name' => 'Club Liberal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1091', 'name' => 'El Torito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1123', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1128', 'name' => 'Huimanguillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1179', 'name' => 'Los Angeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1209', 'name' => 'Pedro C Colorado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1416', 'name' => 'Pueblo Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1417', 'name' => 'Comisión Federal de Electricidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '1418', 'name' => 'La Ceiba (infonavit)', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '1419', 'name' => 'Avenida de La Juventud', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1445', 'name' => 'Mastelero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1446', 'name' => 'C-31 (General Francisco Villa)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1962', 'name' => 'Jardines de Mezcalapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1963', 'name' => 'Los Frutales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1964', 'name' => 'Magisterial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2557', 'name' => 'El Desecho 1ra Sección (Playa I)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86402', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Pomoca Bicentenario', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'San Lázaro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'Alfa y Omega', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'Ada Isabel', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0271', 'name' => 'Mecatepec', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0272', 'name' => 'Monte de Oro 1a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0273', 'name' => 'Ocuapan', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0277', 'name' => 'Tecominoacan', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0282', 'name' => 'Río Seco y Montaña 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0283', 'name' => 'C-41 (Licenciado Carlos A. Madrazo)', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0315', 'name' => 'Monte de Oro 3ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2328', 'name' => 'Río Seco y Montaña 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2363', 'name' => 'Las Pampas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2583', 'name' => 'Los Naranjos 3ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2629', 'name' => 'Río Seco y Montaña 3ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86403', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0276', 'name' => 'San Fernando', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0285', 'name' => 'C-34 (Licenciado Benito Juárez García)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0287', 'name' => 'C-26 (General Pedro C. Colorado)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0299', 'name' => 'Pico de Oro 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0301', 'name' => 'Pico de Oro 3ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2368', 'name' => 'Tierra Colorada 2da Sección (Silbarán)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2369', 'name' => 'Tierra Colorada 3ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2405', 'name' => 'El Cabrito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2409', 'name' => 'Paso de la Mina 3ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2503', 'name' => 'Paso de La Mina 2da Sección (Barrial)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86406', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0264', 'name' => 'El Desecho 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0265', 'name' => 'El Desecho 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0266', 'name' => 'El Puente 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0267', 'name' => 'Guiral y González 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0269', 'name' => 'Libertad', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0270', 'name' => 'Los Naranjos 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0286', 'name' => 'Los Naranjos 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2329', 'name' => 'El Puente 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86407', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0278', 'name' => 'Tierra Nueva 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0279', 'name' => 'Tierra Nueva 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0292', 'name' => 'Laguna de los Limones', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2314', 'name' => 'Ostitán 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2315', 'name' => 'Ostiatán 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2316', 'name' => 'Villa Flores 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86409', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0274', 'name' => 'Otra Banda 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0290', 'name' => 'Macayo y Naranjo 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0291', 'name' => 'Otra Banda 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1760', 'name' => 'Otra Banda 3a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2324', 'name' => 'Macayo y Naranjo 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2506', 'name' => 'Samaria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86410', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2332', 'name' => 'C-32 (Licenciado Francisco Trujillo Gurría)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2330', 'name' => 'Monte de Oro 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2331', 'name' => 'C-40 (Ernesto Aguirre Colorado)', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86413', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0304', 'name' => 'La Ceiba 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2385', 'name' => 'La Ceiba 1ra. Sección (Ruiz Cortínes)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2386', 'name' => 'Luis Cabrera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2388', 'name' => 'El Chapo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2391', 'name' => 'El Cocoite', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2574', 'name' => 'La Ceiba 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86414', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Zapotal 5ta. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0307', 'name' => 'Zapotal 1ra. Sección (San Miguel)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2397', 'name' => 'Palo Mulato (Zapotal)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2398', 'name' => 'El Palmar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2401', 'name' => 'Cuauhtémoc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2494', 'name' => 'Zapotal 4ta Sección (Zapotalito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86415', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0296', 'name' => 'Pejelagartero 1ra. Sección (Los Pinos)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0298', 'name' => 'Pejelagartero 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0305', 'name' => 'C-25 (Isidro Cortés Rueda)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2292', 'name' => 'Emiliano Zapata (Chichonal de la Boyería)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2373', 'name' => 'Benito Juárez 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2533', 'name' => 'Pejelagartero 1ra. Sección (Nuevo Progreso)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2534', 'name' => 'Zapotal 3ra Sección (El Corchal)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2580', 'name' => 'Pejelagartero 1ra Sección (Chichonal)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2647', 'name' => 'Pejelagartero 1ra. Sección (El Arroyito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2650', 'name' => 'Pejelagartero 1ra Sección (El Filero)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86416', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0309', 'name' => 'Zanapa 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0319', 'name' => 'Zanapa 2da Sección (El Tumbo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86417', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Benito Juárez 2da. Sección (Monte Alegre)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0302', 'name' => 'Blasillo 1ra Sección (Nicolás Bravo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2374', 'name' => 'Blasillo 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2376', 'name' => 'Blasillo 4a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86418', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0295', 'name' => 'La Venta', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1427', 'name' => 'El Salvamento', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1428', 'name' => 'Francisco I Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1430', 'name' => 'Rovirosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1431', 'name' => 'El Piojo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1432', 'name' => 'Nueva Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2379', 'name' => 'Emporio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2380', 'name' => 'Aquiles Serdán 2da. Sección (Azucenita)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2381', 'name' => 'Aquiles Serdán 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2383', 'name' => 'El Paraíso', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86420', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0311', 'name' => 'Central Fournier 1ra. Sección (El Coleto)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0312', 'name' => 'Francisco Rueda', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86421', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0275', 'name' => 'Paso de la Mina 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0313', 'name' => 'Huapacal 1a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86423', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0317', 'name' => 'Tres Bocas 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0318', 'name' => 'Ignacio Gutiérrez 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2400', 'name' => 'Huapacal 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2402', 'name' => 'Ignacio Gutiérrez 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2403', 'name' => 'Ignacio Gutiérrez 3a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2404', 'name' => 'Ignacio Gutiérrez 4a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2621', 'name' => 'Huapacal 4a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86425', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2323', 'name' => 'Santa Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2340', 'name' => 'Manuel Sanchez Mármol', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2344', 'name' => 'Macabil', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2357', 'name' => 'Unidad Modelo Sábana Larga', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86426', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2300', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2301', 'name' => 'Miguel Hidalgo y Costilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86427', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Vieja Guardia Agrarista', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0320', 'name' => 'Estación Martínez Gaytán', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
		['key' => '0321', 'name' => 'El Guanal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0322', 'name' => 'Francisco Martinez Gaytan', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1830', 'name' => 'Las Galaxias', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2350', 'name' => 'Francisco Villa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2352', 'name' => 'Díez de Abril', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2396', 'name' => 'Pedro C. Colorado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2406', 'name' => 'Central Fournier 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2508', 'name' => 'Laguna del Rosario', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86428', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0323', 'name' => 'Río Pedregal', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2341', 'name' => 'El Sacrificio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2394', 'name' => 'Santa Lucía', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2410', 'name' => 'Francisco I. Madero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86430', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2296', 'name' => 'El Sacrificio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2303', 'name' => 'Pedregal Moctezuma 2da. Sección (Leyva)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0325', 'name' => 'Economía', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0327', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0329', 'name' => 'Jose Mercedes Gamas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0338', 'name' => 'Pedregal Moctezuma 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2289', 'name' => 'José Narciso Rovirosa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86432', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0332', 'name' => 'José María Pino Suárez 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0333', 'name' => 'Estación Zanapa', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
		['key' => '2291', 'name' => 'Gregorio Méndez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2308', 'name' => 'Esperanza del Bajío', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86433', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0334', 'name' => 'Venustiano Carranza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2318', 'name' => 'Marcelino Inorrueta de la Fuente', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2532', 'name' => 'Tierra Nueva 4ta Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2643', 'name' => 'La Lucha', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86434', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0330', 'name' => 'San Manuel', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0335', 'name' => 'Paredón 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1753', 'name' => 'Rafael Martinez de Escobar', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2310', 'name' => 'Paredón 2da. Sección (Álvaro Obregón)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2311', 'name' => 'Las Giraldas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2312', 'name' => 'Paredón 1ra. Sección (El Porvenir)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2313', 'name' => 'Paredón 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2335', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2660', 'name' => 'San Manuel Tenerife', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86436', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0303', 'name' => 'La Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0336', 'name' => 'El Encomendero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2333', 'name' => 'El Suspiro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2334', 'name' => 'La Gavia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2537', 'name' => 'Salvador Neme Castillo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2555', 'name' => 'Roberto Madrazo Pintado', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2598', 'name' => 'El Complejo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86440', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0324', 'name' => 'Chicoacán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0326', 'name' => 'Gilberto Flores Muñoz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0331', 'name' => 'Tierra Nueva 3ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0341', 'name' => 'Chontalpa (Estación Chontalpa)', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86442', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0337', 'name' => 'Francisco J Santamaría 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2521', 'name' => 'Enrique Rodríguez Cano', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86443', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0340', 'name' => 'Caobanal 1ra. Sección (La Victoria)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0344', 'name' => 'Amacohíte 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0345', 'name' => 'Jose Maria Morelos y Pavón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2290', 'name' => 'Francisco Sarabia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2293', 'name' => 'Caobanal 1ra Sección (Mezcalapa)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2294', 'name' => 'Caobanal 2da Sección (Pedro Sánchez Magallanes)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86444', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0342', 'name' => 'La Arena 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0347', 'name' => 'Pedregalito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2288', 'name' => 'José María Pino Suárez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86445', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0346', 'name' => 'Pedregal Moctezuma 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0348', 'name' => 'Pedregal Moctezuma 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86446', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0339', 'name' => 'Alto Amacohíte 3ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0350', 'name' => 'Malpasito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2279', 'name' => 'Las Flores', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2280', 'name' => 'Villa de Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2282', 'name' => 'Francisco J. Mujica', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2283', 'name' => 'Carlos A. Madrazo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2284', 'name' => 'Chimalapa 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2285', 'name' => 'Gustavo Díaz Ordaz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2564', 'name' => 'Chimalapa 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2607', 'name' => 'La Candelaria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86454', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2359', 'name' => 'Rancho Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2364', 'name' => 'La Florida', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2365', 'name' => 'La Mina', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2367', 'name' => 'Tierra Colorada 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2378', 'name' => 'La Trinidad', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2407', 'name' => 'Los Cocos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86456', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0352', 'name' => 'Paso Del Rosario', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2322', 'name' => 'El Trébol (La Estrella)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2531', 'name' => 'Nuevo Progreso', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2567', 'name' => 'Licenciado Antonio Zamora Arrioja', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '002', 'name' => 'Cárdenas', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86460', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0015', 'name' => 'San Rafael', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0353', 'name' => 'Pedro Sánchez Magallanes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0354', 'name' => 'Cuauhtemoczín', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0355', 'name' => 'El Barí 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0356', 'name' => 'El Barí 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0357', 'name' => 'Ojoshal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0358', 'name' => 'Coronel Andrés Sánchez Magallanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0364', 'name' => 'Paylebot', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0366', 'name' => 'El Yucateco (Paylebot 2da. Sección)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2568', 'name' => 'Tomás Brito Lara', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2596', 'name' => 'Ley Federal de la Reforma Agraria (San Ramón)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86461', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0365', 'name' => 'Chicozapote 2da. Sección (El Retiro)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0419', 'name' => 'Benito Juárez (Campo Magallanes)', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1827', 'name' => 'La Trinidad', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0034', 'name' => 'El Campo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0363', 'name' => 'Chicozapote 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86464', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0012', 'name' => 'El Alacrán (Manatinero)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0368', 'name' => 'Sinaloa 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1826', 'name' => 'El Alacrán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86465', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'Ignacio Zaragoza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0016', 'name' => 'Las Calzadas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0017', 'name' => 'Las Limas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0370', 'name' => 'Las Flores (La Palma)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0420', 'name' => 'Campo Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0423', 'name' => 'El Capricho', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0424', 'name' => 'Ignacio Gutiérrez Gómez (San Felipe)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0425', 'name' => 'Buenavista 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0426', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0429', 'name' => 'El Bronce', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86466', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0428', 'name' => 'Poblado C-23 General Venustiano Carranza', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86467', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0023', 'name' => 'El Chocho (Boca del Río)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0372', 'name' => 'Islas Encantadas 1ra. Sección (El Zapote)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86470', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0392', 'name' => 'Río Seco 2da. Sección A', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0395', 'name' => 'Santana 1ra. Sección A', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0396', 'name' => 'Santana 2da. Sección A', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0397', 'name' => 'Santana 2da. Sección B (La Palma)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0398', 'name' => 'Santana 3ra. Sección A (El Filero)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86471', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0026', 'name' => 'Julián Montejo Velázquez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0380', 'name' => 'El Golpe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0381', 'name' => 'El Mingo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0388', 'name' => 'Poza Redonda 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0390', 'name' => 'Poza Redonda 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0402', 'name' => 'Santuario 3ra. Sección (Piedras Negras)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0403', 'name' => 'Santuario 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0404', 'name' => 'Santuario 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3047', 'name' => 'Poza Redonda 3ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86473', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0411', 'name' => 'Poblado C-09 Licenciado Francisco I. Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0414', 'name' => 'Santana 4ta. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86474', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Tío Moncho', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0405', 'name' => 'Francisco Trujillo Gurría', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1823', 'name' => 'Las Coloradas 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2536', 'name' => 'Las Coloradas 2da. Sección B', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2604', 'name' => 'Las Coloradas 2da. Sección (Ampliación las Aldeas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86475', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Encrucijada 3ra. Sección (Las Calzadas)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0361', 'name' => 'Azucena 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0373', 'name' => 'Naranjeño 1ra. Sección (Colonia la Fe)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0382', 'name' => 'Encrucijada 1ra. Sección Rincón Brujo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0407', 'name' => 'Azucena 4ta. Sección (Torno Alegre)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0409', 'name' => 'Encrucijada 5ta. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0410', 'name' => 'Encrucijada 4ta. Sección B (La Lucha)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1824', 'name' => 'Azucena 5ta. Sección (El Apompal)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2592', 'name' => 'Azucena 6ta. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2618', 'name' => 'Santuario 4ta. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86476', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0412', 'name' => 'Poblado C-10 General Lázaro Cárdenas del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86477', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0362', 'name' => 'Azucena 2da Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0371', 'name' => 'Naranjeño 3ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1825', 'name' => 'Azucena 3ra. Sección (El Triunfo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86478', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'El Jobo (Punta Brava)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0377', 'name' => 'Poblado C-11 José María Morelos y Pavón', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0378', 'name' => 'Nueva Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0386', 'name' => 'Naranjeño 2da. Sección A', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0415', 'name' => 'Poblado C-14 General Plutarco Elías Calles', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86480', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0430', 'name' => 'Poblado C-22 Licenciado José María Pino Suárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86483', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0445', 'name' => 'Poblado C-21 Licenciado Benito Juárez García', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1759', 'name' => 'Poblado C-15 Adolfo López Mateos', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86484', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0416', 'name' => 'Poblado C-16 General Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1820', 'name' => 'Poblado C-20 Miguel Hidalgo y Costilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86485', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0408', 'name' => 'Ingenio Presidente Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0451', 'name' => 'Poblado C-28 Coronel Gregorio Méndez Magaña', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0452', 'name' => 'Poblado C-27 Ingeniero Eduardo Chávez Ramírez', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86486', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'Las Nuevas Esperanzas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'Las Esperanzas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0025', 'name' => 'Juan Escutia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3050', 'name' => 'Poblado C-33 20 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86490', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'Luis Donaldo Colosio Murrieta', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0008', 'name' => 'Celia González de Rovirosa', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'El Carmen', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'El Carrizal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0385', 'name' => 'Santa Rosalía (Miguel Hidalgo 2da Sección)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0391', 'name' => 'Río Seco 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0394', 'name' => 'Santa Rosalía', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0413', 'name' => 'Río Seco 2da. Sección C', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0440', 'name' => 'Miguel Hidalgo 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0443', 'name' => 'Zapotal 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0463', 'name' => 'Santa Maria de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0465', 'name' => 'De los Santos', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2603', 'name' => 'Rubén Jaramillo Lazo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2661', 'name' => 'Villa San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86493', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0417', 'name' => 'Poblado C-17 Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0418', 'name' => 'Santana 5ta. Sección (El Espino)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0444', 'name' => 'Zapotal 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0449', 'name' => 'Poblado C-29 General Vicente Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1821', 'name' => 'Zapotal 3ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2631', 'name' => 'Miguel Hidalgo Zapotal 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86495', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0014', 'name' => 'Arroyo Hondo (San Rosendo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Santa Isidra', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0442', 'name' => 'Arroyo Hondo 2da. Sección Santa Teresa B', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1822', 'name' => 'Arroyo Hondo 1ra. Sección (Santa Teresa A)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2581', 'name' => 'El Parnaso', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86500', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0455', 'name' => 'Cárdenas Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1505', 'name' => 'El Gringo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86520', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0457', 'name' => 'Alameda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0458', 'name' => 'Melchor Ocampo 2a Secc', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86523', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1467', 'name' => 'Los Cañales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86524', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0031', 'name' => 'Río Seco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86527', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0029', 'name' => 'El Suspiro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86528', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0459', 'name' => 'Santa Rita Infonavit', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86529', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0460', 'name' => 'Nuevo Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86530', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0461', 'name' => 'Carlos Pellicer Camara', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1176', 'name' => 'Bajío Loma Bonita Infonavit', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1232', 'name' => 'Sahop', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1724', 'name' => 'Infonavit Loma Bonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86533', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0462', 'name' => 'El Toloque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86534', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1716', 'name' => 'Tabscoob', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1725', 'name' => 'Vereda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86535', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1122', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86540', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0032', 'name' => 'San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0464', 'name' => 'Puerto Rico', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1834', 'name' => 'Los Morales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1836', 'name' => 'Calzada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86543', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0434', 'name' => 'Calzada 1ra. Sección Norte A', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86544', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'Carlos Alberto Wilson Gómez', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0450', 'name' => 'Cárdenas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86545', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0439', 'name' => 'Melchor Ocampo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0466', 'name' => 'Roger Falconi Vera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1837', 'name' => 'Nueva Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1838', 'name' => 'Agua Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86546', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0027', 'name' => 'La Alianza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0448', 'name' => 'Cárdenas 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86547', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0020', 'name' => '5 de Mayo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0028', 'name' => 'La Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0435', 'name' => 'Calzada 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86550', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1060', 'name' => 'Empleados Del Csat', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1502', 'name' => 'Sarh', 'zone_type' => 'Urbano', 'settlementtype_id' => '3','zipcode_id' => $idZip],
		['key' => '1734', 'name' => 'Ceiba', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1735', 'name' => '7 de Octubre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86553', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0468', 'name' => 'Deportiva Infonavit', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '1464', 'name' => 'Jacinto Lopez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1835', 'name' => 'Santa María Periférico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86554', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1831', 'name' => 'Los Jiménez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86555', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Sección 10 de Azucareros', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0441', 'name' => 'Nueva Zelandia (El Ingenio)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86556', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'La Península', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0004', 'name' => 'Benito Juárez (La Playita)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'Paso y Playa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86560', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1219', 'name' => 'Pueblo Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86564', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1468', 'name' => 'El Palmar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86570', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0470', 'name' => 'Los Reyes Loma Alta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86573', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0033', 'name' => 'Santa Catalina', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1731', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86574', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0469', 'name' => 'Santa Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1463', 'name' => 'Villa Esmeralda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1729', 'name' => 'San Pedro de los Cedros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86576', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1732', 'name' => 'El Encanto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86577', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0453', 'name' => 'Arroyo Hondo Abejonal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86580', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0438', 'name' => 'Habanero 1ra. Sección (Venustiano Carranza)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86583', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0437', 'name' => 'Habanero 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86584', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0024', 'name' => 'General Francisco Villa', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86590', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0433', 'name' => 'El Bajío 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86596', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0472', 'name' => 'S.A.R.H.', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1715', 'name' => 'Prados de Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86597', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0030', 'name' => 'Zolia E. Peña Falcón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0474', 'name' => 'Paso y Playa Invitab', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1507', 'name' => 'Petrolera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86598', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1460', 'name' => 'Jose Eduardo de Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1461', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1508', 'name' => 'El Bajío 1ra. Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86599', 'locality' => 'Cárdenas', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0476', 'name' => 'Sección 40', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1113', 'name' => 'Fovissste', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1465', 'name' => 'El Embudo Fovissste', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1506', 'name' => 'Jardines de Tabasco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '014', 'name' => 'Paraíso', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86600', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0478', 'name' => 'Francisco I. Madero (Madero)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0479', 'name' => 'La Unión 1ra. Sección (Amatillo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0480', 'name' => 'Las Flores 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0481', 'name' => 'Las Flores 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0483', 'name' => 'Moctezuma 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0484', 'name' => 'Moctezuma 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2050', 'name' => 'Moctezuma (Francisco I. Madero 3ra. Sección)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2051', 'name' => 'Francisco I. Madero 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2052', 'name' => 'Francisco I. Madero', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2058', 'name' => 'El Escribano', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2538', 'name' => 'Costa Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86601', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0486', 'name' => 'Las Flores 3ra. Sección (El Cerro)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86602', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0487', 'name' => 'La Unión 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86603', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0488', 'name' => 'Barra de Tupilco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86605', 'locality' => 'Paraíso', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0485', 'name' => 'Paraíso Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86606', 'locality' => 'Paraíso', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0477', 'name' => 'El Limoncito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0482', 'name' => 'El Limón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1096', 'name' => 'Empleados de Confianza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1171', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1210', 'name' => 'Petrolera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86607', 'locality' => 'Paraíso', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Residencial Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'Privada La Ceiba', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1151', 'name' => 'La Ceiba', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1182', 'name' => 'Los Cocos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1185', 'name' => 'Magisterial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2559', 'name' => 'La Continuidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2638', 'name' => 'Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86608', 'locality' => 'Paraíso', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Belo Horizonte', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0004', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'Los Olivos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'Bahías del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1033', 'name' => 'Carlos A Madrazo Becerra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1110', 'name' => 'Fonhapo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1183', 'name' => 'Los Mangos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1216', 'name' => 'Primavera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1225', 'name' => 'Quintín Arauz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1399', 'name' => 'La Deportiva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1400', 'name' => 'Hueso de Puerco (Colonia Quintín Arauz)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86609', 'locality' => 'Paraíso', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1065', 'name' => 'El Coquito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1164', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1401', 'name' => 'Adalberto Santos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86610', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0492', 'name' => 'Puerto Ceiba', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2063', 'name' => 'Puerto Ceiba (Carrizal)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86611', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0494', 'name' => 'José María Morelos y Pavón (El Bellote)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0495', 'name' => 'Libertad 1ra. Sección (El Chivero)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86613', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0499', 'name' => 'Nuevo Torno Largo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2064', 'name' => 'Andrés García la Isla', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2065', 'name' => 'El Bellote (Miguel de la Madrid)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2066', 'name' => 'Chiltepec (Sección Pénjamo)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2067', 'name' => 'Chilpetec Sección Banco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86615', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Blancas Mariposas', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0497', 'name' => 'Oriente 1a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2061', 'name' => 'Oriente (San Cayetano)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2062', 'name' => 'Monte Adentro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86616', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0490', 'name' => 'Potreritos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0491', 'name' => 'Occidente (San Francisco)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2049', 'name' => 'Moctezuma 3a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2059', 'name' => 'Oriente Sección Hormiguero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86617', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0496', 'name' => 'Nicolás Bravo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0501', 'name' => 'Libertad 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1751', 'name' => 'Palestina', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2054', 'name' => 'Nicolás Bravo 2da. Sección (La Gloria)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2055', 'name' => 'Nicolás Bravo 3a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2056', 'name' => 'Nicolás Bravo 4ta. Sección (Tilapa)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2057', 'name' => 'Nicolás Bravo 5ta. Sección (Punta Brava)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2060', 'name' => 'Oriente 2a Sección (Palma Hueca)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2571', 'name' => 'Campestre del Lago', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86618', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0502', 'name' => 'Guano Solo (El Coquito)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2048', 'name' => 'La Unión 3ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86620', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0503', 'name' => 'Aquiles Serdán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0504', 'name' => 'Chiltepec (Puerto Chiltepec)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0505', 'name' => 'Chiltepec (Sección Tanque)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86621', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0506', 'name' => 'Aquiles Serdán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '006', 'name' => 'Cunduacán', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86680', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0585', 'name' => 'Amado Gómez', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0586', 'name' => 'Casa Blanca 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0587', 'name' => 'Casa Blanca 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0589', 'name' => 'José María Pino Suárez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0590', 'name' => 'La Lucha', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0592', 'name' => 'Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0598', 'name' => 'Tierra y Libertad', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0607', 'name' => 'Libertad 4ta. Sección (Vicente Guerrero)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0609', 'name' => 'El Tular', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1861', 'name' => 'Libertad 5ta Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1864', 'name' => 'Libertad 6ta. Sección (Los Martínez)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1866', 'name' => 'Enrique González Pedrero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1867', 'name' => 'Ignacio Zaragoza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1868', 'name' => 'Río Seco 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86681', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0593', 'name' => 'Mantilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0600', 'name' => 'La Piedra 3ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0630', 'name' => 'Yoloxóchitl 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1871', 'name' => 'Once de Febrero 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1872', 'name' => 'Santa Lucía', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1877', 'name' => 'San Rafael', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86682', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0603', 'name' => 'La Chonita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0604', 'name' => 'Monterrey', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1870', 'name' => 'Río Seco 3ra. Sección (La Playita)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86683', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0606', 'name' => 'Reforma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1860', 'name' => 'Libertad 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86684', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1862', 'name' => 'El Tunal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1863', 'name' => 'Alianza para la Producción', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1865', 'name' => 'Domingo Amado Brito Salgado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2578', 'name' => 'Libertad 3ra. Sección (Monte Grande)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86686', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0594', 'name' => 'Miahuatlán 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0602', 'name' => 'Yoloxóchitl 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0610', 'name' => 'La Piedra 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0611', 'name' => 'Miahuatlan 3a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0634', 'name' => 'Yoloxóchitl 3ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1891', 'name' => 'La Isla', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1895', 'name' => 'Yoloxóchitl 2da. Sección (San Severo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1897', 'name' => 'Miahuatlán (San Gregorio)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86687', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0588', 'name' => 'Felipe Carrillo Puerto', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0597', 'name' => 'Río Seco 2da. Sección (Santiaguito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0601', 'name' => 'Santo Tomás', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0613', 'name' => 'Buenaventura', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0614', 'name' => 'Once de Febrero 1ra Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1869', 'name' => 'Carlos Rovirosa (Tulipán)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1873', 'name' => 'Mantilla', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86690', 'locality' => 'Cunduacán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Torino', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'Cunduacán (El Moté)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'Jardines del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0004', 'name' => 'El Carmelo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'Loma Bonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0619', 'name' => 'Cunduacán Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0633', 'name' => 'Huacapa y Amestoy', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1034', 'name' => 'Abraham de La Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1038', 'name' => 'Atenas 2000', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1067', 'name' => 'Cristal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1068', 'name' => 'Cunduacan 2000', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1094', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1098', 'name' => 'Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1107', 'name' => 'La Finca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1192', 'name' => 'José María Morelos y Pavón (Morelitos)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1411', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1412', 'name' => 'Manuel Sanchez Mármol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1413', 'name' => 'Alianza', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1414', 'name' => 'San Antonio INVITAB', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1855', 'name' => 'Playa Azul', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1856', 'name' => 'Magisterial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1857', 'name' => 'Burócratas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1858', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2648', 'name' => 'Ceconca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86692', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0627', 'name' => 'Pechucalco', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0632', 'name' => 'Huimango 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86693', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0591', 'name' => 'La Piedra 4ta Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0623', 'name' => 'Huimango 1ra. Sección (La Esperanza)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0624', 'name' => 'Huimango 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0625', 'name' => 'La Piedra 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0628', 'name' => 'Pechucalco 2da. Sección (Las Cruces)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0631', 'name' => 'Huimango 3ra Sección (Los Cerros)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1874', 'name' => 'Emiliano Zapata (San Mateo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1875', 'name' => 'Huimango 2da. Sección (La Mona)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1876', 'name' => 'Morelos Piedra 3ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1878', 'name' => 'El Palmar', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86694', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0617', 'name' => 'Cúlico 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0618', 'name' => 'Cúlico 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1879', 'name' => 'Anta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86695', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0636', 'name' => 'Huimango', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86696', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0615', 'name' => 'Ceiba 1ra Sección (Jahuactal)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0620', 'name' => 'Dos Ceibas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0621', 'name' => 'Gregorio Méndez', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0629', 'name' => 'Rancho Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0635', 'name' => 'Anta y Cúlico (Santa Rita)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0638', 'name' => 'Buenos Aires', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0639', 'name' => 'Huapacal 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0640', 'name' => 'Los Cerros', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1880', 'name' => 'Cunduacán (San Pedro)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1881', 'name' => 'Huapacal 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1883', 'name' => 'Santa Isabel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1884', 'name' => 'Los Cedros', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86697', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0626', 'name' => 'Marín', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0641', 'name' => 'Cumuapa 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0642', 'name' => 'Plátano 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0643', 'name' => 'Plátano 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0644', 'name' => 'San Eligio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0646', 'name' => 'Laguna de Cucuyulapa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1885', 'name' => 'Colima', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1886', 'name' => 'San Pedro Cumuapa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1887', 'name' => 'El Carmen (Cumuapa)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1888', 'name' => 'Cumuapa 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1889', 'name' => 'Felipe Galván', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1890', 'name' => 'General Francisco J. Mújica', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1892', 'name' => 'Oscar Gómez Sáuz', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86698', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0595', 'name' => 'Miahuatlán 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0616', 'name' => 'Cucuyulapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0645', 'name' => 'Cucuyulapa 2da. Sección (Puente Samaria)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1893', 'name' => 'Mario Barrueta García', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1898', 'name' => 'Miahuatlán (San Nicolás)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '012', 'name' => 'Macuspana', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86700', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Siglo XXI', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0653', 'name' => 'Nicolás Bravo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0740', 'name' => 'Buena Vista (Puxcatán)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86702', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0658', 'name' => 'Francisco I. Madero Alto 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2560', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86703', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0657', 'name' => 'Lerdo de Tejada 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0659', 'name' => 'Monte Adentro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86704', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0648', 'name' => 'Abasolo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0736', 'name' => 'Gregorio Méndez 2da. Sección (Pataztal)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2473', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2475', 'name' => 'José María Pino Suárez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2476', 'name' => 'Gregorio Méndez 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2481', 'name' => 'Francisco Villa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86705', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0734', 'name' => 'Francisco I. Madero Alto 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2615', 'name' => 'San Joseito', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86706', 'locality' => 'Macuspana', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0014', 'name' => 'Arboleda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0652', 'name' => 'Macuspana Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1040', 'name' => 'Buenos Aires', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1380', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1381', 'name' => 'El Refugio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1382', 'name' => 'Los Pinos I', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1383', 'name' => 'Los Pinos II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1384', 'name' => 'PEMEX', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86707', 'locality' => 'Macuspana', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1181', 'name' => 'Ignacio Zaragoza (Los Ateos)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1497', 'name' => 'Burócratas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1498', 'name' => 'Primavera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1499', 'name' => 'Divino Misterio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1500', 'name' => 'Municipal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1501', 'name' => 'Crucifijo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1511', 'name' => 'El Recuerdo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1512', 'name' => 'Nueva Imagen', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86708', 'locality' => 'Macuspana', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1046', 'name' => 'El Castaño', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1261', 'name' => 'Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1379', 'name' => 'Los Gatos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86709', 'locality' => 'Macuspana', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1376', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1377', 'name' => 'Josefa Ortiz de Dominguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1378', 'name' => 'Florida', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1496', 'name' => 'Loma Linda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2602', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86710', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'Ignacio Manuel Altamirano 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0666', 'name' => 'Ignacio Manuel Altamirano 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0668', 'name' => 'Tierra Colorada', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0676', 'name' => 'Gustavo A. Madero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2454', 'name' => 'Unión y Libertad', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86711', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Bayona', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0669', 'name' => 'Belén', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0670', 'name' => 'Monte Largo 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2447', 'name' => 'Monte Largo 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2448', 'name' => 'Belén Monte Largo 3ra. Sección (Tronchadero)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2459', 'name' => 'Tomás Garrido Canabal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86714', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'Paraíso', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0667', 'name' => 'Morelos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0673', 'name' => 'Adolfo López Mateos (Corral Nuevo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0675', 'name' => 'Cuauhtémoc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0677', 'name' => 'Emiliano Zapata 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0706', 'name' => 'Emiliano Zapata 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2418', 'name' => 'Veinte de Noviembre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2442', 'name' => 'Morelos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2443', 'name' => 'Mariano Matamoros', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86715', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0678', 'name' => 'Buergos', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0679', 'name' => 'Lerdo de Tejada 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0680', 'name' => 'Playas de las Jiménez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86720', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Doctores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0013', 'name' => 'Limón 2da. Sección Sector A', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0681', 'name' => 'Santos Degollado 1ra. Sección (El Bayo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0684', 'name' => 'Petroquímica (Cuidad Pemex)', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
		['key' => '0702', 'name' => 'La Curva Uno', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0703', 'name' => 'Limón 1ra. Sección Sector B', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0708', 'name' => 'Nueva División del Bayo (Guatemala)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0711', 'name' => 'La Unión', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1074', 'name' => '18 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1152', 'name' => 'La Curva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1162', 'name' => 'La Unión', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1196', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1258', 'name' => '20 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1420', 'name' => 'Empleados de Confianza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1421', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2435', 'name' => 'El Bayo 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2436', 'name' => 'Las Delicias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2585', 'name' => 'El Canal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2588', 'name' => 'Hermenegildo Galeana (Chiveros)', 'zone_type' => 'Urbano', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2628', 'name' => '15 de Agosto', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3054', 'name' => 'El Bayo 1ra. Sección (Granada)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86722', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0689', 'name' => 'Bitzal 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0690', 'name' => 'Bitzal 3ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0691', 'name' => 'Bitzal 4ta. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0692', 'name' => 'Bitzal 5ta. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0693', 'name' => 'Bitzal 6ta. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2422', 'name' => 'Bitzal 7ma. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2432', 'name' => 'Los Naranjos 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2433', 'name' => 'Los Naranjos 2da. Sección (Sección Pichalito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86723', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0688', 'name' => 'Bitzal 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0695', 'name' => 'Lázaro Cárdenas 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0696', 'name' => 'Chilapilla 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0701', 'name' => 'José Colomo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2429', 'name' => 'Encrucijada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2430', 'name' => 'Miguel Hidalgo 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86724', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Nueva Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0674', 'name' => 'Vernet 6ta. Sección (San Lorenzo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0685', 'name' => 'Vernet 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0686', 'name' => 'Vernet 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0704', 'name' => 'Vernet 3ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0705', 'name' => 'Vernet 4ta. Sección (Juan Salas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0709', 'name' => 'Vernet 5ta. Sección (Corozal)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0710', 'name' => 'Limón 2da. Sección Sector B', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2434', 'name' => 'Chilapilla 2da. Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2438', 'name' => 'Vernet Sierra de Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2440', 'name' => 'Andrés García', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2449', 'name' => 'Limón 1ra. Sección Sector C', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2450', 'name' => 'Limón 1ra. Sección Sector A', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86725', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Simón Sarlat 2da. Sección (San Martín)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0697', 'name' => 'Aquiles Serdán (San Fernando)', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0723', 'name' => 'Simón Sarlat', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2545', 'name' => 'García', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86726', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2439', 'name' => 'Las Ferias', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2451', 'name' => 'La Escalera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2455', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2456', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2457', 'name' => 'Cacahuatalillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2458', 'name' => 'José López Portillo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2590', 'name' => 'El Regocijo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2600', 'name' => 'INDUVITAB', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3055', 'name' => 'Los Arbolitos', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0004', 'name' => 'San Juan Bautista', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'El Mango', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0012', 'name' => 'La Y Griega', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'El Naranjo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0698', 'name' => 'Benito Juárez (San Carlos)', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1075', 'name' => '18 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1175', 'name' => 'Linda Vista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1220', 'name' => 'Pueblo Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1247', 'name' => 'Santa Teresa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1425', 'name' => 'Campo Deportivo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1426', 'name' => 'Manuel Vargas Ramirez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86727', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0714', 'name' => 'Carmen Serdán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0715', 'name' => 'La Isla 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86728', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0682', 'name' => 'Santos Degollado 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0694', 'name' => 'Miguel Hidalgo 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2417', 'name' => 'Virginio Chan 3ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2425', 'name' => 'Nabor Cornelio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2426', 'name' => 'Pitahaya', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2428', 'name' => 'El Venadito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2431', 'name' => 'Lázaro Cárdenas 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2444', 'name' => 'Miguel Orrico de los Llanos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86730', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0707', 'name' => 'Francisco Bates', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0712', 'name' => 'Virginio Chan 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0713', 'name' => 'Virginio Chan 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0717', 'name' => 'El Congo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0719', 'name' => 'Límbano Blandín 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0720', 'name' => 'Tepetitán', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0722', 'name' => 'Clemente Reyes 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2467', 'name' => 'Clemente Reyes 2da. Sección (Cantemoc)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2485', 'name' => 'Progreso (Guaruma)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2575', 'name' => 'Chiquihuite', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86732', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0721', 'name' => 'El Triunfo 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0731', 'name' => 'Allende Alto 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0732', 'name' => 'Allende Alto 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2452', 'name' => 'El Triunfo 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2453', 'name' => 'El Triunfo 3ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2498', 'name' => 'La Ceiba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86733', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0654', 'name' => 'Pedro C. Colorado 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0735', 'name' => 'Francisco Javier Mina (El Coco)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2477', 'name' => 'Pedro C. Colorado 2da. Sección (Orizaba)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2483', 'name' => 'Allende Bajo 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86734', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2441', 'name' => 'El Guanal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86735', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2413', 'name' => 'Xicotencatl', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2415', 'name' => 'Castro y Güiro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2420', 'name' => 'Licenciado Juan César Becerra Bates', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2421', 'name' => 'El Güiro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86736', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'Sitio Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0724', 'name' => 'Alcalde Mayor', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0725', 'name' => 'Bonanza 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0726', 'name' => 'Bonanza 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0737', 'name' => 'Allende Bajo 1ra. Sección (San Joaquín)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2414', 'name' => 'El Chinalito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2466', 'name' => 'Clemente Reyes 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2484', 'name' => 'Celia González de Rovirosa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86737', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0718', 'name' => 'El Maluco 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2411', 'name' => 'Vicente Guerrero 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86738', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0728', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0729', 'name' => 'Venustiano Carranza (La Alianza)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2460', 'name' => 'Trinidad Malpica Hernández', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2461', 'name' => 'Corralillo 1ra. Sección (Nopalapa)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2462', 'name' => 'Corralillo 2da. Sección (La Princesa)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86739', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0727', 'name' => 'Corralillo 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0730', 'name' => 'Ramón Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2463', 'name' => 'Barrial', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2464', 'name' => 'Tierra Colorada (Vicente Guerrero 3ra. Sección)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2465', 'name' => 'Maluco 2da. Sección (Juan Vaquero)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2486', 'name' => 'Arroyo Hondo (Vicente Guerrero 2da. Sección)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86740', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0660', 'name' => 'Álvaro Obregón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0661', 'name' => 'Narciso Mendoza 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2474', 'name' => 'Carlos Greene 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86743', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0649', 'name' => 'Carlos Greene 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0663', 'name' => 'Guillermo Prieto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0733', 'name' => 'Miguel Allende', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86744', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0664', 'name' => 'Abasolo 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0665', 'name' => 'Pedro A. González', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86745', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0655', 'name' => 'Zopo Norte', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0739', 'name' => 'Buena Vista (Apasco)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0745', 'name' => 'Chivalito 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2469', 'name' => 'Melchor Ocampo 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2470', 'name' => 'Chivalito 4ta. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86746', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Alto Tulijá 2da. Sección (Paredón)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0738', 'name' => 'Las Campanas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0742', 'name' => 'Alto Tulijá 1ra. Sección (Lechugal)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0743', 'name' => 'Bajo Tulijá', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2479', 'name' => 'Zopo Sur', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2480', 'name' => 'San José', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86747', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0744', 'name' => 'Santuario 1ra. Sección (Estación Macuspana)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2468', 'name' => 'Melchor Ocampo 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2471', 'name' => 'Profesor Caparroso 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2478', 'name' => 'Santuario 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86748', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0746', 'name' => 'Profesor Caparroso 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2472', 'name' => 'Palomas', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '003', 'name' => 'Centla', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86750', 'locality' => 'Frontera', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'CETMAR', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0754', 'name' => 'Frontera Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1037', 'name' => 'Arenal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1073', 'name' => 'Deportiva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1111', 'name' => 'Grijalva I', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1112', 'name' => 'Grijalva II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1114', 'name' => 'Fovissste', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1116', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1132', 'name' => 'Infonavit', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1137', 'name' => 'Naval', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1142', 'name' => 'Jacobo Nazar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1224', 'name' => 'Quinta Maria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1255', 'name' => 'Ulises Garcia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1260', 'name' => 'De Pescadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1408', 'name' => 'Nueva Alianza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1409', 'name' => 'Nueva Frontera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1410', 'name' => 'Siglo XXI', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2069', 'name' => 'Sol Arena y Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86752', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0755', 'name' => 'La Estrella', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0756', 'name' => 'La Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0758', 'name' => 'Nuevo Centla', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0763', 'name' => 'Carlos Rovirosa 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0764', 'name' => 'Carlos Rovirosa 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2115', 'name' => 'Las Mercedes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2129', 'name' => 'El Bosque', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2130', 'name' => 'El Pajaral (Los Pescadores)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2131', 'name' => 'La Punta del Buey', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2132', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2133', 'name' => 'El Yucatecal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2134', 'name' => 'La Holanda (San Pedrito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2135', 'name' => 'San Carlos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2136', 'name' => 'Santa Rita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2145', 'name' => 'Santa Andrea', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2148', 'name' => 'Santa Ana', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2149', 'name' => 'El Retiro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86753', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Arroyo Polo 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0753', 'name' => 'Felipe Carrillo Puerto Sur (Carrillón)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0757', 'name' => 'Libertad de Allende', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0765', 'name' => 'Felipe Carrillo Puerto (Centro)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2109', 'name' => 'Felipe Carrillo Puerto Norte (Carrillito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2110', 'name' => 'Llanuras de Centla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2112', 'name' => 'La Bellota', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2113', 'name' => 'La Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2114', 'name' => 'La Encina y el Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2123', 'name' => 'San Román', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2125', 'name' => 'Luis Echeverría Álvarez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2127', 'name' => 'Punta el Manglar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2488', 'name' => 'El Faisán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2565', 'name' => 'Arroyo Polo 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2649', 'name' => 'Arroyo Polo 3ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86754', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0766', 'name' => 'Francisco I Madero', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2105', 'name' => 'El Carmen 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2106', 'name' => 'La Constancia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2107', 'name' => 'Miramar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2108', 'name' => 'San Ramón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2117', 'name' => 'Lerma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2119', 'name' => 'El Milagro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2120', 'name' => 'Isla del Buey', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2122', 'name' => 'El Palmar (Buenavista)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86756', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0748', 'name' => 'Chichicastle 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0749', 'name' => 'Chichicastle 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0750', 'name' => 'Chichicastle 3ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0760', 'name' => 'Ribera Alta 3ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2070', 'name' => 'Ribera Alta 2a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2071', 'name' => 'Boca de Pantoja', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2072', 'name' => 'Ribera Alta 2da. Sección (Salsipuedes)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2073', 'name' => 'Ribera Alta Salsipuedes (Salsipuedes)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2577', 'name' => 'Las Tijeras', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2579', 'name' => 'Hablan Los Hechos (Santa Rosa)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86757', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2137', 'name' => 'La Herradura', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2139', 'name' => 'Nueva Esperanza (San Pedrito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2140', 'name' => 'La Concepción', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2141', 'name' => 'Los Ángeles', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2142', 'name' => 'El Escoro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2144', 'name' => 'Barra De San Pedro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2146', 'name' => 'Buenos Aires', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2150', 'name' => 'Las Delicias', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2151', 'name' => 'Palo Alto (Palo Quemado)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2152', 'name' => 'El Refugio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2154', 'name' => 'Tembladeras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2156', 'name' => 'El Porvenir (De Quintín Arauz)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2157', 'name' => 'El Tulipán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2159', 'name' => 'El Pitayo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86758', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0747', 'name' => 'Nueva Esperanza De Quintín Aráuz', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0759', 'name' => 'Ribera Alta 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0761', 'name' => 'Tres Brazos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86759', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0751', 'name' => 'Chilapa 1ra Sección (Margen Derecha)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0752', 'name' => 'Escobas (Chilapa Escoba)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0767', 'name' => 'Chilapa 1ra. Sección (Margen Izquierda)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0768', 'name' => 'Boca de Chilapa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0769', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2076', 'name' => 'Los Ídolos (Margen Derecha)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2078', 'name' => 'Augusto Gómez Villanueva', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2563', 'name' => 'Chilapa 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2566', 'name' => 'Los Ídolos Margen Izquierda', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3048', 'name' => 'Rómulo Cachón Ponce (Hormiguero)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86760', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0770', 'name' => 'Constancia y Venecia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0771', 'name' => 'Ignacio Allende', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86761', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0772', 'name' => 'Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0773', 'name' => 'Ignacio Zaragoza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0774', 'name' => 'Jalapita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0775', 'name' => 'La Unión', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0776', 'name' => 'Vicente Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86762', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'El Guajuco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0777', 'name' => 'Álvaro Obregón (Santa Cruz)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0778', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0779', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0780', 'name' => 'Gobernador Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0781', 'name' => 'Cuauhtémoc', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0782', 'name' => 'Simón Sarlat', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0783', 'name' => 'Tabasquillo 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0784', 'name' => 'Tabasquillo 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1755', 'name' => 'San Roque', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2082', 'name' => 'El Limón (De Vicente Guerrero)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2083', 'name' => 'Las Porfías', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2089', 'name' => 'Pico de Oro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2505', 'name' => 'Ribera Alta de Cuauhtémoc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2528', 'name' => 'El Carmen 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2530', 'name' => 'Kilómetro 18', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2573', 'name' => 'El Limón de Simón Sarlat', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86763', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0785', 'name' => 'San Juan', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2077', 'name' => 'San Juanito De Tres Brazos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2103', 'name' => 'La Suiza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86764', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0786', 'name' => 'San Lorenzo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2095', 'name' => 'José María Morelos y Pavón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2096', 'name' => 'Francisco Villa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2097', 'name' => 'Miguel Hidalgo 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2098', 'name' => 'Chicozapote 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86765', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2099', 'name' => 'Chicozapote 2a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2101', 'name' => 'San José del Carmen', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2102', 'name' => 'La Suiza Uno (San Martín)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86767', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0789', 'name' => 'Buena Vista', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0790', 'name' => 'Potrerillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2079', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2080', 'name' => 'Boca Grande 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86768', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'La Montaña', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2084', 'name' => 'El Triunfo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2087', 'name' => 'Gregorio Méndez Magaña', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2088', 'name' => 'La Pimienta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2090', 'name' => 'La Sábana', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2091', 'name' => 'Cañaveral', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2093', 'name' => 'Carlos A. Madrazo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2094', 'name' => 'Francisco Villa (Guano Solo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2510', 'name' => 'Miguel Hidalgo 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2526', 'name' => 'Adolfo López Mateos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2527', 'name' => 'El Bellote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2529', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '011', 'name' => 'Jonuta', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86770', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0791', 'name' => 'José María Pino Suárez (San Pedro)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86771', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0793', 'name' => 'Esquipulas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1601', 'name' => 'Hidalgo y Tamarindo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86773', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1602', 'name' => 'El Chochal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86774', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0824', 'name' => 'Sacrificio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1594', 'name' => 'Santa Anita del Rosario', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1910', 'name' => 'Ribera Baja 1ra Sección A', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86775', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1591', 'name' => 'Sitio Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1595', 'name' => 'Las Palmas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1909', 'name' => 'San José Jimbal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86776', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1596', 'name' => 'San Jose', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1597', 'name' => 'San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1598', 'name' => 'Francisco J Mújica', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1599', 'name' => 'Elpidio Sánchez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86777', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0794', 'name' => 'Torno de la Bola', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0795', 'name' => 'Ribera Baja 2da. Sección (Gran Poder)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86780', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Villa de las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'Municipal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0797', 'name' => 'El Zapotal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0798', 'name' => 'Jonuta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1059', 'name' => 'Certeza Tabasco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1062', 'name' => '5 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1147', 'name' => 'Jonuta 2000', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1249', 'name' => 'Solidaridad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86781', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0796', 'name' => 'Chinal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1605', 'name' => 'Corcobao', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1907', 'name' => 'Zapotal 1ra Sección A', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1908', 'name' => 'Zapotal 1ra Sección B', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1912', 'name' => 'Guarda Tierra', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2493', 'name' => 'Zapotal 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2502', 'name' => 'Boca de Amatitán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86782', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Corozal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0802', 'name' => 'Boca de San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0804', 'name' => 'Torno Largo 1ra. Sección A (Benito Juárez)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0805', 'name' => 'Torno Largo 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0812', 'name' => 'Torno Largo 3ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1589', 'name' => 'Constitución de 1917 (Jonutilla)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1603', 'name' => 'Chanero Río', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1604', 'name' => 'Corozal Del Rio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3046', 'name' => 'Chanero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3051', 'name' => 'San Cristóbal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86783', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'El Sacrificio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0808', 'name' => 'Federico Alvarez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1911', 'name' => 'Ribera Baja 1ra Sección B', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86785', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Los Giles', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'Los Buchecos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0810', 'name' => 'Los Pájaros', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0811', 'name' => 'Playa Chiquita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0822', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0825', 'name' => 'Cocoyolar (Río Chico)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1900', 'name' => 'El Tinto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1902', 'name' => 'La Piñuela', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1915', 'name' => 'La Frutilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1916', 'name' => 'Tomás Garrido Canabal (El Rincón)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86786', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0818', 'name' => 'Monte Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1906', 'name' => 'Monte Grande (Nuevo Mundo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1913', 'name' => 'Venustiano Carranza (El Pajonal)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1914', 'name' => 'Pueblo Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3052', 'name' => 'Güiro Arrancado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86787', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0803', 'name' => 'Quince de Mayo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0813', 'name' => 'Trinidad y Catalina 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1917', 'name' => 'El Pitero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86789', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Campo Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0823', 'name' => 'Santa Rita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1586', 'name' => 'Santa Rita 2a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1606', 'name' => 'Carlos Pellicer Cámara (Bajo Amatitán)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86790', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0799', 'name' => 'La Guayaba (Alto Amatitán)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0801', 'name' => 'Playa Larga', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1905', 'name' => 'Las Canoas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86793', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1607', 'name' => 'Barrilito (El Pichal)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1903', 'name' => 'Las Petronas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1904', 'name' => 'El Aguacatal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86794', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0821', 'name' => 'Boca de San Gerónimo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86795', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0816', 'name' => 'Cuyo de Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0817', 'name' => 'El Barrial', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1899', 'name' => 'Isla Helva de Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'San Geronimito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0815', 'name' => 'Boca de San Gerónimo (San Gerónimo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86796', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'Isla Nuevo Barrialito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0820', 'name' => 'El Bejucal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1588', 'name' => 'Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '016', 'name' => 'Teapa', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86800', 'locality' => 'Teapa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Liberación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0828', 'name' => 'Teapa Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1100', 'name' => 'Esquipulas', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '1193', 'name' => 'El Mure', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '1245', 'name' => 'Santa Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1250', 'name' => 'Tecomajiaca', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2552', 'name' => 'El Cerrito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86801', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0847', 'name' => 'Calcinado', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1039', 'name' => 'Bosques de La Sierra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1108', 'name' => 'Florida', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1130', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1160', 'name' => 'Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1161', 'name' => 'La Sierra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1172', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1227', 'name' => 'Revolución', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1406', 'name' => 'Joyas del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2025', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2036', 'name' => 'Eureka y Belén', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2586', 'name' => 'Las Grutas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2627', 'name' => 'La Ceiba', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86802', 'locality' => 'Teapa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1069', 'name' => 'Chacuiba', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1233', 'name' => 'Carlos Salinas de Gortari', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1251', 'name' => 'La Tejería', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86803', 'locality' => 'Teapa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Nueva San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0834', 'name' => 'Mariano Abasolo (Abasolito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0846', 'name' => 'Manuel Buelta 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1407', 'name' => 'Morelia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2028', 'name' => 'Ignacio Allende 3ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2029', 'name' => 'Municipal', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2654', 'name' => 'Manuel Buelta 1ra Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3049', 'name' => 'Villa Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86805', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0835', 'name' => 'Nicolás Bravo 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0837', 'name' => 'Nicolás Bravo 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86806', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0827', 'name' => 'Mina y Matamoros (La Trinidad)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0830', 'name' => 'Francisco Javier Mina (Argentina)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2034', 'name' => 'Arcadio Zentella', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2035', 'name' => 'Mina y Matamoros (San Pablo Tamborel)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86807', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0829', 'name' => 'Vicente Guerrero (Las Nieves)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2031', 'name' => 'Vicente Guerrero (Lerma)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2032', 'name' => 'Vicente Guerrero (San Lorenzo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2047', 'name' => 'Vicente Guerrero (Guanal)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86808', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0832', 'name' => 'Ignacio Allende 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0843', 'name' => 'Ignacio Allende 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2551', 'name' => 'Chapultepec', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86820', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0838', 'name' => 'Juan Aldama', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1583', 'name' => 'Colorado (Benito Juárez)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86823', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0841', 'name' => 'Hermenegildo Galeana 1a Secc (Mexiquito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0849', 'name' => 'Mariano Pedrero 1ra Sección (La Providencia)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0852', 'name' => 'Ignacio López Rayón 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1582', 'name' => 'Ignacio López Rayón 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86824', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0842', 'name' => 'Andrés Quintana Roo 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2026', 'name' => 'Andrés Quintana Roo 2a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2027', 'name' => 'Andrés Quintana Roo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2044', 'name' => 'Hermenegildo Galeana', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86825', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0845', 'name' => 'Manuel Buelta y Rayón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0850', 'name' => 'Mariano Pedrero 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0851', 'name' => 'Mariano Pedrero 3ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2046', 'name' => 'José María Morelos y Pavón (Santa Rita)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86826', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0854', 'name' => 'Miguel Hidalgo 2da Sección (San Joaquín)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2037', 'name' => 'Miguel Hidalgo 2da. Sección (Fco. Sarabia)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2038', 'name' => 'Miguel Hidalgo 2da Sección (Los Álamos)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2039', 'name' => 'Miguel Hidalgo 1ra. Sección (Las Gardenias)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86827', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0853', 'name' => 'José María Morelos y Pavón 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1581', 'name' => 'José María Morelos y Pavón(San Antonio Las Ánimas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2040', 'name' => 'José María Morelos y Pavón (Las Delicias)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2041', 'name' => 'José María Morelos y Pavón (Juan Gómez)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86828', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0848', 'name' => 'José María Morelos y Pavón 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '009', 'name' => 'Jalapa', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86830', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0857', 'name' => 'Benito González', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0860', 'name' => 'Santo Domingo 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0861', 'name' => 'Tequila', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1997', 'name' => 'Tequila 1ra. Sección (La Aurora)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1998', 'name' => 'Tequila 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1999', 'name' => 'Tequila 3ra. Sección (Independencia)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2655', 'name' => 'Tequila 4ta. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86834', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0862', 'name' => 'Víctor Fernández Manero 1ra. Sección (San Antonio)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1740', 'name' => 'Mérida y Guarumo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1741', 'name' => 'Lomas de Vidal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1742', 'name' => 'Puerto Rico', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86835', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Santo Domingo 1ra. Sección (El Llano)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1995', 'name' => 'Víctor Fernández Manero 2da. Sección (San Miguel)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1996', 'name' => 'Víctor Fernández Manero 3ra. Sección (San Isidro)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86836', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1988', 'name' => 'San Cristóbal 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1989', 'name' => 'Aquiles Serdán 5ta. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1992', 'name' => 'San Cristóbal 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86837', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0855', 'name' => 'Aquiles Serdán 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1986', 'name' => 'Aquiles Serdán 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1987', 'name' => 'Aquiles Serdán 4ta. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1993', 'name' => 'Aquiles Serdán 3ra. Sección (San Román)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86840', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1978', 'name' => 'San Miguel Afuera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1979', 'name' => 'Jalapa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86843', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0858', 'name' => 'Chipilinar 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1739', 'name' => 'Chipilinar 4ta. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1746', 'name' => 'San Marcos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1980', 'name' => 'Chipilinar 3ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1981', 'name' => 'Chipilinar 1ra. Sección (Guayacán)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1982', 'name' => 'Chipilinar 1ra. Sección la Lima', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1983', 'name' => 'Chipilinar 2da. Sección (Contreras)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86844', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1985', 'name' => 'San Juan el Alto 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86845', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0872', 'name' => 'San Juan el Alto 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1984', 'name' => 'Chichonal 4ta. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86846', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0870', 'name' => 'Chichonal 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0873', 'name' => 'San Miguel Afuera', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0877', 'name' => 'San Miguel Adentro 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1969', 'name' => 'San Miguel Adentro 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1970', 'name' => 'El Cerro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1971', 'name' => 'Chichonal 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1972', 'name' => 'Chichonal 3ra. Sección (La Capilla)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86850', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0871', 'name' => 'Jalapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1144', 'name' => 'Jalapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86853', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Jahuacapa (Puente Grande)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0868', 'name' => 'Jahuacapa', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86854', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0856', 'name' => 'Astapa', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0863', 'name' => 'Francisco J. Santamaría (Cacao)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1577', 'name' => 'El Dorado', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1994', 'name' => 'La Unión (Clavo de la Victoria)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86855', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1744', 'name' => 'Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1745', 'name' => 'Río de Teapa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1977', 'name' => 'Progreso', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86860', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0876', 'name' => 'Calicanto 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0879', 'name' => 'Calicanto 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0880', 'name' => 'Huapacal 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1965', 'name' => 'Huapacal 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1967', 'name' => 'Calicanto (Rinconada)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1968', 'name' => 'Calicanto 3ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86863', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1966', 'name' => 'Montaña', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86864', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0869', 'name' => 'Puyacatengo Norte', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1747', 'name' => 'Puyacatengo Sur', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1974', 'name' => 'Guanal 3ra. Sección (Guanalito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1975', 'name' => 'Guanal 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1976', 'name' => 'Guanal 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86865', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1973', 'name' => 'Montaña', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '015', 'name' => 'Tacotalpa', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86870', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0885', 'name' => 'Tacotalpa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1195', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1200', 'name' => 'Oro Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1221', 'name' => 'Pueblo Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1918', 'name' => 'Graciela Pintado de Madrazo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86874', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Pochitocal 3ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0884', 'name' => 'Pochitocal 1ra Sección (La Palma)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1947', 'name' => 'Santa Rosa 2da. Sección (Estación Poaná)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1950', 'name' => 'Pochitocal 2a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1953', 'name' => 'Lomas Alegres 3a Sección (San Antonio)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86875', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Ceibita 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0891', 'name' => 'Ceibita 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0892', 'name' => 'Ceiba 2da. Sección (San Luis)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1956', 'name' => 'División del Norte', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1960', 'name' => 'Rancho Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2651', 'name' => 'Roberto Madrazo Pintado', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86876', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'La Raya 1ra Sección (Nava)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1958', 'name' => 'Pochitocal 1a Sección Tila y Toronjo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1959', 'name' => 'La Raya 2da. Sección (Santa Cruz)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86877', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1954', 'name' => 'Puyacatengo 1ra. Sección (Ceiba)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1955', 'name' => 'Puyacatengo 2da. Sección (Ceiba)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86878', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0893', 'name' => 'Santa Rosa 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1961', 'name' => 'San Ramón', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86880', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Carlos A Madrazo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0894', 'name' => 'Guayal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0895', 'name' => 'El Limón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86882', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0882', 'name' => 'Lomas Alegres 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0889', 'name' => 'Arroyo Ciego 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0896', 'name' => 'Pasamonos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1945', 'name' => 'Lomas Alegres 4ta. Sección (El Hular)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1948', 'name' => 'Lomas Alegres 2da Sección (Castañal)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1949', 'name' => 'José María Morelos y Pavón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1951', 'name' => 'Pochitocal 4ta Sección (San Miguel Juárez)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86884', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0886', 'name' => 'Xicoténcatl', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0887', 'name' => 'Poaná', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86885', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0897', 'name' => 'Pomoca', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1932', 'name' => 'Arroyo Seco Miraflores', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1933', 'name' => 'El Paraíso', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1944', 'name' => 'Gran Poder', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86886', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0898', 'name' => 'Agua Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86887', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0900', 'name' => 'Reforma (Madrigal 2da. Sección)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1943', 'name' => 'Lázaro Cárdenas (Madrigal 3ra Sección)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86888', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'La Gloria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0901', 'name' => 'Madrigal 5a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86890', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0904', 'name' => 'Tapijulapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0906', 'name' => 'Zunú y Patastal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1939', 'name' => 'Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86892', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1752', 'name' => 'Arroyo Chispa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1935', 'name' => 'San Manuel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1940', 'name' => 'Madrigal 4ta Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1941', 'name' => 'Graciano Sánchez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1942', 'name' => 'Agua Escondida', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86893', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1931', 'name' => 'Yajalón Río Seco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86894', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0903', 'name' => 'La Raya Zaragoza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0910', 'name' => 'Puxcatán', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86895', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Nuevo Madero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'Tomás Garrido Canabal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0902', 'name' => 'Oxolotán', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0908', 'name' => 'Libertad', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0911', 'name' => 'Cuauhtémoc Barreal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0912', 'name' => 'Francisco I. Madero 1ra. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0914', 'name' => 'Francisco I Madero 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1925', 'name' => 'Buenos Aires', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1926', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1927', 'name' => 'Pomoquita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1928', 'name' => 'Nueva Reforma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1929', 'name' => 'Cuviac', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1930', 'name' => 'Noypac', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1934', 'name' => 'La Cumbre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2507', 'name' => 'La Pila', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2644', 'name' => 'Mexiquito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86896', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0909', 'name' => 'Caridad Guerrero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0913', 'name' => 'Buena Vista', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0915', 'name' => 'Cuitláhuac', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1920', 'name' => 'Shotal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1922', 'name' => 'Nueva Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1938', 'name' => 'Villa Luz', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86897', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Cerro Blanco 5ta Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0907', 'name' => 'Cerro Blanco 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1921', 'name' => 'Palo Quemado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1923', 'name' => 'Cerro Blanco 4ta Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1924', 'name' => 'Cerro Blanco 3ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1936', 'name' => 'La Cuesta', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1937', 'name' => 'Cerro Blanco 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '017', 'name' => 'Tenosique', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86900', 'locality' => 'Tenosique de Pino Suárez', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0925', 'name' => 'Tenosique de Pino Suárez Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1180', 'name' => 'Los Angelitos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1396', 'name' => 'Solidaridad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86901', 'locality' => 'Tenosique de Pino Suárez', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1101', 'name' => 'Estación Nueva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1119', 'name' => 'Luis Gómez Zeta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1222', 'name' => 'Pueblo Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1241', 'name' => 'San Román', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1389', 'name' => 'María Luisa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86902', 'locality' => 'Tenosique de Pino Suárez', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'El Chivo Negro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1081', 'name' => 'Cocoyol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1186', 'name' => 'Magisterial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1213', 'name' => 'La Trinchera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1240', 'name' => 'San Miguelito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1390', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1391', 'name' => 'Belén', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1393', 'name' => 'Usumacinta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2162', 'name' => 'Santa Bárbara', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2164', 'name' => 'Ampliación Cocoyol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2171', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86904', 'locality' => 'Tenosique de Pino Suárez', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Tenosique 2000', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'La Raza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1085', 'name' => 'El Ingenio Hermenegildo Galeana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1126', 'name' => 'Héroes de Nacozari', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1159', 'name' => 'Municipal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1173', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1223', 'name' => 'Pueblo Unido', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1226', 'name' => 'CERESO', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
		['key' => '1238', 'name' => 'San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1386', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1387', 'name' => 'Jardines del Usumacinta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1388', 'name' => 'Pomona', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1394', 'name' => 'José María Pino Suárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2165', 'name' => 'Roberto Madrazo Pintado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2166', 'name' => 'Brisas del Usumacinta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2168', 'name' => 'Unidad Habitacional Militar 38-A', 'zone_type' => 'Urbano', 'settlementtype_id' => '27','zipcode_id' => $idZip],
		['key' => '2169', 'name' => 'Unidad y Gratitud', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2170', 'name' => 'Guadalupe Tepeyac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2173', 'name' => 'Siquiscab', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86905', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0920', 'name' => 'Estapilla', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0932', 'name' => 'Canitzán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2187', 'name' => 'El Roblar', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2188', 'name' => 'El Copo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2189', 'name' => 'José María Pino Suárez 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2224', 'name' => 'Canitzán 2a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86906', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0916', 'name' => 'Arena de Hidalgo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0917', 'name' => 'Boca Del Cerro', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0918', 'name' => 'Centro Usumacinta', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0923', 'name' => 'La Isla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0930', 'name' => 'Pomoná 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0931', 'name' => 'Pomoná 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0935', 'name' => 'Independencia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0937', 'name' => 'El Faisán 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0938', 'name' => 'El Recreo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2186', 'name' => 'Lucio Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2192', 'name' => 'Chaculjí', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2193', 'name' => 'El Faisán 1a Secc', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2194', 'name' => 'Crisóforo China', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2195', 'name' => 'El Faisán 3ra Sección (Chiniquijá)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2210', 'name' => 'San Carlos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2221', 'name' => 'Arena de Hidalgo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2223', 'name' => 'Santa Lucía', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86907', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0926', 'name' => 'Usumacinta', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0986', 'name' => 'José María Pino Suárez 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2190', 'name' => 'Estampilla 2a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2191', 'name' => 'Tenosique 1a Secc (El Mool)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2222', 'name' => 'Plan de San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86909', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0927', 'name' => 'Guayacán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0928', 'name' => 'Gregorio Méndez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86910', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0936', 'name' => 'Ignacio Zaragoza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0941', 'name' => 'Benito Juárez 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2205', 'name' => 'Tata Lázaro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2206', 'name' => 'Benito Juárez 2a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2207', 'name' => 'Diez de Mayo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2211', 'name' => 'San Isidro las Pozas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2212', 'name' => 'Dieciséis de Septiembre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86911', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0919', 'name' => 'Esperanza Norte (El Veinte)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2209', 'name' => 'El Pensamiento', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2213', 'name' => 'Cuatro Hermanos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86912', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0942', 'name' => 'La Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0944', 'name' => 'San Isidro Guasiván', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86915', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0924', 'name' => 'Nuevo México', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0949', 'name' => 'Hermenegildo Galeana', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0963', 'name' => 'Santa Elena', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86916', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0945', 'name' => 'El Palmar', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2185', 'name' => 'Veinte de Noviembre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2215', 'name' => 'Punta de Montaña', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86918', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0946', 'name' => 'Emiliano Zapata 2da Sección (El Carmen)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2220', 'name' => 'La Planada', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86919', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2214', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2622', 'name' => 'Certeza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86920', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2218', 'name' => 'El Xotal 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2219', 'name' => 'El Xotal 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0947', 'name' => 'Reforma Agraria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2180', 'name' => 'La Última Lucha', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86921', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0939', 'name' => 'Javier Rojo Gómez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2196', 'name' => 'Luis Echeverría Álvarez 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2197', 'name' => 'Luis Echeverría Álvarez 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86922', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0948', 'name' => 'Emiliano Zapata 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0950', 'name' => 'Adolfo López Mateos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0951', 'name' => 'Rancho Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86923', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0952', 'name' => 'Redención del Campesino', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2198', 'name' => 'Los Rieles de San José', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2199', 'name' => 'Veteranos de La Revolución', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2200', 'name' => 'Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2201', 'name' => 'San Marcos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86924', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0953', 'name' => 'Corregidora Ortiz de Domínguez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0955', 'name' => 'Santo Tomás', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2174', 'name' => 'Nuevo Progreso', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2202', 'name' => 'Cortijo Nuevo 2a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2203', 'name' => 'Francisco I. Madero (Río)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2204', 'name' => 'Niños Héroes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2208', 'name' => 'Cortijo Nuevo 1a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86925', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0957', 'name' => 'Santa Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2216', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86926', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0956', 'name' => 'Acatlipa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0958', 'name' => 'El Pedregal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0959', 'name' => 'Nueva Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86927', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0954', 'name' => 'Francisco I. Madero Cortazar', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0960', 'name' => 'Ignacio Allende', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0961', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2175', 'name' => 'El Bejucal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2176', 'name' => 'Álvaro Obregón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2177', 'name' => 'La Estancia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2178', 'name' => 'Francisco Villa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2179', 'name' => 'El Repasto', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2181', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86928', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2182', 'name' => 'Sueños de Oro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2183', 'name' => 'Nueva Jerusalén', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2184', 'name' => 'Carlos Pellicer Cámara', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2217', 'name' => 'Bella Vista', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '001', 'name' => 'Balancán', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86930', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Periférico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'La Colmena', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'Niños Héroes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0004', 'name' => 'Prados de Balancán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'Brigada Usumacinta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'El Yomel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'La Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0008', 'name' => 'La Mecha', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0965', 'name' => 'Balancán Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1070', 'name' => 'Del Carmen', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '1202', 'name' => 'Palenque', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '1236', 'name' => 'San Joaquín', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '1808', 'name' => 'Municipal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1809', 'name' => 'Monte Libano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1810', 'name' => 'Magisterial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1811', 'name' => 'Gregorio Méndez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1812', 'name' => 'Jardines de Balancán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1813', 'name' => 'Carlos A. Madrazo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1814', 'name' => 'Nuevo México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1815', 'name' => 'Carlos Enrique Abreu', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1816', 'name' => 'Luis Felipe Domínguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1817', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2554', 'name' => 'Nuevo Milenio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2966', 'name' => 'San Marcos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2979', 'name' => 'El Colmenar', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86933', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0982', 'name' => 'Misicab', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1774', 'name' => 'Pejelagarto 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1783', 'name' => 'Suniná', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1806', 'name' => 'Asunción', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2691', 'name' => 'Catalina (Altamira)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2699', 'name' => 'Dos Estrellas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2700', 'name' => 'Dos Hermanos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2704', 'name' => 'El Bajío', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2728', 'name' => 'El Doble G', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2749', 'name' => 'El Paraíso', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2758', 'name' => 'El Recuerdo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2764', 'name' => 'El Sacrificio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2778', 'name' => 'El Zapotal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2796', 'name' => 'La Aurora', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2829', 'name' => 'La Providencia (Parada San Antonio)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2867', 'name' => 'Mi Ranchito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2912', 'name' => 'San José 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2930', 'name' => 'San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2938', 'name' => 'Santa Celia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2939', 'name' => 'Santa Clara', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2944', 'name' => 'Santa Elena', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2946', 'name' => 'Santa Isabel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2950', 'name' => 'Santa Martha', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2961', 'name' => 'Sonora', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2969', 'name' => 'La Asunción', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3012', 'name' => 'La Providencia', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3016', 'name' => 'Las Maravillas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86934', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0964', 'name' => 'El Arenal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0968', 'name' => 'Tierra Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0969', 'name' => 'Vicente Guerrero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0976', 'name' => 'Pejelagarto 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1780', 'name' => 'San Juan', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1781', 'name' => 'Jahuactal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2723', 'name' => 'El Manantial', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2794', 'name' => 'Isla Sebastopol', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2849', 'name' => 'Las Mercedes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2864', 'name' => 'Macayal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2954', 'name' => 'Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2960', 'name' => 'Soledad', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2983', 'name' => 'El Llano', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2984', 'name' => 'El Luinar', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2999', 'name' => 'Isla Conja', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3020', 'name' => 'Mi Gran Aventura', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3029', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3040', 'name' => 'Santa Lucía', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86935', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0977', 'name' => 'Centro Usumacinta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1702', 'name' => 'Uquina y La Loma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1782', 'name' => 'Chacabita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2677', 'name' => 'Alianza Balancán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2680', 'name' => 'Balancán (Carcel Municipal de Balancán)', 'zone_type' => 'Rural', 'settlementtype_id' => '9','zipcode_id' => $idZip],
		['key' => '2686', 'name' => 'Campo Alto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2694', 'name' => 'Chajol', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2718', 'name' => 'El Chinal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2730', 'name' => 'El Dorado', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2734', 'name' => 'El Garrafón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2777', 'name' => 'El Yomel', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2779', 'name' => 'El Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2784', 'name' => 'Frente Único', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2806', 'name' => 'La Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2876', 'name' => 'Oklahoma', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2908', 'name' => 'San Jorge', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2958', 'name' => 'Santo Domingo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2975', 'name' => 'El Arrozal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2980', 'name' => 'El Cortador', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2994', 'name' => 'El Silencio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3041', 'name' => 'Santa Marlene', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86936', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0978', 'name' => 'Leona Vicario', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0979', 'name' => 'Chancabal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0980', 'name' => 'Isla Missicab', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0983', 'name' => 'Bajo Nezahualcoyotl', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0987', 'name' => 'Nezahualcoyotl', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1017', 'name' => 'Multé', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1703', 'name' => 'Leona Vicario', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1784', 'name' => 'Josefa Ortíz de Domínguez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1785', 'name' => 'Laguna Colorada', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1788', 'name' => 'Pajonal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1789', 'name' => 'San Juan (Guerrero)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2687', 'name' => 'Cancún', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2733', 'name' => 'El Foco', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2743', 'name' => 'El Nido', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2745', 'name' => 'El Pajaral', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2753', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2793', 'name' => 'Isla Santa Ana', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2815', 'name' => 'La Herradura', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2827', 'name' => 'La Poza de la Tortuga', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2843', 'name' => 'Las Campanas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2856', 'name' => 'Los Mangos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2943', 'name' => 'Santa Elena', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2959', 'name' => 'Santo Domingo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2993', 'name' => 'El Sacrificio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3015', 'name' => 'La Veleta', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86937', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1704', 'name' => 'Cuba', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2674', 'name' => 'Agua Bendita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2732', 'name' => 'El Faisán', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2787', 'name' => 'General Luis Felipe Domínguez Suárez', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2914', 'name' => 'San José del Río', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3025', 'name' => 'Pantoja', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86940', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1697', 'name' => 'Constitución', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1698', 'name' => 'José Narciso Rovirosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1700', 'name' => 'Santa Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2676', 'name' => 'Aguacatal Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2765', 'name' => 'El Sacrificio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2768', 'name' => 'El Sahuayo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2786', 'name' => 'Graciela Pintado de Madrazo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2810', 'name' => 'La Gloria', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2833', 'name' => 'La Trinidad', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2855', 'name' => 'Los Hermanos Hernández', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2862', 'name' => 'Los Tres Reyes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2929', 'name' => 'San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2945', 'name' => 'Santa Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2952', 'name' => 'Santa María Luisa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3035', 'name' => 'San Lazarito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86943', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0966', 'name' => 'La Hulería', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0972', 'name' => 'San Joaquín 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0992', 'name' => 'El Pimiental', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1707', 'name' => 'La Poza (La Hulería)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2673', 'name' => 'Acatempan', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2720', 'name' => 'El Consuelo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2801', 'name' => 'La Envidia', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2805', 'name' => 'La Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2885', 'name' => 'Potrero del Llano', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2890', 'name' => 'San Alberto', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2906', 'name' => 'San Joaquín 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2924', 'name' => 'San Manuel', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2991', 'name' => 'El Roblar', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3007', 'name' => 'La Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3033', 'name' => 'San Joaquín', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3039', 'name' => 'Santa Josefa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86944', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0974', 'name' => 'Tarimas (Emiliano Zapata)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1711', 'name' => 'Las Tarimas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2710', 'name' => 'El Carmen', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2808', 'name' => 'La Gloria', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2819', 'name' => 'La Lupita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2838', 'name' => 'La Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3037', 'name' => 'Santa Adela', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86945', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0967', 'name' => 'Plan de Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2683', 'name' => 'Buena Vista', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2708', 'name' => 'El Caoba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2716', 'name' => 'El Chaparral', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2721', 'name' => 'El Cristo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2726', 'name' => 'El Deseo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2735', 'name' => 'El Herradero', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2740', 'name' => 'El Mango', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2747', 'name' => 'El Paraíso', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2748', 'name' => 'El Paraíso', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2785', 'name' => 'Fátima', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2823', 'name' => 'La Nueva Lucha', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2852', 'name' => 'Lontanasa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2883', 'name' => 'Plan de Guadalupe Sección Kilómetro 21', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2897', 'name' => 'San Cosme', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2910', 'name' => 'San José', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2934', 'name' => 'San Nicolás', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2937', 'name' => 'Santa Catalina', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2973', 'name' => 'Dos Arbolitos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3027', 'name' => 'Plan de Guadalupe Sección Central', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86946', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0985', 'name' => 'Santa Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0991', 'name' => 'Guajimalpa 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1708', 'name' => 'El Faustino', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2678', 'name' => 'Alianza Campesina', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2681', 'name' => 'Bienvenido', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2702', 'name' => 'El Achotal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2703', 'name' => 'El Ajusco (Plan de Guadalupe)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2719', 'name' => 'El Clavo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2725', 'name' => 'El Desengaño', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2757', 'name' => 'El Recreo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2760', 'name' => 'El Retacito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2767', 'name' => 'El Sacrificio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2772', 'name' => 'El Toro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2788', 'name' => 'Guajimalpa 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2804', 'name' => 'La Esperancita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2807', 'name' => 'La Gironda', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2822', 'name' => 'La Mina', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2825', 'name' => 'La Papaya (Manuel Rosado)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2837', 'name' => 'La Unión', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2839', 'name' => 'La Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2850', 'name' => 'Las Minitas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2872', 'name' => 'Nueva Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2881', 'name' => 'Paraíso', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2882', 'name' => 'Plan de Guadalupe (El Guapaque)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2891', 'name' => 'San Andrés', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2899', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2909', 'name' => 'San José', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2916', 'name' => 'San Juanito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2919', 'name' => 'San Judas Tadeo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2921', 'name' => 'San Lázaro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2922', 'name' => 'San Luis', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2926', 'name' => 'San Manuel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2927', 'name' => 'San Marcos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2928', 'name' => 'San Martín', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2949', 'name' => 'Santa Martha', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2987', 'name' => 'El Paraíso', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2990', 'name' => 'El Rinconcito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3003', 'name' => 'Jalisco', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3006', 'name' => 'La Gloria', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3008', 'name' => 'La Lucha', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3036', 'name' => 'San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3042', 'name' => 'Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3044', 'name' => 'Tequisquiapan', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86947', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0970', 'name' => 'Miguel Hidalgo Y Costilla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0971', 'name' => 'El Pípila', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0989', 'name' => 'San Elpidio (Banco De Grava)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1699', 'name' => 'Ingeniero Mario Calcáneo Sánchez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2695', 'name' => 'Copropiedad Santa Rosenda (Chupacabras)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2705', 'name' => 'El Belén', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2722', 'name' => 'El Cupimo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2729', 'name' => 'El Dollar', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2731', 'name' => 'El Faisán', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2736', 'name' => 'El Jobal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2738', 'name' => 'El Laberinto', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2741', 'name' => 'El Marino', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2752', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2795', 'name' => 'La Arenita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2820', 'name' => 'La Lupita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2824', 'name' => 'La Palma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2847', 'name' => 'Las Delicias', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2857', 'name' => 'Los Naranjos (Sofocante)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2860', 'name' => 'Los Robles', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2866', 'name' => 'Mata de la Hoja', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2868', 'name' => 'Miguel Hidalgo 2da. Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2869', 'name' => 'Molino de Arroz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2875', 'name' => 'Nuevo Xochimilco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2877', 'name' => 'Oklahoma I', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2887', 'name' => 'Rafael Palmer Cámara', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2900', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2920', 'name' => 'San Lazarito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2923', 'name' => 'San Manuel', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2931', 'name' => 'San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2932', 'name' => 'San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2948', 'name' => 'Santa Martha', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2953', 'name' => 'Santa Rita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2967', 'name' => 'Águilas del Norte', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2970', 'name' => 'Campo Alto (El Tamarindo)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2988', 'name' => 'El Pato', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2992', 'name' => 'El Sacrificio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3004', 'name' => 'La Cruz de Belén', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3011', 'name' => 'La Pista', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3013', 'name' => 'La Santa Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3014', 'name' => 'La Sultana Dos (Caba Hermanos)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3018', 'name' => 'Los Triángulos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3019', 'name' => 'María de Jesús', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3022', 'name' => 'Nueva Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3024', 'name' => 'Ojo de Agua', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3034', 'name' => 'San José Domingo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86950', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0993', 'name' => 'El Triunfo', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86953', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0998', 'name' => 'Cuauhtémoc', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0999', 'name' => 'El Destino', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1002', 'name' => 'Arroyo el Triunfo 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1818', 'name' => 'Quetzalcóatl (Cuatro Poblados)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86954', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0997', 'name' => 'Agricultores del Norte 1ra Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1174', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1775', 'name' => 'Agricultores del Norte 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1776', 'name' => 'Francisco Villa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1777', 'name' => 'El Pichi', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1778', 'name' => 'Veinticuatro De Junio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1779', 'name' => 'Ojo de Agua', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86955', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0995', 'name' => 'Presidente Adolfo López Mateos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1701', 'name' => 'Licenciado Gustavo Díaz Ordaz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1706', 'name' => 'Adolfo López Mateos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1714', 'name' => 'Zacatecas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2675', 'name' => 'Agua Negra', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2697', 'name' => 'Cuatro Hermanos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2717', 'name' => 'El Chimón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2750', 'name' => 'El Pitayo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2759', 'name' => 'El Repudio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2761', 'name' => 'El Roble', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2763', 'name' => 'El Rosarito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2771', 'name' => 'El Tintal Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2803', 'name' => 'La Escondida', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2816', 'name' => 'La Huasteca', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2832', 'name' => 'La Torre', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2851', 'name' => 'Licenciado Gustavo Díaz Ordaz 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2863', 'name' => 'Los Venados', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2865', 'name' => 'Mag', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2915', 'name' => 'San Juan del Río', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2968', 'name' => 'Altamira', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2989', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3005', 'name' => 'La Gloria', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86956', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2799', 'name' => 'La Cuchilla', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2878', 'name' => 'Palmira', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2889', 'name' => 'Salvador', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2894', 'name' => 'San Carlos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2901', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2907', 'name' => 'San Jorge', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2925', 'name' => 'San Manuel', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2978', 'name' => 'El Coahuila', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2985', 'name' => 'El Naranjito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2995', 'name' => 'El Silencio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2997', 'name' => 'El Tiradero (El Ramón)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3026', 'name' => 'Piedra Santa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3032', 'name' => 'San Felipe', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3038', 'name' => 'Santa Isabel', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3043', 'name' => 'Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1791', 'name' => 'San José', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1792', 'name' => 'Tierra y Libertad', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2696', 'name' => 'Cuatro Caminos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2707', 'name' => 'El Calentano', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2727', 'name' => 'El Diamante', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2746', 'name' => 'El Palomar', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2780', 'name' => 'Elisa María (El Tani)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86957', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1018', 'name' => 'El Naranjito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2742', 'name' => 'El Mical', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2790', 'name' => 'Ingeniero Emilio López Zamora', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86960', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1004', 'name' => 'El Barí', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1011', 'name' => 'Carlos A. Madrazo Becerra', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1013', 'name' => 'La Revancha', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1796', 'name' => 'El Mical', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2682', 'name' => 'Bonanza', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2791', 'name' => 'Isla del Carmen', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2813', 'name' => 'La Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2821', 'name' => 'Corpus Christi', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2848', 'name' => 'Las Maravillas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2854', 'name' => 'Los Gómez', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2940', 'name' => 'Santa Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2956', 'name' => 'Santa Rosalía', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2976', 'name' => 'El Cambio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86963', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1000', 'name' => 'El Limón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1006', 'name' => 'Reforma (Provincia)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2671', 'name' => 'Acalán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2690', 'name' => 'Cascadas de Reforma', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2693', 'name' => 'Cementerio de los Mayas (El Caballero)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2724', 'name' => 'El Descanso', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2792', 'name' => 'Isla el Chipre', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2812', 'name' => 'La Gloria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2846', 'name' => 'Las Cumbres', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2879', 'name' => 'Palomas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2892', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2893', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2918', 'name' => 'San Juanito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2951', 'name' => 'Santa María', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2965', 'name' => 'Zaragoza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2972', 'name' => 'Cuatro Hermanos González Piña', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3000', 'name' => 'Isla de la Doctora', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3001', 'name' => 'Isla Francita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3002', 'name' => 'Isla la Botica', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86964', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1003', 'name' => 'El Ramonal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1007', 'name' => 'El Capulín', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1798', 'name' => 'Arroyo el Triunfo 2da Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2709', 'name' => 'El Chorro (El Capulín)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2781', 'name' => 'Emiliano Zapata Salazar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86965', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1008', 'name' => 'El Cibalito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1793', 'name' => 'Último Esfuerzo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1795', 'name' => 'Otatal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2711', 'name' => 'El Carmen', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2754', 'name' => 'El Pozo (El Pocito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2756', 'name' => 'El Pucté', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2841', 'name' => 'La Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2874', 'name' => 'Nuevo Paraíso', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2902', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2935', 'name' => 'Capitán Felipe Castellanos Díaz (San Pedro)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2947', 'name' => 'Santa Lucía', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2996', 'name' => 'El Tamarindo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3023', 'name' => 'Nueva Orma', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86966', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1009', 'name' => 'Jolochero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1804', 'name' => 'Francisco I. Madero 1a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1805', 'name' => 'Francisco I. Madero 2a Sección', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2715', 'name' => 'El Chamizal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2880', 'name' => 'Pan Duro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86967', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1010', 'name' => 'Los Cenotes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1799', 'name' => 'Miguel Hidalgo Sacaolas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1800', 'name' => 'Apatzingán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1801', 'name' => 'Cuyos de Caoba', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1802', 'name' => 'Vicente Lombardo Toledano', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1803', 'name' => 'Buenavista Veintitrés', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86970', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1012', 'name' => 'Paraíso (El Tinto)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1797', 'name' => 'Cibal de la Gloria', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2701', 'name' => 'El Achotal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2836', 'name' => 'La Unión', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2884', 'name' => 'Polevar', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2896', 'name' => 'San Carlos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86973', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1014', 'name' => 'Mactún', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1016', 'name' => 'El Águila', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2685', 'name' => 'Buenavista', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2751', 'name' => 'El Pleito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2774', 'name' => 'El Triunfo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2797', 'name' => 'La Camaronera', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2811', 'name' => 'La Gloria', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2817', 'name' => 'La Lucha', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2828', 'name' => 'La Providencia', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2844', 'name' => 'Las Carmelitas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2861', 'name' => 'Los Tres Hermanos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2903', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2911', 'name' => 'San José', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2955', 'name' => 'Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2962', 'name' => 'Texas (Vidamar)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2963', 'name' => 'Tres de Mayo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2974', 'name' => 'El Aguacate', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2998', 'name' => 'Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3028', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86974', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1015', 'name' => 'Nicolás Bravo (San Nicolás)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1019', 'name' => 'Las Tablas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1790', 'name' => 'Caudillos del Sur', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1807', 'name' => 'San Marcos', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2679', 'name' => 'Altamira', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2698', 'name' => 'Dos de Noviembre', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2706', 'name' => 'El Bilín', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2766', 'name' => 'El Sacrificio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2783', 'name' => 'Estapilla Tercera Ampliación', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2818', 'name' => 'La Lucha', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2826', 'name' => 'La Pava', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2840', 'name' => 'La Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2886', 'name' => 'Pucteal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86975', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1001', 'name' => 'San Pedro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2672', 'name' => 'Acatempan', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2684', 'name' => 'Buenavista', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2688', 'name' => 'Canutillo (Santa Cruz)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2712', 'name' => 'El Cedro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2802', 'name' => 'La Escoba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2830', 'name' => 'La Purísima', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2842', 'name' => 'Las Cabañas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2898', 'name' => 'San Fernando', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2933', 'name' => 'San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2964', 'name' => 'Vista Hermosa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3010', 'name' => 'La Nueva Lucha', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86976', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0981', 'name' => 'Missicab (La Pita)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0984', 'name' => 'Buena Vista', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2689', 'name' => 'Carlos Enrique Ocampo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2692', 'name' => 'Catec', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2713', 'name' => 'El Cedro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2737', 'name' => 'El Jobo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2739', 'name' => 'El Limoncito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2769', 'name' => 'El Suspiro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2770', 'name' => 'El Tacistal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2773', 'name' => 'El Triángulo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2845', 'name' => 'Las Coronelas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2870', 'name' => 'Monte Líbano', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2895', 'name' => 'San Carlos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2904', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2941', 'name' => 'Santa Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2957', 'name' => 'Santa Teresa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2971', 'name' => 'Canta Rana', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86977', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1005', 'name' => 'La Cuchilla', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1786', 'name' => 'Pangolar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1794', 'name' => 'El Pocito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2744', 'name' => 'El Nopalito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2755', 'name' => 'El Progreso', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2762', 'name' => 'El Rosario', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2775', 'name' => 'El Tuzo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2776', 'name' => 'El Vergel (Los Trescientos)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2782', 'name' => 'Epimenio Espinoza', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2789', 'name' => 'Hermanas Priego', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2798', 'name' => 'La Concepción', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2800', 'name' => 'La Cueva', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2809', 'name' => 'La Gloria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2814', 'name' => 'La Herradura', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2831', 'name' => 'La Silvita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2853', 'name' => 'Los Colorines', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2858', 'name' => 'Los Parra', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2859', 'name' => 'Los Pinos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2871', 'name' => 'No Te Metas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2888', 'name' => 'Alegre', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2905', 'name' => 'San Gregorio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2913', 'name' => 'San José de Palmiras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2936', 'name' => 'Santa Ana', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2942', 'name' => 'Santa Cruz del Santuario', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2982', 'name' => 'El Hormiguero', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3017', 'name' => 'Las Palmas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3030', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3031', 'name' => 'San Felipe', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3045', 'name' => 'Vista Alegre', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '007', 'name' => 'Emiliano Zapata', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86980', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1026', 'name' => 'La Isla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86982', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1024', 'name' => 'Emiliano Zapata (Sección Jobal)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1025', 'name' => 'Emiliano Zapata Pochote', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2002', 'name' => 'Emiliano Zapata El Avispero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86983', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Manuel Andrade Díaz', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1023', 'name' => 'Chablé', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2000', 'name' => 'Nuevo Chablé', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2001', 'name' => 'Nuevo Pochote', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86984', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2003', 'name' => 'Boca de Chacamax', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2004', 'name' => 'Tres Letras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2005', 'name' => 'El Cuyo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2006', 'name' => 'Paso de San Román', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86985', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1027', 'name' => 'Chacaj', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1028', 'name' => 'Mariché', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2007', 'name' => 'Pocvicuc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2008', 'name' => 'Corozal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2009', 'name' => 'Concepción', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2010', 'name' => 'Chacama', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2011', 'name' => 'Cacao Zona Baja', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2012', 'name' => 'Cacao Zona Alta', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86986', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1020', 'name' => 'Cacao', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2013', 'name' => 'Río Final', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2023', 'name' => 'La Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86988', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1031', 'name' => 'La Pita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1032', 'name' => 'Aguacate', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2014', 'name' => 'Buena Vista', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86989', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1029', 'name' => 'Gregorio Méndez Magaña (Pénjamo)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1030', 'name' => 'Reforma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86990', 'locality' => 'Emiliano Zapata', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1021', 'name' => 'Emiliano Zapata Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86992', 'locality' => 'Emiliano Zapata', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1088', 'name' => 'Tierra y Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1117', 'name' => 'Ganadera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1184', 'name' => 'Los Pescadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1207', 'name' => 'Pedregal de Montecristo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1356', 'name' => 'Unidos en Solidaridad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1559', 'name' => 'Bajos Usumacinta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2020', 'name' => 'San Bartolo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2021', 'name' => 'El Campanario', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2022', 'name' => 'Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86993', 'locality' => 'Emiliano Zapata', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1199', 'name' => 'Barrio Olvidado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1254', 'name' => 'El Tucuy', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2015', 'name' => 'Heriberto Cabrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86994', 'locality' => 'Emiliano Zapata', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1093', 'name' => 'Elda y Jose', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1191', 'name' => 'Tierra Montecristo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1360', 'name' => 'Despertar Magisterial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1361', 'name' => 'El Mangal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86995', 'locality' => 'Emiliano Zapata', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1363', 'name' => 'Ecologista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1365', 'name' => 'Colonos del Usumacinta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1558', 'name' => 'Municipal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86996', 'locality' => 'Emiliano Zapata', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1058', 'name' => 'El Cerrito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1246', 'name' => 'Santa Isabel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1359', 'name' => 'Carlos A Madrazo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1366', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1367', 'name' => 'Banrural', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1562', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1564', 'name' => 'Luis Donaldo Colosio II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1565', 'name' => 'Militar', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '2016', 'name' => 'El Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2017', 'name' => 'Buenavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2018', 'name' => 'Último Esfuerzo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86997', 'locality' => 'Emiliano Zapata', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1089', 'name' => 'El Recreo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1357', 'name' => 'Las Lomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2019', 'name' => 'La Ceiba', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '86998', 'locality' => 'Emiliano Zapata', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'La Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1364', 'name' => 'El Piedral', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1560', 'name' => 'José Lehman Ocampo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1561', 'name' => 'Santa Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1563', 'name' => 'Buenos Aires', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2024', 'name' => 'Santa Fé', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);




    }
}
