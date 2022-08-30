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
                    <h2 class="section-heading text-dark">Apply for <span>Suitable Job</span></h2>
                    <div class="konnect-space"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">


                <table class="table table-hover">
                    <thead>
                        <tr style="background-color: #336a38; color: white;">
                            <th scope="col">No</th>
                            <th scope="col">City</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Number of Workers</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Apply</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $i => $category)
                            @php
                                $city = $category->city;
                            @endphp
                            <tr>
                                <td style="background-color: #ededed;">
                                    {{ $i + 1 }}
                                </td>
                                <td colspan="7" style="background-color: #ededed;">
                                    {{ $category->city ?? '' }}
                                </td>
                            </tr>

                            @foreach ($partners as $key => $partner)
                                @if ($city == $partner->city)
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td style="text-align: center;">
                                            {{ $partner->company ?? '' }}
                                        </td>
                                        <td style="text-align: center;">
                                            {{ $partner->number_of_workers ?? '' }}
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </section>


@endsection
@section('script')
@endsection
