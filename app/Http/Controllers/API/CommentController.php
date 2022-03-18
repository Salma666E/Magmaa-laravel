<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\App\Comment;
use\App\Arabic_Word;
use\App\Word;
use\App\User;

class CommentController extends Controller
{
    /**************** Comments On Words ****************/
    
    public function insertWordComments(Request $request,$id,$wid)
    {
        $request->validate([
            "comment"=>"required"
     ]);

     $word_comment = new Comment();
     $word_comment->comment = request("comment");
     $word_comment->user_id = $id;
     $word_comment->word_id = $wid;
     $word_comment->save();
     /*
     $comments=Comment::where('word_id',$wid)->get();
     return $comments;
     */
     return $word_comment;
    }

    
    public function updateWordComment(Request $request, $id)
    {
        $word_comment = Comment::find($id);
        $word_comment->comment = request("comment");
        $word_comment->save();
        //$comments=Comment::where('word_id',$wordid)->get();
        //return $comments;
        return $word_comment;
    }

    public function showWordComment($wordid)
    {
        //$words = Word::where('id',$wordid)->get(); 
        //$users=User::all();
        $comments=Comment::where('word_id',$wordid)->get();
        return $comments;
    }

    /**************** Comments On Arabic_Words ****************/

    public function insertArabicWordComments(Request $request,$id,$wordid)
    {
        $request->validate([
            "comment"=>"required"
        
     ]);

     $arab_comment = new Comment();
     $arab_comment->comment = request("comment");
     $arab_comment->user_id = $id;
     $arab_comment->arabic__word_id = $wordid;
     $arab_comment->save();

     /*
     $arr = compact($form , $comments);
     return response()->json($arr); 
     */
    return $arab_comment;
   
    }

    public function updateArabicWordComments(Request $request, $id)
    {
        $arab_comment = Comment::find($id);
        $arab_comment->comment = request("comment");
        $arab_comment->save();
        return $arab_comment;
        //$comments=Comment::where('arabic__word_id',$wid)->get();
        //return $comments;
    }
    

    public function showArabicComment($wordid)
    {
        //$words = Arabic_Word::where('id',$wordid)->get(); 
        //$users=User::all();
        $comments=Comment::where('arabic__word_id',$wordid)->get();
        return $comments;
    }
    /**************** All Comments ****************/
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $comments = Comment::all(); 
        return $comments;
    }

    /**************** Delete Comments ****************/

 public function delete(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return 204;
    }
    
}