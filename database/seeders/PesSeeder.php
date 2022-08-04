<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pe;
use Illuminate\Support\Facades\Hash;

class PesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pes = array(
            array('id' => '1','coordinador' => 'Coordinador 1','correo' => 'xyz@gmail.com','password' => Hash::make( 'paso' ),'nombre' => 'Programa educativo 1'),
            array('id' => '2','coordinador' => 'Keyla Esmeralda','correo' => 'keyla@gmail.com','password' => Hash::make( 'paso' ),'nombre' => 'Maestría en Ingeniería Bioquímica '),
            array('id' => '3','coordinador' => 'César Gabriel','correo' => 'cesar@gmail.com','password' => Hash::make( 'paso' ),'nombre' => 'Maestría en Ciencias de Ingeniería Mecatrónica '),
            array('id' => '4','coordinador' => 'Jose Perez','correo' => 'jose@gmail.com','password' => Hash::make( 'paso' ),'nombre' => 'Doctorado en Ciencias de los Alimentos y Biotecnología '),
            array('id' => '5','coordinador' => 'Vanessa del Carmen','correo' => 'vanessa@gmail.com','password' => Hash::make( 'paso' ),'nombre' => 'Doctorado en Ciencias de la Ingeniería '),
            array('id' => '6','coordinador' => 'Coordinador de prueba','correo' => 'coordinador@gmail.com','password' => Hash::make( 'paso' ),'nombre' => 'Programa educativo de prueba'),
            array('id' => '7','coordinador' => 'prueba2','correo' => 'prueba2@gmail.com','password' => Hash::make( 'paso' ),'nombre' => 'prueba2')
          );
        foreach ($pes  as $pe ) {
            $Pe = Pe::create($pe);
        }
    }
}
