<header>
    <nav>
        <a href="{{ route('view.home') }}">Home</a>
        <a href="#">Subject</a>
        <a href="#">Grades</a>
        <a href="#">Tuition</a>
        <a href="{{ route('view.announcemnt', ['id' => encrypt(auth()->user()->id)]) }}">Anouncement</a>
        <a href="#">About</a>
        <a href="{{ route('logout') }}">logout</a>
    </nav>
</header>
