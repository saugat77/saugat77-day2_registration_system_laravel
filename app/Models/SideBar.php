<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SideBar extends Model
{
    use HasFactory;

    public function subCategories(){
        return $this->hasMany(NewSubMenu::class,'side_bar_id'); 
    }
}
