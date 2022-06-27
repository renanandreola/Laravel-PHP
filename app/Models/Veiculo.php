<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    // use HasFactory;
    protected $table = "veiculos";

    // campos da tabela
    protected $fillable = ['cliente_id', 'placa', 'cor', 'marca', 'modelo', 'motorizacao', 'ano'];
   
    public function servicos() {
        return $this->hasMany("App\Models\Servico");
    }

    public function cliente() {
        return $this->belongsTo("App\Models\Cliente");
    }

    public function orcamentos() {
        return $this->hasMany("App\Models\Orcamentos");
    }

}
