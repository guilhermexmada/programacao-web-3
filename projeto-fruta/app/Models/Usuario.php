<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $tabela = 'usuarios';
    protected $fillable = ['nome, email, senha, cidade, idade'];
    
}
