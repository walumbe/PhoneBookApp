<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Show all Contacts
    public function index(){
        return view('contacts.index', [
            'contacts' => Contact::latest()->filter(request(['lastname', 'search']))->paginate(6)
        ]);

    }

    // show single contact
    public function show(Contact $contact){
        return view('contacts.show', [
            'contact' => $contact
        ]);
    }

    // show create form
    public function create(){
        return view('contacts.create');
    }

    // Store contact data
    public function store(Request $request){
        $formFields = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => ['required', 'email'],
        ]);

        Contact::create($formFields);

        return redirect('/')->with('message', 'Contact created successfully');
    }

    // show edit form
    public function edit(Contact $contact){
        return view('contacts.edit', ['contact' => $contact]);
    }

    // Update Contact data

    public function update(Request $request, Contact $contact){
        $formFields = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => ['required', 'email'],
        ]);

        $contact->update($formFields);

        return back()->with('message', 'Contact Updated Successfully');
    }

    // Delete Contact
    public function destroy(Contact $contact){
        $contact->delete();
        return redirect('/')->with('message', 'Contact deleted successfully');
    }
}
