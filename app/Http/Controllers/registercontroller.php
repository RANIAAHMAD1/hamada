<?php

namespace App\Http\Controllers;
use Illuminate\Auth\AuthServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\validator;
use Illuminate\Support\Str;

class registercontroller extends Controller
{
    //
    public function register(Request $request){


    // return "hi";
           // $data = User::create([
           // 'name'=>$request->name,
           // 'email'=>$request->email,
          //  'password'=>Hash::make($request->password),
         //   'api_token'=>Str::random(60),




     //   ]);
//return $data;
        $validator =validator::make($request->all(),[
            'name' => 'required|max:191|string',
             'email' => 'required|max:191|unique:Users|string',
             'password' => 'required|string',
        ],['name.required'=>'هذاالحقل مطلوب',
            'name.max'=>'هذاالحقل مطلوب',
          'email.unique'=>'الايميل موجود بالفعل'

        ]);
        if($validator->fails()){

return $validator ->errors();




        }else{

             $data = User::create([
             'name'=>$request->name,
            'email'=>$request->email,
              'password'=>Hash::make($request->password),
              'api_token'=>Str::random(60),




              ]);
return $data;





        }
    }
}
