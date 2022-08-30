@extends('layouts.app')
@section('title', 'Our Partners')
@section('content')
    <div class="page-title-area" style="background-image: url({{ asset('data/partner_bg.jpeg') }})">
        <div class="container">
            <div class="page-title-content">
                <h3 style="color: white">
                    Our Partners
                </h3>
                <ul>
                    <li>
                        <a href="{{ route('home') }}" style="color: white">
                            Home
                        </a>
                    </li>
                    <li class="active">
                        Our Partners
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="partner-area bg-color" style="background-color: white;">
        <br><br>
        <div class="container">
            <div class="section-title">
                <span>
                    ROYAL GATE INTERNATIONAL CO.,LTD
                </span>
                <h2 style="text-shadow: 2px 2px gray; color: green;">
                               OUR PARTNERS
                            </h2>
            </div>
            <div class="">
                <div class="row">
                    <div class="partner-slider owl-carousel owl-theme">
                        @foreach ($partners as $partner)
                            <div class="partner-item">
                                <img src="{{ $partner->company_logo }}" alt="Image"
                                    style="width: 100%; height: 150px; object-fit: contain; background-size: contain; background-position: center; object-position: center">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
@endsection
@section('script')
@endsection
