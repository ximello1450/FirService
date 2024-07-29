<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Rol; //Importar el modelo ROL para que haya relación y no ocurran errores a la hora de añadir, editar y eliminar

class EmpleadoController extends Controller
{
    public function index()
    {
        // Obtener todos los empleados
        $empleados = Empleado::all();
        $roles = Rol::all();

        // Devolver la vista de lista de empleados
        return view('almacen.gerente.empleado.listaEmpleados')->with("empleados", $empleados);
    }

    public function formEmpleado()
    {
        // Obtener todos los roles disponibles para el formulario
        $roles = Rol::all();
        
        // Devolver el formulario para crear un nuevo empleado
        return view('almacen.gerente.empleado.formEmpleado', compact('roles'));
    }

    public function agregarEmpleado(Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'nombre' => 'required|string|max:255',
            'app_paterno' => 'required|string|max:255',
            'app_materno' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'num_tel' => 'required|string|max:15',
            'correo' => 'nullable|email|max:255',
            'horario_entrada' => 'required|date_format:H:i',
            'horario_salida' => 'required|date_format:H:i',
            'dias_trabajo' => 'required|array',
            'dias_trabajo.*' => 'string|in:Lunes,Martes,Miércoles,Jueves,Viernes,Sábado,Domingo',
            'fecha_alta' => 'required|date',
            'roles' => 'nullable|array',
            'roles.*' => 'exists:roles,id_rol', // Verifica que existe en la tabla roles
            'contra' => 'nullable|string|min:8',
        ]);

        // Guardar el empleado en la base de datos
        $empleado = new Empleado;
        $empleado->nombre = $request->nombre;
        $empleado->app_paterno = $request->app_paterno;
        $empleado->app_materno = $request->app_materno;
        $empleado->cargo = $request->cargo;
        $empleado->fecha_alta = $request->fecha_alta;
        $empleado->horario_entrada = $request->horario_entrada;
        $empleado->horario_salida = $request->horario_salida;
        $empleado->dias_trabajo = implode(',', $request->dias_trabajo); // Convertir array a string
        $empleado->num_tel = $request->num_tel;
        $empleado->correo = $request->correo;
        $empleado->contra = bcrypt($request->contra); // Hashear la contraseña

        if ($empleado->save()) {
            // Asignar roles al empleado
            $empleado->roles()->sync($request->input('roles', []));

            // Redirigir a la lista de empleados con un mensaje de éxito
            return redirect()->route('empleados.index')->with('success', 'Empleado creado exitosamente.');
        } else {
            return back()->with('error', 'No se pudo guardar el empleado.');
        }
    }

    public function listaEmpleados()
    {
        // Obtener todos los empleados
        $empleados = Empleado::all();

        // Devolver la vista de lista de empleados
        return view('almacen.gerente.empleado.listaEmpleados', compact('empleados'));
    }

    public function listaEmpleadosInicio()
    {
        // Obtener todos los empleados
        $empleados = Empleado::all();

        // Devolver la vista de inicio con los empleados
        return view('almacen.inicio.empleados', compact('empleados'));
    }

    public function editarEmpleado($id)
    {
        // Encontrar el empleado por ID
        $empleado = Empleado::findOrFail($id);
        
        // Obtener todos los roles disponibles
        $roles = Rol::all();
        
        // Devolver la vista de edición del empleado con los roles
        return view('almacen.gerente.empleado.editarEmpleado', compact('empleado', 'roles'));
    }
    

    public function actualizarEmpleado(Request $request, $id)
    {
        // Encontrar el empleado por ID
        $empleado = Empleado::findOrFail($id);

        // Validar la solicitud
        $request->validate([
            'nombre' => 'required|string|max:255',
            'app_paterno' => 'required|string|max:255',
            'app_materno' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'num_tel' => 'required|string|max:15',
            'correo' => 'nullable|email|max:255',
            'horario_entrada' => 'required|date_format:H:i',
            'horario_salida' => 'required|date_format:H:i',
            'dias_trabajo' => 'required|array',
            'dias_trabajo.*' => 'string|in:Lunes,Martes,Miércoles,Jueves,Viernes,Sábado,Domingo',
            'fecha_alta' => 'required|date',
            'roles' => 'nullable|array',
            'roles.*' => 'exists:roles,id_rol', // Verifica que existe en la tabla roles
            'contra' => 'nullable|string|min:8', // Cambiado a nullable para permitir que el campo de contraseña sea opcional durante la actualización
        ]);

        // Actualizar los campos del empleado
        $empleado->nombre = $request->nombre;
        $empleado->app_paterno = $request->app_paterno;
        $empleado->app_materno = $request->app_materno;
        $empleado->cargo = $request->cargo;
        $empleado->fecha_alta = $request->fecha_alta;
        $empleado->horario_entrada = $request->horario_entrada;
        $empleado->horario_salida = $request->horario_salida;
        $empleado->dias_trabajo = implode(',', $request->dias_trabajo);
        $empleado->num_tel = $request->num_tel;
        $empleado->correo = $request->correo;

        if ($request->contra) {
            $empleado->contra = bcrypt($request->contra); // Actualizar y hashear la contraseña si se proporciona
        }

        if ($empleado->save()) {
            // Sincronizar roles del empleado
            $empleado->roles()->sync($request->input('roles', []));

            return redirect()->route('empleados.index')->with('success', 'Empleado actualizado exitosamente.');
        } else {
            return back()->with('error', 'No se pudo actualizar el empleado.');
        }
    }

    public function eliminarEmpleado($id)
    {
        // Encontrar el empleado por ID
        $empleado = Empleado::findOrFail($id);

        // Eliminar los roles relacionados del empleado
        $empleado->roles()->detach();

        // Eliminar el empleado
        $empleado->delete();

        return redirect()->route('empleados.index')->with('success', 'Empleado eliminado exitosamente.');
    }
}
