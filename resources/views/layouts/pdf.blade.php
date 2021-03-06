<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }} - PDF</title>

    <style type="text/css">
        .page-break {
            /*page-break-before: always;*/
            page-break-after: always;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table.table1 th,
        table.table1 td {
            width: 50%;
            border: 1px solid #222;
            padding: 10px;
        }

        table.table1 thead th {
            text-align: center;
        }

        table.table2 th,
        table.table2 td {
            width: 50%;
            border: 1px solid #222;
            padding: 10px;
        }

        table.table2 thead th {
            text-align: center;
        }
    </style>
</head>

<body>

    @livewire('pdf.header')

    <main>
        @yield('body')
    </main>

    @livewire('pdf.footer')

</body>

</html>