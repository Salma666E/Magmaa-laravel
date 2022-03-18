<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $posts= Post::all();
        return $posts;
    }

}
