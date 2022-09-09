<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Generacion;

class GeneracionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $generaciones = array(
        array('id' => '5','nombre' => 'Primer Genacion Maes','descripcion' => 'Sexto periodo','pe_id' => '2'),
        array('id' => '6','nombre' => 'Segunda Genacion Periodo Doc','descripcion' => 'Noveno periodo','pe_id' => '2'),
        array('id' => '7','nombre' => '2020 - 2022','descripcion' => 'Alumnos que entran durante la pandemia','pe_id' => '5'),
        array('id' => '8','nombre' => '2021 - 2023','descripcion' => 'Alumnos que entran durante la pandemia 21','pe_id' => '5'),
        array('id' => '9','nombre' => 'Generacion 2020 - 2023','descripcion' => 'Entraron en 2020','pe_id' => '6'),
        array('id' => '10','nombre' => 'Generacion 2021 - 2024','descripcion' => 'Entraron en 2021.','pe_id' => '6')
      );
            
        foreach ($generaciones  as $generacion ) {
            $Generacion = Generacion::create($generacion);
        }
    }
}
