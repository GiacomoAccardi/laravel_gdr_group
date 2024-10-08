<header>
    <div class="container">
        <div class="row">
            <div class="col-12 p-1 d-flex align-items-center justify-content-between">

                <div class="logo-container d-flex align-items-center justify-content-between">
                    <a href="{{ route('homepage') }}">
                        <img src="{{ Vite::asset('/resources/img/raccoon.png') }}" alt="asd">
                    </a>
                    <h1 class="mt-3 mx-3 fs-1">LARAVEL-GDR</h1>

                    <a class="mt-2 fs-2" href="{{ route('homepage') }}"> - Home</a>
                    <i class="fa-solid fa-house-chimney-window"></i>
                </div>

                <div class="menu-container mt-3">
                    <ul class="d-flex fs-2 gap-3">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Database
                            </a>
                            <ul class="dropdown-menu">
                              <li> <a href="{{ route('characters.index') }}">Pgs</a></li>
                              <li><a href="">Oggetti</a></li>
                            </ul>
                        </li>
                    
                    <li>
                        <a href="{{ route('about') }}">About us</a>
                    </li>
                    <li>
                        <a href="{{ route('contacts') }}">Contacts</a>
                    </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</header>
