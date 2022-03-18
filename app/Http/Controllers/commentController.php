<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Comment;
use\App\Arabic_Word;
use\App\Word;
use\App\User;
use Redirect;
class commentController extends Controller
{
    //
public function insertcommentword( Request $request)
    {
        
     $request->validate([
         "comment"=>"required"
     
  ]);
       $form=new Comment;
       
       $form->comment =request("comment");
        $form->user_id= $request->user_id;
       
        $form->word_id=$request->id;
        $form->save();
        $z=$request->id;
         //return $this->insertcommentword2($request );
        //return redirect()->action('commentController@insertcommentword2')->with('$request');
             return view('/word/testword' ,compact('z'));
         //  return back();
       
    }
public function insertcommentword2( $z)
    {
        
     
       // $words = Word::where('id',$request->id)->get(); 
        //$users=User::all();
         // $comments=Comment::where('word_id',$request->id)->get();
         $words = Word::where('id',$z)->get(); 
        $users=User::all();
          $comments=Comment::where('word_id',$z)->get();
             return view('/word/showword',compact('words','comments','users'));
        
       
    }
public function editcommentword( Request $request)
    {
        
    $id=$request->name;
        $form=Comment::find( $id);;
       
       $form->comment =request("comment");
      $form->save();  
       // return view('/word/showword ');
        $words = Word::where('id',$request->id)->get(); 
        $users=User::all();
       // return $request->id;
           $comments=Comment::where('word_id',$request->id)->get();
             return view('/word/showword ',compact('words','comments','users'));
       
    
    }

public function insertcommentarabicword( Request $request,$id,$wordid)
    {
        
     $request->validate([
         "comment"=>"required"
     
  ]);
        $form=new Comment;
       $form->comment =request("comment");
        $form->user_id=$id;
       
        $form->arabic__word_id=$wordid;
       
        
        $form->save();
        $z=$wordid;
      
             return view('/arabicword/testAword' ,compact('z'));
        
    }
public function insertcommentarabicword2( $z)
    {
        
    
        $arabic_word = Arabic_Word::where('id',$z)->get();
           
        $users=User::all();
      
          $comments=Comment::where('arabic__word_id',$z)->get();
         return view('arabicword/display',compact('arabic_word','comments','users'));/////////repeat
        //  return Redirect::back()->with('arabic_word','comments','users');
      //  return redirect("arabicword/display");//////////////////////////////hro7 fan!!!!!!!
    
    }



 public function show()
 
    {
      $comments = Comment::all(); 
      return view('comment/comment',compact('comments'));
  
   }
 public function editcommentarabicword( Request $request,$id,$name)
    {
        
        $form = Comment::find($id); 
       
       $form->comment =request("comment");
       // $form->user_id=$id;
       
       // $form->arabic__word_id=$wordid;
       
        
        $form->save();
        $arabic_word = Arabic_Word::where('id',$name)->get(); 
        $users=User::all();
           $comments=Comment::where('arabic__word_id',$name)->get();
             return view('arabicword/display',compact('arabic_word','comments','users'));
       
      
    
    }
 
 public function showdiv($id,$name){


    $arabic_word = Arabic_Word::where('id',$name)->get();
           
          
      
    $comments=Comment::where('arabic__word_id',$name)->get();
    return view('arabicword/display',compact('arabic_word','comments'));


 }


public function delete($id)
 {
   Comment::find($id)->delete();
   return view( 'comment/deleteco');
   


 }














}
