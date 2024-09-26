<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\SubAdmin;
use App\Models\Users;

class SubController extends Controller
{
    public function viewUser(){
        return Users::all();     
    }

    public function createUser(Request $data)
    {
        $subs = new Users();
        $subs->id = $data->input('id');
        $subs->name = $data->input('name');
        $subs->password = $data->input('password');
        $subs->save();
        
        return redirect()->back();
    }
}
