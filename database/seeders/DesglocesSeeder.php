<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DesgloceEvaluacion as Desgloce;

class DesglocesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $desgloces = array(
        array('id' => '13','evaluacion_id' => '5','concepto' => 'Criterio1','valor' => '100','observacion' => 'todo ok'),
        array('id' => '14','evaluacion_id' => '5','concepto' => 'Criterio 2','valor' => '100','observacion' => 'todo ok'),
        array('id' => '15','evaluacion_id' => '5','concepto' => 'Criterio 3','valor' => '100','observacion' => 'todo ok'),
        array('id' => '16','evaluacion_id' => '6','concepto' => 'Criterio1','valor' => '90','observacion' => 'Le falto algo'),
        array('id' => '17','evaluacion_id' => '6','concepto' => 'Criterio 2','valor' => '90','observacion' => 'Le falto algo'),
        array('id' => '18','evaluacion_id' => '6','concepto' => 'Criterio 3','valor' => '90','observacion' => 'Le falto algo')
      );
      
      foreach ($desgloces  as $desgloce ) {
          $Desgloce = Desgloce::create($desgloce);
      }
    }
}
