<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meeting;
use App\General_Meeting;
class absenceController extends Controller
{
    //

    public function insert( Request $request)
    {
        $request->validate([
            "meeting_id"=>"required",
            "user_id"=>"required",
         ]);

        $meeting = Meeting::find($request->meeting_id);
     
        $ids = $request->user_id;

        foreach($ids as $id)
        {
     $meeting->users()->attach($id);
     
    }
     return view("edit3");
    
    }

    public function insertforgeneralmeeting( Request $request)
    {
        $request->validate([
            "meeting_id"=>"required",
            "user_id"=>"required",
         
           
        
                ]);
        $genralmeeting =General_Meeting::find($request->meeting_id);
     
        $ids = $request->user_id;

        foreach($ids as $id)
        {
     $genralmeeting->users()->attach($id);
     
    }
     return view("absence");
    
    }


}
