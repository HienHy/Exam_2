<!DOCTYPE html>
<html>
<head>
    <title>NewsFeed</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('after-css')
@extends('guest.html.css')
    @yield('before-css')

<!--[if lt IE 9]>
    <script src="/assets/js/html5shiv.min.js"></script>
    <script src="/assets/js/respond.min.js"></script>
    <![endif]--></head>
<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
    @include('guest.html.header')
    @include('guest.html.nav')
    @include('guest.html.newsSection')


    @include('guest.html.sliderSection')
@yield('main-content')
    @include('guest.html.footer')


</div>
@yield('after-js')

@extends('guest.html.js')
@yield('before-js')

</body>
</html>
