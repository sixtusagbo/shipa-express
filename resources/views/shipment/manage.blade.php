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
                                    <th>Recipient Email</th>
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
                                        <td>{{ $shipment->recipient_email }}</td>
                                        <td>{{ $shipment->destination }}</td>
                                        <td>{{ $shipment->type }}</td>
                                        <td>{{ $shipment->weight }}</td>
                                        <td>{{ $shipment->mode }}</td>
                                        <td>{{ $shipment->customs_cost }}</td>
                                        <td>
                                            <a href="/shipments/{{ $shipment->id }}/statuses"
                                                class="btn btn-dark mb-2 p-2" title="Manage Status">
                                                <i class="fa-sharp fa-solid fa-arrow-progress"></i>
                                            </a>
                                            <a href="/shipments/{{ $shipment->id }}/edit"
                                                class="btn btn-secondary mb-2 p-2" title="Edit Shipment">
                                                <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="" data-bs-toggle="modal" class="btn btn-danger mb-2 p-2"
                                                data-bs-target="#delete{{ $shipment->id }}" title="Delete Shipment">
                                                <i class="fa-sharp fa-solid fa-trash-xmark"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    {{-- Remove shipment modal --}}
                                    <div class="modal fade" id="delete{{ $shipment->id }}" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body" id="delete{{ $shipment->id }}-modal-body">
                                                    <p>
                                                        Confirm deletion of shipment:
                                                        <strong>{{ $shipment->tracking_number }}</strong>
                                                    </p>
                                                    <form method="POST"
                                                        action="{{ route('shipments.destroy', $shipment->id) }}">
                                                        @csrf
                                                        @method('DELETE')

                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <button type="submit" class="btn btn-danger">Yes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-core-layout>
