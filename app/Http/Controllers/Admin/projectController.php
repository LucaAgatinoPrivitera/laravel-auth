<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class projectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        $data = [
            'projects' => $projects
        ];
        return view('admin.projects.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
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
            "name_project" => "required|min:3|max:200",
            "description" => "required|min:5|max:255",
            "group" => "required|boolean",
            "date" => "required|date",
            'type_id' => 'required|exists:types,id',
            'cover_image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('cover_images', 'public');
        }





        // SLUG
        $slug = Str::slug($data['name_project'], '-');

        // Verifica se lo slug esiste già e genera uno slug unico
        $c = Project::where('slug', 'LIKE', "$slug%")->count();
        if ($c > 0) {
            $slug = $slug . '-' . ($c + 1);
        }

        // Aggiungi lo slug all'array di dati
        $data['slug'] = $slug;







        //CREO L'OGGETTO
        $newProject = new Project();

        //POPOLO L'OGGETTO CREANDO L'ISTANZA
        $newProject->fill($data);

        //SALVO SUL DB
        $newProject->save();

        //RITORNO LA ROTTA
        // return redirect()->route('project.index');
        return redirect()->route('admin.projects.show', $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $data = [
            "project" => $project
        ];

        return view("admin.projects.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $data = [
            "project" => $project
        ];

        return view("admin.projects.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();


        // $project->name_project = $data["name_project"];
        // $project->description = $data["description"];
        // $project->date = $data["date"];
        // $project->group = $data["group"];
        // $project->save();


        // $project->fill($data);
        // $project->save();


        if ($request->hasFile('cover_image')) {
            // Cancella l'immagine precedente, se esiste
            if ($project->cover_image) {
                Storage::disk('public')->delete($project->cover_image);
            }

            // Carica la nuova immagine e aggiorna il campo cover_image nei dati
            $data['cover_image'] = $request->file('cover_image')->store('cover_images', 'public');
        }

        $project->update($data);


        return redirect()->route('admin.projects.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index');
    }
}
