<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('students.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('role', 'student')->get();
        return view('students.create', compact('users'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $feilds = $request->validate([
        'user_id' => 'required',
        'name' => 'required|max:100',
        'phone' => 'nullable', 
        'class' => 'required|max:50',
        'enrollment_date' =>'required|date',
       ]);

       Student::create($feilds);

       return redirect()->route('students')->with('success', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $users = User::where('role', 'student')->get();
        return view('students.edit', compact('student', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $feilds = $request->validate([
            'user_id' => 'required',
            'name' => 'required|max:100',
            'phone' => 'nullable', 
            'class' => 'required|max:50',
            'enrollment_date' =>'required|date',
           ]);
           $student->update($feilds);

       return redirect()->route('students')->with('success', 'Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        
        return redirect()->route('students')->with('success', 'Deleted Successfully');
    }
}
