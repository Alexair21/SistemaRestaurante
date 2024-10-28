<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personales = Personal::all();
        return view('content.personal.index', compact('personales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personal = Personal::all();
        return view('content.personal.create', compact('personal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'email' => 'required',
            'fecha_nacimiento' => 'required',
            'fecha_contrato' => 'required',
            'salario' => 'required',
        ]);

        Personal::create($request->all());
        return redirect()->route('personal.index')->with('success', 'Personal creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personal $personal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personal $personal)
    {
        return view('content.personal.edit', compact('personal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personal $personal)
    {
        $request->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'email' => 'required',
            'fecha_nacimiento' => 'required',
            'fecha_contrato' => 'required',
            'salario' => 'required',
        ]);

        $personal->update($request->all());
        return redirect()->route('personal.index')->with('success', 'Personal actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personal $personal)
    {
        //
    }
}
