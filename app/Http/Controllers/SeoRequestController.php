<?php

// app/Http/Controllers/SeoRequestController.php
namespace App\Http\Controllers;

use App\Models\SeoRequest;
use Illuminate\Http\Request;

class SeoRequestController extends Controller
{
    // Frontend form submit
   public function store(Request $request)
{
    $validated = $request->validate([
        'website_url' => 'required',
        'first_name'  => 'required|string|max:100',
        'last_name'   => 'required|string|max:100',
        'email'       => 'required|email',
        'phone'       => 'nullable|string|max:20',
    ]);

    SeoRequest::create($validated);

    return back()->with('success', 'Your SEO audit request has been submitted!');
}

    // Admin: list all requests
    public function index()
    {
        $perPage = request('per_page', 10);
        $seoRequests = $perPage === 'all' ? SeoRequest::latest()->paginate(SeoRequest::count() ?: 1) : SeoRequest::latest()->paginate((int)$perPage);
        return view('pages.admin.seo_requests.index', compact('seoRequests'));
    }

    // Admin: view single request
    public function show(SeoRequest $seoRequest)
    {
        return view('pages.admin.seo_requests.show', compact('seoRequest'));
    }

    public function destroy(SeoRequest $seoRequest)
    {
        $seoRequest->delete();
        return back()->with('success', 'SEO request deleted successfully.');
    }
    public function publicIndex(){

        return view('pages.seo_request');
    }

}

