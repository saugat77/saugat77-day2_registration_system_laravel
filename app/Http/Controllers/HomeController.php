<?php

namespace App\Http\Controllers;

use App\Http\Livewire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Member;
use App\Models\SideBar;
use App\Models\SubMenu;
use App\Models\NewSubMenu;

class HomeController extends Controller
{
    public $side_bar_id;
    
    

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
            return view('index');
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
    public function menuitems(){
        return view('menuitems');
    }


    public function backend(){
    

        $data = SideBar::all();
        $submenu = NewSubMenu::all();
        return view('backend',['data'=>$data,'submenu'=>$submenu]);
    }
    public function welcome(){
        return view('welcome');
    }

    public function register(){
        
        return view ('auth.register');
    }
    public function addmember(Request $request){
        $data = new Member;
        $data->userid = $request->userid;
        $data->password = bcrypt($request->password);
        $data->fname = $request->fname;
        $data->lname = $request->lname;
        $data->dob = $request->dob;
        $data->address = $request->faddress;
        $data->apt = $request->fapt;
        $data->city = $request->fcity;
        $data->state = $request->fstate;
        $data->country = $request->fcountry;
        $data->zip = $request->fzip;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->sfn = $request->sfname;
        $data->sln = $request->slname;
        $data->cfn = $request->cfname;
        $data->cln = $request->clname;
        $data->cage = $request->cage;
        $data->caddress = $request->caddress;
        $data->ccity = $request->ccity;
        $data->cstate = $request->cstate;
        $data->ccountry = $request->ccountry;
        $data->czip = $request->czip;

        $data->save();
    
        
        return redirect()->back()->with('message','Added new member');
        
    }

    public function login(){
        return view('auth.login');
    }
}
