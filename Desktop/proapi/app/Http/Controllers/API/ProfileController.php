<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\profile;

class ProfileController extends Controller
{
    public function index()
    {
        $faculty = profile::all();
        //$faculty = profile::factory()->count(10)->create();
        return response(['faculty' => $faculty, 'message' => 'data retrive successfully'],200);
    }
}
