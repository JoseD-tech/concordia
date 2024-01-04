<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cursos = Curso::all();
        return Inertia::render('Cursos/Index', [
            'cursos' => $cursos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return Inertia::render('Cursos/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $curso = New Curso;
        $curso->curso = $request->nombre;
        $curso->save();
        return to_route('cursos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Curso $curso)
    {
        //
        return Inertia::render('Cursos/Edit', [
            'curso' => $curso::find($id)
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curso $curso)
    {
        //
        $curso->curso = $request->input('nombre');
        $curso->update();
        return to_route('cursos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $curso = Curso::find($request->id);
        $curso->delete();
        to_route('cursos.index');
    }
}
