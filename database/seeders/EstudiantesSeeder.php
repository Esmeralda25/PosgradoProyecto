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
            array('id' => '2','nombre' => 'Cesar Gabriel','correo' => 'estudiante@gmail.com','password' => Hash::make( 'paso' ),'pes_id' => '5','periodo_id' => '15'),
            array('id' => '3','nombre' => 'Vanessa del Carmen','correo' => 'estudiante2@gmail.com','password' => Hash::make( 'paso' ),'pes_id' => '3','periodo_id' => '15'),
            array('id' => '4','nombre' => 'Alberto Rojas','correo' => 'beto@gmail.com','password' => Hash::make( 'paso' ),'pes_id' => '2','periodo_id' => '15'),
            array('id' => '5','nombre' => 'Juan Perez','correo' => 'jperez@tuxtla.tecnm.mx','password' => Hash::make( 'paso' ),'pes_id' => '5','periodo_id' => null),
            array('id' => '6','nombre' => 'Javier Perez','correo' => 'javier@gmail.com','password' => Hash::make( 'paso' ),'pes_id' => '1','periodo_id' => null),
            array('id' => '7','nombre' => 'Jacobo Lopez','correo' => 'jacobo@gmail.com','password' => Hash::make( 'paso' ),'pes_id' => '1','periodo_id' => null),
            array('id' => '8','nombre' => 'Marina Espinoza','correo' => 'marina@gmail.com','password' => Hash::make( 'paso' ),'pes_id' => '1','periodo_id' => null),
            array('id' => '9','nombre' => 'Antonieta Sanchez','correo' => 'antonieta@gmail.com','password' => Hash::make( 'paso' ),'pes_id' => '1','periodo_id' => null),
            array('id' => '10','nombre' => 'Yael Gomez','correo' => 'yael@gmail.com','password' => Hash::make( 'paso' ),'pes_id' => '2','periodo_id' => null),
            array('id' => '11','nombre' => 'Natalia Oseguera','correo' => 'natalia@gmail.com','password' => Hash::make( 'paso' ),'pes_id' => '2','periodo_id' => null),
            array('id' => '12','nombre' => 'Yesenia Vera','correo' => 'yesenia@gmail.com','password' => Hash::make( 'paso' ),'pes_id' => '2','periodo_id' => null),
            array('id' => '13','nombre' => 'Armando Gutierrez','correo' => 'armando@gmail.com','password' => Hash::make( 'paso' ),'pes_id' => '2','periodo_id' => null),
            array('id' => '14','nombre' => 'Rosi Dominguez','correo' => 'rosi@gmail.com','password' => Hash::make( 'paso' ),'pes_id' => '3','periodo_id' => null),
            array('id' => '15','nombre' => 'Guadalupe Ruiz','correo' => 'guadalupe@gmail.com','password' => Hash::make( 'paso' ),'pes_id' => '3','periodo_id' => null),
            array('id' => '16','nombre' => 'Jesus Gomez','correo' => 'jesus@gmail.com','password' => Hash::make( 'paso' ),'pes_id' => '4','periodo_id' => null),
            array('id' => '17','nombre' => 'Yahir Gomez','correo' => 'yahir@gmail.com','password' => Hash::make( 'paso' ),'pes_id' => '4','periodo_id' => null),
            array('id' => '18','nombre' => 'Sofia Garcia','correo' => 'sofia@gmail.com','password' => Hash::make( 'paso' ),'pes_id' => '5','periodo_id' => null),
            array('id' => '19','nombre' => 'Aurora','correo' => 'aurora@gmail.com','password' => Hash::make( 'paso' ),'pes_id' => '5','periodo_id' => null),
            array('id' => '20','nombre' => 'PeHugo','correo' => 'pehugo@gmail.com','password' => Hash::make( 'paso' ),'pes_id' => '6','periodo_id' => '16'),
            array('id' => '21','nombre' => 'PeLuis','correo' => 'peluis@gmail.com','password' => Hash::make( 'paso' ),'pes_id' => '6','periodo_id' => '16')
          );

        foreach ($estudiantes  as $estudiante ) {
            $Estudiante = Estudiante::create($estudiante);
        }
    }
}
