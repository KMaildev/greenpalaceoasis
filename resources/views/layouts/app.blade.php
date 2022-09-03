@include('layouts.includes.header')
@include('layouts.includes.menu')

@if (request()->route()->getName() == 'home')
    @include('layouts.includes.slider_v2')
@endif

@include('layouts.includes.alert')
@yield('content')

@include('layouts.includes.footer')
