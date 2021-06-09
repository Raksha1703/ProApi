<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    public function index()
    {
        $category = category::all();
        //$category = category::factory()->count(10)->create();
        return response(['category' => $category, 'message' => 'data retrive successfully'],200);
    }
    public function save(Request $request)
    {
        $data=$request->all();
        $category = category::create($data);
        return response(['category' => $category, 'message' => 'data save successfully'],201);
    }
}
