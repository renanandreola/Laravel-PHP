<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function index() {
        $clientes = Cliente::All();
        // dd($clientes);
        return view('clientes.index', ['clientes'=>$clientes]);
    }

    public function create() {
        $clientes = Cliente::All();
        // dd($clientes);
        return view('clientes.create');
    }

    public function store(Request $request) {
        $novo_cliente = $request->all();
        Cliente::create($novo_cliente);

        return redirect('clientes');
    }
}
