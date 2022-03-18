<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class contactcontroller extends Controller
{
    
    public function insert( Request $request )
    {
      
    
        $contact =new Contact;
      
        $contact->user_id =request("user_id");
        $contact->name=request("name");
        $contact->email =request("email");
        $contact->message =request("message");
        $contact->save();
        //here message controller;
        return redirect('edit');


    }

    public function show( Request $request )
    {
      
    
        $contact =new Contact;
      
        $contact =Contact::all();
return view('message/showMessage',compact('contact'));
    }


}
