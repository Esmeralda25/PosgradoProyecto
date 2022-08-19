<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'periodos';

    /**
     * Run the migrations.
     * @table periodos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre', 100);
            $table->date('fechaInicio')->nullable()->default(null);
            $table->date('fechaFin')->nullable()->default(null);
            $table->enum('estado', ['Inicio', 'Comprometerse', 'Seguimiento', 'Reportar', 'Evaluacion', 'Concluido'])->nullable()->default(null);
            $table->integer('rubrica_id')->unsigned()->nullable()->default(null);
            $table->integer('generacion_id')->unsigned();

            $table->index(["rubrica_id"], 'fk_Periodos_Rubricas1_idx');

            $table->index(["generacion_id"], 'fk_periodos_generaciones1_idx');


            $table->foreign('generacion_id', 'fk_periodos_generaciones1_idx')
                ->references('id')->on('generaciones')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('rubrica_id', 'fk_Periodos_Rubricas1_idx')
                ->references('id')->on('rubricas')
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
