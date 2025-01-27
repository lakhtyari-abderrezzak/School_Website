<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use Illuminate\Http\Request;

class SubjectController extends Controller
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
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' =>'required|max:100',
        ]);

        Subject::create([
            'name' => $request->name,
        ]);
        return redirect()->route('classes')->with('success', 'Created  Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        // $subject = Subject::findOrFail($subject);
        return view('subjects.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        $request->validate([
            'name' =>'required|max:100',
        ]);

        $subject->update([
            'name' => $request->name,
        ]);
        return redirect()->route('classes')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();

        return redirect()->route('classes')->with('success', 'Deleted Successfully');


    }
}
