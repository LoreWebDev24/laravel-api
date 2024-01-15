<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {

        // RITORNO UN JSON :

        $results = Project::with('types', 'technologies')->paginate(12);

        return response()->json([
            'success' => true,
            'results' => $results
        ]);
    }
}
