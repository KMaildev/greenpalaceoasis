@extends('layouts.app')
@section('title', 'Submit CV')
@section('content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Submit CV</h2>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li class="active">
                        Submit CV
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="job-information-area ptb-100">
        <div class="container">
            <div class="job-information">
                <h3 style="text-shadow: 1px 2px gray; color:black;">
                    APPLY YOUR CV
                </h3>
                <form autocomplete="off" method="POST" action="{{ route('cv.store') }}" enctype="multipart/form-data"
                    id="create-form">
                    @csrf
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Full Name*</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                @error('name')
                                    <div class="help-block with-errors text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                @error('email')
                                    <div class="help-block with-errors text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone"
                                    class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="help-block with-errors text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Country you want to go to*</label>
                                <select name="country">
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->country ?? '' }}">
                                            {{ $country->country ?? '' }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Gender*</label>
                                <select name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Current Address</label>
                                <input type="text" name="current_address"
                                    class="form-control @error('current_address') is-invalid @enderror"
                                    value="{{ old('current_address') }}">
                                @error('current_address')
                                    <div class="help-block with-errors text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Additional Note</label>
                                <textarea class="form-control" rows="5" name="additional_note">{{ old('additional_note') }}</textarea>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="choose-img">
                                <label for="img">Select your CV to upload</label>
                                <input type="file" id="img" name="attachment_file" accept=".doc, .docx, .pdf" />
                                @error('attachment_file')
                                    <div class="help-block with-errors text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <hr>
                            <button class="default-btn">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection


@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv', '#create-form') !!}
@endsection
