<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaDados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('dados',function(Blueprint $table){
            $table->increments('id');
            $table->string('descricao');
            $table->date('data');
            $table->string('genero');
            $table->float('avaliacao');
            $table->string('comentario');
            $table->integer('album_id');

            $table->foreign('album_id')
                ->references('id')
                ->on('albums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dados');
    }
}
