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
                        <label for="yearlvl">Year Level:</label>
                        <select name="yearlvl" id="yearlvl">
                            <option value="1st year">1st year</option>
                            <option value="2nd year">2nd year</option>
                            <option value="3rd year">3rd year</option>
                            <option value="4th year">4th year</option>
                        </select><br>
                        <label for="regularRb">regular</label>
                        <input type="radio" name="regular" id="rb_regular">
                        <label for="irregualar">irregular</label>
                        <input type="radio" name="irregular" id="rb_irregular">
                    </div>
                    <div class="regular-student" id="regular_student">
                        <h1>subject regular student</h1>
                        <table>
                            <thead>
                                <tr>
                                    <th>Ecode</th>
                                    <th>Course Title</th>
                                    <th>Room</th>
                                    <th>Schedule</th>
                                    <th>Instructor</th>
                                    <th>unit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    {{-- loop from table --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="irregular-student" id="irregular_student">
                        <h1>subject irregular student</h1>
                        <label for="numSubject">number of subjects:</label>
                        <select name="numSubject" id="numSubject">
                            <option value="1">1</option>
                            {{--- use for each loop data from the table of subjects ---}}
                        </select>
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
