<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="/" class="logo">
                        <img src="{{ asset('assets/client/images/logo-white.png') }}" alt="">
                    </a>
                    <ul class="nav">
                        <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                        <li><a href="/about" class="{{ request()->is('about', 'about/*') ? 'active' : '' }}">About</a></li>
                        <li><a href="/deals" class="{{ request()->is('deals') ? 'active' : '' }}">Deals</a></li>
                        <li><a href="/reservation" class="{{ request()->is('reservation') ? 'active' : '' }}">Reservation</a></li>
                        @guest
                        <li><a href="/sign-in">Sign-in</a></li>
                        @else
                        <li><a href="/sign-out">Sign-out</a></li>
                        @endguest
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>