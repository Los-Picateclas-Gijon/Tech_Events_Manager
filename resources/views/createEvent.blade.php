<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Profile Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

    <body>

        <x-header />

        <x-create />

        <x-footer />

    </body>

</html>
