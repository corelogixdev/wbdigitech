<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    // Admin list
    public function index()
    {
        $perPage = request('per_page', 10);
        $careers = $perPage === 'all' ? Career::latest()->paginate(Career::count() ?: 1) : Career::latest()->paginate((int)$perPage);
        return view('pages.admin.careers.index', compact('careers'));
    }

    // Create form
    public function create()
    {
        return view('pages.admin.careers.create');
    }

    // Store
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Career::create($validated);

        return redirect()->route('careers.index')->with('success', 'Career added successfully.');
    }

    // Edit form
    public function edit(Career $career)
    {
        return view('pages.admin.careers.edit', compact('career'));
    }

    // Update
    public function update(Request $request, Career $career)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $career->update($validated);

        return redirect()->route('careers.index')->with('success', 'Career updated successfully.');
    }

    // Delete
    public function destroy(Career $career)
    {
        $career->delete();

        return redirect()->route('careers.index')->with('success', 'Career deleted successfully.');
    }

    // Public careers page
    public function publicIndex()
    {
        $careers = Career::latest()->get();
        return view('pages.careers', compact('careers'));
    }
}
