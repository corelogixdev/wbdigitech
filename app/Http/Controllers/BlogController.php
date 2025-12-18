<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    // =======================
    // ADMIN FUNCTIONS
    // =======================
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
            'title'            => 'required|string|max:255',
            'content'          => 'required',
            'image'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords'    => 'nullable|string',
        ]);

        $imagePath = $request->file('image')?->store('blogs', 'public');

        // SLUG GENERATION
        $slug = Str::slug($request->title);
        $count = Blog::where('slug', 'LIKE', "{$slug}%")->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }

        Blog::create([
            'title'            => $request->title,
            'slug'             => $slug,
            'content'          => $request->content,
            'image'            => $imagePath,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords'    => $request->meta_keywords,
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
            'title'            => 'required|string|max:255',
            'content'          => 'required',
            'image'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords'    => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $blog->image = $request->file('image')->store('blogs', 'public');
        }

        // Update slug ONLY if title changes
        if ($blog->title !== $request->title) {
            $slug = Str::slug($request->title);
            $count = Blog::where('slug', 'LIKE', "{$slug}%")
                         ->where('id', '!=', $blog->id)
                         ->count();
            if ($count > 0) {
                $slug .= '-' . ($count + 1);
            }
            $blog->slug = $slug;
        }

        $blog->update([
            'title'            => $request->title,
            'content'          => $request->content,
            'image'            => $blog->image,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords'    => $request->meta_keywords,
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

    public function publicShow($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('pages.blogs.show', compact('blog'));
    }
}
