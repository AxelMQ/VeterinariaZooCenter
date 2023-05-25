<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Personal;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Personal
    public function inicio(){

        $personal = Personal::all();
        return view('personal.inicio', compact('personal'));

    }

    public function editar_pers($id_personal){
        $personal = Personal::where('id_personal', '=', $id_personal)->first();
        return view('personal.editar', compact('personal'));
    }

    public function actualizar_pers(Request $request, $id_personal){
        // $persona = Personal::where('id_personal', '=', $id)->first();
        // return view('personal.editar', compact('persona'));
        $request->validate([
            'nombre' => 'required|string|max:60',
            'apellido' => 'required|string|max:60',
            'telefono' => 'required|numeric',
            'sexo' => 'required|string|max:1',
            'tipo' => 'required|string',
        //    'id_personal' => 'readonly', // El campo id_personal no será modificable
        ]);

        
            // Actualizar los datos en la base de datos
            $personal = Personal::where('id_personal', '=', $id_personal)->first();
            $personal->nombre = $request->nombre;
            $personal->apellido = $request->apellido;
            $personal->telefono = $request->telefono;
            $personal->sexo = $request->sexo;
            $personal->tipo = $request->tipo;
            $personal->update();


            // Redireccionar o mostrar un mensaje de éxito
            return redirect()->route('personal.inicio')->with('success', 'Personal actualizado exitosamente');
        }

        public function eliminar_pers($id_personal){
            $personal = Personal::where('id_personal', '=', $id_personal)->first();
            $nombre = $personal-> nombre;
            $personal->delete();
            
            return redirect()->route('personal.inicio')->with('eliminado', 'Personal: '.$nombre.' eliminado exitosamente');
        }
    

        public function crear_pers(){
           
            return view('personal.crear');
        }

        
        public function guardar_pers(Request $request){
            // $persona = Personal::where('id_personal', '=', $id)->first();
            // return view('personal.editar', compact('persona'));
            $request->validate([
                'id_personal' => 'required|numeric|unique:personal',
                'nombre' => 'required|string|max:60',
                'apellido' => 'required|string|max:60',
                'telefono' => 'required|numeric',
                'sexo' => 'required|string|max:1',
                'tipo' => 'required|string',
            //    'id_personal' => 'readonly', // El campo id_personal no será modificable
            ]);

        
            // Actualizar los datos en la base de datos
            $personal = new Personal();
            $personal->id_personal = $request->id_personal;
            $personal->nombre = $request->nombre;
            $personal->apellido = $request->apellido;
            $personal->telefono = $request->telefono;
            $personal->sexo = $request->sexo;
            $personal->tipo = $request->tipo;
            $personal->save();


            // Redireccionar o mostrar un mensaje de éxito
            return redirect()->route('personal.inicio')->with('success', 'Personal Creado exitosamente');
        }







    // Proveedor
    public function inicio_prov()
    {
        $proveedor = Proveedor::all();
        return view('proveedor.inicio', compact('proveedor'));
    }
    
    public function editar_prov($id_proveedor)
    {
        $proveedor = Proveedor::find($id_proveedor);
        return view('proveedor.editar', compact('proveedor'));

    }
    
    public function actualizar_prov(Request $request, $id_proveedor)
    {
        $request->validate([
            'nombre' => 'required|string|max:60',
            'telefono' => 'required|numeric',
            'direccion' => 'required|string|max:60',
        ]);
    
        $proveedor = Proveedor::find($id_proveedor);
        $proveedor->nombre = $request->nombre;
        $proveedor->telefono = $request->telefono;
        $proveedor->direccion = $request->direccion;
        $proveedor->save();
    
         // Establece el mensaje de confirmación
        session()->flash('success', 'Proveedor actualizado correctamente.');
        session()->flash('error', 'Hubo un problema al actualizar el proveedor.');


        return redirect()->route('proveedor.inicio')->with('success', 'Proveedor actualizado exitosamente');
    }
    
    public function eliminar_prov($id_proveedor)
    {
        $proveedor = Proveedor::find($id_proveedor);
        $nombre = $proveedor->nombre;
        $proveedor->delete();
    
        return redirect()->route('proveedor.inicio')->with('eliminado', 'Proveedor '.$nombre.' eliminado exitosamente');
    }
    
    public function crear_prov()
    {
        return view('proveedor.crear');
    }
    
    public function guardar_prov(Request $request)
    {
        $request->validate([
            'id_proveedor' => 'required|numeric|unique:proveedor',
            'nombre' => 'required|string|max:60',
            'telefono' => 'required|numeric',
            'direccion' => 'required|string|max:60',
        ]);
    
        $proveedor = new Proveedor();
        $proveedor->id_proveedor = $request->id_proveedor;
        $proveedor->nombre = $request->nombre;
        $proveedor->telefono = $request->telefono;
        $proveedor->direccion = $request->direccion;
        $proveedor->save();
    
        return redirect()->route('proveedor.inicio')->with('success', 'Proveedor guardado exitosamente');
    }
    


    // CLiente
    public function inicio_cliente(){
        $cliente = Cliente::all();
        return view('cliente.inicio', compact('cliente'));
    }

    public function editar_cliente($id_cliente)
    {
        $cliente = Cliente::find($id_cliente);
        return view('cliente.editar', compact('cliente'));
    }
    
    public function actualizar_cliente(Request $request, $id_cliente)
    {
        $request->validate([
            'nombre' => 'required|string|max:60',
            'apellido' => 'required|string|max:60',
            'telefono' => 'required|numeric',
            'direccion' => 'required|string|max:60',
            'sexo' => 'required|string|max:1',
            'fecha' => 'required|date',
            'correoelectronico' => 'nullable|email|max:60',
          

        ]);
    
        $cliente = Cliente::find($id_cliente);
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->sexo = $request->sexo;
        $cliente->fecha = $request->fecha;
        $cliente->correoelectronico = $request->correoelectronico;
        $cliente->save();
    
        return redirect()->route('cliente.inicio')->with('success', 'Cliente actualizado exitosamente');
    }
    
    public function eliminar_cliente($id_cliente)
    {
        $cliente = Cliente::find($id_cliente);
        $nombre = $cliente->nombre;
        $cliente->delete();
    
        return redirect()->route('cliente.inicio')->with('eliminado', 'Cliente '.$nombre.' eliminado exitosamente');
    }

    public function crear_cliente()
    {
        return view('cliente.crear');
    }
    
    public function guardar_cliente(Request $request)
    {
        $request->validate([
            'id_cliente' => 'required|numeric|unique:cliente',
            'nombre' => 'required|string|max:60',
            'apellido' => 'required|string|max:60',
            'telefono' => 'required|numeric',
            'direccion' => 'required|string|max:60',
            'sexo' => 'required|string|max:1',
            'fecha' => 'required|date',
            'correoelectronico' => 'nullable|email|max:60',

        ]);
    
        $cliente = new Cliente();
        $cliente->id_cliente = $request->id_cliente;
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->sexo = $request->sexo;
        $cliente->fecha = $request->fecha;
        $cliente->correoelectronico = $request->correoelectronico;
        $cliente->save();

    
        return redirect()->route('cliente.inicio')->with('success', 'Cliente guardado exitosamente');
    }


}
