<?php

namespace App\Http\Controllers;

use App\Models\Person;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $people = Person::paginate(5);
      return view('people.index', compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('people.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required|string|max:255',
            'email' => 'required|email|max:255',
            'age' => 'required|integer|min:10|max:140',
        ]);
        Person::create($validatedData);
        return redirect()->route('people.index')->with('success', 'Person created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $person = Person::findOrFail($id);
        return view('people.show', compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $person = Person::findOrFail($id);
        return view('people.edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    $validatedData = $request->validate([
        'name'=> 'required|string|max:255',
        'email' => 'required|email|max:255',
        'age' => 'required|integer|min:10|max:140',
    ]);
    $person = Person::findOrFail($id);
    $person->update($validatedData);
    return redirect()->route('people.index')->with('success', 'people update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $person = Person::findOrFail($id);
        $person->delete();
        return redirect()->route('people.index')->with('success', 'Person Deleted successfully');
    }
}
