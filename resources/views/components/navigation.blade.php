<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">SMA Mantap Jiwa</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @auth
            @if (auth()->user()->is_admin)
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/students">Daftar Siswa</a>
                </li>
            </ul>
            @else
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            @endif
            @endauth

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>

            <div class="d-flex">
                @guest
                <a href="/register" class="btn btn-sm btn-outline-primary" style="margin-right: 1rem;">Daftar</a>
                @endguest

                @auth
                <form action="/admin/logout" method="POST">
                    @csrf

                    <button class="btn btn-sm btn-outline-success" type="submit">Logout</button>
                </form>
                @endauth
            </div>
        </div>
    </div>
</nav>