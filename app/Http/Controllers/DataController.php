<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function open() 
    {
        $data = " data is open and can be accessed without the user_error() being authenticated";
        return response()->json(compact('data'),200);

    }

    public function closed() 
    {
        $data = "Only authorized users can see here";
        return response()->json(compact('data'),200);
    }
}