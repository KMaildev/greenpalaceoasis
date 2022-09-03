@extends('layouts.app')
@section('title', 'Our Organization Chart')
@section('content')
    <header class="innner-page">
        <div class="container">
            <h1>
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                Our Organization Chart
            </h1>
        </div>
    </header>

    <section class="konnect-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="who-we-are-img">
                        <center>
                            <img src="{{ asset('data/org.png') }}" alt="Image">
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
