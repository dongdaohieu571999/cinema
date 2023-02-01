@INCLUDE('admin2.layout.head')

@INCLUDE('admin2.layout.navbar')

@INCLUDE('admin2.layout.sidebar')

<div class="main-panel">
    <div class="content-wrapper">
        @yield('content')
    </div>

@INCLUDE('admin2.layout.footer')

@INCLUDE('admin2.layout.js')