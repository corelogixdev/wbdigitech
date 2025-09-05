<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Frontend Contact Page
     public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:500',
        ]);

        Contact::create($data);

        return back()->with('success', 'Thank you! We will contact you soon.');
    }

    // Show all messages in admin dashboard
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('pages.admin.contact.index', compact('contacts'));
    }

    // Show single message detail
    public function show(Contact $contact)
    {
        return view('pages.admin.contact.show', compact('contact'));
    }

    // Delete a message
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Message deleted.');
    }

    public function publicIndex(){

        return view('pages.contact');
    }
}

