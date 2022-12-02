<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    protected  $table ='lesson';
    protected $fillable=['id','index_name','image_url','lesson'];
    use HasFactory;
}
