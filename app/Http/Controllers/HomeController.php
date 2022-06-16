<?php

namespace App\Http\Controllers;

use App\Http\Livewire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
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

    // public function menubtn(Request $request){
    //     // if($this->side_bar_id){
    //     //     $category = new NewSubMenu();
    //     //     $category->name = $request->name;
    //     //     $category->side_bar_id = $request->side_bar_id;
    //     //     $category->save();

    //     // }
    //     // // else{
    //         $side = new SideBar();
    //         $side->name = $this->name;
    //         $side->save();
    //     // }
    //     session()->flash('message','Category was added');
    //     return redirect()->back()->with('message','Added new menu');
      
    // }
    // public function addmenu(Request $request){
    //     $data = new SideBar;
    //     $data->name = $request->name;
      
    //     $data->save();
        
    //     return redirect()->back()->with('message','Added new mod');
    // }

    // public function addmenu(){
    //     $menu = SideBar::all();
    //     return view('livewire.add-menu-component',['menu'=>$menu]);
    // }

    public function backend(){
    

        $data = SideBar::all();
        $submenu = NewSubMenu::all();
        return view('backend',['data'=>$data,'submenu'=>$submenu]);
    }
    public function welcome(){
        return view('welcome');
    }
}
