<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('public/favicon.png') }}">

    <title>{{ config('app.name') }} - {{ $title ?? 'Laravel' }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/coming_soon.css') }}">
</head>

<body>

    <div class="bgimg">
        <div class="topleft">
            <p><a href="{{ route('page.index') }}"><img src="{{ asset('public/img/logo.png') }}"
                        alt="{{ config('app.name') }}" class="logo-xs"></a></p>
        </div>
        <div class="middle">
            <h1>Nous Arrivons Bientôt</h1>
            <hr>
            <p id="demo">35 days</p>
            <p>
                <a href="{{ route('store.index') }}">BOUTIQUE</a>
            </p>
        </div>
        <div class="bottomleft">

        </div>
    </div>

    <script type="text/javascript" src="{{ asset('public/js/coming_soon.js') }}"></script>

</body>

</html>