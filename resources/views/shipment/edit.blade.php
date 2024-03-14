<x-core-layout>
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container py-5 px-lg-0">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Shipment</h6>
                <h1 class="mb-4">
                    Modify {{ $shipment->tracking_number }}
                </h1>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <form action="/shipments" method="POST">
                        @csrf
                        <p class="lead fst-italic fs-6 text-primary">Required fields are marked with asterisk</p>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="tracking_number"
                                        placeholder="Tracking Number" name="tracking_number"
                                        value="{{ $shipment->tracking_number }}" readonly>
                                    <label for="tracking_number">Tracking Number<span
                                            class="text-primary">*</span></label>
                                </div>
                                @error('tracking_number')
                                    <x-error>Please enter a valid tracking number</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="origin" placeholder="Origin"
                                        name="origin" value="{{ $shipment->origin }}">
                                    <label for="origin">Origin<span class="text-primary">*</span></label>
                                </div>
                                @error('origin')
                                    <x-error>Please enter the origin</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="shipper_name"
                                        placeholder="Shipper Name" name="shipper_name"
                                        value="{{ $shipment->shipper_name }}">
                                    <label for="shipper_name">Shipper Name<span class="text-primary">*</span></label>
                                </div>
                                @error('shipper_name')
                                    <x-error>Please enter the shipper's name</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="shipper_phone"
                                        placeholder="Shipper Phone" name="shipper_phone"
                                        value="{{ $shipment->shipper_phone }}">
                                    <label for="shipper_phone">Shipper Phone</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="shipper_address"
                                        placeholder="Shipper Address" name="shipper_address"
                                        value="{{ $shipment->shipper_address }}">
                                    <label for="shipper_address">Shipper Address<span
                                            class="text-primary">*</span></label>
                                </div>
                                @error('shipper_address')
                                    <x-error>Please enter the shipper's address</x-error>
                                @enderror
                            </div>



                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="recipient_name"
                                        placeholder="Recipient Name" name="recipient_name"
                                        value="{{ $shipment->recipient_name }}">
                                    <label for="recipient_name">Recipient Name<span
                                            class="text-primary">*</span></label>
                                </div>
                                @error('recipient_name')
                                    <x-error>Please enter the recipient's name</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="recipient_phone"
                                        placeholder="Recipient Phone" name="recipient_phone"
                                        value="{{ $shipment->recipient_phone }}">
                                    <label for="recipient_phone">Recipient Phone</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="recipient_address"
                                        placeholder="Recipient Address" name="recipient_address"
                                        value="{{ $shipment->recipient_address }}">
                                    <label for="recipient_address">Recipient Address<span
                                            class="text-primary">*</span></label>
                                </div>
                                @error('recipient_address')
                                    <x-error>Please enter the recipient's address</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="destination"
                                        placeholder="Destination" name="destination"
                                        value="{{ $shipment->destination }}">
                                    <label for="destination">Destination<span class="text-primary">*</span></label>
                                </div>
                                @error('destination')
                                    <x-error>Please enter the destination</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-control" id="type" name="type">
                                        <option value="">Select Type</option>
                                        @foreach (['Parcel', 'Documents', 'Sentiments'] as $type)
                                            <option @if ($shipment->type === $type) selected @endif
                                                value="{{ $type }}">
                                                {{ $type }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label for="type">Type<span class="text-primary">*</span></label>
                                </div>
                                @error('type')
                                    <x-error>Please select a type of shipment</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="weight" placeholder="Weight"
                                        name="weight" value="{{ $shipment->weight }}">
                                    <label for="weight">Weight<span class="text-primary">*</span></label>
                                </div>
                                @error('weight')
                                    <x-error>Please enter the weight</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-control" id="mode" name="mode">
                                        <option value="">Select Mode</option>
                                        @foreach (['Air', 'Road', 'Sea', 'Train'] as $mode)
                                            <option @if ($shipment->mode === $mode) selected @endif
                                                value="{{ $mode }}">
                                                {{ $mode }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label for="mode">Mode<span class="text-primary">*</span></label>
                                </div>
                                @error('mode')
                                    <x-error>Please select a mode of transportation</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="customs_cost"
                                        placeholder="Customs Cost" name="customs_cost"
                                        value="{{ $shipment->customs_cost }}" step=".01">
                                    <label for="customs_cost">Customs Cost<span class="text-primary">*</span></label>
                                </div>
                                @error('customs_cost')
                                    <x-error>Please enter the customs cost</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="carrier"
                                        placeholder="Carrier Name" name="carrier" value="{{ $shipment->carrier }}">
                                    <label for="carrier">Carrier Name</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="invoice_number"
                                        placeholder="Invoice Number" name="invoice_number"
                                        value="{{ $shipment->invoice_number }}">
                                    <label for="invoice_number">Invoice Number<span
                                            class="text-primary">*</span></label>
                                </div>
                                @error('invoice_number')
                                    <x-error>Please enter the invoice number</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="datetime-local" class="form-control" id="eta"
                                        placeholder="Estimated Time of Arrival" name="eta"
                                        value="{{ $shipment->eta }}">
                                    <label for="eta">Estimated Time of Arrival (ETA)</label>
                                </div>
                                @error('eta')
                                    <x-error>Please enter the estimated time of arrival</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="booked_on"
                                        placeholder="Date Booked" name="booked_on"
                                        value="{{ $shipment->booked_on }}">
                                    <label for="booked_on">Date Booked</label>
                                </div>
                                @error('booked_on')
                                    <x-error>Please select the booking date</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="time" class="form-control" id="booked_at"
                                        placeholder="Time Booked" name="booked_at"
                                        value="{{ $shipment->booked_at }}">
                                    <label for="booked_at">Time Booked</label>
                                </div>
                                @error('booked_at')
                                    <x-error>Please enter the time booked</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="shipped_on"
                                        placeholder="Date Shipped" name="shipped_on"
                                        value="{{ $shipment->shipped_on }}">
                                    <label for="shipped_on">Date Shipped</label>
                                </div>
                                @error('shipped_on')
                                    <x-error>Please select the date shipped</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="time" class="form-control" id="shipped_at"
                                        placeholder="Time Shipped" name="shipped_at"
                                        value="{{ $shipment->shipped_at }}">
                                    <label for="shipped_at">Time Shipped</label>
                                </div>
                                @error('shipped_at')
                                    <x-error>Please enter the time shipped</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="delivered_on"
                                        placeholder="Date Delivered" name="delivered_on"
                                        value="{{ $shipment->delivered_on }}">
                                    <label for="delivered_on">Date Delivered</label>
                                </div>
                                @error('delivered_on')
                                    <x-error>Please select the date delivered</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="time" class="form-control" id="delivered_at"
                                        placeholder="Time Delivered" name="delivered_at"
                                        value="{{ $shipment->delivered_at }}">
                                    <label for="delivered_at">Time Delivered</label>
                                </div>
                                @error('delivered_at')
                                    <x-error>Please enter the time delivered</x-error>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="pod"
                                        placeholder="Proof of Delivery" name="pod" value="{{ $shipment->pod }}"
                                        aria-describedby="podHelpBlock">
                                    <label for="pod">Proof of Delivery (POD)</label>
                                    <div id="podHelpBlock" class="form-text">
                                        Please upload the proof of delivery to any cloud storage of your choice (Google
                                        Drive, Mega, OneDrive) and paste link to the
                                        image here.
                                    </div>
                                </div>
                                @error('pod')
                                    <x-error>{{ $message }}</x-error>
                                @enderror
                            </div>

                            <div class="col-12">
                                @if (session()->has('message'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <button class="btn btn-primary w-100 py-3" type="submit">Continue</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-core-layout>
