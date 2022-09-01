<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntegrantesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'integrantes';

    /**
     * Run the migrations.
     * @table integrantes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('quien')->unsigned();
            $table->string('puesto', 45)->nullable()->default(null);

            $table->index(["quien"], 'fk_comite_docentes1_idx');


            $table->foreign('quien', 'fk_comite_docentes1_idx')
                ->references('id')->on('docentes')
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
