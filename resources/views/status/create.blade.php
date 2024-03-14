<x-core-layout>
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container py-5 px-lg-0">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Status</h6>
                <h1 class="mb-4">
                    Add a Status for [{{ $tracking_number }}]
                </h1>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <form action="/statuses" method="POST">
                        @csrf

                        <p class="lead fst-italic fs-6 text-primary">Required fields are marked with asterisk</p>

                        <div class="row g-3">
                            <input type="hidden" name="shipment_id" value="{{ $shipment_id }}">

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-control" id="stage" name="stage">
                                        <option value="">Select Stage</option>
                                        @foreach (config('meta.status.stages') as $stage)
                                            <option @if (old('stage') === $stage) selected @endif
                                                value="{{ $stage }}">
                                                {{ $stage }}
                                            </option>
                                        @endforeach
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
