<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peca;
use App\Http\Requests\PecaRequest;

class PecasController extends Controller
{
    public function index() {
        $pecas = Peca::orderBy('nome')->paginate(5);
        // dd($pecas);
        return view('pecas.index', ['pecas'=>$pecas]);
    }

    public function create() {
        $pecas = Peca::All();
        // dd($pecas);
        return view('pecas.create');
    }

    public function store(PecaRequest $request) {
        $nova_peca = $request->all();
        Peca::create($nova_peca);

        return redirect()->route('pecas');
    }

    public function destroy($id) {
        Peca::find($id)->delete();
        return redirect()->route('pecas');
    }

    public function edit($id) {
        $peca = Peca::find($id);
        return view('pecas.edit', compact('peca'));
    }
  
    public function update(PecaRequest $request, $id) {
        Peca::find($id)->update($request->all());
  
        return redirect()->route('pecas');
    }
}