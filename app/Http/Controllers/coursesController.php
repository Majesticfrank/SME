<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;


class coursesController extends Controller
{
    protected $course;
    public function __construct(course $course)
    {
        $this->course = $course;
    }
    public function kix()
    {
        return view("phpcourseform");


    }

    public function createCourse(Request $retrieve)
    {
        // dd($retrieve);


        $retrieve->validate([
            'name' => 'required',
            'credit' => 'required',
            'code' => 'required',
            'level' => 'required'
        ]);
        $Coursedetails = [
            "name" => $retrieve->name,
            "credit" => $retrieve->credit,
            "code" => $retrieve->code,
            "level" => $retrieve->level
        ];
        $courses = new course;

        $courses->create($Coursedetails); 


        return redirect()->route('admin_dashboard');

    }

    function displaycourses()
    {
        $courses = $this->course->all();
        // dd($courses);
        return view('displaycourses', ['courses' => $courses]);
    }


    function Editcourses($courseID){
        $course = $this->course->find($courseID);
         return view('Editcourses',['course' => $course]  );

    }

    
public function edit(Request $retrieve,  $courseID ){
    $retrieve->validate([
        'name' => 'required',
        'credit' => 'required',
        'code' => 'required',
        'level' => 'required'
    ]);


    $Coursedetails = [
        "name" => $retrieve->name,
        "credit" => $retrieve->credit,
        "code" => $retrieve->code,
        "level" => $retrieve->level
    ];
    $course = $this->course->find($courseID);
    
    $course->update($Coursedetails); 

    return redirect()->route('admin_dashboard');

}

public function remove($courseID){
    $course=$this->course->find($courseID);
    $course->delete();


    return redirect()->route('admin_dashboard');


}

}
