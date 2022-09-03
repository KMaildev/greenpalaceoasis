@extends('layouts.app')
@section('title', 'Home')
@section('content')

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

    <section class="blog-area bg-color pb-70" style="background-color: white">
        <br><br>
        <div class="container">
            <div class="section-title">
                <h2 style="text-shadow: 2px 2px gray; color: #1d3fd9;">
                    OUR SERVICES
                </h2>
                <span style="text-align: justify">
                    We serve many companies and still work with good relationship. <br>
                    We are take care to ensure discipline and mutual understanding between the team leader or HR Management
                    and the workers in the workplace
                    During the covid-19 pandemic period, we are cooperate with employer to worker rules to follow the how to
                    protect way. <br>
                </span>
                <span style="font-weight: bold;">
                    We provide customised recruitment services in these countries:
                </span>
            </div>

            <div class="row">
                @foreach ($countryies as $countryie)
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <br>
                        <div class="single-blog-post"
                            style="padding: 20px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                            {{-- blog-img --}}
                            <div class="">
                                <a href="{{ route('country.show', $countryie->id) }}">
                                    <img src="{{ $countryie->photo }}" alt="Image"
                                        style="width: 100%; height: 150px; background-size: center; object-fit: cover; border: 1px solid gray;">
                                </a>
                            </div>

                            <div class="blog-content">
                                <h4>
                                    <a href="{{ route('country.show', $countryie->id) }}"
                                        style="text-shadow: 1px 1px gray; color: green; font-size:15px;">
                                        {{ $countryie->country ?? '' }}
                                    </a>
                                </h4>
                                <a href="{{ route('country.show', $countryie->id) }}" class="read-more">
                                    Learn More
                                    <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-dark">
                    <h2 class="section-heading text-dark">Our Value <span>Partners</span></h2>
                    <div class="konnect-space"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr style="background-color: #336a38; color: white;">
                            <th scope="col" style="text-align: center; width: 2%;">No</th>
                            <th scope="col" style="text-align: center; width: 20%;">City</th>
                            <th scope="col" style="text-align: center; width: 20%;">Company Name</th>
                            <th scope="col" style="text-align: center; width: 20%;">Number of Workers</th>
                            <th scope="col" style="text-align: center; width: 20%;">Company Logo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($partners as $key => $partner)
                            <tr>
                                <td style="background-color: #9deaa3; color: black; text-align: center;">
                                    {{ $key + 1 }}
                                </td>

                                <td style="background-color: #9deaa3; color: black; text-align: center;">
                                    {{ $partner->city ?? '' }}
                                </td>

                                <td style="background-color: #9deaa3; color: black; text-align: center;">
                                    {{ $partner->company ?? '' }}
                                </td>

                                <td style="background-color: #9deaa3; color: black; text-align: center;">
                                    {{ $partner->number_of_workers ?? '' }}
                                </td>

                                <td style="background-color: #9deaa3; color: black; text-align: center;">
                                    <img data-enlargeable="" src="{{ $partner->company_logo ?? '' }}" alt=""
                                        style="width: 30%; height: 50px; background-size: center; object-fit: cover;">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="blog-area bg-color" style="background-color: #c3f7c7;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-dark">
                    <h2 class="section-heading text-dark">Our <span> Activities</span></h2>
                    <div class="konnect-space"></div>
                </div>
            </div>
        </div>
        <div class="container" style="padding-top: 10px;">
            <div class="row">
                @foreach ($activities as $activitie)
                    <div class="col-md-12">
                        <div class="heading-line-bottom">
                            <h4 class="heading-title" style="text-shadow: 1px 2px gray; color:black;">
                                {{ $activitie->title }}
                            </h4>
                            <p>
                                {{ $activitie->description }}
                            </p>
                        </div>
                        <hr>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            @php
                                $values = explode(',', $activitie->photo);
                            @endphp
                            @foreach ($values as $photo)
                                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px;">
                                    <div class="single-blog-post" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                        <div class="blog-img">
                                            <img title="Green Palace Oasis" data-enlargeable=""
                                                src="{{ $photo }}" alt="Image"
                                                style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #336A38; padding: 5px;">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <br><br>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="konnect-news-inner" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-heading text-dark">Green Palace Oasis Co.,Ltd <span>Blog and News</span></h2>
                    <h4>FOLLOW OUR INFOMATIVE BLOG ARTICLES </h4>
                    <div class="konnect-space"></div>
                </div>
            </div>
            <div class="row">
                @foreach ($news as $key => $new)
                    @if ($key == 4)
                        @php
                            break;
                        @endphp
                    @endif
                    <div class="col-md-3 col-sm-6">
                        <article>
                            <div class="news-post">
                                <div class="img-box">
                                    <img src="{{ $new->photo }}" alt="" class="img-responsive img-fullwidth"
                                        style="width: 100%; height: 220px; background-size: center; object-fit: cover;">
                                </div>
                                <div class="post-content-text">
                                    <ul class="blog_info">
                                        <li>
                                            <i class="fa fa-user"></i>
                                            {{ $new->author ?? '' }}
                                        </li>
                                    </ul>
                                    <h5>
                                        {{ $new->title_eng ?? '' }}
                                    </h5>
                                    <p>
                                        {{ Str::limit($new->description_eng, 60) }}
                                    </p>
                                    <a class="konnect-button" href="{{ route('news.show', $new->id) }}">
                                        read more
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
