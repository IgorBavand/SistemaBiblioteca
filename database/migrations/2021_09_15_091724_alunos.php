<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id_aluno');
            $table->string('nome_aluno');
            $table->string('telefone');
            $table->string('turma');
            $table->string('endereco');
            $table->string('email');
            //tratar no sistema
            $table->integer('qtd_emprestimos');
            $table->integer('qtd_emprestimos_pendentes');
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
        Schema::dropIfExists('alunos');
    }
}
