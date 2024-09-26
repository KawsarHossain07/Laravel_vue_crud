<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\SubAdmin;

class TestController extends Controller
{
    public function index(){
        return response()->json(['message' => 'Hello from Laravel Controller!']);
    }

    public function view(){
        return SubAdmin::all();     
    }

    public function createSubadmin(Request $data)
    {
        $subs = new SubAdmin();
        $subs->id = $data->input('id');
        $subs->name = $data->input('name');
        $subs->password = $data->input('password');
        $subs->save();
        
        return redirect()->back();
    }
}
