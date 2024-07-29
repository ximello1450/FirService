<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Rol; // Importa el modelo Rol para trabajar con roles
use Illuminate\Http\Request;

class ClienteControlador extends Controller
{
    /**
     * Muestra el formulario para agregar un nuevo cliente.
     *
     * @return \Illuminate\View\View
     */
    public function formCliente()
    {
        $roles = Rol::all(); // Obtiene todos los roles disponibles
        $defaultRoleId = 1; // ID del rol por defecto, ajusta según sea necesario

        return view('almacen/gerente/CRUDcliente/formCliente', compact('roles', 'defaultRoleId'));
    }

    /**
     * Maneja la solicitud para agregar un nuevo cliente.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function agregarCliente(Request $request)
    {
        // Valida los datos recibidos del formulario
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'app_paterno' => 'required|string|max:255',
            'app_materno' => 'required|string|max:255',
            'fecha_alta' => 'required|date|before:tomorrow',
            'correo' => 'required|email|max:255',
            'contra' => 'required|string|min:8',
            'id_rol' => 'required|exists:roles,id_rol', // Asegura que el rol existe en la tabla roles porsilas dudas
        ]);

        // Crea un nuev cliente con los datos validados
        $cliente = new Cliente();
        $cliente->id_rol = $request->id_rol; // Asigna el rol seleccionado
        $cliente->nombre = $request->nombre;
        $cliente->app_paterno = $request->app_paterno;
        $cliente->app_materno = $request->app_materno;
        $cliente->fecha_alta = $request->fecha_alta;
        $cliente->correo = $request->correo;
        $cliente->contra = bcrypt($request->contra); // Hashea la contraseña
        $cliente->save(); // Guarda el nuevo cliente en la base de datos

        return redirect()->route('listaClientes')->with('success', 'Cliente agregado exitosamente.');
    }

    /**
     * Muestra una lista de todos los clientes.
     *
     * @return \Illuminate\View\View
     */
    public function listaClientes()
    {
        $clientes = Cliente::all(); // Obtiene todos los clientes
        return view('almacen.gerente.CRUDcliente.listaClientes', compact('clientes'));
    }

    /**
     * Muestra la lista de clientes en la vista de inicio.
     *
     * @return \Illuminate\View\View
     */
    public function listaClientesInicio()
    {
        $clientes = Cliente::all(); // Obtiene todos los clientes
        return view('almacen.inicio.clientes', compact('clientes'));
    }

    /**
     * Muestra el formulario para editar un cliente existente.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function editarCliente($id)
    {
        $cliente = Cliente::findOrFail($id); // Obtiene el cliente por su ID
        $roles = Rol::all(); // Obtiene todos los roles para el formulario de edición

        return view('almacen.gerente.CRUDcliente.editarCliente', compact('cliente', 'roles'));
    }

    /**
     * Actualiza los datos de un cliente existente.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function actualizarCliente(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id); // Obtiene el cliente por su ID

        // Valida los datos recibidos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'app_paterno' => 'required|string|max:255',
            'app_materno' => 'required|string|max:255',
            'fecha_alta' => 'required|date|before:tomorrow',
            'correo' => 'required|email|max:255',
            'id_rol' => 'required|exists:roles,id_rol', // Verifica que el rol exista
            'contra' => 'nullable|string|min:8', // Contraseña opcional
        ]);

        // Actualiza los datos del cliente
        $cliente->id_rol = $request->id_rol;
        $cliente->nombre = $request->nombre;
        $cliente->app_paterno = $request->app_paterno;
        $cliente->app_materno = $request->app_materno;
        $cliente->fecha_alta = $request->fecha_alta;
        $cliente->correo = $request->correo;

        // Actualiza la contraseña solo si se proporciona una nueva
        if ($request->contra) {
            $cliente->contra = bcrypt($request->contra); // Hashea la nueva contraseña
        }

        $cliente->save(); // Guarda los cambios en la base de datos

        return redirect()->route('listaClientes')->with('success', 'Cliente actualizado exitosamente.');
    }

    /**
     * Elimina un cliente existente.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function eliminarCliente($id)
    {
        $cliente = Cliente::findOrFail($id); // Obtiene el cliente por su ID
        $cliente->delete(); // Elimina el cliente de la base de datos
        return redirect()->route('listaClientes')->with('success', 'Cliente eliminado exitosamente.');
    }
}
