<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\role;

class RoleController extends Controller
{
    public function index()
    {
        $role = role::all();
        //$role = role::factory()->count(10)->create();
        return response(['role' => $role, 'message' => 'data retrive successfully'],200);
    }
}
