<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">Blog Alfarozy.id</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('posts.*') ? 'active' : '' }}" href="/posts">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('category.*') ? 'active' : '' }}"
                        href="{{ route('category.index') }}">Kategori</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('auth.login') ? 'active' : '' }}"
                        href="{{ route('auth.login') }}">Login</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
