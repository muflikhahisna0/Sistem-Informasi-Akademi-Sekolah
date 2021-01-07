<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = DB::table('student')->get();
        return view('students/index', ['student' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:student',
            'name' => 'required',
            'image' => 'required',
            'rank' => 'required',
            'score' => 'required'
        ]);
        $student = new Student;
        // data yg mau di Request
        $student->nis = $request->nis;
        $student->name = $request->name;
        $student->image = $request->image;
        $student->rank = $request->rank;
        $student->score = $request->score;
        $student->save();
        return redirect('/student')->with('status', 'Data has been added succesfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('/students/edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nis' => 'required|unique:student',
            'name' => 'required',
            'image' => 'required',
            'rank' => 'required',
            'score' => 'required',
        ]);
        Student::where('id', $student->id)
            ->update([
                'nis' => $request->nis,
                'name' => $request->name,
                'image' => $request->image,
                'rank' => $request->rank,
                'score' => $request->score,
            ]);
        return redirect('/student')->with('status', 'Data has been updated succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Students
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/student')->with('status', 'Data has been deleted succesfully!');
    }
}
