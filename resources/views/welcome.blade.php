@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <section class="working-area working-area-three pb-70">
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-lg-4">
                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/q3BV279f82Q"
                        allowfullscreen></iframe>
                </div>

                <div class="col-lg-4 col-sm-12 col-lg-4">
                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/NQ6_Sqt_w3Y"
                        allowfullscreen></iframe>
                </div>

                <div class="col-lg-4 col-sm-12 col-lg-4">
                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/gAw89LEKx3s"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>


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
                            leading consultant company which well recruit the skilled and semi skill workers to Middle East such us  Malaysia,
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
    
    
    	<section class="faq-area bg-color">
    	    <br><br>
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="faq-accordion">
							<div class="faq-title">
								<h2 style="color:black; text-shadow: 5px 5px 5px #242623; font-weight: bold; font-size:30px;">
								    Our Company Statement
								</h2>
							</div>

							<ul class="accordion">
								<li class="accordion-item">
									<a class="accordion-title active" href="javascript:void(0)" style="color:#0250bd; text-shadow: 5px 5px 5px #242623; font-weight: bold;">
										<i class="bx bx-plus"></i>
										OUR VISION
									</a>
	
									<div class="accordion-content show">
										<p style="color: black; text-align: justify; font-size: 18px;">
                                        To be the leading partner that clients and candidates always choose to connect with.
We continuously strive to become the preferred source for employment and human resource services. We are dedicated to serving our customers and the community with the highest levels of service, knowledge, professionalism, honesty and integrity.

                                    </p>
									</div>
								</li>

								<li class="accordion-item">
									<a class="accordion-title" href="javascript:void(0)"  style="color:#0250bd; text-shadow: 5px 5px 5px #242623; font-weight: bold;">
										<i class="bx bx-plus"></i>
										Our Mission
									</a>
	
									<div class="accordion-content">
										<p style="color: black; text-align: justify; font-size: 18px;">
                                        Our customers are central to our mission.
Our employment agency will follow our mission to staff with great employees. Our businesses services will allow the business to stay focused on their core values.  We have a mission to connect employees that are talented, motivated, and driven to excellence with great businesses by opening up opportunities for both. Our goals are to provide high-quality outsourced employment, human resource services, and to empower business owners and employees to be their best. 

                                    </p>
									</div>
								</li>

								<li class="accordion-item">
									<a class="accordion-title" href="javascript:void(0)"  style="color:#0250bd; text-shadow: 5px 5px 5px #242623; font-weight: bold;">
										<i class="bx bx-plus"></i>
										Our Value
									</a>
	
									<div class="accordion-content">
										<ul>
                                        <li style="color: black; text-align: justify; font-size: 18px;">We are a high performing organization dedicated to employment and human resource services by being a trusted partner and resource for our customers and our community.</li>
                                        <li style="color: black; text-align: justify; font-size: 18px;">
                                            We promise only what we can deliver, and we deliver on every promise. Our business is built on a foundation of honesty and integrity.
                                        </li>
                                        <li style="color: black; text-align: justify; font-size: 18px;">
                                            Helping others through our daily business activities and community service brings us joy.
                                        </li>
                                    </ul>
									</div>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="faq-img">
							<img src="{{ asset('data/236.png') }}" alt="Image">
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
    <section class="working-area bg-color pb-70" style="background-color: white;">
        <br><br>
        <div class="container">
            <div class="section-title" >
                <span style="color:black; text-shadow: 5px 5px 5px #242623; font-weight: bold; font-size:30px;">Working Process</span>
               <marquee> <h2 style="color:#025ec9; text-shadow: 2px 2px 2px #242623; font-weight: bold; font-size:28px;">HOW ROYAL GATE INTERNATIONAL Works FOR YOU</h2></marquee>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6" >
                    <a href="{{ route('country.index') }}">
                        <div class="single-working" style="background-color:#d2ef67;">
                            <i class="flaticon-find-my-friend"></i>
                            <h3>Find The Right Job</h3>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <a href="{{ route('about.index') }}">
                        <div class="single-working" style="background-color:#4bc6aa;">
                            <i class="flaticon-company"></i>
                            <h3>Research Companies</h3>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <a href="{{ route('contact.index') }}">
                        <div class="single-working"  style="background-color:#d3508f;">
                            <i class="flaticon-salary"></i>
                            <h3>Compare Salaries</h3>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <a href="{{ route('cv.index') }}">
                        <div class="single-working"  style="background-color:#045eca;">
                            <i class="flaticon-submit"></i>
                            <h3>Quick Apply</h3>
                        </div>
                    </a>
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
                            <h1 style="font-size: 3em; line-height: 1em; text-align: center;">
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

    <section class="live-jobs-area bg-color">
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <!--<span>Apply Now</span>-->
                       <center> <h2 style="color:black; text-shadow: 5px 5px 5px #242623; font-weight: bold; font-size:30px;">Browse Category</h2></center>
                    </div>

                    <div class="live-jobs-item">
                        <div class="row">
                            @foreach ($jobs as $job)
                                <div class="col-lg-2 col-sm-6">
                                    <div class="single-live-job">
                                        <i class="flaticon-calculations"></i>
                                        <a href="{{ route('cv.index') }}">
                                            {{ $job->job_title }}
                                        </a>
                                        <span>
                                            Job in {{ $job->country_table->country ?? '' }}
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="hiring-list">
                        <h3>
                            Choose a Location
                        </h3>
                        <p>
                            We provide customised recruitment services in these countries:
                        </p>
                        <div class="row">
                            @foreach ($countries as $country)
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="single-blog-post"
                                        style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                                        <div class="">
                                            <a href="{{ route('country.show', $country->id) }}">
                                                <img src="{{ $country->photo }}" alt="Image"
                                                    style="width: 100%; height: 100px; background-size: center; object-fit: cover; border: 1px solid gray;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="blog-area bg-color pb-70">
        <br><br>
        <div class="container" style="padding-top: 20px;">
            <div class="row">
                @foreach ($activities as $activitie)
                    <div class="col-md-12">
                        <div class="heading-line-bottom">
                            <h4 class="heading-title">
                                {{ $activitie->title }}
                            </h4>
                            <p>
                                {{ $activitie->description }}
                            </p>
                        </div>
                        <br>
                        <hr>
                    </div>
                    @php
                        $values = explode(',', $activitie->photo);
                    @endphp
                    @foreach ($values as $photo)
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="single-blog-post">
                                <div class="blog-img">
                                    <img data-enlargeable="" src="{{ $photo }}" alt="Image"
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #458cd2; padding: 10px;">
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>

@endsection
