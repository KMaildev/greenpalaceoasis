<div class="sidebar-widget recent-post">
    <h3 class="widget-title">Recent News</h3>
    <ul>
        @foreach ($recents_news as $recents_new)
            <li>
                <a href="{{ route('news.show', $recents_new->id) }}">
                    {{ $recents_new->title_eng ?? '' }}
                    <img src="{{ $recents_new->photo }}" alt=""
                        style="width: 25%; height: 50px; background-size: center; object-fit: cover;">
                </a>
                
            </li>
        @endforeach
    </ul>
</div>
