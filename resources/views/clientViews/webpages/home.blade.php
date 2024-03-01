@extends('clientViews.layout.clientlayout')
@section('content')

    <body onload="renderAll()">
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
                        <label for="fName">first name:</label>
                        <input type="text" name="fName"><br>
                        <label for="mName">middle name:</label>
                        <input type="text" name="mName"><br>
                        <label for="lName">last name:</label>
                        <input type="text" name="lName"><br>
                        <label for="degree">Degree:</label>
                        <input type="text" name="degree"><br>
                        <label for="regularRb">regular</label>
                        <input type="radio" name="regular" id="rb_regular">
                        <label for="irregualar">irregular</label>
                        <input type="radio" name="irregular" id="rb_irregular">
                    </div>
                    <div class="regular-student" id="regular_student">
                        <h1>subject regular student</h1>
                    </div>
                    <div class="irregular-student" id="irregular_student">
                        <h1>subject irregular student</h1>
                    </div>
                    <div class="btn-submit">
                        <button>Enroll</button>
                    </div>
                </form>
            </div>
        </div>
        @include('clientViews.js.script')
    </body>
@stop
