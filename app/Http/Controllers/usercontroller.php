<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Commission;
use Illuminate\Support\Facades\Hash;
class usercontroller extends Controller
{
    //
public function edituser($id,Request $request)

  {

    $users = User::find($id); 
    $commissions =Commission::all();
    return view('/userr/useredit',compact('users','commissions'));

 }
public function insertuser(Request $request )
  {
  $request->validate([
    "name"=>"required",
    "address"=>"required",
    
    //"remember_token"=>"required|min:8",
    "password"=>"required|min:8",
    "email"=>"required|unique:users",
    "phone"=>"required|min:11",
    "cv"=>"required",
    "dob"=>"required",
    
    "gender"=>"required",
    
        ]);

    $inf=new User;
    
    $inf->name =request("name");
    $inf->address=request("address");
    $inf->phone=request("phone");
    $inf->dob=request("dob");
    $inf->job=request("job");
    $inf->gender=request("gender");
    $inf->commision_id=request("commision_id");

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
  
    return view('edit2');

 }

public function showuser(){
 $users =User::orderby('name')->get();

 return view('/userShow',compact('users'));
  }
public function showuserAdmin(){
    $users =User::orderby('name')->get();
   // $commissions =Commission::where('id',$User->commission_id); 
  $commissions =Commission::all(); 
   

    return view('/userAdminShow',compact('users','commissions'));
     }
   
public function search(Request $request)
{
  $name = $request->username;
 
 $users = User::where('name',$name)->orwhere('email',$name)->get();
 //return session('succeed','done') ;
 $commissions =Commission::all(); 
   

    return view('/userAdminShow',compact('users','commissions'));
// return view('userShow',compact('users'));
}


public function deleteuser($id)
  {
    User::find($id)->delete();
    return view( '/commission/deleteco');
  }
  

public function showusercommission (){
    $commissions =Commission::all();
   
    return view('userr/userform',compact('commissions'));
     }


public function edit2user($id,Request $request)

 {
  $request->validate([
    "name"=>"required",
    "address"=>"required",
    
   // "remember_token"=>"required|min:8",
    "password"=>"required|min:8",
    "email"=>"required",
    "phone"=>"required",
    "cv"=>"required",
    "dob"=>"required",
    
    "gender"=>"required",
    
        ]);
  $inf = User::find($id); 
  $inf->id=request("id");
    $inf->name =request("name");
  $inf->address=request("address");
  $inf->phone=request("phone");
  $inf->dob=request("dob");
  $inf->gender=request("gender");
  $inf->job=request("job");
  $inf->commision_id=request("commision_id");
   $inf->email=request("email");
  //$inf->remember_token=request("remember_token");
  //inf->cv=request("cv");
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
      $inf->password= hash::make($request['password']);
      $inf->save() ;
       return redirect("/edit2");
       
  }


public function showcommission(){
   
    
     $commissions =Commission::all(); 
     return view('/edit',compact('commissions'));
      }
public function cv($id){
   
    
     $users= User::where('id',$id)->get(); 
     //return $user;
        return view('/cv',compact('users'));
         }


}
