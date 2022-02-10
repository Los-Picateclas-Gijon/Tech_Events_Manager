<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Profile Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

    <body>

        <x-header />

        <x-event-create />

        <x-footer />

    </body>

</html>
