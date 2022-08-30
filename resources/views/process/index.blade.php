@extends('layouts.app')
@section('title', 'Process Chart')
@section('content')
    <div class="page-title-area" style="background-image: url({{ asset('data/process_banner.jpeg') }})">
        <div class="container">
            <div class="page-title-content">
                <h3 style="color: white">
                    Process Chart
                </h3>
                <ul>
                    <li>
                        <a href="{{ route('home') }}" style="color: white">
                            Home
                        </a>
                    </li>
                    <li class="active">
                        Process Chart
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
                        <img src="{{ asset('data/process_chart.png') }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
@endsection


@section('script')
@endsection
