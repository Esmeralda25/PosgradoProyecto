<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Adscripcion;

class AdscripcionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $adscripciones = array(
        array('id' => '1','pe_id' => '2','docentes_id' => '1'),
        array('id' => '2','pe_id' => '2','docentes_id' => '5'),
        array('id' => '4','pe_id' => '3','docentes_id' => '7'),
        array('id' => '5','pe_id' => '3','docentes_id' => '8'),
        array('id' => '7','pe_id' => '4','docentes_id' => '9'),
        array('id' => '8','pe_id' => '4','docentes_id' => '10'),
        array('id' => '9','pe_id' => '4','docentes_id' => '6'),
        array('id' => '10','pe_id' => '5','docentes_id' => '12'),
        array('id' => '11','pe_id' => '5','docentes_id' => '11'),
        array('id' => '12','pe_id' => '5','docentes_id' => '13'),
        array('id' => '13','pe_id' => '5','docentes_id' => '6'),
        array('id' => '14','pe_id' => '2','docentes_id' => '6'),
        array('id' => '15','pe_id' => '2','docentes_id' => '14'),
        array('id' => '16','pe_id' => '1','docentes_id' => '16'),
        array('id' => '17','pe_id' => '1','docentes_id' => '17'),
        array('id' => '18','pe_id' => '1','docentes_id' => '18'),
        array('id' => '19','pe_id' => '2','docentes_id' => '20'),
        array('id' => '20','pe_id' => '3','docentes_id' => '24'),
        array('id' => '21','pe_id' => '3','docentes_id' => '21'),
        array('id' => '22','pe_id' => '3','docentes_id' => '23'),
        array('id' => '23','pe_id' => '4','docentes_id' => '19'),
        array('id' => '24','pe_id' => '1','docentes_id' => '26'),
        array('id' => '25','pe_id' => '1','docentes_id' => '27'),
        array('id' => '26','pe_id' => '4','docentes_id' => '25'),
        array('id' => '27','pe_id' => '5','docentes_id' => '28'),
        array('id' => '28','pe_id' => '2','docentes_id' => '29'),
        array('id' => '29','pe_id' => '2','docentes_id' => '30'),
        array('id' => '30','pe_id' => '2','docentes_id' => '31'),
        array('id' => '31','pe_id' => '6','docentes_id' => '32'),
        array('id' => '32','pe_id' => '6','docentes_id' => '33'),
        array('id' => '33','pe_id' => '6','docentes_id' => '34'),
        array('id' => '39','pe_id' => '6','docentes_id' => '12')
      );
      foreach ($adscripciones  as $adscripcion ) {
          $Adscripcion = Adscripcion::create($adscripcion);
      }
    }
}
