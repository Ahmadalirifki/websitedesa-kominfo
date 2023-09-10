{{-- Navbar --}}
<nav class="navbar bg-dark navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/icons/kominfo.png') }}" height="55" width="55" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Prestasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Kontak</a>
                </li>
            </ul>
            <div class="d-flex">
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="btn btn-primary" type="submit">Logout</button>
                    </form>
                @else
                    <button class="btn btn-danger" type="submit">Register</button>
                @endauth
            </div>
        </div>
    </div>
</nav>
{{-- End Navbar --}}
