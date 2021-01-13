@extends('layouts.header')

@section('content')
    <div class="underBar">
        <img src="/img/random.png" alt="randomLogo">
    </div>

    <div class="container">
        <div class="col-12 ">
            @if(session('status'))
                <div class="errorMessage">
                    {{session('status')}}
                </div>
            @endif
            <form action="{{ route('logIn') }}" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="textUnForm">
                            <b><label for="inputEmail">Email</label></b>
                        </div>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        @error('email')
                        <div class="errorMessage">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <div class="textUnForm">
                            <b><label for="inputPassword">Password</label></b>
                        </div>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        @error('password')
                        <div class="errorMessage">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <button type="submit" name="submitLi" class="btn btn-primary">Log in</button>
            </form>
        </div>
    </div>

@endsection
