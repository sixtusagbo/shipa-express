<x-core-layout>
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container py-5 px-lg-0">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Track</h6>
                <h1 class="mb-4">
                    Monitor your shipment
                </h1>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <form action="">
                        <div class="form-group mb-3">
                            <textarea class="form-control" placeholder="Up to 20 tracking numbers, separated by comma." name="tracking_numbers">
                            </textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">Track</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-12 col-lg-6">
                    <div class="pkg-card">
                        <p class="pkg-card-header">
                            Waybill number: <span class="track_number">NG125125346R</span>
                        </p>
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
                        <p class="pkg-card-header">
                            Waybill number: <span class="track_number">NG125125346R</span>
                        </p>
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
                        <p class="pkg-card-header">
                            Waybill number: <span class="track_number">NG125125346R</span>
                        </p>
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
