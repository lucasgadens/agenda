<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id');
            //$table->foreign('contato_id')->references('id')->on('contatos')->onDelete('cascade')->onUpdate('cascade'); 
            $table->string('cep')->unique(); 
            $table->string('rua'); 
            $table->integer('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');           

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
