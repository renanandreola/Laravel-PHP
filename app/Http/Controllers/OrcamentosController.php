<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orcamentos;
use App\Models\OrcamentoPecas;
use App\Http\Requests\OrcamentoRequest;

class OrcamentosController extends Controller
{
    public function index() {
        $orcamentos = Orcamentos::orderBy('data')->paginate(5);
        // dd($orcamentos);
        return view('orcamentos.index', ['orcamentos'=>$orcamentos]);
    }

    public function create() {
        $orcamentos = Orcamentos::All();
        // dd($orcamentos);
        return view('orcamentos.create');
    }

    // public function store(OrcamentoRequest $request) {
    //     $novo_orcamento = $request->all();
    //     Orcamentos::create($novo_orcamento);

    //     return redirect()->route('orcamentos');
    // }

    public function store(Request $request) {
        // ['numero', 'veiculo_id', 'data', 'itens', 'valor']
        $orcamento = Orcamentos::create([
            'numero'=>$request->get('numero'),
            'veiculo_id'=>$request->get('veiculo_id'),
            'data'=>$request->get('data'),
            'valor'=>$request->get('valor')
        ]);

        $pecas = $request->pecas;
        foreach($pecas as $a => $value) {
            OrcamentoPecas::create([
                'orcamento_id'=>$orcamento->id,
                'peca_id'=>$pecas[$a]
            ]);
        }

        return redirect()->route('orcamentos');
    }

    public function destroy($id) {
        Orcamentos::find($id)->delete();
        return redirect()->route('orcamentos');
    }

    public function edit($id) {
        $orcamento = Orcamentos::find($id);
        return view('orcamentos.edit', compact('orcamento'));
    }
  
    public function update(OrcamentoRequest $request, $id) {
        Orcamentos::find($id)->update($request->all());
  
        return redirect()->route('orcamentos');
    }
}
