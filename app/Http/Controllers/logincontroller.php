<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class logincontroller extends Controller
{
    //

    public function login(Request $request): string
    {

        if(auth()->attempt(['email' => $request->input('email'),
            'password' => $request->input('password')])){

            $user = auth()->user();
            $user->api_token = Str::random(60);
            $user->save();
            return $user;
        }
        return "no";
    }
    public function logout(){
        if(auth()->user()){
            $user = auth()->user();
            $user->api_token = null ;
            $user->save() ;
            return response()->json(['message' => 'Thank you for using our application']);
        }
        return response()->json([
            'error' => 'Unable to logout user',
            'code' => 401,
        ], 401);
    }
}
