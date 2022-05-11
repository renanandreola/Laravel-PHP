<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function index() {
        $clientes = Cliente::All();
        // dd($clientes);
        return view('clientes', ['clientes'=>$clientes]);
    }
}
