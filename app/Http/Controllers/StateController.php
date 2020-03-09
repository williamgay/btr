<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\State;
use App\Http\Resources\StateResource as StateResource;
use Illuminate\Support\Facades\DB;

class StateController extends Controller
{
   public function index(Request $request)
   {
       $states = DB::table('states')
           ->where('country_id', '=', $request->id)
           ->get();
       return StateResource::collection($states);
   }
}
