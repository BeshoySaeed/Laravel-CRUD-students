<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;



class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::paginate(4);
        return view('students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->fname = $request->fname;
        $student->lname = $request->lname;
        $student->email = $request->email;
        $student->age   = $request->age;
        $student->about = $request->about;
        $student->grade = $request->grade;

        $student->save();
        return to_route('students');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->fname = $request->fname;
        $student->lname = $request->lname;
        $student->email = $request->email;
        $student->age   = $request->age;
        $student->about = $request->about;
        $student->grade = $request->grade;

        $student->save();
        return to_route('students');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        // $confirmed = confirm(
        // label: 'Do you accept the terms?',
        // r/equired: true
        // );
        // if ($confirmed) {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('students');
        // } else {
        // return view('students.index', ['error' => 'deletion failed']);
        // }
    }
}
