<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('Iniciarsesion');
    }

    public function loginchk(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'contra' => 'required',
        ]);
        // Intentar autenticar con Cliente
        $cliente = Cliente::where('correo', $request->input('correo'))
                      ->where('contra', $request->input('contra'))
                      ->first();

        if ($cliente) {
            Auth::login($cliente);
            $nombreRol = $cliente->rol->nombre; // Asume que roles es una relación
            Log::info($nombreRol);
            // $nombreRol = $primerRol ? $primerRol->nombre : 'default';
            return $this->redireccionarConRol($nombreRol);
        }

        // Intentar autenticar con Empleado
        $empleado = Empleado::where('correo', $request->input('correo'))
                        ->where('contra', $request->input('contra'))
                        ->first();
        if ($empleado) {
            Auth::login($empleado);
            $primerRol = $empleado->roles->first(); // Asume que roles es una relación
            $nombreRol = $primerRol ? $primerRol->nombre : 'default';
            Log::info('Redirigiendo empleado a: ' . $nombreRol);
            return $this->redireccionarConRol($nombreRol);
        }
        throw ValidationException::withMessages([
            'correo' => __('auth.failed'),
        ]);
    }

    // Redirigir según el rol del usuario
    protected function redireccionarConRol($nombreRol)
    {
         switch ($nombreRol) {
             case 'Gerente':
                 return redirect()->route('admin.menu');
             case 'Empleado':
                 return redirect()->route('empleado.menu');
             case 'Cliente':
                 return redirect()->route('cliente.menu');
             default:
                 return redirect()->route('login');
         }
     }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
