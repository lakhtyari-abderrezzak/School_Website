<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
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
    public function users(Request $request){
        $searchTerm = $request->search;
        $users = User::when($searchTerm, function($query, $searchTerm){
            $query->where('name', 'like', "%$searchTerm%")
            ->orWhere('email', 'like', "%$searchTerm%");
        })->paginate(50);
        return view('dash.users', compact('users'));
    }
    public function classes(){
        $subjects = Subject::all();
        return view('dash.classes', compact('subjects'));
    }
}
