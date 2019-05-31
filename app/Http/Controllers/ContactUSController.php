<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\contactUs;
class ContactUSController extends Controller
{
   /**
    * 
    *
    * @return \Illuminate\Http\Response
    */
   public function contactSaveData(Request $request)
   {
   	     
       $this->validate($request, [             /*save data in db*/
        'name' => 'required',
        'email' => 'required|email',
        'subject'=>'required',
        'message' => 'required'
        ]);
       ContactUS::create($request->all());

       \Mail::send('message',                    /*send email to super admin*/
       array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
		   'subject' => $request->get('subject'),
           'user_message' => $request->get('message')
       ), 

       function($message) use ($request)
   {
      $message->from($request->get('email'));
      $message->to('wahidmadano@gmail.com', 'Admin')->subject($request->get('subject'));
   });
       

       return back();
   }
}
