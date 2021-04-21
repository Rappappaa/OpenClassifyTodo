<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <div class="col-md-5">
        <a href="{{ route('home') }}" class="navbar-brand">{{ $user->namesurname }}'s To-Do List!</a>
    </div>
    <div class="col-md-6">
        <form class="form-inline my-0 my-lg-0" action="{{ route('search') }}" method="POST">
            {{ csrf_field() }}
            <input class="form-control mr-sm-1" type="text" id="inputSearch" name="inputSearch" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-0 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <div class="col-md-5">
        <a href="#" class="btn btn-danger my-0 my-sm-0" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
        <form id="logout-form" class="form-inline my-0 my-lg-0" method="post" action="{{ route('logout_action') }}">
            {{ csrf_field() }}
        </form>
    </div>
</nav>
