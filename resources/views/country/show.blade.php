@extends('layouts.app')
@section('title', 'JOBS IN OVERSEAS')
@section('content')

    <div class="page-title-area" style="background-image: url({{ asset('data/job_banner.jpeg') }})">
        <div class="container">
            <div class="page-title-content">
                <h2 style="color: white">
                    JOBS IN OVERSEAS
                </h2>
                <ul>
                    <li>
                        <a href="{{ route('home') }}" style="color: white">
                            Home
                        </a>
                    </li>
                    <li class="active" style="color: white">
                        Jobs Available In {{ $country->country }}
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="live-jobs-area-two pb-70">
        <br><br>
        <div class="container">
            <div class="section-title green-title">
                <!--<h2>Browse Job Category</h2>-->
                <h2 style="text-shadow: 2px 2px gray; color: #1d3fd9;">
                               JOBS CATEGORIES
                            </h2>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        @foreach ($jobs as $job)
                            <div class="col-md-4 col-sm-12">
                                <a href="{{ route('cv.index') }}">
                                    <div class="alert alert-dismissible alert-primary">
                                        <strong>
                                            {{ $job->job_title ?? '' }}
                                        </strong>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>


    <hr>
@endsection
@section('script')
@endsection
