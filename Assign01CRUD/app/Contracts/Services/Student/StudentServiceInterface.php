<?php
namespace App\Contracts\Services\Student;

use Illuminate\Http\Request;


interface StudentServiceInterface 
{
    public function getStuList();

    public function saveStu(Request $request);

    public function getStuById($student);

    public function updateStuById(Request $request, $id);

    public function deleteStuById($student);
}