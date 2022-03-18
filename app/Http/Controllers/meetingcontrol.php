<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Meeting;
use\App\General_Meeting;
use\App\User;
use\App\Commission;
use\App\ Word;
use\App\Arabic_word;
use PDF;
use DB;
class meetingcontrol extends Controller
{
    



///insert meeting for word 
public function insert( Request $request)
    {
        $request->validate([
            "course_num"=>"required",
            "date"=>"required",
           // "id"=>"required",
            "session_num"=>"required",
            "commission_id"=>"required",
     ]);
        $form=new Meeting;
      // $form->id=request("id");
        $form->session_num =request("session_num");
        $form->course_num=request("course_num");
        $form->date =request("date");
        $form->commission_id =request("commission_id");
        $form->save();
        $meetings=DB::getPDO()->lastInsertId();
        $c=Commission::where('id',$request->commission_id)->get()->pluck('name');
       // return $c;
        $users=User::all();
        return view('/word/wordform',compact('meetings','users','c' ));

    }

public function show()
    {
      $meetings = Meeting::all(); 
      return view('meeting/display',compact('meetings'));
  
   }
public function search( Request $request) {
   
    if($request->commision_id =='1')
    {
        $meetings = Meeting::where([ 'commission_id'=>$request->commision_id,'date'=>$request->date ] )->get(); 
        $id =Meeting::where([ 'commission_id'=>$request->commision_id,'date'=>$request->date ])->pluck('id');
        $commissions =Commission::all(); 

        $arabic_word=Arabic_word::where('meeting_id',$id )->get();
        $z = Meeting::where([ 'commission_id'=>$request->commision_id,'date'=>$request->date ])->get()->first();
      
     $absence= $z->users;
   
    $users=User::all();
    $data = ['title' => 'Welcome to HDTuto.com',''];
      // return view('arabicword/displayAmeeting ',compact('arabic_word','users','commissions','meetings','absence'));

       $pdf = PDF::loadView('arabicword/displayAmeeting', $data ,compact('arabic_word','users','commissions','meetings','absence'));
  
        return $pdf->stream("dompdf_out.pdf", array("Attachment" => false));
        //return $pdf->download("dompdf_out.pdf");
    }
  
   else   
     {
        
    $meetings = Meeting::where( [ 'commission_id'=>$request->commision_id,'date'=>$request->date ])->get(); 
    $id =Meeting::where(['commission_id'=>$request->commision_id,'date'=>$request->date ] )->pluck('id');
    $commissions =Commission::all(); 
    
    $words=Word::where('meeting_id',$id)->get();
   
    $z = Meeting::where(['commission_id'=>$request->commision_id,'date'=>$request->date ])->get()->first();
$absence= $z->users ;


   $users=User::all();
   
   $data = ['title' => 'Welcome to HDTuto.com',''];
      // return view('arabicword/displayAmeeting ',compact('arabic_word','users','commissions','meetings','absence'));

       $pdf = PDF::loadView('word/displaymeeting', $data ,compact('users','words','commissions','meetings','absence'));
  
        return $pdf->stream("dompdf_out.pdf", array("Attachment" => false));
        //return $pdf->download("dompdf_out.pdf");
   
  //return view('word/displaymeeting ',compact('users','words','commissions','meetings','absence'));
  }

   
   }

//insert meeting for arabic word 
public function insertMeetingArabicword( Request $request)
    {
        $request->validate([
            "course_num"=>"required",
            "date"=>"required",
        
            "session_num"=>"required",
            "commission_id"=>"required",
     ]);
        $form=new Meeting;
    
        $form->session_num =request("session_num");
        $form->course_num=request("course_num");
        $form->date =request("date");
        $form->commission_id =request("commission_id");
        $form->save();
        $meetings=DB::getPDO()->lastInsertId();
        $users=User::all();
        return view('/arabicword/insert',compact('meetings','users' ));

    }

public function showcommission(){
    $users =User::all();
    
  $commissions =Commission::all(); 
  $meetings = Meeting::all();

  return view('meeting/display',compact('commissions','meetings'));
  
     }
     







}
