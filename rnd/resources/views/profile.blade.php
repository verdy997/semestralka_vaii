@extends('layouts.header')

@section('content')
    <div class="container">
        <div class="bkgrPst">
            <div class="profileName">
                {{ $user->name }}
            </div>

            <div class="profSettings">
                <a href="/post/create">+ Create new blog</a>
                <a href="">+ Profile options</a>
            </div>


        </div>
    </div>

@endsection
