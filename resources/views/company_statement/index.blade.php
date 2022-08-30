@extends('layouts.app')
@section('title', 'VISION / MISSION / VALUES')
@section('content')
    <div class="page-title-area" style="background-image: url({{ asset('data/statement_banner.jpeg') }})">
        <div class="container">
            <div class="page-title-content">
                <h3 style="color: white">
                    VISION / MISSION / VALUES
                </h3>
                <ul>
                    <li>
                        <a href="{{ route('home') }}" style="color: white">
                            Home
                        </a>
                    </li>
                    <li class="active">
                        VISION / MISSION / VALUES
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class=""
        style="
        box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
        background-color: #105195;
        background: -webkit-gradient(linear, left top, left bottom, from(#105195), to(#a5517a));
        background: -webkit-linear-gradient(top, #105195, #a5517a);
        background: -moz-linear-gradient(top, #105195, #a5517a);
        background: -ms-linear-gradient(top, #105195, #a5517a);
        background: -o-linear-gradient(top, #105195, #a5517a); 
       ">
        <br><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-sm-12 col-lg-9">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="app-img-1">
                                <img src="{{ asset('data/statement/3.png') }}" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="app-downloading-content">
                                <h3 class="entry-title text-black text-uppercase pt-0 mt-0"
                                    style="color:black; text-shadow: 5px 5px 5px #242623; font-weight: bold; font-size:30px;">
                                    Our Vision
                                </h3>
                                <div>
                                    <p style="color: white; text-align: justify; font-size: 18px;">
                                        To be the leading partner that clients and candidates always choose to connect with.
We continuously strive to become the preferred source for employment and human resource services. We are dedicated to serving our customers and the community with the highest levels of service, knowledge, professionalism, honesty and integrity.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </section>

    <section class=""
        style="box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
        background-color: #3b9124;
        background: -webkit-gradient(linear, left top, left bottom, from(#3b9124), to(#0d0606));
        background: -webkit-linear-gradient(top, #3b9124, #0d0606);
        background: -moz-linear-gradient(top, #3b9124, #0d0606);
        background: -ms-linear-gradient(top, #3b9124, #0d0606);
        background: -o-linear-gradient(top, #3b9124, #0d0606); 
    ">
        <br><br><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-sm-12 col-lg-9">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="app-downloading-content">
                                <h3 class="entry-title text-black text-uppercase pt-0 mt-0"
                                    style="color:black; text-shadow: 5px 5px 5px #242623; font-weight: bold; font-size:30px;" >
                                    OUR MISSION
                                </h3>
                                <div>
                                    <p style="color: white; text-align: justify; font-size: 18px;">
                                        Our customers are central to our mission.
Our employment agency will follow our mission to staff with great employees. Our businesses services will allow the business to stay focused on their core values.  We have a mission to connect employees that are talented, motivated, and driven to excellence with great businesses by opening up opportunities for both. Our goals are to provide high-quality outsourced employment, human resource services, and to empower business owners and employees to be their best. 

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="app-img-1">
                                <img src="{{ asset('data/mission_banner.png') }}" alt="Image" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </section>


    <section class=""
        style="box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
    background-color: #bb8d2f;
    background: -webkit-gradient(linear, left top, left bottom, from(#bb8d2f), to(#9b517c));
    background: -webkit-linear-gradient(top, #bb8d2f, #9b517c);
    background: -moz-linear-gradient(top, #bb8d2f, #9b517c);
    background: -ms-linear-gradient(top, #bb8d2f, #9b517c);
    background: -o-linear-gradient(top, #bb8d2f, #9b517c); 
">
        <br><br><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-sm-12 col-lg-9">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="app-img-1">
                                <img src="{{ asset('data/value_banner.png') }}" alt="Image" style="width: 100%;">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="app-downloading-content">
                                <h3 class="entry-title text-black text-uppercase pt-0 mt-0"
                                    style="color:black; text-shadow: 5px 5px 5px #242623; font-weight: bold; font-size:30px;">
                                    OUR CORE VALUE
                                </h3>
                                <div>
                                    <ul>
                                        <li style="color: white; text-align: justify; font-size: 18px;">We are a high performing organization dedicated to employment and human resource services by being a trusted partner and resource for our customers and our community.</li>
                                        <li style="color: white; text-align: justify; font-size: 18px;">
                                            We promise only what we can deliver, and we deliver on every promise. Our business is built on a foundation of honesty and integrity.
                                        </li>
                                        <li style="color: white; text-align: justify; font-size: 18px;">
                                            Helping others through our daily business activities and community service brings us joy.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </section>

@endsection
@section('script')
@endsection
