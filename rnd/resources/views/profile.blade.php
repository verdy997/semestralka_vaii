@extends('layouts.header')

@section('content')
    <div class="container">
        <div class="bkgrPst">
            <div class="profileName">
                {{ $user->name }}
            </div>

            <div>
                <a href="/post/create">+ Create new blog</a>
            </div>
        </div>
    </div>

@endsection
