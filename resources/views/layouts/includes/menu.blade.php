<div class="konnect-info">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-8 hidden-xs">
                <ul>
                    <li>
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        <a href="mailto:info@greenpalaceoasismm.com">
                            info@greenpalaceoasismm.com
                        </a>
                    </li>
                    <li class="li-last">
                        <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                        <a href="tel:(040) 123-4567">
                            (040) 123-4567
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-6 col-sm-4">
                <ul class="konnect-float-right">
                    <li class="li-last">
                        <a target="_blank" href="#">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a target="_blank" href="#">
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                        </a>
                        <a target="_blank" href="#">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a target="_blank" href="#">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Main Navigation + LOGO Area -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <!-- Responsive Menu -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <!-- Logo -->
            <a class="navbar-brand page-scroll logo-color">
                <img src="{{ asset('data/company_data/logo.jpeg') }}" alt="logo" width="70">
            </a>
        </div>

        <!-- Menu Items -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                <li class="active">
                    <a href="{{ route('home') }}">
                        Home
                    </a>
                </li>


                <li>
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                        About Us
                        <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu animated fadeIn">

                        <li>
                            <a href="{{ route('about.index') }}" class="nav-link active">
                                Company Profile
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('director_message.index') }}" class="nav-link active">
                                MD's Message
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('statement.index') }}" class="nav-link active">
                                Vision & Mission
                            </a>
                        </li>

                        <li hidden>
                            <a href="{{ asset('data/royal_gate.pdf') }}" class="nav-link active" target="_blank">
                                Company Brochure
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('organization.index') }}" class="nav-link active">
                                Our Organization
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('team.index') }}" class="nav-link active">
                                Our Team
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('partners.index') }}" class="nav-link active">
                                Our Partners
                            </a>
                        </li>

                    </ul>
                </li>


                <li>
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                        Manpower Services
                        <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                    </a>

                    <ul class="dropdown-menu animated fadeIn">
                        <li>
                            <a href="{{ route('country.index') }}" class="nav-link active">
                                Countries We Serve
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('recruitment_services.index') }}" class="nav-link active">
                                Our Recruitment Services
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('milestones.index') }}" class="nav-link active">
                                Milestones
                            </a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                        Application
                        <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                    </a>

                    <ul class="dropdown-menu animated fadeIn">
                        <li>
                            <a href="{{ route('cv.index') }}">
                                Submit CV
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('employer.index') }}">
                                Employer Form
                            </a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="{{ route('news.index') }}">
                        Blog
                    </a>
                </li>

                <li>
                    <a href="{{ route('activities.index') }}">
                        Activities
                    </a>
                </li>


                <li>
                    <a href="{{ route('contact.index') }}">
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
