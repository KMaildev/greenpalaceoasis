@extends('layouts.app')
@section('title', 'News')
@section('content')

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h3>News</h3>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li class="active">
                        News
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="blogs-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @foreach ($news as $new)
                            <div class="col-lg-12">
                                <div class="single-blog-post">
                                    <div class="blog-img">
                                        <a href="{{ route('news.show', $new->id) }}">
                                            <img src="{{ $new->photo }}" alt=""
                                                class="img-responsive img-fullwidth"
                                                style="width: 100%; height: 320px; background-size: center; object-fit: cover;">
                                        </a>
                                    </div>

                                    <div class="blog-content">
                                        <ul>
                                            <li>
                                                <i class="bx bxs-user"></i>
                                                <a href="#">
                                                    {{ $new->author ?? '' }}
                                                </a>
                                            </li>
                                        </ul>

                                        <h3>
                                            <a href="{{ route('news.show', $new->id) }}">
                                                {{ $new->title_eng ?? '' }}
                                            </a>
                                        </h3>

                                        <p>
                                            {{ Str::limit($new->description_eng, 200) }}
                                        </p>

                                        <a href="{{ route('news.show', $new->id) }}" class="read-more">
                                            Learn More
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <hr style="border-top: 2px dotted green;">
                            </div>
                        @endforeach
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
