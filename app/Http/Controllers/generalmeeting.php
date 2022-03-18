<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ General_Meeting;
use App\User;
use App\Commission;
use DB;
class generalmeeting extends Controller
{
    //

    public function insertgm( Request $request)
    {
        
     $request->validate([
         "course_num"=>"required",
         "date"=>"required",
        
         "session_num"=>"required",
         
  ]);
        $form=new General_Meeting;
       // $form->id =request("id");
        $form->session_num =request("session_num");
        $form->course_num=request("course_num");
        $form->date =request("date");
        
        $form->save();
        $generalmeetings=DB::getPDO()->lastInsertId();;
        $users=User::all();
        return view('meeting/Absence',compact('generalmeetings','users' ));

      
    
    }
 
    public function showgm()
 
    {
      $meetings = General_Meeting::all(); 
      return view('meeting/generalmeetingdisplay',compact('meetings'));
  
   }
   public function showcommission(){
    $users =User::all();
   // $commissions =Commission::where('id',$User->commission_id); 
  $commissions =Commission::all(); 
  

  return view('/meeting/generalmeetingform',compact('commissions'));

   }




   public function search( Request $request) {
            

    $meetings = General_Meeting::where('date',$request->date)->get(); 
      $id= General_Meeting::where('date',$request->date)->pluck('id'); 
    $commissions =Commission::all(); 
    
      $z = General_Meeting::where('date',$request->date)->get()->first();
   
     //$absence=General_Meeting::with('users')->get();
     $absence= $z->users;
     $users=User::all();
    
    ///$absence = General_Meeting::with('users')->get();
    //return view('someView')->withHouses($houses);
 
    
  
    return view('meeting/searchGmeeting',compact('meetings','commissions','absence','users'));

   
   }

}
