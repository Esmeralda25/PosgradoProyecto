<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(PesSeeder::class);
        $this->call(DocentesSeeder::class);
            $this->call(ComitesSeeder::class);
            $this->call(CompromisosSeeder::class);
            
        $this->call(AdscripcionesSeeder::class);        

        $this->call(RubricasSeeder::class);        
            $this->call(CriteriosSeeder::class);

        $this->call(GeneracionesSeeder::class);
        $this->call(PeriodosSeeder::class);
        $this->call(EstudiantesSeeder::class);
        $this->call(ProyectosSeeder::class);

        $this->call(AdquiridosSeeder::class);
        $this->call(ActividadesSeeder::class);
        $this->call(EvaluacionesSeeder::class);
        $this->call(DesglocesSeeder::class);
        $this->call(EvidenciasSeeder::class);
        $this->call(ReportesSeeder::class);
    }
}
