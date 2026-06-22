<?php
namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    // -------------------------
    // ADMIN METHODS (Dashboard)
    // -------------------------
    public function index()
    {
        $perPage = request('per_page', 10);
        $services = $perPage === 'all' ? Service::latest()->paginate(Service::count() ?: 1) : Service::latest()->paginate((int)$perPage);
        return view('pages.admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('pages.admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:services,title',
            'short_description' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('services', 'public');
        }

        Service::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'short_description' => $request->short_description,
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    public function edit(Service $service)
    {
        return view('pages.admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required|unique:services,title,' . $service->id,
            'short_description' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048'
        ]);

        $imagePath = $service->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('services', 'public');
        }

        $service->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'short_description' => $request->short_description,
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        if ($service->image && file_exists(public_path('storage/'.$service->image))) {
            unlink(public_path('storage/'.$service->image));
        }

        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }

    // -------------------------
    // PUBLIC METHODS (Frontend)
    // -------------------------
    public function publicIndex()
    {
        $services = Service::latest()->paginate(6);
        return view('pages.services.index', compact('services'));
    }

    public function show($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
    $relatedServices = Service::latest()->take(3)->get();
    return view('pages.services.show', compact('service', 'relatedServices'));
    }

}
