<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function status(Request $request, $id){
        $request->validate([
            'status' => 'required|string|in:active,pending',
        ]);
        $user = User::findOrFail($id);

        $user->status = $request->status;
        $user->save();
         
        return redirect()->back()->with('success', 'Status Edited Successfully');
    }
}
