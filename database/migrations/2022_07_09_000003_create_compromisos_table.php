<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompromisosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'compromisos';

    /**
     * Run the migrations.
     * @table compromisos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('titulo', 45)->nullable()->default(null);
            $table->integer('pe_id')->nullable()->unsigned()->default(null);

            $table->index(["pe_id"], 'fk_compromisos_pes1_idx');


            $table->foreign('pe_id', 'fk_compromisos_pes1_idx')
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
