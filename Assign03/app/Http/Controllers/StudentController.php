<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index() {
        $students = Student::all();
        return view ('student.index',compact('students'));
    }

    public function create() {
        return view ('student.create');
    }

    public function store(Request $request) {
        $student = Student::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        $student->studentDetail()->create([
            'alter_phone' => $request->alter_phone,
            'course' => $request->course,
            'roll_no' => $request->roll_no,
        ]);

        return redirect('students')->with('message','Student and Student Details created');
    }

    public function edit(Student $student) {
        //return $student;
        return view('student.edit' ,compact('student'));
    }

    public function update(Student $student,Request $request) {
        //return $student;
        $student->update([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        $student->studentDetail()->update([
            'alter_phone' => $request->alter_phone,
            'course' => $request->course,
            'roll_no' => $request->roll_no,
        ]);

        return redirect('students')->with('message','Student and Student Details updated');    
    }

    public function destory(Student $student) {
        $student->delete();
        return redirect('students')->with('message','Student and student details deleted');
    }

    public function details($student_id) {
        $student = Student::findOrFail($student_id)->studentDetail;
        return view ('student.details',compact('student'));
    }

   
}
