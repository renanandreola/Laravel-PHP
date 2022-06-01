<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;
use App\Http\Requests\FuncionarioRequest;

class FuncionariosController extends Controller
{
    public function index() {
        $funcionarios = Funcionario::orderBy('nome')->paginate(5);
        // dd($funcionarios);
        return view('funcionarios.index', ['funcionarios'=>$funcionarios]);
    }

    public function create() {
        $funcionarios = Funcionario::All();
        // dd($funcionarios);
        return view('funcionarios.create');
    }

    public function store(FuncionarioRequest $request) {
        $novo_funcionario = $request->all();
        Funcionario::create($novo_funcionario);

        return redirect()->route('funcionarios');
    }

    public function destroy($id) {
        Funcionario::find($id)->delete();
        return redirect()->route('funcionarios');
    }

    public function edit($id) {
        $funcionario = Funcionario::find($id);
        return view('funcionarios.edit', compact('funcionario'));
    }
  
    public function update(FuncionarioRequest $request, $id) {
        Funcionario::find($id)->update($request->all());
  
        return redirect()->route('funcionarios');
    }
}
