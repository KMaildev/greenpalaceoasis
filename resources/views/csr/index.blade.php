@extends('layouts.app')
@section('title', 'CSR')
@section('content')

    <div class="page-title-area" style="background-image: url({{ asset('data/about_banner.jpeg') }})">
        <div class="container">
            <div class="page-title-content">
                <h2 style="color: white">
                    CSR
                </h2>
                <ul>
                    <li>
                        <a href="{{ route('home') }}" style="color: white">
                            Home
                        </a>
                    </li>
                    <li class="active">
                        CSR
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
                            CSR
                        </h2>
                    </center>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/csr/1.jpg') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 450px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/csr/2.jpg') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 450px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/csr/3.jpg') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 450px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/csr/4.jpg') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 450px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/csr/5.jpg') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 450px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/csr/6.jpg') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 450px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/csr/7.jpg') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 450px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/csr/8.jpg') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 450px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/csr/9.jpg') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 450px; object-fit: cover; background-size: corver; border: 2px solid #555;"
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
