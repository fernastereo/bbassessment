<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomSeeder04 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idFed = DB::table('federal_entities')->insertGetId(['key' => '04', 'name' => 'Campeche', 'code' => '']);

$idMun = DB::table('municipalities')->insertGetId(['key' => '002', 'name' => 'Campeche', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24000', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'San Francisco de Campeche Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24010', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'Pablo Garcia', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0013', 'name' => 'Villa del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0532', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24014', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0533', 'name' => 'Ah-kim-pech', 'zone_type' => 'Urbano', 'settlementtype_id' => '26','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24020', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Residencial del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0016', 'name' => 'Bellavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0017', 'name' => 'Ampliación Bellavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'La Ermita', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'San Joaquín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'Santa Lucia', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0534', 'name' => 'Camino Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0535', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0536', 'name' => 'Buenos Aires', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0537', 'name' => 'San Caralampio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0538', 'name' => 'Dzarbay', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1066', 'name' => 'Sotavento', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1170', 'name' => 'Villamar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24022', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0035', 'name' => 'Montecarlo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0102', 'name' => 'Carzabela', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24023', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0023', 'name' => 'Fidel Velázquez', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0030', 'name' => 'Las Murallas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0054', 'name' => 'Residencial Algarrobo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0539', 'name' => 'Ernesto Zedillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1021', 'name' => 'Residencial Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1059', 'name' => 'Nachi Cocom', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1159', 'name' => 'Quinta Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1160', 'name' => 'Hacienda Real el Fenix', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24024', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0024', 'name' => 'Mártires de Río Blanco', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24025', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0026', 'name' => 'Solidaridad Nacional', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24026', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0028', 'name' => 'Granjas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0029', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0032', 'name' => 'San José el Alto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0100', 'name' => 'Divino Niño', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0541', 'name' => 'Minas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0542', 'name' => 'Cumbres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0543', 'name' => 'Valle Dorado', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0544', 'name' => 'Ampliación Josefa Ortiz de Domínguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0545', 'name' => 'Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1013', 'name' => 'Elvia María Pérez de González', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1051', 'name' => 'Viveros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1063', 'name' => 'Diana Laura', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1064', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1272', 'name' => 'Palma Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24027', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0033', 'name' => 'Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0715', 'name' => 'San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0716', 'name' => 'Villa Mercedes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24028', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0036', 'name' => 'Villas de Ah-kim-Pech', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1067', 'name' => 'Cocotero de las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24029', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0037', 'name' => 'Centro SCT Campeche', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24030', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0038', 'name' => 'Bosques de Campeche', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0040', 'name' => 'Héroes de Chapultepec (FOVI)', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0116', 'name' => 'Resurgimiento', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0118', 'name' => 'CEDAR Campeche', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
		['key' => '0547', 'name' => 'Miramar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0548', 'name' => 'Lomas del Castillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1006', 'name' => 'Villas Universidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24035', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0027', 'name' => 'Lomas del Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0109', 'name' => 'Villas de Allende', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0549', 'name' => 'San Cayetano', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0550', 'name' => 'San Arturo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0551', 'name' => 'Burócratas Pensiones', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0552', 'name' => 'Cerro de La Eminencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0553', 'name' => 'Vicente Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0554', 'name' => 'Prado', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1054', 'name' => 'Lomas del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '1069', 'name' => 'Residencial Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1077', 'name' => 'Invasión San Arturo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24036', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0042', 'name' => 'Adolfo López Mateos (SUTERM)', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0110', 'name' => 'El Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0111', 'name' => 'Electricistas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24037', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0043', 'name' => 'Ciudad Militar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24038', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0044', 'name' => 'Kanisté', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0555', 'name' => 'Kaniste', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0556', 'name' => 'Rinconada del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1296', 'name' => 'Monte Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24039', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0045', 'name' => 'Buenavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24040', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0046', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0047', 'name' => 'San Román', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '1031', 'name' => 'Privada Narciso Mendoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24044', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0557', 'name' => 'Montecristo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0558', 'name' => 'Lazareto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1078', 'name' => 'Residencial Resurgimiento', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24049', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0049', 'name' => 'Bicentenario I y II', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24050', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0050', 'name' => 'FOVISSSTE Belén', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0052', 'name' => 'Santa Ana', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0112', 'name' => 'Villa Tulipanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0114', 'name' => 'San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0559', 'name' => 'La Paz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0560', 'name' => 'La Huerta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0561', 'name' => 'Parque Residencial La Noria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0562', 'name' => 'Privada Guadalupana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0563', 'name' => 'Hollywood', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1048', 'name' => 'Campeche 1', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1061', 'name' => 'Santa Ana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24058', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0053', 'name' => 'Caribe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24060', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0025', 'name' => 'Valle del Águila', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0055', 'name' => 'El Polvorín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0056', 'name' => 'Ampliación Polvorín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0057', 'name' => 'Jardines', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0060', 'name' => 'Tomas Aznar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0101', 'name' => 'Sector Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0565', 'name' => 'Residencial Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0566', 'name' => 'Tabachines', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0567', 'name' => 'Lomas del Polvorín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0568', 'name' => 'Leovigildo Gómez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0569', 'name' => 'Unidad y Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0570', 'name' => 'Solidaridad Urbana', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0571', 'name' => 'Lomas de las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0572', 'name' => 'Montebello', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0573', 'name' => 'Naval Campeche III', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '1009', 'name' => 'Residencial Delicias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1010', 'name' => 'Lomas Delicias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1011', 'name' => 'Lomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1044', 'name' => 'Las Quintas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1045', 'name' => 'Colinas del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1047', 'name' => 'Casa Blanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1065', 'name' => 'Altavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1079', 'name' => 'Lomas de las Flores II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1211', 'name' => 'Villas de Monte Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1274', 'name' => 'Tacubaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1275', 'name' => 'Villareal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24069', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0063', 'name' => 'Flor de Limón', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24070', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0575', 'name' => 'Héroe de Nacozari', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0576', 'name' => 'Hacienda Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0578', 'name' => 'Colonia México', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0717', 'name' => 'Justicia Social', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1171', 'name' => 'Quinta de Los Españoles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0064', 'name' => 'Aviación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0065', 'name' => 'Cuatro Caminos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0066', 'name' => 'Ampliación Cuatro Caminos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0067', 'name' => 'Huanal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0068', 'name' => 'Justo Sierra Méndez', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0069', 'name' => 'Santa Bárbara', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0103', 'name' => 'Cuatro Caminos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0574', 'name' => 'Bello Horizonte', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24073', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1018', 'name' => 'Siglo XXI', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24075', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0070', 'name' => 'El Carmelo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24079', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0071', 'name' => 'Campeche (Ing. Alberto Acuña Ongay)', 'zone_type' => 'Urbano', 'settlementtype_id' => '1','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24080', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0072', 'name' => 'Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0073', 'name' => 'Ampliación Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0074', 'name' => 'Pablo Garcia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0075', 'name' => 'Revolución', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0076', 'name' => 'Ampliación Revolución', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0579', 'name' => 'Josefa Ortiz de Domínguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1007', 'name' => 'Ampliación Invasión Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1169', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24083', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0077', 'name' => 'Fátima', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24084', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0031', 'name' => 'Siglo XXIII', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0059', 'name' => 'Nuevo San Antonio Ebulá', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24085', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Villas de Kala', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'Altamira', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0079', 'name' => 'Ciudad Concordia', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0113', 'name' => 'Bosque Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0580', 'name' => 'Kala', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0947', 'name' => 'Ramón Espíndola Blanco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1008', 'name' => 'Murallas FSTSE', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1049', 'name' => 'Residencial La Hacienda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1050', 'name' => 'Ampliación Ciudad Concordia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1060', 'name' => 'Invasión Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1062', 'name' => '20 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24086', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0106', 'name' => 'Villa Flora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0117', 'name' => 'Santa Lucía', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1052', 'name' => 'Villa Turquesa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24087', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Los Reyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0081', 'name' => 'Eduardo J. Lavalle Urbina', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0583', 'name' => 'Privada Exhacienda Kala', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0584', 'name' => 'Colonial Campeche', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0586', 'name' => 'Caminero', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0587', 'name' => 'Ampliación Kala', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1012', 'name' => 'Hacienda San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1022', 'name' => 'Tula', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1025', 'name' => 'Vista Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1026', 'name' => 'Privada Residencial Colonial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1267', 'name' => 'Terranova', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24088', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1019', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1020', 'name' => 'VIVAH', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1162', 'name' => 'Villas la Hacienda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1261', 'name' => 'El Vergel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1271', 'name' => 'Los Álamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1299', 'name' => 'Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1300', 'name' => 'Colonia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1301', 'name' => 'Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1302', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0012', 'name' => 'Alameda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'Las Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0078', 'name' => 'Héroes de la Revolución', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0082', 'name' => 'Unidad y Trabajo Plan-chac', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0104', 'name' => 'Villa Naranjos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0589', 'name' => 'Fénix', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0590', 'name' => 'Presidentes de México', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0591', 'name' => 'Paseo de Campeche', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1014', 'name' => 'Los Cedros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24089', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0083', 'name' => 'Peña', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24090', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0084', 'name' => 'Fracciorama 2000', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0085', 'name' => 'Samulá', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0086', 'name' => 'San Rafael', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0087', 'name' => 'Valle del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0108', 'name' => 'Residencial Villas Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0115', 'name' => 'Villas Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0592', 'name' => 'Nueva Era', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0593', 'name' => 'Los Sauces', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0720', 'name' => 'Villas de Samula', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0721', 'name' => 'La Vista', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1055', 'name' => 'Ampliación San Rafael', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1072', 'name' => 'Rinconada Samula', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1163', 'name' => 'Infonavit Samula', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1164', 'name' => 'Las Campanillas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1165', 'name' => 'Flor de Liz', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1166', 'name' => 'San Andrés', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1167', 'name' => 'Girasoles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1212', 'name' => 'Villa Jazmín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24093', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0088', 'name' => 'Villas Residencial (Ix-Lol-Be)', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '1266', 'name' => 'Residencial La Arboleda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24094', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0089', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0090', 'name' => 'Ampliación Miguel Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0105', 'name' => 'La Cañada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0594', 'name' => 'Ampliación Ignacio Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0595', 'name' => 'Ampliación Samulá', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0596', 'name' => 'Miramar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1029', 'name' => 'Villa Laureles II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1297', 'name' => 'Esmeralda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24095', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Residencial los Almendros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0091', 'name' => 'Sascalum', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0096', 'name' => 'Residencial San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0598', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0599', 'name' => 'Reforma Agraria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1015', 'name' => 'Villa Laureles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1027', 'name' => 'Multunchac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1030', 'name' => 'Villa Dalias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1176', 'name' => '18 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1289', 'name' => 'El Doral', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24096', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0092', 'name' => 'Lindavista C.T.M.', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0600', 'name' => 'Los Laureles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0603', 'name' => 'Tepeyac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1028', 'name' => 'Guadalajara', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24097', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0719', 'name' => 'Santa Cecilia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0094', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0601', 'name' => 'Las Rosas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0718', 'name' => 'Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24098', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0097', 'name' => 'Ignacio Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0602', 'name' => 'Lomas de Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24099', 'locality' => 'San Francisco de Campeche', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0098', 'name' => 'Lomas de San Rafael', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0099', 'name' => 'San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1016', 'name' => 'San Rafael', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1053', 'name' => 'Ampliación San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24500', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0379', 'name' => 'Lerma Centro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0381', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0702', 'name' => 'Chiapaneca', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0703', 'name' => 'Tepeyac', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0704', 'name' => 'Las Brisas', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0705', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0706', 'name' => 'Tres Cruces', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0707', 'name' => 'Marañon', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0708', 'name' => 'Becan', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0709', 'name' => 'Playa Bonita', 'zone_type' => 'Semiurbano', 'settlementtype_id' => '26','zipcode_id' => $idZip],
		['key' => '0710', 'name' => 'Pesquera', 'zone_type' => 'Rural', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0711', 'name' => 'Satélite', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0712', 'name' => 'Huayita', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0713', 'name' => 'Lerma', 'zone_type' => 'Rural', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '0714', 'name' => 'Kila', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1073', 'name' => 'Espíritu Santo', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1074', 'name' => 'La Guadalupana', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1075', 'name' => 'Secretaria de Marina', 'zone_type' => 'Rural', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '1076', 'name' => 'San Bartolo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24505', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1193', 'name' => 'San Lorenzo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24517', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0383', 'name' => 'Castamay', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24520', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0051', 'name' => 'Campestre Los Almendros', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0384', 'name' => 'China', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0385', 'name' => 'Hobomo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0386', 'name' => 'Mucuychakan', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0391', 'name' => 'Uayamón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24522', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0389', 'name' => 'San Agustin Ola', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24523', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1190', 'name' => 'Chulbac', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24532', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0392', 'name' => 'Pocyaxum', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24536', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0062', 'name' => 'Sierra Verde de Cayal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0393', 'name' => 'Uzahzil-Edzná (Nohyaxché)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24537', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0394', 'name' => 'Nohakal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24540', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0107', 'name' => 'Pueblo Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0396', 'name' => 'Cayal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0397', 'name' => 'San Antonio Cayal', 'zone_type' => 'Rural', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24550', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0399', 'name' => 'Chencollí (Citro-Kampeche)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0400', 'name' => 'Tikinmul', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1119', 'name' => 'San Antonio Bobolá', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1191', 'name' => 'Miguel Alemán (X- Campeu)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24552', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0401', 'name' => 'Nilchi', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24553', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1117', 'name' => 'San Camilo (Chencollí)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24557', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0402', 'name' => 'Crucero OXA', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24560', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0382', 'name' => 'Río Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0404', 'name' => 'Hampolol', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0405', 'name' => 'Imi', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0406', 'name' => 'San Francisco Koben', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24561', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0407', 'name' => 'CERESO San Francisco Kobén', 'zone_type' => 'Rural', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24562', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0408', 'name' => 'Bethania', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24564', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0409', 'name' => 'Chemblas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24570', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0041', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0346', 'name' => 'Kikab', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0390', 'name' => 'Lubná', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0411', 'name' => 'Alfredo V. Bonfil', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0413', 'name' => 'Melchor Ocampo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0414', 'name' => 'Tixmucuy', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0419', 'name' => 'Bolonchén Cahuich', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1118', 'name' => 'Nuevo Pénjamo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1285', 'name' => 'Nueva Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24572', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0415', 'name' => 'Pich', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0416', 'name' => 'San Luciano', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24573', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1120', 'name' => 'San Miguel Allende', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1121', 'name' => 'Carlos Cano Cruz (Los Tlaxcaltecas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1280', 'name' => 'Los Laureles', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24574', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0395', 'name' => 'Quetzal Edzná', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1192', 'name' => 'La Libertad', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24575', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0418', 'name' => 'Adolfo Ruiz Cortinez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '003', 'name' => 'Carmen', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24100', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0100', 'name' => 'Ciudad del Carmen Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24108', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0102', 'name' => 'CERESO Ciudad del Carmen', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24110', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0104', 'name' => 'Caleta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0105', 'name' => 'Héctor Pérez Martínez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0106', 'name' => 'Fátima', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0108', 'name' => '1 de Mayo (Playón)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0747', 'name' => 'San Agustin del Palmar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24114', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0109', 'name' => 'Justo Sierra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24115', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0111', 'name' => 'Marina del Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0112', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0740', 'name' => 'Miami', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0741', 'name' => 'Monte Bello', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0743', 'name' => 'Playa Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24116', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0113', 'name' => 'San Carlos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0957', 'name' => 'Boquerón del Palmar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24117', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0115', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24118', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0116', 'name' => 'San Nicolás', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24119', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0117', 'name' => 'Ciudad del Carmen (Ciudad del Carmen)', 'zone_type' => 'Urbano', 'settlementtype_id' => '1','zipcode_id' => $idZip],
		['key' => '0727', 'name' => 'Aeropuerto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24120', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0118', 'name' => 'Electricistas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0119', 'name' => 'Revolución', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0120', 'name' => 'Santa Margarita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24129', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0121', 'name' => 'Puerto Pesquero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24130', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0122', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0123', 'name' => 'San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0124', 'name' => '20 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24139', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0125', 'name' => 'Guanal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0126', 'name' => 'Puntilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24140', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0127', 'name' => 'Pallas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24150', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0128', 'name' => 'Belisario Domínguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0737', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1038', 'name' => 'La Rivera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24153', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Residencial Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1157', 'name' => 'Mundo Maya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24154', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0728', 'name' => 'Arcila', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0729', 'name' => 'Compositores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0734', 'name' => 'Isla del Carmen 2000', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0735', 'name' => 'Los Arcos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0738', 'name' => 'Maderas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0742', 'name' => 'Perla del Golfo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0745', 'name' => 'Puente de La Unidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0748', 'name' => 'San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0750', 'name' => 'San Manuel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0960', 'name' => 'Rafael del J Lozano Contreras', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1043', 'name' => 'Pueblo Maya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1150', 'name' => 'Palmira', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1151', 'name' => 'Los Ríos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24155', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0129', 'name' => 'Renovación I', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0130', 'name' => 'Renovación II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0726', 'name' => '23 de Julio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0744', 'name' => 'Plutarco Elías Calles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0754', 'name' => 'Solidaridad Urbana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0757', 'name' => 'Volcanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1036', 'name' => 'Renovación III', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1037', 'name' => 'Isla de Tris', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1133', 'name' => 'Villa San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1134', 'name' => 'Villa Universitaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1135', 'name' => 'Villa Conejo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1138', 'name' => 'Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1153', 'name' => 'San Capistrano', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1154', 'name' => 'Santa Mónica', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1295', 'name' => 'Villas de Santa Ana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24156', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0024', 'name' => 'Residencial El Cielo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1139', 'name' => 'Puerta de Hierro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1141', 'name' => 'El Dorado', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1142', 'name' => 'Villa del Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1143', 'name' => 'Villa Florencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1144', 'name' => 'Villa de Los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1145', 'name' => 'Villa Encantada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1147', 'name' => 'Mediterráneo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24157', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Buenavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0004', 'name' => 'Turquesa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'Rinconada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'Residencial Vistancias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'Club Residencial Azul', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'Mar Azul', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'Bicentenario', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'Paseo de los Bosques', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0025', 'name' => 'San Joaquín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0131', 'name' => 'Puesta del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0749', 'name' => 'San Joaquín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0751', 'name' => 'Santa Isabel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0959', 'name' => 'Residencial San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0969', 'name' => 'Privada Santa Ana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0970', 'name' => 'Privada San Joaquín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1042', 'name' => 'Playa Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1080', 'name' => 'Las Esperanzas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1081', 'name' => 'Real del Carmen', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1125', 'name' => 'Hacienda Dorada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1126', 'name' => 'Girasoles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1127', 'name' => 'Raíces', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1128', 'name' => 'Villas del Carmen', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1129', 'name' => 'Villa Magna', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1130', 'name' => 'Villa Marina', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1131', 'name' => 'Misión del Carmen', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1136', 'name' => 'Reforma II Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1155', 'name' => 'La Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1156', 'name' => 'Evergreén', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1172', 'name' => 'José Ortiz Ávila', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1252', 'name' => 'Hacienda del Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1255', 'name' => 'San Román', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1270', 'name' => 'Canterías', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1281', 'name' => 'Villa Palmeras', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1287', 'name' => '18 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1288', 'name' => 'Privanzas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24158', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Orizaba', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'Constelaciones', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0132', 'name' => 'Bivalbo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0731', 'name' => 'Héroes de Nacozari', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0733', 'name' => 'Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0746', 'name' => 'Residencial del Lago', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0752', 'name' => 'Santa Rita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1040', 'name' => 'Las Huertas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1041', 'name' => 'Mujeres Carmelitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1148', 'name' => 'Santa Rita II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1149', 'name' => 'Santa Rita III', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1269', 'name' => 'El Potrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1294', 'name' => 'Constelaciones II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24160', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0133', 'name' => 'Burócrata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24166', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0135', 'name' => 'Justo Sierra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24167', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0136', 'name' => 'Lomas de Holche', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24169', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0138', 'name' => 'Camaroneros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1254', 'name' => 'Asa Poniente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24170', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0139', 'name' => 'Aviación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0730', 'name' => 'Cuauhtémoc', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0755', 'name' => 'Tila', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24178', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0140', 'name' => 'Tecolutla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24179', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0141', 'name' => 'Petrolera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24180', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0142', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0143', 'name' => 'Benito Juárez 2', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0144', 'name' => 'Limonar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0146', 'name' => 'Tacubaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24185', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0147', 'name' => 'Estrella', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24186', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0148', 'name' => 'Miguel de La Madrid', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24187', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0149', 'name' => 'Manigua', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24188', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0150', 'name' => 'Caracol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24189', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0151', 'name' => 'Salitral', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24190', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0152', 'name' => 'Francisco I Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24195', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0153', 'name' => 'Pedro Sainz de Baranda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1039', 'name' => 'Las Pilas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24197', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0154', 'name' => 'Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0739', 'name' => 'Malibrán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0753', 'name' => 'Santa Rosalía', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1035', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24198', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0155', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24199', 'locality' => 'Ciudad del Carmen', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0156', 'name' => 'FOVISSSTE', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24300', 'locality' => 'Sabancuy', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Nueva Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'El Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'Nueva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'Juan Pablo Cetina', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0283', 'name' => 'Sabancuy Centro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0697', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0698', 'name' => 'Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0699', 'name' => 'Banco de Piedra', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0700', 'name' => 'Pénjamo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0701', 'name' => 'Jabal', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24310', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0012', 'name' => 'Oxcabal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0270', 'name' => 'Ignacio Gutiérrez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0274', 'name' => 'Oxcabal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0891', 'name' => 'San Antonio (Punta de Piedra)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0941', 'name' => 'La Pita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0943', 'name' => 'Anonal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0945', 'name' => 'Calax', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24313', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0271', 'name' => 'General Abelardo L Rodriguez (el Jobal)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0285', 'name' => 'Plan de Ayala', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0286', 'name' => 'Chic-bul', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0287', 'name' => 'Chekubul', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0289', 'name' => 'José María Pino Suárez', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0291', 'name' => 'Nicolás Bravo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0295', 'name' => 'La Cristalina', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0296', 'name' => 'Independencia', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0921', 'name' => 'La Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0922', 'name' => 'Colonia A López Mateos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0937', 'name' => 'Santa Rosalía', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0942', 'name' => 'Los Manantiales', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0944', 'name' => 'Chivoja', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1082', 'name' => 'La Lupita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24314', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0255', 'name' => 'Las Delicias', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0279', 'name' => 'Enrique Rodriguez Cano', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0758', 'name' => '18 de Marzo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24315', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0225', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0256', 'name' => 'Francisco Villa (mamantel)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0261', 'name' => 'Pital Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0262', 'name' => 'Pital Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0293', 'name' => 'La Providencia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0924', 'name' => 'Mamantel Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0925', 'name' => 'La Concepción', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24316', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Carlos Quinto', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0187', 'name' => 'Nueva Chontalpa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0189', 'name' => 'Felipe Ángeles', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0192', 'name' => 'Ojo de Agua', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0199', 'name' => 'El Encanto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0201', 'name' => 'Quebranche', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0263', 'name' => 'Ignacio Zaragoza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0927', 'name' => '2 de Marzo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0928', 'name' => 'San Jorge de Coyoc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0929', 'name' => 'San Pablito Km. 59', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0930', 'name' => 'Las Cruces', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24317', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'El Carmen', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0172', 'name' => 'La Estrella', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0173', 'name' => 'Sacrificio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0185', 'name' => 'Conquista Campesina', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0229', 'name' => 'El Aguacatal', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0232', 'name' => 'Venustiano Carranza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0906', 'name' => 'Cinco de Mayo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0931', 'name' => 'El Triunfo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0932', 'name' => 'Belisario Domínguez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0933', 'name' => 'Allende Pejelagarto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0934', 'name' => 'Centauro del Norte', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0935', 'name' => 'La Florida', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1210', 'name' => 'El Chinal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24320', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0894', 'name' => 'Bella Palizada', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0896', 'name' => 'Polvoxal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0897', 'name' => 'María de La Luz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24322', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0895', 'name' => 'Arrozal', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0904', 'name' => 'San José (El Deshecho)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24323', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0899', 'name' => 'Fernando Foglio Miramontes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0900', 'name' => 'Murallas de Campeche', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0901', 'name' => 'Valle de Solidaridad', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0902', 'name' => 'Generalísimo Morelos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0903', 'name' => 'Santa Rita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0912', 'name' => 'El Mameyal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0914', 'name' => 'El Refugio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1214', 'name' => 'San José Marentes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24324', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'El Popistal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0223', 'name' => 'El Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0905', 'name' => 'Paso San Juan', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0915', 'name' => 'Vista Alegre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0916', 'name' => 'La Pimienta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0917', 'name' => 'San Elpidio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0919', 'name' => 'Tres Valles', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24325', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Cantarell [Planta de Nitrógeno]', 'zone_type' => 'Rural', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '0013', 'name' => 'Ribera de San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0299', 'name' => 'San Antonio Cárdenas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0302', 'name' => 'Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0303', 'name' => 'Nuevo Campechito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0304', 'name' => 'Nuevo Progreso', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0876', 'name' => 'Ribera Media', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0878', 'name' => 'Ribera Alta', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0881', 'name' => 'El Pom', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0883', 'name' => 'La Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24326', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0297', 'name' => 'Atasta', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0298', 'name' => 'San Salvador de los Cerrillos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0301', 'name' => 'Puerto Rico', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0882', 'name' => 'Punta Zacatal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24327', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'Reubicación', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0288', 'name' => 'Isla Aguada Centro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0292', 'name' => 'Puerto Real', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0885', 'name' => 'Boca Nueva', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0886', 'name' => 'La Lagartera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '007', 'name' => 'Palizada', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24200', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0157', 'name' => 'Palizada Centro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0723', 'name' => 'Aviación', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0724', 'name' => 'Justicia Social', 'zone_type' => 'Rural', 'settlementtype_id' => '7','zipcode_id' => $idZip],
		['key' => '0725', 'name' => 'La Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '7','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24203', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1230', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1233', 'name' => 'Lagón Dulce', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1282', 'name' => 'Puerto Arturo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24204', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'El Mangal', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'Isla de San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'Rivera de la Viuda', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0165', 'name' => 'Ribera de la Corriente', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0168', 'name' => 'Tila', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0170', 'name' => 'Ribera San Eduardo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1263', 'name' => 'Ribera Gómez', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1283', 'name' => 'Las Bodegas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24205', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'Plan del Carmen', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'Ribera del Playón', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'San Agustín', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0159', 'name' => 'Alamilla', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0161', 'name' => 'San Juan', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0162', 'name' => 'Santa Isabel', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0163', 'name' => 'Santa Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0166', 'name' => 'El Borbotón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0167', 'name' => 'San Joaquín', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1234', 'name' => 'El Paraíso', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1235', 'name' => 'El Cuyo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1237', 'name' => 'La Toza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24206', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'El Cuerno', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0008', 'name' => 'El Vergel', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0012', 'name' => 'La Envidia', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'La Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0160', 'name' => 'San José', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1231', 'name' => 'Los Laureles', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1236', 'name' => 'Santa Mónica (Santa Rita)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1238', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1239', 'name' => 'Santa Elena', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1240', 'name' => 'Amatitán', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1241', 'name' => 'Monterrey', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1242', 'name' => 'Paso de los Caballos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24207', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Cronos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'El Carmen (San Marcos)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'El Retiro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Gardenias', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'La Concepción', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0013', 'name' => 'La Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'Mata del Chato', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0016', 'name' => 'Mata Larga', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'Río Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'San Carlos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0024', 'name' => 'San Hilario', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0027', 'name' => 'Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0028', 'name' => 'El Popistal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0224', 'name' => 'Tumbo de la Montaña', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0227', 'name' => 'Santa Adelaida', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1196', 'name' => 'El Juncal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1197', 'name' => 'Las Flores', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1232', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1243', 'name' => 'San Ángel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1244', 'name' => 'San Jorge', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1245', 'name' => 'La Nueva Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1246', 'name' => 'La Candelaria', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1247', 'name' => 'Villa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24208', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0018', 'name' => 'Ribera Boca Chica', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '011', 'name' => 'Candelaria', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24330', 'locality' => 'Candelaria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0654', 'name' => 'Cuauhtémoc', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0655', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0016', 'name' => 'Coahuilita', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0085', 'name' => 'San Pablo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0171', 'name' => 'Candelaria Centro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0648', 'name' => 'Acalan', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0649', 'name' => 'San Martín', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0650', 'name' => 'Guanajuato', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0651', 'name' => 'Independencia', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0652', 'name' => 'Alejandría', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24333', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0020', 'name' => 'El Capulín', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0036', 'name' => 'El Sacrificio II', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0060', 'name' => 'Las Maravillas (Campo Menonita)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0074', 'name' => 'Pejelagarto II', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0075', 'name' => 'R-2007', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0081', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0088', 'name' => 'Santo Domingo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0098', 'name' => 'Las Américas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0190', 'name' => 'Vicente Lombardo Toledano', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0198', 'name' => 'La Nueva Lucha', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0203', 'name' => 'Nueva Rosita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0204', 'name' => 'Pejelagarto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0210', 'name' => 'Nueva Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0211', 'name' => 'Miguel Alemán', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0769', 'name' => 'El Chilar', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0788', 'name' => 'La Fortuna', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0791', 'name' => 'La Unión', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1194', 'name' => 'El Pocito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24334', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0045', 'name' => 'Hermanos Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0047', 'name' => 'La Calzada', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0069', 'name' => 'Nueva Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0089', 'name' => 'Santo Domingo (El Cuyo)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0213', 'name' => 'Justo Sierra Méndez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0215', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0216', 'name' => 'El Ramonal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0217', 'name' => 'Estrella del Sur', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0218', 'name' => 'Las Golondrinas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0220', 'name' => 'El Tigre', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0242', 'name' => 'Pedro Baranda', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0246', 'name' => 'Nuevo Coahuila', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0249', 'name' => 'Monclova', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0250', 'name' => 'Miguel Hidalgo y Costilla', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0251', 'name' => 'Estado de México', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0779', 'name' => 'Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0781', 'name' => 'Francisco I. Madero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0792', 'name' => 'La Zanja (La Palma)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0797', 'name' => 'Luinal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24335', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0040', 'name' => 'El Treinta (Las Águilas)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0084', 'name' => 'San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0178', 'name' => 'La Pelusa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0226', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0236', 'name' => 'El Tintal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0240', 'name' => 'El Mamey', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24336', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0025', 'name' => 'El Escondido', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0026', 'name' => 'El Esfuerzo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0031', 'name' => 'El Paso del Cuervo (El Cuervo)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0034', 'name' => 'El Ramonal II (Los Manguitos)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0050', 'name' => 'La Florida (El Cuatro)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0051', 'name' => 'La Florida Tres', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0055', 'name' => 'La Mojina', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0059', 'name' => 'Las Delicias', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0061', 'name' => 'Las Margaritas Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0064', 'name' => 'Los Jabines Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0065', 'name' => 'Los Limones', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0077', 'name' => 'Rancho Alegre', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0078', 'name' => 'Rancho Alegre Tres', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0080', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0092', 'name' => 'Tres Reyes', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0234', 'name' => 'Cuauhtémoc', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0235', 'name' => 'Paraíso Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0238', 'name' => 'Pablo García', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0241', 'name' => 'El Suspiro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0244', 'name' => 'El Naranjo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0245', 'name' => 'El Machetazo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0247', 'name' => 'California', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0248', 'name' => 'El Limón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0770', 'name' => 'El Encanto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0775', 'name' => 'El Piedral (El Muerto)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0785', 'name' => 'Las Campanas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0789', 'name' => 'La Lucha', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0794', 'name' => 'Los Cuatro Hermanos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0801', 'name' => 'San Lorenzo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24337', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0029', 'name' => 'El Nuevo Ferrocarril', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0030', 'name' => 'El Otoño', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0082', 'name' => 'San Felipe', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0093', 'name' => 'Triunfo Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0094', 'name' => 'Triunfo Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0219', 'name' => 'Corte Pajaral', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0222', 'name' => 'Venustiano Carranza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0784', 'name' => 'La Amapola', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0793', 'name' => 'Las Palmitas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'Santa Rita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24338', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0018', 'name' => 'El Borbonal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0054', 'name' => 'La Isla del Esfuerzo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0095', 'name' => 'Champas Quemadas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0196', 'name' => 'Benito Juárez Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0202', 'name' => 'Primer Presidente de México (Guadalupe Victoria)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0233', 'name' => 'Vicente Guerrero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0782', 'name' => 'General Francisco J. Mújica', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24342', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'El Manantial', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'Cinco Hermanos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'El Diamante', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0033', 'name' => 'El Pulguero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0035', 'name' => 'El Relámpago', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0037', 'name' => 'El Tablón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0062', 'name' => 'Licenciado José Antonio González Curi', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0063', 'name' => 'Los Cardenales', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0071', 'name' => 'Nuevo Capricho', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0072', 'name' => 'Nuevo Progreso', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0079', 'name' => 'Río Caribe (Caribe)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0096', 'name' => 'San Cristóbal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0097', 'name' => 'El Último Esfuerzo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0214', 'name' => 'Las Palmas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0760', 'name' => 'Aguada Seca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0800', 'name' => 'Sal Si Puedes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0803', 'name' => 'Selva Negra', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1277', 'name' => 'Nuevo Comalcalco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24343', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0028', 'name' => 'El Milagro', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0043', 'name' => 'Emiliano Zapata III', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0046', 'name' => 'Isla del Paraíso', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0052', 'name' => 'La Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0070', 'name' => 'Nueva Rosita II', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0083', 'name' => 'San Fernando', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0086', 'name' => 'San Román', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0091', 'name' => 'Tres Hermanos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0207', 'name' => 'San Rafael del Río Caribe', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0208', 'name' => 'Pablo Torres Burgos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0230', 'name' => 'El Pedregal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0231', 'name' => 'El Chinal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0764', 'name' => 'La Olla', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0772', 'name' => 'El Marfil (Palo Alto)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0802', 'name' => 'Santa Lucía', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1279', 'name' => 'San José de las Montañas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24344', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Tres de Mayo Tres', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'Champas Quemadas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'El Calabozo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'El Chechenal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0024', 'name' => 'El Encanto', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0027', 'name' => 'El Fantasma (Los Chileros)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0032', 'name' => 'El Pimiental Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0048', 'name' => 'La Esperancita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0066', 'name' => 'Montecristo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0067', 'name' => 'Naranjito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0073', 'name' => 'Nuevo Tabasco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0205', 'name' => 'San Juan', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1276', 'name' => 'Agua Azul', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24345', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Miguel de la Madrid (El Pañuelo)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'Balancancito', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'El Cayuco', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0038', 'name' => 'El Taziztal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0042', 'name' => 'Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0056', 'name' => 'La Peregrina', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0087', 'name' => 'San Román', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0090', 'name' => 'Tres de Mayo Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0195', 'name' => 'La Misteriosa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0774', 'name' => 'El Mirador Primero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0790', 'name' => 'La Tómbola', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0795', 'name' => 'Los Pollos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0799', 'name' => 'El Paraguas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1258', 'name' => 'El Destino', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24346', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'Blancas Mariposas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0017', 'name' => 'Delicias I', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0057', 'name' => 'La Unión (Dos Arroyos)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0068', 'name' => 'Nego Eben-Ezer', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0174', 'name' => 'El Desengaño', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0761', 'name' => 'Alianza Productora', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0762', 'name' => 'Arroyo de Cuba', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0765', 'name' => 'Carlos Sansores Pérez (La Paz)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0804', 'name' => 'Solidaridad', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0807', 'name' => 'Tres Reyes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1195', 'name' => 'San Dimas (Alianza II)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1262', 'name' => 'Adolfo López Mateos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1278', 'name' => 'Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0008', 'name' => 'Arroyo del Julubal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'Arroyo Veinticuatro de Mayo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0012', 'name' => 'Balankax', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24347', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0039', 'name' => 'El Tigre Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0041', 'name' => 'El Tulipán (El Imposible)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0044', 'name' => 'Francisco Villa', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0076', 'name' => 'Rancho Alegre', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0221', 'name' => 'Santo Domingo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0239', 'name' => 'San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0780', 'name' => 'Flor de Chiapas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0798', 'name' => 'Narcizo Mendoza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0806', 'name' => 'Tenancingo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0808', 'name' => 'Vicente Guerrero Número 2', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1257', 'name' => 'Nueva Delicias II', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24348', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Laguna la Perdida', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'Aguas Malas (Tres Cruces)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Arroyo San Juan (Las Golondrinas)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0049', 'name' => 'La Esperancita Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0053', 'name' => 'La Ilusión', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0058', 'name' => 'Laguna San Ramón I', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0206', 'name' => 'Héctor Pérez Morales', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0209', 'name' => 'San Manuel Nuevo Canutillo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0212', 'name' => 'La Esmeralda', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1259', 'name' => 'Ignacio Zaragoza (El Salvaje)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '009', 'name' => 'Escárcega', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24350', 'locality' => 'Escárcega', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0252', 'name' => 'Escárcega Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0619', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0620', 'name' => 'Fátima', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0621', 'name' => 'Sal Si Puedes II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0622', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0623', 'name' => 'Sal Si Puedes I', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0624', 'name' => 'Jesús García', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0625', 'name' => 'Concordia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0626', 'name' => '10 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0627', 'name' => 'Flores Magón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0628', 'name' => 'Revolución', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0629', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0630', 'name' => 'Fertimex', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0631', 'name' => 'Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0632', 'name' => 'Unidad Esfuerzo y Trabajo II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0633', 'name' => 'Unidad Esfuerzo y Trabajo I', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0634', 'name' => 'I. Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0635', 'name' => 'C. Salinas de Gortari', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1249', 'name' => 'Vicente Fox', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1250', 'name' => 'La Jeringa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24353', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Miguel Hidalgo (Caracol)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'California', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'Colonia San Francisco (El Cinco)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'El Arbolito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'El Caracol', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0038', 'name' => 'La Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0258', 'name' => 'Matamoros', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24354', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0200', 'name' => 'Don Samuel', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0254', 'name' => 'División del Norte', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0259', 'name' => 'Haro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24355', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1201', 'name' => 'El Calabozo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24356', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0012', 'name' => 'El Gallo Samuel (El Gallito)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24357', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0021', 'name' => 'Ignacio Magdaleno', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0024', 'name' => 'La Misteriosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0186', 'name' => 'Luna', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0193', 'name' => 'Francisco I. Madero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0197', 'name' => 'Benito Juárez (La Polla)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1104', 'name' => 'La Flor', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24358', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0035', 'name' => 'Santa Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0036', 'name' => 'Santa Isabel', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0194', 'name' => 'Guadalajara', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1099', 'name' => 'El Huiro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'El Corriental', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'El Gallo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'El Pozo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'El Retiro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24364', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0032', 'name' => 'San José', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0272', 'name' => 'La Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0273', 'name' => 'Kilómetro Setenta y Cuatro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0335', 'name' => 'Juan Escutia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1202', 'name' => 'Juan de la Barrera', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24365', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0022', 'name' => 'La Constancia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0030', 'name' => 'San Carlos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0034', 'name' => 'San Pedro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0260', 'name' => 'La Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24366', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0018', 'name' => 'El Zacatecano', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0026', 'name' => 'María de la Luz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0033', 'name' => 'San Luis', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24367', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'El Diamante', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0016', 'name' => 'El Rosario (Puerto Escondido)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'La Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0031', 'name' => 'San José', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0037', 'name' => 'Santa Martha (El Naranjito)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0278', 'name' => 'Nuevo Progreso Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24368', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0020', 'name' => 'Herradero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0028', 'name' => 'San Alejandro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0280', 'name' => 'José de la Cruz Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0281', 'name' => 'Kilómetro Treinta y Seis', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1103', 'name' => 'La Asunción', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24369', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Chambalita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0013', 'name' => 'El Hular', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0017', 'name' => 'El Tornillo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0027', 'name' => 'Miguel Hidalgo y Costilla', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0282', 'name' => 'La Chiquita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24370', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0366', 'name' => 'Altamira de Zináparo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0368', 'name' => 'Silvituc', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0370', 'name' => 'Centenario', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1101', 'name' => 'Flor de Chiapas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1105', 'name' => 'Laguna Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1106', 'name' => 'José López Portillo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1107', 'name' => 'Benito Juárez Número 3', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24372', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0019', 'name' => 'Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24373', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0373', 'name' => 'Las Maravillas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0374', 'name' => 'Chan Laguna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1100', 'name' => 'El Jobal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24374', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0264', 'name' => 'La Libertad', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0371', 'name' => 'Justicia Social', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0955', 'name' => 'Adolfo López Mateos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1200', 'name' => 'El Lechugal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1204', 'name' => 'Nuevo Campeche (Tres Aguadas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24375', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0257', 'name' => 'Belén', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1102', 'name' => 'General Rodolfo Fierros', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1203', 'name' => 'Miguel de la Madrid', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24376', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Alto Río Caribe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24377', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'El Conejo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '004', 'name' => 'Champotón', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24400', 'locality' => 'Champotón', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Tierra y Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'Lindavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0306', 'name' => 'Champotón Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0508', 'name' => 'Cristóbal Colon', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0509', 'name' => 'Pozo del Chenpek', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0511', 'name' => 'La Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0513', 'name' => 'Las Brisas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0515', 'name' => 'INFONAVIT Miraflores', 'zone_type' => 'Semiurbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0516', 'name' => 'Moch-Cohuo', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0517', 'name' => 'Nueva Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0518', 'name' => 'Nueva Esperanza INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0519', 'name' => 'Plan-chac', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0520', 'name' => 'Pozo del Monte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0526', 'name' => 'San Patricio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0529', 'name' => 'Tajonal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0530', 'name' => 'Venustiano Carranza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0972', 'name' => 'Arenal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0973', 'name' => 'Arrocera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0974', 'name' => 'Aserradero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0975', 'name' => 'Avenida', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0976', 'name' => 'Cañaveral', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0977', 'name' => 'Cardenal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0978', 'name' => 'Carolinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0979', 'name' => 'Centenario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0980', 'name' => 'Cocal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0981', 'name' => 'Concepción Duran', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0983', 'name' => 'Cuauhtémoc', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0984', 'name' => 'Flamboyan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0985', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0986', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0987', 'name' => 'INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0988', 'name' => 'ISSSTE', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0989', 'name' => 'La Playa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0990', 'name' => 'La Santa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0992', 'name' => 'Las Mercedes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0993', 'name' => 'Las Palomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0994', 'name' => 'Laureles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0995', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0996', 'name' => 'Malecón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0997', 'name' => 'Manguitos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0998', 'name' => 'Nueva Jerusalén', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0999', 'name' => 'Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1000', 'name' => 'Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1002', 'name' => 'Puente Viejo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1004', 'name' => 'Ulises Sansores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1032', 'name' => 'Huanal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1033', 'name' => 'Camaroncito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1034', 'name' => 'Microondas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1183', 'name' => 'Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1265', 'name' => 'ISSFAM', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24402', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0308', 'name' => 'Ulumal', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0309', 'name' => 'Moquel', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0311', 'name' => 'El Zapote', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0958', 'name' => 'Canasayab', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1096', 'name' => 'San Antonio del Río', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24404', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0313', 'name' => 'San José Carpizo Uno (San Fernando)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0314', 'name' => 'San José Carpizo Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24410', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0317', 'name' => 'Ley Federal de Reforma Agraria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0318', 'name' => 'San Luis Carpizo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0319', 'name' => 'San Pablo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0320', 'name' => 'Vicente Guerrero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1095', 'name' => 'Punta Xen', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1181', 'name' => 'Villamar', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1215', 'name' => 'La Fraternidad', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1216', 'name' => 'San Felipe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1217', 'name' => 'San Marcos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1219', 'name' => 'El Caporal', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1220', 'name' => 'La Estrella', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24411', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Maya Tecún II', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0321', 'name' => 'López Mateos (La Desconfianza)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0322', 'name' => 'Pustunich', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0329', 'name' => 'San Antonio Yacasay', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0378', 'name' => 'Maya Tecún I', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1177', 'name' => 'Nueva Esperanza Número 2 (Santo Domingo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24413', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0324', 'name' => 'San Pablo Pixtún', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1221', 'name' => 'Valle Hermoso', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24414', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0276', 'name' => 'Pixoyal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0325', 'name' => 'Dzacabuchén', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0326', 'name' => 'José María Morelos y Pavón (El Pocito)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0327', 'name' => 'José María Morelos y Pavón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0336', 'name' => 'Revolución', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1084', 'name' => 'Aquiles Serdán (Chuiná)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1088', 'name' => 'General Ortiz Ávila', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1091', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1175', 'name' => 'Nueva Esperanza Uno (San Miguel Tobías)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1218', 'name' => 'Monte Bravo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24415', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0328', 'name' => 'Carrillo Puerto', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24416', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0330', 'name' => 'Xbacab', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24418', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0275', 'name' => 'Cinco de Febrero', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0277', 'name' => 'Miguel Colorado', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24419', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0334', 'name' => 'Profesor Graciano Sánchez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24420', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0337', 'name' => 'Arellano', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0345', 'name' => 'Santa Cruz de Rovira', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24421', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0339', 'name' => 'Villa de Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0341', 'name' => 'San Juan Carpizo', 'zone_type' => 'Rural', 'settlementtype_id' => '15','zipcode_id' => $idZip],
		['key' => '1097', 'name' => 'San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1178', 'name' => 'Cañaveral', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24423', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1179', 'name' => 'Nuevo Michoacán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24424', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0347', 'name' => 'Nayarit Castellot', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0372', 'name' => 'Coronel Ortiz Ávila', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1092', 'name' => 'López Portillo 2 (Nilun)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1098', 'name' => 'Valle de Quetzalcóatl', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24440', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0349', 'name' => 'Hool', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1174', 'name' => 'Santo Domingo Kesté', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24441', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0350', 'name' => 'Carlos Salinas de Gortari', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1085', 'name' => 'Buenaventura', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1087', 'name' => 'Dzitbalché Castellot', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24443', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0343', 'name' => 'Chac Chaito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0344', 'name' => 'Yohaltún', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1083', 'name' => 'Ah Kim Pech', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1086', 'name' => 'Chilam Balam', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1089', 'name' => 'Ignacio López Rayón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1090', 'name' => 'Kukulkán', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1093', 'name' => 'Miguel Allende', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1094', 'name' => 'Moch Cohuó', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1180', 'name' => 'La Providencia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1222', 'name' => 'Nuevo Paraíso [Módulo]', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24450', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0351', 'name' => 'Sihochac', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24451', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0312', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0352', 'name' => 'La Joya', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1256', 'name' => 'La Noria', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24459', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0354', 'name' => 'Ciudad del Sol', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '012', 'name' => 'Seybaplaya', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24460', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Seybaplaya Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'Fátima', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'Carmelita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0004', 'name' => 'San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'Hornos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'Tizimín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'Santa Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0008', 'name' => 'Santa Clara', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'La Jimba', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'Cristo Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0012', 'name' => '16 de Septiembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0013', 'name' => 'Frutales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'San Rafael', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'Siho Playa (Hotel)', 'zone_type' => 'Urbano', 'settlementtype_id' => '16','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'Costa Blanca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'El Sombrerón', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24462', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0015', 'name' => 'Nuevo Amanecer', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0016', 'name' => 'Villa Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Haltunchén', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24464', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'Xkeulil', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '006', 'name' => 'Hopelchén', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24600', 'locality' => 'Hopelchén', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0420', 'name' => 'Hopelchen Centro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0604', 'name' => 'El Tamarindo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0605', 'name' => 'Santa Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0606', 'name' => 'Campo de Aviación', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0607', 'name' => 'Magisterial', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0608', 'name' => 'Norte', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0609', 'name' => 'San Román', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0610', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0611', 'name' => 'San Luis', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0612', 'name' => 'San Martín', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0656', 'name' => 'Dolores Lanz', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24604', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0421', 'name' => 'El Poste', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0422', 'name' => 'San Juan Bautista Sahcabchén', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0424', 'name' => 'Ich-Ek', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0427', 'name' => 'Crucero San Luis', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0428', 'name' => 'San Francisco Suc-Tuc', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1268', 'name' => 'Santa Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24605', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0429', 'name' => 'Xcupil', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24606', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0430', 'name' => 'Becanchén', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24607', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0431', 'name' => 'Komchén', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24609', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0432', 'name' => 'Pakchén', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24610', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0433', 'name' => 'Chencoh', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24611', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0435', 'name' => 'Dzibalchén', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24612', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0436', 'name' => 'Cancabchén', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0457', 'name' => 'Francisco J. Mújica (Los Ucán)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1198', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24613', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0438', 'name' => 'Chunchintok', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24615', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0439', 'name' => 'Ukum', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0464', 'name' => 'Xmejía', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24620', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0425', 'name' => 'Xcalot Akal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0437', 'name' => 'San Bernardo Huechil', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0440', 'name' => 'Bolonchen de Rejón', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0441', 'name' => 'Xcanahaltún Huechil Unidos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1122', 'name' => 'Katab', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24622', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0443', 'name' => 'Chunyaxnic', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0444', 'name' => 'San Antonio Yaxché', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0476', 'name' => 'Chuncedro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0477', 'name' => 'Xculoc', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24623', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0426', 'name' => 'Yaxché Akal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1124', 'name' => 'Rancho Sosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24624', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1199', 'name' => 'Campo Menonita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24660', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0458', 'name' => 'Vicente Guerrero', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24663', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0459', 'name' => 'Ramón Corona', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24667', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0461', 'name' => 'X-Canhá', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1123', 'name' => 'Nuevo Chan Yaxché', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24668', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0434', 'name' => 'Chun-Ek', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0460', 'name' => 'Pachuitz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0462', 'name' => 'Chan-Chen', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24670', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0463', 'name' => 'Xmabén', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '010', 'name' => 'Calakmul', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24640', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Bellavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0002', 'name' => '10 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0445', 'name' => 'Xpujil', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1290', 'name' => 'Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1291', 'name' => 'Jardines', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1292', 'name' => 'Aviación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1293', 'name' => 'Fundadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24643', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0375', 'name' => 'Becan', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0826', 'name' => 'Chicana', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0833', 'name' => 'El Chichonal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0840', 'name' => 'Heriberto Jara Corona', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0862', 'name' => 'Plan de San Luis', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0872', 'name' => 'Valentín Gómez Farias', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24644', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0447', 'name' => 'Nuevo Becal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0449', 'name' => 'Zoh-laguna (alvaro Obregón)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0816', 'name' => 'Bel-ha', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0828', 'name' => 'Dos Lagunas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0836', 'name' => 'El Refugio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0855', 'name' => 'Nueva Vida', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0865', 'name' => 'Ricardo Flores Magón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0868', 'name' => 'Tepeyac', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0871', 'name' => 'Unión 20 de Junio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24645', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0448', 'name' => '20 de Noviembre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0450', 'name' => 'Cristóbal Colon', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0451', 'name' => 'Gral. Manuel Castilla Brito Km. 17', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0453', 'name' => 'ing. Ricardo Payro Jene (polo Norte)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0456', 'name' => 'Los Ángeles', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0820', 'name' => 'Caña Brava', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0831', 'name' => 'Eugenio Echeverría Castellot (El Carrizal)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0832', 'name' => 'El Carmen II', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0834', 'name' => 'El Manantial', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0835', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0838', 'name' => 'Felipe Ángeles', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0839', 'name' => 'Gustavo Díaz Ordaz (San Antonio Soda)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0841', 'name' => 'Hermenegildo Galeana', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0846', 'name' => 'San José', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0848', 'name' => 'La Lucha', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0849', 'name' => 'Lucha', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0850', 'name' => 'La Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0851', 'name' => 'La Virgencita de La Candelaria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0854', 'name' => 'Niños Héroes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0856', 'name' => 'Nuevo Campanario', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0857', 'name' => 'Nuevo Progreso 3', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0869', 'name' => 'Tomas Aznar Barbachano', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0870', 'name' => 'Unidad y Trabajo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1207', 'name' => '21 de Mayo (Lechugal)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1209', 'name' => 'Narciso Mendoza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24646', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0454', 'name' => 'Lázaro Cárdenas 2 (ojo de Agua)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0455', 'name' => 'Los Alacranes', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0810', 'name' => '16 de Septiembre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0817', 'name' => 'Bella Unión de Veracruz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0818', 'name' => 'Blasillo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0821', 'name' => 'Carlos A Madrazo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0824', 'name' => 'Cerro de las Flores (Sta. Rosa)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0837', 'name' => 'El Tesoro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0844', 'name' => 'Josefa Ortíz de Domínguez (Icaiché)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0852', 'name' => 'Los Tambores de Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0853', 'name' => 'Manuel Cresencio Rejón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0858', 'name' => 'Nuevo San José', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0859', 'name' => 'Nuevo Veracruz', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0860', 'name' => 'Pioneros del Río Xnohá', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0864', 'name' => 'Quiche las Pailas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1205', 'name' => 'Plan de Ayala (5 de Mayo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24647', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0809', 'name' => '11 de Mayo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0814', 'name' => 'Arroyo Negro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0829', 'name' => 'Dos Naciones', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0843', 'name' => 'José Ma. Morelos y Pavón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0845', 'name' => 'Justo Sierra Méndez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0866', 'name' => 'San Miguel', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0867', 'name' => 'Santo Domingo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0874', 'name' => 'Dos Lagunas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1206', 'name' => 'Ley de Fomento Agropecuario (La Misteriosa)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24648', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0822', 'name' => 'Centauro del Norte', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0847', 'name' => 'La Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24653', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0365', 'name' => 'Nuevo Conhuas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0815', 'name' => 'Balanku', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24654', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0369', 'name' => 'Felipe Ángeles II', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0830', 'name' => 'Ingeniero Eugenio Echeverría Castellot', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0863', 'name' => 'Puebla de Morelia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1208', 'name' => 'Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24656', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0823', 'name' => 'Central Chiclera Villahermosa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24658', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0348', 'name' => 'Xbonil', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0362', 'name' => 'Constitución', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0363', 'name' => 'Pablo Garcia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0367', 'name' => 'Santa Lucia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0825', 'name' => 'Concepción', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '008', 'name' => 'Tenabo', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24700', 'locality' => 'Tenabo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0465', 'name' => 'Tenabo Centro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24703', 'locality' => 'Tenabo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0948', 'name' => 'Jacinto Canek', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24704', 'locality' => 'Tenabo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0949', 'name' => 'San Pedro', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24705', 'locality' => 'Tenabo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0950', 'name' => 'Procesadora', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24706', 'locality' => 'Tenabo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0951', 'name' => 'Lazareto', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0952', 'name' => 'Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0953', 'name' => 'Ana María Farias', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24707', 'locality' => 'Tenabo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0954', 'name' => 'Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24720', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0466', 'name' => 'Kankí', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24723', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1226', 'name' => 'Chilib', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24730', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0467', 'name' => 'Tinún', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24732', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Santa Rita Corralché', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0468', 'name' => 'Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1228', 'name' => 'San Pedro Corralché', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24733', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1225', 'name' => 'Nachehá', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24734', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1189', 'name' => 'Xkuncheil', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24740', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1188', 'name' => 'Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24746', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1223', 'name' => 'Orizaba', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '005', 'name' => 'Hecelchakán', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24800', 'locality' => 'Hecelchakán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0469', 'name' => 'Centro Hecelchakán', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0510', 'name' => 'La Conquista', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0521', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0523', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0525', 'name' => 'San Juan', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '1186', 'name' => 'Abraham Azar', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1187', 'name' => 'Las Gardenias', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24810', 'locality' => 'Pomuch', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0471', 'name' => 'Centro Pomuch', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0505', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0507', 'name' => 'Colonia Nueva', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0512', 'name' => 'La Soledad', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0522', 'name' => 'San Diego', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0524', 'name' => 'San Jerónimo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0527', 'name' => 'San Pedro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0528', 'name' => 'Santa Cristina', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0531', 'name' => 'Villa Lucrecia', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24813', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0472', 'name' => 'Zodzil', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24820', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0474', 'name' => 'Cumpich', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24826', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0475', 'name' => 'Dzotchén', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24828', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Chicmuc', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0478', 'name' => 'Nohalal', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24830', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0479', 'name' => 'Pocboc', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1108', 'name' => 'Blanca Flor Hacienda', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24831', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0480', 'name' => 'Chunkanán', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24836', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0481', 'name' => 'Blanca Flor', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24837', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0482', 'name' => 'Santa Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1109', 'name' => 'San Felipe Tikín', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24839', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0483', 'name' => 'Dzitnup', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24860', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0484', 'name' => 'Campo Menonita Yalnón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24863', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1112', 'name' => 'Monte Bello', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1185', 'name' => 'Campo Menonita Chaví Número Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '001', 'name' => 'Calkiní', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24900', 'locality' => 'Calkini', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0485', 'name' => 'Calkini Centro', 'zone_type' => 'Semiurbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24902', 'locality' => 'Calkini', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0637', 'name' => 'FOVISSSTE', 'zone_type' => 'Semiurbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0638', 'name' => 'San Isidro', 'zone_type' => 'Semiurbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0639', 'name' => 'San Juan', 'zone_type' => 'Semiurbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0636', 'name' => 'Fátima', 'zone_type' => 'Semiurbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24903', 'locality' => 'Calkini', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0642', 'name' => 'La Concepción', 'zone_type' => 'Semiurbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0643', 'name' => 'San Miguel Kukab', 'zone_type' => 'Semiurbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0644', 'name' => 'Guadalupe', 'zone_type' => 'Semiurbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0646', 'name' => 'San Luisito', 'zone_type' => 'Semiurbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0647', 'name' => 'San Martín', 'zone_type' => 'Semiurbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24904', 'locality' => 'Calkini', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0640', 'name' => 'San Luis Obispo', 'zone_type' => 'Semiurbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0641', 'name' => 'Las Flores', 'zone_type' => 'Semiurbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0645', 'name' => 'Kilakan', 'zone_type' => 'Semiurbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24905', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0487', 'name' => 'Tepakan', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24910', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'El Gato Negro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'San Román', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0488', 'name' => 'Nunkini', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24913', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0497', 'name' => 'Santa Cruz Pueblo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0498', 'name' => 'San Antonio Sahcabchén', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24914', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0490', 'name' => 'Tankuche', 'zone_type' => 'Rural', 'settlementtype_id' => '6','zipcode_id' => $idZip],
		['key' => '0499', 'name' => 'San Agustín Chunhuás', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0502', 'name' => 'Concepción', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1116', 'name' => 'Xkakoch', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24915', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0491', 'name' => 'Pucnachen', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0492', 'name' => 'Santa María', 'zone_type' => 'Rural', 'settlementtype_id' => '15','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24916', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0493', 'name' => 'Santa Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '11','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24917', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0494', 'name' => 'San Nicolás', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24919', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0495', 'name' => 'Isla Arena', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24930', 'locality' => 'Bécal', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0503', 'name' => 'Bécal Centro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24933', 'locality' => 'Bécal', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Los Tres Reyes', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0966', 'name' => 'Fátima', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24934', 'locality' => 'Bécal', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0961', 'name' => 'Carlos Rivas', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24935', 'locality' => 'Bécal', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0962', 'name' => 'Pablo Garcia', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0964', 'name' => 'Limón', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0965', 'name' => 'Santa Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0968', 'name' => 'El Pocito', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24936', 'locality' => 'Bécal', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0963', 'name' => 'San Diego', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0967', 'name' => 'Estación', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24940', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1114', 'name' => 'San Roque Xnolán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '013', 'name' => 'Dzitbalché', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24920', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Dzitbalché', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'San Feliciano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'Solidaridad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24925', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Bacabchén', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '24929', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Chacnichén (El Pozo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);
    }
}
