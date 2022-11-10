<!DOCTYPE html>
<html lang="en">
<head>
    @include('custom.partials.panel.header')
</head>
<body id="page-top">
    <div id="wrapper">
        @include('custom.partials.panel.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('custom.partials.panel.navbar')
                @yield('content')
            </div>
            @include('custom.partials.panel.copyright')
        </div>
    </div>
    @include('custom.partials.panel.footer')
</body>
</html>