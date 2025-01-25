<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardControler extends Controller
{
    public function index()
    {
        $users = User::all();
        $teachers = User::where('role', 'teacher');
        $administrators = User::where('role', 'administration');
        return view('dashboard', compact('users', 'teachers', 'administrators'));
    }
    public function teachers()
    {
        return view('dash.teachers');
    }
    public function administration()
    {
        return view('dash.administration');
    }
    public function students(Request $request)
    {
        $searchTerm = $request->search;
        $students = Student::when($searchTerm, function($query, $searchTerm){
            $query->where('name', 'like', "%$searchTerm%")
            ->orwhere('class', 'like', "%$searchTerm%");
        })->paginate(80);
        return view('dash.students', compact('students'));
    }
}
