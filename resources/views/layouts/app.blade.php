<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roduan Kareem Aldeen @yield('title')</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/bulma.min.css') }}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>

<body>
    @include('partials.header', ['logo' => 'Roduan Kareem Aldeen'])
    @yield('content')
    @include('partials.footer')
</body>

</html>
