@extends('clientViews.layout.clientlayout')
@section('content')
<div class="container">
    <div class="title">
        <h1>home</h1>
    </div>
    <div class="form">
        <form action="#">
            <div class="form-title">
                <h1>enrollment form</h1>
            </div>
            <div class="messages">
                <h3>messages</h3>
            </div>
            <div class="form-inputs">
                <label for="fName">fist name:</label>
                <input type="text" name="fName"><br>
                <label for="mName">middle name:</label>
                <input type="text" name="mName"><br>
                <label for="lName">last name:</label>
                <input type="text" name="lName"><br>
                <label for="degree"></label>
            </div>
            <div class="btn-submit">
                <button>Enroll</button>
            </div>
        </form>
    </div>
</div>
@stop
