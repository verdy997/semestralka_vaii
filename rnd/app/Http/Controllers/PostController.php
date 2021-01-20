<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use DB;

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

    public function getMorePosts(Request $request)
    {
        dd($request);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tittle' => 'required|max:255',
            'body' => 'required']);

        $request->user()->post()->create([
            'tittle' => $request->tittle,
            'body' => $request->body]);

        return redirect('/post');
    }

    public function create()
    {
        return view('post.create');
    }

    public function show($id)
    {
        $posts = Post::find($id);
        return view('post.show',[
            'post' => $posts
        ]);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        if ($post->ownedBy(auth()->user()) || auth()->user()->name === 'admin'){
            return view('post.edit')->with('post', $post);
        }
        return back();
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tittle' => 'required|max:255',
            'body' => 'required']);

        $post = Post::find($id);
        $post->tittle = $request->input('tittle');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/post');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back();
    }
}
