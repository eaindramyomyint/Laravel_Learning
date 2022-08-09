<?php

namespace App\Dao;

use App\Models\Student;
use App\Models\StudentDetail;
use App\Contracts\Dao\StudentDaoInterface;
use Illuminate\Http\Request;

class StudentDao implements StudentDaoInterface
{ 
    public function getStuList() {
	$students = Student::all();
    	return $students;
    }

    public function saveStu(Request $request) {
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
    	return $student;
    }

    public function getStuById($student) {
	$student = Student::find($student);
    	return $student;
    }

    public function updateStuById(Request $request, $student) {
        $student = Student::find($student);
	$student->Student::update([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        $student->studentDetail()->update([
            'alter_phone' => $request->alter_phone,
            'course' => $request->course,
            'roll_no' => $request->roll_no,
        ]);
    	return $student;
    }

    public function deleteStuById($student) {
	$student = Student::find($student);
	$student->delete();
    	return $student;
    }
 