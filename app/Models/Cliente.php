<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    // use HasFactory;
    protected $table = "clientes";

    // campos da tabela
    protected $fillable = ['nome', 'cpf', 'idade', 'sexo', 'telefone', 'email', 'cep', 'rua', 'bairro', 'cidade', 'estado', 'numero'];
}
