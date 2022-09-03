@extends('layouts.app')
@section('title', 'Company Profile')
@section('content')
    <header class="innner-page">
        <div class="container">
            <h1>
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                Company Profile
            </h1>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-heading text-dark">About of <span>Our Company</span></h2>
                    <div class="konnect-space"></div>
                </div>
                <div class="col-md-8 col-xs-12">
                    <p>
                        GREEN PALACE OASIS Co., Ltd. has been operation 18.12.2015. The company’s mission has always been to
                        provide good services and stable employment that overseas job especially Malaysia.
                    </p>
                    <h4>
                        Mission statement
                    </h4>
                    <ul class="konnect-list">
                        <li>Provide Manpower Services </li>
                        <li>Achieve complete customer satisfaction </li>
                        <li>Respond immediately to the changing needs our clients </li>
                        <li>Improve our services continuously. </li>
                    </ul>
                </div>
                <div class="col-md-4 text-center col-xs-12">
                    <img src="https://img.freepik.com/free-vector/about-us-website-banner-concept-with-thin-line-flat-design_56103-96.jpg?w=2000"
                        width="400" alt="about us">
                </div>
            </div>
        </div>
    </section>

    <section class="dark-bg konnect-facts">
        <div class="container">
            <div class="row services text-left">
                <div class="col-md-12">
                    <h2 class="section-heading text-white">Our <span>Responsibility</span></h2>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="service-box">
                        <img src="{{ asset('assets/img/earth-globe.png') }}" alt="icon">
                        <H4>GREEN PALACE OASIS CO.,LTD</H4>
                        <p class="text-muted text-white">
                            Sourcing the candidates as per the clients require skill set. Receiving and accommodating the
                            clients. Arranging permission for client interview from the Emigration Authority. Arrangement
                            for the skill test for the clients. Medical Test for selected candidates prior to visa process.
                            Visa Stamping, Emigration clearance if required. Departure as per schedule.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="service-box">
                        <img src="{{ asset('assets/img/id-card.png') }}" alt="icon">
                        <H4>Employer Responsibility</H4>
                        <p class="text-muted text-white">
                            As per the Ministry of External Affairs Rules employers are required to provide the following
                            documents necessary for getting permission for Placing advertisement, Conducting Interview, and
                            getting emigration clearance from the Protector of Emigrants. Demand Letter from the Employer.
                            Power of attorney from the Employer. Specimen Employment Contract. Individual employment
                            contract agreement between foreign employer and Myanmar workers. Service Charges are applied as
                            per category and skill sets.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 konnect-callout">
                    <img src="{{ asset('assets/img/desk-chair.png') }}" alt="icon" width="70"
                        class="img-responsive center-block">
                    <h3 class="text-center" style="color:#0A84CB">
                        Our Vision & Goal
                    </h3>
                    <p class="text-center">
                        We believed that to provided good opportunity and stable employment for oversea job especially
                        Malaysia.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="light-bg" style="background-color: #336a38">
        <div class="container col-md-offset-2">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/1.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 400px; object-fit: cover; background-size: corver; border: 2px solid #555;">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/2.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 400px; object-fit: cover; background-size: corver; border: 2px solid #555;">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/3.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 400px; object-fit: cover; background-size: corver; border: 2px solid #555;">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
