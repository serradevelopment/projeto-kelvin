<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas_enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cep');
            $table->string('cidade');
            $table->string('telefone');
            $table->string('uf');
            $table->unsignedBigInteger('empresa_id');
            $table->timestamps();
            $table->foreign('empresa_id')->references('id')->on('empresas')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas_enderecos');
    }
}
