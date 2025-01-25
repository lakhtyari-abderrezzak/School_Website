<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardControler extends Controller
{
    public function index(){
        $users = User::all();
        $teachers = User::where('role', 'teacher');
        $administrators = User::where('role', 'administration');
        return view('dashboard', compact('users', 'teachers', 'administrators'));
    }
    public function teachers(){
        return view('dash.teachers');
    }
    public function administration(){
        return view('dash.administration');
    }
    public function students(){
        return view('dash.students');
    }
}
