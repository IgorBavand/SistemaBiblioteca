<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';
    protected $fillable=['id_aluno','nome_aluno','telefone','turma','endereco','email','qtd_emprestimos','qtd_emprestimos_pendentes'];
}
