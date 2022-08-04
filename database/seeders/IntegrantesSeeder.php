<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comite;

class IntegrantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $integrantes = array(
// no se usa
      );
      
      
        foreach ($integrantes  as $comite ) {
            $Comite = Comite::create($comite);
        }
    }
}
