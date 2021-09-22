<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function store(Request $request){
        $student = new Student();
        $student->name= $request->name;
        $student->course= $request->course;
        $student->email= $request->email;
        $student->phone= $request->phone;
        $student->save();
        return response()->json([
            "status"=> 200,
            "message"=>"Student Save Successfully"
        ]);
    }

    public function index(){
        $students = Student::all();
        return response()->json([
            "status"=> 200,
            "students"=>$students
        ]);
    }
}
