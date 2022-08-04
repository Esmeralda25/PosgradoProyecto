<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRubricasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'rubricas';

    /**
     * Run the migrations.
     * @table rubricas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre', 100);
            $table->enum('tipo', ['Numerica', 'Alfanumerica'])->nullable()->default(null);
            $table->integer('pe_id');

            $table->index(["pe_id"], 'fk_rubricas_pes1_idx');


            $table->foreign('pe_id', 'fk_rubricas_pes1_idx')
                ->references('id')->on('pes')
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
