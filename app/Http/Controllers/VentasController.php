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
        return view('ventas.index',compact(['ventas']));
    }

    
    public function create()
    {

        $personas = Persona::all();
        return view('ventas.create',compact(['personas']));
    }

   
    public function store(Request $request)

    {
        $ventas= Ventas::create($request->all());

        return redirect()->route('RouteVenta.index')
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

        return redirect()->route('RouteVenta.index')
        ->with("mensaje", 'venta editada correctamente')
        ->with("tipo", 'success');
    }

   
    public function destroy($id)
    {
        $ventas = Ventas::findOrFail($id);
        $ventas->delete();
        return redirect()->route('RouteVenta.index')
        ->with("mensaje", 'Tarea eliminada correctamente')
        ->with("tipo", 'success');
    }

    public function delete($id)
    {
        $ventas = Ventas::findOrFail($id);
        return view('ventas.delete', compact(['ventas']));
    }
}
