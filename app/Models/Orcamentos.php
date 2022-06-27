<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamentos extends Model
{
    // use HasFactory;
    protected $table = "orcamentos";
    protected $fillable = ['numero', 'veiculo_id', 'data', 'valor'];
    
    public function veiculo() {
        // um veiculo estará presente dentro de orcamento
        return $this->belongsTo("App\Models\Veiculo");
    }

    public function pecas() {
        // O segundo parâmetro é para forçar a FK - estava pegando orcamentos_id
        return $this->hasMany("App\Models\OrcamentoPecas", "orcamento_id");
    }
}
