<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Tech Events Manager</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <x-header />
    <h1>Eventos destacados</h1>
    <x-slider />
    <x-cards />
    <x-cards-past/>
    <x-footer />
</body>
