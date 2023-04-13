<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>News 24 - Free News Website Templates</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Bootstrap Ecommerce Template" name="keywords">
    <meta content="Bootstrap Ecommerce Template Free Download" name="description">
    @yield('after-css')
@extends('guest.html.css')
    @yield('before-css')

{{--<!--[if lt IE 9]>--}}
{{--    <script src="/assets/js/html5shiv.min.js"></script>--}}
{{--    <script src="/assets/js/respond.min.js"></script>--}}
{{--    <![endif]--></head>--}}
<body>
    @include('guest.html.header')
    @yield('content-header')


    {{--    @include('guest.html.sliderSection')--}}

    @yield('main-content')
    @include('guest.html.footer')


@yield('after-js')

@extends('guest.html.js')
@yield('before-js')

</body>
</html>
