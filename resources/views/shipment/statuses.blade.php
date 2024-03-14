<x-core-layout>
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container py-5 px-lg-0">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Statuses</h6>
                <h1 class="mb-4">
                    Manage {{ $shipment->tracking_number }} Statuses
                </h1>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="d-flex justify-content-center">
                        <a href="/statuses/create" class="btn btn-dark mb-2 p-2 d-flex align-items-center">
                            <i class="fa-sharp fa-solid fa-plus me-1"></i> Add Status
                        </a>
                    </div>
                    <div class="table-responsive rounded mb-2">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Stage</th>
                                    <th>Location</th>
                                    <th>Remarks</th>
                                    <th>Icon</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($shipment->statuses()->latest()->get() as $status)
                                    <tr>
                                        <td>{{ $status->stage }}</td>
                                        <td>{{ $status->location }}</td>
                                        <td>{{ $status->remarks }}</td>
                                        <td>
                                            <i
                                                class="{{ $status->icon_id ? $status->icon->name : 'fas fa-circle' }}"></i>
                                        </td>
                                        <td>
                                            <a href="/statuses/{{ $status->id }}/edit"
                                                class="btn btn-secondary mb-2 p-2" title="Edit Shipment">
                                                <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="" data-bs-toggle="modal" class="btn btn-danger mb-2 p-2"
                                                data-bs-target="#delete{{ $status->id }}" title="Remove Status">
                                                <i class="fa-sharp fa-solid fa-trash-xmark"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    {{-- Remove status modal --}}
                                    <div class="modal fade" id="delete{{ $status->id }}" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body" id="delete{{ $status->id }}-modal-body">
                                                    <p>
                                                        Confirm deletion of status:
                                                        <strong>[{{ $status->stage }}]</strong>
                                                        [{{ $status->location }}]
                                                    </p>
                                                    <form method="POST"
                                                        action="{{ route('statuses.destroy', $status->id) }}">
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
