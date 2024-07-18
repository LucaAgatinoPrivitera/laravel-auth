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
            'projects'=> Project::with('type')->orderByDesc('id')->paginate()
            // grazie a with type aggiungo la tabella della relazione
        ]);
    }
}
