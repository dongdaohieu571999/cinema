@INCLUDE('website.layout.head')

@if(session()->has('user'))
    @INCLUDE('website.layout.navbar-log')
@else
    @INCLUDE('website.layout.navbar-unlog')
@endif


<div class="main-panel">
    <div class="content-wrapper">
        @yield('content')
    </div>

@INCLUDE('website.layout.footer')

