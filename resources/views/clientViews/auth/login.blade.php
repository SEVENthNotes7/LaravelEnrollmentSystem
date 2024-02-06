@extends('clientViews.layout.clientlayout')
@section('content')
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
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <h1>Login</h1><br>
            <input type="text" name="email"><span>email</span><br>
            <input type="password" name="password"><span>Password</span><br>
            <button type="submit">Login</button>
        </form>
        <a href="{{route('view.register')}}">Didn't have any account?</a>
    </div>
@stop
