<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriteriosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'criterios';

    /**
     * Run the migrations.
     * @table criterios
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('rubrica_id');
            $table->string('descripcion');

            $table->index(["rubrica_id"], 'fk_Criterios_Rubricas1_idx');


            $table->foreign('rubrica_id', 'fk_Criterios_Rubricas1_idx')
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
