<x-core-layout>
    {{-- Carousel --}}
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative mb-5">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('images/carousel-1.jpg') }}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown text-center">Premium |
                                    Efficient | Top-Notch</h5>
                                <h2 class="display-5 text-white animated slideInDown mb-4 text-center">
                                    Your Top Choice for Comprehensive <span class="text-primary">Logistic</span>
                                    Solutions
                                </h2>
                                <form action="" method="post">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control form-control-lg"
                                            placeholder="Enter tracking number" aria-label="Tracking number"
                                            aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" type="submit"
                                            id="button-addon2">Track</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Process --}}
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container py-5 px-lg-0">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Real-Time Tracking Updates</h6>
                <h1 class="mb-5">Watch as Your Goods Embark on Their Epic Voyage</h1>
            </div>
            <div class="d-flex justify-content-around" style="gap: 20px; flex-wrap: wrap">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/warehouse.jpeg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Parcel Departure</h5>
                        <p class="card-text">
                            Our process begins from the parcel departure. We ensure a smooth and timely departure of
                            your parcel to its destination.
                        </p>
                        <a href="/tracking" class="btn btn-primary">Track</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/customs.jpeg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Customs Check</h5>
                        <p class="card-text">
                            We handle all customs check to ensure parcel reaches its destination without any legal
                            issues. We ensure all customs requirements are met. `
                        </p>
                        <a href="/tracking" class="btn btn-primary">Track</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/transit.jpeg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">In Transit</h5>
                        <p class="card-text">
                            Your parcel is now on its way. With our real-time tracking system, you can monitor the
                            progress of your parcel as it travels to its destination.
                        </p>
                        <a href="/tracking" class="btn btn-primary">Track</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/arrival_parc.jpeg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Arrival</h5>
                        <p class="card-text">
                            Our local delivery personnels take it from here. We ensure a safe and timely delivery. Thank
                            you for choosing our service.
                        </p>
                        <a href="/tracking" class="btn btn-primary">Track</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- FAQ --}}
    <div class="container-fluid overflow-hidden px-lg-0">
        <div class="container py-5 px-lg-0">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">{{ config('meta.faq.short') }}</h6>
                <h1 class="mb-5">
                    {{ config('meta.faq.title') }}
                </h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        @php
                            $i = 1;
                        @endphp
                        @foreach (config('meta.faq.questions') as $question => $answer)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id={{ 'flush-heading' . $i }}>
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target={{ '#flush-collapse' . $i }} aria-expanded="false"
                                        aria-controls={{ 'flush-collapse' . $i }}>
                                        {{ $question }}
                                    </button>
                                </h2>
                                <div id={{ 'flush-collapse' . $i }} class="accordion-collapse collapse"
                                    aria-labelledby={{ 'flush-heading' . $i }} data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        {{ str_replace(['{support_email}', '{support_phone}'], [config('meta.company.email'), config('meta.company.phone')], $answer) }}
                                    </div>
                                </div>
                                @php
                                    $i++;
                                @endphp
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-core-layout>
