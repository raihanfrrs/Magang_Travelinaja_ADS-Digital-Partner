<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="/" class="logo">
                        TRAVELINAJA
                    </a>
                    <ul class="nav">
                        <li><a href="/" class="active">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/deals">Deals</a></li>
                        <li><a href="/reservation">Reservation</a></li>
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