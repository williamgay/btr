<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptainController extends Controller
{
    public function index()
    {
        $content = "This will be the captains page";
        return view('captains', ['content'=>$content]);

        // TODO:: Add functionality to get captains from db
        //return view(compact($captains));
    }
}
