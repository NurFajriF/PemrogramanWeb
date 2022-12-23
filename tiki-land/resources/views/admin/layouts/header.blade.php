<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#"><img src="/image/logo-tiki.png" width="160" alt=""></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <marquee class="form-control form-control-dark w-100 rounded-0 border-0">Ini Halaman Dashboard Admin Hotel</marquee>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="nav-link px-3 bg-dark bg-0">Log out  <i class="fa fa-sign-out" aria-hidden="true"></i></button>
        </form> 
        </div>
    </div>
</header>