<x-core-layout>
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container contact-page py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-md-6 contact-form wow fadeIn" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Get In Touch</h6>
                    <h1 class="mb-4">Reach Out to Us</h1>
                    <div class="bg-light p-4">
                        <form action="/contact" method="POST">
                            @csrf

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Your Name" value="{{ old('name') }}" name="name">
                                        <label for="name">Your Name</label>
                                    </div>

                                    @error('name')
                                        <x-error>Please enter your name</x-error>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Your Email" value="{{ old('email') }}" name="email">
                                        <label for="email">Your Email</label>
                                    </div>

                                    @error('email')
                                        <x-error>Please enter your email</x-error>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject"
                                            name="subject">
                                        <label for="subject">Subject</label>
                                    </div>

                                    @error('subject')
                                        <x-error>Subject is required</x-error>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px" name="message">
                                          {{ old('message') }}
                                        </textarea>
                                        <label for="message">Message</label>

                                        @error('subject')
                                            <x-error>Message is required</x-error>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    @if (session()->has('message'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" style="object-fit: cover;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22483.661962988714!2d-112.65704567102426!3d45.21830737870153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x535a08af8fa97767%3A0x275a30b10de3edda!2sBest%20Western%20Paradise%20Inn!5e0!3m2!1sen!2sng!4v1709777615134!5m2!1sen!2sng"
                            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-core-layout>
