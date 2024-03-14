<x-core-layout>
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container py-5 px-lg-0">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Shipments</h6>
                <h1 class="mb-4">
                    Manage Shipments
                </h1>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="table-responsive rounded mb-2">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Tracking Number</th>
                                    <th>Shipper Name</th>
                                    <th>Origin</th>
                                    <th>Recipient Name</th>
                                    <th>Destination</th>
                                    <th>Type</th>
                                    <th>Weight</th>
                                    <th>Mode</th>
                                    <th>Customs Cost</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($shipments as $shipment)
                                    <tr>
                                        <th scope="row">{{ $shipment->tracking_number }}</t>
                                        <td>{{ $shipment->shipper_name }}</td>
                                        <td>{{ $shipment->origin }}</td>
                                        <td>{{ $shipment->recipient_name }}</td>
                                        <td>{{ $shipment->destination }}</td>
                                        <td>{{ $shipment->type }}</td>
                                        <td>{{ $shipment->weight }}</td>
                                        <td>{{ $shipment->mode }}</td>
                                        <td>{{ $shipment->customs_cost }}</td>
                                        <td>
                                            <a href="" class="btn btn-warning mb-2 p-2" data-bs-toggle="modal"
                                                data-bs-target="#edit{{ $shipment->id }}" title="Edit Shipment">
                                                <i class="fa-sharp fa-solid fa-pen-to-square"></i> Edit
                                            </a>
                                            <a href="" data-bs-toggle="modal" class="btn btn-danger mb-2 p-2"
                                                data-bs-target="#delete{{ $shipment->id }}" title="Delete">
                                                <div class="d-flex align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-trash3-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                    </svg>
                                                    &nbsp;Delete
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-core-layout>
