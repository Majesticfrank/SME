<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register(){
        return view("phpregister");

    }

    public function signUp(Request $request){
        // dd($request);

        // $request->validate([
        //     "firstname" => "required",
        //     "lastname"=> "required",
        //     'email'=>'required',
        //     'password'=>['required','min:8','confirmed'],
        //     'dob'=> 'required',
        //     'confirm'=>'required',
        //     'phone'=>'required'
        // ]);

       $registeredDetails = [
        "firstname" => $request->firstname,
        "lastname" => $request->lastname,
        "email" => $request->email,
        "password" => bcrypt($request->password),
        "phone"=> $request->phone,
        "dob"=>$request->dob
       ];
       // dd($registeredDetails);

       $user=new User;
       
       
       $user->create($registeredDetails);
       //dd($user);

       return redirect()->route('landingpage');
    }
}
