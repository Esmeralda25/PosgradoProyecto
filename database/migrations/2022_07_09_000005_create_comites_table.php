<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComitesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'comites';

    /**
     * Run the migrations.
     * @table comites
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('asesor');
            $table->integer('revisor1');
            $table->integer('revisor2');
            $table->integer('revisor3');

            $table->index(["asesor"], 'fk_comite_docentes2_idx');

            $table->index(["revisor1"], 'fk_comite_docentes3_idx');

            $table->index(["revisor2"], 'fk_comite_docentes4_idx');

            $table->index(["revisor3"], 'fk_comite_docentes5_idx');


            $table->foreign('asesor', 'fk_comite_docentes2_idx')
                ->references('id')->on('docentes')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('revisor1', 'fk_comite_docentes3_idx')
                ->references('id')->on('docentes')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('revisor2', 'fk_comite_docentes4_idx')
                ->references('id')->on('docentes')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('revisor3', 'fk_comite_docentes5_idx')
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
