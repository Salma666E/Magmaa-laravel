<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commission;

use App\Word;
use App\User;
use App\Meeting;
//App\Models\User
class wordcontrol extends Controller
{
    //word
  public function insertword( Request $request)
    {
      $request->validate([
        "definition"=>"required",
      // "id"=>"required",
        "english_word"=>"required",
        "arabic_word"=>"required"
        
            ]);
        $form=new Word;
        $form->meeting_id=request("meeting_id");
        $form->commission=request("commission");
        $form->definition =request("definition");
        $form->english_word=request("english_word");
        $form->arabic_word =request("arabic_word");
        
        $form->save();
        $meetings=request("meeting_id");
        $users=User::all();
        return view("/word/Absence",compact('meetings','users'));
    
    }
public function edit2( Request $request,$id)
    {
     
      $form =Word::find($id); 
       
        $form->commission=request("commission");
        $form->definition =request("definition");
        $form->english_word=request("english_word");
        $form->arabic_word =request("arabic_word");
        $form->meeting_id=request("meeting_id");
        
        $form->save();
        $words =Word ::all(); 
        return view("/AdminViews/WordShow" ,compact('words'));
    
    }
public function edit1($id)

    {
      $words =Word::find($id); 
      return view('/word/editform',compact('words'));
  

    }



  public function show()

    {
      $words =Word ::all(); 
      return route('word/showword',compact('words'));
  

    }

  /*public function showmeetingid()

    {
      $meetings =Meeting::all(); 
      return view('/word/wordform{id}',compact('meetings'));
  
    }*/

  public function showAdmin()

   {
     $words =Word ::all(); 
     return view('AdminViews/WordShow',compact('words'));
 
  }



public function insertwordcommission( Request $request,$id)

  {
    $request->validate([
      "definition"=>"required",
    // "id"=>"required",
      "english_word"=>"required",
      "arabic_word"=>"required"
      
          ]);
      $form=new Word;
      $form->meeting_id=id;
      $form->commission =request("commission");
      $form->definition =request("definition");
      $form->english_word=request("english_word");
      $form->arabic_word =request("arabic_word");
      
      $form->save();
      return redirect("/word/showword{id}");
  
  }
   
    
  





}
