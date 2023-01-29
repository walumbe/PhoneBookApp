<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Show all Contacts
    public function index(){

    }

    // show single contact
    public function show(Contact $contact){
        return view('show', [
            'contacts' => Contact::latest()->filter(request(['lastname', 'search']))->paginate(6)
        ]);
    }

    // show create form
    public function create(){
        return view('create');
    }

    // Store contact data
    public function store(Request $request){
        $formFields = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        Contact::create($formFields);

        return redirect('/')->with('message', 'Contact created successfully');
    }

    // Delete Contact
    public function destroy(Contact $contact){
        $contact->delete();
        return redirect('/')->with('message', 'Contact deleted successfully');
    }
}
