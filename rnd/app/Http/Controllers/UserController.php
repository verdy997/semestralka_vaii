<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function  __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        if (auth()->user()->name === 'admin'){
            $users = User::orderBy('id','DESC')->get();
            return view('adminPage', compact('users'));
        } else {
            return redirect()->route('wall');
        }
    }

    public function addUser(Request $request)
    {
        if (auth()->user()->name === 'admin') {
            $this->validate($request, [
                'name' => 'required|unique:users|max:255',
                'email' => 'required|unique:users|max:255',
                'password' => 'required',
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $this->cProfile($user);

            return response()->json($user);
        } else {
            return redirect()->route('wall');
        }
    }

    public function cProfile(User $user)
    {
        Profile::create([
            'user_id' => $user->id
        ]);
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json(['success'=>'Record has been deleted']);
    }

}
