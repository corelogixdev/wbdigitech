<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    // Show all team members in admin
    public function index()
{
    $teams = Team::latest()->paginate(10); // ✅ paginator
    return view('pages.admin.team.index', compact('teams'));
}

    // Show create form
    public function create()
    {
        return view('pages.admin.team.create');
    }

    // Store new member
    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'speciality' => 'required|string|max:255',
            'image'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('teams', 'public');
        }

        Team::create([
            'name'       => $request->name,
            'speciality' => $request->speciality,
            'image'      => $imagePath,
        ]);

        return redirect()->route('team.index')->with('success', 'Team member added!');
    }

    // Delete member
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        if ($team->image && file_exists(public_path('storage/' . $team->image))) {
            unlink(public_path('storage/' . $team->image));
        }
        $team->delete();

        return redirect()->back()->with('success', 'Team member deleted!');
    }
     public function edit(Team $team)
    {
        return view('pages.admin.team.edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'speciality' => 'required|string|max:255',
            'image'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($team->image) {
                Storage::disk('public')->delete($team->image);
            }
            $team->image = $request->file('image')->store('teams', 'public');
        }

        $team->update([
            'name'       => $request->name,
            'speciality' => $request->speciality,
            'image'      => $team->image,
        ]);

        return redirect()->route('team.index')->with('success', 'Team member updated successfully!');
    }

}
