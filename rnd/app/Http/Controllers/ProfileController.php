<?php

namespace App\Http\Controllers;

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
}
