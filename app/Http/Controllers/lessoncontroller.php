<?php

namespace App\Http\Controllers;

use App\Models\lesson;

class lessoncontroller extends Controller
{
    //
    public function index(): string
    {
       //
      return lesson::all();

    }




}
