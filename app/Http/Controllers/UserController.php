<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public readonly User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $users = $this->user->all();
        return view('users', ['users' => $users]);
    }

    public function create()
    {
        return view('user_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
        ]);

        $created = $this->user->create([
            'name'  => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        if ($created) {
            return redirect()->route('users.index')->with('message', 'Usuário criado com sucesso.');
        }
        return redirect()->back()->with('error', 'Falha ao criar usuário.');
    }

    public function show(string $id)
    {
        return view('users', ['users' => User::all()]);
    }

    public function edit(User $user)
    {
        return view('user_edit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $updated = $user->update($request->only(['name', 'email']));

        if ($updated) {
            return redirect()->route('users.index')->with('message', 'Usuário atualizado com sucesso.');
        }
        return redirect()->back()->with('error', 'Erro ao atualizar usuário.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('message', 'Usuário deletado com sucesso.');
    }
}
