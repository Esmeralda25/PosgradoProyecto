<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdquiridosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'adquiridos';

    /**
     * Run the migrations.
     * @table adquiridos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('que', 45)->nullable()->default(null);
            $table->integer('cuantos_prog')->nullable()->default(null);
            $table->integer('cuantos_cumplidos')->nullable()->default(null);
            $table->integer('proyecto_id');
            $table->integer('periodos_id');

            $table->index(["proyecto_id"], 'fk_adquiridos_proyectos1_idx');

            $table->index(["periodos_id"], 'fk_adquiridos_periodos1_idx');


            $table->foreign('periodos_id', 'fk_adquiridos_periodos1_idx')
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
