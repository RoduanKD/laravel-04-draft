<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->isLocale('ar') ? 'rtl' : 'ltr' }}"
    class="@stack('html-class')">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>

    {{-- Scripts --}}
    @stack('head-scripts')

    {{-- Fonts --}}
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    {{-- Styles --}}
    @if (app()->isLocale('ar'))
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma-rtl.min.css">
    @else
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @endif
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    @stack('head-after')
</head>

<body>
    @include('partials.header', ['logo' => 'Roduan Kareem Aldeen'])
    @yield('content')
    @include('partials.footer')
    @stack('bottom')
</body>

</html>
