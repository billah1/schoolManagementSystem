 <!doctype html>
<html lang="en">
<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>@yield('title')</title>
    @include('frontend.includes.link')

</head>
<body>

@include('frontend.includes.header')
@include('frontend.includes.navbar')

@yield('body')

@include('frontend.includes.footer')
@include('frontend.includes.js');

</body>
</html>
