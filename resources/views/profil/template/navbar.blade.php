<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top rounded-3">
    <div class="container">
    <a class="navbar-brand fs-3" href="/">SIANTURE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
            <li class="nav-item px-3">
                <a class="nav-link fs-6" aria-current="page" href="/">HOME</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link fs-6" aria-current="page" href="/culture">CULTURE</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link active fs-6" aria-current="page" href="/profil">PROFIL</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link fs-6" aria-current="page" href="/contact">CONTACT</a>
            </li>

            @auth

                <li class="nav-item px-3">
                    <a class="nav-link fs-6" aria-current="page" href="/dashboard">ADMIN</a>
                </li>
            @else
                <li class="nav-item px-3">
                    <a class="nav-link fs-6" aria-current="page" href="/login">LOGIN</a>
                </li>

                {{-- <li class="nav-item px-3">
                    <a class="nav-link fs-6" aria-current="page" href="/dashboard">REGISTER</a>
                </li> --}}
            @endauth
        </ul>
    </div>
    </div>
</nav>