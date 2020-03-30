<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Goals;
Use App\Http\Resources\GoalsResource as GoalsResource;
use Illuminate\Support\Facades\DB;

class GoalsController extends Controller
{
    public function index(Request $request)
    {
        $goals= DB::table('player_goals')
            ->where('user_id', '=', $request->id)
            ->get();
        if($goals){
            return GoalsResource::collection($goals);
          //  return $goals;
        }else{
            return http_response_code(404);
        }
    }
    public function addgoal(Request $request)
    {
        $goal = new Goals;
        $goal->user_id = $request->user_id;
        $goal->current_avg = $request->curAvg;
        $goal->target_avg = $request->tarAvg;
        $goal->target_date = $request->tarDate;
        $goal->save();
    }
}
