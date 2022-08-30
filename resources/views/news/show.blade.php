@extends('layouts.app')
@section('title', 'News')
@section('content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>News</h2>
                <ul>
                    <li>{{ $details->title_eng ?? '' }}</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="blog-details ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-content">
                        <div class="blog-details-img">
                            <img src="{{ $details->photo }}" alt="" class="img-responsive img-fullwidth"
                                style="width: 100%; height: 350px; background-size: center; object-fit: cover;">
                        </div>

                        <div class="blog-top-content">
                            <div class="news-content">
                                <ul class="admin">
                                    <li>
                                        <a href="#">
                                            <i class="bx bx-user-circle"></i>
                                            {{ $details->author ?? '' }}
                                        </a>
                                    </li>
                                </ul>

                                <h3>
                                    {{ $details->title_eng ?? '' }}
                                </h3>

                                <p>
                                    {{ $details->description_eng }}
                                </p>
                            </div>
                        </div>

                        <div class="tags">
                            <hr>
                            <ul>
                                <li class="title">
                                    <span>Share:</span>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                        target="_blank" style="background-color: #3A5795; color: white;">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}"
                                        style="background-color: #55ACEE; color: white;">
                                        <i class="fa-brands fa-twitter-square"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="widget-sidebar">
                        @include('layouts.shared.quick_links')
                        @include('news.recents_news')
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
@endsection
