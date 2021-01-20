<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function  __construct()
{
    $this->middleware(['auth']);
}

    public function index(User $user)
    {
        $posts = $user->post()->with(['user', 'likes']);

        return view('profile', [
            'user' => $user,
        ]);
    }

    public function options($id)
    {
        $profile = Profile::find($id);
        $user = auth()->user();
        if ($profile->ownedBy($user)) {
            return view('user.profOption')->with('user', $user);
        }
    }

    public function getProfile($id)
    {
        $profile = Profile::find($id);
        return response()->json($profile);
    }

    public function updateProfile(Request $request, $id)
    {

        $profile = Profile::find($id);
        $profile->title = $request->input('tittle');
        $profile->description = $request->input('description');
        $profile->save();
        return redirect('/post');
    }
}
