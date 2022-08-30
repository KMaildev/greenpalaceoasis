@extends('layouts.app')
@section('title', 'Our Recruitment Services')
@section('content')

    <div class="page-title-area" style="background-image: url({{ asset('data/about_banner.jpeg') }})">
        <div class="container">
            <div class="page-title-content">
                <h3 style="color: white">
                    Our Recruitment Services
                </h3>
                <ul>
                    <li>
                        <a href="{{ route('home') }}" style="color: white">
                            Home
                        </a>
                    </li>
                    <li class="active">
                        Our Recruitment Services
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="terms-conditions-area ptb-100">
        <div class="container">
            <div class="terms-conditions">
                <div class="conditions-content">
                    <h2 style="text-shadow: 1px 2px gray; color:black;">
                        Current Services
                    </h2>

                    <p>
                        We specialized to employ skilled workers at service sector, manufacturing, duty free
                        shop,hospitality, nursing and amusement park. Our workers have various good images in Middle East,
                        UAE, Thailand, Malaysia and Singapore.
                    </p>
                </div>


                <div class="conditions-content">
                    <h3 style="text-shadow: 1px 2px gray; color:black;">
                        Transaction of Procession
                    </h3>
                    <ul>
                        <li>
                            Receiving of Job Offer from our overseas clients
                        </li>
                        <li>
                            Explanation of job offer and employment contract to candidates
                        </li>
                        <li>
                            Training the respected courses (such as: language, hospitality & others)
                        </li>
                        <li>
                            Medical Check Up
                        </li>
                        <li>
                            Sending CV to employer or Interview as require
                        </li>
                        <li>
                            Applying Visa to related embassy
                        </li>
                        <li>
                            Candidates attending Pre Departure Training at Labour Department
                        </li>
                        <li>
                            Arranging Air ticket and sending arrival details to employer
                        </li>
                    </ul>
                    <p>
                        Royal Gate sending candidate to Yangon International Airport
                    </p>
                </div>

                <div class="conditions-content">
                    <h2 style="text-shadow: 1px 2px gray; color:black;">
                        Conclusion
                    </h2>

                    <p>
                        Royal Gate is continually focused and recruits manpower to worldwide and enhances the human
                        resources from normal to semi skill and semi skill workforce to professional. Thus, Royal Gate
                        welcomes all employers, manufacturers and HR companies to cooperate with us at anytime.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <hr>
@endsection
@section('script')
@endsection
