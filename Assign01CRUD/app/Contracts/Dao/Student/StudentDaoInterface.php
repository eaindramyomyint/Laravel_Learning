<?php

namespace App\Contracts\Dao\Student;

use Illuminate\Http\Request;

interface StudentDaoInterface
{
    public function getStuList();

    public function saveStu(Request $request);

    public function getStuById($student);

    public function updateStuById(Request $request, $student);

    public function deleteStuById($student);
}