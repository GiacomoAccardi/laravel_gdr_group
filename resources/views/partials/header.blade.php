<header>
    <div class="container">
        <div class="row">
            <div class="col-12 p-1 d-flex align-items-center justify-content-between">

                <div class="logo-container d-flex align-items-center justify-content-between">
                    <a href="{{ route('homepage') }}">
                        <img src="{{ Vite::asset('/resources/img/raccoon.png') }}" alt="asd">
                    </a>
                    <h1 class="mt-3 mx-3 fs-1 d-none d-md-block">LARAVEL-GDR</h1>
                    {{-- nascondo su mobile --}}
                    <a class="mt-2 fs-2 d-none d-md-block" href="{{ route('homepage') }}"> - Home</a>
                    {{-- <i class="fa-solid fa-house-chimney-window"></i> --}}
                </div>
                <button id="offcanvas-button" class="d-md-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                    <i class="bi bi-list"></i>
                </button>
                {{-- nascondo su mobile --}}
                <div class="menu-container mt-3 d-none d-md-block">
                    <ul class="d-flex fs-2 gap-3">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Database
                            </a>
                            <ul class="dropdown-menu p-0">
                                <li> <a href="{{ route('characters.index') }}">Personaggi</a></li>
                                <li><a href="{{ route('items.index') }}">Oggetti</a></li>
                                <li><a href="{{ route('types.index') }}">Classi</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{ route('about') }}">Su di noi</a>
                        </li>
                        <li>
                            <a href="{{ route('contacts') }}">Contatti</a>
                        </li>
                    </ul>
                </div>

                @include('partials.offcanvas')
            </div>
        </div>
    </div>
</header>
