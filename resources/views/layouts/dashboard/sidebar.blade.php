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

        @can('admin')
            <hr class="my-3">

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 mt-4 text-muted">
                <span>Administrator</span>
            </h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('categories.*') ? 'bg-white rounded shadow-sm' : '' }}"
                        href="/dashboard/categories">
                        <i data-feather="tag"></i>
                        Post Categories
                    </a>
                </li>
            </ul>
        @endcan
    </div>
</nav>
