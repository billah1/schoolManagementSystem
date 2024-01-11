<?php

namespace App\Http\Controllers;

use App\Models\Dropdown;
use App\Models\StudentResult;
use App\Models\Teacher;
use App\Models\ResultDetail;
use Illuminate\Http\Request;

class AcademicController extends Controller
{

//    private $query;

    public function resultLogin()
    {
        return view('frontend.academic.result.exam-result');
    }


    public function resultPage(Request $request)
    {
        $students = StudentResult::where('roll', $request->classRoll)
            ->whereYear('date', $request->date)
            ->where('sec', $request->sec)
            ->where('semester', $request->semester)
            ->where('class', $request->class)
            ->first();

        if ($students) {
            $result = ResultDetail::where('student_result_id', $students->id)->get();
            return view('frontend.academic.result.view-result', compact('students', 'result'));
        } else {
            return redirect()->back()->with('alert', 'Your information is incorrect. Please try with the correct data.');
        }
    }



    public function teacherIndex()
    {
        $teachers = Teacher::all();
        return view('frontend.academic.teachers.teachers',['teachers'=>$teachers]);
    }


    public function teachersDetails()
    {
        $teachers = Teacher::all();
        return view('frontend.academic.teachers.teachersDetails',compact('teachers'));
    }

    public function teacherSingleDetails($id)
    {
        $teacher = Teacher::find($id);
        return view('frontend.academic.teachers.teacher-singleDetails', compact('teacher'));
    }




}


