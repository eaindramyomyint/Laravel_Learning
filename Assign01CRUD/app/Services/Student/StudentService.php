<?php

namespace App\Services\Student;

use App\Contracts\Dao\StudentDaoInterface;
use App\Contracts\Services\StudentServiceInterface;
use Illuminate\Http\Request;

class StudentService implements StudentServiceInterface
{

    private $studentDao;
 
    public function __construct(StudentDaoInterface $studentDao)
    {
      $this->studentDao = $studentDao;
    }

    public function getStuList() {
    	return $this->studentDao->getStuList();
    }

    public function saveStu(Request $request) {
    	return $this->studentDao->saveStu($request);
    }

    public function getStuById($student) {
    	return $this->studentDao->getStuById($student);
    }

    public function updateStuById(Request $request, $student) {
    	return $this->studentDao->updateStuById(Request $request, $student);
    }

    public function deleteStuById($student) {
    	return $this->studentDao->deleteStuById($student);
    }
}