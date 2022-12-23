<!--================Header Area =================-->
<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="/home"><img src="image/icon.jpg" width="60" alt="logo">
                <span><div class="logo_text d-inline">
                    Tiki Land
                </div></span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav mx-auto">
                    <li class="nav-item {{ ($title === "Home")? 'active' : '' }}"><a class="nav-link" href="/">Home</a></li> 
                    <li class="nav-item {{ ($title === "Accomodation")? 'active' : '' }}"><a class="nav-link" href="/accomodation">Accomodation</a></li>
                    <li class="nav-item {{ ($title === "Gallery")? 'active' : '' }}"><a class="nav-link" href="/gallery">Gallery</a></li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="/blog-single">Blog Details</a></li>
                        </ul>
                    </li> 
                    <li class="nav-item {{ ($title === "About")? 'active' : '' }}"><a class="nav-link" href="/about">About us</a></li>
                    <li class="nav-item {{ ($title === "Contact")? 'active' : '' }}"><a class="nav-link" href="/contact">Contact</a></li>
                </ul>
                @auth
                <ul class="nav navbar-nav menu_nav mx-auto">
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="/dashboard">My account</a></li>
                            <li class="nav-item">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="nav-link">Log out<span class="lnr lnr-arrow-right"></span></button>
                                </form> 
                            </li>
                        </ul>
                    </li> 
                </ul>
                @else
                <a href="/login" type="submit" name="login" class="btn theme_btn button_hover " id="btn_login">Login</a>
                @endauth
            </div> 
        </nav>
    </div>
</header>
<!--================Header Area =================-->