<?php

namespace App\Http\Controllers\Api;

use App\Models\Emprendedor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
   public function register(Request $request)
   {
       $validateData = $request->validate([
           'name' => 'required|string|max:255',
           'email' => 'required|string|email|max:255|unique:emprendedor',
           'password' => 'required|string|min:6|confirmed',
       ]);
       $api_token = Str::random(60);
       $user = Emprendedor::create([
           'name' => $validateData['name'],
           'nombre_emp' => $validateData['name'],
           'email' => $validateData['email'],
           'password' => Hash::make($validateData['password']),
           'api_token' =>  $api_token,
       ]);
       return response(['api_token' => $api_token, 'user'=> $user], 201);
   }

    public function login(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(!auth()->attempt($validateData)){
            return response()->json(['msg'=>'Invalid Credentials']);
        }

        $api_token = Str::random(60);
        auth()->user()->forceFill([
            'api_token' => $api_token,
        ])->save();
//        $user = Emprendedor::create([
//            'name' => $validateData['name'],
//            'nombre_emp' => $validateData['name'],
//            'email' => $validateData['email'],
//            'password' => Hash::make($validateData['password']),
//            'api_token' => $api_token,
//        ]);
        return response(['api_token' => $api_token, 'user'=> auth()->user()], 200);
    }

//    public function logout(Request $request)
//    {
////        auth()->user()->api_token = null;
////        auth()->user()-> setRememberToken('');
//
////        auth()->session()->invalidate();
//        auth()->user()->guard()->logout();
//        $request->session()->invalidate();
//
//        return response(['msg' => 'user logout'], 200);
//    }
//}
