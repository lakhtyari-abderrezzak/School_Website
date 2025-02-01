<?php

namespace App\Http\Controllers;

use App\Models\Administration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('role', 'administration')->get();
        return view('administration.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $feilds = $request->validate([
            'user_id' => 'required',
            'name' => 'required|max:100',
            'phone' => 'nullable'
        ]);

        Administration::create($feilds);

        return redirect()->route('administration')->with('success', 'Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Administration $administration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Administration $administration)
    {
        $users = User::where('role', 'administration')->get();
        return view('administration.edit', compact('administration', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Administration $administration)
    {
        $feilds = $request->validate([
            'user_id' => 'required',
            'name' => 'required|max:100',
            'phone' => 'nullable'
        ]);

        $administration->update($feilds);

        return redirect()->route('administration')->with('success', 'Updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Administration $administration)
    {
        if (Auth::user()->is_principal) {
            if ($administration) {
                $administration->delete();
                return redirect()->route('administration')->with('success', 'Deleted');
            } else {
                return redirect()->route('administration')->with('error', 'No records!');
            }
        } else {
            return redirect()->route('administration')->with('error', 'Not Allowed To Delete!');
        }
    }
}
