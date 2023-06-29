<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Persona;
use redirect;

class PersonaController extends Controller
{
    
    public function index()
    {
        $persona=Persona::all();
        return view('personas.index',compact(["persona"]));
    }

    
    public function create()
    {
        return view('personas.create');
    }

   
    public function store(Request $request)
    {
        $persona= Persona::create($request->all());

        return redirect()->route('personas.index')
        ->with('mensaje','persona creada correctamente')
        ->with('tipo','success');


    }

    
    public function show($id)
    {
        $persona = Persona::findOrFail($id);
        $ventas = $persona->ventas;
        return view('personas.show',compact(['persona','ventas']));
    }

    
    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
        return view('personas.edit',compact(['persona']));
    }

   
    public function update(Request $request, $id)
    {
        $persona = Persona::findOrFail($id);
        $persona->fill($request->all());
        $persona->save();

        return redirect()->route('personas.index')
        ->with("mensaje", 'Persona editad correctamente')
        ->with("tipo", 'success');
    }

   
    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $ventas = $persona->ventas;
        if(count($ventas)>0){
            return redirect()->route('personas.index')
            ->with("mensaje", 'El proyecto contiene ventas que se deben eliminar')
            ->with("tipo", 'danger');
        }else{
            $persona->delete();
            return redirect()->route('personas.index')
            ->with("mensaje", 'persona eliminado correctamente')
            ->with("tipo", 'success');
        }

    }

    public function delete($id)
    {
        $persona = Persona::findOrFail($id);
        $ventas = $persona->ventas;
        if(count($ventas)>0){
            return redirect()->route('personas.index')
            ->with("mensaje", 'El proyecto contiene tareas que se deben eliminar')
            ->with("tipo", 'danger');
        }
        return view('personas.delete',compact(["ventas"]));
    }
}
