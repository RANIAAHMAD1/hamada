<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class SecondControler extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth')->except('ShowString2');
    }


    public function  ShowString0(){



        return ' static string';



    }

    public function  ShowString1(){



        return ' static string';



    }

    public function  ShowString2(){



        return ' static string';



    }

    public function  ShowString3(){



        return ' static string';



    }
}
