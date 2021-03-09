<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{--Metas Descriptions--}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="We are a team of web developers from Romania, more precisely from Bucharest. With a cumulative experience of over 10 years and hundreds of successfully completed projects." />
    <meta name="keywords" content="Laravel, Web Development, Web Design, Vue.js, Freelance" />
    <meta name="author" content="Fast-Deploy" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fast Deploy | Web Development Agency</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="leading-normal tracking-normal">

    {{--Content--}}
    <div id="app">
        {{--Header--}}
        <header-component></header-component>

        {{--Content--}}
        @yield('content')

        {{--Footer--}}
        <footer-component></footer-component>
    </div>

    {{-- Import Vue App --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
