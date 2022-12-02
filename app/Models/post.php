<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *@method static find(int$int)
 */class post extends Model
{
 protected  $table = 'posts';

//    protected $primaryKey = 'id';public static function where(string$string,string$string1)


//protected  $fillable =['title','body' ];
//protected $guarded=['body'];

public function user(){


    return $this->belongsTo('App\Models\User');

}
}


