@extends('layouts.app')
@section('title', 'Milestones')
@section('content')

    <div class="page-title-area" style="background-image: url({{ asset('data/about_banner.jpeg') }})">
        <div class="container">
            <div class="page-title-content">
                <h2 style="color: white">
                    Milestones
                </h2>
                <ul>
                    <li>
                        <a href="{{ route('home') }}" style="color: white">
                            Home
                        </a>
                    </li>
                    <li class="active">
                        Milestones
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <section class="who-we-are-page"
        style="
        box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
        background-color: #105195;
        background: -webkit-gradient(linear, left top, left bottom, from(#105195), to(#a5517a));
        background: -webkit-linear-gradient(top, #105195, #a5517a);
        background: -moz-linear-gradient(top, #105195, #a5517a);
        background: -ms-linear-gradient(top, #105195, #a5517a);
        background: -o-linear-gradient(top, #105195, #a5517a); 
    ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12" style="padding: 14px;">
                    <center>
                        <h2 class="m-b10" style="color: white; text-shadow: 5px 5px 5px gray; font-weight: bold;">
                            Milestones
                        </h2>
                    </center>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/certification/1.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 350px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/certification/2.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 350px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/certification/2_2.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 350px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/certification/3.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 350px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>
                
                
                <div class="col-lg-4 col-md-4 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/certification/3_1.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 350px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/certification/4.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 350px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/certification/5.png') }}" alt="" data-enlargeable=""
                            style="object-position: top left; width: 100%; height: 100%; object-fit: contain; background-size: contain; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/certification/6.png') }}" alt="" data-enlargeable=""
                            style="object-position: top left; width: 100%; height: 100%; object-fit: contain; background-size: contain; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/certification/7.png') }}" alt="" data-enlargeable=""
                            style="object-position: top left; width: 100%; height: 100%; object-fit: contain; background-size: contain; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/certification/8.png') }}" alt="" data-enlargeable=""
                            style="object-position: top left; width: 100%; height: 100%; object-fit: contain; background-size: contain; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <hr>
@endsection
@section('script')
@endsection
