<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('public/favicon.png') }}">

    <title>{{ config('app.name') }}</title>

</head>

<body>

    @livewire('mail.header')

    <main>
        @yield('content')
    </main>

    @livewire('mail.footer')

</body>

</html>