<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        // to show the welcome page according to the role they are assigned with
        $role=Auth::user()->role;

        if($role=='1'){
            return view('admin');
        }
        if($role=='2'){
            return view('mod');
        }
        else{
            return view('dashboard');
        }
    }
    // for adding new moderator

    public function addmod(Request $request){
        $data = new user;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);

        // here 2 means giving role of moderator by admin
        $data->role='2';

        $data->save();
        
        return redirect()->back();
    }

}
