<nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
    <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="mb-2 text-primary">{{ config('app.name') }}</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link active">Home</a>
            <a href="/tracking" class="nav-item nav-link">Track</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Shipping</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="/shipping/new" class="dropdown-item">Ship Now</a>
                    <a href="/rate" class="dropdown-item">Rate</a>
                </div>
            </div>
            <a href="/contact" class="nav-item nav-link">Contact</a>
            <div class="nav-item nav-link" id="google_translate_element" style="cursor: pointer"></div>
        </div>
    </div>
</nav>
