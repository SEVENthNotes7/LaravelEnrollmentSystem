@extends('clientViews.layout.clientlayout')
@section('content')
<div class="form-register">
    <div class="messages-section">
        @if (session('message'))
            <span class="login-mgs">{{ session('message') }}</span><br>
        @endif
        @if ($errors->has('firstName'))
            <span>{{ $errors->first('firstName') }}</span><br>
        @endif
        @if ($errors->has('lastName'))
            <span>{{ $errors->first('lastName') }}</span><br>
        @endif
        @if ($errors->has('birthday'))
            <span>{{ $errors->first('birthday') }}</span><br>
        @endif
        @if ($errors->has('address'))
            <span>{{ $errors->first('address') }}</span><br>
        @endif
        @if ($errors->has('email'))
            <span>{{ $errors->first('email') }}</span><br>
        @endif
        @if ($errors->has('retypeemail'))
            <span>{{ $errors->first('retypeemail') }}</span><br>
        @endif
        @if ($errors->has('password'))
            <span>{{ $errors->first('password') }}</span><br>
        @endif
        @if ($errors->has('retypepassword'))
            <span>{{ $errors->first('retypepassword') }}</span><br>
        @endif
    </div>
    <form action="{{route('register')}}" method="POST">
        @csrf
        <input type="text" name="firstName"><span>First Name:</span><br>
        <input type="text" name="middleName"><span>Middle Name:</span><br>
        <input type="text" name="lastName"><span>Last Name:</span><br>
        <input type="date" name="birthday"><span>Birthday:</span><br>
        <input type="text" name="address"><span>address:</span><br>
        <input type="text" name="email"><span>email:</span><br>
        <input type="text" name="retypeemail"><span>retype Email</span><br>
        <input type="password" name="password"><span>password</span><br>
        <input type="password" name="retypepassword"><span>retype password</span><br>
        <button type="submit">Sign up</button>
    </form>
    <a href="{{route('view.login')}}">Already have an account?</a>
</div>
@stop
