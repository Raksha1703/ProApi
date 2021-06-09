<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = profile::all();
        //$profile = profile::factory()->count(10)->create();
        return response(['faculty' => $profile, 'message' => 'data retrive successfully'],200);
    }
    public function save(Request $request)
    {
        $data=$request->all();
        $profile = profile::create($data);
        return response(['profile' => $profile, 'message' => 'data save successfully'],201);
    }
    public function update(Request $request, $id)
    {   //return $request->all();
        $profile = profile::find($id);
        $profile->name=$request->name;
        $profile->save();
        return response(['profile' => $profile, 'message' => 'data updated successfully'],201);
    }

    public function delete($id)
    {
        $profile = profile::destroy($id);
        return response(['profile' => $profile, 'message' => 'data deleted successfully'],401);
        
    }
}
