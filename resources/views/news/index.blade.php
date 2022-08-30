@extends('layouts.app')
@section('title', 'Blog')
@section('content')
    <header class="innner-page">
        <div class="container">
            <h1>
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                Blog
            </h1>
        </div>
    </header>

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
                @foreach ($news as $new)
                    <div class="col-md-4 col-sm-6">
                        <article>
                            <div class="news-post">
                                <div class="img-box">
                                    <img src="{{ $new->photo }}" alt="" class="img-responsive img-fullwidth"
                                        style="width: 100%; height: 320px; background-size: center; object-fit: cover;">
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
                                        {{ Str::limit($new->description_eng, 100) }}
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
@section('script')
@endsection
