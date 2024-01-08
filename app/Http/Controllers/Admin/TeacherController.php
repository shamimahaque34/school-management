<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    private $teacher;
    public function index()
    {
        return view('backend.teacher.manage',[
            'teachers'=>Teacher::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.teacher.add',[
            'teachers'=>Teacher::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Teacher::saveData($request);
        return redirect()->route('teachers.index')->with('success','Teacher Create successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend..teacher.add',[
            'teacher'=>Teacher::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Teacher::updateData($request,$id);
        return redirect()->route('teachers.index')->with('success','Teacher Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->teacher = Teacher::find($id);

        if (file_exists($this->teacher->image)){
            unlink($this->teacher->image);
        }

        $this->teacher->delete();
        return back()->with('success', 'Teacher Deleted Successfully.');
    }
}
