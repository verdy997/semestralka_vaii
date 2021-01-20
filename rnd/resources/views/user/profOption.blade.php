@extends('layouts.header')

@section('content')
    <div class="container">
        <div class="bkgrPst">
            <div class="profileName">
                {{ $user->name }}
                <h1>Profile options</h1>
            </div>
                <form action="{{ route('profile.update', $user->profile->id) }}" method="post" class="mb-4">
                    @csrf
                    <div class="profTitle" id="profTitle">
                        <p>Your profile title: <b>{{ $user->profile->title }}</b></p>
                    </div>
                    <p>Change if you want:</p>
                    <textarea class="form-control" name="tittle" id="tittle" cols="12" rows="1"
                              placeholder="Write tittle">{{$user->profile->title}}</textarea>
                    <div>
                        <p>Your profile description: <b>{{ $user->profile->description }}</b></p>
                    </div>
                    <p>Change if you want:</p>
                    <textarea class="form-control" name="description" id="description" cols="12" rows="4"
                              placeholder="Write description">{{$user->profile->description}}</textarea>
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
        </div>
    </div>
@endsection
