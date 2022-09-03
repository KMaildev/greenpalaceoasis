@extends('layouts.app')
@section('title', 'Our Partners')
@section('content')
    <header class="innner-page">
        <div class="container">
            <h1>
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                OUR PARTNERS
            </h1>
        </div>
    </header>

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
@endsection
@section('script')
@endsection
