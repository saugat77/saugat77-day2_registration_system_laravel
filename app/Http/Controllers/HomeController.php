<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    public function home(){
        return view('livewire.user-component');
    }
    
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
        $data->save();
        
        return redirect()->back()->with('message','Added new mod');
    }

    public function showusers(){
        $user= User::all();
        return view('livewire.user-component',['users'=>$user]);
    }
    public function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect('showusers')->with('message',"Successfully deleted");
    }
    public function edituser($id){
        $data = User::find($id);
        return view('edit',['data'=>$data]);
    }
    public function editbtn(Request $req){
        $data = User::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->role=$req->role;
        $data->save();
        return redirect('showusers')->with('message','Successfully edited');

    }
}
