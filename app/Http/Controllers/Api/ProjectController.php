<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            // Il paginate mi indica quanti risultati avrò per pagina
            'projects' => Project::with('type')->orderByDesc('id')->paginate(2)
            // grazie a with type aggiungo la tabella della relazione
        ]);
    }

    public function latest()
    {
        return response()->json([
            'success' => true,
            'projects' => Project::with('type')->orderByDesc('id')->take(3)->get()
        ]);
    }

    public function show($slug)
    {
        $project = Project::with('type')->where('slug', $slug)->get()->first();
        // DA AGGIORNARE

        // dd($project);
        // grazie a with type aggiungo la tabella della relazione
        

        if ($project) {
            return response()->json([
                'success' => true,
                // Il paginate mi indica quanti risultati avrò per pagina
                'project' => $project
                // grazie a with type aggiungo la tabella della relazione
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => '404'
            ]);
        }
    }
}
