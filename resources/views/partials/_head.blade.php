<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel Blog | @yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->

{{--        <script src=" {{ mix('/js/app.js') }}"></script>--}}
{{--        <script src="{{ asset('js/app.js') }}" defer></script>--}}
        @include('partials._styles')

        {{ Html::style('css/styles.css')}}

        @yield('stylesheets')
    </head>
