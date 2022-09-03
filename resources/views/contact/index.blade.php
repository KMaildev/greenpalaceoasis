@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
    <header class="innner-page">
        <div class="container">
            <h1>
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                Contact Us
            </h1>
        </div>
    </header>
    <!-- Contact Form + Address-->
    <section class="contact-map">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">
                    <h2 class="section-heading text-dark">Get in <span>Touch with us</span></h2>
                    <div class="konnect-space"></div>
                    <p>
                        If you have any queries about recruitments, vacancies, or anything else, our team is ready
                        to response all your queries.
                    </p>
                </div>

                <!-- Contact Form-->
                <div class="col-sm-7 margin-bottom-20">
                    <form class="konnect-form" autocomplete="off" method="POST" action="{{ route('contact.store') }}"
                        id="create-form">
                        @csrf

                        <label>Your Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        @error('name')
                            <div class="help-block with-errors text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="form-group">
                            <label>Your Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                            @error('email')
                                <div class="help-block with-errors text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Your Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="help-block with-errors text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" name="subject" class="form-control" value="{{ old('subject') }}">
                            @error('subject')
                                <div class="help-block with-errors text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Your Message</label>
                            <textarea name="message" class="form-control" cols="30" rows="10" data-error="Write your message">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="help-block with-errors text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="konnect-submit">Submit</button>
                    </form>
                </div>

                <div class="col-sm-5">
                    <div class="col-12 contact-address-box">
                        <h3>Contact Information</h3>
                        <br>

                        <p>
                            <i class="fa fa-street-view" aria-hidden="true"></i>
                            No.236, 3rd floor, 39<sup>th</sup> Street (Upper Block), Kyaukatada T/S. Yangon
                        </p>

                        <p>
                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            <a href="tel:09 780 80 9393" style="color: white">
                                09 780 80 9393
                            </a>
                        </p>
                        <p>
                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            <a href="tel:09 779000 464" style="color: white">
                                09 779000 464
                            </a>
                        </p>
                        <p>
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            <a href="mailto:info@greenpalaceoasismm.com" style="color: white">
                                info@greenpalaceoasismm.com
                            </a>
                        </p>
                        <p>
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            <a href="mailto:admin@greenpalaceoasismm.com" style="color: white">
                                admin@greenpalaceoasismm.com
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid"></div>

    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
