<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Location;
use App\Http\Resources\LocationResource as LocationResource;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return LocationResource::collection($locations);
    }
}
