<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public readonly Cliente $cliente;

    public function __construct()
    {
        $this->cliente = new Cliente();
    }

    public function index()
    {
        $clientes = $this->cliente->all();
        return view('clientes', ['clientes' => $clientes]);
    }

    public function create()
    {
        return view('cliente_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email',
        ]);

        $created = $this->cliente->create([
            'name'  => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        if ($created) {
            return redirect()->route('clientes.index')->with('message', 'Cliente criado com sucesso.');
        }
        return redirect()->back()->with('error', 'Falha ao criar cliente.');
    }

    public function show(string $id)
    {
        return view('clientes', ['clientes' => Cliente::all()]);
    }

    public function edit(Cliente $cliente)
    {
        return view('cliente_edit', ['cliente' => $cliente]);
    }

    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email,' . $cliente->id,
        ]);

        $updated = $cliente->update($request->only(['name', 'email']));

        if ($updated) {
            return redirect()->route('clientes.index')->with('message', 'Cliente atualizado com sucesso.');
        }
        return redirect()->back()->with('error', 'Erro ao atualizar cliente.');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('message', 'Cliente deletado com sucesso.');
    }
}
