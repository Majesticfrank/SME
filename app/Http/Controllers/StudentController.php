<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function landingPage(){
        return view("phplandingpage");
    }
}
