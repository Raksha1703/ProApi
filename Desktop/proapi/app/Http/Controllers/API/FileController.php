<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\file;

class FileController extends Controller
{
    public function index()
    {
        $file = file::all();
        //$file = file::factory()->count(10)->create();
        return response(['file' => $file, 'message' => 'data retrive successfully'],200);
    }
}
