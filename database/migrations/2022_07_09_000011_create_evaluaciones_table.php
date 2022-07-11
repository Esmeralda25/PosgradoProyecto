<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'evaluaciones';

    /**
     * Run the migrations.
     * @table evaluaciones
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('proyecto_id');
            $table->string('calificacion', 20)->nullable()->default(null);
            $table->string('observaciones')->nullable()->default(null);
            $table->date('fecha');
            $table->integer('docente_id')->nullable()->default(null);
            $table->integer('periodo_id')->nullable()->default(null);

            $table->index(["proyecto_id"], 'fk_evaluaciones_proyectos1_idx');

            $table->index(["docente_id"], 'fk_evaluaciones_docentes1_idx');

            $table->index(["periodo_id"], 'fk_evaluaciones_periodos1_idx');


            $table->foreign('docente_id', 'fk_evaluaciones_docentes1_idx')
                ->references('id')->on('docentes')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('periodo_id', 'fk_evaluaciones_periodos1_idx')
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
