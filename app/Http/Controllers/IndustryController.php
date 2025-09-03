<?php

// app/Http/Controllers/Admin/IndustryController.php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndustryController extends Controller
{
    public function index()
    {
        $industries = Industry::latest()->paginate(10);
        return view('pages.admin.industries.index', compact('industries'));
    }

    public function create()
    {
        return view('pages.admin.industries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $path = $request->file('image') ? $request->file('image')->store('industries', 'public') : null;

        Industry::create([
            'name'  => $request->name,
            'image' => $path,
        ]);

        return redirect()->route('industries.index')->with('success', 'Industry added successfully.');
    }

    public function edit(Industry $industry)
    {
        return view('pages.admin.industries.edit', compact('industry'));
    }

    public function update(Request $request, Industry $industry)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($industry->image) {
                Storage::disk('public')->delete($industry->image);
            }
            $industry->image = $request->file('image')->store('industries', 'public');
        }

        $industry->name = $request->name;
        $industry->save();

        return redirect()->route('industries.index')->with('success', 'Industry updated successfully.');
    }

    public function destroy(Industry $industry)
    {
        if ($industry->image) {
            Storage::disk('public')->delete($industry->image);
        }
        $industry->delete();

        return redirect()->route('industries.index')->with('success', 'Industry deleted successfully.');
    }
}
