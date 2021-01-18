@extends('layouts.header')

@section('content')
    <div class="container">
        <div class="blok">
            <form action="{{ route('post') }}" method="post" class="mb-4">
                @csrf
                <div class="col-12">
                    <div class="textUnForm">
                        <b><label for="tittle" style="color: white">Write tittle</label></b>
                    </div>
                    <textarea class="form-control" name="tittle" id="tittle" cols="12" rows="1"
                              placeholder="Write tittle"></textarea>
                    @error('tittle')
                    <div class="errorMessage">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="textUnForm">
                        <b><label for="body" style="color: white">Write blog</label></b>
                    </div>
                    <textarea class="form-control" name="body" id="body" cols="12" rows="15"
                              placeholder="Write something"></textarea>
                    @error('body')
                    <div class="errorMessage">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-6 mb-2">
                    <button type="submit" class="btn btn-primary">Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection
