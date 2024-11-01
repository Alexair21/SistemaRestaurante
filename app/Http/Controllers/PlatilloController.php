<?php

namespace App\Http\Controllers;

use App\Models\Platillo;
use Illuminate\Http\Request;

class PlatilloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $platillos = Platillo::all();
        return view('content.platillos.index', compact('platillos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.platillos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'imagen' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Aceptar solo archivos de imagen
            'categoria' => 'nullable|string|max:255',
            'estado' => 'nullable|boolean',
        ]);

        // Guardar la imagen si existe
        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('imagenes', 'public');
        } else {
            $path = null;
        }

        Platillo::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'imagen' => $path,
            'categoria' => $request->categoria,
        ]);

        return redirect()->route('platillos.index')->with('success', 'Platillo creado exitosamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Platillo $platillo)
    {
        return view('contentcontentplatillos.show', compact('platillo'));
    }

    public function showAll()
    {
        $platillos = Platillo::all();
        return view('platillos.show', compact('platillos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Platillo $platillo)
    {
        return view('content.platillos.edit', compact('platillo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Platillo $platillo)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'imagen' => 'nullable|string|max:255',
            'categoria' => 'nullable|string|max:255',
            'estado' => 'nullable|boolean',
        ]);

        $platillo->update($request->all());

        return redirect()->route('platillos.index')->with('success', 'Platillo actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Platillo $platillo)
    {
        $platillo->delete();

        return redirect()->route('platillos.index')->with('success', 'Platillo eliminado exitosamente.');
    }
}
