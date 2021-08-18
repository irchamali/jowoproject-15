<header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="/"><img src="frontend/img/apple-touch-icon2.png" alt="" class="img-fluid"><span> PB
                PMII</span></a></h1>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#features">Features</a></li>
                <li><a class="nav-link scrollto {{ ($title === "Gallery") ? 'active' : '' }}" href="/gallery">Gallery</a></li>
                <li><a class="nav-link scrollto {{ ($title === "Team") ? 'active' : '' }}" href="/team">Team</a></li>
                <li><a class="nav-link scrollto {{ ($title === "Posts") ? 'active' : '' }}" href="/posts">News</a></li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto {{ ($title === "Contact") ? 'active' : '' }}" href="/contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
