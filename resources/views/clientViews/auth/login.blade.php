@extends('clientViews.layout.clientlayout')
@section('content')
<div class="form-login">
    <form action="#">
        <h1>Login</h1><br>
        <input type="text" name="email"><span>email</span><br>
        <input type="password" name="password"><span>Password</span><br>
        <button type="submit">Login</button>
    </form>
    <a href="#">Didn't have any account?</a>
</div>
@stop
