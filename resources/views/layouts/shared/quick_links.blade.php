<div class="sidebar-widget categories">
    <h3>Quick Links</h3>

    <ul class="navbar-nav m-auto">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link active">
                @if (session()->get('lang') == 'jp')
                    家
                @elseif (session()->get('lang') == 'mm')
                    ပင်မစာမျက်နှာ
                @else
                    Home
                @endif
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('about.index') }}" class="nav-link active">
                @if (session()->get('lang') == 'jp')
                    会社概要
                @elseif (session()->get('lang') == 'mm')
                    ကုမ္ပဏီအကြောင်း
                @else
                    Company Profile
                @endif
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('director_message.index') }}" class="nav-link active">
                @if (session()->get('lang') == 'jp')
                    ディレクターメッセージ
                @elseif (session()->get('lang') == 'mm')
                    Director Message
                @else
                    Director Message
                @endif
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('statement.index') }}" class="nav-link active">
                @if (session()->get('lang') == 'jp')
                    ビジョンとミッション
                @elseif (session()->get('lang') == 'mm')
                    Vision & Misstion
                @else
                    Vision & Misstion
                @endif
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('process_chart.index') }}" class="nav-link active">
                @if (session()->get('lang') == 'jp')
                    プロセスチャート
                @elseif (session()->get('lang') == 'mm')
                    Process Chart
                @else
                    Process Chart
                @endif
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ asset('data/royal_gate.pdf') }}" class="nav-link active" target="_blank">
                @if (session()->get('lang') == 'jp')
                    会社のパンフレット
                @elseif (session()->get('lang') == 'mm')
                    Company Brochure
                @else
                    Company Brochure
                @endif
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('organization.index') }}" class="nav-link active">
                @if (session()->get('lang') == 'jp')
                    私たちの組織図
                @elseif (session()->get('lang') == 'mm')
                    Our Organization Chart
                @else
                    Our Organization Chart
                @endif
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('team.index') }}" class="nav-link active">
                @if (session()->get('lang') == 'jp')
                    私たちのチーム
                @elseif (session()->get('lang') == 'mm')
                    Our Team
                @else
                    Our Team
                @endif
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('partners.index') }}" class="nav-link active">
                @if (session()->get('lang') == 'jp')
                    私たちのパートナー
                @elseif (session()->get('lang') == 'mm')
                    Our Partners
                @else
                    Our Partners
                @endif
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('country.index') }}" class="nav-link active">
                @if (session()->get('lang') == 'jp')
                    国
                @elseif (session()->get('lang') == 'mm')
                    Countries We Serve
                @else
                    Countries We Serve
                @endif
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('recruitment_services.index') }}" class="nav-link active">
                @if (session()->get('lang') == 'jp')
                    私たちの採用サービス
                @elseif (session()->get('lang') == 'mm')
                    Our Recruitment Services
                @else
                    Our Recruitment Services
                @endif
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('milestones.index') }}" class="nav-link active">
                @if (session()->get('lang') == 'jp')
                    マイルストーン
                @elseif (session()->get('lang') == 'mm')
                    Milestones
                @else
                    Milestones
                @endif
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('cv.index') }}" class="nav-link active">
                @if (session()->get('lang') == 'jp')
                    履歴書を提出する
                @elseif (session()->get('lang') == 'mm')
                    Submit CV
                @else
                    Submit CV
                @endif
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('employer.index') }}" class="nav-link active">
                @if (session()->get('lang') == 'jp')
                    雇用者フォーム
                @elseif (session()->get('lang') == 'mm')
                    Employer Form
                @else
                    Employer Form
                @endif
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('news.index') }}" class="nav-link active">
                @if (session()->get('lang') == 'jp')
                    ニュース
                @elseif (session()->get('lang') == 'mm')
                    News
                @else
                    News
                @endif
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('activities.index') }}" class="nav-link active">
                @if (session()->get('lang') == 'jp')
                    活動
                @elseif (session()->get('lang') == 'mm')
                    Activities
                @else
                    Activities
                @endif
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('contact.index') }}" class="nav-link active">
                @if (session()->get('lang') == 'jp')
                    お問い合わせ
                @elseif (session()->get('lang') == 'mm')
                    ဆက်သွယ်ရန်
                @else
                    Contact Us
                @endif
            </a>
        </li>
    </ul>
</div>
