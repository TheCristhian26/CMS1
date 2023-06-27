<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ventas;
use App\Models\Persona;
use redirect;

class VentasController extends Controller
{
    
    public function index()
    {
        
        $ventas=Ventas::all();
        return view('ventas.index',compact(["ventas"]));
    }

    
    public function create()
    {
        $personas = Persona::all();
        return view('ventas.create',compact(['personas']));
    }

   
    public function store(Request $request)
    {
        return $request;
        $ventas= Ventas::create($request->all());

        return redirect()->route('ventas.index')
        ->with('mensaje','venta creada correctamente')
        ->with('tipo','success');


    }

    
    public function show($id)
    {
        $ventas = Ventas::findOrFail($id);
        $tareas = $ventas->tareas;
        return view('ventas.show',compact(['ventas','tareas']));
    }

    
    public function edit($id)
    {
        $ventas = Ventas::findOrFail($id);
        return view('ventas.edit',compact(['ventas']));
    }

   
    public function update(Request $request, $id)
    {
        $ventas = Ventas::findOrFail($id);
        $ventas->fill($request->all());
        $ventas->save();

        return redirect()->route('ventas.index')
        ->with("mensaje", 'venta editada correctamente')
        ->with("tipo", 'success');
    }

   
    public function destroy($id)
    {
        $ventas = Ventas::findOrFail($id);
        $tareas = $ventas->tareas;
        if(count($tareas)>0){
            return redirect()->route('ventas.index')
            ->with("mensaje", 'la venta contiene informacion valiosa la desea eliminar?')
            ->with("tipo", 'danger');
        }else{
            $ventas->delete();
            return redirect()->route('ventas.index')
            ->with("mensaje", 'venta eliminada correctamente')
            ->with("tipo", 'success');
        }

    }

    public function delete($id)
    {
        $ventas = Ventas::findOrFail($id);
        $tareas = $ventas->tareas;
        if(count($tareas)>0){
            return redirect()->route('ventas.index')
            ->with("mensaje", 'la venta contiene tareas que se deben eliminar')
            ->with("tipo", 'danger');
        }
        return view('ventas.delete',compact(["ventas"]));
    }
}
