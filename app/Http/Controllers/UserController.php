<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'city' => 'required',
                'state' => 'required',
                'country' => 'required',
                'location' => 'required',
                'zip' => 'required',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);

        $user = User::create($input);
        $success['token'] = $user->createToken('MyApp')->accessToken;
        $success['name'] = $user->name;

        return response()->json(['success' => $success]);
    }

    public function getDetails()
    {
        return response()->json(['success' => Auth::user()]);
    }

    public function update(Request $request)
    {
        $user = User::where('id', $request->id)->firstOrFail();
        User::where('id', $user->id)->update([
        'firstName' => $request->firstName,
        'lastName' => $request->lastName,
        'fargo' => $request->fargo,
        'fargoAlt' => $request->fargoAlt,
        'streetAddress' => $request->streetAddress,
        'city' => $request->city,
        'state' => $request->state,
        'zip' => $request->zip,
        'location' => $request->location,
        'country' => $request->country,
        'email' => $request->email,
        ]);
    }
}
