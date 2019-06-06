<?php

namespace App\Http\Controllers;

use App\Contact;
use Auth;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ContactController extends Controller
{ 
    /**
     * this function allow to send message to the admin 
     *
     * @return \Illuminate\Http\Response
    *@author Abdelwahed  Madan yousfi 
     */
    public function sendMessage(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $id = $uriSegments[2];

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->user_id = Auth::user()->id;
        $contact->restaurant_id = $id;
        $contact->save();

        Toastr::success('Your message successfully send.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
