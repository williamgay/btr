<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function generalInformation()
   {
       return view('generalInformation');
   }
   public function btrtMembership()
   {
       return view('btrt_membership');
   }
   public function gettingStarted()
   {
       return view('getting_started');
   }
   public function gamePlayed()
   {
       return view('game_played');
   }
   public function commissions()
   {
       return view('commissions');
   }
   public function getYourRoomPlaying()
   {
       return view('getRoomPlaying');
   }
   public function playFromHome()
   {
       return view('playFromHome');
   }
   public function streaming()
   {
       return view('streaming');
   }
   public function rules()
   {
       return view('rules');
   }
}
