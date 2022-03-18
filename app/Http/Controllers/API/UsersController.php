<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\App\User;

class UsersController extends Controller
{
    public function edituser($id,Request $request)

  {

    $users = User::find($id); 
    return $users;

 }
public function insertuser(Request $request )
  {
  $request->validate([
    "name"=>"required",
    "address"=>"required",
    "id"=>"required",
    "remember_token"=>"required|min:8",
    "password"=>"required|min:8",
    "email"=>"required",
    "phone"=>"required|min:11",
    "cv"=>"required",
    "dob"=>"required",
    "gender"=>"required",
    
        ]);

    $inf=new User;
    $inf->id=request("id");
    
    $inf->name =request("name");
    $inf->address=request("address");
    $inf->phone=request("phone");
    $inf->dob=request("dob");
    $inf->gender=request("gender");
    

       $inf->email=request("email");
    $inf->remember_token=request("remember_token");
    
    
    
    if( $request->has('cv'))
    {   
     $file=$request->file('cv');
     $extension =$file->getClientOriginalExtension();
      $filename=time() .'.'.$extension;
        $file->move('upload',$filename);
       $inf->cv=$filename;}
       else{

       return $request;
     $inf->cv='';
     }
     
      
        $inf->password=request("password");
        $inf->save() ;
   // $posts->save();
    return $inf;

 }

public function showuser(){
 $users =User::all();

 return $users;
}


public function edit2user($id,Request $request)

 {
  $inf = User::find($id); 
  $inf->id=request("id");
    $inf->name =request("name");
  $inf->address=request("address");
  $inf->phone=request("phone");
  $inf->dob=request("dob");
  $inf->gender=request("gender");
   $inf->email=request("email");
  $inf->remember_token=request("remember_token");
  if( $request->has('cv'))
  {   
     $file=$request->file('cv');
      $extension =$file->getClientOriginalExtension();
      $filename=time() .'.'.$extension;
      $file->move('upload',$filename);
     $inf->cv=$filename;}
     else{

     return $request;
      $inf->cv='';
      }
      $inf->password=request("password");
      $inf->save() ;
       return $inf;
       
  }
}
