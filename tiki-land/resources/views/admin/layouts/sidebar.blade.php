<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky mt-3">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/dashboard')?'active':'' }} text-decoration-none" aria-current="page" href="/admin/dashboard">
            <i class="fa fa-home" aria-hidden="true"></i>
            Dashboard Admin - {{ auth()->user()->name }} 
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/reservation*')?'active':'' }} text-decoration-none" href="/admin/reservation">
            <i class="fa fa-book" aria-hidden="true"></i>
            Reservation
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/payment*')?'active':'' }} text-decoration-none" href="/admin/payment">
            <i class="fa fa-print" aria-hidden="true"></i>
            Payment
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/rooms*')?'active':'' }} text-decoration-none" href="/admin/rooms">
            <i class="fa fa-bed" aria-hidden="true"></i>
            Rooms
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/users*')?'active':'' }} text-decoration-none" href="/admin/users">
            <i class="fa fa-user" aria-hidden="true"></i>
            Users
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/admins*')?'active':'' }} text-decoration-none" href="/admin/admins">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            Admins
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            Blog Posts
            </a>
        </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
        <span>Saved reports</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
        </a>
        </h6>
        <ul class="nav flex-column mb-2">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('chart')?'active':'' }}" href="/admin/chart">
            <i class="fa fa-bar-chart" aria-hidden="true"></i>
            Current month
            </a>
        </li>
        </ul>
    </div>
</nav>