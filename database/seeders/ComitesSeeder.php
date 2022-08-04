<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comite;

class ComitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $comites = array(
        array('id' => '1','asesor' => '1','revisor1' => '4','revisor2' => '6','revisor3' => '14'),
        array('id' => '3','asesor' => '4','revisor1' => '4','revisor2' => '4','revisor3' => '4'),
        array('id' => '4','asesor' => '4','revisor1' => '4','revisor2' => '5','revisor3' => '6'),
        array('id' => '5','asesor' => '14','revisor1' => '1','revisor2' => '5','revisor3' => '14'),
        array('id' => '6','asesor' => '12','revisor1' => '11','revisor2' => '13','revisor3' => '12'),
        array('id' => '7','asesor' => '11','revisor1' => '13','revisor2' => '6','revisor3' => '28'),
        array('id' => '8','asesor' => '32','revisor1' => '33','revisor2' => '34','revisor3' => '12'),
        array('id' => '9','asesor' => '32','revisor1' => '33','revisor2' => '34','revisor3' => '12')
      );

      
        foreach ($comites  as $comite ) {
            $Comite = Comite::create($comite);
        }
    }
}
