<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    // use HasFactory;
    protected $table = "servicos";
    
    // campos da tabela
    protected $fillable = ['numero', 'veiculo_id', 'data', 'observacoes'];
    
    public function veiculo() {
        // um veiculo estará presente dentro de ator
        return $this->belongsTo("App\Models\Veiculo");
    }
}
