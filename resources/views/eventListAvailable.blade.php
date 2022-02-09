<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event List Available</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body>
        <x-header />

        <x-event-list :events="$events"/>

        <x-footer />
    </body>
</html>