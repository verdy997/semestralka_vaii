<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::paginate(5); //collection


        return view('post.index',[
                'post' => $post
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, ['body' => 'required']);

        $request->user()->post()->create([ 'body' => $request->body]);

        return back();
    }
}
