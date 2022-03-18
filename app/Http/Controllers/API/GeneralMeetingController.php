<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\ General_Meeting;
use Illuminate\Http\Request;

class GeneralMeetingController extends Controller
{
    
    public function show()
    {
        $meetings = General_Meeting::all(); 
      return $meetings;
  
    }

}
