<x-core-layout>
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container py-5 px-lg-0">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Status</h6>
                <h1 class="mb-4">
                    Customs Status for [{{ $tracking_number }}]
                </h1>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <form action="/shipments/{{ $shipment_id }}/customs" method="POST">
                        @csrf

                        <div class="d-flex justify-content-between">
                            <p class="lead fst-italic fs-6 text-primary">Required fields are marked with asterisk</p>

                            <a href="/shipments/{{ $shipment_id }}/statuses/create" class="btn btn-dark btn-sm h-100">
                                Back
                            </a>
                        </div>

                        <div class="row g-3">
                            <input type="hidden" name="shipment_id" value="{{ $shipment_id }}">

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-control" id="stage" name="stage" readonly>
                                        <option selected>On Hold</option>
                                    </select>
                                    <label for="stage">Stage<span class="text-primary">*</span></label>
                                </div>
                                @error('stage')
                                    <x-error>Please select stage of status</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="location" placeholder="Location"
                                        name="location" value="{{ old('location', '') }}">
                                    <label for="location">Location</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="remarks" placeholder="Remarks"
                                        name="remarks" value="{{ old('remarks') }}">
                                    <label for="remarks">Remarks<span class="text-primary">*</span></label>
                                </div>
                                @error('remarks')
                                    <x-error>{{ $message }}</x-error>
                                @enderror
                            </div>

                            <div class="col-12">
                                <p>Icon</p>
                                <input type="hidden" id="icon_id" name="icon_id" value="">

                                <div class="border icon-input">
                                    <i class="fas fa-circle iconInputIcon selected" id="icon-input-null"
                                        onclick="selectIcon('null')"></i>
                                    @foreach ($icons as $icon)
                                        <i class="{{ $icon->name }} iconInputIcon" id="icon-input-{{ $icon->id }}"
                                            onclick="selectIcon('{{ $icon->id }}')"></i>
                                    @endforeach
                                </div>

                                <script>
                                    function selectIcon(iconId) {
                                        $('i.iconInputIcon.selected').removeClass('selected');
                                        $('#icon_id').val(iconId === 'null' ? '' : iconId);
                                        $(`i#icon-input-${iconId}`).addClass('selected');
                                    }
                                </script>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="country1" placeholder="Country 1"
                                        name="country1" value="{{ old('country1') }}"
                                        aria-describedby="country1HelpBlock">
                                    <label for="country1">Country 1<span class="text-primary">*</span></label>
                                    <div id="country1HelpBlock" class="form-text">
                                        Example Australia
                                    </div>
                                </div>
                                @error('country1')
                                    <x-error>{{ $message }}</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="country2" placeholder="Country 2"
                                        name="country2" value="{{ old('country2') }}"
                                        aria-describedby="country2HelpBlock">
                                    <label for="country2">Country 2<span class="text-primary">*</span></label>
                                    <div id="country2HelpBlock" class="form-text">
                                        Example Australian
                                    </div>
                                </div>
                                @error('country2')
                                    <x-error>{{ $message }}</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="date" placeholder="Date"
                                        name="date" value="{{ old('date') }}">
                                    <label for="date">Date</label>
                                </div>
                                @error('date')
                                    <x-error>{{ $message }}</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="weight" placeholder="Above Weight"
                                        name="weight" value="{{ old('weight') }}" aria-describedby="weightHelpBlock">
                                    <label for="weight">Above Weight<span class="text-primary">*</span></label>
                                    <div id="weightHelpBlock" class="form-text">
                                        Example 5kg
                                    </div>
                                </div>
                                @error('weight')
                                    <x-error>{{ $message }}</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="agent_name"
                                        placeholder="Agent Name" name="agent_name" value="{{ old('agent_name') }}">
                                    <label for="agent_name">Agent Name<span class="text-primary">*</span></label>
                                </div>
                                @error('agent_name')
                                    <x-error>Please enter the agent's name</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="customs_fee"
                                        placeholder="Customs Fee" name="customs_fee"
                                        value="{{ old('customs_fee') }}" aria-describedby="customs_feeHelpBlock">
                                    <label for="customs_fee">Customs Duty Fee<span
                                            class="text-primary">*</span></label>
                                    <div id="customs_feeHelpBlock" class="form-text">
                                        Example 3000 USD
                                    </div>
                                </div>
                                @error('customs_fee')
                                    <x-error>{{ $message }}</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="stamp_fee"
                                        placeholder="Stamp Duty Fee" name="stamp_fee" value="{{ old('stamp_fee') }}"
                                        aria-describedby="stamp_feeHelpBlock">
                                    <label for="stamp_fee">Stamp Duty Fee<span class="text-primary">*</span></label>
                                    <div id="stamp_feeHelpBlock" class="form-text">
                                        Example 500 USD
                                    </div>
                                </div>
                                @error('stamp_fee')
                                    <x-error>{{ $message }}</x-error>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="total"
                                        placeholder="Total Fees" name="total" value="{{ old('total') }}"
                                        aria-describedby="totalHelpBlock">
                                    <label for="total">Total Fees<span class="text-primary">*</span></label>
                                    <div id="totalHelpBlock" class="form-text">
                                        Example 3500 USD
                                    </div>
                                </div>
                                @error('total')
                                    <x-error>{{ $message }}</x-error>
                                @enderror
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Continue</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-core-layout>
