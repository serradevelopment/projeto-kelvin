<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarefasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao');
            $table->date('data');
            $table->integer('qtd_horas');
            $table->unsignedBigInteger('estagio_id');
            $table->boolean('estagiario_ok')->default(false);
            $table->boolean('professor_ok')->default(false);
            $table->boolean('empresa_ok')->default(false);
            $table->foreign('estagio_id')->references('id')->on('estagios')->cascadeOnDelete();
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
        Schema::dropIfExists('tarefas');
    }
}
