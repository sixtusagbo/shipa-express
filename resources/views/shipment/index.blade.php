<x-core-layout>
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container py-5 px-lg-0">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">{{ config('meta.tracking.short') }}</h6>
                <h1 class="mb-4">
                    {{ config('meta.tracking.title') }}
                </h1>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <form action="">
                        <div class="form-group mb-3">
                            <textarea class="form-control" placeholder="{{ config('meta.tracking.placeholder') }}" name="tracking_numbers"
                                data-tracking-pattern="{{ \App\Models\Shipment::trackingNumberValidationRegex() }}"
                                data-kit="{{ config('meta.tracking.keep_invalid_numbers') }}">
                            </textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">
                                {{ config('meta.tracking.button') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-12 col-lg-6">
                    <div class="pkg-card">
                        <div class="pkg-card-header">
                            <p>Waybill number: <span class="track_number">NG125125346R</span></p>
                            <button type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-eye"></i> Info
                            </button>
                        </div>
                        <ul class="status-list">
                            <li class="status delivered">
                                <i class="fas fa-check"></i>
                                <div class="status-info">
                                    <p class="status-timestamp">2024-03-05 22:03:14</p>
                                    {{-- TODO: Do a replace on everything in square brackets --}}
                                    <p class="status-description">Parcel delivered. Received by [Sixtus
                                        Miracle]; Collection site is [AWKA-UNITY].</p>
                                </div>
                            </li>
                            <li class="status">
                                {{-- <i class="fas fa-truck"></i> --}}
                                <i class="fa-sharp fa-solid fa-truck-front"></i>
                                <div class="status-info">
                                    <p class="status-timestamp">2024-03-05 22:03:14</p>
                                    {{-- TODO: Do a replace on everything in square brackets --}}
                                    <p class="status-description">Parcel delivered. Received by [Sixtus
                                        Miracle]; Collection site is [AWKA-UNITY].</p>
                                </div>
                            </li>
                            <li class="status dot">
                                <div class="status-info">
                                    <p class="status-timestamp">2024-03-05 22:03:14</p>
                                    {{-- TODO: Do a replace on everything in square brackets --}}
                                    <p class="status-description">Parcel delivered. Received by [Sixtus
                                        Miracle]; Collection site is [AWKA-UNITY].</p>
                                </div>
                            </li>
                            <li class="status dot">
                                <div class="status-info">
                                    <p class="status-timestamp">2024-03-05 22:03:14</p>
                                    {{-- TODO: Do a replace on everything in square brackets --}}
                                    <p class="status-description">Parcel delivered. Received by [Sixtus
                                        Miracle]; Collection site is [AWKA-UNITY].</p>
                                </div>
                            </li>
                        </ul>
                        <p class="pkg-card-footer">
                            <span>Collapse</span>
                            <i class="fa-regular fa-chevron-down"></i>
                        </p>
                    </div>
                    <div class="pkg-card">
                        <div class="pkg-card-header">
                            <p>Waybill number: <span class="track_number">NG125125346R</span></p>
                            <button type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-eye"></i> Info
                            </button>
                        </div>
                        <ul class="status-list">
                            <li class="status">
                                <i class="fa-solid fa-truck-fast"></i>
                                <div class="status-info">
                                    <p class="status-timestamp">2024-03-05 22:03:14</p>
                                    {{-- TODO: Do a replace on everything in square brackets --}}
                                    <p class="status-description">Parcel delivered. Received by [Sixtus
                                        Miracle]; Collection site is [AWKA-UNITY].</p>
                                </div>
                            </li>
                            <li class="status">
                                <i class="fas fa-truck"></i>
                                <div class="status-info">
                                    <p class="status-timestamp">2024-03-05 22:03:14</p>
                                    {{-- TODO: Do a replace on everything in square brackets --}}
                                    <p class="status-description">Parcel delivered. Received by [Sixtus
                                        Miracle]; Collection site is [AWKA-UNITY].</p>
                                </div>
                            </li>
                            <li class="status dot">
                                <div class="status-info">
                                    <p class="status-timestamp">2024-03-05 22:03:14</p>
                                    {{-- TODO: Do a replace on everything in square brackets --}}
                                    <p class="status-description">Parcel delivered. Received by [Sixtus
                                        Miracle]; Collection site is [AWKA-UNITY].</p>
                                </div>
                            </li>
                            <li class="status dot">
                                <div class="status-info">
                                    <p class="status-timestamp">2024-03-05 22:03:14</p>
                                    {{-- TODO: Do a replace on everything in square brackets --}}
                                    <p class="status-description">Parcel delivered. Received by [Sixtus
                                        Miracle]; Collection site is [AWKA-UNITY].</p>
                                </div>
                            </li>
                        </ul>
                        <p class="pkg-card-footer">
                            <span>Collapse</span>
                            <i class="fa-regular fa-chevron-down"></i>
                        </p>
                    </div>
                    <div class="pkg-card">
                        <div class="pkg-card-header">
                            <p>Waybill number: <span class="track_number">NG125125346R</span></p>
                            <button type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-eye"></i> Info
                            </button>
                        </div>
                        <ul class="status-list">
                            <li class="status dot">
                                <div class="status-info">
                                    <p class="status-timestamp">2024-03-05 22:03:14</p>
                                    {{-- TODO: Do a replace on everything in square brackets --}}
                                    <p class="status-description">Parcel delivered. Received by [Sixtus
                                        Miracle]; Collection site is [AWKA-UNITY].</p>
                                </div>
                            </li>
                            <li class="status dot">
                                <div class="status-info">
                                    <p class="status-timestamp">2024-03-05 22:03:14</p>
                                    {{-- TODO: Do a replace on everything in square brackets --}}
                                    <p class="status-description">Parcel delivered. Received by [Sixtus
                                        Miracle]; Collection site is [AWKA-UNITY].</p>
                                </div>
                            </li>
                            <li class="status dot">
                                <div class="status-info">
                                    <p class="status-timestamp">2024-03-05 22:03:14</p>
                                    {{-- TODO: Do a replace on everything in square brackets --}}
                                    <p class="status-description">Parcel delivered. Received by [Sixtus
                                        Miracle]; Collection site is [AWKA-UNITY].</p>
                                </div>
                            </li>
                            <li class="status dot">
                                <div class="status-info">
                                    <p class="status-timestamp">2024-03-05 22:03:14</p>
                                    {{-- TODO: Do a replace on everything in square brackets --}}
                                    <p class="status-description">Parcel delivered. Received by [Sixtus
                                        Miracle]; Collection site is [AWKA-UNITY].</p>
                                </div>
                            </li>
                        </ul>
                        <p class="pkg-card-footer">
                            <span>Collapse</span>
                            <i class="fa-regular fa-chevron-down"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-core-layout>
