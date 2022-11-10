<!DOCTYPE html>
<html lang="en">
<head>
    @include('custom.partials.auth.header')
</head>
<body class="bg-gradient-primary">
    <div class="container">
        @yield('content')
    </div>
    @include('custom.partials.auth.footer')
</body>

</html>