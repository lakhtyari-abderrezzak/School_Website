<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function create() {
        $users = User::where('role', 'teacher')->get();
        $subjects = Subject::all();
        return view('teachers.create', compact('users', 'subjects'));
    }
    public function store(Request $request) {
        $feilds = $request->validate([
            'user_id' => 'required',
            'subject_id' => 'required',
            'full_name' => 'required|max:100',
            'phone' => 'nullable'
        ]);

        Teacher::create($feilds);

        return redirect()->route('teachers')->with('success', 'Created Successfully');
    }
    public function edit(Teacher $teacher) {
        $users = User::where('role', 'teacher')->get();
        $subjects = Subject::all();
        return view('teachers.edit', compact('teacher', 'users', 'subjects'));
    }
    public function Update(Request $request, Teacher $teacher) {
        $feilds = $request->validate([
            'user_id' => 'required',
            'subject_id' => 'required',
            'full_name' => 'required|max:100',
            'phone' => 'nullable'
        ]);

        $teacher->update($feilds);
        
        return redirect()->route('teachers')->with('success', 'Updated Successfully');
    }
    public function destroy(Teacher $teacher){
        $teacher->delete();

        return redirect()->route('teachers')->with('success', 'Deleted Successfully');
    }
}
