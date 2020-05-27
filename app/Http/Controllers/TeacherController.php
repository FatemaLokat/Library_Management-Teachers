<?php

namespace App\Http\Controllers;

use DB;
use App\Teacher;
use Illuminate\Http\Request;
use Excel;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();

        return view('TeacherTable', compact('teachers'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $teachers = DB::table('teachers')->where('Teacher_ID', 'like','' .$search. '%' )
                    ->orWhere('Name', 'like','' .$search. '%')->orWhere('Book_ID', 'like','' .$search. '%')->orWhere('Department', 'like','' .$search. '%')->paginate();
        return view('TeacherTable', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('TeacherForm');
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
            'Teacher_ID'=>'required',
            'Name'=>'required',
            'Book_ID'=>'required',
            'Department'=>'required',
            'Email_ID'=>'required',
            'Mobile_Number'=>'required'
        ]);

        $teacher = new Teacher([
            'Teacher_ID'=>$request->get('Teacher_ID'),
            'Name'=>$request->get('Name'),
            'Book_ID'=>$request->get('Book_ID'),
            'Department'=>$request->get('Department'),
            'Email_ID'=>$request->get('Email_ID'),
            'Mobile_Number'=>$request->get('Mobile_Number')

        ]);
        $teacher->save();
        return redirect('/index')->with('success', 'Entry details saved!');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('TeacherTableEdit',compact('teacher'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Teacher_ID'=>'required',
            'Name'=>'required',
            'Book_ID'=>'required',
            'Department'=>'required',
            'Email_ID'=>'required',
            'Mobile_Number'=>'required'
        ]);

        $teacher = Teacher::find($id);
        $teacher->Teacher_ID =  $request->get('Teacher_ID');
        $teacher->Name = $request->get('Name');
        $teacher->Book_ID = $request->get('Book_ID');
        $teacher->Department = $request->get('Department');
        $teacher->Email_ID = $request->get('Email_ID');
        $teacher->Mobile_Number = $request->get('Mobile_Number');
        $teacher->save();
        

        return redirect('/teachers')->with('success', 'Teachers details updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();

        return redirect('/teachers')->with('success', 'Teacher details deleted!');
    }


    
}
