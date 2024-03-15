<x-core-layout>
    {{-- Carousel --}}
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative mb-5">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('images/carousel-2.jpg') }}" alt="">
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
                                <form onclick="location.href = '/monitor-shipment'">
                                    @csrf

                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control form-control-lg"
                                            placeholder="Enter tracking number" aria-label="Tracking number"
                                            onclick="location.href = '/monitor-shipment'">

                                        <a href="/monitor-shipment" class="btn btn-outline-secondary text-center"
                                            style="border-top-right-radius: 0.3rem; border-bottom-right-radius: 0.3rem;">Track</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- About --}}
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container about py-5 px-lg-0" id="about">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('images/boxed.jpg') }}"
                            style="object-fit: cover" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">About Us</h6>
                    <h1 class="mb-5">Premium Transport and Logistics Solutions</h1>
                    <p class="mb-5">
                        We are a premium logistics company that provides top-notch logistics solutions to our clients.
                        Our services include air freight, sea freight, road freight, warehousing, and customs clearance.
                        We are committed to providing efficient and reliable logistics solutions to our clients.
                    </p>
                    <div class="row g-4 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <i class="fa fa-shipping-fast fa-3x text-primary mb-3"></i>
                            <h5>On Time Delivery</h5>
                            <p class="m-0">
                                We are committed to delivering your goods on time. Our logistics solutions are designed
                                to
                                ensure that your goods reach their destination on time.
                            </p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-globe fa-3x text-primary mb-3"></i>
                            <h5>Global Coverage</h5>
                            <p class="m-0">
                                We provide logistics solutions to clients across the globe. Our global coverage ensures
                                that we can deliver your goods to any location.
                            </p>
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
                        <a href="/monitor-shipment" class="btn btn-primary">Track</a>
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
                        <a href="/monitor-shipment" class="btn btn-primary">Track</a>
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
                        <a href="/monitor-shipment" class="btn btn-primary">Track</a>
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
                        <a href="/monitor-shipment" class="btn btn-primary">Track</a>
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
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target={{ '#flush-collapse' . $i }}
                                        aria-expanded="false" aria-controls={{ 'flush-collapse' . $i }}>
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
