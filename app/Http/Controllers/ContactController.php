<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('Contact.index', compact('contacts'));
    }


    public function store(Request $request)
    {
        $contact            = new Contact();
        $contact->name      = $request->name;
        $contact->email     = $request->email;
        $contact->subject   = $request->subject;
        $contact->message   = $request->message;
        $contact->save();

        return redirect()->back()->with('success', 'Your message has been sent');
    }


    public function destroy(string $id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('success','You have deleted the contact info successfully.');
    }


}
