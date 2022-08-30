@extends('layouts.app')
@section('title', 'Submit CV')
@section('content')
    <header class="innner-page">
        <div class="container">
            <h1>
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                Submit CV
            </h1>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-dark">
                    <!--Services Heading-->
                    <h2 class="section-heading text-dark">Submit <span>Your Application</span></h2>
                    <h4>APPLY YOUR CV</h4>
                    <div class="konnect-space"></div>
                </div>
            </div>
            <!-- Submit Application-->
            <form class="konnect-form" autocomplete="off" method="POST" action="{{ route('cv.store') }}"
                enctype="multipart/form-data" id="create-form">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label>Name*</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}">
                        @error('name')
                            <div class="help-block with-errors text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        <label>Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}">
                        @error('email')
                            <div class="help-block with-errors text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                            value="{{ old('phone') }}">
                        @error('phone')
                            <div class="help-block with-errors text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        <label>Country you want to go to*</label>
                        <select name="country">
                            @foreach ($countries as $country)
                                <option value="{{ $country->country ?? '' }}">
                                    {{ $country->country ?? '' }}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="col-md-6">
                        <label>Current Address</label>
                        <input type="text" name="current_address"
                            class="form-control @error('current_address') is-invalid @enderror"
                            value="{{ old('current_address') }}">
                        @error('current_address')
                            <div class="help-block with-errors text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        <label>Additional Note</label>
                        <input type="text" name="additional_note"
                            class="form-control @error('additional_note') is-invalid @enderror"
                            value="{{ old('additional_note') }}">


                        <label for="img">Select your CV to upload</label>
                        <span class="btn btn-file">
                            Browse Your Resume
                            <input type="file" name="attachment_file" accept=".doc, .docx, .pdf">
                        </span>
                        @error('attachment_file')
                            <div class="help-block with-errors text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        <br><br>
                        <label>Gender*</label>
                        <select name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <br>
                    <div class="col-md-12">
                        <button type="submit" class="konnect-submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv', '#create-form') !!}
@endsection
