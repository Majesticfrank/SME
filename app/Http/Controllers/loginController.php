<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;

class loginController extends Controller
{
    //DEPENDECY INJECTION
    protected $user;
    public function __construct( User $user){
        $this->user = $user;

    }
    public function loginPage(){
        return view("phploginpage");
    }

    public function login(Request $request){
        $request->validate([
                "email" => "required",
                "password"=> "required",
        ]);

        $email = $request->input('email');
    $password = $request->input('password');

    $user = $this->user->where('email', $email)->first();
    if ($user) {

        if (password_verify($password, $user->password)) {

            auth()->login($user);

            return redirect()->route('dash');
        }
    }

    return back()->withErrors('Invalid email or password');
}








    }



