<header class="header header-horizontal header-view-pannel">
    <div class="container">
        <nav class="navbar">
            <a class="navbar-brand" href="{{ route('theme.index') }}">
                <span class="logo-element">
                    <span class="logo-tape">
                        <span class="svg-content svg-fill-theme"
                            data-svg="{{ asset('assets') }}/images/svg/logo-part.svg"></span>
                    </span>
                    <span class="logo-text text-uppercase">
                        <span>F</span>ilmy</span>
                </span>
            </a>
            <button class="navbar-toggler" type="button">
                <span class="th-dots-active-close th-dots th-bars">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item nav-item-arrow-down nav-hover-show-sub">
                        <a class="nav-link" href="{{ route('theme.index') }}">Home</a>

                    </li>
                    <li class="nav-item nav-item-arrow-down nav-hover-show-sub">
                        <a class="nav-link" href="{{ route('theme.blogs') }}">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('theme.movies') }}">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('theme.contact') }}">Contact us</a>
                    </li>
                </ul>
                <div class="navbar-extra d-flex">
                    @if (Auth::check())
                    <a class="btn-theme btn" href="{{ route('blog.create') }}"><i class="fas fa-ticket-alt"></i>Add Post</a>
                    <ul class="navbar-nav ">
                        <li class="nav-item nav-item-arrow-down nav-hover-show-sub">
                            <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                            <div class="nav-arrow"><i class="fas fa-chevron-down"></i></div>
                            <ul class="collapse nav">
                                @if (Auth::user()->status === '1')    
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('movie.create') }}">
                                        Add Movie</a>
                                    <a class="nav-link" href="{{ route('movie.index') }}">My Movies</a>
                                </li>
                                @endif
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('blog.index') }}">My Blogs</a>
                                </li>
                                <li class="nav-item">
                                    <form action="logout" method="POST">
                                        @csrf
                                        <a class="nav-link ml-3" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">Logoute</a>
                                                {{-- <input type="submit" placeholder="logout"> --}}
                                    </form>
                                </li>
                            </ul>
                        </li>
                      
                    </ul>
                    @else
                    <a class="btn-theme btn mr-3" href="{{ route('register') }}">Regster</a>
                    <a class="btn-theme btn" href="{{ route('login') }}">Login</a>
                    @endif
                    
                </div>
             
            </div>
        </nav>
    </div>
</header>
