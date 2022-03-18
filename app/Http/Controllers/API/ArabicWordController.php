<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use\App\Arabic_Word;

use Illuminate\Http\Request;

class ArabicWordController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $arabic_word =Arabic_Word::all(); 
      return $arabic_word;
    }

}
