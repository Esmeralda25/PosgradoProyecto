<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estudiante;
use Illuminate\Support\Facades\Hash;

class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //Hash::make( 'paso' )
          $estudiantes = array(
            array('id' => '2','nombre' => 'Cesar Gabriel','matricula' => '17270689','correo' => 'estudiante@gmail.com','password' => Hash::make( 'paso' ),'pe_id' => '5','periodo_id' => '15'),
            array('id' => '3','nombre' => 'Vanessa del Carmen','matricula' => '17270690','correo' => 'estudiante2@gmail.com','password' => Hash::make( 'paso' ),'pe_id' => '3','periodo_id' => '15'),
            array('id' => '4','nombre' => 'Alberto Rojas','matricula' => '17270691','correo' => 'beto@gmail.com','password' => Hash::make( 'paso' ),'pe_id' => '2','periodo_id' => '15'),
            array('id' => '5','nombre' => 'Juan Perez','matricula' => '17270692','correo' => 'jperez@tuxtla.tecnm.mx','password' => Hash::make( 'paso' ),'pe_id' => '5','periodo_id' => null),
            array('id' => '6','nombre' => 'Javier Perez','matricula' => '17270693','correo' => 'javier@gmail.com','password' => Hash::make( 'paso' ),'pe_id' => '1','periodo_id' => null),
            array('id' => '7','nombre' => 'Jacobo Lopez','matricula' => '17270694','correo' => 'jacobo@gmail.com','password' => Hash::make( 'paso' ),'pe_id' => '1','periodo_id' => null),
            array('id' => '8','nombre' => 'Marina Espinoza','matricula' => '17270695','correo' => 'marina@gmail.com','password' => Hash::make( 'paso' ),'pe_id' => '1','periodo_id' => null),
            array('id' => '9','nombre' => 'Antonieta Sanchez','matricula' => '17270696','correo' => 'antonieta@gmail.com','password' => Hash::make( 'paso' ),'pe_id' => '1','periodo_id' => null),
            array('id' => '10','nombre' => 'Yael Gomez','matricula' => '17270697','correo' => 'yael@gmail.com','password' => Hash::make( 'paso' ),'pe_id' => '2','periodo_id' => null),
            array('id' => '11','nombre' => 'Natalia Oseguera','matricula' => '17270698','correo' => 'natalia@gmail.com','password' => Hash::make( 'paso' ),'pe_id' => '2','periodo_id' => null),
            array('id' => '12','nombre' => 'Yesenia Vera','matricula' => '17270699','correo' => 'yesenia@gmail.com','password' => Hash::make( 'paso' ),'pe_id' => '2','periodo_id' => null),
            array('id' => '13','nombre' => 'Armando Gutierrez','matricula' => '17270700','correo' => 'armando@gmail.com','password' => Hash::make( 'paso' ),'pe_id' => '2','periodo_id' => null),
            array('id' => '14','nombre' => 'Rosi Dominguez','matricula' => '17270701','correo' => 'rosi@gmail.com','password' => Hash::make( 'paso' ),'pe_id' => '3','periodo_id' => null),
            array('id' => '15','nombre' => 'Guadalupe Ruiz','matricula' => '17270702','correo' => 'guadalupe@gmail.com','password' => Hash::make( 'paso' ),'pe_id' => '3','periodo_id' => null),
            array('id' => '16','nombre' => 'Jesus Gomez','matricula' => '17270703','correo' => 'jesus@gmail.com','password' => Hash::make( 'paso' ),'pe_id' => '4','periodo_id' => null),
            array('id' => '17','nombre' => 'Yahir Gomez','matricula' => '17270704','correo' => 'yahir@gmail.com','password' => Hash::make( 'paso' ),'pe_id' => '4','periodo_id' => null),
            array('id' => '18','nombre' => 'Sofia Garcia','matricula' => '17270705','correo' => 'sofia@gmail.com','password' => Hash::make( 'paso' ),'pe_id' => '5','periodo_id' => null),
            array('id' => '19','nombre' => 'Aurora','matricula' => '17270706','correo' => 'aurora@gmail.com','password' => Hash::make( 'paso' ),'pe_id' => '5','periodo_id' => null),
            array('id' => '20','nombre' => 'PeHugo','matricula' => '17270707','correo' => 'pehugo@gmail.com','password' => Hash::make( 'paso' ),'pe_id' => '6','periodo_id' => '16'),
            array('id' => '21','nombre' => 'PeLuis','matricula' => '17270708','correo' => 'peluis@gmail.com','password' => Hash::make( 'paso' ),'pe_id' => '6','periodo_id' => '16')
          );

        foreach ($estudiantes  as $estudiante ) {
            $Estudiante = Estudiante::create($estudiante);
        }
    }
}
