<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(10);
        return view('pages.admin.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        return view('pages.admin.portfolio.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'category' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'client_overview' => 'nullable|string',
            'website_link' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'services' => 'required|array',
            'services.*.name' => 'required|string',
            'services.*.description' => 'nullable|string',
        ]);

        // Thumbnail
        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('portfolio', 'public');
        }

        // Images
        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $images[] = $img->store('portfolio', 'public');
            }
        }
        $validated['images'] = $images;

        // Services (JSON)
        $validated['services'] = $request->services;

        Portfolio::create($validated);

        return redirect()->route('portfolios.index')->with('success', 'Portfolio created successfully!');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('pages.admin.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'category' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'website_link' => 'nullable|string',
            'client_overview' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'services' => 'required|array',
            'services.*.name' => 'required|string',
            'services.*.description' => 'nullable|string',
        ]);

        // Thumbnail
        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('portfolio', 'public');
        }

        // Images
        $images = $portfolio->images ?? [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $images[] = $img->store('portfolio', 'public');
            }
        }
        $validated['images'] = $images;

        // Services
        $validated['services'] = $request->services;

        $portfolio->update($validated);

        return redirect()->route('portfolios.index')->with('success', 'Portfolio updated successfully!');
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->route('portfolios.index')->with('success', 'Portfolio deleted successfully!');
    }
    /**
     * Public portfolio listing.
     */
    public function publicIndex()
    {
        $portfolios = Portfolio::latest()->get();
        return view('pages.portfolio.index', compact('portfolios'));
    }

    /**
     * Public portfolio detail page.
     */
    public function publicShow($title, $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('pages.portfolio.show', compact('portfolio'));
    }

    public function caseStudy($title, $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('pages.portfolio.case_study', compact('portfolio'));
    }
}
