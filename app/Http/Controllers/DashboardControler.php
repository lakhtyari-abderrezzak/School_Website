<?php

namespace App\Http\Controllers;

use App\Models\Administration;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardControler extends Controller
{
    public function index()
    {
        $users = User::all();
        $teachers = User::where('role', 'teacher');
        $administrators = User::where('role', 'administration');
        $students = User::where('role', 'student');
        return view('dashboard', compact('users', 'teachers', 'administrators', 'students'));
    }
    public function teachers(Request $request)
    {
        $searchTerm = $request->search;
    
        $teachers = Teacher::when($searchTerm, function($query, $searchTerm) {
                $query->where('full_name', 'like', "%$searchTerm%");
            })
            ->paginate(15);
    
        return view('dash.teachers', compact('teachers'));
    }
    
    public function administration()
    {
        $administrations = Administration::get();
        return view('dash.administration', compact('administrations'));
    }
    public function students(Request $request)
    {
        $searchTerm = $request->search;
        $students = Student::when($searchTerm, function($query, $searchTerm){
            $query->where('name', 'like', "%$searchTerm%")
            ->orwhere('class', 'like', "%$searchTerm%");
        })->paginate(15);
        return view('dash.students', compact('students'));
    }
    public function users(Request $request){
        $query = User::query();

    // If there's a search query, filter by name or email
    if ($request->has('search') && $search = $request->input('search')) {
        $query->where('name', 'like', '%' . $search . '%')
              ->orWhere('email', 'like', '%' . $search . '%');
    }

    // If there's a selected role to sort by, filter users by that role
    if ($request->has('sort_by_role') && $role = $request->input('sort_by_role')) {
        $query->where('role', $role);
    }

    // Get paginated users
    $users = $query->latest()->paginate(15);

        return view('dash.users', compact('users'));
    }
    public function classes(){
        $subjects = Subject::with(['teacher', 'students'])->latest()->paginate(10);
        return view('dash.classes', compact('subjects'));
    }

    public function studentDashboard(){
        return view('students.dashboard');
    }
    public function teacherDashboard(){
        return view('teachers.dashboard');
    }
}
