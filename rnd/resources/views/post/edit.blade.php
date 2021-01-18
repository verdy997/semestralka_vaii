@extends('layouts.header')

@section('content')
    <div class="container">
        <div class="blok">
            <p class="title">Edit</p>
            <form action="{{ route('post.update', $post->id) }}" method="post" class="mb-4">
                @csrf
                <div class="col-12">
                    <div class="textUnForm">
                        <b><label for="tittle" style="color: white">Write tittle</label></b>
                    </div>
                    <textarea class="form-control" name="tittle" id="tittle" cols="12" rows="1"
                              placeholder="Write tittle">{{$post->tittle}}</textarea>
                    @error('tittle')
                    <div class="errorMessage">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="textUnForm">
                        <b><label for="body" style="color: white">Write blog</label></b>
                    </div>
                    <textarea class="form-control" name="body" id="body" cols="12" rows="15"
                              placeholder="Write something">{{$post->body}}</textarea>
                    @error('body')
                    <div class="errorMessage">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <form action="{{ route('post.destroy', $post) }}" method="post" class="formControl">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </form>
        </div>
    </div>
@endsection
