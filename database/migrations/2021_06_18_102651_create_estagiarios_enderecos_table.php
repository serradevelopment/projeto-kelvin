<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstagiariosEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estagiarios_enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cep');
            $table->string('cidade');
            $table->string('telefone');
            $table->string('uf');
            $table->unsignedBigInteger('estagiario_id');
            $table->timestamps();
            $table->foreign('estagiario_id')->references('id')->on('estagiarios')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estagiarios_enderecos');
    }
}
