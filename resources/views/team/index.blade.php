@extends('layouts.app')
@section('title', 'Our Team')
@section('content')
    <header class="innner-page">
        <div class="container">
            <h1>
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                Management Team
            </h1>
        </div>
    </header>

    <section class="konnect-team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-heading text-dark">Team of <span>Green Palace Oasis Co.,Ltd</span></h2>
                    <div class="konnect-space"></div>
                </div>

                @foreach ($teams as $team)
                    <div class="col-md-3 col-sm-6 konnect-team-member">
                        <div class="text-center" style="background-color: #336A38;">
                            <img src="{{ $team->photo }}" alt="Royal Gate"
                                style="width: 100%; height: 230px; object-fit: cover; background-size: contain; background-position: top; object-position: center">
                            <br>
                            <h4 class="team-member-title" style="color: white;">
                                {{ $team->name }}
                            </h4>
                            <h5 style="color: white;">
                                {{ $team->position }}
                            </h5>
                            <br>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
