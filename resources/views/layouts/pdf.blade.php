<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }} - PDF</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/pdf.css') }}">
</head>

<body>

    @livewire('pdf.header')

    <main>
        @yield('body')
    </main>

    @livewire('pdf.footer')

</body>

</html>