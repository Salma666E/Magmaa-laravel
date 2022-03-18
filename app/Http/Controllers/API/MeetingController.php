<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use\App\Meeting;
use\App\General_Meeting;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $meetings = Meeting::all(); 
      return $meetings;
    }

}
