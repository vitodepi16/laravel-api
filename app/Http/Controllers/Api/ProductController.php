<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProductController extends Controller
{
    public function index()
    {
        $project = Project::with('type')->paginate(2);
        return response()->json([
            'success' => true,
            'results' => $project
        ]);
    }
    public function show($slug)
    {
        $project = Project::with('type')->where('slug', $slug)->first();
        if ($project) {
            return response()->json([
                'success' => true,
                'results' => $project
            ]);
        } else {
            return response()->json([
                'success' => false,
                'results' => 'Record not found'
            ]);
        }
    }
}
