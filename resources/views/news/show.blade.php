@extends('layouts.app')
@section('title', 'News')
@section('content')

    <header class="innner-page">
        <div class="container">
            <h1>
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                Blog / Detail
            </h1>
        </div>
    </header>

    <section class="konnect-news">
        <div class="container">
            <div class="row">
                <!--Blog Content-->
                <div class="blog-content col-sm-12 col-md-8 col-xs-12">
                    <h2 class="blog-heading text-default">
                        {{ $details->title_eng ?? '' }}
                    </h2>
                    <div class="social-share">
                        Share
                        <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </div>
                    <img src="{{ $details->photo }}" alt="" class="img-responsive img-fullwidth"
                        style="width: 100%; height: 350px; background-size: center; object-fit: cover;">
                    <div class="konnect-space"></div>
                    <div class="post-content-text">
                        <p>
                            {{ $details->description_eng }}
                        </p>
                    </div>
                </div>

                <div class="side-bar col-sm-12 col-md-4 col-xs-12">
                    @include('news.recents_news')
                    @include('layouts.shared.quick_links')
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
