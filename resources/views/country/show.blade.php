@extends('layouts.app')
@section('title', 'JOBS IN OVERSEAS')
@section('content')
    <header class="innner-page">
        <div class="container">
            <h1>
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                JOBS IN OVERSEAS
            </h1>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-dark">
                    <h2 class="section-heading text-dark">Apply for <span>Suitable Job</span></h2>
                    <h4>Jobs Available In {{ $country->country }}</h4>
                    <div class="konnect-space"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <table class="table table-hover">
                    <thead>
                        <tr style="background-color: #336a38; color: white;">
                            <th scope="col">#</th>
                            <th scope="col">Job Title</th>
                            <th scope="col">Country</th>
                            <th scope="col">Apply</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jobs as $key => $job)
                            <tr>
                                <td>
                                    {{ $key + 1 }}
                                </td>
                                <td>{{ $job->job_title ?? '' }}</td>
                                <td>{{ $job->country_table->country ?? '' }}</td>
                                <td>
                                    <a href="{{ route('cv.index') }}">Apply</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
