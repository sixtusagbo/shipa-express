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
                    <form id="trackingForm" action="{{ route('shipments.find') }}">
                        <div class="form-group mb-3">
                            <textarea class="form-control" placeholder="{{ config('meta.tracking.placeholder') }}" name="tracking_numbers"
                                data-tp="{{ \App\Models\Shipment::trackingNumberValidationRegex() }}"
                                data-kit="{{ config('meta.tracking.keep_invalid_numbers') }}">
                            </textarea>
                        </div>
                        <div class="col-12">
                            <div class="alert alert-danger fade show" id="trackingFormError">
                                Enter a valid {{ config('app.name') }} tracking number to view shipping
                                details.
                            </div>
                            <button class="btn btn-primary w-100" type="submit">
                                {{ config('meta.tracking.button') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-12 col-lg-6 shipments">
                    <div class="pkg-card">
                        <div class="pkg-card-header">
                            <p>Waybill number: <span class="track_number">NG125125346R</span></p>
                            <div class="modal fade" id="waybillInfo" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="waybillInfoLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 waybill-title" id="waybillInfoLabel">
                                                <span>Waybill:</span> NG125125346R
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Name:</th>
                                                            <td>Someone</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Name:</th>
                                                            <td>Someone</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Name:</th>
                                                            <td>Someone</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal-footer border-top-0 pt-0">
                                            <button type="button" class="btn btn-primary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#waybillInfo">
                                <i class="fa-sharp fa-solid fa-eye"></i> <span>Info</span>
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
                                <i class="fa-sharp fa-solid fa-eye"></i> <span>Info</span>
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
                                <i class="fa-sharp fa-solid fa-eye"></i> <span>Info</span>
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
                    <div class="pkg-card">
                        <div class="pkg-card-header">
                            <p>Waybill number: <span class="track_number">NG125125346R</span></p>
                        </div>
                        <p class="ms-3 mt-3 text-primary">No logistics track information</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-core-layout>
