<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Commission;
use Illuminate\Http\Request;

class CommissionController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $commissions =Commission::all(); 
        return $commissions;
    }

}
