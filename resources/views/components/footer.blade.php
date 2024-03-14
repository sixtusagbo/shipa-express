<div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Address</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ config('meta.company.address') }}</p>
                <a class="mb-2 d-block" href="tel:{{ str_replace(' ', '', config('meta.company.phone')) }}"><i
                        class="fa fa-phone-alt me-3"></i>{{ config('meta.company.phone') }}</a>
                <a class="mb-2 d-block" href="mailto:{{ config('meta.company.email') }}"><i
                        class="fa fa-envelope me-3"></i>{{ config('meta.company.email') }}</a>
                @if (config('meta.socials.display'))
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="{{ config('meta.socials.twitter') }}"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="{{ config('meta.socials.facebook') }}"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="{{ config('meta.socials.youtube') }}"><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="{{ config('meta.socials.instagram') }}"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                @endif
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Explore</h4>
                <a class="btn btn-link" href="#">Ship</a>
                <a class="btn btn-link" href="/monitor-shipment">Track</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Legal</h4>
                <a class="btn btn-link" href="#">Terms & Conditions</a>
                <a class="btn btn-link" href="#">Privacy Policy</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Language</h4>
                <p>Select your language</p>
                <div id="ytWidget"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fst-italic" href="#">{{ config('app.name') }}</a> All Right Reserved.
                </div>
            </div>
        </div>
    </div>
</div>
