<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="Beer Sojourner">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <meta name="theme-color" content="#101010" />

        <!-- <link rel="shortcut icon" href="/assets/favicons/favicon.ico">
        <link rel="icon" sizes="16x16 32x32 64x64" href="/assets/favicons/favicon.ico">
        <link rel="icon" type="image/png" sizes="196x196" href="/assets/favicons/favicon-192.png">
        <link rel="icon" type="image/png" sizes="160x160" href="/assets/favicons/favicon-160.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicons/favicon-96.png">
        <link rel="icon" type="image/png" sizes="64x64" href="/assets/favicons/favicon-64.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16.png">
        <link rel="apple-touch-icon" href="/assets/favicons/favicon-57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicons/favicon-114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicons/favicon-72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicons/favicon-144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicons/favicon-60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicons/favicon-120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicons/favicon-76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicons/favicon-152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/favicon-180.png">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="/assets/favicons/favicon-144.png">
        <meta name="msapplication-config" content="/assets/favicons/browserconfig.xml"> -->


        <title>Splice | {!! $seo_title !!}</title>
        <meta name="description" content="{!! $seo_description !!}">
        <!-- Fonts -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

        @if(parse_url(config('app.url'), PHP_URL_SCHEME) === 'https')
            <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
            <script src="{{ secure_asset('js/app.js') }}" defer></script>
        @else
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <script src="{{ asset('js/app.js') }}" defer></script>
        @endif

    </head>
    
    <body style="overflow-x: hidden;">
        {{-- @include('nav') --}}

        <main id="app" class="container-fluid">
            <div id="scroll-container">
                @yield('content')
            </div>
        </main>
        {{-- @include('footer') --}}