<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    // use HasFactory;
    protected $table = "veiculos";
    protected $fillable = ['cliente_id', 'placa', 'cor', 'marca', 'modelo', 'motorizacao', 'ano'];
}
