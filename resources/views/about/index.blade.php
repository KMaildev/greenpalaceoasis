@extends('layouts.app')
@section('title', 'Company Profile')
@section('content')

    <div class="page-title-area" style="background-image: url({{ asset('data/about_banner.jpeg') }})">
        <div class="container">
            <div class="page-title-content">
                <h3 style="color: white">
                    Company Profile
                </h3>
                <ul>
                    <li>
                        <a href="{{ route('home') }}" style="color: white">
                            Home
                        </a>
                    </li>
                    <li class="active" >
                        Company Profile
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="who-we-are-page pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="single-blog-post">
                        <div class="blog-img">
                            <img data-enlargeable="" src="{{ asset('data/about.png') }}" alt="Image"
                                style="width: 100%; height: auto; background-size: center; object-fit: cover; border: 2px solid #458cd2; padding: 5px;">
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="who-we-are-content">
                        <span style="color:black; text-shadow: 5px 5px 5px #242623; font-weight: bold; font-size:30px;">
                            ROYAL GATE INTERNATIONAL CO.,LTD
                        </span>
                        <h2 style="text-shadow: 2px 2px gray; color: #1d3fd9;">
                            Foundation
                        </h2>
                        <p style="text-align: justify">
                            Royal Gate International Overseas Employment is established under the company act of Union of
                            Myanmar Government in 2005.Its registration number is (80/2016). Our company is one of the HR
                            leading consultant company which well recruit the skilled and semi skill workers to Malaysia,
                            Thailand,Singapore, Qatar and Dubai.
                        </p>
                        <hr>
                        <!--<div class="row">-->
                        <!--    <div class="col-lg-12 col-sm-12">-->
                        <!--        <div class="who-we-are-single-item">-->
                        <!--            <h3 style="text-shadow: 1px 1px gray; color: #1d3fd9;">-->
                        <!--                Member of Royal Gate International Co., Ltd-->
                        <!--            </h3>-->
                        <!--            <ul>-->
                        <!--                <li>-->
                        <!--                    U Tin Win - Chairman-->
                        <!--                </li>-->
                        <!--                <li>-->
                        <!--                    U Zaw Myo Myint - Managing Director-->
                        <!--                </li>-->
                        <!--                <li>-->
                        <!--                    U Myo Myint - Director-->
                        <!--                </li>-->
                        <!--                <li>-->
                        <!--                    Daw Aye Thandar Win - Director-->
                        <!--                </li>-->
                        <!--            </ul>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="wpb_row vc_row-fluid standard-section section  section-parallax  stretch bg-stretch  vc_row-oo-full-height  vc_row-oo-content-top"
        data-speed="1"
        style="background-image: url({{ asset('data/our-financial-bg.jpeg') }}); padding-top: 50px; padding-bottom: 50px; background-position: 50% 112px; opacity: 1;">
        <div class="col span_12 color-dark left">
            <div class="vc_col-sm-8 wpb_column column_container col no-padding color-dark">
                <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <h1 style="font-size: 25px; line-height: 1em; text-align: center;text-shadow: 5px 5px 5px #242623; font-weight: bold;">
                                <span style="color: #ffffff;">
                                    Our success 
                                    <span style="color: #64c7ba;">
                                        Chart
                                    </span>
                                    in last 10 years
                                </span>
                            </h1>
                        </div>
                    </div>
                    <div class="single_image wpb_content_element align-left">
                        <br>
                        <canvas id="myChart" width="60" height="40"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="blog-area pb-100" style="background-color: white">
        <div class="container">
            <div class="section-title">
                <br><br>
                <h2 style="text-shadow: 2px 2px gray; color: #1d3fd9;">Our Culture</h2>
                <p>
                    At ROYAL GATE INTERNATIONAL CO.,LTD, we abide by the concept of human development for organizational
                    development in order to achieve our ultimate goal of delivering the best value to our customers and
                    business partners in line with the following principles.
                </p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p style="text-align: center;">
                                <img loading="lazy" class="alignnone wp-image-21124" src="{{ asset('data/icon/2.png') }}"
                                    alt="" width="75" height="56" sizes="(max-width: 75px) 100vw, 75px">
                            </p>
                            <h2 style="font-size: 2em; line-height: 1em; text-align: center;">
                                <span style="color: #1d3fd9;font-size:20px; font-weignt:bold;">Accountability</span>
                            </h2>
                            <p>
                                <span style="color: #000000;">Have responsibility and good conscience with awareness of the
                                    organization’s overall results with honesty and ethical standards.
                                </span>
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p style="text-align: center;">
                                <img class="alignnone wp-image-21120" src="{{ asset('data/icon/1.png') }}" alt=""
                                    width="75" height="56" sizes="(max-width: 75px) 100vw, 75px">
                            </p>
                            <h2 style="font-size: 2em; line-height: 1em; text-align: center;">
                                <span style="color: #1d3fd9;font-size:20px; font-weignt:bold;">Can-Do Attitude</span>
                            </h2>
                            <p style="text-align: left;">
                                <span style="color: #000000; text-align: center;">
                                    Using a positive and “Can-Do”
                                    attitude to seize the moment and realize the opportunity. Think of obstacles as
                                    challenges then strive for success.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p style="text-align: center;">
                                <img loading="lazy" class="alignnone wp-image-21123" src="{{ asset('data/icon/3.png') }}"
                                    alt="" width="75" height="56" sizes="(max-width: 75px) 100vw, 75px">
                            </p>
                            <h2 style="font-size: 2em; line-height: 1em; text-align: center;">
                                <span  style="color: #1d3fd9;font-size:20px; font-weignt:bold;">Collaborative</span>
                            </h2>
                            <p>
                                <span style="font-weight: 400;">To cooperate and support each other by sharing ideas and
                                    listening. In order to create and expand success.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 py-5">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p style="text-align: center;">
                                <img loading="lazy" class="alignnone wp-image-21123" src="{{ asset('data/icon/5.png') }}"
                                    alt="" width="75" height="56" sizes="(max-width: 75px) 100vw, 75px">
                            </p>
                            <h2 style="font-size: 2em; line-height: 1em; text-align: center;">
                                <span  style="color: #1d3fd9;font-size:20px; font-weignt:bold;">
                                    Learning and Development
                                </span>
                            </h2>
                            <p>
                                <span style="font-weight: 400;">
                                    Open mind to learn new things. Continuous self improvement with modern knowledge and
                                    skill set.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 py-5">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p style="text-align: center;">
                                <img loading="lazy" class="alignnone wp-image-21123"
                                    src="{{ asset('data/icon/4.png') }}" alt="" width="75" height="56"
                                    sizes="(max-width: 75px) 100vw, 75px">
                            </p>
                            <h2 style="font-size: 2em; line-height: 1em; text-align: center;">
                                <span  style="color: #1d3fd9;font-size:20px; font-weignt:bold;">
                                    Customer Centric
                                </span>
                            </h2>
                            <p>
                                <span style="font-weight: 400;">
                                    Being service minded. Emphasizing and adhering to the customer’s success is the first
                                    priority.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>





                <div class="col-lg-4 col-md-6 py-5">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p style="text-align: center;">
                                <img loading="lazy" class="alignnone size-full wp-image-21159"
                                    src="{{ asset('data/1.png') }}" alt="" width="800" height="533"
                                    sizes="(max-width: 800px) 100vw, 800px">
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <hr>
@endsection
@section('script')
@endsection
