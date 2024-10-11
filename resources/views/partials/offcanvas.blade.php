<div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header">
        <h2 class="offcanvas-title fw-bolder" id="mobileMenuLabel">Menu</h2>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#mobileCollapse" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="mobileCollapse">
                  Database
                </a>
                <div class="collapse p-0" id="mobileCollapse">
                    <ul class="mt-2">
                        <li><a href="{{ route('characters.index') }}">Personaggi</a></li>
                        <li><a href="{{ route('items.index') }}">Oggetti</a></li>
                        <li><a href="{{ route('types.index') }}">Classi</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="{{ route('about') }}">Su di noi</a>
            </li>
            <li>
                <a href="{{ route('contacts') }}">Contatti</a>
            </li>
        </ul>
    </div>
</div>