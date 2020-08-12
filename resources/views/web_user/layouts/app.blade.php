<!DOCTYPE html>
<html lang="en">
<head>
    @include('web_user.layouts.header')
</head>
<body>
    @include('web_user.layouts.nav_bar')
    @yield('content')
    @include('web_user.layouts.footer')
</body>
</html>
