<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function  __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {

        $post = Post::orderBy('created_at', 'desc')->with(['user', 'likes'])->paginate(5); //collection

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

    public function destroy(Post $post)
    {
        
        $post->delete();

        return back();
    }
}
