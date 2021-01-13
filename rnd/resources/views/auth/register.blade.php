@extends('layouts.header')

@section('content')
    <div class="underBar">
        <img src="/img/random.png" alt="randomLogo">
    </div>

    <h1>Registration</h1>


    <div class="container">
        <div class="col-10">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <div class="textUnForm">
                            <b><label for="username" style="color: white">Username</label></b>
                        </div>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Userame" value="{{ old('name') }}">
                        @error('name')
                        <div class="errorMessage">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-5">
                        <div class="textUnForm">
                            <b><label for="email" style="color: white">Email</label></b>
                        </div>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                        <div class="errorMessage">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-5">
                        <div class="textUnForm">
                            <b><label for="password" style="color: white">Password</label></b>
                        </div>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        @error('password')
                        <div class="errorMessage">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group col-md-5">
                        <div class="textUnForm">
                            <b><label for="password_confirmation" style="color: white">Repeat Password</label></b>
                        </div>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password">
                    </div>
                </div>
                <button type="submit" name="submitRg" class="btn btn-primary">Confirm</button>
            </form>
        </div>
    </div>
@endsection
