<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SideBar;
use App\Models\NewSubMenu;

class AddMenuComponent extends Component
{
    public $name;
    public $side_bar_id;
    public function menubtn(){
        if($this->side_bar_id){
            $category = new NewSubMenu();
            $category->name = $this->name;
            $category->side_bar_id = $this->side_bar_id;
            $category->save();
            
        }
         else{
            $side = new SideBar();
            $side->name = $this->name;
            $side->save();
         }
        session()->flash('message','Category was added');
        
      
    }
    public function render()
    {
        $menu = SideBar::all();
        return view('livewire.add-menu-component',['menu'=>$menu]);
    }
}
