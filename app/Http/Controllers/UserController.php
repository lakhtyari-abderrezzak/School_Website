<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function edit(User $user){
        return view('users.edit', compact('user'));
    }
    public function Update(Request $request, User $user) {
        $feilds = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed'],
            'role' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255']
        ]);

        $user->update($feilds);
        
        return redirect()->route('teachers')->with('success', 'Updated Successfully');
    }

    public function destroy(user $user){
        if (Auth::user()->is_principal) {
            if ($user) {
                $user->delete();
                return redirect()->route('users')->with('success', 'Deleted Successfully');
            } else {
                return redirect()->route('users')->with('error', 'user not found.');
            }
        } else {
            return redirect()->back()->with('error', 'You do not have permission to delete this teacher.');
        }
    }
}
