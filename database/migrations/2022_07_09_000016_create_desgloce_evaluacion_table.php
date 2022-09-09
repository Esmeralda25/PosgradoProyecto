<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesgloceEvaluacionTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'desgloce_evaluacion';

    /**
     * Run the migrations.
     * @table desgloce_evaluacion
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('evaluacion_id')->unsigned()->nullable()->default(null);
            $table->string('concepto')->nullable()->default(null);
            $table->string('valor', 45)->nullable()->default(null);
            $table->string('observacion')->nullable()->default(null);

            $table->index(["evaluacion_id"], 'fk_desgloce_evaluacion_evaluaciones1');


            $table->foreign('evaluacion_id', 'fk_desgloce_evaluacion_evaluaciones1')
                ->references('id')->on('evaluaciones')
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
