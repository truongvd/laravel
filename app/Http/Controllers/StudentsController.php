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

    public function savestudent(Request $request)
    {
        $response = array(
            'status' => 'success',
            'msg' => $request->message,
        );
        return response()->json($response);
    }

    public function showOverlayAddStudent(Request $request)
    {
        $response = array(
            'status' => 'success',
            'html' => view('students.overlayaddstudent')->render(),
            'overlayId' => 'addStudent',
            'title' => 'addStudent',
        );
        return response()->json($response);
    }

}
