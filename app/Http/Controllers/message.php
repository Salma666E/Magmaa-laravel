<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class message extends Controller
{
    //
    public  function send(Request $request)
    {
        
        

        $email= $request->email;
        $name= $request->name;
        $body=$request->message;
        //return  $id;
       $messagesend = array('name'=>$request->name, 'body' => $request->message);
       $data = array('nam'=>"ggggg", "body" => "Test mail");
       Mail::send('message.replay', $messagesend, function($message) use ($email, $name) {
           $message->to($email,$name)
                   ->subject('مجمع اللغه العربيه');
                   $message->from('graduationprojects2020@gmail.com','مجمع اللغه العربيه');

                });
       
       Mail::send('message.showMessage', $messagesend, function($message) use ($email, $name,$body) {
        $message->to('graduationprojects2020@gmail.com',$name)
                ->subject('user ');
        $message->from('graduationprojects2020@gmail.com','user');

    });

return back()->with('success','thanks for contacting us');
   }
   
}
