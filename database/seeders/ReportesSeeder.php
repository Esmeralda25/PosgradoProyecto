<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reporte;

class ReportesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $reportes = array(
        array('id' => '1','reporte' => '20_7_16_r_70.pdf','proyecto_id' => '7','periodo_id' => '16')
      );      
      foreach ($reportes  as $reporte ) {
            $Reporte = Reporte::create($reporte);
      }
    }
}
