<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\project;

class ProjectController extends Controller
{
    public function index()
    {
        $project = project::all();
        //$project = project::factory()->count(10)->create();
        return response(['project' => $project, 'message' => 'data retrive successfully'],200);
    }
}
