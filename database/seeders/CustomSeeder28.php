<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomSeeder28 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idFed = DB::table('federal_entities')->insertGetId(['key' => '28', 'name' => 'Tamaulipas', 'code' => '']);

$idMun = DB::table('municipalities')->insertGetId(['key' => '041', 'name' => 'Victoria', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87000', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Ciudad Victoria Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2914', 'name' => 'Los Fresnos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87010', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Enrique Cárdenas González', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'José López Portillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0008', 'name' => 'Tránsito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87014', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'El Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'Emilio Caballero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'General Lucio Blanco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0012', 'name' => '77 Batallón de Infantería', 'zone_type' => 'Urbano', 'settlementtype_id' => '29','zipcode_id' => $idZip],
		['key' => '0221', 'name' => 'Alianza de Colonos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0236', 'name' => 'Villa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0239', 'name' => 'Zeferino Fajardo Luna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2107', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87015', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'Estrella', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3175', 'name' => 'Las Enfermeras', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3265', 'name' => 'Privada San Ignacio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87016', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3365', 'name' => 'Cañón de la Peregrina', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3404', 'name' => 'Vamos Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3834', 'name' => 'Sierra Vista', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87018', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0015', 'name' => 'Colinas del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0016', 'name' => 'Framboyanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0017', 'name' => 'Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'Praderas de Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2906', 'name' => 'Lomas de Calamaco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2918', 'name' => 'La Libertad II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3209', 'name' => 'Valle Esmeralda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3214', 'name' => 'Las Montañas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3274', 'name' => 'Colinas de San Roberto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3289', 'name' => 'Agua Fría II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3290', 'name' => 'Agua Fría I', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87019', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0020', 'name' => 'Burócratas Municipales II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'La Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2917', 'name' => 'La Presita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3174', 'name' => 'Monte Alto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3621', 'name' => 'Rincón del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3763', 'name' => 'Villas del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3857', 'name' => 'Rincón del Valle Elite', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87020', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0023', 'name' => 'Adolfo López Mateos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0025', 'name' => 'Norberto Treviño Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0028', 'name' => 'Valle de Aguayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0029', 'name' => 'Valle Escondido', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87023', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0200', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3272', 'name' => 'Haciendas del Colibrí', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3276', 'name' => 'Residencial Campestre Janambres', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3293', 'name' => 'Puerta de Hierro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3396', 'name' => 'Residencial Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3397', 'name' => 'San Gabriel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3726', 'name' => 'Los Olivos', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3926', 'name' => 'Lilia Zozaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87024', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0030', 'name' => 'Azteca', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0031', 'name' => 'Burócratas Municipales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0032', 'name' => 'Doctores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0033', 'name' => 'Ignacio Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0034', 'name' => 'ITACE', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0035', 'name' => 'Mariano Matamoros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0036', 'name' => 'Poza Madre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0037', 'name' => 'Revolución Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0038', 'name' => 'Teocaltiche', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0076', 'name' => 'UPYSSET', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
		['key' => '0080', 'name' => 'Bosque Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0214', 'name' => 'Villa Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0223', 'name' => 'Colinas del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0233', 'name' => 'Residencial los Milagros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2049', 'name' => 'Granjas Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2907', 'name' => 'Vista Azul', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2915', 'name' => 'Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3269', 'name' => 'Valle Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3277', 'name' => 'Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3278', 'name' => 'Bosques del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3279', 'name' => 'Privada San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3288', 'name' => 'Los Encinos Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3408', 'name' => 'San Alberto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3410', 'name' => 'Las Alamedas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3411', 'name' => 'Pedregal Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3651', 'name' => 'Nueva Aurora', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3794', 'name' => 'Privanzas II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87025', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0039', 'name' => 'Adolfo López Mateos (Ampliación)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0040', 'name' => 'Ingeniero Agrónomo Carlos Anzures', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0042', 'name' => 'Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0043', 'name' => 'Del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0044', 'name' => 'Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0045', 'name' => 'Las Huertas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0046', 'name' => 'Residencial Cabañas de Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0047', 'name' => 'Vista Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0209', 'name' => 'Jardines de San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0229', 'name' => 'Privada Cabañas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0237', 'name' => 'Villas del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0240', 'name' => 'Real de Teocaltiche', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2913', 'name' => 'La Florida', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2919', 'name' => 'Magistrados', 'zone_type' => 'Urbano', 'settlementtype_id' => '5','zipcode_id' => $idZip],
		['key' => '2957', 'name' => 'Las Alazanas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3171', 'name' => 'Bosques Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3172', 'name' => 'Siglo XXI', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
		['key' => '3257', 'name' => 'Privada Bilbao', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3271', 'name' => 'Montes Altos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3413', 'name' => 'Ampliación Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3769', 'name' => 'Residencial la Misión', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3791', 'name' => 'Haciendas del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87026', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0048', 'name' => 'Magisterial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3256', 'name' => 'Privada Canteras', 'zone_type' => 'Urbano', 'settlementtype_id' => '5','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87027', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0049', 'name' => 'Las Américas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0050', 'name' => 'Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0052', 'name' => 'Petroleros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0053', 'name' => 'Villa Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0054', 'name' => 'Villarreal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0213', 'name' => 'Ampliación Villarreal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3173', 'name' => 'San Ángel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3207', 'name' => 'Monte Alto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3792', 'name' => 'Privadas de la Salle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87028', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0055', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0056', 'name' => 'Club Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0057', 'name' => 'INFONAVIT Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0058', 'name' => 'Residencial los Naranjos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0203', 'name' => 'Camino Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0205', 'name' => 'Los Sauces', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0227', 'name' => 'Los Lagos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0243', 'name' => 'Verona Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3263', 'name' => 'Los Laureles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3270', 'name' => 'Royal Country', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3273', 'name' => 'Misión San Agustín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3284', 'name' => 'Los Cristales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3398', 'name' => 'Santa Laura', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3399', 'name' => 'Santa Bárbara', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3412', 'name' => 'Villa Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87029', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0059', 'name' => 'Residencial Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3220', 'name' => 'Privanzas I', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3358', 'name' => 'Las Villas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87030', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0026', 'name' => 'Ampliación Miguel Alemán', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0060', 'name' => 'Banrural', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0061', 'name' => 'Colinas del Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0062', 'name' => 'Héroe de Nacozari', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0063', 'name' => 'Imperial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0064', 'name' => 'Jardín Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0065', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0066', 'name' => 'Los Ébanos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0067', 'name' => 'Miguel Alemán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0068', 'name' => 'Sierra Ventana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0069', 'name' => 'Junta Local de Caminos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0077', 'name' => 'Nuevo Santander', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0241', 'name' => 'Privada Jardines del Sauce', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2045', 'name' => 'FSTSE', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2905', 'name' => 'Villa Alpina', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2955', 'name' => 'INFONAVIT Miguel Alemán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2956', 'name' => 'Conjunto Habitacional Panorama', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '2960', 'name' => 'Mi Ranchito', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3163', 'name' => 'La Cima', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3164', 'name' => 'Mira Sierra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3218', 'name' => 'Cumbres', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3275', 'name' => 'Privadas del Nogalar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3793', 'name' => 'La Sierra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87033', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0071', 'name' => 'La Escondida', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87037', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0074', 'name' => 'Sierra Madre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0075', 'name' => 'Tecnológico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0218', 'name' => 'Balcón Panorámico Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0219', 'name' => 'Lomas Panorámico', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2811', 'name' => 'Fuego Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2954', 'name' => 'Lomas de Santander', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3162', 'name' => 'Colinas del Parque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3268', 'name' => 'Residencial los Alpes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87039', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2934', 'name' => 'Nuevo Santander', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87040', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0078', 'name' => 'INFONAVIT Aldama', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0079', 'name' => 'Asunción Gómez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0081', 'name' => 'Los Arcos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0082', 'name' => 'Del Periodista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0083', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0084', 'name' => 'Viviendas Populares', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87043', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3928', 'name' => 'Pietrasanta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87048', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0027', 'name' => 'INFONAVIT Jesús Elías Piña', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0087', 'name' => 'Pedro José Méndez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3230', 'name' => 'FOVISSSTE', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87049', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2951', 'name' => 'Los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2961', 'name' => 'Conjunto Habitacional Paseo de las Américas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2962', 'name' => 'Naciones Unidas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3208', 'name' => 'Los Almendros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3282', 'name' => 'Conjunto Habitacional los Mezquites', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3776', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0004', 'name' => 'Santo Tomás', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0089', 'name' => 'Hacienda del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0091', 'name' => 'Las Adelitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0092', 'name' => 'Las Misiones', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0093', 'name' => 'Las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0094', 'name' => 'México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0095', 'name' => 'Oralia Guerra de Villarreal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0096', 'name' => 'San Luisito', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0097', 'name' => 'Militar', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0231', 'name' => 'Residencial las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0232', 'name' => 'Residencial los Almendros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0245', 'name' => 'Residencial las Rosas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2167', 'name' => 'SUTSPET', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2908', 'name' => 'INFONAVIT Fidel Velázquez Sánchez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2911', 'name' => 'Santa Martha', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87050', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0098', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0099', 'name' => 'Quinta Laura', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0100', 'name' => 'Residencial las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0101', 'name' => 'San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0102', 'name' => 'Sierra Gorda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87058', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0103', 'name' => 'Del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2950', 'name' => 'Jacarandas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3414', 'name' => 'Conjunto Habitacional Residencial Selectas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87059', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0106', 'name' => 'Hogares Modernos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87060', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0107', 'name' => 'Estudiantil', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0108', 'name' => 'Luis Echeverría Álvarez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0109', 'name' => 'Tamatán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0222', 'name' => 'Bethel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0224', 'name' => 'Constitución del 17 de Octubre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3165', 'name' => 'Tomás Yarrington', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3369', 'name' => 'Rosalinda Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3373', 'name' => 'Sector la Huerta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87070', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0110', 'name' => 'Del Maestro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0112', 'name' => 'Zozaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0113', 'name' => 'La Gloria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0114', 'name' => 'Cofrades', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0115', 'name' => 'Luis Quintero Guzmán', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0116', 'name' => 'San Marcos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0117', 'name' => '7 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0118', 'name' => 'Camino Real a Tula', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0230', 'name' => 'Puerta de la Luna', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1998', 'name' => 'Américo Villarreal Guerra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2944', 'name' => 'Conjunto Habitacional Villas de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2945', 'name' => 'Rincón de Tamatán', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2946', 'name' => 'Puerta del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3166', 'name' => 'Puerta Cofrades', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3280', 'name' => 'Puerta de Tamatán', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3364', 'name' => 'Jardines de Tamatán', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87071', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2922', 'name' => 'Enrique Lara', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87076', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0120', 'name' => 'Alberto Carrera Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0121', 'name' => 'Simón Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2066', 'name' => 'La Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87078', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0122', 'name' => 'Altavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0124', 'name' => 'América de Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0125', 'name' => 'Camino Vecinal la Garra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0126', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0127', 'name' => 'Álvaro Obregón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0225', 'name' => 'Cuauhtémoc', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2014', 'name' => 'Cuauhtémoc', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2942', 'name' => 'Vista Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2943', 'name' => 'Luis Echeverría Álvarez', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '3281', 'name' => 'Rincón de la Sierra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3374', 'name' => 'Del Maestro Eta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3375', 'name' => 'El Tamatán', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3855', 'name' => 'Vergel de la Sierra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87080', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0129', 'name' => '16 de Septiembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0130', 'name' => 'Emilio Portes Gil', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0131', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0132', 'name' => 'José de Escandón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2026', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2910', 'name' => 'Ayuntamiento I Etapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0128', 'name' => 'Buenavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87083', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3779', 'name' => 'Parque Bicentenario', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87084', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0202', 'name' => 'Residencial los Canarios', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0215', 'name' => 'Los Mirlos Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0216', 'name' => 'Paseo de los Cisnes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0242', 'name' => 'Residencial el Cardenal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0246', 'name' => 'Las Garzas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0247', 'name' => 'Privada del Quetzal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0248', 'name' => 'Montebello', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0249', 'name' => 'Privadas del Colibrí', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3908', 'name' => 'Los Álamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3909', 'name' => 'Residencial Santa Regina', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3910', 'name' => 'La Rioja', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87085', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0135', 'name' => 'Pepenadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3390', 'name' => 'Ayuntamiento II Etapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87086', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Valle Dorado', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0137', 'name' => 'Liberal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0138', 'name' => 'Vicente Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2937', 'name' => 'Azteca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2938', 'name' => 'Matías Hinojosa Silva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3283', 'name' => 'Pajaritos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3415', 'name' => 'Ampliación Playas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87087', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0139', 'name' => 'Nuevas Playas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0141', 'name' => 'Satélite', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2154', 'name' => 'Sagitario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87089', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Hacienda del Nogal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0072', 'name' => 'Nuevo Amanecer', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0143', 'name' => 'La Corregidora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0144', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0145', 'name' => 'La Paz', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0146', 'name' => 'Magdaleno Aguilar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0147', 'name' => 'Niños Héroes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0148', 'name' => 'Nueva Era', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0149', 'name' => 'Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0150', 'name' => 'Solidaridad Voluntad y Trabajo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0204', 'name' => 'Alborada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0238', 'name' => 'Villas Vida Plena', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2055', 'name' => 'Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2933', 'name' => 'Manuel Cavazos Lerma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2935', 'name' => 'Unidad Sindical', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3170', 'name' => 'CANACO', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3219', 'name' => 'Valle del Magisterio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3287', 'name' => 'Barrio de Pajaritos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3393', 'name' => 'Ampliación Nuevo Amanecer', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87090', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0152', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0153', 'name' => 'Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0154', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0155', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0157', 'name' => 'Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87093', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3391', 'name' => 'Benito Juárez II y III', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87099', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0158', 'name' => 'Comercial 2000', 'zone_type' => 'Urbano', 'settlementtype_id' => '26','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87100', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0159', 'name' => 'Guadalupe Mainero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87110', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0162', 'name' => 'Burócratas Estatales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87120', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0163', 'name' => 'El Palmar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0164', 'name' => 'Hacienda del Santuario', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0165', 'name' => 'Pedro Sosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3215', 'name' => 'Fraternidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3380', 'name' => 'Balcones del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87130', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0166', 'name' => 'Chapultepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0167', 'name' => 'Horacio Terán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0168', 'name' => 'Las Palomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0170', 'name' => 'Vista Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0199', 'name' => 'Loma Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0206', 'name' => 'Mediterráneo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2931', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3168', 'name' => 'Loma Linda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3169', 'name' => 'Integración Familiar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3216', 'name' => 'Viento Huasteco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3259', 'name' => 'Loma Bonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3261', 'name' => 'Paseo de los Olivos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3267', 'name' => 'Los Prados', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3285', 'name' => 'Las Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3389', 'name' => 'Auténticas Playas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3795', 'name' => 'Paseo de los Olmos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87133', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0220', 'name' => '2 de Abril', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3292', 'name' => 'El Mezquite', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3384', 'name' => 'Promotora de Educación Superior de Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3386', 'name' => 'Camino Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87134', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0171', 'name' => 'Las Huertas del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0172', 'name' => 'Moderna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0173', 'name' => 'Obregón', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0174', 'name' => 'Primavera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0210', 'name' => 'Residencial Arbolada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0211', 'name' => 'Familias Fuertes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0212', 'name' => 'Todos por Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0228', 'name' => 'Nueva Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0234', 'name' => 'Residencial los Prados', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2020', 'name' => 'Diana Laura', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2087', 'name' => 'Linda Vista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2930', 'name' => 'Servidor Público', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3213', 'name' => 'Luisa Montemayor', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3291', 'name' => 'Riveras del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3767', 'name' => 'Unidos Avanzamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3875', 'name' => 'Altavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87135', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0085', 'name' => 'Bambú', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0175', 'name' => 'Gloria Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0198', 'name' => 'Lomas Verdes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0207', 'name' => 'Villas del Carmen', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0217', 'name' => 'Lomas del Rincón', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2928', 'name' => 'Rincón de las Montañas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87136', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3382', 'name' => 'Huertas San Javier', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3383', 'name' => 'Pedro José Méndez II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3766', 'name' => 'Noria de los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87137', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3387', 'name' => 'Parque Industrial Nuevo Santander', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '3388', 'name' => 'Loma Dorada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3894', 'name' => 'Marte R Gómez', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87138', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3778', 'name' => 'Parque Científico y Tecnológico de Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87140', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0177', 'name' => 'Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0178', 'name' => 'Los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2927', 'name' => 'Simon Bolívar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3210', 'name' => 'Evelin', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87149', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0179', 'name' => 'Centro Universitario', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87150', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0184', 'name' => 'Veteranos de la Revolución', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0180', 'name' => 'Altas Cumbres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0181', 'name' => 'Francisco I Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0182', 'name' => 'San Marcos Dos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87160', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0176', 'name' => 'Bertha del Avellano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0186', 'name' => 'Gutiérrez de Lara', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0187', 'name' => 'Casas Blancas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0188', 'name' => 'Unidad Modelo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3378', 'name' => 'Gutiérrez de Lara', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87163', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3258', 'name' => 'Barrio del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87170', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0189', 'name' => 'Amalia G de Castillo Ledon', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0190', 'name' => 'Manuel A Ravize', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87173', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3921', 'name' => 'Poder Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87180', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0191', 'name' => 'SAHOP', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0192', 'name' => '12 de Septiembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0193', 'name' => 'Ignacio Allende', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0194', 'name' => 'Las Brisas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0195', 'name' => 'Loma Alta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0196', 'name' => 'Pedro Sosa (Ampliación)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0226', 'name' => 'Jardines del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0235', 'name' => 'Unión Democracia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2031', 'name' => 'Esfuerzo Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2921', 'name' => 'Nuevo Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3211', 'name' => 'Constituyentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87183', 'locality' => 'Ciudad Victoria', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3286', 'name' => 'Residencial la Quinta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3381', 'name' => 'Rinconada las Haciendas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3876', 'name' => 'Misión del Palmar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87260', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0252', 'name' => 'Alto de Estación Caballeros', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0253', 'name' => 'Congregación Caballeros', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0254', 'name' => 'La Libertad', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0255', 'name' => 'La Misión', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87261', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0256', 'name' => 'Estación Carbonero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87262', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0257', 'name' => 'La Peñita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0258', 'name' => 'Otilio Montaño', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3045', 'name' => 'Las Anacuas (Las Coloradas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3053', 'name' => 'Juan Rincón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3054', 'name' => 'El Rucio (María Eugenia Benavides)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87263', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0259', 'name' => 'Fuerte de Portes Gil', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0260', 'name' => 'La Boca (La Boca de San Pedro)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0261', 'name' => 'Nogales', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87265', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0262', 'name' => 'Rancho Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3047', 'name' => 'Mariposas y Mahuiras', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87266', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0263', 'name' => 'Alianza de Caballeros', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87267', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0264', 'name' => 'El Refugio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87270', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0265', 'name' => 'Loma Alta (Ejido)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3057', 'name' => 'Lomas de Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87273', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0266', 'name' => 'San Juan y el Ranchito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3051', 'name' => 'Manuel Ávila Camacho', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3052', 'name' => 'Santa Clara', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3059', 'name' => 'El Olmo (Rancho Nuevo del Castillo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3856', 'name' => 'Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87274', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0267', 'name' => 'Santa Librada', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3048', 'name' => 'Santa Ana', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87277', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0269', 'name' => 'El Olivo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3046', 'name' => 'Veintiuno de Mayo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3050', 'name' => 'Dieciocho de Marzo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87278', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0270', 'name' => 'La Presa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87279', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0208', 'name' => 'Laborcitas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0271', 'name' => 'Aquiles Serdán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3049', 'name' => 'Tierra Nueva', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87284', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0201', 'name' => 'Joya Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0244', 'name' => 'Puerto el Paraíso', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '019', 'name' => 'Llera', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87200', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0198', 'name' => 'Llera de Canales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2109', 'name' => 'Luis Quintero', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2122', 'name' => 'Morelos', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2136', 'name' => 'Obrera', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2505', 'name' => 'Enrique Cárdenas González', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3143', 'name' => 'Miradores (Guayalejo)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3144', 'name' => 'José Agustín Castro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87202', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0200', 'name' => 'Lavín', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87203', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0201', 'name' => 'José María Morelos (El Viejo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87204', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3618', 'name' => 'Felipe Carrillo Puerto', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87205', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0202', 'name' => 'Porvenir del Campesino (La Purísima)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0203', 'name' => 'San Rafael', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3733', 'name' => 'El Peñón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87206', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0204', 'name' => 'Felipe Ángeles (El Carrizo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0205', 'name' => 'San Juan del Sur', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0206', 'name' => 'Santa Isabel', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3774', 'name' => 'San Miguel del Olivo [Congregación]', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87207', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0207', 'name' => 'Hermenegildo Galeana', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3730', 'name' => 'Las Huertas', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3886', 'name' => 'San Ramón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87208', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0208', 'name' => 'El Aquichal (El Pinto)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0209', 'name' => 'La Libertad', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0210', 'name' => 'Santa Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3633', 'name' => 'Conrado Castillo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87209', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0211', 'name' => 'El Nuevo Encino (El Encino)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0212', 'name' => 'El Guayabo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0214', 'name' => 'Rancho Nuevo del Sur', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0215', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87210', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0216', 'name' => 'Las Compuertas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0217', 'name' => 'Ignacio Zaragoza', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0218', 'name' => 'General Pedro José Méndez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87211', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0219', 'name' => 'Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87212', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0220', 'name' => 'Casa del Campesino (La Clementina)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87213', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0221', 'name' => 'La Independencia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3916', 'name' => 'Nuevo San Luis (San Luisito)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87214', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0222', 'name' => 'José Silva Sánchez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87215', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0223', 'name' => 'Capitán Emilio Carranza (Forlón)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87216', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0224', 'name' => 'Voz Campesina (Providencia)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87220', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0225', 'name' => 'Mariano Escobedo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87223', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3859', 'name' => 'Voz Campesina (Ampliación las Minas)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87224', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0226', 'name' => 'Francisco Villa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2988', 'name' => 'Adolfo Ruiz Cortines', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2989', 'name' => 'Guanajuato', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87227', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3860', 'name' => 'Santa Inés', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3898', 'name' => 'El Cabrito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87228', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0227', 'name' => 'Francisco Castellanos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87229', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3073', 'name' => 'Adolfo López Mateos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '013', 'name' => 'Güémez', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87230', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0228', 'name' => 'Güémez', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87232', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0229', 'name' => 'Ricardo Flores Magón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87233', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'La Mesa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3038', 'name' => 'Constitución del Diecisiete', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87235', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0230', 'name' => 'San Cayetano', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0231', 'name' => 'San José de las Flores', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3037', 'name' => 'La Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87236', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0232', 'name' => 'Ciudad Victoria (General Pedro J Méndez)', 'zone_type' => 'Rural', 'settlementtype_id' => '1','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87237', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0233', 'name' => 'La San Juana', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3039', 'name' => 'Subida Alta', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87238', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0234', 'name' => 'Luz del Campesino (Corona)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0235', 'name' => 'Miraflores', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3040', 'name' => 'Acatlán (Plutarco Elías Calles)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87239', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0236', 'name' => 'La Diana', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3041', 'name' => 'La Parrita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87240', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0237', 'name' => 'El Carmen', 'zone_type' => 'Rural', 'settlementtype_id' => '15','zipcode_id' => $idZip],
		['key' => '0238', 'name' => 'Graciano Sánchez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0239', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87244', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0240', 'name' => 'Santa Rosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87245', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0241', 'name' => 'El Alamito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0242', 'name' => 'El Olmo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3036', 'name' => 'El Roble', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87247', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0243', 'name' => 'El Arco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3075', 'name' => 'Santa Gertrudis', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87248', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Servando Canales', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0244', 'name' => 'Las Crucitas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3042', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3043', 'name' => 'La Presita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87249', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0245', 'name' => 'El Cerrito Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0246', 'name' => 'Plan de Ayala', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '008', 'name' => 'Casas', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87250', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'Jacinto Canek', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0247', 'name' => 'Casas', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87253', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0012', 'name' => 'Nuevo San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0248', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3850', 'name' => 'González', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87254', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'Eduardo Benavides (El Almagre)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87255', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'San Antonio el Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3839', 'name' => 'La Maestra', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3917', 'name' => 'Piedras Negras', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87256', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Campo Número Uno (Campo Alto)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'Lajilla del Sur (La Lajilla)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Campo Número Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'Campo Número Tres', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87257', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'La Guadalupana (Las Adjuntas)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'Los Ángeles (Felipe Ángeles)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0249', 'name' => 'El Nogalito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0250', 'name' => 'Los Ángeles', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3609', 'name' => 'Praxedis Balboa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87258', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0251', 'name' => 'San Francisco (Estación San Francisco)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87259', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0004', 'name' => 'El Amparo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0008', 'name' => 'Adolfo López Mateos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'Cinco de Febrero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '022', 'name' => 'Matamoros', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87300', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0272', 'name' => 'Heroica Matamoros Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87310', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0273', 'name' => 'Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0274', 'name' => 'Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0276', 'name' => 'Uniones', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1313', 'name' => 'Baltazar Díaz Bazán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1323', 'name' => 'Cananea', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1499', 'name' => 'Sección 11', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3202', 'name' => 'Constitución del 17', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3205', 'name' => 'Juanillo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87313', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'El Caracol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0008', 'name' => 'Parque Industrial Los Palmares', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '0277', 'name' => 'Carrera Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0525', 'name' => 'Ejido los Arados', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2522', 'name' => 'Libertad y Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2523', 'name' => 'Siglo XXI', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2899', 'name' => 'Vamos Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3109', 'name' => 'San Pedro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3221', 'name' => 'Paseo del Nogalar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3322', 'name' => 'Brisas del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3323', 'name' => 'Paseo de las Brisas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3324', 'name' => 'Rinconada de las Brisas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3325', 'name' => 'Jacarandas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3650', 'name' => 'Fidel Velázquez', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87314', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0278', 'name' => 'República Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0279', 'name' => 'República Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1327', 'name' => 'Cedritos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1405', 'name' => 'Las Mitras', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1420', 'name' => 'Los Girasoles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1485', 'name' => 'San Javier', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1494', 'name' => 'Santa Lucía', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2525', 'name' => 'Ignacio Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87315', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0282', 'name' => 'Francisco Zarco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0283', 'name' => 'La Paz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0284', 'name' => 'Villa Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1404', 'name' => 'Las Lomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1424', 'name' => 'Los Vergeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1449', 'name' => 'Oasis', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1516', 'name' => 'Villa del Parque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2512', 'name' => 'Nuevo Amanecer', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3321', 'name' => 'Residencial Portal de las Garzas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3348', 'name' => 'Santa Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87316', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0289', 'name' => 'Parque Industrial FINSA del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '3811', 'name' => 'El Chorizo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3813', 'name' => 'Zona Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87317', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0290', 'name' => 'Las Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87318', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2534', 'name' => 'Las Riveras', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87319', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3657', 'name' => 'Quinta Moros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87320', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0291', 'name' => 'Control 3 Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0292', 'name' => 'Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0293', 'name' => 'Estero San Pablo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0295', 'name' => '1° de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87324', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1505', 'name' => '3 Ríos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2540', 'name' => 'Ampliación Ejido las Rusias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87326', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0297', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87330', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0298', 'name' => 'Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0299', 'name' => 'Moderna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87340', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0301', 'name' => 'Control 3 Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0303', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0304', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0305', 'name' => 'San Rafael', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0306', 'name' => 'Santa Elena', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0313', 'name' => 'Emilio Portes Gil', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1390', 'name' => 'Jesús Urquiza', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '2541', 'name' => 'Villa Universidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2543', 'name' => 'INFONAVIT los Ébanos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87343', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2545', 'name' => 'Ejido Cabras Pintas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2546', 'name' => 'Jesús Vega Sánchez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2547', 'name' => 'Integración Familiar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3122', 'name' => 'Martha Rita Prince Aguilera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3124', 'name' => 'Hacienda las Misiones', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3125', 'name' => 'La Laguneta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3126', 'name' => 'Del Golfo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3193', 'name' => 'Privada San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3328', 'name' => 'Gremio Unido de Choferes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3329', 'name' => 'Hacienda las Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3783', 'name' => 'La Huerta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87344', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0308', 'name' => 'Acuario 2001', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0309', 'name' => 'Puerto Rico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1473', 'name' => 'Rincón Colonial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1519', 'name' => 'Villa Española', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1520', 'name' => 'Villa de las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1523', 'name' => 'Santa Anita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2548', 'name' => 'Paseo del Magisterio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2552', 'name' => 'La Plaza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2556', 'name' => 'Hacienda del Puente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3192', 'name' => 'Jardines de San Roberto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3297', 'name' => 'Esfuerzo Compartido', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87345', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0310', 'name' => 'Casa Blanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0311', 'name' => 'Guadalupe Mainero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1361', 'name' => 'España', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2557', 'name' => 'Ejido la Unión', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2558', 'name' => 'Los Encinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2560', 'name' => 'Valle de Casa Blanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2562', 'name' => 'Valle Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3194', 'name' => 'Quinta Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3195', 'name' => 'San Ángel Poniente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3196', 'name' => 'Valle de los Reyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3326', 'name' => 'Centro Comercial Plaza Sendero', 'zone_type' => 'Urbano', 'settlementtype_id' => '26','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87346', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0312', 'name' => 'Águilas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2563', 'name' => 'Águilas 2001', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87347', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0018', 'name' => 'Las Misiones II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2564', 'name' => 'Nuevo Milenio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3295', 'name' => 'Jardines de San Felipe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3327', 'name' => 'Los Palmares', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3722', 'name' => 'Los Pueblitos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3895', 'name' => 'Unidos Avanzamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87348', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0314', 'name' => 'José López Portillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87349', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0317', 'name' => 'Francisco Villa Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87350', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0323', 'name' => 'San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0318', 'name' => 'Buenavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0319', 'name' => 'Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0320', 'name' => 'Lucero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0321', 'name' => 'Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87360', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0327', 'name' => 'Delicias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0328', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0329', 'name' => 'Modelo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0330', 'name' => 'Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0331', 'name' => 'Unidad Hogar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3301', 'name' => 'Electricistas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3422', 'name' => 'Privanzas del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3423', 'name' => 'Las Puertas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87370', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0334', 'name' => 'Aurora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0335', 'name' => 'Bancaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0336', 'name' => 'Euzkadi', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0337', 'name' => 'Roberto F García', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0338', 'name' => 'Santa Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0339', 'name' => 'Vista Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87380', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0340', 'name' => 'Chapultepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0341', 'name' => 'Los Sauces', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0342', 'name' => 'Mariano Matamoros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0343', 'name' => 'Moderno', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0344', 'name' => 'Santa Ana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0345', 'name' => 'Valle Alto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1458', 'name' => 'Paseo Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1474', 'name' => 'Rincón Colonial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2568', 'name' => 'INFONAVIT Paseo Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87382', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0348', 'name' => 'Valle Dorado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2570', 'name' => 'Valle del Magisterio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2571', 'name' => 'Residencial la Hacienda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87383', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0349', 'name' => 'Bagdad Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0350', 'name' => 'Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1514', 'name' => 'Villa Azteca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87385', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0351', 'name' => 'Chulavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0352', 'name' => 'Los Álamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1459', 'name' => 'Pedro Moreno', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87389', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0356', 'name' => 'La Encantada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2574', 'name' => 'Valle Encantado', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87390', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0357', 'name' => 'INFONAVIT Buenavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0359', 'name' => 'Las Granjas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0360', 'name' => 'Las Norias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0361', 'name' => 'Sección 16', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0363', 'name' => 'Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1398', 'name' => 'La Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1522', 'name' => 'Villa Madrid', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2575', 'name' => 'Victoria Sección Fiesta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2579', 'name' => 'Voluntad y Trabajo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3302', 'name' => 'Centro Comercial Plaza Fiesta', 'zone_type' => 'Urbano', 'settlementtype_id' => '26','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87393', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3305', 'name' => 'La Venadita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3308', 'name' => 'Luz del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3310', 'name' => 'San Charbel', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87394', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0367', 'name' => 'Eva Samano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0368', 'name' => 'Francisco Castellanos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1316', 'name' => 'Ejido Buena Vista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1342', 'name' => 'Del Niño', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1364', 'name' => 'Esperanza y Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1393', 'name' => 'Juan C Bonilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1472', 'name' => 'Ricardo Ramos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1495', 'name' => 'Santa Martha', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1509', 'name' => 'Valle de Anáhuac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2583', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2586', 'name' => 'El Roble', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2587', 'name' => 'Los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2589', 'name' => 'Periodistas Segunda Sección', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2590', 'name' => 'El Alto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2591', 'name' => 'La Estrella', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2592', 'name' => 'Las Bermudas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2593', 'name' => 'La Luz', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2594', 'name' => 'José Casanova', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2595', 'name' => 'Ocampo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2596', 'name' => 'Ebenezer', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2597', 'name' => 'Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2598', 'name' => 'El Cambio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2599', 'name' => 'Servando Canales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3198', 'name' => 'Privada las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3309', 'name' => 'Ampliación Reforma Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3311', 'name' => 'Sindicato de Trabajadores alServicio del Municipio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3312', 'name' => 'Los Olivos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3782', 'name' => 'El Nacimiento', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87395', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0372', 'name' => 'Francisco Covarrubias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0373', 'name' => 'La India', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0374', 'name' => 'Rodríguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1370', 'name' => 'Francisco I Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1401', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1411', 'name' => 'Leyes de Colonos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1427', 'name' => 'Luz del Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1515', 'name' => 'Villa Coapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2601', 'name' => 'Cabras Pintas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2603', 'name' => 'Cuatro Caminos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2607', 'name' => 'Los Ébanos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2609', 'name' => 'Ernesto Elizondo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2610', 'name' => 'Buenos Aires', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2611', 'name' => 'Francisco Villa Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2612', 'name' => 'Ampliación Expofiesta Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2613', 'name' => 'Los Rosales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2615', 'name' => 'Aeropuerto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2616', 'name' => 'Jardines del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2617', 'name' => 'Adolfo López Mateos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3187', 'name' => 'Lomas del Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3313', 'name' => 'San Cristóbal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3314', 'name' => 'Rancho Alegre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3907', 'name' => 'Praderas de la Rioja', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87396', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0375', 'name' => 'Amado Nervo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0376', 'name' => 'Expofiesta Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0377', 'name' => 'Expofiesta Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0378', 'name' => 'Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0379', 'name' => 'Los Laureles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0380', 'name' => 'Villa Esmeralda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1408', 'name' => 'Las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87397', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0381', 'name' => 'Lucio Blanco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87398', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0382', 'name' => 'Azteca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0383', 'name' => 'Expofiesta Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0384', 'name' => 'San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1315', 'name' => 'Bienestar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1356', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1413', 'name' => 'Loma Bonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1521', 'name' => 'Villa las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3121', 'name' => 'Estancias Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87399', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0362', 'name' => 'Ejido 20 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0385', 'name' => 'Central Mercado de Abastos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0386', 'name' => 'Magisterial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0387', 'name' => 'Melchor Ocampo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3330', 'name' => 'CBTIS', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87400', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0389', 'name' => 'Del Carmen', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0390', 'name' => 'FOVISSSTE Fraccionamiento', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0391', 'name' => 'Valle Escondido', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2626', 'name' => 'Villas del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2627', 'name' => 'Villa las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87410', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0393', 'name' => 'Alianza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0394', 'name' => 'Villa del Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87413', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Privanzas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0055', 'name' => 'Arecas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3128', 'name' => 'Los Presidentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3296', 'name' => 'Molino del Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3812', 'name' => 'La Rosita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87415', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3130', 'name' => 'Residencial del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87420', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0395', 'name' => 'Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0396', 'name' => 'Vivienda Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87430', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0399', 'name' => 'Nuevo Renacimiento', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0400', 'name' => 'Praxedis Balboa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3337', 'name' => 'Casa Colorada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87438', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0401', 'name' => 'Bertha Avellano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87440', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0403', 'name' => 'Campestre del Río I', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0404', 'name' => 'México Agrario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0405', 'name' => 'Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1321', 'name' => 'Campestre del Río II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1344', 'name' => 'Los Doctores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1506', 'name' => 'Alfonso Treviño', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2629', 'name' => 'Los Fresnos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2631', 'name' => 'La Herradura', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2634', 'name' => 'Francisco Izaguirre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3118', 'name' => 'Arboledas del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3120', 'name' => 'Ricardo A Basso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87444', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0406', 'name' => 'Las Brisas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1425', 'name' => 'Ejido Lucio Blanco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2635', 'name' => 'La Barranquita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3304', 'name' => 'Villas del Lago', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3816', 'name' => 'Brisas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87445', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0407', 'name' => 'Revolución Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3190', 'name' => 'Privada Residencial Magnolias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87446', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0408', 'name' => 'San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87447', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0409', 'name' => 'Guillermo Guajardo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87448', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0410', 'name' => 'Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0411', 'name' => 'Los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87449', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0413', 'name' => 'Puertas Verdes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87450', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0414', 'name' => 'Enrique Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0415', 'name' => 'Treviño Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2638', 'name' => '20 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2639', 'name' => 'Las Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87453', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1300', 'name' => 'Ampliación Abelardo de la Torre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1353', 'name' => 'El Saucito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1441', 'name' => 'Nogalar Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1442', 'name' => 'Nogalar Poniente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2644', 'name' => 'Manuel Cavazos Lerma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2645', 'name' => 'Comunicadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2646', 'name' => '21 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3300', 'name' => 'San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3906', 'name' => 'Melitón Suárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87454', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2647', 'name' => 'Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2648', 'name' => 'Sindicato Carpinteros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2649', 'name' => 'Movimiento 18 de Octubre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2650', 'name' => 'Sindicato de Albañiles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3110', 'name' => 'Agrícola Oriental', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3113', 'name' => 'Condesa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3114', 'name' => 'Jardines de Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3115', 'name' => 'José Tejeda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3199', 'name' => 'Praderas del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3200', 'name' => 'Minería', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3201', 'name' => 'Lomas del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3338', 'name' => 'Alborada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3339', 'name' => 'Jardines del Recuerdo', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
		['key' => '3340', 'name' => 'Granjas de la Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3341', 'name' => 'La Alegría', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3342', 'name' => 'Ampliación los Agaves', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3343', 'name' => 'Los Reyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3344', 'name' => 'San Luis', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3345', 'name' => 'Villa del Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3346', 'name' => 'Zafiro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3814', 'name' => 'El Recuerdo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3815', 'name' => 'Colonia Unidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87455', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Jardines de San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'Jardines del Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0417', 'name' => 'Abelardo de la Torre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1397', 'name' => 'La Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2652', 'name' => 'Electricistas Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2654', 'name' => 'San Manuel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2655', 'name' => 'Platería', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2656', 'name' => 'Lomas de San Juan', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2657', 'name' => 'Villa de Cortés', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2658', 'name' => 'Nueva Jerusalem', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87456', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0418', 'name' => 'División del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1326', 'name' => 'Cecilia Ocelli', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1460', 'name' => 'Pirámide', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1482', 'name' => 'San Fernando', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1484', 'name' => 'San Isidro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1490', 'name' => 'Santa Cecilia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1491', 'name' => 'Ampliación Santa Cecilia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1500', 'name' => 'Solidaridad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1513', 'name' => 'Vicente Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2665', 'name' => 'Salinas de Gortari', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87457', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0419', 'name' => 'Periodistas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0420', 'name' => 'Tampico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0421', 'name' => 'Universitaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1439', 'name' => 'Niños Héroes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1466', 'name' => 'Pueblo Viejo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2507', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2670', 'name' => 'Villa Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87458', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0422', 'name' => 'Roberto Guerra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0423', 'name' => 'Satélite', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0444', 'name' => 'INFONAVIT los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2671', 'name' => 'Jardines de Satélite', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2672', 'name' => 'INFONAVIT Satélite', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2673', 'name' => 'Hacienda los Portales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87459', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0424', 'name' => 'José María Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87460', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0425', 'name' => 'Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87469', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0426', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87470', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0427', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0428', 'name' => 'Playa Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0435', 'name' => 'Lauro Villar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1421', 'name' => 'Los Nogales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1477', 'name' => 'Rodolfo Sánchez Taboada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2677', 'name' => 'Valle del Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2678', 'name' => 'Praderas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2679', 'name' => 'Hacienda del Prado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2680', 'name' => 'JAD', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2685', 'name' => 'Libre Comercio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3420', 'name' => 'Hacienda Praderas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3424', 'name' => 'Parque Industrial CYLSA', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87475', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0429', 'name' => 'Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1395', 'name' => 'La Amistad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2688', 'name' => 'Las Palmitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2689', 'name' => 'Futaam', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87476', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0430', 'name' => 'Las Cumbres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87477', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0431', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1325', 'name' => '14 de Febrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1339', 'name' => 'Del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2691', 'name' => 'Valle Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2692', 'name' => 'Nuevo Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2693', 'name' => '27 de Febrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2694', 'name' => '5 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2696', 'name' => 'Tierra y Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2697', 'name' => 'Derechos Humanos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2698', 'name' => 'El Porvenir', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3298', 'name' => 'Correcaminos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3299', 'name' => 'Fuerza y Unidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87490', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0437', 'name' => 'Las Culturas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0439', 'name' => 'Tecnológico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87493', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0012', 'name' => 'Parque Industrial FINSA Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '3331', 'name' => 'Hacienda la Cima III', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3332', 'name' => 'Ampliación Ejido Longoreño', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3335', 'name' => 'San Jerónimo Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3336', 'name' => 'Canadá', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87494', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0440', 'name' => 'Ciudad Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '3303', 'name' => 'Profesor Rafael Ramírez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87495', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0402', 'name' => 'Renacimiento', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0441', 'name' => 'Loma Alta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1377', 'name' => 'Hogares de Matamoros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1480', 'name' => 'San Ángel Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3191', 'name' => 'Cañaveral', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3315', 'name' => 'Castillos Reales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3317', 'name' => 'Las Palomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3319', 'name' => 'Valle del Mezquital', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3320', 'name' => 'Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87496', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0443', 'name' => 'Fundadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1373', 'name' => 'Fuentes del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2703', 'name' => 'Los Cedros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2704', 'name' => 'Licenciado Marcelino Miranda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3116', 'name' => 'Fuentes de Bagdad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3117', 'name' => 'Fuentes Industriales II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3186', 'name' => 'Hacienda la Cima', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3189', 'name' => 'Residencial las Gaviotas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3817', 'name' => 'Fuentes Industriales I', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87497', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Xochimilco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0445', 'name' => 'Las Américas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0446', 'name' => 'México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1451', 'name' => 'Palo Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1526', 'name' => 'Vista del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2709', 'name' => 'Campestre del Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3318', 'name' => 'Valle de la Palangana', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3419', 'name' => 'Palmas del Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87498', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0447', 'name' => 'Campestre del Lago', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87499', 'locality' => 'Heroica Matamoros', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0448', 'name' => 'Ciudad Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87540', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0486', 'name' => 'El Longoreño', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3334', 'name' => 'El Refugio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87544', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0033', 'name' => 'El Tecolote', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0487', 'name' => 'El Tecolote', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87550', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0028', 'name' => 'Prisciliano Delgado', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0037', 'name' => 'Vista Hermosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0489', 'name' => 'Presidente Cárdenas (Villa Cárdenas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87551', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'Rancho Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'La Barranca', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0491', 'name' => 'Soliseño', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0492', 'name' => 'La Barranca', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0493', 'name' => 'La Palangana', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87552', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0490', 'name' => 'Ramírez', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0502', 'name' => 'El Control', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '3829', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87553', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0022', 'name' => 'El Alto', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0026', 'name' => 'José María Morelos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0050', 'name' => 'Revolución (El Alto)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0495', 'name' => 'La Laguna', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0496', 'name' => 'Revolución', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0497', 'name' => 'La Vanguardia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87554', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0024', 'name' => 'Buenos Aires', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0029', 'name' => 'La Puerta', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0031', 'name' => 'El Realito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0040', 'name' => 'La Rosita', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0498', 'name' => 'El Capote', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0499', 'name' => 'La Brigada', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0500', 'name' => 'San Luisito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0501', 'name' => 'Villanueva', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87555', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0503', 'name' => 'La Sierrita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87557', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'Estación Sandoval', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0036', 'name' => 'Villaverde', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0038', 'name' => 'El Sabinito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0046', 'name' => 'El Sabino (Napoleón Benavides)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0505', 'name' => 'El Ebanito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0506', 'name' => 'El Perote', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0507', 'name' => 'El Sabino', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0508', 'name' => 'Sandoval (Familia Pizaña)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0509', 'name' => 'Santa Adelaida', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0510', 'name' => 'Santa Irene', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0511', 'name' => 'El Tahuachal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0512', 'name' => 'Ángeles de Dios [Casa Hogar]', 'zone_type' => 'Rural', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87558', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'La Reforma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0032', 'name' => 'San Andrés', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0034', 'name' => 'Los Timones', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0494', 'name' => 'Progreso Agrario (Santa Librada)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0513', 'name' => 'Los Olmos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0514', 'name' => 'Palo Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87559', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0515', 'name' => 'Río Rico', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87560', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'CEFERESO Número 3', 'zone_type' => 'Rural', 'settlementtype_id' => '9','zipcode_id' => $idZip],
		['key' => '0027', 'name' => 'Mogote de Santiago', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0047', 'name' => 'La Tijerita (Potrero Nuevo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0051', 'name' => 'La Tijerita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0053', 'name' => 'Veintiuno de Marzo (Las Cuatrocientas)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0370', 'name' => 'Matamoros (Servando Canales)', 'zone_type' => 'Urbano', 'settlementtype_id' => '1','zipcode_id' => $idZip],
		['key' => '0516', 'name' => 'El Galaneño', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0517', 'name' => 'Ignacio Zaragoza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0518', 'name' => 'La Jarita Norte', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0519', 'name' => 'La Jarita Sur', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0520', 'name' => 'La Gloria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0521', 'name' => 'La Luz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0522', 'name' => 'Ampliación la Tijerita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0523', 'name' => 'La Venada', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0526', 'name' => 'Los Ranchitos (Porfirio Méndez)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87563', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0015', 'name' => 'Laguna Honda', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0527', 'name' => 'Pacheco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87564', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0049', 'name' => 'El Álamo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0052', 'name' => 'La Tijerita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87565', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0528', 'name' => 'Las Blancas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87569', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Parque Industrial las Ventanas', 'zone_type' => 'Rural', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'La Ventana', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0530', 'name' => 'Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87570', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0030', 'name' => 'El Ranchito y Refugio (El Refugio)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0531', 'name' => 'El Ranchito', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87577', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0025', 'name' => 'El Huizachal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0048', 'name' => 'Primer Campo Pesquero', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0054', 'name' => 'Segundo Campo Pesquero y el Chichonal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0532', 'name' => 'La Bartolina', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87580', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'Francisco I. Madero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'Cinco de Mayo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0533', 'name' => 'El Moquetito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0534', 'name' => 'Quijano', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87585', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0035', 'name' => 'Venustiano Carranza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0535', 'name' => 'La Libertad Número Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87587', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'La Capilla', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Las Higuerillas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'Puerto de Matamoros', 'zone_type' => 'Rural', 'settlementtype_id' => '20','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'El Mezquital', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0041', 'name' => 'Isla la Mano de León', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0042', 'name' => 'Isla las Malvinas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0043', 'name' => 'Isla la Fantasía', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0044', 'name' => 'Isla Puntilla Norte', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0045', 'name' => 'Isla del Amor (Puntilla Sur)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87588', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0039', 'name' => '23 de Noviembre', 'zone_type' => 'Rural', 'settlementtype_id' => '24','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87589', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0536', 'name' => 'San Lorenzo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '040', 'name' => 'Valle Hermoso', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87500', 'locality' => 'Valle Hermoso', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2886', 'name' => 'Valle Hermoso Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87503', 'locality' => 'Valle Hermoso', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0453', 'name' => 'López Mateos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0455', 'name' => 'Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0456', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0457', 'name' => 'Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1351', 'name' => 'El Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1400', 'name' => 'Las Brisas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1432', 'name' => 'México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1436', 'name' => 'Moderna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1443', 'name' => 'Norteñita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1486', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1496', 'name' => 'SARH', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2889', 'name' => 'Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3753', 'name' => 'José García Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3755', 'name' => 'Las Mitras', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3756', 'name' => 'INFONAVIT Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87504', 'locality' => 'Valle Hermoso', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0450', 'name' => 'Magueyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0454', 'name' => 'Burócrata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0466', 'name' => 'Aurora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0467', 'name' => 'Bernal Mares', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0468', 'name' => 'Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0469', 'name' => 'Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0470', 'name' => 'Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0471', 'name' => 'Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0472', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0473', 'name' => 'Olímpica', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1301', 'name' => 'Agricultores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1369', 'name' => 'FOVISSSTE Eduardo Chávez', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '1374', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1388', 'name' => 'Jarita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1419', 'name' => 'Los Fresnos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1422', 'name' => 'Los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1483', 'name' => 'San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1502', 'name' => 'Soberón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2493', 'name' => 'Sección 22', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2494', 'name' => 'INFONAVIT Diego Navarro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2890', 'name' => 'Magisterio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2891', 'name' => 'Juan José Támez Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3738', 'name' => 'Lucio Monroy', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3739', 'name' => 'INFONAVIT Magueyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3742', 'name' => 'Poblado Magueyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3743', 'name' => 'Dalias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3744', 'name' => 'Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3752', 'name' => 'Arboledas del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3827', 'name' => 'San Luis', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87505', 'locality' => 'Valle Hermoso', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Hacienda del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0451', 'name' => 'Valle Hermoso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1306', 'name' => 'Ambrosio Ruíz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1329', 'name' => 'Club de Leones', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1341', 'name' => 'Del Maestro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1352', 'name' => 'El Roble', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1363', 'name' => 'Esperanza del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1399', 'name' => 'Las Américas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1435', 'name' => 'Moctezuma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1465', 'name' => 'Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2492', 'name' => 'Bellavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2893', 'name' => 'Lindavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2894', 'name' => 'Las Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3746', 'name' => 'INFONAVIT las Yescas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3747', 'name' => 'Popular Brisas del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3748', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3749', 'name' => 'Santa Rosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3750', 'name' => 'Palo Alto', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3751', 'name' => 'Buenavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3754', 'name' => 'Los Fresnos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87506', 'locality' => 'Valle Hermoso', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0463', 'name' => 'Flores Magón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1391', 'name' => 'José Silva Sánchez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1481', 'name' => 'San Ángel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1487', 'name' => 'San Lorenzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3759', 'name' => 'La Luz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87507', 'locality' => 'Valle Hermoso', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0458', 'name' => 'Alianza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0459', 'name' => 'Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0460', 'name' => 'Eduardo Chávez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0461', 'name' => 'Modelo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0462', 'name' => 'Escobedo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0464', 'name' => 'Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0465', 'name' => 'Vicente Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1305', 'name' => 'Allende', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1311', 'name' => 'Arco Iris', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1379', 'name' => 'Independencia Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1389', 'name' => 'Jesús Castillo Marroquín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1440', 'name' => 'Niños Héroes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1464', 'name' => 'Primavera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1507', 'name' => 'Unión', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1524', 'name' => 'Villa Satélite', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1527', 'name' => 'Vista Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2895', 'name' => 'Independencia Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2896', 'name' => 'Díaz Ordaz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3757', 'name' => 'Los Conejos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3758', 'name' => 'Villas de América', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87510', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0474', 'name' => 'Anáhuac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3828', 'name' => 'Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87511', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Agrícola Anáhuac (Carr Est 53 entre Sur60ySur70)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0475', 'name' => 'Empalme', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87512', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'José Delgado', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0476', 'name' => 'Ignacio Manuel Altamirano', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87513', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Liberación del Campesino', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0477', 'name' => 'Ensenada', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87514', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0478', 'name' => 'La Florida', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87520', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0479', 'name' => 'Aquiles Serdán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0480', 'name' => 'El Realito', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87524', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0482', 'name' => 'Nueva Victoria (Brecha 123 entre Sur 91 y Sur 94)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87525', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0483', 'name' => 'Doce de Octubre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87530', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Álvaro Obregón [Carr Est 53 de Sur93 a Sur96 Pte]', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0484', 'name' => '18 de Marzo (Brecha 120 entre Sur 96 y Sur 100)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87535', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0485', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '035', 'name' => 'San Fernando', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87600', 'locality' => 'San Fernando', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0537', 'name' => 'San Fernando Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87602', 'locality' => 'San Fernando', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0543', 'name' => 'La Valentina', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0544', 'name' => 'Magisterial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0545', 'name' => 'Villa del Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2080', 'name' => 'Las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2966', 'name' => 'Caminera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3140', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0539', 'name' => 'Bellavista Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0541', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0542', 'name' => 'Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87604', 'locality' => 'San Fernando', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0546', 'name' => 'Américo Villarreal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0547', 'name' => 'Bellavista Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0548', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0549', 'name' => 'Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2967', 'name' => 'Nuevo Amanecer', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3138', 'name' => 'Manuel Cavazos Lerma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3139', 'name' => 'Francisco Galván Loperena', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87605', 'locality' => 'San Fernando', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0550', 'name' => '5 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0551', 'name' => 'La Rivereña', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0552', 'name' => 'Loma Alta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3133', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3134', 'name' => 'INFONAVIT', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87606', 'locality' => 'San Fernando', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0555', 'name' => 'Paso Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3135', 'name' => 'Lomas de San Fernando', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3136', 'name' => 'Los Cisnes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87607', 'locality' => 'San Fernando', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0556', 'name' => 'Ladrillera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0557', 'name' => 'Las Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0558', 'name' => 'Las Malvinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0559', 'name' => 'México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3137', 'name' => 'Gabriel de la Garza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87610', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0560', 'name' => 'Guadalupe Victoria (El Norteño)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0561', 'name' => 'La Loma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0562', 'name' => 'Palos Blancos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0563', 'name' => 'San Germán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0564', 'name' => 'Santa Teresa', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87612', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'Paso Hondo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0565', 'name' => 'Las Escobas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87613', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0566', 'name' => 'Juan Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0567', 'name' => 'Miguel Hidalgo II (Las Rosas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87614', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'La Lomita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'Emiliano Zapata (Ampliación San Germán)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'La Carreta Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'Veinte de Noviembre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87616', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0568', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87617', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0569', 'name' => 'La Carreta Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87618', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'San Lorenzo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0570', 'name' => 'General Francisco González Villarreal (San Juan)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0571', 'name' => 'Plan del Alazán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87619', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Ampliación los Vergeles', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0572', 'name' => 'Alfredo V. Bonfil (Luis Echeverría)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0573', 'name' => 'Los Vergeles', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87620', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0574', 'name' => 'Águila Azteca', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0575', 'name' => 'General Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0576', 'name' => 'San José', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87622', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0577', 'name' => 'Cuatro Milpas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87624', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'Nuevo Tlaxcala Xicoténcatl', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0578', 'name' => 'Horacio Terán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0580', 'name' => 'Laguna de San Juan', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0581', 'name' => 'División del Norte (Laguna Seca)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87625', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0582', 'name' => 'Adolfo Ruiz Cortines', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87626', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0583', 'name' => 'Miguel Hidalgo Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87627', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'General Francisco J. Mújica (La Poza)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0584', 'name' => 'Seis de Enero (Miguel Hidalgo Segundo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87628', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0585', 'name' => 'La Joya', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87629', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0586', 'name' => 'Pastores (Escuadrón 201)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0587', 'name' => 'Palo Solo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2185', 'name' => 'El Barrancón del Tío Blas (El Barrancón)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87630', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0588', 'name' => 'Carboneras (La Carbonera)', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87636', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Punta de Piedra', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0589', 'name' => 'Carvajal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3603', 'name' => 'Punta de Alambre (Puente de Alambre)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '010', 'name' => 'Cruillas', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87640', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0590', 'name' => 'Cruillas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87650', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0591', 'name' => 'Tres Palos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87655', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0592', 'name' => 'El Barranco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '036', 'name' => 'San Nicolás', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87660', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0593', 'name' => 'San Nicolás', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87662', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Lauro Villar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87664', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Flechadores', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87666', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0594', 'name' => 'El Palmar', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87668', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Las Vírgenes (Las Norias)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0595', 'name' => 'Las Vírgenes (Moctezuma)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '037', 'name' => 'Soto la Marina', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87670', 'locality' => 'Soto la Marina', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0596', 'name' => 'Soto la Marina Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2018', 'name' => 'Del Río Solidaridad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2179', 'name' => '3 de Septiembre', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2454', 'name' => '20 de Noviembre', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2455', 'name' => 'Melchor Ocampo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2456', 'name' => 'Militar', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2457', 'name' => 'Magisterial', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2458', 'name' => 'Nueva Rosita', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2459', 'name' => 'Nueva Rosita', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2460', 'name' => 'Juventud Revolucionaria', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2461', 'name' => 'Barrio Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3068', 'name' => 'Vista Hermosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87673', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0598', 'name' => 'San José de las Rusias', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87675', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Las Tunas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87676', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0599', 'name' => 'La Peñita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87677', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0600', 'name' => 'Tres de Abril (Noche Buena)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87678', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0601', 'name' => 'La Pesca', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3067', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3069', 'name' => 'Miguel de la Madrid (El Canal)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87679', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0602', 'name' => 'Tampiquito (Soto la Marina)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87680', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Los Ébanos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0603', 'name' => 'Verde Chico', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87685', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3832', 'name' => 'Magueyes', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87690', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Las Pilas', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0604', 'name' => 'La Peña', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87693', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3864', 'name' => 'El Sabinito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87694', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0605', 'name' => 'La Zamorina', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87695', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0606', 'name' => 'La Encarnación', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0607', 'name' => 'Nombre de Dios', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3615', 'name' => 'San Felipe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87696', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Santa Isabel', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0608', 'name' => 'El Esmeril', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87697', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0609', 'name' => 'Lavaderos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3890', 'name' => 'Alberto Carrera Torres', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '018', 'name' => 'Jiménez', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87700', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Integración Familiar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0610', 'name' => 'Santander Jiménez Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87709', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0612', 'name' => 'El Encinal', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0613', 'name' => 'El Peñón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87710', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0614', 'name' => 'La Esperanza (La Polvareda)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87713', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Tres de Abril (El Tulillo)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87720', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Los Laureles', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0615', 'name' => 'Allende', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '034', 'name' => 'San Carlos', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87730', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0616', 'name' => 'San Carlos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87733', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3888', 'name' => 'Benito Juárez (La Coma)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87735', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0617', 'name' => 'El Gavilán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87737', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3918', 'name' => 'Boca de Álamos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87738', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0618', 'name' => 'Marmolejo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87739', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0619', 'name' => 'La Unión Morales', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87740', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0620', 'name' => 'La Gavia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3775', 'name' => 'San Andrés', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87743', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Corralejo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'Magueyes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0621', 'name' => 'Víctor Manuel Bueno', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87744', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0622', 'name' => 'Nuevo Praxedis Balboa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87746', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0623', 'name' => 'Nuevo San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87747', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0624', 'name' => 'El Barranco Azul', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0625', 'name' => 'La Nueva Unión', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3619', 'name' => 'Los Angelitos (Ángeles)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87748', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0626', 'name' => 'El Saucillo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87750', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0627', 'name' => 'Los Quiotes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87755', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0628', 'name' => 'Puerto Rico', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2990', 'name' => 'Profesor Graciano Sánchez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '001', 'name' => 'Abasolo', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87760', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Tomás Yarrington', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0629', 'name' => 'Abasolo Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0630', 'name' => 'Modelo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1999', 'name' => 'Américo Villarreal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2065', 'name' => 'La Amistad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2168', 'name' => 'Tacubaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2510', 'name' => 'Integración Familiar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2511', 'name' => 'Manuel Cavazos Lerma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87766', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0632', 'name' => 'Nuevo Dolores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87767', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Nuevo Morelos (Adolfo López Mateos)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0633', 'name' => 'Adolfo López Mateos (Las Cabras)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87768', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0634', 'name' => 'Nicolás Bravo (Palo Alto)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3902', 'name' => 'Parras de la Fuente', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87769', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0635', 'name' => 'Guía del Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87770', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0636', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '030', 'name' => 'Padilla', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87780', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0638', 'name' => 'Nueva Villa de Padilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3830', 'name' => 'Presa Vicente Guerrero (La Compuerta)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87785', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0640', 'name' => 'Cinco de Mayo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87790', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Campoamor', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'Plan de Ayala', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0641', 'name' => 'Corpus Christi', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0642', 'name' => 'Santa Juana', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87793', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3790', 'name' => 'Nuevo San Juan', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87794', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0643', 'name' => 'Conrado Castillo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87795', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0644', 'name' => 'Vicente Guerrero (El Tablero)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87797', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'La Concepción', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0645', 'name' => 'Marte R. Gómez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0646', 'name' => 'Quince de Febrero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87798', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'José Silva Sánchez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0647', 'name' => 'La Soledad', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0648', 'name' => 'Mártires de Chinameca (Mártir de Chinameca)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2991', 'name' => 'San Patricio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2992', 'name' => 'Los Brasiles', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87799', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0649', 'name' => 'Barretal', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0650', 'name' => 'Úrsulo Galván', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '016', 'name' => 'Hidalgo', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87800', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0651', 'name' => 'Benito Juárez (Monfort)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0652', 'name' => 'Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87801', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0653', 'name' => 'Los Ángeles', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0654', 'name' => 'Purificación (Peñuelas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87803', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0656', 'name' => 'El Cerrito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87804', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3914', 'name' => 'El Pensamiento Libre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87805', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0657', 'name' => 'El Tomaseño (Ejido)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0658', 'name' => 'La Rosalba (Ejido)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87806', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0659', 'name' => 'Barbosa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0660', 'name' => 'Cinco de Mayo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0661', 'name' => 'San Juana', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87808', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0662', 'name' => 'General Julián Cerda', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0663', 'name' => 'Primero de Mayo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0664', 'name' => 'Santa Cleotilde', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87810', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0665', 'name' => 'Carrizos (La Hacienda)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87813', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Estación Carrizos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3897', 'name' => 'Puerto del Aire (Isaías González Vázquez)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87816', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0666', 'name' => 'Las Tinajas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87819', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0667', 'name' => 'San Nicolás', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87820', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0668', 'name' => 'El Chorro (El Chorrito)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87822', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0670', 'name' => 'Ex-Hacienda de la Mesa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0671', 'name' => 'San Isidro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87823', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0672', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0673', 'name' => 'Independencia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87824', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0674', 'name' => 'La Noria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87825', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0675', 'name' => 'La Crucita (La Piragua)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0676', 'name' => 'La Trinidad', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87826', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0677', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0678', 'name' => 'San Matías', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87827', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0679', 'name' => 'Buenos Aires', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0680', 'name' => 'Marroquín', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2993', 'name' => 'Las Margaritas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87829', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0681', 'name' => 'Morquecho', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87830', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0682', 'name' => 'Santa Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87831', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0683', 'name' => 'El Progreso', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0684', 'name' => 'Oyama', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87832', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0685', 'name' => 'Palo Alto', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2994', 'name' => 'La Colombina', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2996', 'name' => 'José María Morelos y Pavón (Mapaches)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87834', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0686', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87835', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0687', 'name' => 'La Garita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0688', 'name' => 'Santa Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87840', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0689', 'name' => 'Estación la Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0690', 'name' => 'Cruz y Carmen', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0691', 'name' => 'Cruz y Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87841', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0692', 'name' => 'Guillermo Zúñiga', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87843', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0693', 'name' => 'El Sauz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87844', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3056', 'name' => 'Ignacio Allende (Estación Adelaida)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87847', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0694', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0695', 'name' => 'Vicente Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87848', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0696', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87849', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0698', 'name' => 'Estación Santa Engracia Centro', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87853', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2995', 'name' => 'Guayabas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87854', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0700', 'name' => 'Conrado Castillo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87858', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0701', 'name' => 'La Aurora', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '020', 'name' => 'Mainero', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87860', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0702', 'name' => 'Villa Mainero', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '3899', 'name' => 'Américo Villarreal Guerra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87865', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0703', 'name' => 'Venustiano Carranza (La Oveja)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3892', 'name' => 'José Delgado', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3896', 'name' => 'Emilio Vázquez Gómez (Agua Fría)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87870', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'José Guadalupe Mainero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0704', 'name' => 'Magueyes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87873', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0705', 'name' => 'Las Puentes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3076', 'name' => 'San Luis Hidalgo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87875', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0706', 'name' => 'Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '042', 'name' => 'Villagrán', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87880', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Américo Villarreal Guerra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'Eugenio Hernández Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0707', 'name' => 'Villagrán', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '3616', 'name' => 'Cuauhtémoc', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87883', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'El Breve', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3077', 'name' => 'Jesús González Ortega', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87884', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0708', 'name' => 'La Purísima Floreña', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87885', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Candelario Reyes (San Miguel)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0709', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87886', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0710', 'name' => 'General Jesús Carranza (Sabinitos)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2987', 'name' => 'Brígido Maldonado', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87887', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Redención del Campesino', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0711', 'name' => 'Álvaro Obregón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3848', 'name' => 'El Limón', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87889', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Ranchería Juárez (Juárez)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0712', 'name' => 'Benito Juárez (Encinos)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2986', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87890', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0713', 'name' => 'Garza Valdez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87892', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0714', 'name' => 'Los Charcos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3060', 'name' => 'Marte R. Gómez (Patol)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87893', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3862', 'name' => 'Juan Rincón (El Sabinal)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87895', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0715', 'name' => 'San Lázaro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87896', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0716', 'name' => 'Guadalupe de San Lázaro (Guadalupe)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87898', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0717', 'name' => 'General Lucio Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '039', 'name' => 'Tula', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87900', 'locality' => 'Ciudad Tula', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Pirules', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '0721', 'name' => 'Ciudad Tula Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2009', 'name' => 'Cantaranas', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2071', 'name' => 'La Mora', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2463', 'name' => 'El Divisadero', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2464', 'name' => 'El Jicote', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2465', 'name' => 'Las Trojes', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2466', 'name' => 'Altavista', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2467', 'name' => 'La Pila', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2468', 'name' => 'Independencia', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2469', 'name' => 'Las Piedras', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2470', 'name' => 'Cerro del Aire', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2471', 'name' => 'El Cardenal', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2472', 'name' => 'La Peñita', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '3771', 'name' => 'La Campana', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '3772', 'name' => 'El Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '2','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87902', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0719', 'name' => 'Mamaleón (Mamá León)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0720', 'name' => 'Santa Ana de Nahola', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0724', 'name' => 'El Boludo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87903', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0725', 'name' => 'Emilio Vázquez Gómez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87904', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Celso Huerta', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0718', 'name' => 'Congregación los Charcos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0726', 'name' => 'Tanque Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2186', 'name' => 'San Juan', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '3063', 'name' => 'Alfonso Terrones Benítez (Presa Ramireña)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3064', 'name' => 'Veinte de Noviembre (El Refugio)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87905', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0723', 'name' => 'Lázaro Cárdenas (Cerro Gordo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87906', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3066', 'name' => 'Cinco de Mayo (Cebollitas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87907', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Cieneguilla', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0728', 'name' => 'Francisco I. Madero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87910', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0729', 'name' => 'La Tapona', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87911', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0730', 'name' => 'Salitrillo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0731', 'name' => 'San Rafael', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87912', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0732', 'name' => 'Ricardo García (La Presita)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87913', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0733', 'name' => 'Álvaro Obregón (La Noria)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0734', 'name' => 'Francisco Villa (El Xichu)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3065', 'name' => 'Cerro Mocho', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87914', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'El Refugio (La Unión)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0735', 'name' => 'Pedro Ruiz Molina', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87915', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0736', 'name' => 'Nicolás Medrano (El Abra)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3806', 'name' => 'La Presa de Ramos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87918', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0737', 'name' => 'José María Morelos (Morelos)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87920', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0738', 'name' => 'San José de las Flores', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87922', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0739', 'name' => 'Juan Sarabia (La Higuera)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87923', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Adolfo López Mateos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0740', 'name' => 'Emiliano Zapata (La Viga)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0741', 'name' => 'Magdaleno Cedillo (El Coronel)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3885', 'name' => 'Emperadores Aztecas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87924', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0742', 'name' => 'Miguel Hidalgo (Colorado)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87925', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0743', 'name' => 'Gallos Grandes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0744', 'name' => 'Colonia Agrícola y Ganadera (Las Cruces)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3062', 'name' => 'Lucio Vázquez (El Charquito)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87926', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0745', 'name' => 'Alberto Carrera Torres (La Rana)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3887', 'name' => 'Gazmones', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87928', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0746', 'name' => 'La Laguna', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '017', 'name' => 'Jaumave', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87930', 'locality' => 'Jaumave', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0750', 'name' => 'Jaumave Centro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2362', 'name' => 'Independencia', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2363', 'name' => 'Praxedis Balboa', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3611', 'name' => 'Janambres', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3863', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3904', 'name' => 'Nuevo Amanecer', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87932', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0748', 'name' => 'El Ingenio (Los Adobes)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0749', 'name' => 'El Sotol', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0751', 'name' => 'Matías García (La Hacienda)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0752', 'name' => 'San Juanito', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0753', 'name' => 'Magdaleno Aguilar (Santiaguillo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3861', 'name' => 'Gustavo Cáceres', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87933', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0755', 'name' => 'Conrado Castillo (La Maroma)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0756', 'name' => 'José María Morelos (El Nopal)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0757', 'name' => 'La Independencia (Las Moritas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0758', 'name' => 'San Juan de Oriente', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87935', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0759', 'name' => 'Ávila y Urbina (La Meca)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87936', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0760', 'name' => 'El Sauz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0761', 'name' => 'Francisco Medrano (Las Pilas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0762', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87937', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0763', 'name' => 'La Unión', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0764', 'name' => 'Plan de Ayala (Las Calabazas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87938', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0765', 'name' => 'El Higuerón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0766', 'name' => 'La Reforma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87939', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0767', 'name' => 'El Carrizo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87940', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0768', 'name' => 'Padrón y Juárez (La Puente)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87943', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0769', 'name' => 'Veinte de Abril (Joya de Salas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87945', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0770', 'name' => 'San Lorencito (San Lorenzo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87946', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0771', 'name' => 'Monterredondo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87947', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0772', 'name' => 'Cinco de Mayo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0773', 'name' => 'San Vicente', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87949', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Las Moras', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0774', 'name' => 'Rancho Nuevo (Cañitas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0775', 'name' => 'San Francisco de Zorrilla', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0776', 'name' => 'San José de Salamanca', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '026', 'name' => 'Miquihuana', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87950', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0777', 'name' => 'La Peña', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0778', 'name' => 'Miquihuana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87954', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0779', 'name' => 'San José del Llano', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87957', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0780', 'name' => 'El Aserradero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87958', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Altamira', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '006', 'name' => 'Bustamante', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87960', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0781', 'name' => 'Bustamante', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87961', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0782', 'name' => 'El Aguacate', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0783', 'name' => 'Felipe Ángeles (El Gavilán)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87962', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0784', 'name' => 'El Caracol (Los Caracoles)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0785', 'name' => 'Las Antonias', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0786', 'name' => 'Plutarco Elías Calles (Joya del Maguey)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87963', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0787', 'name' => 'El Llano y Anexas (El Llano)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87964', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'La Higuera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0788', 'name' => 'San Antonio de Padua', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87965', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0789', 'name' => 'Las Albercas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0790', 'name' => 'Las Flores', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87967', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'La Joya de Herrera', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3631', 'name' => 'Gabino Vázquez (Santa Efigenia)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87968', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0791', 'name' => 'La Verdolaga', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0792', 'name' => 'Magdaleno Aguilar (San Vicente)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87969', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0793', 'name' => 'Calabacillas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '031', 'name' => 'Palmillas', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87970', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0794', 'name' => 'Palmillas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87972', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0795', 'name' => 'San Vicente', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87973', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0796', 'name' => 'El Llano de Azuas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87974', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3900', 'name' => 'La Compuerta', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87975', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3807', 'name' => 'Los Arrieros', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '029', 'name' => 'Ocampo', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87980', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0797', 'name' => 'Ocampo', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0798', 'name' => 'Ricardo Flores Magón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3610', 'name' => '6 de Octubre', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87982', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0799', 'name' => 'El Pensil', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87983', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Eligio Treviño (El Bejuco)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0800', 'name' => 'Práxedis G. Guerrero (La Laja)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3613', 'name' => 'Protasio F. Guerra (Corrales)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87984', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0801', 'name' => 'Francisco Medrano (La Morita)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0802', 'name' => 'Las Flores', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0803', 'name' => 'Pueblo Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87985', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0804', 'name' => 'Las Canoas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0805', 'name' => 'El Tigre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87986', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0806', 'name' => 'Santa María de Guadalupe (La Colonia)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0807', 'name' => 'Veinte de Noviembre (Las Pozas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3883', 'name' => 'San Antonio Buena Vista', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87988', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'La Escondida y el Atravesaño (La Escondida)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0808', 'name' => 'San Lorenzo (Las Bayas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87990', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0809', 'name' => 'El Chamalito', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0810', 'name' => 'Adolfo López Mateos (Chamal Nuevo)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87993', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0811', 'name' => 'Paso Real de Morelos (La Puente)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87994', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0812', 'name' => 'La Muralla', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87995', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0813', 'name' => 'Chamal Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87996', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0814', 'name' => 'Rancho Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3884', 'name' => 'Lorenzo Vargas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '87997', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0815', 'name' => 'Coahuila', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '027', 'name' => 'Nuevo Laredo', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88000', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0816', 'name' => 'Nuevo Laredo Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88009', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0819', 'name' => 'Nuevo Laredo (Quetzalcóatl)', 'zone_type' => 'Rural', 'settlementtype_id' => '1','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88020', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0820', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88030', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0821', 'name' => 'Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88040', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0822', 'name' => 'Ferrocarril', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0823', 'name' => 'Ojo Caliente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88060', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0826', 'name' => 'Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88070', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0827', 'name' => 'Viveros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88100', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0828', 'name' => 'Altavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0829', 'name' => 'CNOP', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88105', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'FOVISSSTE Las Alazanas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0831', 'name' => 'Solidaridad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88110', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0833', 'name' => 'Del Maestro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88120', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0834', 'name' => 'Buenavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0835', 'name' => 'Maclovio Herrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88123', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0012', 'name' => 'Las Cumbres', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2749', 'name' => 'El Progreso (Nuevo Progreso)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2750', 'name' => 'Guerreros del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2751', 'name' => 'Los Arcos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2752', 'name' => 'Pavorreales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2753', 'name' => 'Endulzadora PEMEX', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3448', 'name' => 'Villas de San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3449', 'name' => 'Villas del Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88124', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'Licenciado Daniel Hernández Isais', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0836', 'name' => 'Alianza para la Producción', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88125', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0839', 'name' => 'La Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0840', 'name' => 'Sistema Merlín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88126', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0025', 'name' => 'Vicente Mendoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2755', 'name' => 'Santiago M Beldén', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88130', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0841', 'name' => 'Buenos Aires', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88134', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0843', 'name' => 'Licenciado Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0844', 'name' => '20 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88135', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0845', 'name' => 'Américo Villarreal Guerra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0846', 'name' => 'Unidad Nacional', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2742', 'name' => 'Villas de la Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88136', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0847', 'name' => 'Nueva Era', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88140', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0848', 'name' => 'Cuartel Militar Macario Zamora', 'zone_type' => 'Urbano', 'settlementtype_id' => '29','zipcode_id' => $idZip],
		['key' => '0849', 'name' => 'Jardín Juvencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0850', 'name' => 'Peña Benavides', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88144', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0853', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0854', 'name' => 'Las Alazanas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0855', 'name' => 'Los Garza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3467', 'name' => 'San Andrés', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88145', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0018', 'name' => 'Nueva España', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0857', 'name' => 'Lomas del Rey', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0858', 'name' => 'Los Virreyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0859', 'name' => 'Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88146', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0860', 'name' => 'Claudette', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2726', 'name' => 'El Caracol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88147', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0861', 'name' => 'Las Lomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2756', 'name' => 'Ayuntamiento 77', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88150', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0862', 'name' => 'El Remolino', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0863', 'name' => 'Roma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3597', 'name' => 'Tinajitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88160', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0864', 'name' => 'Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88170', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0028', 'name' => 'Parque Industrial Longoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0865', 'name' => 'Hipódromo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3840', 'name' => 'Parque Industrial Longoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '3878', 'name' => 'Los Cántaros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88175', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0868', 'name' => 'América', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88176', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0869', 'name' => 'Ejido el Bayito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0870', 'name' => 'Unión del Recuerdo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2759', 'name' => 'El Francés y Buenos Aires', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2760', 'name' => 'Tercer Milenio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2761', 'name' => 'Recinto Fiscal', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
		['key' => '2762', 'name' => 'María Luisa', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '3445', 'name' => 'Ampliación Tercer Milenio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88177', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'Los Olivos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'Nueva Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'Praderas del Mezquital', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0871', 'name' => 'Arturo Cortés Villada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2763', 'name' => 'Reservas Territoriales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2764', 'name' => 'Constitucional', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2766', 'name' => 'Toboganes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2768', 'name' => 'Daniel Covarrubias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2770', 'name' => 'Voluntad y Trabajo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2771', 'name' => 'Othón Chávez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3447', 'name' => 'Los Sánchez', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3628', 'name' => 'Naciones Unidas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3911', 'name' => 'Colorines', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88179', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0873', 'name' => 'Bellavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0874', 'name' => 'Bertha de Avellano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0875', 'name' => 'La Sandía', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0876', 'name' => 'Reforma Urbana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2727', 'name' => 'Lomas del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2772', 'name' => 'Anexo Reforma Urbana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3728', 'name' => 'Los Artistas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3777', 'name' => 'Las Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88180', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0877', 'name' => 'Rosita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88184', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0878', 'name' => 'Las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88185', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0879', 'name' => 'Parque Industrial 2 Laredos', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88186', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0880', 'name' => 'Parque Industrial Río Grande', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88187', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0881', 'name' => 'La Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88190', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0882', 'name' => 'Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88194', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0883', 'name' => 'Unión', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2733', 'name' => 'Anáhuac Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88195', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0884', 'name' => 'La Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0885', 'name' => 'Loma Bonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0886', 'name' => 'Zona de Tolerancia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88200', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0887', 'name' => 'San Rafael', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88209', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0888', 'name' => 'Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88210', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0889', 'name' => 'Matamoros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3351', 'name' => 'Lomas del Poniente', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3466', 'name' => 'Hacienda J Longoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88220', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0890', 'name' => 'Palacios', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88230', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0891', 'name' => 'Junta Federal de Mejoras Materiales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0892', 'name' => 'San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0893', 'name' => 'Sistema de Agua y Saneamiento', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88240', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0894', 'name' => 'Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0895', 'name' => 'Mier y Terán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0896', 'name' => 'Postal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0897', 'name' => 'Riberas del Bravo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88250', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0899', 'name' => 'Jesús García', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0900', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88260', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0901', 'name' => 'Anáhuac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0902', 'name' => 'González', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0903', 'name' => 'Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88270', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0904', 'name' => 'SUTERM II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0905', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0906', 'name' => 'Los Álamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0907', 'name' => 'Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88274', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'INFONAVIT Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'Casa Linda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'Río Bravo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0908', 'name' => 'FOVISSSTE Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0909', 'name' => 'Balcones del Boulevard', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0910', 'name' => 'Parque Industrial Río Bravo', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '3460', 'name' => 'Santa Anita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3461', 'name' => 'Vista Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88275', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0911', 'name' => 'INFONAVIT Fundadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0912', 'name' => 'Parque Industrial FINSA', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2729', 'name' => 'Las Alamedas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3463', 'name' => 'Centro Comercial Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '26','zipcode_id' => $idZip],
		['key' => '3718', 'name' => 'Privanzas Sector Alameda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88276', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'Eden Country Villas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0913', 'name' => 'El Cortijo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2737', 'name' => 'El Edén', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3459', 'name' => 'Gran Boulevard', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3462', 'name' => 'Bonanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3627', 'name' => 'Valle Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88277', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'Jardines de la Hacienda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0023', 'name' => 'San Patricio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0915', 'name' => 'Parque Módulo Industrial Américas', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2740', 'name' => 'Concordia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3458', 'name' => 'Residencial Longoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3768', 'name' => 'Las Viñas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88278', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0916', 'name' => 'Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3464', 'name' => 'Club Campestre Ribera del Bravo', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88280', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0919', 'name' => 'México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2731', 'name' => 'Ferrocarrilera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2732', 'name' => 'Central 2000', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3465', 'name' => 'El Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0917', 'name' => 'Burócratas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0918', 'name' => 'Club de Leones', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88283', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Francisco Villa 2', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2774', 'name' => '1° de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2775', 'name' => '150 Aniversario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3255', 'name' => 'Villas de San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3451', 'name' => 'Vamos Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88284', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0920', 'name' => 'Francisco Villa', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0921', 'name' => 'Manuel Cavazos Lerma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2776', 'name' => 'Nuevo Milenio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88285', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Blanca Navidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'Lomas del Rosario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'Parque Industrial Oradel', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '0029', 'name' => 'Parque Ferroviario Oradel', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2777', 'name' => 'El Campanario', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3452', 'name' => 'Villas del Oradel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3612', 'name' => 'Valles de Anáhuac', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3649', 'name' => 'Los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88287', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0027', 'name' => 'SUTERM I', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0922', 'name' => 'Electricistas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88289', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0923', 'name' => 'Don Ramón Salcido', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0924', 'name' => 'Militar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88290', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Viviendas Unidas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'Tulipanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'Balcones del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0015', 'name' => 'Los Cerezos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0016', 'name' => 'Los Ciruelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0026', 'name' => 'Villas de la Concordia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0925', 'name' => 'La Paz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0926', 'name' => 'Lagos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2773', 'name' => 'Villas del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2779', 'name' => 'Alfonso Gutiérrez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2780', 'name' => 'Los Aztecas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2781', 'name' => 'Los Encinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2782', 'name' => 'El Nogal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2783', 'name' => 'Los Presidentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2784', 'name' => 'Villa del Lago', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2785', 'name' => 'Los Fresnos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3252', 'name' => 'Hacienda de la Concordia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3450', 'name' => 'Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3720', 'name' => 'Santa Elena', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3723', 'name' => 'Santa Martha', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88293', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0927', 'name' => 'América 1', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0928', 'name' => 'América 14', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0929', 'name' => 'Granjas Guzmán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0930', 'name' => 'Saneva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2738', 'name' => 'Gilberto Montemayor Quintanilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2739', 'name' => 'Manuel Martínez Méndez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2744', 'name' => 'El Caporal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2745', 'name' => 'Carlos Benjamín Galván Maytorera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2748', 'name' => 'María del Pilar Martínez Muñoz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2786', 'name' => 'Valles del Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3457', 'name' => 'El Pedregal Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88294', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0931', 'name' => 'Alijadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0932', 'name' => 'Campesina', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0933', 'name' => 'Granjas Treviño', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2787', 'name' => 'Santa Cecilia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88295', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0024', 'name' => 'Valle Dorado', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0935', 'name' => 'El Capulín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0936', 'name' => 'Enrique Cárdenas González', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0937', 'name' => 'Granjas Económicas 1', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0938', 'name' => 'Granjas Económicas 2', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0939', 'name' => 'Granjas Regina', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2747', 'name' => 'Las Piedritas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2788', 'name' => 'Vamos Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3455', 'name' => 'ITAVU', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3596', 'name' => 'Haciendas de San Agustín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3601', 'name' => 'Palmares', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3923', 'name' => 'Valle Elizondo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88296', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0940', 'name' => 'América 2,3,5 y 6', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0944', 'name' => 'Colinas del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2789', 'name' => 'Misión de San Mauricio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2790', 'name' => 'Lomas del Popo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2791', 'name' => 'CERESO', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
		['key' => '3608', 'name' => 'Bosques del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3626', 'name' => 'Los Agaves', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88298', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0946', 'name' => 'La Concordia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3453', 'name' => 'Agrónomos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3454', 'name' => 'Candelario Perales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88299', 'locality' => 'Nuevo Laredo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0947', 'name' => 'América 4', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3729', 'name' => 'Colinas de San Javier', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88350', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0960', 'name' => 'Miguel Alemán (El Carrizo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3879', 'name' => 'La Cruz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '025', 'name' => 'Miguel Alemán', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88300', 'locality' => 'Ciudad Miguel Alemán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0948', 'name' => 'Ciudad Miguel Alemán Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88302', 'locality' => 'Ciudad Miguel Alemán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2429', 'name' => 'Gómez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2430', 'name' => 'INFONAVIT Arboleda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2431', 'name' => 'Solidaridad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2432', 'name' => 'Nuevo Santander', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2433', 'name' => 'Mezquital del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2434', 'name' => 'Del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2435', 'name' => 'Niños Héroes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2436', 'name' => 'Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2452', 'name' => 'Plan de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88303', 'locality' => 'Ciudad Miguel Alemán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2440', 'name' => 'Nuevo Amanecer', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2441', 'name' => 'Unidad Revolucionaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2442', 'name' => 'Cristóbal Colón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2443', 'name' => 'Barrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2444', 'name' => 'Río Bravo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2450', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88304', 'locality' => 'Ciudad Miguel Alemán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Los Presidentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'Montebello', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2447', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2453', 'name' => 'El Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88305', 'locality' => 'Ciudad Miguel Alemán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2445', 'name' => 'Arguello', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2446', 'name' => 'Lindavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2448', 'name' => 'Adolfo López Mateos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2449', 'name' => 'Buenos Aires', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3154', 'name' => 'Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88306', 'locality' => 'Ciudad Miguel Alemán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2424', 'name' => 'Electricistas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2437', 'name' => 'Educación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2438', 'name' => 'Mezquital del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2451', 'name' => 'Hercilia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2513', 'name' => 'INFONAVIT Rinconada', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3152', 'name' => 'INFONAVIT Santa Luisa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3153', 'name' => 'INFONAVIT Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88307', 'locality' => 'Ciudad Miguel Alemán', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2423', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2425', 'name' => 'Lucha Social', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2426', 'name' => 'Sabinitos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2427', 'name' => 'Rodríguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2428', 'name' => 'Villa del Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2439', 'name' => 'Jardines de San Germán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3151', 'name' => 'ITAVU', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88310', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Unidos Avanzamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0950', 'name' => 'Los Guerra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88321', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0951', 'name' => 'Guardados de Arriba', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '0952', 'name' => 'Los Ángeles', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88330', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0953', 'name' => 'Los Guajillos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88335', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0954', 'name' => 'Los Treviño', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88336', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0955', 'name' => 'La Ceja', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88338', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0956', 'name' => 'Los López', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88340', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0957', 'name' => 'Arcabuz', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88346', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0958', 'name' => 'San Antonio Reyna', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88349', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0959', 'name' => 'El Ranchito (Cerro Azul)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '014', 'name' => 'Guerrero', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88370', 'locality' => 'Nueva Ciudad Guerrero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0961', 'name' => 'Nueva Ciudad Guerrero Centro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88372', 'locality' => 'Nueva Ciudad Guerrero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2474', 'name' => 'Ruiz Cortínez', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2475', 'name' => 'Hidalgo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88373', 'locality' => 'Nueva Ciudad Guerrero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2473', 'name' => 'Pescadores', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2477', 'name' => 'FOVISSSTE Falcón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88374', 'locality' => 'Nueva Ciudad Guerrero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1355', 'name' => 'Electricistas', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2476', 'name' => 'Comisión', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '024', 'name' => 'Mier', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88390', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0963', 'name' => 'Mier Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3145', 'name' => 'La Paleta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3146', 'name' => 'El Parián', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3147', 'name' => 'La Chalupa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3148', 'name' => 'El Rodeo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3149', 'name' => 'Las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3150', 'name' => 'Villas del Cántaro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '015', 'name' => 'Gustavo Díaz Ordaz', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88400', 'locality' => 'Ciudad Gustavo Díaz Ordaz', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0965', 'name' => 'Ciudad Gustavo Díaz Ordaz Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88402', 'locality' => 'Ciudad Gustavo Díaz Ordaz', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1348', 'name' => 'El Cansado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1349', 'name' => 'El Maestro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1354', 'name' => 'El Terrón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3156', 'name' => 'INFONAVIT San Miguel Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3157', 'name' => 'Cucharas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88403', 'locality' => 'Ciudad Gustavo Díaz Ordaz', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1448', 'name' => 'Nuevo Repueblo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2478', 'name' => 'El Bordo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88404', 'locality' => 'Ciudad Gustavo Díaz Ordaz', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1463', 'name' => 'Prado Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88405', 'locality' => 'Ciudad Gustavo Díaz Ordaz', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1381', 'name' => 'Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1402', 'name' => 'Las Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2482', 'name' => 'Emancipadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2485', 'name' => 'El Agrónomo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88406', 'locality' => 'Ciudad Gustavo Díaz Ordaz', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2481', 'name' => 'Fundadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88407', 'locality' => 'Ciudad Gustavo Díaz Ordaz', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1444', 'name' => 'Nueva Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1488', 'name' => 'San Vicente del Potrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2480', 'name' => 'El Tepito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2484', 'name' => 'SARH', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88408', 'locality' => 'Ciudad Gustavo Díaz Ordaz', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2479', 'name' => 'El Tinaco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2483', 'name' => 'Emilio Portes Gil', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88410', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0969', 'name' => 'Los Villarreales', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0970', 'name' => 'Valadeces', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88412', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0971', 'name' => 'Tepehuaje', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88415', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0973', 'name' => 'Cinco de Febrero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88420', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0974', 'name' => 'Lucio Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88425', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0975', 'name' => 'San José', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88430', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0976', 'name' => 'Ideal del Campesino', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88434', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0977', 'name' => 'Buenavista', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88439', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0968', 'name' => 'Venecia', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0978', 'name' => 'Marte R. Gómez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '007', 'name' => 'Camargo', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88440', 'locality' => 'Ciudad Camargo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0979', 'name' => 'Camargo (Estradeño Dos)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0980', 'name' => 'Ciudad Camargo Centro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0981', 'name' => 'El Gonzaleño', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0982', 'name' => 'López y Nuevo Cadillo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88442', 'locality' => 'Ciudad Camargo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0984', 'name' => 'Cuauhtémoc', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2982', 'name' => 'Lemus', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88443', 'locality' => 'Ciudad Camargo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0985', 'name' => 'Adolfo López Mateos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2983', 'name' => 'Industrial Camargo', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88444', 'locality' => 'Ciudad Camargo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'El Sauz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0986', 'name' => 'Behula', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88446', 'locality' => 'Ciudad Camargo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0987', 'name' => 'La Misión', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88447', 'locality' => 'Ciudad Camargo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0988', 'name' => 'El Gonzalito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88448', 'locality' => 'Ciudad Camargo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0989', 'name' => 'Obrera', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88449', 'locality' => 'Ciudad Camargo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0990', 'name' => 'Nuevo Cadillo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88450', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0991', 'name' => 'Rancherías', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88455', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0992', 'name' => 'Guardados de Abajo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88456', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0993', 'name' => 'Los Fresnos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88459', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0994', 'name' => 'INFONAVIT Nuevo Camargo', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88460', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0995', 'name' => 'Comales Centro', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88468', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Nuevo Camargo (Villanueva)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0996', 'name' => 'Estación Camargo', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88469', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0997', 'name' => 'Congregación Ochoa', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88470', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0998', 'name' => 'El Azúcar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0999', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88473', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3843', 'name' => 'Los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88479', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1000', 'name' => 'Puertecitos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88480', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1001', 'name' => 'Santa Rosalía', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88490', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1002', 'name' => 'Santa Gertrudis', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '032', 'name' => 'Reynosa', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88500', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1003', 'name' => 'Reynosa Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88509', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1005', 'name' => 'Reynosa (General Lucio Blanco)', 'zone_type' => 'Rural', 'settlementtype_id' => '1','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88510', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1006', 'name' => 'Chapultepec (Chaparral)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88520', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1007', 'name' => 'Ramos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2189', 'name' => 'Álvaro Obregón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2190', 'name' => 'Los Longorias', 'zone_type' => 'Urbano', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3645', 'name' => '10 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88522', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2192', 'name' => 'Carmen Serdán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88540', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1010', 'name' => 'Aquiles Serdán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88550', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1012', 'name' => 'Medardo González', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88560', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1013', 'name' => 'Del Prado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2346', 'name' => 'Prado Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88570', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1014', 'name' => 'Fernández Gómez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2195', 'name' => 'Ferrocarril Zona Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2196', 'name' => 'El Maestro (Centro)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88580', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1016', 'name' => 'Del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2197', 'name' => 'El Bravo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88589', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1017', 'name' => 'Unidad y Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88595', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1019', 'name' => 'Praderas de Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2198', 'name' => 'Nuevo Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88596', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1020', 'name' => 'Manuel Tarrega', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88597', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1021', 'name' => 'La Curva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2199', 'name' => 'Villas del Prado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88598', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1022', 'name' => 'Ferrocarril Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88599', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1023', 'name' => 'Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88600', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1024', 'name' => 'Bella Vista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1025', 'name' => 'Constitución', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1026', 'name' => 'Ferrocarril Poniente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2203', 'name' => 'Manuel Cavazos Lerma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2204', 'name' => 'Módulo 2000 Rancho Grande', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88610', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2206', 'name' => 'Rancho Grande', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2208', 'name' => 'Ejido la Rosita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3229', 'name' => 'Jesús Vega Sánchez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3866', 'name' => 'Los Caracoles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88614', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2209', 'name' => 'Los Cavazos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2210', 'name' => 'Las Haciendas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2345', 'name' => 'Parque Industrial Maquilpark', 'zone_type' => 'Rural', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '3652', 'name' => 'Montecristo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3653', 'name' => 'Bosques de las Haciendas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3654', 'name' => 'Actrices Mexicanas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3873', 'name' => 'Villas de las Haciendas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88615', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1028', 'name' => 'Riberas de Rancho Grande', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2211', 'name' => 'Riberas del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2212', 'name' => 'Arboledas Ribereña', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88620', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1033', 'name' => 'Los Virreyes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1034', 'name' => 'Ribereña', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1035', 'name' => 'Vicente Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2213', 'name' => 'Country', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1030', 'name' => 'Ayuntamiento', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1031', 'name' => 'Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88630', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1037', 'name' => 'Altamira', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1038', 'name' => 'Anzaldúas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1039', 'name' => 'Beatty', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1040', 'name' => 'Flovigar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1041', 'name' => 'Rodríguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88631', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1042', 'name' => 'Rodríguez Ampliación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88632', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1043', 'name' => 'Ladrillera Mexicana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2350', 'name' => 'Privada las Américas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88640', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1046', 'name' => 'El Círculo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1047', 'name' => 'Los Naranjos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1048', 'name' => 'Montecasino', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1049', 'name' => 'Refinería', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
		['key' => '1050', 'name' => 'Reséndez Fierro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88649', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1051', 'name' => 'INFONAVIT Anzalduas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88650', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1052', 'name' => 'El Olmo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1053', 'name' => 'Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1054', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1055', 'name' => 'Santa Cecilia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2215', 'name' => 'Santa Cruz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2216', 'name' => 'Las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88651', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1056', 'name' => 'Mocambo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88653', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1057', 'name' => 'Los Sauces', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2218', 'name' => 'Josefa Ortíz de Domínguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88654', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1058', 'name' => 'Adolfo López Mateos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88655', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2219', 'name' => 'Las Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2220', 'name' => 'Las Camelias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2221', 'name' => 'Leyes de Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2222', 'name' => 'Campestre ITAVU', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2223', 'name' => 'Los Álamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2347', 'name' => 'Reserva Territorial Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3583', 'name' => 'Hacienda las Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3617', 'name' => 'Privadas de la Hacienda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3620', 'name' => 'Privada las Ceibas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88656', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1059', 'name' => 'El Olmito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88660', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1060', 'name' => 'Longoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1061', 'name' => 'Prolongación Longoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88670', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1063', 'name' => 'Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1064', 'name' => 'La Rosita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1065', 'name' => 'Las Lomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1066', 'name' => 'Loma Alta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1067', 'name' => 'Simón Rodríguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2224', 'name' => 'Cuauhtémoc', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88680', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1068', 'name' => 'José de Escandón (Petrolera)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1069', 'name' => 'Las Delicias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1071', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1072', 'name' => 'Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1075', 'name' => 'Sierra de la Garza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2225', 'name' => 'INFONAVIT Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2227', 'name' => 'Juan Escutia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3594', 'name' => 'Privada los Montejos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88684', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2228', 'name' => 'Ernesto Zedillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88687', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1076', 'name' => 'Revolución Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88689', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1077', 'name' => 'Ayala', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88690', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1078', 'name' => 'Los Doctores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1079', 'name' => 'Electricistas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1080', 'name' => 'Longoria San Ricardo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1082', 'name' => 'Los Leones', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88700', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1085', 'name' => '5 de Diciembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1086', 'name' => 'Del Parque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1088', 'name' => 'La Cañada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1090', 'name' => 'Loma Linda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1091', 'name' => 'Narciso Mendoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2230', 'name' => 'Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2514', 'name' => 'Rodhe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3585', 'name' => 'Módulo 2000 Reynosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88703', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1093', 'name' => 'Las Fuentes Colonial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2231', 'name' => 'INFONAVIT Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2971', 'name' => 'Las Fuentes Sección Lomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88706', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1096', 'name' => 'Enrique Cárdenas González', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88707', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1097', 'name' => 'Magisterial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2233', 'name' => 'Del Bosque Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2234', 'name' => 'Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2340', 'name' => 'Del Bosque Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2970', 'name' => 'Rincón del Parque I y II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3648', 'name' => 'San Roberto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88708', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1098', 'name' => 'Laredo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88709', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1099', 'name' => 'Valle Dorado', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2235', 'name' => 'Del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3647', 'name' => 'San Jerónimo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88710', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0013', 'name' => 'Residencial Miraloma', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0016', 'name' => 'Antara', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1101', 'name' => 'Moderno', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1102', 'name' => 'San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1103', 'name' => 'Santa María', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1104', 'name' => 'Valle Alto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2236', 'name' => 'La Cima', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2237', 'name' => 'Polanco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2238', 'name' => 'Rincón del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2239', 'name' => 'Villa los Nogales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3231', 'name' => 'Framboyanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3236', 'name' => 'Vista Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3239', 'name' => 'Privada las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3354', 'name' => 'Las Quintas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3569', 'name' => 'Parque Industrial Villa Florida', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '3570', 'name' => 'Villas de San Lázaro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3571', 'name' => 'Palma Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3581', 'name' => 'Valle del Mezquite', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88713', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3881', 'name' => 'San José de los Garza', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3882', 'name' => 'Campestre Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3889', 'name' => 'Nuevo México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88715', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Colinas de Loma Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'Los Pinos de Loma Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'Vista Alta Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2241', 'name' => 'Calpulli o Unidad y Esfuerzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2242', 'name' => 'Condado del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2243', 'name' => 'Villa Florida', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2244', 'name' => 'Villas del Roble', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2246', 'name' => 'Paseo Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3222', 'name' => 'Los Fresnos Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3228', 'name' => 'Los Laureles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3565', 'name' => 'Sendas Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3629', 'name' => 'Villa Florida Jardines', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3724', 'name' => 'Loma Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3731', 'name' => 'Loma Bonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3781', 'name' => 'Ventura', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88720', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1106', 'name' => 'Altavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1107', 'name' => 'Los Cavazos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1108', 'name' => 'Leal Puente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1109', 'name' => 'Valle Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88727', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1110', 'name' => 'Antonio J Bermúdez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88729', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1111', 'name' => 'Birrueta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88730', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1113', 'name' => 'Granjas Económicas del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1114', 'name' => 'Lomas del Real de Jarachinas Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2248', 'name' => 'Colinas del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2249', 'name' => 'Lomas del Real de Jarachinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2251', 'name' => 'Rosa Linda Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2252', 'name' => 'Valle del Vergel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3232', 'name' => 'Valle del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3355', 'name' => 'Real del Cántaro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88733', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0015', 'name' => 'Miravalle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3352', 'name' => 'San Valentín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88734', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3880', 'name' => 'Puerta Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88735', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1115', 'name' => 'Esfuerzo Nacional', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2253', 'name' => 'Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2256', 'name' => 'Integración Familiar Desarrollo Integral ITAVU', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3234', 'name' => 'El Halcón', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3235', 'name' => 'Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3237', 'name' => 'Privadas Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3245', 'name' => 'San Marcos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3567', 'name' => 'Las Palmas II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3922', 'name' => 'Hacienda las Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88736', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Hacienda del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0012', 'name' => 'Puerta Grande', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1116', 'name' => 'Solidaridad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1518', 'name' => 'Villa Dorada', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2257', 'name' => 'Lomas del Real de Jarachinas Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2258', 'name' => 'Lomas de Sinaí', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2259', 'name' => 'Parque Industrial del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2260', 'name' => 'Tecnológico de Reynosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
		['key' => '2261', 'name' => 'Jarachina del Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3225', 'name' => 'Puerta del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88737', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3575', 'name' => 'Laderas de Monterreal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88740', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1117', 'name' => 'Aztlán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1119', 'name' => 'García Rojas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1120', 'name' => 'Las Cumbres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2262', 'name' => 'Las Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2265', 'name' => 'FOVISSSTE Módulo Habitacional', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '2515', 'name' => 'Villa las Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88745', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1123', 'name' => 'Las Cumbres Prolongación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88746', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0014', 'name' => 'San Ángel Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1124', 'name' => 'Fuentes del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88747', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1125', 'name' => 'Casa Bella', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1126', 'name' => 'Privadas del Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2266', 'name' => 'Cactus II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2267', 'name' => 'Lomas de Valle Alto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2268', 'name' => 'SNTE', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2269', 'name' => 'Valle del Bravo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2270', 'name' => 'Los Muros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2348', 'name' => 'Río Grande', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3572', 'name' => 'Portal San Miguel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88748', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1127', 'name' => 'Villas de San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3240', 'name' => 'Residencial San José', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88749', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1128', 'name' => 'Jardines Coloniales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88750', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1129', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1130', 'name' => 'Presa la Laguna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88754', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2271', 'name' => 'Renacimiento II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3243', 'name' => 'San Pedro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3574', 'name' => 'Paseo del Prado', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3607', 'name' => 'Villa Marín', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88755', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1131', 'name' => 'Roma Burocrática', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88756', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1132', 'name' => 'La Amistad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1133', 'name' => 'Jacinto López I', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2273', 'name' => 'Burocrática', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2274', 'name' => 'Parque Mol Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2275', 'name' => 'Renacimiento', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88757', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1135', 'name' => 'López Portillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1138', 'name' => 'Unidos Podemos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1479', 'name' => 'Adolfo Ruiz Cortines', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2276', 'name' => 'Jacinto Lopez II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2278', 'name' => 'Universitaria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88758', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1139', 'name' => 'Presa la Laguna (Ampliación)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1140', 'name' => 'Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3226', 'name' => 'Nuevo México Sectores I II III IV V', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3568', 'name' => 'Nuevo Santander', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88759', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1142', 'name' => 'Revolución Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1143', 'name' => 'Ricardo Flores Magón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2279', 'name' => 'Fundadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2280', 'name' => 'Las Mitras', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88760', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1144', 'name' => 'El Anhelo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1145', 'name' => 'El Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1146', 'name' => 'La Laguna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2282', 'name' => 'Azteca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2283', 'name' => 'Ejido la Escondida', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2285', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88763', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2286', 'name' => 'Lomas de Villar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88764', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3242', 'name' => 'Villa del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88769', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1147', 'name' => 'Lázaro Cárdenas Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88770', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1148', 'name' => 'Del Maestro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1149', 'name' => 'La Escondida', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88776', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2291', 'name' => 'Villas de Imaq', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2292', 'name' => 'Voluntad y Trabajo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3238', 'name' => 'Villas Diamante', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88777', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1150', 'name' => 'Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2293', 'name' => 'La Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2294', 'name' => 'Lucio Blanco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88778', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2295', 'name' => 'Américo Villarreal Guerra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2297', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88779', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2232', 'name' => 'Arcoiris', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88780', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Brisas de Almaguer', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1153', 'name' => 'Almaguer', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1154', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1155', 'name' => 'Lampasitos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1156', 'name' => 'Reynosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2299', 'name' => 'Loma Blanca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2300', 'name' => 'El Mezquite', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2301', 'name' => 'Unidad Obrera Sección II', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2302', 'name' => 'Parque Industrial Center', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2303', 'name' => 'Villas del Parque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2344', 'name' => 'Nuevo Reynosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3224', 'name' => 'Villas del Palmar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3809', 'name' => 'Los Robles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88783', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2304', 'name' => 'Campestre (Lago Orizatlán)', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2306', 'name' => 'Parque Industrial El Puente (Manimex)', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2307', 'name' => 'Puente Nuevo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2342', 'name' => 'El Guerreño', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88784', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1157', 'name' => 'Margarita Maza de Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2338', 'name' => '15 de Enero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88785', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1158', 'name' => 'Campo Militar General Pedro Hinojosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '29','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88786', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1159', 'name' => 'Unidad Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2311', 'name' => '16 de Septiembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2312', 'name' => '20 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2313', 'name' => 'Nuevo Amanecer', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3643', 'name' => '1° de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88787', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1160', 'name' => 'Francisco Sarabia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2314', 'name' => 'Industrial Maquiladora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2315', 'name' => 'Parque Industrial Colonial', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2316', 'name' => 'Parque Industrial Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2317', 'name' => 'Villa Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3356', 'name' => 'Residencial del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3591', 'name' => 'ProLogis Park', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '3635', 'name' => 'El Campanario', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3644', 'name' => 'Riberas del Aeropuerto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3646', 'name' => 'Aeropuerto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88788', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2318', 'name' => 'Parque Industrial Reynosa (Sección Norte)', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2969', 'name' => 'Zona de Agentes Aduanales Adscritos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1161', 'name' => 'Bienestar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88789', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1163', 'name' => 'Fidel Velázquez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88790', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Arecas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1164', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1165', 'name' => 'El Banco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2320', 'name' => 'Ingeniero Humberto Valdéz Richaud', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2321', 'name' => 'Generación 2000', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2322', 'name' => 'Tamaulipas IV (Nuevo Milenio)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2323', 'name' => 'Tamaulipas II y III', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3223', 'name' => 'Alianza Social', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3227', 'name' => 'Modelo', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3586', 'name' => 'Marte R Gómez', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3872', 'name' => 'Puerto Escondido', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88793', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2324', 'name' => 'Lomas del Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2325', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2326', 'name' => 'Tamaulipas I', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2343', 'name' => 'Gómez Lira', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3595', 'name' => 'Lomas de la Torre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88794', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3357', 'name' => 'Ramón Pérez García', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3576', 'name' => 'Ayuntamiento 2000', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3578', 'name' => 'Las Milpas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88795', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1167', 'name' => 'Satélite', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2327', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2331', 'name' => 'Villas de la Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3294', 'name' => 'Villa Esmeralda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3636', 'name' => 'Vamos Tamaulipas', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3639', 'name' => 'Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3640', 'name' => 'Praderas Elite', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3641', 'name' => 'Riveras del Carmen', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88796', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Parque Industrial American Industries Kimco', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Las Anacuas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1168', 'name' => 'México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2333', 'name' => 'Beatriz Anaya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2334', 'name' => 'Mano con Mano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3241', 'name' => 'El Oasis', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3579', 'name' => 'Naranjitos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3580', 'name' => 'Arboledas de Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3656', 'name' => 'Rincón de las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88797', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1169', 'name' => 'Capitán Carlos Cantú', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88798', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1170', 'name' => 'Marte R Gómez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88799', 'locality' => 'Reynosa', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0011', 'name' => 'Misión Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1171', 'name' => 'Pedro J Méndez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2335', 'name' => 'Los Arcos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2337', 'name' => 'Balcones de Alcalá', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3353', 'name' => 'Paseo de las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3363', 'name' => 'Los Almendros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3587', 'name' => 'Parque Industrial STIVA Alcalá', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '3589', 'name' => 'Privada las Américas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3638', 'name' => 'Los Almendros II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3655', 'name' => 'Los Encinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3719', 'name' => 'Las Pirámides', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3725', 'name' => 'Valle Soleado', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3867', 'name' => 'Los Olivos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3871', 'name' => 'Terranova', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88850', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1207', 'name' => 'Diez de Noviembre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1208', 'name' => 'El Guerreño (Brecha 100y102 con km 23y26 Norte)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1209', 'name' => 'El Porvenir (El Bajío)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1210', 'name' => 'Los Altos (El Alto)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1211', 'name' => 'Santa Ana', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1212', 'name' => 'Reynosa Díaz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1213', 'name' => 'Rodolfo Martín Rocha (Martín Rocha)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3592', 'name' => 'Santa Ana', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88854', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1214', 'name' => 'Licenciado Galo Álvarez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88855', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1215', 'name' => 'La Retama', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88856', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1216', 'name' => 'Palo Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88857', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1217', 'name' => 'Anzaldúas (Estación Anzaldúas)', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88859', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Reynosa Díaz', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1218', 'name' => 'Argüelles', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88866', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0017', 'name' => 'Parque Eólico DELARO', 'zone_type' => 'Rural', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88875', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Alfredo V. Bonfil (Periquitos)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '3764', 'name' => 'Francisco I. Madero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '033', 'name' => 'Río Bravo', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88800', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1174', 'name' => 'El Triunfo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88803', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1175', 'name' => 'Los Ángeles', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88808', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1176', 'name' => 'Santo Domingo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2187', 'name' => 'Seis de Enero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88809', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1177', 'name' => 'La Reforma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88810', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0010', 'name' => 'Francisco I. Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1178', 'name' => 'Nuevo Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '2974', 'name' => 'Mágica', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2975', 'name' => 'Olvido González', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3826', 'name' => 'Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3845', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3846', 'name' => 'Aracely Martínez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88811', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1179', 'name' => 'La Soledad', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1180', 'name' => 'Las Flores', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88813', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1183', 'name' => 'Estación Canales', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
		['key' => '1184', 'name' => 'Ebanito Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88815', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1186', 'name' => 'Buenavista (Charco Azul)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1187', 'name' => 'La Posta', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88817', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Veracruz y Progreso', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88818', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1188', 'name' => 'El Rosario', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1189', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88819', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1190', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88820', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1191', 'name' => 'Nueva Independencia (La Culeca)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1192', 'name' => 'Santa Apolonia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88821', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1193', 'name' => 'Conquista Campesina', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1194', 'name' => 'La Patria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88823', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Emilio Portes Gil', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'General Guadalupe Mainero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88824', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Vicente Guerrero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88825', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1195', 'name' => 'Atizapán de Zaragoza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88826', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1196', 'name' => 'Raúl Muñiz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88827', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1197', 'name' => 'Cristóbal Colón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88828', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1198', 'name' => 'General Pedro Ochoa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88830', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1199', 'name' => 'La Argüelleña', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1200', 'name' => 'Mario Souza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88836', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1201', 'name' => 'Progreso del Campesino', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88837', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1202', 'name' => 'Manuel Parreño', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88839', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1203', 'name' => 'La Zacatecana', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88840', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1204', 'name' => 'Cándido Aguilar', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88841', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1205', 'name' => 'Centenario de la Constitución', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88849', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1206', 'name' => 'Dos de Enero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88900', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1229', 'name' => 'Ciudad Río Bravo Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88910', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1231', 'name' => 'Río Bravo 2', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1232', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1233', 'name' => 'San Diego', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88920', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Unidos Avanzamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1234', 'name' => 'Celanese', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1235', 'name' => 'Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1236', 'name' => 'Fundadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1237', 'name' => 'Graciano Sánchez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1238', 'name' => 'Hijos de Ejidatarios', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1240', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1241', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1242', 'name' => 'Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1243', 'name' => 'La Sauteña', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1446', 'name' => 'Nuevo León', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2717', 'name' => 'Niños Héroes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3359', 'name' => 'Misiones del Puente Anzaldúas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3551', 'name' => 'Paraíso Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3556', 'name' => 'Francisco I Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3559', 'name' => 'Estanislao García', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88923', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3542', 'name' => 'Praderas del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3543', 'name' => 'Hacienda las Brisas I, II, III', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3721', 'name' => 'Las Margaritas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88925', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1244', 'name' => 'Las Américas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1245', 'name' => 'Río Bravense', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1246', 'name' => 'Solidaridad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2721', 'name' => 'Riveras del Bravo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3360', 'name' => 'Paseo del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3555', 'name' => 'Brisas del Campo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3557', 'name' => 'Nuevo Amanecer', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3563', 'name' => 'INFONAVIT del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3705', 'name' => 'Popular Villahermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88930', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1248', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1249', 'name' => 'Estero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1250', 'name' => 'Ferrocarril 1, 2, 3', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1253', 'name' => 'Ferrocarril Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1254', 'name' => 'Manuel Ramírez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1255', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1257', 'name' => 'Monterreal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1259', 'name' => 'Roberto Guerra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1260', 'name' => 'Valle de Leones', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3709', 'name' => 'Agapito Barrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88933', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1261', 'name' => 'Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1262', 'name' => 'Ferrocarril 4', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3548', 'name' => 'Satélite', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3553', 'name' => 'Las Lomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3604', 'name' => 'Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3704', 'name' => 'Azteca', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88934', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2724', 'name' => 'Vamos Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3820', 'name' => 'Del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88935', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1264', 'name' => 'Victoria Cardenista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2715', 'name' => 'Del Carmen', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3708', 'name' => 'Manuel Cavazos Lerma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88936', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1338', 'name' => 'Cumbres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2712', 'name' => 'Carlos Salinas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3552', 'name' => 'Integración Familiar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88940', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1265', 'name' => 'CONALEP', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1266', 'name' => 'Noé Garza Martínez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1267', 'name' => '1° de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88943', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0008', 'name' => 'Villas del Rosario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1268', 'name' => 'Emilio Martínez Manaotou', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1269', 'name' => 'Hijos de Ejidatarios Primero de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3550', 'name' => 'El Maestro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3703', 'name' => 'San Gregorio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88944', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3701', 'name' => 'San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3702', 'name' => 'Villa de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3711', 'name' => 'Loma Linda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88945', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1270', 'name' => 'Arnulfo Martínez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1271', 'name' => 'Constitución', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1272', 'name' => 'Juan Baez Guerra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1273', 'name' => 'Octavio Silva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88946', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3707', 'name' => 'Los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88950', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1275', 'name' => 'Cuauhtémoc', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1276', 'name' => 'Río Bravo 1', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2502', 'name' => '78 80', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88959', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1277', 'name' => 'Río Bravo 3', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88960', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1278', 'name' => 'Zona Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88970', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1279', 'name' => 'Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1281', 'name' => 'México', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1282', 'name' => 'INFONAVIT San Diego', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2503', 'name' => 'FOVISSSTE', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88980', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1284', 'name' => 'Del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1285', 'name' => 'Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1286', 'name' => 'FOVISSSTE las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1287', 'name' => 'Los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1288', 'name' => 'Luis Echeverría', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1290', 'name' => 'Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1291', 'name' => 'Condesa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1462', 'name' => 'Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1493', 'name' => 'Santa Inés', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2719', 'name' => 'Socorro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3564', 'name' => 'Valle del Magisterio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88990', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'INFONAVIT la Paz', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1292', 'name' => 'Emilio Portes Gil', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1293', 'name' => 'INFONAVIT Fidel Velázquez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3716', 'name' => 'Termoeléctrica', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88993', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'Invasión 2000', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1297', 'name' => 'INFONAVIT las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1298', 'name' => 'México Asentamientos Humanos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1299', 'name' => 'INFONAVIT la Sauteña', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2718', 'name' => 'INFONAVIT Conquistadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2997', 'name' => 'Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3547', 'name' => 'San Nicolás', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3560', 'name' => 'Los Portales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3715', 'name' => 'La Paz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88994', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3546', 'name' => 'Álamo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3561', 'name' => 'Santander', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3562', 'name' => 'Campestre del Río', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88995', 'locality' => 'Ciudad Río Bravo', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3821', 'name' => 'Leonardo Rodríguez Alcaine', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '023', 'name' => 'Méndez', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88880', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1219', 'name' => 'La Purísima', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1220', 'name' => 'Méndez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88882', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0004', 'name' => 'Jesús María Uno (Jesús María de Solís)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'Santa Rita', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1221', 'name' => 'El Lobo (La Escondida)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88885', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Pedro José Méndez', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0002', 'name' => 'San Lorenzo de Cárdenas González', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'Luis Echeverría Álvarez', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88886', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'Espiaderos Dos (Chapeño Dos)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0009', 'name' => 'Américo Villarreal Guerra', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88887', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Emilio Portes Gil (San Felipe)', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0008', 'name' => 'Comas Altas', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '005', 'name' => 'Burgos', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88890', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1222', 'name' => 'Burgos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88894', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1223', 'name' => 'Lázaro Cárdenas (Rancho Nuevo)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88895', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1224', 'name' => 'El Pedregal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88896', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1225', 'name' => 'El Mulato', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88897', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1226', 'name' => 'Labores de la Paz (Los de Arriba)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1227', 'name' => 'Las Margaritas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '88898', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1228', 'name' => 'Cándido Aguilar', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '038', 'name' => 'Tampico', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89000', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1529', 'name' => 'Tampico Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89050', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1532', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89060', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1533', 'name' => 'Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2419', 'name' => 'Telegrafistas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89070', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1534', 'name' => 'Guadalupe Mainero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89080', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1535', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3676', 'name' => 'Xicoténcatl', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89090', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1536', 'name' => 'Isleta Pérez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3513', 'name' => 'Azucenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3514', 'name' => 'Parajes de Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89100', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1537', 'name' => 'Lomas de Rosales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2092', 'name' => 'Loma Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2416', 'name' => 'Lomas de la Aurora', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89106', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2417', 'name' => 'Lomas del Naranjal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89107', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1538', 'name' => 'Lindavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3518', 'name' => 'Loma Bonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89108', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1539', 'name' => 'Gustavo Díaz Ordaz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2422', 'name' => 'Hospital Regional', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89109', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1540', 'name' => 'Universidad Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2973', 'name' => 'Los Arcángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89110', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1541', 'name' => 'Las Villas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1542', 'name' => '15 Batallón de Infantería', 'zone_type' => 'Urbano', 'settlementtype_id' => '29','zipcode_id' => $idZip],
		['key' => '1543', 'name' => 'Petrolera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3519', 'name' => 'FOVISSSTE Vista Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89118', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1544', 'name' => 'La Florida', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3671', 'name' => 'Militar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89119', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1545', 'name' => 'Vista Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89120', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1546', 'name' => 'Guadalupe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1547', 'name' => 'Minerva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2486', 'name' => 'Armora Nicolás', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89130', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1548', 'name' => 'Allende', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1549', 'name' => 'Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1550', 'name' => 'Primavera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3515', 'name' => 'Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3517', 'name' => 'Hidalgo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89136', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1551', 'name' => 'Arcim', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89137', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1552', 'name' => 'Tampico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3675', 'name' => 'Ignacio Romero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89138', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2487', 'name' => 'Los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3520', 'name' => 'Zapotal', 'zone_type' => 'Urbano', 'settlementtype_id' => '5','zipcode_id' => $idZip],
		['key' => '3674', 'name' => 'San Felipe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1553', 'name' => 'Universidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2418', 'name' => 'Colinas de Universidad', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89140', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1555', 'name' => 'Lauro Aguirre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1556', 'name' => 'Reforma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1557', 'name' => 'Smith', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89150', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1558', 'name' => 'Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1559', 'name' => 'Otomi', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1560', 'name' => 'Vergel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3516', 'name' => 'Primavera', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89159', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1561', 'name' => 'Bellavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89160', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1562', 'name' => 'Frente Democrático', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1563', 'name' => 'Santo Niño', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1564', 'name' => 'Tolteca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89169', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1565', 'name' => 'Laguna del Carpintero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89170', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1566', 'name' => 'Aurora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1567', 'name' => 'Martock', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1568', 'name' => 'Rodríguez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1569', 'name' => 'Trueba', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89176', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1570', 'name' => 'Rosario', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89177', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1571', 'name' => 'Moctezuma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89180', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1572', 'name' => 'Anáhuac', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1573', 'name' => 'Barandillas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89190', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1574', 'name' => 'Americana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1575', 'name' => 'Azteca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1576', 'name' => 'Del Pueblo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89199', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1577', 'name' => 'Volantín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89210', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1578', 'name' => 'Monte Alegre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1579', 'name' => 'Sierra Morena', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89215', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1580', 'name' => 'San Pedro Fernando', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89217', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1581', 'name' => 'Club Campestre Tampico', 'zone_type' => 'Urbano', 'settlementtype_id' => '9','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89218', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1582', 'name' => 'Country Club', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89219', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1583', 'name' => 'Chairel Sección 33', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3673', 'name' => 'Laguna de la Herradura', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89220', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1584', 'name' => 'Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89229', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1585', 'name' => 'Fray Andrés de Olmos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89230', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1586', 'name' => 'Águila', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89239', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1587', 'name' => 'Chairel', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89240', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1588', 'name' => 'Altavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1589', 'name' => 'Sauce', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89250', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1590', 'name' => 'Alijadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1591', 'name' => 'Ex-Lomas del Country Club', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1592', 'name' => 'Pescadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2395', 'name' => 'Sembradores de la Amistad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89258', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1593', 'name' => 'Peralta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89260', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1594', 'name' => 'Campbell', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1595', 'name' => 'Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1596', 'name' => 'Nacional', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89268', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1597', 'name' => 'Ramos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89270', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1598', 'name' => 'Aragón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1599', 'name' => 'Matamoros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1600', 'name' => 'Melchor Ocampo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89280', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1601', 'name' => 'Cascajal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89290', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1603', 'name' => 'Marina Nacional', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1604', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89298', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1605', 'name' => 'Vicente Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3511', 'name' => 'Mano con Mano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89309', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1607', 'name' => 'Enrique Cárdenas González', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89310', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1608', 'name' => 'Laguna de la Puerta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89314', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1610', 'name' => 'Revolución Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1611', 'name' => 'Unidad del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89316', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1612', 'name' => 'Emilio Portes Gil', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1613', 'name' => 'Esfuerzo Obrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3528', 'name' => 'Sagitario I y II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89317', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1615', 'name' => 'Natividad Garza Leal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2404', 'name' => 'Solidaridad Voluntad y Trabajo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89318', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1617', 'name' => 'Del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1618', 'name' => 'Francisco Javier Mina', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1619', 'name' => 'Nuevo Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89319', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1620', 'name' => 'Villa Hermosa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3529', 'name' => 'Bugambilias', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89320', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1621', 'name' => 'Tancol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2016', 'name' => 'Chairel Tancol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2397', 'name' => 'Americano', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3530', 'name' => 'Puesta del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89325', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1622', 'name' => 'Loma Bonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3531', 'name' => 'Circuito Andrea', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89326', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1623', 'name' => 'La Paz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2406', 'name' => 'Colinas de Tancol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3536', 'name' => 'Arcángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89327', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1624', 'name' => '2 de Junio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1625', 'name' => 'Nuevo Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3535', 'name' => 'Jardines del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3924', 'name' => 'Residencial Bancario', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89328', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1626', 'name' => 'Pedro José Méndez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2489', 'name' => 'Petroquímicas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89329', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1627', 'name' => 'Las Américas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1628', 'name' => 'Latinoamericano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3534', 'name' => 'Colombia', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89330', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1629', 'name' => 'Flamboyanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3522', 'name' => 'Los Almendros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89336', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1631', 'name' => 'Universidad Poniente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89337', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1632', 'name' => 'Choferes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1633', 'name' => 'Nuevo Aeropuerto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89338', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1634', 'name' => 'José López Portillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2420', 'name' => 'Estadio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2421', 'name' => 'Villa Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2980', 'name' => 'Las Chacas', 'zone_type' => 'Urbano', 'settlementtype_id' => '5','zipcode_id' => $idZip],
		['key' => '3521', 'name' => 'Monza', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89339', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1635', 'name' => 'Tampico (General Francisco Javier Mina)', 'zone_type' => 'Urbano', 'settlementtype_id' => '1','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89340', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1636', 'name' => 'Ciudad Militar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3362', 'name' => 'Villas Chairel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89344', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1638', 'name' => 'Arenal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3678', 'name' => 'Presas del Arenal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89345', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1639', 'name' => 'Arboleda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89346', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1640', 'name' => 'Tancol 33', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89347', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1641', 'name' => 'San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89348', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1642', 'name' => 'México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2032', 'name' => 'Conjunto Habitacional Esmeralda', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '2401', 'name' => 'Alejandra', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2410', 'name' => 'Los Encinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3532', 'name' => 'Privado Querétaro', 'zone_type' => 'Urbano', 'settlementtype_id' => '5','zipcode_id' => $idZip],
		['key' => '3533', 'name' => 'Pegaso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3541', 'name' => 'Privado Sonora', 'zone_type' => 'Urbano', 'settlementtype_id' => '5','zipcode_id' => $idZip],
		['key' => '3669', 'name' => 'Conjunto Habitacional Tercer Milenium', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89349', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1643', 'name' => 'Coyolitos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1644', 'name' => 'El Naranjal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1645', 'name' => 'El Naranjal Prolongación Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2144', 'name' => 'Puertas Coloradas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2403', 'name' => 'Fernanda', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2409', 'name' => 'Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2972', 'name' => 'Los Claustros', 'zone_type' => 'Urbano', 'settlementtype_id' => '5','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89350', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1646', 'name' => 'Roma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89355', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1647', 'name' => 'Magdaleno Aguilar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89356', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1648', 'name' => 'Carmen Romano de López Portillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1649', 'name' => 'Chapultepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3540', 'name' => 'Génesis', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89357', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1650', 'name' => 'Mirador', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2156', 'name' => 'San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3539', 'name' => 'Los Portales', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89358', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1651', 'name' => 'Las Torres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2058', 'name' => 'Jardines de Champayán 1', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2115', 'name' => 'Miradores de la Presa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2176', 'name' => 'Tierra Alta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2964', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3538', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3598', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3670', 'name' => 'Valle Escondido', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3677', 'name' => 'Gladiolas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89359', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Paseos de Floresta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1653', 'name' => 'Niños Héroes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89360', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1655', 'name' => 'Lomas del Chairel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89364', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1656', 'name' => 'El Charro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1657', 'name' => 'El Ojital', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2088', 'name' => 'Loma Alta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3523', 'name' => 'Jesús Elías Piña IV, V y VI', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3525', 'name' => 'Hacienda del Rul', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89365', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1658', 'name' => 'Jesús Elías Piña I, II y III', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89366', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1659', 'name' => 'Luis Echeverría Álvarez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2398', 'name' => 'Diamante', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89367', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1660', 'name' => 'Unidad Modelo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2123', 'name' => 'Nuevo Amanecer', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2399', 'name' => 'Laderas de Vista Bella', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2400', 'name' => 'Vista Bella', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2412', 'name' => 'Colinas San Gerardo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3526', 'name' => 'Ampliación Luis Echeverría', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3634', 'name' => 'Villas Laguna', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3672', 'name' => 'Cumbres de Vista Bella', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89368', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1661', 'name' => 'Gonzalo García Ramírez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2003', 'name' => 'INFONAVIT Lomas Arenal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2082', 'name' => 'Las Violetas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2396', 'name' => 'Gema', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3527', 'name' => 'FOVISSSTE Chairel', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '3679', 'name' => 'San Pedro', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89369', 'locality' => 'Tampico', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1662', 'name' => 'Villa San Pedro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2981', 'name' => 'Colinas del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '009', 'name' => 'Ciudad Madero', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89400', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1663', 'name' => 'Ciudad Madero Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89410', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1666', 'name' => 'Unidad Nacional', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89415', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1667', 'name' => 'Villa Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89416', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1668', 'name' => 'Asunción Ávalos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1669', 'name' => 'Jacarandas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89417', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1670', 'name' => 'Estadio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89420', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1671', 'name' => 'Las Américas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1672', 'name' => 'Monteverde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89430', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1673', 'name' => 'Felipe Carrillo Puerto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1674', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89440', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1675', 'name' => 'Jardín 20 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1676', 'name' => 'Los Mangos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89450', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1677', 'name' => '1° de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89460', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1678', 'name' => 'Loma del Gallo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1679', 'name' => 'Ricardo Flores Magón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89464', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1680', 'name' => 'Quetzalcóatl', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89470', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1681', 'name' => 'Esfuerzo Nacional', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1682', 'name' => 'Frente Democrático', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89480', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1685', 'name' => 'Francisco I Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1686', 'name' => 'Las Conchitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89490', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1688', 'name' => 'Árbol Grande', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1689', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89496', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1690', 'name' => 'Las Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89497', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1691', 'name' => 'Árbol Grande Ex-Refinería', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89500', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1692', 'name' => 'Candelario Garza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89505', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => '17 de Enero', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'Fundadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1693', 'name' => 'Candelario Garza Ampliación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89506', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1695', 'name' => 'Lienzo Charro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1696', 'name' => 'Miramapolis', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1697', 'name' => 'SAHOP', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2498', 'name' => 'Puerto Alegre', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '3439', 'name' => 'Integración Familiar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3441', 'name' => 'Rincón Colonial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3442', 'name' => 'Tercer Milenio', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3443', 'name' => 'Las Dunas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3444', 'name' => 'Joyas de Miramapolis', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3662', 'name' => 'Villas del Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3663', 'name' => 'Insurgentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89510', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Palmas II', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1698', 'name' => 'Heriberto Kehoe', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1700', 'name' => 'Ignacio Zaragoza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1701', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1703', 'name' => 'Ampliación Unidad Nacional', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3431', 'name' => 'Lago Azul', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3658', 'name' => 'Palmas I', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89512', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1705', 'name' => '16 de Septiembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2497', 'name' => 'La Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89513', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1707', 'name' => 'Lucio Blanco Ampliación los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1708', 'name' => 'Los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89514', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1709', 'name' => 'Residencial del Parque', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1711', 'name' => 'Jesús Luna Luna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2499', 'name' => 'Satélite', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3667', 'name' => 'Residencial la Antigua', 'zone_type' => 'Urbano', 'settlementtype_id' => '5','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89515', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1713', 'name' => 'Carlos Jiménez Macías', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '1714', 'name' => 'El Palmar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1715', 'name' => 'Naval Militar las Chacas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1716', 'name' => 'Castores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1717', 'name' => 'Los Cedros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1718', 'name' => 'Manuel R Díaz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1719', 'name' => 'Villas del Mar', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3430', 'name' => '18 de Marzo', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3432', 'name' => 'Los Framboyanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3433', 'name' => 'Los Sauces', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89517', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1721', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89518', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1723', 'name' => 'Revolución Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89519', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1724', 'name' => '15 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1725', 'name' => 'Simón Rivera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2900', 'name' => 'Los Fresnos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3426', 'name' => 'Adriana González Hernández', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89520', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1726', 'name' => 'Adolfo López Mateos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1727', 'name' => 'Fidel Velázquez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1728', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1729', 'name' => 'Héroe de Nacozari', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89530', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1730', 'name' => 'Del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89540', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1734', 'name' => 'Hermenegildo Galeana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1735', 'name' => 'La Barra', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1736', 'name' => 'Miramar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2500', 'name' => 'ISSSFAM', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '1733', 'name' => 'Emilio Carranza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89550', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1738', 'name' => 'Benito Juárez Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1739', 'name' => 'Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1740', 'name' => 'Emiliano Zapata Sur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1741', 'name' => 'Del Maestro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2901', 'name' => 'Girasoles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89553', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1742', 'name' => 'Camichines', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89554', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1743', 'name' => 'Nueva Cecilia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89555', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1744', 'name' => 'FOVISSSTE Lucio Blanco', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '1745', 'name' => 'Los Robles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2501', 'name' => 'Las Brisas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3159', 'name' => 'Polvorín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3437', 'name' => 'Santa Úrsula', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89556', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1747', 'name' => 'Delfino Reséndiz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3158', 'name' => 'Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89560', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1748', 'name' => 'Hipódromo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1749', 'name' => 'López Portillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89566', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1750', 'name' => 'El Llano', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89567', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1751', 'name' => 'La Loma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89570', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1752', 'name' => 'Hidalgo Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1753', 'name' => 'Hidalgo Poniente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89580', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1754', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1755', 'name' => 'Vicente Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89590', 'locality' => 'Ciudad Madero', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1756', 'name' => 'Ferrocarrilera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1757', 'name' => 'Talleres', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1758', 'name' => 'Tinaco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '003', 'name' => 'Altamira', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89600', 'locality' => 'Altamira', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1760', 'name' => 'Altamira Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89602', 'locality' => 'Altamira', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Valles de España', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'Unidos Avanzamos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0005', 'name' => 'Encinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0007', 'name' => 'Villas del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0008', 'name' => 'Electricistas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0012', 'name' => 'Los Obeliscos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0014', 'name' => 'Los Mangos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1762', 'name' => 'Adolfo López Mateos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1763', 'name' => 'Alejandro Briones', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1764', 'name' => 'Roger Gómez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1765', 'name' => 'Santo Domingo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1983', 'name' => 'Alameda', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1994', 'name' => 'Altamira', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2027', 'name' => 'Emilio Portes Gil', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2029', 'name' => 'Enrique Cárdenas González', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2036', 'name' => 'Fidel Velázquez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2040', 'name' => 'Felipe Carrillo Puerto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2050', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2052', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2074', 'name' => 'Las Blancas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2078', 'name' => 'Las Fuentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2083', 'name' => 'Diana Laura Riojas de Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2084', 'name' => 'León F Gual', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2101', 'name' => 'Los Laureles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2102', 'name' => 'Los Mangos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2108', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2111', 'name' => 'Las Margaritas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2132', 'name' => 'Nuevo México', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2143', 'name' => 'Primavera Norte', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2148', 'name' => 'Revolución Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2159', 'name' => 'Santa Amalia', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2175', 'name' => 'Tampiquito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2183', 'name' => '20 de Noviembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2812', 'name' => 'Campo Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2813', 'name' => 'César López de Lara', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2814', 'name' => 'La Unión', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2815', 'name' => 'Los Pinos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '2816', 'name' => 'Los Presidentes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2817', 'name' => 'Martín A Martínez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2818', 'name' => 'El Nogal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2819', 'name' => 'Valle Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2855', 'name' => 'La Joya', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2873', 'name' => 'Villerías', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2877', 'name' => 'Educación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2878', 'name' => 'Álamo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2879', 'name' => 'Altamira Sector IV', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3102', 'name' => 'Petrolera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3105', 'name' => 'El Pedregal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3490', 'name' => 'Lázaro Cárdenas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3493', 'name' => 'La Florida', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3602', 'name' => 'Sección 3 Petróleros', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3681', 'name' => 'María Antonieta Márquez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3685', 'name' => 'Los Placeres del Campo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3799', 'name' => 'El Repecho', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89603', 'locality' => 'Altamira', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Los Olivos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0013', 'name' => 'Las Alamedas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0020', 'name' => 'Santa Mónica', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '0021', 'name' => 'Parque de la Pequeña y Mediana Industria', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '0022', 'name' => 'Valle Esmeralda Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1767', 'name' => 'Francisco I Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1768', 'name' => 'La Pedrera', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1769', 'name' => 'Francisco Villa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1771', 'name' => 'Laguna de la Puerta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2110', 'name' => 'Magdaleno Aguilar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2141', 'name' => 'La Potosina', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2821', 'name' => 'Corredor Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2822', 'name' => 'Emiliano Zapata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2823', 'name' => 'José de Escandón', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2824', 'name' => 'Fundadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2825', 'name' => 'Industrial Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2826', 'name' => 'Jardines de Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2827', 'name' => 'Arrecifes', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2828', 'name' => 'Municipios Libres', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2829', 'name' => 'Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2830', 'name' => 'Unidad Satélite', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2831', 'name' => 'Venustiano Carranza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2832', 'name' => 'Villas de Altamira', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3089', 'name' => 'Villas las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3093', 'name' => 'Satélite Chapala', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3094', 'name' => 'Villas del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3095', 'name' => 'De los Ríos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3097', 'name' => 'Municipios Libres las Negras', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3479', 'name' => 'San Jacinto', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3480', 'name' => 'Villa las Rosas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3481', 'name' => 'Paseo Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3482', 'name' => 'Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3483', 'name' => 'Ricardo Flores Magón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3484', 'name' => 'Francisco Medrano', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3497', 'name' => 'Las Adelitas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3498', 'name' => 'Colinas de Altamira', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3500', 'name' => 'Las Haciendas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3501', 'name' => 'Los Prados', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3625', 'name' => 'Hacienda las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3683', 'name' => 'Arboledas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3696', 'name' => 'Real Altamira', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3700', 'name' => 'El Edén', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3765', 'name' => 'Arecas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3841', 'name' => 'Puerto Industrial de Altamira', 'zone_type' => 'Rural', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89604', 'locality' => 'Altamira', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0015', 'name' => 'Valle Dorado', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1773', 'name' => 'Miramar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1774', 'name' => 'Nuevo Tampico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1985', 'name' => 'Albañiles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2000', 'name' => 'Américo Villarreal', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2004', 'name' => 'Bahía', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2005', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2022', 'name' => 'El Mundo', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2025', 'name' => 'El Triunfo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2051', 'name' => 'Habitacional', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2061', 'name' => 'Jazmín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2063', 'name' => 'José María Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2064', 'name' => 'Justo Sierra', 'zone_type' => 'Urbano', 'settlementtype_id' => '28','zipcode_id' => $idZip],
		['key' => '2100', 'name' => 'Los Fresnos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2130', 'name' => 'Nuevo Madero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2134', 'name' => 'Nuevo Tampico Sector 2', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2139', 'name' => 'Plomeros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2155', 'name' => 'San Arnoldo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2161', 'name' => 'Santa Elena', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2163', 'name' => 'Serapio Venegas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2169', 'name' => 'Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2833', 'name' => 'El Contadero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2837', 'name' => 'Primavera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2839', 'name' => 'San Antonio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2840', 'name' => 'Santo Tomas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2875', 'name' => 'Guadalupe Cervantes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3092', 'name' => 'Gema', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '3096', 'name' => 'San Ángel', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3468', 'name' => 'Ampliación el Contadero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3469', 'name' => 'Residencia Velamar', 'zone_type' => 'Rural', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3470', 'name' => 'Dunas Doradas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3691', 'name' => 'La Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3692', 'name' => 'Cancún', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89605', 'locality' => 'Altamira', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'Acapulquito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0010', 'name' => 'Sotavento Altamira', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '0011', 'name' => 'Punta Laguna', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1980', 'name' => 'Agua de Castilla (La Bajada)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2033', 'name' => 'Españita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2047', 'name' => 'Ganadera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2171', 'name' => 'Tampico Altamira', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2841', 'name' => 'Central de Abastos', 'zone_type' => 'Urbano', 'settlementtype_id' => '26','zipcode_id' => $idZip],
		['key' => '2842', 'name' => 'Residencial Lagunas de Miralta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2843', 'name' => 'Vega de Esteros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2874', 'name' => 'Colinas de la Laguna', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3084', 'name' => 'Huatulquito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3091', 'name' => 'Huatulco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3472', 'name' => 'Residencial el Náutico', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3473', 'name' => 'Floresta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3474', 'name' => 'Residencial Real Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3475', 'name' => 'Loma Bonita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3874', 'name' => 'Villas Náutico', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89606', 'locality' => 'Altamira', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1770', 'name' => 'Monte Alto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1986', 'name' => 'Alejandro Briones', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2072', 'name' => 'La Morita', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2075', 'name' => 'Las Brisas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2077', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2089', 'name' => 'Loma Alta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2090', 'name' => 'Lomas de Altamira', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2093', 'name' => 'Lomas de Valle Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2095', 'name' => 'Los Arados', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2097', 'name' => 'La Azteca', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2099', 'name' => 'Los Encinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2124', 'name' => 'Nuevo Lomas del Real', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2846', 'name' => 'Lomas de Miralta', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2847', 'name' => 'Lomas de Monte Alto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2848', 'name' => 'Lomas de Rosales', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3085', 'name' => 'Juan Genaro de la Portilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3086', 'name' => 'Colinas de Champayán', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3108', 'name' => 'Valle de las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3477', 'name' => 'Los Encinos Residencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3478', 'name' => 'Lomas Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3682', 'name' => 'Monte Alto Sipobladur', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3687', 'name' => 'Eugenio Hernández Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89607', 'locality' => 'Altamira', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1759', 'name' => 'Altamira', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '1984', 'name' => 'Alameda', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '2030', 'name' => 'Enrique Cárdenas Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2037', 'name' => 'INFONAVIT Fidel Velázquez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2057', 'name' => 'Jardines de Altamira', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2060', 'name' => 'Jardines de Champayán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2067', 'name' => 'La Florida', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2079', 'name' => 'Las Grullas', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '2103', 'name' => 'Los Naranjos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2112', 'name' => 'Las Marismas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2149', 'name' => 'Revolución Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2153', 'name' => 'Los Sábalos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2160', 'name' => 'Santa Ana', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2852', 'name' => 'Los Almendros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2853', 'name' => 'Pescadores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2854', 'name' => 'Altamira II', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '2883', 'name' => 'Pescadores 2', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3081', 'name' => 'El Campanario', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3099', 'name' => 'Puerto Escondido', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3100', 'name' => 'FOVISSSTE', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '3101', 'name' => 'Santa Anita', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3496', 'name' => 'Ixtapa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3717', 'name' => 'Privada Santiago', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '3800', 'name' => 'Tercer Milenium', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3802', 'name' => 'Laguna Florida', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3803', 'name' => 'Villas de Champayán', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3804', 'name' => 'Villas de Champayán 2', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89610', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2015', 'name' => 'Cuauhtémoc', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2034', 'name' => 'Esperanza', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2884', 'name' => 'Jardín', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2885', 'name' => 'Magisterial', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89613', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1778', 'name' => 'Santa Gertrudis', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89614', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0016', 'name' => 'Graneros del Sur (Cuatrocientos Pueblos)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0018', 'name' => 'Mariano Matamoros', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0019', 'name' => 'Santa Juana', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1779', 'name' => 'San Antonio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89615', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1780', 'name' => 'José María Luis Mora (Las Margaritas)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89620', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1781', 'name' => 'Esteros', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89625', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1782', 'name' => 'Providencia y Naranjos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89630', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1783', 'name' => 'Lomas del Real', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89632', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1784', 'name' => 'Aquiles Serdán (El Barranco)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89633', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3770', 'name' => 'Ampliación el Arenal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89635', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1785', 'name' => 'Agua de Castilla', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89636', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '0017', 'name' => 'Nuevo CERESO Regional de Altamira', 'zone_type' => 'Rural', 'settlementtype_id' => '9','zipcode_id' => $idZip],
		['key' => '1786', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89640', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1788', 'name' => 'Cervantes', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89641', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1789', 'name' => 'Maclovio Herrera (Miradores)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89642', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1790', 'name' => 'Santa Inés (Kilómetro 40)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2151', 'name' => 'Río Tamiahua', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89643', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1791', 'name' => 'Mata del Abra', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89644', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1792', 'name' => 'El Fuerte', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89645', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1793', 'name' => 'Tres de Mayo (Mata Negra)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89650', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1794', 'name' => 'La Colonia (Estación Colonias)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '002', 'name' => 'Aldama', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89670', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Santa Martha', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '0003', 'name' => 'El Lucero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1796', 'name' => 'Aldama', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1797', 'name' => 'Francisco I. Madero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1798', 'name' => 'La Azufrosa (El Higuerón)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2001', 'name' => 'Arboledas', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2007', 'name' => 'Brownsville', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2013', 'name' => 'Constitución', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2017', 'name' => 'Del Bosque', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2104', 'name' => 'Los Pinos', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2106', 'name' => 'Luis Caballero', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2113', 'name' => 'Matamoros', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2150', 'name' => 'Revolución Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2152', 'name' => 'Río Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3805', 'name' => 'Nuevo Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89672', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1800', 'name' => 'Las Flores', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '1801', 'name' => 'Morón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89673', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1802', 'name' => 'El Carrizal (Carrera Torres)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1803', 'name' => 'El Carrizal Segundo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1804', 'name' => 'Higinio Tanguma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89674', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1805', 'name' => 'Rancho de Piedra', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3630', 'name' => 'Revolución', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89675', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3632', 'name' => 'El Real Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3893', 'name' => 'Santa María', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89676', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Barra del Tordo', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '0006', 'name' => 'Francisco Villa (Pancho Villa)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3727', 'name' => 'El Pichijumo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89677', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'El Olivo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1806', 'name' => 'Las Yucas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3920', 'name' => 'La Cabecera', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89678', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Buenavista', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1807', 'name' => 'Nuevo Progreso (La Gaviota)', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89679', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1808', 'name' => 'El Vidal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1809', 'name' => 'Las Alazanas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '012', 'name' => 'González', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89700', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1811', 'name' => 'Santa Fe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89703', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1815', 'name' => 'Rosillo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89704', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2984', 'name' => 'El Progreso', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89705', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1813', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89706', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1814', 'name' => 'González [Ejido]', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3823', 'name' => 'Nueva Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89707', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3808', 'name' => 'Atizapán de Zaragoza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89710', 'locality' => 'González', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1810', 'name' => 'González Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89712', 'locality' => 'González', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2352', 'name' => 'Nuevo Amanecer', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2353', 'name' => 'Praxedis Balboa', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2354', 'name' => 'Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89713', 'locality' => 'González', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2356', 'name' => 'Sector Oriente', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2357', 'name' => 'Dos Amigos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89715', 'locality' => 'González', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Integración Familiar', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2358', 'name' => 'El Huerto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2359', 'name' => 'Industrial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89716', 'locality' => 'González', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2355', 'name' => 'César López de Lara', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89720', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1816', 'name' => 'Magiscatzin', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89723', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3072', 'name' => 'Aureliano Caballero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89724', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Francisco I. Madero Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89725', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2904', 'name' => 'Venustiano Carranza Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2985', 'name' => 'San Pedro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89726', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'Felipe Carrillo Puerto', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89727', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2903', 'name' => 'Venustiano Carranza Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89729', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'El Centauro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1817', 'name' => 'Fortín Agrario (Estación Calles)', 'zone_type' => 'Rural', 'settlementtype_id' => '16','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89730', 'locality' => 'Estación Manuel (Úrsulo Galván)', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1818', 'name' => 'Estación Manuel (Úrsulo Galván) Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89731', 'locality' => 'Estación Manuel (Úrsulo Galván)', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2364', 'name' => 'Laguna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2367', 'name' => 'Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2368', 'name' => 'Aviación', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89732', 'locality' => 'Estación Manuel (Úrsulo Galván)', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2365', 'name' => 'Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2370', 'name' => 'Piloto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2373', 'name' => 'Centro Comercial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2374', 'name' => 'Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89734', 'locality' => 'Estación Manuel (Úrsulo Galván)', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2366', 'name' => 'Primavera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2369', 'name' => 'Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2372', 'name' => 'San Luisito', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2377', 'name' => 'Buenos Aires', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2378', 'name' => 'Unidad Deportiva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89735', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1824', 'name' => 'La Reforma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89736', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1821', 'name' => 'Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89740', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1825', 'name' => 'Graciano Sánchez', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '3070', 'name' => 'Campo Verde', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89744', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1823', 'name' => 'Adolfo Ruiz Cortines', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3844', 'name' => 'Campo Nuevo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89746', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'López Rayón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1819', 'name' => 'San Antonio Rayón', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '043', 'name' => 'Xicoténcatl', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89750', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1826', 'name' => 'El Azúcar', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1829', 'name' => 'Melchor Ocampo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3606', 'name' => 'Doctor Norberto Treviño Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89751', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1832', 'name' => 'Mártires de Río Blanco (La Reforma)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89752', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1833', 'name' => 'Alianza Agraria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89753', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1834', 'name' => 'Águilas de la Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3029', 'name' => 'Lucio Blanco', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3031', 'name' => 'Triunfo del Porvenir', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3032', 'name' => 'Miguel Alemán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89755', 'locality' => 'Xicoténcatl', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1830', 'name' => 'Xicoténcatl Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89756', 'locality' => 'Xicoténcatl', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Vicente Villasana', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '2384', 'name' => 'Lindavista', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89757', 'locality' => 'Xicoténcatl', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2024', 'name' => 'El Tres', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2062', 'name' => 'José María Martínez', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2385', 'name' => 'Oriente', 'zone_type' => 'Rural', 'settlementtype_id' => '2','zipcode_id' => $idZip],
		['key' => '2386', 'name' => 'Progreso', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2387', 'name' => 'Margarita C de S', 'zone_type' => 'Rural', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '3251', 'name' => 'Héctor Sáenz Muñoz', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89758', 'locality' => 'Xicoténcatl', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2035', 'name' => 'Ferrocarril', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2380', 'name' => 'Primero de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2381', 'name' => 'Cohol', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2382', 'name' => 'Industrial', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3851', 'name' => 'Presidencial', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89759', 'locality' => 'Xicoténcatl', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2379', 'name' => 'Rosendo G Castro', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2383', 'name' => 'José de Escandón', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2388', 'name' => 'Sector Poniente', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2389', 'name' => 'Flores Magón', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2390', 'name' => 'Las Granjas', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2391', 'name' => 'Beatriz Anaya', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2392', 'name' => 'Verástegui', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2393', 'name' => 'Independencia', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2394', 'name' => 'El Azúcar', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3247', 'name' => 'Doctor Antonio Amaral González', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3248', 'name' => 'Manuel Cavazos Lerma', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3249', 'name' => 'Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3868', 'name' => 'Floresta', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89760', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1839', 'name' => 'San Manuel', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89762', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1840', 'name' => 'Francisco Villa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3034', 'name' => 'Felipe Ángeles', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3035', 'name' => 'Moctezuma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89763', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1841', 'name' => 'Ejido Brownsville', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3605', 'name' => 'Narciso Mendoza Número Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89764', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Segunda Unidad Xicoténcatl (El Aquiche)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1842', 'name' => 'Francisco Castellanos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89767', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1843', 'name' => 'Vicente Guerrero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3852', 'name' => 'Praxedis Balboa (La Poza)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89768', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1844', 'name' => 'El Cedral', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89774', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1838', 'name' => 'El Conejo (El Conejito)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3030', 'name' => 'La Presa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3033', 'name' => 'Manuel Castaños Valiente (El Setenta)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3835', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89778', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1836', 'name' => 'El Azteca', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1837', 'name' => 'Héctor M Sáenz', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '011', 'name' => 'Gómez Farías', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89780', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1845', 'name' => 'Gómez Farías', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89783', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Plan de Guadalupe', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1846', 'name' => 'El Nacimiento', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89784', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1847', 'name' => 'Ojo de Agua (La Morita)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89785', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Emilio Portes Gil (La Gloria)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89789', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1848', 'name' => 'El Azteca', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89790', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1849', 'name' => '5 de Mayo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1851', 'name' => 'Loma Alta (Loma Alta de Gómez Farías)', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89791', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1852', 'name' => 'Benito Juárez (La Ribera)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1853', 'name' => 'Guadalupe Victoria', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3027', 'name' => 'La Misión', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89792', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1854', 'name' => 'El Riachuelo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3025', 'name' => 'Alfredo V. Bonfil (El Papalote)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3028', 'name' => 'Américo Villarreal', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89795', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1855', 'name' => 'Héroes de Chapultepec', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89796', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3877', 'name' => 'Lázaro Cárdenas Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89797', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1857', 'name' => 'Poblado Seiscientos Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '3026', 'name' => 'Narciso Mendoza (La Ardilla)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3858', 'name' => 'Agustín Melgar', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3913', 'name' => 'El Esfuerzo Número Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '021', 'name' => 'El Mante', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89800', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1858', 'name' => 'Ciudad Mante Centro', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89810', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1860', 'name' => 'Enrique Cárdenas González', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2856', 'name' => 'Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89815', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1861', 'name' => 'Aurora', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1862', 'name' => 'Del Músico', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89816', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1864', 'name' => 'Unidad Nacional', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89817', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1865', 'name' => 'INFONAVIT Arbustos', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '1867', 'name' => 'FOVISSSTE 1', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '2039', 'name' => 'FOVISSSTE 2', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '3184', 'name' => 'Los Pinos', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89818', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1868', 'name' => 'Cerro del Bernal', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2801', 'name' => 'INFONAVIT el Bernal', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '3508', 'name' => 'Faja de Oro', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3854', 'name' => 'Santa Mónica', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89819', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1870', 'name' => 'Vicente Guerrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89820', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1871', 'name' => 'Fomento Nacional', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1872', 'name' => 'Miguel Alemán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3178', 'name' => 'Vivah', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89827', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1873', 'name' => 'El Martillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3179', 'name' => 'Andalucía', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3853', 'name' => 'Los Ángeles', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89829', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1874', 'name' => 'Canoas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89830', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1875', 'name' => 'Anáhuac 1', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1876', 'name' => 'Moderna', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89837', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1877', 'name' => 'Ignacio de la Llave', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89838', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1878', 'name' => 'Revolución Verde', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89839', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1879', 'name' => 'INFONAVIT Jesús Yurem', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '2857', 'name' => 'Valle del Mante', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89840', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1881', 'name' => 'Azucarera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1882', 'name' => 'Benito Juárez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1883', 'name' => 'Del Bosque', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1884', 'name' => 'Jardín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2858', 'name' => 'Las Flores', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2859', 'name' => 'Río Mante', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89843', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1885', 'name' => 'Progreso Social', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1886', 'name' => 'Victoria', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3509', 'name' => 'San Agustín', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89846', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1891', 'name' => 'Chapultepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2860', 'name' => 'Zeferino Terán', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89847', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0002', 'name' => 'Las Villas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1892', 'name' => 'Nacional Colectiva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89848', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1895', 'name' => 'Tulipanes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3185', 'name' => 'Valle de Chapultepec', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89849', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1897', 'name' => 'Burócrata', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1898', 'name' => 'Libertad', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1899', 'name' => 'Popular', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2491', 'name' => 'INFONAVIT Linares', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '2862', 'name' => 'Aeropuerto', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2863', 'name' => 'Cuauhtémoc', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2864', 'name' => 'Nuevo Amanecer', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3177', 'name' => 'Paseo de las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3180', 'name' => 'Vamos Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3510', 'name' => 'Mariano Matamoros', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89850', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1900', 'name' => 'Anáhuac 2', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1901', 'name' => 'Núñez', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1902', 'name' => 'Quintanilla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89853', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3901', 'name' => 'Santa Fe', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89858', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1903', 'name' => 'Tamaulipas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1904', 'name' => 'Niños Héroes', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89860', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1905', 'name' => 'Las Brisas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1906', 'name' => 'INFONAVIT Nicolás Bravo', 'zone_type' => 'Urbano', 'settlementtype_id' => '24','zipcode_id' => $idZip],
		['key' => '3797', 'name' => 'Nicolás Bravo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89865', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1907', 'name' => 'Carlos M del Pino', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1908', 'name' => 'Esfuerzo Obrero', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89866', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1909', 'name' => 'Municipio Libre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89867', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1911', 'name' => 'Yucatán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89868', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1912', 'name' => 'Unión Burocrática', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89869', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1916', 'name' => 'Las Américas', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1917', 'name' => 'Mante', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89870', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1918', 'name' => 'Nicolás Moreno', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1919', 'name' => 'Obrera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2866', 'name' => 'Luis Donaldo Colosio', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89880', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1887', 'name' => 'Gerardo Ferrara', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1920', 'name' => 'Altavista', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1922', 'name' => 'Ladrillera', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1923', 'name' => 'Plutarco Elías Calles', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89884', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1924', 'name' => 'Campesina', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2869', 'name' => 'Carolina Yucatán Dos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89885', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1925', 'name' => 'Obrera 2', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1952', 'name' => 'El Huastequillo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2490', 'name' => 'Country Club', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89886', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1926', 'name' => 'Paraíso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3176', 'name' => 'Unidad y Progreso', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89887', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1927', 'name' => 'Sección Agronómica', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2868', 'name' => 'Campesina Dos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89888', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1929', 'name' => 'Independencia', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3182', 'name' => 'Tomás Yarrington Ruvalcaba', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89889', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1930', 'name' => 'Miller', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89890', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1931', 'name' => 'Aquiles Serdán', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3505', 'name' => 'Santa Clara', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89893', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3506', 'name' => 'Jalisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89895', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1933', 'name' => 'Del Valle', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1934', 'name' => 'Moctezuma', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3504', 'name' => 'Parque Industrial PROMANTE (Aloe Vera)', 'zone_type' => 'Rural', 'settlementtype_id' => '28','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89896', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1936', 'name' => 'San Francisco', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89897', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1937', 'name' => 'José López Portillo', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2870', 'name' => 'Miravalle', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89898', 'locality' => 'Ciudad Mante', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1938', 'name' => 'Plan de Ayutla', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1939', 'name' => '20 de Septiembre', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89899', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0003', 'name' => 'Jesús García Corona', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
		['key' => '1941', 'name' => 'Ayuntamiento', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '2871', 'name' => 'Campestre', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3181', 'name' => 'Las Palmas', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
		['key' => '3183', 'name' => 'Quintero', 'zone_type' => 'Urbano', 'settlementtype_id' => '13','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89910', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0005', 'name' => 'San Miguel de la Mora', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '0008', 'name' => 'La Vega (La Pepa)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1943', 'name' => 'Cinco de Mayo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1945', 'name' => 'El Limón', 'zone_type' => 'Urbano', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '3016', 'name' => 'Tanchipa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3017', 'name' => 'Veinte de Noviembre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3024', 'name' => 'Benito Juárez', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89912', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1946', 'name' => 'Siete de Noviembre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3023', 'name' => 'Francisco Villa', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89913', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1947', 'name' => 'Las Palmas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3021', 'name' => 'Las Magdalenas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89914', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0006', 'name' => 'Guayalejo Número 2', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1948', 'name' => 'Plan de Iguala', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3018', 'name' => 'Puerto Rico', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3915', 'name' => 'San Rafael de los Castro', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89917', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0007', 'name' => 'Ladrillera de la Chaca', 'zone_type' => 'Rural', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3865', 'name' => 'Manuel Ávila Camacho', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89918', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1950', 'name' => 'Bellavista', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3019', 'name' => 'Primero de Mayo (Ampliación Veinte de Noviembre)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3020', 'name' => 'Mártires de la Reforma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3022', 'name' => 'Ignacio Allende', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89920', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1951', 'name' => 'La Mora', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3822', 'name' => 'Francisco I. Madero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89922', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1953', 'name' => 'Miguel Hidalgo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89923', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1954', 'name' => 'Dieciocho de Marzo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1955', 'name' => 'La Esperanza', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89925', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1956', 'name' => 'Dieciséis de Septiembre (El Nueve)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3012', 'name' => 'Faja de Oro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3013', 'name' => 'Álvaro Obregón (La Trinidad)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3014', 'name' => 'Úrsulo Galván', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3015', 'name' => 'Dieciocho de Febrero', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89928', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1957', 'name' => 'Plan de Ayala', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89929', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0009', 'name' => 'El Naranjo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1958', 'name' => 'Emiliano Zapata', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1959', 'name' => 'José María Morelos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89930', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1960', 'name' => 'Quintero', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89938', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0004', 'name' => 'El Abra', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89939', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1961', 'name' => 'El Abra (Ojo de Agua)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89940', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1962', 'name' => 'Celaya', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3007', 'name' => 'La Nueva Unión', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3008', 'name' => 'Las Ánimas', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3009', 'name' => 'El Refugio', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3010', 'name' => 'Triunfo Número Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3011', 'name' => 'Felipe Ángeles', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89942', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1963', 'name' => 'Lázaro Cárdenas Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '2999', 'name' => 'Los Dorados', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3000', 'name' => 'General Jesús González Ortega', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3006', 'name' => 'El Triunfo Número Uno', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89943', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '3003', 'name' => 'Magdaleno Aguilar', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3005', 'name' => 'Tantoán', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89945', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1964', 'name' => 'Santa Clara Número Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3002', 'name' => 'División del Norte', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3004', 'name' => 'El Olímpico', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3891', 'name' => 'La Reforma', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89950', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1965', 'name' => 'Los Aztecas', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1966', 'name' => 'Tantoyuquita', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89953', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '2998', 'name' => 'Tierra y Libertad', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3001', 'name' => 'Camotero Número Dos', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89955', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1967', 'name' => 'Nueva Apolonia', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89956', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Nuevo Tantoán', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '004', 'name' => 'Antiguo Morelos', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89960', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1968', 'name' => 'Antiguo Morelos', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '1969', 'name' => 'Morelos (La Loma)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3831', 'name' => 'San Francisco', 'zone_type' => 'Rural', 'settlementtype_id' => '22','zipcode_id' => $idZip],
		['key' => '3912', 'name' => 'Unidad Deportiva', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89963', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1970', 'name' => 'El Salvador', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1971', 'name' => 'Las Flores', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1972', 'name' => 'San José', 'zone_type' => 'Rural', 'settlementtype_id' => '21','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89965', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1973', 'name' => 'Praxedis Guerrero (El Pachón)', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89966', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1974', 'name' => 'Pueblo Viejo', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89967', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1975', 'name' => 'México Libre', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89968', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '0001', 'name' => 'Plan de San Luis', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '1976', 'name' => 'El Sauz', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
	]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89969', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1977', 'name' => 'Fortines y Emiliano Zapata (Fortines)', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
	]);


$idMun = DB::table('municipalities')->insertGetId(['key' => '028', 'name' => 'Nuevo Morelos', 'federal_entity_id' => $idFed]);

$idZip = DB::table('zipcodes')->insertGetId(['zip_code' => '89970', 'locality' => '', 'municipality_id' => $idMun]);

	DB::table('settlements')->insert([
		['key' => '1978', 'name' => 'Nuevo Morelos', 'zone_type' => 'Rural', 'settlementtype_id' => '19','zipcode_id' => $idZip],
		['key' => '1979', 'name' => 'Santa Cruz del Toro', 'zone_type' => 'Rural', 'settlementtype_id' => '8','zipcode_id' => $idZip],
		['key' => '3847', 'name' => 'Vivamos Mejor', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
		['key' => '3849', 'name' => 'Del Sol', 'zone_type' => 'Urbano', 'settlementtype_id' => '4','zipcode_id' => $idZip],
	]);




    }
}
