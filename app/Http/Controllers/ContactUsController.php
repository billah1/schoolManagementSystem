<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    private $contacts,$contact;

    public function contactUsIndex()
    {
        $contacts=Contact::all();
        return view('frontend.contact.contactUs',['contacts'=>$contacts]);
    }

    public function contactStore(Request $request)
    {
        Contact::storeContact($request);
        return back()->with('success','We have received your message and will get back to you with a (human) response as soon as possible.');

    }





}
