<?php

namespace App\Http\Controllers\Student;

use App\Models\Student;
use App\Contracts\Services\Student\StudentServiceInterface;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    private $studentInterface;

    public function __contruct(StudentServiceInterface $studentInterface) {

       $this->studentInterface = $studentInterface;

    }

    public function index() {
        $students = $this->studentInterface->getStuList();
        return view ('student.index',compact('students'));
    }

    public function create() {
        return view ('student.create');
    }

    public function store(Request $request) {
        
        $student = $this->studentInterface->saveStu($request);
        return redirect('students')->with('message','Student and Student Details created');
    }

    public function edit(Student $student) {
        //return $student;
	$student = $this->studentInterface->getStuByID($student);
        return view('student.edit' ,compact('student'));
    }

    public function update(Student $student,Request $request) {
        //return $student;
        $student = $this->studentInterface->updateStu($request , $student);
        return redirect('students')->with('message','Student and Student Details updated');    
    }

    public function destory(Student $student) {
        $students = $this->studentInterface->deleteStuByID($student);
        return redirect('students')->with('message','Student and student details deleted');
    }

    public function details($student_id) {
        $student = Student::findOrFail($student_id)->studentDetail;
        return view ('student.details',compact('student'));
    }
}
