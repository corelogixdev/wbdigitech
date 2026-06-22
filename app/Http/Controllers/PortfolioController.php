<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $perPage = request('per_page', 10);
        $portfolios = $perPage === 'all' ? Portfolio::latest()->paginate(Portfolio::count() ?: 1) : Portfolio::latest()->paginate((int)$perPage);
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

        /* Thumbnail */
        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('portfolio', 'public');
        }

        /* Images */
        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $images[] = $img->store('portfolio', 'public');
            }
        }
        $validated['images'] = $images;

        /* Services */
        $validated['services'] = $request->services;

        Portfolio::create($validated);

        return redirect()->route('portfolios.index')
            ->with('success', 'Portfolio created successfully!');
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

            /* 🔹 NEW */
            'remove_images' => 'nullable|array',

            'services' => 'required|array',
            'services.*.name' => 'required|string',
            'services.*.description' => 'nullable|string',
        ]);

        /* Thumbnail */
        if ($request->hasFile('thumbnail')) {
            // Optional: delete old thumbnail
            if ($portfolio->thumbnail) {
                Storage::disk('public')->delete($portfolio->thumbnail);
            }

            $validated['thumbnail'] = $request->file('thumbnail')
                ->store('portfolio', 'public');
        }

        /* 🔴 EXISTING IMAGES */
        $images = $portfolio->images ?? [];

        /* 🔴 REMOVE SELECTED IMAGES */
        if ($request->filled('remove_images')) {
            foreach ($request->remove_images as $img) {
                Storage::disk('public')->delete($img);
                $images = array_values(array_diff($images, [$img]));
            }
        }

        /* ➕ ADD NEW IMAGES */
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $images[] = $img->store('portfolio', 'public');
            }
        }

        $validated['images'] = $images;

        /* Services */
        $validated['services'] = $request->services;

        $portfolio->update($validated);

        return redirect()->route('portfolios.index')
            ->with('success', 'Portfolio updated successfully!');
    }

    public function destroy(Portfolio $portfolio)
    {
        /* 🔥 DELETE ALL FILES */
        if ($portfolio->thumbnail) {
            Storage::disk('public')->delete($portfolio->thumbnail);
        }

        if (!empty($portfolio->images)) {
            foreach ($portfolio->images as $img) {
                Storage::disk('public')->delete($img);
            }
        }

        $portfolio->delete();

        return redirect()->route('portfolios.index')
            ->with('success', 'Portfolio deleted successfully!');
    }

    /* Public Pages */

    public function publicIndex()
    {
        $portfolios = Portfolio::latest()->get();
        return view('pages.portfolio.index', compact('portfolios'));
    }

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
