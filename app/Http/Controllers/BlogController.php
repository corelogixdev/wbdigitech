<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('pages.admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('pages.admin.blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required',
            'image'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = $request->file('image')?->store('blogs', 'public');

        Blog::create([
            'title'   => $request->title,
            'content' => $request->content,
            'image'   => $imagePath,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully!');
    }

    public function edit(Blog $blog)
    {
        return view('pages.admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required',
            'image'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $blog->image = $request->file('image')->store('blogs', 'public');
        }

        $blog->update([
            'title'   => $request->title,
            'content' => $request->content,
            'image'   => $blog->image,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
    }

    // =======================
    // FRONTEND FUNCTIONS
    // =======================
    public function publicIndex()
    {
        $blogs = Blog::latest()->paginate(6);
        return view('pages.blogs.index', compact('blogs'));
    }

    public function publicShow($id)
    {
        $blog = Blog::findOrFail($id);
        return view('pages.blogs.show', compact('blog'));
    }


}


