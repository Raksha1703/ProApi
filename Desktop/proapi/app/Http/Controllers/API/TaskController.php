<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\task;

class TaskController extends Controller
{
    public function index()
    {
        $task = task::all();
        //$task = task::factory()->count(10)->create();
        return response(['task' => $task, 'message' => 'data retrive successfully'],200);
    }
    public function save(Request $request)
    {
        $data=$request->all();
        $task = task::create($data);
        return response(['task' => $task, 'message' => 'data save successfully'],201);
    }
}
