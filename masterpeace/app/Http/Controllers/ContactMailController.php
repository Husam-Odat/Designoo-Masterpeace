<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMailController extends Controller
{
    public function contact()
    {
        return view('pages.index');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->msg

        ];
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|min:5',
            'email' => 'required|email|max:255|min:5',
            'msg' => 'required|string|min:5|max:900',
        ]);

        // Insert data into the contacts table
        Contact::create($validatedData);


        Mail::to($request->email)->send(new ContactMail($details));
        return redirect()->back()->with('message_sent', 'Your message has been sent successfully');

        // Mail::to('husam-odat@outlook.com')->send(new ContactMail($details));
        // return back()->with('message_sent','Your message has been sent successfully');


    }



    public function index()
    {

        $contacts = Contact::all();
        
        
        return view('Dash.contact_dash', [
            'contacts' => $contacts
        ]);
    }


    public function destroy($id)
    {
        $contacts = Contact::findOrFail($id);
        $contacts->delete();

        return redirect()->route('contacts.index')->with('success', 'Review deleted successfully.');
    }



    public function sendEmailfooter(Request $request)
    {
        $details = [
            // 'name' => $request->name,
            'email' => $request->email,
            // 'msg' => $request->msg

        ];
        $validatedData = $request->validate([
            // 'name' => 'required|string|max:255|min:5',
            'email' => 'required|email|max:255|min:5',
            // 'msg' => 'required|string|min:5|max:900',
        ]);

        // Insert data into the contacts table
        Contact::create($validatedData);


        Mail::to($request->email)->send(new ContactMail($details));
        return redirect()->back()->with('message_sent', 'Your message has been sent successfully');

        // Mail::to('husam-odat@outlook.com')->send(new ContactMail($details));
        // return back()->with('message_sent','Your message has been sent successfully');


    }

}
