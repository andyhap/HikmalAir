<nav class="navbar navbar-expand-lg navbar-dark main-navbar-custom">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo HikmaAir" class="d-inline-block align-text-top me-2">
            <div style="border-left: 3px solid #ffffff; height: 25px"></div>
            <div class="fw-bold ps-2">HikmalAir</div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex ms-auto me-auto my-2 my-lg-0 search-form-custom" role="search">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0" id="searchIcon">
                        <i class="bi bi-search"></i>
                    </span>
                    <input class="form-control border-start-0" type="search" placeholder="Cari penerbangan" aria-label="Search" aria-describedby="searchIcon">
                </div>
            </form>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownUserMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle me-2" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                        @auth
                            <span>{{ Auth::user()->username }}</span>
                        @else
                            <span>Guest</span> 
                        @endauth
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownUserMenu">

                        <li><a class="dropdown-item" href="/history">History Pemesanan</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form id="logout-form" action="{{ route('actionlogout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Log Out
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>

<div class="container-fluid py-2 secondary-navbar-custom">
    <div class="container">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link px-3" href="/dashboard">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-3" href="/pilihtiket">Tiket Pesawat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-3" href="/destinasi">Destinasi Pilihan</a>
            </li>
        </ul>
    </div>
</div>
