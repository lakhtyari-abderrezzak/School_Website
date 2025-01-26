<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function status(Request $request, User $user){
        $user->status = $request->status;
        $user->save();
         
        return redirect()->back()->with('success', 'Status Edited Successfully');
    }
}
