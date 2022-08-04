<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Evidencia;

class EvidenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $evidencias = array(
        array('id' => '1','adquirido_id' => '14','archivo' => NULL),
        array('id' => '2','adquirido_id' => '14','archivo' => NULL),
        array('id' => '3','adquirido_id' => '15','archivo' => NULL),
        array('id' => '4','adquirido_id' => '14','archivo' => NULL),
        array('id' => '5','adquirido_id' => '15','archivo' => NULL),
        array('id' => '12','adquirido_id' => '10','archivo' => '20_7_10_e_01 infografia.pdf')
      );
      foreach ($evidencias  as $evidencia ) {
          $Evidencia = Evidencia::create($evidencia);
      }
    }
}
