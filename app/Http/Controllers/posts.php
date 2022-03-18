<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class posts extends Controller
{
 public function submit( Request $request,$id)
    {
       $request->validate([
    "activity"=>"required",
    "image"=>"required"
   // "id"=>"required"
    ]);

        $form=new Post;
        //$form->id =request("id");
    
        $form->activity=request("activity"); 
        
        $form->user_id =$id;
    
        if( $request->hasfile('image'))
       {   
        $file=$request->file('image');
        $extension =$file->getClientOriginalExtension();
         $filename=time() .'.'.$extension;
           $file->move('upload',$filename);
          $form->image=$filename;}
          else{

          return $request;
        $form->image='';
        }
        $form->save();
        return redirect("display");
 }
public function delete($id)
  {
    Post::find($id)->delete();
    return view( '/commission/deleteco');
    


  }
public function edit($id,Request $request)

  {

    $posts = Post::find($id); 
    return view('/posts/editformp',compact('posts'));

   }




public function edit2($id,$idp,Request $request)
 {
  $posts=Post::find($idp);
    //$posts->id =request("id");

    $posts->activity=request("activity"); 
    
    $posts->user_id =$id;

  if( $request->hasfile('image'))
 {   
  $file=$request->file('image');
    $extension =$file->getClientOriginalExtension();
     $filename=time() .'.'.$extension;
       $file->move('upload',$filename);
      $posts->image=$filename;}
  else{

  return $request;
   $posts->image='';
    }

    $posts->save();
   return redirect("/display");


}

public function show()
 {
    $posts= Post::paginate(2);
   return  view('display',compact('posts'));
 }
        
 public function display()
 {
    $posts= Post::all();
   return  view('ShowPostUser',compact('posts'));
 }
 
}
