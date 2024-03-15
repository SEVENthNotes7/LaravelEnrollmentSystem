@extends('clientViews.layout.guestLayout')
@section('content')\
    <div class="container">
        <div class="form-login">
            <div class="messages-section">
                @if (session('message'))
                    <span class="login-mgs">{{ session('message') }}</span><br>
                @endif
                @if ($errors->has('email'))
                    <span>{{ $errors->first('email') }}</span><br>
                @endif
                @if ($errors->has('password'))
                    <span>{{ $errors->first('password') }}</span><br>
                @endif
            </div>
            <form action="{{ route('login') }}">
                @csrf
                <h1>Login</h1><br>
                <input type="text" name="email" placeholder="Email"><br>
                <input type="password" name="password" placeholder="Password"><br>
                <button id="button" type="submit">Login</button>
            </form>
            <div class="signup-sec">
                <label>Don't have an Account?</label>
                <a id="signup" href="{{ route('view.register') }}">Sign Up</a>
            </div>
        </div>
    </div>
@stop
