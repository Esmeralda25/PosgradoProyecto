<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvidenciasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'evidencias';

    /**
     * Run the migrations.
     * @table evidencias
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('adquirido_id');
            $table->string('archivo', 45)->nullable()->default(null);

            $table->index(["adquirido_id"], 'fk_evidencias_adquiridos1_idx');


            $table->foreign('adquirido_id', 'fk_evidencias_adquiridos1_idx')
                ->references('id')->on('adquiridos')
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
