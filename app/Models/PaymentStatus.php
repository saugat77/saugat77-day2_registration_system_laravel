<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class PaymentStatus extends Model
{
    use HasFactory;
    public function category(){
        $this->belongsto(User::class);
    }
}
