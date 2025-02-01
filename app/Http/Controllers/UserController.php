<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email,'],
            'password' => ['required', 'string', 'confirmed'],
            'role' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255'],
        ]);
        if ($request->filled('password')) {
            $fields['password'] = bcrypt($request->password);
        }

        User::create($fields);

        return redirect()->route('users')->with('success', 'Created User Successffully');
    }
    public function status(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string|in:active,pending',
        ]);
        $user = User::findOrFail($id);

        $user->status = $request->status;
        $user->save();

        return redirect()->back()->with('success', 'Status Edited Successfully');
    }
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, User $user)
    {
        // Validate the input fields
        $fields = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'password' => ['nullable', 'string', 'confirmed'],
            'role' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255'],
        ]);


        if ($request->filled('password')) {
            $fields['password'] = bcrypt($request->password);
        } else {

            unset($fields['password']);
        }


        $user->update($fields);

        // Redirect with success message
        return redirect()->route('users')->with('success', 'Updated Successfully');
    }


    public function destroy(user $user)
    {
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
