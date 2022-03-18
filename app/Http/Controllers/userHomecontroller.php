<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commission;
use App\Word;
use App\Arabic_Word;
use App\Comment;
use App\User;
class userHomecontroller extends Controller
{
    //

    public function showcommission(){
       // $commissions =Commission::all();
       
        $commissions =Commission::all(); 
        return view('/UserHome',compact('commissions'));
         }
         
         
        // public function showword(Request $request)

        // {
         // $inf = word::find($id,$arabic_word);
        //  $words = word::where('arabic_word',$request->arabic_word,'id',$request->name)->get();
         // return view('/word/showword',compact('words'));



        //}

        public function showword( Request $request) {
            

     // if($request->commission="التقافيه")
     if($request->id=='1')//arabic
          {
          
             $arabic_word = Arabic_Word::where('arabic_word',$request->arabic_word)->get();
           
             $id =Arabic_Word::where('arabic_word',$request->arabic_word)->pluck('id');//give me value of coulum
        $users=User::all();
            $comments=Comment::where('arabic__word_id',$id)->get();
            return view('arabicword/display',compact('arabic_word','comments','users'));
            }
        
      else   
        {
          $words = Word::where('arabic_word',$request->arabic_word)->get(); 
          $id=Word::where('arabic_word',$request->arabic_word)->pluck('id'); 
           $comments=Comment::where('word_id',$id)->get();
           $users=User::all();
             return view('/word/showword ',compact('words','comments','users'));
        }
       
    }
    }