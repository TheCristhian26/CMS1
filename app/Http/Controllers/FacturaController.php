<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;

class FacturaController extends Controller
{

    public function index()
    {
        $facturas = Factura::all();
        return view('factura.index',compact(['facturas']));
    }

    public function store(Request $request)
    {
        $facturas = Factura::all();
        return view('factura.store',compact(['facturas']));
    }

    
    public function show(string $id)
    {
        $facturas = Factura::findOrFail($id);
        $tareas = $facturas->tareas;
        return view('factura.show',compact(['facturas','tareas']));
    }



    public function edit(string $id)
    {
        $facturas = Factura::findOrFail($id);
        return view('factura.edit',compact(['facturas']));
    }

    
    public function update(Request $request, string $id)
    {
        {
            $facturas = Factura::findOrFail($id);
            $facturas->fill($request->all());
            $facturas->save();
    
            return redirect()->route('factura.index')
            ->with("mensaje", 'factura actuliazada')
            ->with("tipo", 'success');
        }
    }

    
    public function destroy(string $id)
    {
        $facturas = Factura::findOrFail($id);
        $tareas = $factura->tareas;
        if(count($tareas)>0){
            return redirect()->route('factura.index')
            ->with("mensaje", 'El proyecto contiene tareas que se deben eliminar')
            ->with("tipo", 'danger');
        }
        return view('factura.delete',compact(["factura"]));
    }
}
