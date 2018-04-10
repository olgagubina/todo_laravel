<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    @include ('layouts.nav') {{-- including static partials--}}
    @yield('content') {{--to be extended in other views--}}
</body>
</html>