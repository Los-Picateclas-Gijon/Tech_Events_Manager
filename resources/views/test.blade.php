<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Tech Events Manager</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <x-header />
    <x-slider />
    <x-cards />
    <x-cards />
    <x-footer />
</body>