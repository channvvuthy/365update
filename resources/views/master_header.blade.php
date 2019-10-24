<!DOCTYPE html>
<html lang="en">
<head>
    <title>365daymarket</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link href="{{asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/slick-1.8.0/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">
    @yield('style')
    <link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">

</head>
<style>
    @font-face {
        font-family: 'trench100free';
        src: url("{{asset('fonts/trench100free.ttf')}}")
    }
</style>
@yield('body')
@yield('footer')
@yield('script')