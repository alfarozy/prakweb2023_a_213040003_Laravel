<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item {{ request()->routeIs('dashboard.index') ? 'bg-white rounded shadow-sm' : '' }}">
                <a class="nav-link text-decoration-none text-dark" aria-current="page" href="/dashboard">
                    <i data-feather="home"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">

                <a class="nav-link {{ request()->routeIs('posts.*') ? 'bg-white rounded shadow-sm' : '' }} text-decoration-none text-dark"
                    href="/dashboard/posts">
                    <i data-feather="file-text"></i>
                    My Posts
                </a>
            </li>
        </ul>
    </div>
</nav>
