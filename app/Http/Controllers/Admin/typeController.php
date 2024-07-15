<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();

        $data = [
            "types" => $types
        ];

        return view("admin.type.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //PRENDO TUTTI I DATI
        // $data = $request->all();

        // Qui abbiamo la validazione
        $data = $request->validate([
            // "id" => "required",
            "name_type" => "required|min:5|max:255",
            "description" => "required|min:5|max:255",
            "icon" => "required",
        ]);


        //CREO L'OGGETTO
        $newType = new Type();

        //POPOLO L'OGGETTO CREANDO L'ISTANZA
        $newType->fill($data);

        //SALVO SUL DB
        $newType->save();

        //RITORNO LA ROTTA
        // return redirect()->route('project.index');
        return redirect()->route('admin.type.show', $newType);
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        $data = [
            "project" => $type
        ];

        return view("admin.type.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        $data = [
            "project" => $type
        ];

        return view("admin.type.edit", $type);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $data = $request->all();


        // $project->name_project = $data["name_project"];
        // $project->description = $data["description"];
        // $project->date = $data["date"];
        // $project->group = $data["group"];
        // $project->save();


        // $project->fill($data);
        // $project->save();

        $type->update($data);


        return redirect()->route('admin.type.show', $type->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();

        return redirect()->route('admin.type.index');
    }
}
