<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Commission;
use App\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $words =Word ::all(); 
      return $words;
    }
}
