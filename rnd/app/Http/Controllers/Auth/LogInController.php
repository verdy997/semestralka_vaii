<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogInController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest']);
    }


    public function index()
    {
        return view('auth.logIn');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password')))
        {
            return back()->with('status', 'Invalid login details');
        }


        return redirect()->route('wall');
    }

}
