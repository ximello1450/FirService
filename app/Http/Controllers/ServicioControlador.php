<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioControlador extends Controller
{
    


    //Muestra solo el formulario
    public function formServicio()
    {
        return view('almacen/gerente/CRUDservicio/formServicio');
    }

    //agregar un servicio y guarda una imagen del servicio en el poryecto
    public function agregarServicio(Request $request)
    {
        $servicios=new Servicio();
//Este cacho de codigo comprueba si en el campo de imagen hay un archivo o imagen, despues
//almacena la imagen en file y la mueve a la carpteda src que esta en public y guarda en la base de datos la direccion de la imagen
        if($request->hasFile('img_ser')){
            $file= $request->file('img_ser');
                $url='src/servicios/';
                $filename=time().'_';
                $subirS=$request->file('img_ser')->move($url,$filename);
                $servicios->img_ser=$url.$filename;
        }
        
        $servicios->nombre_serv=$request->post('nombre_serv');
        $servicios->descripcion=$request->post('descripcion');
        $servicios->costo=$request->post('costo');
        $servicios->descuento=$request->post('descuento');
        $servicios->estatus=$request->post('estatus');
        $servicios->save();
        return redirect()->route('listaServicios');
    }

    //Manda la variable datos a la vista de listaservicios
    public function listaServicios(Servicio $servicio)
    {
        $servicios= Servicio::all();
        return view('almacen/gerente/CRUDservicio/listaServicios',compact('servicios'));
    }

    //manda un objeto servicioc para mostrar en el catalogo de servicios 
    //?falta la comprobacion para saber si esta disponible o no
    public function listaServiciosInicio(Servicio $servicio)
    {
        $servicios= Servicio::all();
        return view('almacen/inicio/servicios',compact('servicios'));
    }

    
    public function editarServicio($id)
    {
        $servicios=Servicio::find($id);
        return view('almacen/gerente/CRUDservicio/editarServicio',compact('servicios'));
    }

    

    public function actualizarServicio(Request $request,$id)
    {
        $servicios=Servicio::find($id);
        if($request->hasFile('img_ser')){
            //Comprueba si hay una imagen y borra la ruta y la iamgen del sistema de archivos
                if ($servicios->img_ser && file_exists(public_path($servicios->img_ser))) {
                    unlink(public_path($servicios->img_ser));
                }
        
            // Subir la nueva imagen
             $file= $request->file('img_ser');
             $url='src/servicios/';
                $filename=time().'_';
                $subirS=$request->file('img_ser')->move($url,$filename);
                $servicios->img_ser=$url.$filename;
            }
                
                $servicios->nombre_serv=$request->post('nombre_serv');
                $servicios->descripcion=$request->post('descripcion');
                $servicios->costo=$request->post('costo');
                $servicios->descuento=$request->post('descuento');
                $servicios->estatus=$request->post('estatus');
                $servicios->save();   
                return redirect()->route('listaServicios');

        }

    
        
        //funcion que elimina el servicio y ademas la imagen guardada en el sistema de archivos de ese servicio
    public function eliminarServicio($id)
    {
     $servicios=Servicio::find($id);
     if ($servicios->img_ser && file_exists(public_path($servicios->img_ser))) {
        unlink(public_path($servicios->img_ser));
    }
     $servicios->delete();
     return redirect()->route('listaServicios');

    }
}
