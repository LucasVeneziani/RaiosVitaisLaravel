<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Funcionario;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        // Check admins table first
        $admin = Admin::where('email', $request->email)->first();
        if ($admin && Hash::check($request->password, $admin->password)) {
            session([
                'auth_id'   => $admin->id,
                'auth_name' => $admin->name,
                'auth_role' => 'admin',
            ]);
            return redirect()->route('home')->with('message', 'Bem-vindo, ' . $admin->name . '!');
        }

        // Check funcionarios table
        $funcionario = Funcionario::where('email', $request->email)->first();
        if ($funcionario && Hash::check($request->password, $funcionario->password)) {
            session([
                'auth_id'   => $funcionario->id,
                'auth_name' => $funcionario->name,
                'auth_role' => 'funcionario',
            ]);
            return redirect()->route('home')->with('message', 'Bem-vindo, ' . $funcionario->name . '!');
        }

        return redirect()->back()
            ->withInput($request->only('email'))
            ->with('error', 'Credenciais inválidas.');
    }

    public function logout(Request $request)
    {
        $request->session()->forget(['auth_id', 'auth_name', 'auth_role']);
        return redirect()->route('admin.login')->with('message', 'Sessão encerrada com sucesso.');
    }
}
