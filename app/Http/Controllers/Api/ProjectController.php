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
            'status' => 'success',
            // Il paginate mi indica quanti risultati avrò per pagina
            'projects' => Project::with('type')->orderByDesc('id')->paginate(2)
            // grazie a with type aggiungo la tabella della relazione
        ]);
    }
    public function show($id)
    {
        $project = Project::with('type')->where('id', $id)->get()->first();
        // DA AGGIORNARE
        dd($project);
        // grazie a with type aggiungo la tabella della relazione

        if ($project) {
            return response()->json([
                'status' => 'success',
                // Il paginate mi indica quanti risultati avrò per pagina
                'project' => Project::with('type')->orderByDesc('id')->paginate(2)
                // grazie a with type aggiungo la tabella della relazione
            ]);
        } else {
            
        }
    }
}
