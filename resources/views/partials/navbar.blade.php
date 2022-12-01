<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(45 62 80)">
    <div class="container">
        <a class="navbar-brand text-bold" href="#">LokerTasikmalaya.id</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Pasang Loker</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($active === "blog") ? 'active' : '' }}" href="/blog">Cari Loker</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === "forum") ? 'active' : '' }}" href="/forum">Forum Diskusi</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Category</a>
            </li> --}}
            
        </ul>
        <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome back, {{  auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                    </form>
                </ul>
            </li>
            @if (auth()->user()->akun_status === "Pro Plus")
            <button type="button" class="btn btn-outline-warning">Pro Plus</button>
            @elseif(auth()->user()->akun_status === "Pro")
            <button type="button" class="btn btn-outline-secondary">Pro</button>
            @else
            <button type="button" class="btn btn-outline-light">Free</button>
            @endif
            <li class="nav-item">
                
            </li>
            @else
            <li class="nav-item">
                <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-right"></i> Login</a>
            </li>
        </ul>
        @endauth
        </div>
    </div>
</nav>

