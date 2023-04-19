<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Metas -->
    <title>Cloapedia - Stylish Magazine Blog Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    @yield('after-css')
@include('guest.html.css')
    @yield('before-css')

{{--<!--[if lt IE 9]>--}}
{{--    <script src="/assets/js/html5shiv.min.js"></script>--}}
{{--    <script src="/assets/js/respond.min.js"></script>--}}
{{--    <![endif]--></head>--}}
<body>
@include('guest.html.preloader')
<div id="wrapper">

    @include('guest.html.collapse')
    @include('guest.html.topbar-section')
    @include('guest.html.header-section')
    @include('guest.html.header')

    @yield('content-header')


    {{--    @include('guest.html.sliderSection')--}}

    @yield('main-content')


    @include('guest.html.footer')

</div>
@yield('after-js')
@include('guest.html.js')
@yield('before-js')

</body>
</html>
