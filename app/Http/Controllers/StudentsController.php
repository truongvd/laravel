<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\View\View;

class StudentsController extends Controller
{
    public function index()
    {
        $objStudent = new Student();
        $students = $objStudent->getAllStudent();
        return view('students.index', compact('students'));
    }

    public function savestudent()
    {
        $msg = "This is a simple message.";
        return response()->json(array('msg'=> $msg), 200);
    }

}
