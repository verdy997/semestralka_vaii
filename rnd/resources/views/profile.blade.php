@extends('layouts.header')

@section('content')
    <div class="container">
        <div class="bkgrPst">
                <div class="profileName">
                    {{ $user->name }}
                </div>
            <br>
            @if($user == auth()->user())
                <div class="profSettings">
                    <a href="/post/create" class="bkgrPst">+ Create new blog</a>
                    <a href="/profile/{{ $user->profile->id }}/profOption" class="bkgrPst">+ Profile options</a>
                    @if($user->name === 'admin')
                        <a href="{{ route('adminPage') }}" class="bkgrPst">+ Admin options</a>
                    @endif
                </div>
            @endif

            <br>
            <div class="profTitle">
                <b><p>{{ $user->profile->title }}</p></b>
            </div>
            <div>
                <p>{{ $user->profile->description }}</p>
            </div>
        </div>
    </div>
@endsection
