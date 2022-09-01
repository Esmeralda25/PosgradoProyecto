<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'proyectos';

    /**
     * Run the migrations.
     * @table proyectos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('titulo', 100);
            $table->string('hipotesis');
            $table->string('objetivos');
            $table->string('objetivose')->nullable()->default(null);
            $table->string('reporte')->nullable()->default(null);
            $table->float('avance')->nullable()->default(null);
            $table->integer('estudiante_id')->unsigned()->nullable()->default(null);
            $table->integer('comite_id')->unsigned()->nullable()->default(null);
            $table->integer('periodo_id')->unsigned()->nullable()->default(null);
            $table->integer('compromiso')->nullable()->default(null);

            $table->unique(["comite_id"], 'comite_UNIQUE');

            $table->index(["estudiante_id"], 'fk_Proyectos_estudiantes1_idx');

            $table->index(["comite_id"], 'fk_proyectos_comite1_idx');

            $table->index(["periodo_id"], 'fk_proyectos_periodos1_idx');

            $table->index(["compromiso"], 'compromiso');


            $table->foreign('comite_id', 'comite_UNIQUE')
                ->references('id')->on('comites')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('estudiante_id', 'fk_Proyectos_estudiantes1_idx')
                ->references('id')->on('estudiantes')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('periodo_id', 'fk_proyectos_periodos1_idx')
                ->references('id')->on('periodos')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
