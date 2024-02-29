<header>
    <nav>
        <a href="{{ route('view.home') }}">Home</a>
        <a href="{{ route('view.subject', ['id' => encrypt(auth()->user()->id)]) }}">Subject</a>
        <a href="{{ route('view.grades', ['id' => encrypt(auth()->user()->id)]) }}">Grades</a>
        <a href="{{ route('view.tuition', ['id' => encrypt(auth()->user()->id)]) }}">Tuition</a>
        <a href="{{ route('view.announcemnt', ['id' => encrypt(auth()->user()->id)]) }}">Anouncement</a>
        <a href="{{route('view.clubs')}}">clubs</a>
        <a href="{{ route('logout') }}">logout"profile drop down"</a>
    </nav>
</header>
