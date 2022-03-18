<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commission;
class commissioncontroller extends Controller
{
    //
  public function insert( Request $request )
    {
      $request->validate([
        "name"=>"required",
        "year"=>"required",
      //  "id"=>"required",
        "description"=>"required",
       
        
        
            ]);
    
        $commissions=new Commission;
       // $commissions->id=request("id");
        $commissions->description =request("description");
        $commissions->name=request("name");
        $commissions->year =request("year");
        
        $commissions->save();
        return redirect("/commission/showdata");
    
    }
    
  public function display()
     
     {
      $commissions =Commission::all(); 
      return view('/commission/showdata',compact('commissions'));
    
    }
    public function displayUser()
     
     {
      $commissions =Commission::all(); 
      return view('/commission/show data for user',compact('commissions'));
    
    }
  public function displayAdmin()
    
    {
      $commissions =Commission::all(); 
      return view('AdminViews/commissionAdminShow',compact('commissions'));
    
    }
    
 public function showmeeting ()
    
        {
      $commissions =Commission::all(); 
      return view('word/meeting',compact('commissions'));
    
        }
 public function showAmeeting ()
    
        {
      $commissions =Commission::all(); 
      return view('arabicword/Ameeting',compact('commissions'));
    
        }
public function delete($id)
      {
        Commission::find($id)->delete();
        return view( '/welcome');
        
    
    
      }
    


}
