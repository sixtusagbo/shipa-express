<nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
    <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="mb-2 text-primary">{{ config('app.name') }}</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link @if (request()->is('/')) active @endif">Home</a>
            <a href="/monitor-shipment"
                class="nav-item nav-link @if (request()->is('monitor-shipment')) active @endif">Track</a>
            @auth
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Shipping</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="/shipments/create" class="dropdown-item">Ship Now</a>
                        <a href="/manage-shipments" class="dropdown-item">Manage</a>
                    </div>
                </div>
            @endauth
            <a href="/#about" class="nav-item nav-link" id="about-link">About</a>
            <a href="/contact" class="nav-item nav-link @if (request()->is('contact')) active @endif">Contact</a>
            @auth
                <form action="/diveout" method="POST">
                    @csrf

                    <button class="nav-item nav-link" type="submit" style="cursor: pointer">
                        Logout
                    </button>
                </form>
            @endauth
            <div class="nav-item nav-link" id="google_translate_element" style="cursor: pointer"></div>
        </div>
    </div>
</nav>
