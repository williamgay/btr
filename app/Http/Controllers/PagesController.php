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
}
