<?php

namespace App\Http\Controllers;

use App\Models\ResultDetail;
use App\Models\StudentResult;
use Illuminate\Http\Request;
use App\Models\Dropdown;
use Illuminate\Http\RedirectResponse;
use Carbon\Carbon;


class ResultController extends Controller
{
    public function create()
    {
        $dropdowns = Dropdown::all();
        return view('admin.academics.exam-result.addExamResult', compact('dropdowns'));
    }

    public function store(Request $request)
    {
        $subjectArray = $request->input('subject');
        $marksArray = $request->input('marks');

        $result = StudentResult::create([
            'name' => $request->input('name'),
            'class' => $request->input('class'),
            'roll' => $request->input('roll'),
            'sec' => $request->input('section'), // Assuming section field is named 'section'
            'semester' => $request->input('semester'),
            'date' => Carbon::createFromDate($request->input('date'), 1, 1)->toDateString(),
        ]);

        foreach ($subjectArray as $index => $subject) {
            ResultDetail::create([
                'student_result_id' => $result->id,
                'subject' => $subject ?? '',
                'marks' => $marksArray[$index] ?? '',
            ]);
        }

        return redirect()->route('manageExamResult')->with('success', 'Result created successfully');
    }


    public function manageResults()
    {
        $resultDetails = StudentResult::all();
        return view('admin.academics.manage-results', compact('resultDetails'));
    }

    public function edit($id)
    {
        $result_detail = StudentResult::with('resultMarks')->find($id);
//        $value = ResultDetail::find($id);
      return view('admin.academics.exam-result.editExamResult', compact('result_detail'));
    }



    public function update(Request $request, $id): RedirectResponse
    {
        $result = StudentResult::findOrFail($id);

        $result->update([
            'name' => $request->input('name'),
            'class' => $request->input('class'),
            'roll' => $request->input('roll'),
            'sec' => $request->input('sec'),
            'semester' => $request->input('semester'),
            'date' => $request->input('date'),
        ]);

        foreach ($request->input('subject') as $index => $subject) {
            $resultDetail = ResultDetail::findOrFail($result->resultMarks[$index]->id);

            $resultDetail->update([
                'subject' => $subject,
                'marks' => $request->input('marks')[$index] ?? '',
            ]);
        }

        return redirect()->route('manageExamResult')->with('success', 'Result updated successfully');
    }

    public function destroy($id)
    {
        $result = StudentResult::findOrFail($id);
        $result->delete();

        return redirect()->route('manageExamResult')->with('success', 'Result deleted successfully');
    }

    public function show( $id)
    {
        $detail = StudentResult::where('id',$id)->first();
        $student_details = ResultDetail::where('student_result_id',$id)->get();
        return view('admin.academics.exam-result.show',compact('detail','student_details'));
    }

}
