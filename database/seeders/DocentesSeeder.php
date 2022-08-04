<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Docente;
use Illuminate\Support\Facades\Hash;

class DocentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $docentes = array(
            array('id' => '1','nombre' => 'César Gabriel','correo' => 'docente@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '2','nombre' => 'Rosa Perez','correo' => 'keyla@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '3','nombre' => 'Julio Cesar','correo' => 'julio@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '4','nombre' => 'BJmena','correo' => 'bjimena@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '5','nombre' => 'Bruno Lopez','correo' => 'barturo@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '6','nombre' => 'Paola Monserrath','correo' => 'paola@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '7','nombre' => 'mClaudia Utrilla','correo' => 'claudia@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '8','nombre' => 'mZoila Utrilla','correo' => 'zoila@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '9','nombre' => 'aCarlos Ortega','correo' => 'carlos@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '10','nombre' => 'aGraciela Perez','correo' => 'graciela@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '11','nombre' => 'iGeovany Ortega','correo' => 'geovany@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '12','nombre' => 'iEsperanza Utrilla','correo' => 'esperanza@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '13','nombre' => 'iMaria Utrilla','correo' => 'maria@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '14','nombre' => 'Ruben Grajales Coutiño','correo' => 'ruben.gc@tuxtla.tecnm.mx','password' => Hash::make( 'paso' )),
            array('id' => '16','nombre' => 'Kenia Rodriguez','correo' => 'kenia@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '17','nombre' => 'Oliver Sanchez','correo' => 'Oliver@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '18','nombre' => 'Marisol Bermudez','correo' => 'marisol@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '19','nombre' => 'Rubi Ramirez','correo' => 'rubi@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '20','nombre' => 'Anahi Gonzalez','correo' => 'anahi@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '21','nombre' => 'Carmen Espinoza','correo' => 'carmen@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '22','nombre' => 'Gabriel Gutierrez','correo' => 'gabriel@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '23','nombre' => 'Mateo Salazar','correo' => 'mateo@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '24','nombre' => 'Andrea Gomez','correo' => 'andrea@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '25','nombre' => 'Nicolas Rodriguez','correo' => 'nicolas@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '26','nombre' => 'Edwin Coronel','correo' => 'edwin@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '27','nombre' => 'Joseline Yong','correo' => 'joseline@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '28','nombre' => 'Patricia Ramirez','correo' => 'patricia@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '29','nombre' => 'Pablo Hernandez','correo' => 'pablo@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '30','nombre' => 'Filemon Ramirez','correo' => 'filemon@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '31','nombre' => 'Nuevo docente','correo' => 'nuevodocente@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '32','nombre' => 'PdPedro','correo' => 'pdpedro@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '33','nombre' => 'PdPablo','correo' => 'pdpablo@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '34','nombre' => 'PdPaco','correo' => 'pdpaco@gmail.com','password' => Hash::make( 'paso' )),
            array('id' => '36','nombre' => 'pdw','correo' => 'pdw@gmail.com','password' => Hash::make( 'paso' ))
          );
        

        foreach ($docentes  as $docente ) {
            $Docente = Docente::create($docente);
        }
    }
}
