<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;


class dahController extends Controller
{
    protected $course;
    public function __construct(course $course)
    {
        $this->course=$course;

    }
    public function see(){
        return view("phpdashboard");
    }


    public function Admindisplay(){
        $courses= $this->course->all();
        return view('admindashboard', ['courses'  => $courses]);
    
        
    }
}
