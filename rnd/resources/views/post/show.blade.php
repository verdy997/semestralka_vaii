@extends('layouts.header')

@section('content')

    <div class="container">
        <div class="blok">
            <div class="profileName">
                <h1>{{$posts->tittle}}</h1>
            </div>
            <div class="bkgrPst">
                <div class="textUnForm">
                    {{$posts->body}}
                </div>
            </div>
            <a href="/post" class="btn btn-default">Go back</a>
        </div>
    </div>
@endsection
