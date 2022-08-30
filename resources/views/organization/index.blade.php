@extends('layouts.app')
@section('title', 'Our Organization Chart')
@section('content')
    <div class="page-title-area" style="background-image: url({{ asset('data/org_banner.jpeg') }})">
        <div class="container">
            <div class="page-title-content">
                <h3 style="color: white">
                    Our Organization Chart
                </h3>
                <ul>
                    <li>
                        <a href="{{ route('home') }}" style="color: white">
                            Home
                        </a>
                    </li>
                    <li class="active">
                        Our Organization Chart
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="who-we-are-page pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="who-we-are-img">
                        <img src="{{ asset('data/org.png') }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
@endsection


@section('script')
@endsection
