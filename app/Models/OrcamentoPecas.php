<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrcamentoPecas extends Model
{
    // use HasFactory;
    protected $table = "orcamento_pecas";
    protected $fillable = ['orcamento_id', 'peca_id'];

    public function peca() {
        return $this->belongsTo("App\Models\Peca");
    }
}
