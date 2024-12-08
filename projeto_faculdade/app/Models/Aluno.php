<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //nome da tabela utilizada
    protected $table = 'alunos';

    //atributos preenchidos pela model
    protected $fillable = ['id','nome','sobrenome','escola','serie','telefone','endereco','data_nascimento'];
}
