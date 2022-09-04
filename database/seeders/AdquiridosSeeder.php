<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Adquirido;

class AdquiridosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $adquiridos = array(
        array('id' => '1','que' => 'conferencias','cuantos_programo' => '3','cuantos_cumplio' => NULL,'proyecto_id' => '2','periodo_id' => '15'),
        array('id' => '2','que' => 'Articulos JCR Aceptados o Publicados','cuantos_programo' => '1','cuantos_cumplio' => NULL,'proyecto_id' => '2','periodo_id' => '15'),
        array('id' => '3','que' => 'Conferencias Internacionales.','cuantos_programo' => '3','cuantos_cumplio' => NULL,'proyecto_id' => '2','periodo_id' => '15'),
        array('id' => '10','que' => 'Compromiso 2p','cuantos_programo' => '2','cuantos_cumplio' => '2','proyecto_id' => '7','periodo_id' => '16'),
        array('id' => '11','que' => 'Modelo de utilidad o patente','cuantos_programo' => '3','cuantos_cumplio' => '3','proyecto_id' => '7','periodo_id' => '16'),
        array('id' => '14','que' => 'Compromiso 2p','cuantos_programo' => '3','cuantos_cumplio' => '3','proyecto_id' => '6','periodo_id' => '16'),
        array('id' => '15','que' => 'Compromiso 1p','cuantos_programo' => '3','cuantos_cumplio' => '3','proyecto_id' => '6','periodo_id' => '16')
      );
      foreach ($adquiridos  as $adquirido ) {
          $Adquirido = Adquirido::create($adquirido);
      }
    }
}
