@extends('layouts.header')

@section('content')
    <div class="container">
        <div class="bkgrPst">
            <div class="profileName">
                {{ $user->name }}
            </div>

            <div>
                {{$user }}
            </div>
        </div>
    </div>

@endsection
