<x-core-layout>
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container py-5 px-lg-0">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Login</h6>
                <h1 class="mb-4">
                    Sign in to Manage Shipments
                </h1>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <form action="/divein" method="POST">
                        @csrf

                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="email" placeholder="Email"
                                        name="email" value="{{ old('email') }}">
                                    <label for="email">Email<span class="text-primary">*</span></label>
                                </div>
                                @error('email')
                                    <x-error>{{ $message }}</x-error>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password" placeholder="Password"
                                        name="password" value="{{ old('password') }}">
                                    <label for="password">Password<span class="text-primary">*</span></label>
                                </div>
                                @error('password')
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
