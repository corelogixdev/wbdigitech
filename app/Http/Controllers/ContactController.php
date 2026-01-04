<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Store contact form (Frontend)
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'country_code' => 'required|string|max:5',
            'phone' => 'required|string|max:20',
            'service' => 'required|string|max:100',
            'message' => 'required|string|max:500',
        ]);

        // Combine country code + phone
        $data['phone'] = $data['country_code'] . ' ' . $data['phone'];

        // Remove country_code before saving (optional)
        unset($data['country_code']);

        Contact::create($data);

        return back()->with('success', 'Thank you! We will contact you soon.');
    }

    // Admin: Show all messages
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('pages.admin.contact.index', compact('contacts'));
    }

    // Admin: Show single message
    public function show(Contact $contact)
    {
        return view('pages.admin.contact.show', compact('contact'));
    }

    // Admin: Delete message
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()
            ->route('contacts.index')
            ->with('success', 'Message deleted.');
    }

    // Public contact page
    public function publicIndex()
    {
        return view('pages.contact');
    }
}
