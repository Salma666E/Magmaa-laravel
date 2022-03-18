<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Arabic_Word;
use\App\User;
class arabicwordcontrol extends Controller
{
    //arabic word

  public function insert( Request $request)
    {
        $request->validate([
            "definition"=>"required|min:9",
            "terms"=>"required",
          //  "id"=>"required",
            "arabic_word"=>"required",
           
            
            
                ]);
        $form=new Arabic_Word;
        $form->meeting_id=request("meeting_id");
        $form->definition =request("definition");
        $form->commission=request("commission");
        $form->terms=request("terms");
        $form->arabic_word =request("arabic_word");
        
        $form->save();
        $meetings=request("meeting_id");
        $users=User::all();
        return view("arabicword/Absence",compact('meetings','users'));
    
    }

    public function show()

    {
      $arabic_word =Arabic_Word::all(); 
      return view('/arabicword/display',compact('arabic_word'));
  
   }
   public function showAdmin()

   {
     $arabic_word =Arabic_Word::all(); 
     return view('AdminViews/ArabicWordShow',compact('arabic_word'));
 
  }


  public function edit2( Request $request,$id)
    {
     
      $form =Arabic_Word::find($id); 
       
      $form->meeting_id=request("meeting_id");
      $form->definition =request("definition");
      $form->commission=request("commission");
      $form->terms=request("terms");
      $form->arabic_word =request("arabic_word");
      
        $form->save();
        $arabic_word = Arabic_Word::all(); 
        return view("/AdminViews/ArabicWordShow" ,compact('arabic_word'));
    
    }
    public function edit1($id)

    {
      $arabic_words =Arabic_Word::find($id); 
      return view('/arabicword/editform',compact('arabic_words'));
  

    }



}
