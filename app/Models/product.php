<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{

    public function user(){

return $this->belongsToMany('App\Models\User');


    }
    //use HasFactory;
}
