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

    
    public function show(string $id)
    {
        
    }

    
    public function edit(string $id)
    {
        
    }

   
    public function update(Request $request, string $id)
    {
        
    }

    
    public function destroy(string $id)
    {
        
    }
}
