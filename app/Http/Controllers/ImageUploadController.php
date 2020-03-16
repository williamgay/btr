<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class ImageUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUpload()
    {
        return view('imageUpload');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUploadPost(Request $request)
    {
        $request->validate(
            [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
        );

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $imageName);
$user = User::find(Auth::user()->id);
$user->profileImg = $imageName;
$user->save();
        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $imageName);
    }
}
