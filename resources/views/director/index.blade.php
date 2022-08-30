@extends('layouts.app')
@section('title', 'Director Message')
@section('content')
    <div class="page-title-area" style="background-image: url({{ asset('data/about_banner.jpeg') }})">
        <div class="container">
            <div class="page-title-content">
                <h3 style="color: white">
                    Director Message
                </h3>
                <ul>
                    <li>
                        <a href="{{ route('home') }}" style="color: white">
                            Home
                        </a>
                    </li>
                    <li class="active">
                        Director Message
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="job-information-area">
        <br><br>
        <div class="container">
            <div class="job-information">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="who-we-are-img">
                            <img src="{{ asset('data/md.jpeg') }}" alt="Image"
                                style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #458cd2; padding: 5px;">
                            <center>
                                <div class="blog-content" style="background-color: #6fd654; padding: 20px;">
                                    <span style="color: white">
                                        U Zaw Myo Myint
                                    </span>
                                    <br>
                                    <span style="color: white">
                                        Managing Director
                                    </span>
                                </div>
                            </center>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="who-we-are-content">
                            <h2 style="text-shadow: 2px 2px gray; color: #1d3fd9;">
                                MD’S MESSAGE
                            </h2>
                            <p style="text-align: justify">
                                In the current process of widespread globalization, we in ROYAL GATE INTERNATIONAL CO.,LTD
                                understand that meeting our customer's requirement is essential to the success of our
                                organization.
                                <br><br>

                                Our professional activities and strategic principles of recruitment is mainly to supply
                                Myanmar workers, for those candidates with their qualification and relative experience in
                                search of Skill Workers, Training Workers, Technicians and Other Professionals to the Middle East such as: <b style="color: blue;">Malaysia</b>, <b style="color: blue;">UAE,</b> <b
                                    style="color: blue;">Japan</b>,
                                <b style="color: blue;">Thailand</b>,
                                <b style="color: blue;">Singapore</b> and etc. The
                                numbers of
                                workers we supplied to demanded countries, average numbers in yearly are at least
                                <b style="color: blue;">1000</b>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

@endsection
@section('script')
@endsection
