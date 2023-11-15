<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task @yield('title')</title>

    @include('front.user.includes.css')
</head>
<body>

{{--@include('front.includes.header')--}}

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task @yield('title')</title>

    @include('front.user.includes.css')
</head>
<body>

@include('front.user.includes.header')

@include('front.user.includes.menu')

@yield('body')

@include('front.user.includes.footer')

@include('front.user.includes.js')
</body>
</html>

