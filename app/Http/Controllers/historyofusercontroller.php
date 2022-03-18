<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Dialogbox;
use App\User;

use App\Commission;
class historyofusercontroller extends Controller
{
    //
    public function showcommission(){
       
      $commissions =Commission::all(); 
       
    
        return view('/transactions/tranc',compact('commissions'));
         }
       

  public function insert( Request $request)
    {
        $request->validate([
            "commission_id"=>"required",
            "username"=>"required",
            "job"=>"required",
            "transactions"=>"required",
         
           
        
                ]);
               
               
        $commission = Commission::find($request->commission_id);
       $s= $request->commission_id;
         $job=$request->job;
        $name = $request->username;
         $transactions=  $request->transactions;
        
       // $id=Word::where('arabic_word',$request->arabic_word)->pluck('id'); 
        $users = User::where('name',$name)->pluck('id');
   
     $commission->commissionuser()->attach($users,['transactions'=>$transactions ,'job'=>$job]);
     
    // return session('succed','done');
     return view("edit");
                 
               
                
                   
                }
    
   /*  protected $appends = [
      'status_updated_by_nice',
  ];
   public function show (){
     // $z = Commission::find($this->status_updated_by_nice);
    // $users = Commission::with('ghada')->find();
    //  foreach ($z as $zz) {
          //$professore->pivot->Professor_Turma;
     //   $users=user::with('transactions');
    ///////////////////////////////////  $users=  $zz->ghada;
    //  }
        //  return  $z->ghada()->where('commission_id', $z->id);



    // return    $users;
    $users = commission::find(2);

    //foreach ($users->ghada as $table) {
    // echo $table->pivot->job;
     echo $table->pivot->transactions;
    }
return view("/transactions/ShowTranc" ,compact('users'));
      }*/
 public function show (){
        $empl=User::all();
     
        $commissions=Commission::all();
            
        //$users = User::all()->ghada()->orderBy('name')->get();///collection
    
         $users = User::with('commissionuser')->get();
     

     
        return view("/transactions/ShowTranc" ,compact('users','empl','commissions'));
         }
 

 public function search(Request $request)
         {
           $name = $request->username;
          
          $employee = User::where('name',$name)->get()->first();
          $users=$employee->commissionuser;
          
          $empl=User::all();
        $commissions=Commission::all();
            
        return view("/transactions/Showsearch" ,compact('users','empl','commissions'));
         }

    
     
    



}
