<div class="sidebar-widget recent-post">
    <h3 class="widget-title">Recent News</h3>
    <ul>
        @foreach ($recents_news as $recents_new)
            <div class="latest-blog-single col-xs-12">
                <a href="{{ route('news.show', $recents_new->id) }}">
                    <div class="latest-blog-single-img">
                        <img src="{{ $recents_new->photo }}" alt="post-thumb">
                    </div>
                    <div class="latest-blog-single-info">
                        <h4>
                            {{ $recents_new->title_eng ?? '' }}
                        </h4>
                    </div>
                </a>
            </div>
        @endforeach
    </ul>
</div>
