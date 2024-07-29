<?php
namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\Paquete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaqueteController extends Controller
{
// En el controlador para la vista de índice
public function index()
{
    $paquetes = Paquete::with('servicios')->get(); // Cargar los servicios relacionados
    return view('almacen.gerente.CRUDpaquete.index', compact('paquetes'));
}


    public function create()
    {
        $services = Servicio::all(); // Assuming you have a Service model and table
        return view('almacen.gerente.CRUDpaquete.form', compact('services'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombre_paq' => 'required|string|max:255',
            'costo' => 'required|numeric',
            'img_paq' => 'required|image|max:2048',
            'descripcion' => 'required|string',
            'services' => 'nullable|array',  // Cambiado a nullable
            'services.*' => 'exists:servicios,id_servicio',  // Validar que cada servicio exista
            'descuento' => 'nullable|numeric|max:100',
            'personalizado' => 'nullable|string|size:1',
            'estatus' => 'nullable|string|size:1',
        ]);
    
        
        // Crear Paquete
        $paquete = Paquete::create($validatedData);
        if($request->hasFile('img_paq')){
            $file= $request->file('img_paq');
                $url=public_path('src/paquetes/');
                $filename=time().'_';
                $subirS=$request->file('img_paq')->move($url,$filename);
                $paquete->img_paq=$url.$filename;
        }
        //Manejo de subida de archivo
        // if ($request->hasFile('img_paq')) {
        //     $file = $request->file('img_paq');
        //     $filename = time() . '_' . $file->getClientOriginalName();
        //     $filePath = $file->storeAs('public/images', $filename); // Almacena en 'public/images'
        //     $validatedData['img_paq'] = str_replace('public/', 'storage/', $filePath); // Guardar la ruta relativa
        // }

    
        // Filtrar servicios vacíos
        $services = array_filter($request->input('services', []));
        
        // Adjuntar servicios
        if (!empty($services)) {
            $paquete->servicios()->sync($services);
        }
    
        return redirect()->route('CRUDpaquete.index')->with('success', 'Paquete creado exitosamente.');
    }
    
    
    
    public function destroy($id)
    {
        // Inicia una transacción
        DB::transaction(function () use ($id) {
            // Encuentra el paquete
            $paquete = Paquete::findOrFail($id);
    
            // Elimina los registros relacionados en paquetes_servicios
            $paquete->servicios()->detach();
    
            // Luego elimina el paquete
            $paquete->delete();
        });
    
        // Redirige a una ruta con un mensaje de éxito
        return redirect()->route('CRUDpaquete.index')->with('success', 'Paquete eliminado exitosamente.');
    }
    public function edit($id)
    {
        // Recupera el paquete con sus servicios asociados
        $paquete = Paquete::with('servicios')->findOrFail($id);
        // Recupera todos los servicios disponibles
        $servicios = Servicio::all(); 
    
        // Pasa tanto el paquete como los servicios a la vista
        return view('almacen.gerente.CRUDpaquete.edit', compact('paquete', 'servicios'));
    }
    

    

    // Actualizar un paquete existente
    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombre_paq' => 'required|string|max:255',
            'costo' => 'required|numeric',
            'img_paq' => 'nullable|image|max:2048',
            'descripcion' => 'required|string',
            'services' => 'nullable|array',
            'services.*' => 'exists:servicios,id_servicio',
            'descuento' => 'nullable|numeric|max:100',
            'personalizado' => 'nullable|string|size:1',
            'estatus' => 'nullable|string|size:1',
        ]);
    
        // Obtener el paquete existente
        $paquete = Paquete::findOrFail($id);
    
        // Manejo de subida de archivo
        if ($request->hasFile('img_paq')) {
            $file = $request->file('img_paq');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('public/images', $filename); // Almacena en 'public/images'
            $validatedData['img_paq'] = str_replace('public/', 'storage/', $filePath); // Guardar la ruta relativa
        } else {
            // Si no se sube una nueva imagen, conservar la imagen existente
            $validatedData['img_paq'] = $paquete->img_paq;
        }
    
        // Actualizar Paquete
        $paquete->update($validatedData);
    
        // Filtrar servicios vacíos
        $services = array_filter($request->input('services', []));
        
        // Adjuntar servicios
        if (!empty($services)) {
            $paquete->servicios()->sync($services);
        } else {
            // Si no se seleccionan servicios, desvincular todos los servicios
            $paquete->servicios()->sync([]);
        }
    
        return redirect()->route('CRUDpaquete.index')->with('success', 'Paquete actualizado exitosamente.');
    }
    public function mostrarPaquetes()
    {
        $paquetes = Paquete::all(); // Obtén todos los paquetes desde la base de datos
        return view('almacen.inicio.paquetes', compact('paquetes')); // Pasa la variable a la vista
    }
      
}
