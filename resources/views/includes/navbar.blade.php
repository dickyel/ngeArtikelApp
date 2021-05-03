<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light p-4 px-md-4 mb-3 bg-nav border-bottom">
    <a href="#" class="navbar-brand">
        <img src="{{ url('frontend/images/logo.png')}}" alt="">
    </a>
    
    <button 
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarToggler"
        aria-controls="navbarToggler"
        aria-expanded="false"
        aria-label="Toggle Navigation">

        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a href="#" class="nav-link px-md-4 active">
                    Home
                </a>
            </li>

            <li class="nav-item">
                <a href="#about" class="nav-link px-md-4">
                    About
                </a>
            </li>

            <li class="nav-item">
                <a href="#artikel" class="nav-link px-md-4">
                    Artikel
                </a>
            </li>

            <li class="nav-item">
                <a href="#team" class="nav-link px-md-4">
                    Teams
                </a>
            </li>
        </ul>
        <div class="d-flex">
            @guest
                <form class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login btn-login-darker my-2 my-sm-0" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}'">Login</button>
                </form>

                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-login-darker my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}'">Login</button>
                </form>
            @endguest

            @auth
                <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-login btn-login-darker my-2 my-sm-0" type="submit">Logout</button>
                </form>

                <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-login btn-login-darker my-2 my-sm-0 px-4"  type="submit">Logout</button>
                </form>
            @endauth
        </div>
    </div>
</nav>