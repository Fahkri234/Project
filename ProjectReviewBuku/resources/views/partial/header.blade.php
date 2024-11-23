<!-- Header Start -->
<header>
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('/Template/assets/img/ebook/ebook.png') }}" width="90"
                                height="80"></a>
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('buku.index') }}">Buku</a></li>
                                <li><a href="/genre">Genre</a></li>
                                <li><a href="{{ route('reviews.index') }}">Review</a></li>
                                <li><a href="/penulis">Penulis</a></li>
                                <li><a href="/penerbit">Penerbit</a></li>
                                @auth
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                    <li>
                                        <a href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('login') }}">Login</a>
                                    </li>
                                @endauth
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Right -->
                    <div class="header-right">
                        <ul>
                            <li><a href="{{ route ('profiles.index')}}">Profile</a></li>
                            <li>
                                <a class="nav-link" href="{{ route('profiles.index') }}"><span class="flaticon-user"></span>Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
