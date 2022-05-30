<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peca extends Model
{
    // use HasFactory;
    protected $table = "pecas";
    protected $fillable = ['nome', 'codigo', 'fornecedor', 'aplicacao', 'estoque'];
}
