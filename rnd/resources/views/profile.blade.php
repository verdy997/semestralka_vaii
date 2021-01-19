@extends('layouts.header')

@section('content')
    <div class="container">
        <div class="bkgrPst">
                <div class="profileName">
                    {{ $user->name }}
                </div>
            @if($user == auth()->user())
                <div class="profSettings">
                    <a href="/post/create" class="bkgrPst">+ Create new blog</a>
                    <a href="" class="bkgrPst">+ Profile options</a>
                </div>
            @endif
        </div>
    </div>
@endsection
