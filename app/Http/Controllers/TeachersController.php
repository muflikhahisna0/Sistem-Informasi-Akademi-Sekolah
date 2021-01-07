<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Teacher;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher = DB::table('teacher')->get();
        return view('teachers/index', ['teacher' => $teacher]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers/create');
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
            'nip' => 'required|unique:teacher',
            'name' => 'required',
            'image' => 'required',
            'subject' => 'required',
        ]);
        $teacher = new Teacher;
        // data yg mau di Request
        $teacher->nip = $request->nip;
        $teacher->name = $request->name;
        $teacher->image = $request->image;
        $teacher->subject = $request->subject;
        $teacher->save();
        return redirect('/teacher')->with('status', 'Data has been added succesfully!');
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
     * @param  App\Teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('/teachers/edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'nip' => 'required|unique:teacher',
            'name' => 'required',
            'image' => 'required',
            'subject' => 'required',
        ]);
        Teacher::where('id', $teacher->id)
            ->update([
                'nip' => $request->nip,
                'name' => $request->name,
                'image' => $request->image,
                'subject' => $request->subject,
            ]);
        return redirect('/teacher')->with('status', 'Data has been updated succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        Teacher::destroy($teacher->id);
        return redirect('/teacher')->with('status', 'Data has been deleted succesfully!');
    }
}
